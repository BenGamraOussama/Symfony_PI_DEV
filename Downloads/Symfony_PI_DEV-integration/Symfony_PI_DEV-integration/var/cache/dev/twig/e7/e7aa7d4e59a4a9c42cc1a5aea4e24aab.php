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

/* produit_categories/index.html.twig */
class __TwigTemplate_9765154eefeef0eaf497f796fc72130e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_categories/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit_categories/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit_categories/index.html.twig", 1);
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

        yield "Catégories des Produits";
        
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
        yield "    <div class=\"container mt-5\">
        <h2 class=\"text-center text-primary mb-4\" style=\"font-size: 1.8rem; margin-top: 80px;\">Catégories de Produits</h2>

        <!-- Si des messages flash d'erreur existent, affiche-les -->
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", ["error"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            yield "            <div class=\"alert alert-danger\">
                ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
        <div class=\"mb-3 d-flex justify-content-center\" style=\"margin-left: 10%;\">
            <input type=\"text\" id=\"searchInput\" class=\"form-control w-75\" style=\"font-size: 1.2rem;\" placeholder=\"Rechercher par nom de catégorie...\">
        </div>

        <div class=\"card shadow-lg\" style=\"max-width: 80%; margin-top: 50px; margin-right: 0%; padding-bottom: 20px; margin-bottom: 30px; margin-left: auto;\">
            <div class=\"card-body\">
                <table class=\"table table-hover text-center\" style=\"font-size: 0.8rem;\">
                    <thead class=\"table-dark\">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody id=\"categoryTable\">
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produit_categories"]) || array_key_exists("produit_categories", $context) ? $context["produit_categories"] : (function () { throw new RuntimeError('Variable "produit_categories" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit_categorie"]) {
            // line 32
            yield "                        <tr>
                            <td>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit_categorie"], "id", [], "any", false, false, false, 33), "html", null, true);
            yield "</td>
                            <td class=\"fw-bold\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit_categorie"], "nom", [], "any", false, false, false, 34), "html", null, true);
            yield "</td>
                            <td>
                                <a href=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_categorie_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit_categorie"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
                                    <i class=\"fas fa-eye\"></i> Voir
                                </a>
                                <a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_categories_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit_categorie"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <form method=\"post\" action=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_categories_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit_categorie"], "id", [], "any", false, false, false, 42)]), "html", null, true);
            yield "\" style=\"display:inline;\"
                                      onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette catégorie ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["produit_categorie"], "id", [], "any", false, false, false, 44))), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                        <i class=\"fas fa-trash\"></i> Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            yield "                        <tr>
                            <td colspan=\"3\" class=\"text-muted\">Aucune catégorie trouvée</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit_categorie'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.getElementById(\"searchInput\").addEventListener(\"keyup\", function () {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll(\"#categoryTable tr\");

            rows.forEach(row => {
                let categoryName = row.cells[1].textContent.toLowerCase();
                row.style.display = categoryName.includes(filter) ? \"\" : \"none\";
            });
        });
    </script>

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
        return "produit_categories/index.html.twig";
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
        return array (  196 => 56,  187 => 52,  174 => 44,  169 => 42,  163 => 39,  157 => 36,  152 => 34,  148 => 33,  145 => 32,  140 => 31,  122 => 15,  113 => 12,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Catégories des Produits{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h2 class=\"text-center text-primary mb-4\" style=\"font-size: 1.8rem; margin-top: 80px;\">Catégories de Produits</h2>

        <!-- Si des messages flash d'erreur existent, affiche-les -->
        {% for message in app.flashes('error') %}
            <div class=\"alert alert-danger\">
                {{ message }}
            </div>
        {% endfor %}

        <div class=\"mb-3 d-flex justify-content-center\" style=\"margin-left: 10%;\">
            <input type=\"text\" id=\"searchInput\" class=\"form-control w-75\" style=\"font-size: 1.2rem;\" placeholder=\"Rechercher par nom de catégorie...\">
        </div>

        <div class=\"card shadow-lg\" style=\"max-width: 80%; margin-top: 50px; margin-right: 0%; padding-bottom: 20px; margin-bottom: 30px; margin-left: auto;\">
            <div class=\"card-body\">
                <table class=\"table table-hover text-center\" style=\"font-size: 0.8rem;\">
                    <thead class=\"table-dark\">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody id=\"categoryTable\">
                    {% for produit_categorie in produit_categories %}
                        <tr>
                            <td>{{ produit_categorie.id }}</td>
                            <td class=\"fw-bold\">{{ produit_categorie.nom }}</td>
                            <td>
                                <a href=\"{{ path('produit_categorie_show', {'id': produit_categorie.id}) }}\" class=\"btn btn-info btn-sm\">
                                    <i class=\"fas fa-eye\"></i> Voir
                                </a>
                                <a href=\"{{ path('produit_categories_edit', {'id': produit_categorie.id}) }}\" class=\"btn btn-warning btn-sm\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <form method=\"post\" action=\"{{ path('produit_categories_delete', {'id': produit_categorie.id}) }}\" style=\"display:inline;\"
                                      onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette catégorie ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ produit_categorie.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                        <i class=\"fas fa-trash\"></i> Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"3\" class=\"text-muted\">Aucune catégorie trouvée</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.getElementById(\"searchInput\").addEventListener(\"keyup\", function () {
            let filter = this.value.toLowerCase();
            let rows = document.querySelectorAll(\"#categoryTable tr\");

            rows.forEach(row => {
                let categoryName = row.cells[1].textContent.toLowerCase();
                row.style.display = categoryName.includes(filter) ? \"\" : \"none\";
            });
        });
    </script>

{% endblock %}
", "produit_categories/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\produit_categories\\index.html.twig");
    }
}
