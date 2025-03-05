<?php 
namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\SecurityRequestAttributes;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

class SecurityAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';
    
    private $entityManager;

    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
        EntityManagerInterface $entityManager
    ) {
        $this->entityManager = $entityManager;
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->getPayload()->getString('email');
        $request->getSession()->set(SecurityRequestAttributes::LAST_USERNAME, $email);

        $userBadge = new UserBadge($email, function($userIdentifier) {
            $user = $this->entityManager->getRepository(User::class)
                ->findOneBy(['email' => $userIdentifier]);

            if (!$user) {
                throw new CustomUserMessageAuthenticationException('User not found.');
            }

            if ($user->getConfirmationToken() !== null) {
                throw new CustomUserMessageAuthenticationException(
                    'Please confirm your email address before logging in.'
                );
            }

            if (false !== $user->getIsBlocked()) {
                if ($user->getIsBlocked()) {
                    throw new CustomUserMessageAuthenticationException(
                        'Your account is banned and cannot log in.'
                    );
                }
            }

            return $user;
        });

        return new Passport(
            $userBadge,
            new PasswordCredentials($request->getPayload()->getString('password')),
            [
                new CsrfTokenBadge('authenticate', $request->getPayload()->getString('_csrf_token')),
                new RememberMeBadge(),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        // Use the TargetPathTrait's functionality to handle the redirect
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }

        $user = $token->getUser();
        if (false !== $user->getIsBlocked()) {
            return new RedirectResponse($this->urlGenerator->generate('app_block'));
        }
        
        if (null !== $user->getSecret()) {
            return new RedirectResponse($this->urlGenerator->generate('app_authenticator_verify'));
        }

        // Custom redirections based on roles
        if(in_array('ROLE_ADMIN', $user->getRoles(), true)){
            return new RedirectResponse($this->urlGenerator->generate('app_admin'));
        }
        if(in_array('ROLE_PATIENT', $user->getRoles(), true)){
            return new RedirectResponse($this->urlGenerator->generate('app_home'));
        }
        if(in_array('ROLE_FOURNISSEUR', $user->getRoles(), true)){
            return new RedirectResponse($this->urlGenerator->generate('app_fournisseur'));
        }
        if(in_array('ROLE_PSYCHIATRE', $user->getRoles(), true)){
            return new RedirectResponse($this->urlGenerator->generate('app_psychiatre'));
        }

        return new RedirectResponse($this->urlGenerator->generate('app_home'));
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
