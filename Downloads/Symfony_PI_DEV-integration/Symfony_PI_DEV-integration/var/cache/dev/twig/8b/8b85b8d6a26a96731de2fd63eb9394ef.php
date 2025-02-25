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

/* produit_categories/index.patient.html.twig */
class __TwigTemplate_22c95835bc564fac599946e6b44ab2f6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_categories/index.patient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_categories/index.patient.html.twig"));

        $this->parent = $this->loadTemplate("basePatient.html.twig", "produit_categories/index.patient.html.twig", 1);
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

        yield " Liste des produits - Mon Site ";
        
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
        yield "    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Nos produits</h1>

        ";
        // line 10
        yield "        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <form action=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_product_index");
        yield "\" method=\"GET\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher un produit...\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "query", [], "any", false, false, false, 14), "get", ["search"], "method", false, false, false, 14), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                    </div>
                </form>
            </div>
            <div class=\"col-md-6\">
                <form action=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_product_index");
        yield "\" method=\"GET\">
                    <div class=\"input-group\">
                        <select name=\"category\" class=\"form-select\">
                            <option value=\"\">Toutes les catégories</option>
                            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 25
            yield "                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "\" ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "query", [], "any", false, false, false, 25), "get", ["category"], "method", false, false, false, 25) == CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 25))) ? ("selected") : (""));
            yield ">


                                    ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 28), "html", null, true);
            yield "
                                </option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        yield "                        </select>
                        <button type=\"submit\" class=\"btn btn-secondary\">Filtrer</button>
                    </div>
                </form>
            </div>
        </div>

        ";
        // line 39
        yield "        <div class=\"row\">
            ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 41
            yield "                <div class=\"col-md-4 mb-4\">
                    <div class=\"card h-100\">
                        ";
            // line 44
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 44), "html", null, true);
            yield "\" class=\"card-img-top\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 44), "html", null, true);
            yield "\" style=\"height: 200px; object-fit: cover;\">

                        ";
            // line 47
            yield "                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 48), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 49), 0, 100), "html", null, true);
            yield "...</p>
                            <p class=\"text-success fw-bold\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 50), "html", null, true);
            yield " €</p>
                            <a href=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_product_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Voir les détails</a>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            yield "                <div class=\"col-12\">
                    <p class=\"text-center\">Aucun produit trouvé.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        yield "        </div>

        ";
        // line 63
        yield "        <div class=\"d-flex justify-content-center mt-4\">
            ";
        // line 64
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 64, $this->source); })()));
        yield "
        </div>
    </div>
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
        return "produit_categories/index.patient.html.twig";
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
        return array (  222 => 64,  219 => 63,  215 => 60,  206 => 56,  196 => 51,  192 => 50,  188 => 49,  184 => 48,  181 => 47,  173 => 44,  169 => 41,  164 => 40,  161 => 39,  152 => 31,  143 => 28,  134 => 25,  130 => 24,  123 => 20,  114 => 14,  109 => 12,  105 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePatient.html.twig' %}

{% block title %} Liste des produits - Mon Site {% endblock %}

{% block body %}
    <div class=\"container mt-4\">
        <h1 class=\"mb-4\">Nos produits</h1>

        {# Barre de recherche et filtres #}
        <div class=\"row mb-4\">
            <div class=\"col-md-6\">
                <form action=\"{{ path('user_product_index') }}\" method=\"GET\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher un produit...\" value=\"{{ app.request.query.get('search') }}\">
                        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                    </div>
                </form>
            </div>
            <div class=\"col-md-6\">
                <form action=\"{{ path('user_product_index') }}\" method=\"GET\">
                    <div class=\"input-group\">
                        <select name=\"category\" class=\"form-select\">
                            <option value=\"\">Toutes les catégories</option>
                            {% for category in categories %}
                                <option value=\"{{ category.id }}\" {{ app.request.query.get('category') == category.id ? 'selected' : '' }}>


                                    {{ category.name }}
                                </option>
                            {% endfor %}
                        </select>
                        <button type=\"submit\" class=\"btn btn-secondary\">Filtrer</button>
                    </div>
                </form>
            </div>
        </div>

        {# Liste des produits #}
        <div class=\"row\">
            {% for produit in produits %}
                <div class=\"col-md-4 mb-4\">
                    <div class=\"card h-100\">
                        {# Image du produit #}
                        <img src=\"{{ produit.image }}\" class=\"card-img-top\" alt=\"{{ produit.nom }}\" style=\"height: 200px; object-fit: cover;\">

                        {# Corps de la carte #}
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ produit.nom }}</h5>
                            <p class=\"card-text\">{{ produit.description|slice(0, 100) }}...</p>
                            <p class=\"text-success fw-bold\">{{ produit.prix }} €</p>
                            <a href=\"{{ path('user_product_show', {id: produit.id}) }}\" class=\"btn btn-primary\">Voir les détails</a>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-12\">
                    <p class=\"text-center\">Aucun produit trouvé.</p>
                </div>
            {% endfor %}
        </div>

        {# Pagination #}
        <div class=\"d-flex justify-content-center mt-4\">
            {{ knp_pagination_render(produits) }}
        </div>
    </div>
{% endblock %}", "produit_categories/index.patient.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\produit_categories\\index.patient.html.twig");
    }
}
