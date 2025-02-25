<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* security/login.html.twig */
class __TwigTemplate_6a2bd2f24475212e4889e71328cef16d extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Log in!";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "
<style>
    /*------------ Login container ------------*/
.box-area{
  width: 1332px;
  height: 595px;
  
}
/*------------ Right box ------------*/
.right-box{
  padding: 90px 50px 90px 50px;
  
}
/*------------ Custom Placeholder ------------*/
::placeholder{
  font-size: 16px;
}
.rounded-4{
  border-radius: 20px;
  
}
.rounded-5{
  border-radius: 30px;
 
}
/*------------ For small screens------------*/
@media only screen and (max-width: 768px){
   .box-area{
      margin: 0 10px;
   }
   .left-box{
      height: 100px;
      overflow: hidden;
   }
   .right-box{
      padding: 20px;
   }
}

.input-group .btn {
position: relative;
z-index: 2;
height: auto;}

#left-content{
background: #000000;
background: url('/images/logo sans back.png');
background-size: cover;
background-repeat: no-repeat;

}

#logo{
/*background: linear-gradient(to right, #014512,#00fe11,#014512); */
background: #ff8a00;
background-clip: text;
-webkit-text-fill-color: transparent;
}
a{
text-decoration: none;
}
</style>

<div class=\"container d-flex justify-content-center align-items-center min-vh-100\">
    
    <div class=\"row border rounded-5 p-3 bg-light shadow box-area\">
        
        <!-- Section gauche (peut contenir une image ou autre contenu) -->
        <div class=\"col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box\" id=\"left-content\">
            <div class=\"featured-image mb-3\">
                <!-- Insérer une image ici si nécessaire -->
            </div>
        </div> 
        
        <!-- Section droite : Formulaire de connexion -->
        <div class=\"col-md-6 right-box\">
            <div class=\"row align-items-center\">
                
                <!-- Titre de la page -->
                <div class=\"header-text mb-4 text-center\">
                    <h1 id=\"logo\"><b>Login</b></h1>
                </div>
                
                <form method=\"post\">
                    
                    <!-- Affichage des erreurs -->
                    ";
        // line 92
        if (($context["error"] ?? null)) {
            // line 93
            yield "                        <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 93), CoreExtension::getAttribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 93), "security"), "html", null, true);
            yield "</div>
                    ";
        }
        // line 95
        yield "                    
                    ";
        // line 96
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 96)) {
            // line 97
            yield "                        <div class=\"mb-3\">
                            You are logged in as ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 98), "userIdentifier", [], "any", false, false, false, 98), "html", null, true);
            yield ", 
                            <a href=\"";
            // line 99
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
                        </div>
                    ";
        }
        // line 102
        yield "                    
                    <!-- Champ Email -->
                    <div class=\"input-group mb-3\">
                        <input type=\"email\" value=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["last_username"] ?? null), "html", null, true);
        yield "\" name=\"email\" id=\"inputEmail\" 
                               class=\"form-control form-control-lg bg-light fs-6\" 
                               placeholder=\"Email\" autocomplete=\"email\" required autofocus>
                    </div>
                    
                    <!-- Champ Password -->
                    <div class=\"input-group mb-3\">
                        <input type=\"password\" name=\"password\" id=\"inputPassword\" 
                               class=\"form-control form-control-lg bg-light fs-6\" 
                               placeholder=\"Mot de passe\" autocomplete=\"current-password\" required>
                    </div>
                    
                    <!-- Jeton CSRF -->
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
                    
                    <!-- Bouton de connexion -->
                    <div class=\"input-group mb-3\">
                        <button class=\"btn btn-lg btn-success w-100 fs-6\" type=\"submit\">
                            Se connecter
                        </button>
                    </div>
                    
                    <!-- Liens de récupération -->
                    <div class=\"text-center\">
                        <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"mx-3\">Unlock account?</a>
                        <a href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\">Forgot password?</a>
                    </div>
                </form> 
            </div> 
        </div> 
    </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  223 => 130,  219 => 129,  205 => 118,  189 => 105,  184 => 102,  178 => 99,  174 => 98,  171 => 97,  169 => 96,  166 => 95,  160 => 93,  158 => 92,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "security/login.html.twig", "/home/anas/Desktop/symfony_pi_dev/templates/security/login.html.twig");
    }
}
