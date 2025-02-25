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

/* produit/show.html.twig */
class __TwigTemplate_479cb6cf8ee9875366d3c74e1081aea3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/show.html.twig"));

        $this->parent = $this->loadTemplate("basePatient.html.twig", "produit/show.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <!-- Start Search Layout -->
    <div class=\"search-overlay\">
        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"search-overlay-layer\"></div>
                <div class=\"search-overlay-layer\"></div>
                <div class=\"search-overlay-layer\"></div>

                <div class=\"search-overlay-close\">
                    <span class=\"search-overlay-close-line\"></span>
                    <span class=\"search-overlay-close-line\"></span>
                </div>

                <div class=\"search-overlay-form\">
                    <form>
                        <input type=\"text\" class=\"input-search\" placeholder=\"Search here...\">
                        <button type=\"submit\"><i class='flaticon-search'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Layout -->

    <!-- Start Page Banner Area -->
    <div class=\"page-banner-with-full-image\">
        <div class=\"container\">
            <div class=\"page-banner-content-two\">
                <h2>Détails du Produit</h2>
                <ul>
                    <li><a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li><a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index");
        yield "\">Produits</a></li>
                    <li>Détails</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Product Detail Area -->
    <section class=\"product-detail-area ptb-100\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Product Image (optional) -->
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"product-detail-image\">
                        <img src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 50, $this->source); })()), "image", [], "any", false, false, false, 50))), "html", null, true);
        yield "\" alt=\"Product Image\" class=\"img-fluid rounded shadow-lg\">
                    </div>
                </div>

                <!-- Product Name and Description -->
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"product-detail-content\">
                        <!-- Product Name -->
                        <h3 class=\"product-name text-center\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 58, $this->source); })()), "nom", [], "any", false, false, false, 58), "html", null, true);
        yield "</h3>

                        <!-- Product Description -->
                        <div class=\"product-description mt-4\">
                            <p>";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 62, $this->source); })()), "description", [], "any", false, false, false, 62), "html", null, true);
        yield "</p>
                        </div>

                        <!-- Back Button -->
                        <div class=\"product-actions mt-4 text-center\">
                            <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index_patient");
        yield "\" class=\"btn btn-outline-secondary btn-lg\">Retour à la liste des produits</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Detail Area -->
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
        return "produit/show.html.twig";
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
        return array (  156 => 67,  148 => 62,  141 => 58,  130 => 50,  112 => 35,  108 => 34,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePatient.html.twig' %}

{% block body %}
    <!-- Start Search Layout -->
    <div class=\"search-overlay\">
        <div class=\"d-table\">
            <div class=\"d-table-cell\">
                <div class=\"search-overlay-layer\"></div>
                <div class=\"search-overlay-layer\"></div>
                <div class=\"search-overlay-layer\"></div>

                <div class=\"search-overlay-close\">
                    <span class=\"search-overlay-close-line\"></span>
                    <span class=\"search-overlay-close-line\"></span>
                </div>

                <div class=\"search-overlay-form\">
                    <form>
                        <input type=\"text\" class=\"input-search\" placeholder=\"Search here...\">
                        <button type=\"submit\"><i class='flaticon-search'></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Search Layout -->

    <!-- Start Page Banner Area -->
    <div class=\"page-banner-with-full-image\">
        <div class=\"container\">
            <div class=\"page-banner-content-two\">
                <h2>Détails du Produit</h2>
                <ul>
                    <li><a href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li><a href=\"{{ path('produit_index') }}\">Produits</a></li>
                    <li>Détails</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Product Detail Area -->
    <section class=\"product-detail-area ptb-100\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Product Image (optional) -->
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"product-detail-image\">
                        <img src=\"{{ asset('uploads/' ~ produit.image) }}\" alt=\"Product Image\" class=\"img-fluid rounded shadow-lg\">
                    </div>
                </div>

                <!-- Product Name and Description -->
                <div class=\"col-lg-6 col-md-6\">
                    <div class=\"product-detail-content\">
                        <!-- Product Name -->
                        <h3 class=\"product-name text-center\">{{ produit.nom }}</h3>

                        <!-- Product Description -->
                        <div class=\"product-description mt-4\">
                            <p>{{ produit.description }}</p>
                        </div>

                        <!-- Back Button -->
                        <div class=\"product-actions mt-4 text-center\">
                            <a href=\"{{ path('produit_index_patient') }}\" class=\"btn btn-outline-secondary btn-lg\">Retour à la liste des produits</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Detail Area -->
{% endblock %}
", "produit/show.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\produit\\show.html.twig");
    }
}
