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
        table.table {
            margin: 0 auto;
            width: 90%;
            border-collapse: collapse;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        table.table tbody tr:hover {
            background-color: #f8f9fa;
            transition: background-color 0.3s;
        }

        table.table th, table.table td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #dee2e6;
        }

        .product-image img {
            border-radius: 8px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 0.875rem;
            transition: all 0.2s;
        }

        .btn-sm:hover {
            transform: scale(1.05);
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
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

        yield "Liste des produits";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
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

        // line 51
        yield "    <div class=\"app\">
        <div class=\"app-wrap\">
            <div class=\"container-fluid\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-12 col-md-10\">
                        <h2 class=\"text-center mt-4 mb-4\">Liste des Produits</h2>

                        <!-- Bouton ajouter produit en haut -->
                        <div class=\"btn-container\">
                            <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_add");
        yield "\" class=\"btn btn-primary\">
                                <i class=\"fas fa-plus-circle\"></i> Ajouter un produit
                            </a>
                        </div>

                        <table class=\"table table-striped text-center\">
                            <thead class=\"table-dark\">
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Prix (€)</th>
                                <th>Quantite</th>
                                <th>Disponible</th>
                                <th>Catégorie</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 80, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 81
            yield "                                <tr>
                                    <td>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 82), "html", null, true);
            yield "</td>
                                    <td class=\"product-image\">
                                        ";
            // line 84
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 84)) {
                // line 85
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 85))), "html", null, true);
                yield "\" alt=\"Image du produit\" width=\"80\">
                                        ";
            } else {
                // line 87
                yield "                                            <span class=\"text-muted\">Pas d'image</span>
                                        ";
            }
            // line 89
            yield "                                    </td>
                                    <td>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 90), "html", null, true);
            yield "</td>
                                    <td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 91), "html", null, true);
            yield "</td>
                                    <td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 92), "html", null, true);
            yield " €</td>
                                    <td>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 93), "html", null, true);
            yield "</td>
                                    <td>
                                        ";
            // line 95
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponible", [], "any", false, false, false, 95)) {
                // line 96
                yield "                                            <span class=\"badge bg-success\">Oui</span>
                                        ";
            } else {
                // line 98
                yield "                                            <span class=\"badge bg-danger\">Non</span>
                                        ";
            }
            // line 100
            yield "                                    </td>
                                    <td>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 101), "nom", [], "any", false, false, false, 101), "html", null, true);
            yield "</td>
                                    <td>
                                        <a href=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
                                            <i class=\"fas fa-eye\"></i> Voir
                                        </a>
                                        <a href=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">
                                            <i class=\"fas fa-edit\"></i> Éditer
                                        </a>
                                        <form method=\"post\" action=\"";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 109)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce produit ?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 110))), "html", null, true);
            yield "\">
                                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                                <i class=\"fas fa-trash-alt\"></i> Supprimer
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 118
            yield "                                <tr>
                                    <td colspan=\"9\" class=\"text-center text-muted\">Aucun produit trouvé</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "                            </tbody>
                        </table>

                        <!-- Bouton ajouter produit en bas -->
                        <div class=\"text-center mt-3\">
                            <a href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_add");
        yield "\" class=\"btn btn-primary\">
                                <i class=\"fas fa-plus-circle\"></i> Ajouter un produit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
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
        return array (  311 => 127,  304 => 122,  295 => 118,  282 => 110,  278 => 109,  272 => 106,  266 => 103,  261 => 101,  258 => 100,  254 => 98,  250 => 96,  248 => 95,  243 => 93,  239 => 92,  235 => 91,  231 => 90,  228 => 89,  224 => 87,  218 => 85,  216 => 84,  211 => 82,  208 => 81,  203 => 80,  180 => 60,  169 => 51,  156 => 50,  133 => 48,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        table.table {
            margin: 0 auto;
            width: 90%;
            border-collapse: collapse;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        table.table tbody tr:hover {
            background-color: #f8f9fa;
            transition: background-color 0.3s;
        }

        table.table th, table.table td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #dee2e6;
        }

        .product-image img {
            border-radius: 8px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-sm {
            padding: 5px 10px;
            font-size: 0.875rem;
            transition: all 0.2s;
        }

        .btn-sm:hover {
            transform: scale(1.05);
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
    </style>
{% endblock %}

{% block title %}Liste des produits{% endblock %}

{% block body %}
    <div class=\"app\">
        <div class=\"app-wrap\">
            <div class=\"container-fluid\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-12 col-md-10\">
                        <h2 class=\"text-center mt-4 mb-4\">Liste des Produits</h2>

                        <!-- Bouton ajouter produit en haut -->
                        <div class=\"btn-container\">
                            <a href=\"{{ path('produit_add') }}\" class=\"btn btn-primary\">
                                <i class=\"fas fa-plus-circle\"></i> Ajouter un produit
                            </a>
                        </div>

                        <table class=\"table table-striped text-center\">
                            <thead class=\"table-dark\">
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Nom</th>
                                <th>Description</th>
                                <th>Prix (€)</th>
                                <th>Quantite</th>
                                <th>Disponible</th>
                                <th>Catégorie</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for produit in produits %}
                                <tr>
                                    <td>{{ produit.id }}</td>
                                    <td class=\"product-image\">
                                        {% if produit.image %}
                                            <img src=\"{{ asset('uploads/' ~ produit.image) }}\" alt=\"Image du produit\" width=\"80\">
                                        {% else %}
                                            <span class=\"text-muted\">Pas d'image</span>
                                        {% endif %}
                                    </td>
                                    <td>{{ produit.nom }}</td>
                                    <td>{{ produit.description }}</td>
                                    <td>{{ produit.prix }} €</td>
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
                                        <a href=\"{{ path('produit_show', {'id': produit.id}) }}\" class=\"btn btn-info btn-sm\">
                                            <i class=\"fas fa-eye\"></i> Voir
                                        </a>
                                        <a href=\"{{ path('produit_edit', {'id': produit.id}) }}\" class=\"btn btn-warning btn-sm\">
                                            <i class=\"fas fa-edit\"></i> Éditer
                                        </a>
                                        <form method=\"post\" action=\"{{ path('produit_delete', {'id': produit.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce produit ?');\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ produit.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-danger btn-sm\">
                                                <i class=\"fas fa-trash-alt\"></i> Supprimer
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"9\" class=\"text-center text-muted\">Aucun produit trouvé</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>

                        <!-- Bouton ajouter produit en bas -->
                        <div class=\"text-center mt-3\">
                            <a href=\"{{ path('produit_add') }}\" class=\"btn btn-primary\">
                                <i class=\"fas fa-plus-circle\"></i> Ajouter un produit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "produit/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\produit\\index.html.twig");
    }
}
