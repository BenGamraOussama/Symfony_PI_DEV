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

/* patient/show.html.twig */
class __TwigTemplate_e9148d8068fa85ce347ca80018f01e1f extends Template
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
        return "basePatient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/show.html.twig"));

        $this->parent = $this->loadTemplate("basePatient.html.twig", "patient/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mon Profil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <!-- Start Preloader Area -->
    <div class=\"preloader-area\">
        <div class=\"spinner\">
            <div class=\"inner\">
                <div class=\"disc\"></div>
                <div class=\"disc\"></div>
                <div class=\"disc\"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Top Header Area -->
    <div class=\"page-banner-with-full-image item-bg4\">
    <div class=\"container\">
        <div class=\"page-banner-content-two\">
            <h2>My Account</h2>
            <ul>
                <li>
                    <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a>
                </li>
                <li>Profile</li>
            </ul>
        </div>
    </div>
</div>
    <section class=\"profile-area pt-90 pb-40\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-4\">
                    <div class=\"profile-image\">
                    ";
        // line 37
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 37, $this->source); })()), "gener", [], "any", false, false, false, 37) == "female")) {
            // line 38
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/images/profile1.png"), "html", null, true);
            yield "\" alt=\"Profile Image\">
                        ";
        }
        // line 40
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 40, $this->source); })()), "gener", [], "any", false, false, false, 40) == "male")) {
            // line 41
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/images/profile2.png"), "html", null, true);
            yield "\" alt=\"Profile Image\">
                       ";
        }
        // line 43
        yield "                    </div>
                </div>

                <div class=\"col-lg-8\">
                    <div class=\"profile-content\">
                        <h2>Mon Profil</h2>
                        <p>Bienvenue sur votre page de profil. Vous pouvez gérer vos informations personnelles, vos préférences et vos activités récentes ici.</p>

                        <div class=\"profile-info\">
                            <h3>Informations Personnelles</h3>
                            <ul>
                                <li><strong>Nom:</strong> ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 54, $this->source); })()), "firstName", [], "any", false, false, false, 54), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 54, $this->source); })()), "lastName", [], "any", false, false, false, 54), "html", null, true);
        yield "</li>
                                <li><strong>Email:</strong> ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), "html", null, true);
        yield "</li>
                                <li><strong>Téléphone:</strong> +216 ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 56, $this->source); })()), "phone", [], "any", false, false, false, 56), "html", null, true);
        yield "</li>
                                <li><strong>Adresse:</strong> ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 57, $this->source); })()), "adresse", [], "any", false, false, false, 57), "html", null, true);
        yield "</li>
                            </ul>
                        </div>
                        <div class=\"profile-actions\">
                            <a href=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 61, $this->source); })()), "id", [], "any", false, false, false, 61)]), "html", null, true);
        yield "\" class=\"default-btn\">Modifier les informations</a>
                            <a href=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["patient"]) || array_key_exists("patient", $context) ? $context["patient"] : (function () { throw new RuntimeError('Variable "patient" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62)]), "html", null, true);
        yield "\" class=\"default-btn\">Changer le mot de passe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"activities-area ptb-100\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Activités Récentes</h2>
                <p>Voici un aperçu de vos activités récentes sur notre plateforme.</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-activity\">
                        <div class=\"activity-icon\">
                            <i class=\"flaticon-calendar\"></i>
                        </div>
                        <h3>Rendez-vous récents</h3>
                        <p>Vous avez eu 3 rendez-vous au cours du dernier mois.</p>
                        <a href=\"#\" class=\"read-more\">Voir les détails <i class=\"flaticon-right-arrow\"></i></a>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-activity\">
                        <div class=\"activity-icon\">
                            <i class=\"flaticon-book\"></i>
                        </div>
                        <h3>Livres achetés</h3>
                        <p>Vous avez acheté 2 livres au cours des 30 derniers jours.</p>
                        <a href=\"#\" class=\"read-more\">Voir les détails <i class=\"flaticon-right-arrow\"></i></a>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-activity\">
                        <div class=\"activity-icon\">
                            <i class=\"flaticon-chat\"></i>
                        </div>
                        <h3>Messages</h3>
                        <p>Vous avez échangé 5 messages avec votre thérapeute.</p>
                        <a href=\"#\" class=\"read-more\">Voir les détails <i class=\"flaticon-right-arrow\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Recent Activities Section -->

    <!-- Start Preferences Section -->
    <section class=\"preferences-area ptb-100\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Préférences</h2>
                <p>Personnalisez vos préférences pour une meilleure expérience utilisateur.</p>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"preferences-content\">
                        <h3>Notifications</h3>
                        <p>Gérez les notifications que vous recevez par email ou sur votre téléphone.</p>
                        <a href=\"#\" class=\"default-btn\">Modifier les préférences <i class=\"flaticon-settings\"></i></a>
                    </div>
                </div>

                <div class=\"col-lg-6\">
                    <div class=\"preferences-content\">
                        <h3>Thème</h3>
                        <p>Choisissez entre un thème clair ou sombre pour votre interface.</p>
                        <a href=\"#\" class=\"default-btn\">Changer le thème <i class=\"flaticon-paint-palette\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Preferences Section -->

    <!-- Start Footer Area -->
    <!-- End Footer Area -->

    <!-- Jquery Slim JS -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "patient/show.html.twig";
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
        return array (  191 => 62,  187 => 61,  180 => 57,  176 => 56,  172 => 55,  166 => 54,  153 => 43,  147 => 41,  144 => 40,  138 => 38,  136 => 37,  121 => 25,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePatient.html.twig' %}

{% block title %}Mon Profil{% endblock %}

{% block body %}
    <!-- Start Preloader Area -->
    <div class=\"preloader-area\">
        <div class=\"spinner\">
            <div class=\"inner\">
                <div class=\"disc\"></div>
                <div class=\"disc\"></div>
                <div class=\"disc\"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader Area -->

    <!-- Start Top Header Area -->
    <div class=\"page-banner-with-full-image item-bg4\">
    <div class=\"container\">
        <div class=\"page-banner-content-two\">
            <h2>My Account</h2>
            <ul>
                <li>
                    <a href=\"{{ path('app_home')}}\">Home</a>
                </li>
                <li>Profile</li>
            </ul>
        </div>
    </div>
</div>
    <section class=\"profile-area pt-90 pb-40\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-4\">
                    <div class=\"profile-image\">
                    {% if patient.gener == 'female' %}
                        <img src=\"{{ asset('assetsP/images/profile1.png')}}\" alt=\"Profile Image\">
                        {% endif %}
                    {% if patient.gener == 'male' %}
                        <img src=\"{{ asset('assetsP/images/profile2.png')}}\" alt=\"Profile Image\">
                       {% endif %}
                    </div>
                </div>

                <div class=\"col-lg-8\">
                    <div class=\"profile-content\">
                        <h2>Mon Profil</h2>
                        <p>Bienvenue sur votre page de profil. Vous pouvez gérer vos informations personnelles, vos préférences et vos activités récentes ici.</p>

                        <div class=\"profile-info\">
                            <h3>Informations Personnelles</h3>
                            <ul>
                                <li><strong>Nom:</strong> {{ patient.firstName }} {{ patient.lastName }}</li>
                                <li><strong>Email:</strong> {{ patient.email }}</li>
                                <li><strong>Téléphone:</strong> +216 {{ patient.phone }}</li>
                                <li><strong>Adresse:</strong> {{ patient.adresse }}</li>
                            </ul>
                        </div>
                        <div class=\"profile-actions\">
                            <a href=\"{{ path('app_profile_edit', {'id': patient.id}) }}\" class=\"default-btn\">Modifier les informations</a>
                            <a href=\"{{ path('app_profile_edit', {'id': patient.id}) }}\" class=\"default-btn\">Changer le mot de passe</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"activities-area ptb-100\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Activités Récentes</h2>
                <p>Voici un aperçu de vos activités récentes sur notre plateforme.</p>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-activity\">
                        <div class=\"activity-icon\">
                            <i class=\"flaticon-calendar\"></i>
                        </div>
                        <h3>Rendez-vous récents</h3>
                        <p>Vous avez eu 3 rendez-vous au cours du dernier mois.</p>
                        <a href=\"#\" class=\"read-more\">Voir les détails <i class=\"flaticon-right-arrow\"></i></a>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-activity\">
                        <div class=\"activity-icon\">
                            <i class=\"flaticon-book\"></i>
                        </div>
                        <h3>Livres achetés</h3>
                        <p>Vous avez acheté 2 livres au cours des 30 derniers jours.</p>
                        <a href=\"#\" class=\"read-more\">Voir les détails <i class=\"flaticon-right-arrow\"></i></a>
                    </div>
                </div>

                <div class=\"col-lg-4 col-md-6\">
                    <div class=\"single-activity\">
                        <div class=\"activity-icon\">
                            <i class=\"flaticon-chat\"></i>
                        </div>
                        <h3>Messages</h3>
                        <p>Vous avez échangé 5 messages avec votre thérapeute.</p>
                        <a href=\"#\" class=\"read-more\">Voir les détails <i class=\"flaticon-right-arrow\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Recent Activities Section -->

    <!-- Start Preferences Section -->
    <section class=\"preferences-area ptb-100\">
        <div class=\"container\">
            <div class=\"section-title\">
                <h2>Préférences</h2>
                <p>Personnalisez vos préférences pour une meilleure expérience utilisateur.</p>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-6\">
                    <div class=\"preferences-content\">
                        <h3>Notifications</h3>
                        <p>Gérez les notifications que vous recevez par email ou sur votre téléphone.</p>
                        <a href=\"#\" class=\"default-btn\">Modifier les préférences <i class=\"flaticon-settings\"></i></a>
                    </div>
                </div>

                <div class=\"col-lg-6\">
                    <div class=\"preferences-content\">
                        <h3>Thème</h3>
                        <p>Choisissez entre un thème clair ou sombre pour votre interface.</p>
                        <a href=\"#\" class=\"default-btn\">Changer le thème <i class=\"flaticon-paint-palette\"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Preferences Section -->

    <!-- Start Footer Area -->
    <!-- End Footer Area -->

    <!-- Jquery Slim JS -->
{% endblock %}
", "patient/show.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\patient\\show.html.twig");
    }
}
