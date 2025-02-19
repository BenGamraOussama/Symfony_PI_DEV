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

/* reset_password/email.html.twig */
class __TwigTemplate_e6b1f73a87d14c63f6ed9adfcc533393 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

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
            </span>Hi! ";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 98, $this->source); })()), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 98, $this->source); })()), "html", null, true);
        yield "<br/><br/>
            <p>To reset your password, please visit the following link : <strong>Now!</strong></p><br/>
            <p>Cliquez sur le bouton ci-dessous pour reset votre mot de passe :</p>
            <a href=\"";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_reset_password", ["token" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 101, $this->source); })()), "token", [], "any", false, false, false, 101)]), "html", null, true);
        yield "\" class=\"button\">Reset Password</a><br>
            <strong>This link will expire in ";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 102, $this->source); })()), "expirationMessageKey", [], "any", false, false, false, 102), CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 102, $this->source); })()), "expirationMessageData", [], "any", false, false, false, 102), "ResetPasswordBundle"), "html", null, true);
        yield ".</strong>
            <p>Si vous avez des questions, n'hésitez pas à nous contacter à <a href=\"mailto:support@HopeNest.com\">support@HopeNest.com</a>.</p>
        </div>

        <!-- Pied de page -->
        <div class=\"footer\">
            <p>Si vous avez un probleme, veuillez nous contacter immédiatement à <a href=\"mailto:support@HopeNest.com\">support@HopeNest.com</a>.</p>
            <p>&copy; ";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " HopeNest. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reset_password/email.html.twig";
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
        return array (  167 => 109,  157 => 102,  153 => 101,  146 => 98,  48 => 2,);
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
            </span>Hi! {{firstName}}{{lastName}}<br/><br/>
            <p>To reset your password, please visit the following link : <strong>Now!</strong></p><br/>
            <p>Cliquez sur le bouton ci-dessous pour reset votre mot de passe :</p>
            <a href=\"{{url('app_reset_password', {token: resetToken.token})}}\" class=\"button\">Reset Password</a><br>
            <strong>This link will expire in {{ resetToken.expirationMessageKey|trans(resetToken.expirationMessageData, 'ResetPasswordBundle') }}.</strong>
            <p>Si vous avez des questions, n'hésitez pas à nous contacter à <a href=\"mailto:support@HopeNest.com\">support@HopeNest.com</a>.</p>
        </div>

        <!-- Pied de page -->
        <div class=\"footer\">
            <p>Si vous avez un probleme, veuillez nous contacter immédiatement à <a href=\"mailto:support@HopeNest.com\">support@HopeNest.com</a>.</p>
            <p>&copy; {{ \"now\"|date(\"Y\") }} HopeNest. Tous droits réservés.</p>
        </div>
    </div>
</body>
</html>
", "reset_password/email.html.twig", "C:\\Users\\OUSSAMA BEN GAMRA\\OneDrive\\Desktop\\symfony\\symfony_pi_dev\\templates\\reset_password\\email.html.twig");
    }
}
