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

/* produit/index.html.twig */
class __TwigTemplate_e41ea100e3328f29d4031af9133dd3a9 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "produit/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        .card {
            max-width: 80%;
            margin: 50px auto 30px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .table {
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        .table thead th {
            background-color: #343a40;
            color: white;
            border-bottom: 2px solid #454d55;
        }

        .badge {
            font-size: 0.8em;
            padding: 0.4em 0.6em;
        }

        .product-image img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 37
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

        yield "Liste des Produits";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
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

        // line 40
        yield "    <div class=\"container mt-5\">
        <h2 class=\"text-center text-primary mb-4\" style=\"font-size: 1.8rem; margin-top: 80px;\">Liste des Produits</h2>

        <div class=\"mb-3 d-flex justify-content-center\">
            <input type=\"text\" id=\"searchInput\" class=\"form-control w-75\"
                   style=\"font-size: 1.1rem;\"
                   placeholder=\"Rechercher par nom...\">
        </div>

        <div class=\"card shadow-lg\">
            <div class=\"card-body p-0\">
                <table class=\"table table-hover text-center\">
                    <thead class=\"table-dark\">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix (TND)</th>
                        <th>Quantité</th>
                        <th>Disponible</th>
                        <th>Catégorie</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody id=\"productTable\">
                    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 66, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 67
            yield "                        <tr data-produit>
                            <td>";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                            <td class=\"product-image\">
                                ";
            // line 70
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 70)) {
                // line 71
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 71))), "html", null, true);
                yield "\" alt=\"Image du produit\">
                                ";
            } else {
                // line 73
                yield "                                    <span class=\"text-muted\">N/A</span>
                                ";
            }
            // line 75
            yield "                            </td>
                            <td class=\"fw-bold\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                            <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 77), 0, 30), "html", null, true);
            yield "...</td>
                            <td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 78), "html", null, true);
            yield " TND</td>
                            <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                            <td>
                                ";
            // line 81
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponible", [], "any", false, false, false, 81)) {
                // line 82
                yield "                                    <span class=\"badge bg-success\">Oui</span>
                                ";
            } else {
                // line 84
                yield "                                    <span class=\"badge bg-danger\">Non</span>
                                ";
            }
            // line 86
            yield "                            </td>
                            <td>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 87), "nom", [], "any", false, false, false, 87), "html", null, true);
            yield "</td>
                            <td>
                                <div class=\"d-flex gap-2 justify-content-center\">
                                    <a href=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm py-1\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm py-1\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <form method=\"post\" action=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 96)]), "html", null, true);
            yield "\" style=\"display:inline;\">
                                        <button class=\"btn btn-danger btn-sm py-1\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 105
            yield "                        <tr>
                            <td colspan=\"9\" class=\"text-muted py-4\">Aucun produit trouvé</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "                    <tr id=\"noResultsRow\" style=\"display: none;\">
                        <td colspan=\"9\" class=\"text-muted py-4\">Aucun résultat trouvé</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const productRows = document.querySelectorAll('tr[data-produit]');
            const noResultsRow = document.getElementById('noResultsRow');

            searchInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase().trim();
                let visibleCount = 0;

                productRows.forEach(row => {
                    const productName = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                    if (productName.includes(searchTerm)) {
                        row.style.display = '';
                        visibleCount++;
                    } else {
                        row.style.display = 'none';
                    }
                });

                noResultsRow.style.display = visibleCount === 0 ? '' : 'none';
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
        return "produit/index.html.twig";
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
        return array (  285 => 109,  276 => 105,  262 => 96,  256 => 93,  250 => 90,  244 => 87,  241 => 86,  237 => 84,  233 => 82,  231 => 81,  226 => 79,  222 => 78,  218 => 77,  214 => 76,  211 => 75,  207 => 73,  201 => 71,  199 => 70,  194 => 68,  191 => 67,  186 => 66,  158 => 40,  145 => 39,  122 => 37,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        .card {
            max-width: 80%;
            margin: 50px auto 30px;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .table {
            font-size: 0.9rem;
            margin-bottom: 0;
        }

        .table thead th {
            background-color: #343a40;
            color: white;
            border-bottom: 2px solid #454d55;
        }

        .badge {
            font-size: 0.8em;
            padding: 0.4em 0.6em;
        }

        .product-image img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border-radius: 4px;
        }
    </style>
{% endblock %}

{% block title %}Liste des Produits{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h2 class=\"text-center text-primary mb-4\" style=\"font-size: 1.8rem; margin-top: 80px;\">Liste des Produits</h2>

        <div class=\"mb-3 d-flex justify-content-center\">
            <input type=\"text\" id=\"searchInput\" class=\"form-control w-75\"
                   style=\"font-size: 1.1rem;\"
                   placeholder=\"Rechercher par nom...\">
        </div>

        <div class=\"card shadow-lg\">
            <div class=\"card-body p-0\">
                <table class=\"table table-hover text-center\">
                    <thead class=\"table-dark\">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Nom</th>
                        <th>Description</th>
                        <th>Prix (TND)</th>
                        <th>Quantité</th>
                        <th>Disponible</th>
                        <th>Catégorie</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody id=\"productTable\">
                    {% for produit in produits %}
                        <tr data-produit>
                            <td>{{ produit.id }}</td>
                            <td class=\"product-image\">
                                {% if produit.image %}
                                    <img src=\"{{ asset('uploads/' ~ produit.image) }}\" alt=\"Image du produit\">
                                {% else %}
                                    <span class=\"text-muted\">N/A</span>
                                {% endif %}
                            </td>
                            <td class=\"fw-bold\">{{ produit.nom }}</td>
                            <td>{{ produit.description|slice(0, 30) }}...</td>
                            <td>{{ produit.prix }} TND</td>
                            <td>{{ produit.quantite }}</td>
                            <td>
                                {% if produit.disponible %}
                                    <span class=\"badge bg-success\">Oui</span>
                                {% else %}
                                    <span class=\"badge bg-danger\">Non</span>
                                {% endif %}
                            </td>
                            <td>{{ produit.categorie.nom }}</td>
                            <td>
                                <div class=\"d-flex gap-2 justify-content-center\">
                                    <a href=\"{{ path('produit_show', {'id': produit.id}) }}\" class=\"btn btn-info btn-sm py-1\">
                                        <i class=\"fas fa-eye\"></i>
                                    </a>
                                    <a href=\"{{ path('produit_edit', {'id': produit.id}) }}\" class=\"btn btn-warning btn-sm py-1\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <form method=\"post\" action=\"{{ path('produit_delete', {'id': produit.id}) }}\" style=\"display:inline;\">
                                        <button class=\"btn btn-danger btn-sm py-1\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"9\" class=\"text-muted py-4\">Aucun produit trouvé</td>
                        </tr>
                    {% endfor %}
                    <tr id=\"noResultsRow\" style=\"display: none;\">
                        <td colspan=\"9\" class=\"text-muted py-4\">Aucun résultat trouvé</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const productRows = document.querySelectorAll('tr[data-produit]');
            const noResultsRow = document.getElementById('noResultsRow');

            searchInput.addEventListener('input', function(e) {
                const searchTerm = e.target.value.toLowerCase().trim();
                let visibleCount = 0;

                productRows.forEach(row => {
                    const productName = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                    if (productName.includes(searchTerm)) {
                        row.style.display = '';
                        visibleCount++;
                    } else {
                        row.style.display = 'none';
                    }
                });

                noResultsRow.style.display = visibleCount === 0 ? '' : 'none';
            });
        });
    </script>
{% endblock %}", "produit/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\produit\\index.html.twig");
    }
}
