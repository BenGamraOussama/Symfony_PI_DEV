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

/* produit_categories/show.html.twig */
class __TwigTemplate_0ee848656bff0c503c9f6be225cf147a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_categories/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_categories/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit_categories/show.html.twig", 1);
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

        yield "ProduitCategorie";
        
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
        yield "    <div class=\"container-fluid d-flex justify-content-center align-items-center min-vh-100\">
        <div class=\"col-md-8\">
            <h1 class=\"text-center mb-4\">Détails de la catégorie</h1>

            ";
        // line 10
        if (array_key_exists("produit_categorie", $context)) {
            // line 11
            yield "                <div class=\"card shadow\">
                    <div class=\"card-body\">
                        <table class=\"table table-bordered table-striped\">
                            <tbody>
                                <tr>
                                    <th class=\"w-25\">ID</th>
                                    <td>";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit_categorie"]) || array_key_exists("produit_categorie", $context) ? $context["produit_categorie"] : (function () { throw new RuntimeError('Variable "produit_categorie" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17), "html", null, true);
            yield "</td>
                                </tr>
                                <tr>
                                    <th>Nom</th>
                                    <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit_categorie"]) || array_key_exists("produit_categorie", $context) ? $context["produit_categorie"] : (function () { throw new RuntimeError('Variable "produit_categorie" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), "html", null, true);
            yield "</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class=\"d-flex justify-content-center gap-2 mt-4\">
                            <a href=\"";
            // line 27
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_categories_index");
            yield "\" class=\"btn btn-primary\">
                                <i class=\"bi bi-arrow-left\"></i> Retour à la liste
                            </a>
                            <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_categories_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit_categorie"]) || array_key_exists("produit_categorie", $context) ? $context["produit_categorie"] : (function () { throw new RuntimeError('Variable "produit_categorie" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" 
                               class=\"btn btn-warning\">
                                <i class=\"bi bi-pencil\"></i> Modifier
                            </a>
                        </div>

                        ";
            // line 36
            yield Twig\Extension\CoreExtension::include($this->env, $context, "produit_categorie/_delete_form.html.twig");
            yield "
                    </div>
                </div>
            ";
        } else {
            // line 40
            yield "                <div class=\"alert alert-danger text-center\">
                    <i class=\"bi bi-exclamation-triangle\"></i> Catégorie introuvable
                </div>
                <a href=\"";
            // line 43
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_categories_index");
            yield "\" class=\"btn btn-outline-primary mt-3\">
                    <i class=\"bi bi-arrow-left\"></i> Retour
                </a>
            ";
        }
        // line 47
        yield "        </div>
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
        return "produit_categories/show.html.twig";
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
        return array (  166 => 47,  159 => 43,  154 => 40,  147 => 36,  138 => 30,  132 => 27,  123 => 21,  116 => 17,  108 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ProduitCategorie{% endblock %}

{% block body %}
    <div class=\"container-fluid d-flex justify-content-center align-items-center min-vh-100\">
        <div class=\"col-md-8\">
            <h1 class=\"text-center mb-4\">Détails de la catégorie</h1>

            {% if produit_categorie is defined %}
                <div class=\"card shadow\">
                    <div class=\"card-body\">
                        <table class=\"table table-bordered table-striped\">
                            <tbody>
                                <tr>
                                    <th class=\"w-25\">ID</th>
                                    <td>{{ produit_categorie.id }}</td>
                                </tr>
                                <tr>
                                    <th>Nom</th>
                                    <td>{{ produit_categorie.nom }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class=\"d-flex justify-content-center gap-2 mt-4\">
                            <a href=\"{{ path('produit_categories_index') }}\" class=\"btn btn-primary\">
                                <i class=\"bi bi-arrow-left\"></i> Retour à la liste
                            </a>
                            <a href=\"{{ path('produit_categories_edit', {'id': produit_categorie.id}) }}\" 
                               class=\"btn btn-warning\">
                                <i class=\"bi bi-pencil\"></i> Modifier
                            </a>
                        </div>

                        {{ include('produit_categorie/_delete_form.html.twig') }}
                    </div>
                </div>
            {% else %}
                <div class=\"alert alert-danger text-center\">
                    <i class=\"bi bi-exclamation-triangle\"></i> Catégorie introuvable
                </div>
                <a href=\"{{ path('produit_categories_index') }}\" class=\"btn btn-outline-primary mt-3\">
                    <i class=\"bi bi-arrow-left\"></i> Retour
                </a>
            {% endif %}
        </div>
    </div>
{% endblock %}", "produit_categories/show.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\produit_categories\\show.html.twig");
    }
}
