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

/* emails/psychiatre_registration.html.twig */
class __TwigTemplate_674d0f7f0a67842155c2f4499a7e29f7 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/psychiatre_registration.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/psychiatre_registration.html.twig"));

        // line 2
        yield "
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Vos informations de connexion - HopeNest</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f7fafc;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: 1px solid #e2e8f0;
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #e2e8f0;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #0056b3;
            font-size: 28px;
            margin: 0;
            font-weight: bold;
        }
        .content {
            margin-bottom: 20px;
        }
        .content p {
            margin: 0 0 15px;
            font-size: 16px;
            color: #4a5568;
        }
        .content ul {
            list-style-type: none;
            padding: 0;
            margin: 0 0 20px;
        }
        .content ul li {
            margin-bottom: 10px;
            font-size: 16px;
            color: #4a5568;
        }
        .content ul li strong {
            color: #2d3748;
        }
        .button {
            display: inline-block;
            margin: 20px 0;
            padding: 12px 24px;
            background-color: #0056b3;
            color: #ffffff !important;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #718096;
            text-align: center;
            border-top: 1px solid #e2e8f0;
            padding-top: 20px;
        }
        .footer a {
            color: #0056b3;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <!-- En-tête -->
        <div class=\"header\">
            <h1>Bienvenue sur HopeNest</h1>
        </div>

        <!-- Contenu principal -->
        <div class=\"content\">
            <p>Bonjour,</p>
            <p>Votre compte a été créé avec succès sur notre plateforme <strong>HopeNest</strong>.</p>
            <p>Voici vos informations de connexion :</p>
            <ul>
                <li><strong>Email :</strong> ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 102, $this->source); })()), "html", null, true);
        yield "</li>
                <li><strong>Mot de passe :</strong> ";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["password"]) || array_key_exists("password", $context) ? $context["password"] : (function () { throw new RuntimeError('Variable "password" does not exist.', 103, $this->source); })()), "html", null, true);
        yield "</li>
            </ul>
            <p>Pour des raisons de sécurité, nous vous recommandons de changer votre mot de passe après votre première connexion.</p>
            <p>Cliquez sur le bouton ci-dessous pour accéder à votre compte :</p>
            <a href=\"https://127.0.0.1:8000/login\" class=\"button\">Se connecter à HopeNest</a>
            <p>Si vous avez des questions, n'hésitez pas à nous contacter à <a href=\"mailto:support@HopeNest.com\">support@HopeNest.com</a>.</p>
        </div>

        <!-- Pied de page -->
        <div class=\"footer\">
            <p>Si vous n'avez pas créé ce compte, veuillez nous contacter immédiatement à <a href=\"mailto:support@HopeNest.com\">support@HopeNest.com</a>.</p>
            <p>&copy; ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " HopeNest. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/psychiatre_registration.html.twig";
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
        return array (  168 => 114,  154 => 103,  150 => 102,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/emails/medecin_registration.html.twig #}

<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Vos informations de connexion - HopeNest</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f7fafc;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border: 1px solid #e2e8f0;
        }
        .header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 2px solid #e2e8f0;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #0056b3;
            font-size: 28px;
            margin: 0;
            font-weight: bold;
        }
        .content {
            margin-bottom: 20px;
        }
        .content p {
            margin: 0 0 15px;
            font-size: 16px;
            color: #4a5568;
        }
        .content ul {
            list-style-type: none;
            padding: 0;
            margin: 0 0 20px;
        }
        .content ul li {
            margin-bottom: 10px;
            font-size: 16px;
            color: #4a5568;
        }
        .content ul li strong {
            color: #2d3748;
        }
        .button {
            display: inline-block;
            margin: 20px 0;
            padding: 12px 24px;
            background-color: #0056b3;
            color: #ffffff !important;
            text-decoration: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #718096;
            text-align: center;
            border-top: 1px solid #e2e8f0;
            padding-top: 20px;
        }
        .footer a {
            color: #0056b3;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class=\"container\">
        <!-- En-tête -->
        <div class=\"header\">
            <h1>Bienvenue sur HopeNest</h1>
        </div>

        <!-- Contenu principal -->
        <div class=\"content\">
            <p>Bonjour,</p>
            <p>Votre compte a été créé avec succès sur notre plateforme <strong>HopeNest</strong>.</p>
            <p>Voici vos informations de connexion :</p>
            <ul>
                <li><strong>Email :</strong> {{ email }}</li>
                <li><strong>Mot de passe :</strong> {{ password }}</li>
            </ul>
            <p>Pour des raisons de sécurité, nous vous recommandons de changer votre mot de passe après votre première connexion.</p>
            <p>Cliquez sur le bouton ci-dessous pour accéder à votre compte :</p>
            <a href=\"https://127.0.0.1:8000/login\" class=\"button\">Se connecter à HopeNest</a>
            <p>Si vous avez des questions, n'hésitez pas à nous contacter à <a href=\"mailto:support@HopeNest.com\">support@HopeNest.com</a>.</p>
        </div>

        <!-- Pied de page -->
        <div class=\"footer\">
            <p>Si vous n'avez pas créé ce compte, veuillez nous contacter immédiatement à <a href=\"mailto:support@HopeNest.com\">support@HopeNest.com</a>.</p>
            <p>&copy; {{ \"now\"|date(\"Y\") }} HopeNest. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>", "emails/psychiatre_registration.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\emails\\psychiatre_registration.html.twig");
    }
}
