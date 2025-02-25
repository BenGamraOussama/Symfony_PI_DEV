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
        yield "    <div class=\"container-fluid\" style=\"display: flex; justify-content: center; align-items: center; height: 100vh; padding: 0;\">
        <div style=\"max-width: 900px; width: 100%; padding: 20px; box-sizing: border-box; text-align: center;\">
            <h1 class=\"mb-4\">ProduitCategorie</h1>

            <table class=\"table table-bordered table-striped mx-auto\" style=\"width: 80%;\">
                <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit_categorie"]) || array_key_exists("produit_categorie", $context) ? $context["produit_categorie"] : (function () { throw new RuntimeError('Variable "produit_categorie" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit_categorie"]) || array_key_exists("produit_categorie", $context) ? $context["produit_categorie"] : (function () { throw new RuntimeError('Variable "produit_categorie" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>String</th>
                    <td>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit_categorie"]) || array_key_exists("produit_categorie", $context) ? $context["produit_categorie"] : (function () { throw new RuntimeError('Variable "produit_categorie" does not exist.', 22, $this->source); })()), "string", [], "any", false, false, false, 22), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Prix</th>
                    <td>";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit_categorie"]) || array_key_exists("produit_categorie", $context) ? $context["produit_categorie"] : (function () { throw new RuntimeError('Variable "produit_categorie" does not exist.', 26, $this->source); })()), "prix", [], "any", false, false, false, 26), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit_categorie"]) || array_key_exists("produit_categorie", $context) ? $context["produit_categorie"] : (function () { throw new RuntimeError('Variable "produit_categorie" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit_categorie"]) || array_key_exists("produit_categorie", $context) ? $context["produit_categorie"] : (function () { throw new RuntimeError('Variable "produit_categorie" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit_categorie"]) || array_key_exists("produit_categorie", $context) ? $context["produit_categorie"] : (function () { throw new RuntimeError('Variable "produit_categorie" does not exist.', 38, $this->source); })()), "image", [], "any", false, false, false, 38), "html", null, true);
        yield "</td>
                </tr>
                </tbody>
            </table>

            <div class=\"text-center mt-4\">
                <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_categorie_index");
        yield "\" class=\"btn btn-primary\">Retour à la liste</a>
                <a href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_categorie_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit_categorie"]) || array_key_exists("produit_categorie", $context) ? $context["produit_categorie"] : (function () { throw new RuntimeError('Variable "produit_categorie" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        yield "\" class=\"btn btn-warning\">Modifier</a>
            </div>

            ";
        // line 48
        yield Twig\Extension\CoreExtension::include($this->env, $context, "produit_categorie/_delete_form.html.twig");
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
        return array (  171 => 48,  165 => 45,  161 => 44,  152 => 38,  145 => 34,  138 => 30,  131 => 26,  124 => 22,  117 => 18,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ProduitCategorie{% endblock %}

{% block body %}
    <div class=\"container-fluid\" style=\"display: flex; justify-content: center; align-items: center; height: 100vh; padding: 0;\">
        <div style=\"max-width: 900px; width: 100%; padding: 20px; box-sizing: border-box; text-align: center;\">
            <h1 class=\"mb-4\">ProduitCategorie</h1>

            <table class=\"table table-bordered table-striped mx-auto\" style=\"width: 80%;\">
                <tbody>
                <tr>
                    <th>Id</th>
                    <td>{{ produit_categorie.id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ produit_categorie.name }}</td>
                </tr>
                <tr>
                    <th>String</th>
                    <td>{{ produit_categorie.string }}</td>
                </tr>
                <tr>
                    <th>Prix</th>
                    <td>{{ produit_categorie.prix }}</td>
                </tr>
                <tr>
                    <th>Nom</th>
                    <td>{{ produit_categorie.nom }}</td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td>{{ produit_categorie.description }}</td>
                </tr>
                <tr>
                    <th>Image</th>
                    <td>{{ produit_categorie.image }}</td>
                </tr>
                </tbody>
            </table>

            <div class=\"text-center mt-4\">
                <a href=\"{{ path('app_produit_categorie_index') }}\" class=\"btn btn-primary\">Retour à la liste</a>
                <a href=\"{{ path('app_produit_categorie_edit', {'id': produit_categorie.id}) }}\" class=\"btn btn-warning\">Modifier</a>
            </div>

            {{ include('produit_categorie/_delete_form.html.twig') }}
        </div>
    </div>
{% endblock %}
", "produit_categories/show.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\produit_categories\\show.html.twig");
    }
}
