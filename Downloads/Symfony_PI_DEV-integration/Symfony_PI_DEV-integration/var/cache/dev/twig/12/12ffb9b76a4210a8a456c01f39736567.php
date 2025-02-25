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
class __TwigTemplate_c7029997979e5bd751f049e5dafec12e extends Template
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
        /* Style du tableau */
        .table {
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        /* En-tête du tableau */
        .table thead {
            background-color: #007bff;
            color: white;
        }

        .table th, .table td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        /* Pour la colonne Quantité */
        .table td:nth-child(7), .table th:nth-child(7) {
            background-color: #f0f8ff;
            font-weight: bold;
            color: #007bff;
        }

        /* Alternance des couleurs pour les lignes */
        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Boutons actions */
        .btn-sm {
            padding: 5px 10px;
            font-size: 0.9rem;
            border-radius: 5px;
        }

        /* Espacement des boutons */
        td > a, td > form {
            margin-right: 5px;
        }

        /* Image des produits */
        .table img {
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Conteneur principal */
        .container-fluid {
            padding: 20px;
        }

        /* Titre de la page */
        .page-title h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            text-align: center; /* Centrer le titre */
            margin-top: 20px;
            margin-bottom: 20px;
        }

        /* Bouton Ajouter un produit */
        .text-center .btn-primary {
            padding: 12px 20px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 8px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            border: none;
            transition: all 0.3s ease-in-out;
        }

        .text-center .btn-primary:hover {
            background: linear-gradient(135deg, #0056b3, #003d80);
        }

        /* Ajouter un espacement entre la table et les boutons */
        .text-center .btn-primary {
            margin-top: 20px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 95
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

    // line 97
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

        // line 98
        yield "
    <div class=\"container-fluid\" style=\"margin-left: 100px;\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 col-md-10\">
                <h1 class=\"page-title\">📦 Liste des Produits</h1> <!-- Espacement ajouté autour du titre -->
                
                <table class=\"table text-center\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Prix (€)</th>
                            <th>Disponible</th>
                            <th>Quantité</th> <!-- Nouvelle colonne pour la quantité -->
                            <th>Catégorie</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 119, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 120
            yield "                            <tr>
                                <td>";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 121), "html", null, true);
            yield "</td>
                                <td>
                                    ";
            // line 123
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 123)) {
                // line 124
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 124))), "html", null, true);
                yield "\" alt=\"Image du produit\" width=\"80\">
                                    ";
            } else {
                // line 126
                yield "                                        Pas d'image
                                    ";
            }
            // line 128
            yield "                                </td>
                                <td>";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 129), "html", null, true);
            yield "</td>
                                <td>";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 130), "html", null, true);
            yield "</td>
                                <td>";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 131), "html", null, true);
            yield "</td>
                                <td>";
            // line 132
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponible", [], "any", false, false, false, 132)) ? ("Oui") : ("Non"));
            yield "</td>
                                <td>";
            // line 133
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "quantite", [], "any", false, false, false, 133), "html", null, true);
            yield "</td> <!-- Affichage de la quantité -->
                                <td>";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 134), "nom", [], "any", false, false, false, 134), "html", null, true);
            yield "</td>
                                <td>
                                    <a href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Voir</a>
                                    <a href=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 137)]), "html", null, true);
            yield "\" class=\"btn btn-warning btn-sm\">Éditer</a>
                                    <form method=\"post\" action=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 138)]), "html", null, true);
            yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce produit ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 139))), "html", null, true);
            yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 145
            yield "                            <tr>
                                <td colspan=\"9\">Aucun enregistrement trouvé</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        yield "                    </tbody>
                </table>
                <div class=\"text-center\">
                    <a href=\"";
        // line 152
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_add");
        yield "\" class=\"btn btn-primary\">➕ Créer un produit</a>
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
        return array (  329 => 152,  324 => 149,  315 => 145,  304 => 139,  300 => 138,  296 => 137,  292 => 136,  287 => 134,  283 => 133,  279 => 132,  275 => 131,  271 => 130,  267 => 129,  264 => 128,  260 => 126,  254 => 124,  252 => 123,  247 => 121,  244 => 120,  239 => 119,  216 => 98,  203 => 97,  180 => 95,  78 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Style du tableau */
        .table {
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background: #fff;
        }

        /* En-tête du tableau */
        .table thead {
            background-color: #007bff;
            color: white;
        }

        .table th, .table td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        /* Pour la colonne Quantité */
        .table td:nth-child(7), .table th:nth-child(7) {
            background-color: #f0f8ff;
            font-weight: bold;
            color: #007bff;
        }

        /* Alternance des couleurs pour les lignes */
        .table tbody tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        /* Boutons actions */
        .btn-sm {
            padding: 5px 10px;
            font-size: 0.9rem;
            border-radius: 5px;
        }

        /* Espacement des boutons */
        td > a, td > form {
            margin-right: 5px;
        }

        /* Image des produits */
        .table img {
            border-radius: 5px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Conteneur principal */
        .container-fluid {
            padding: 20px;
        }

        /* Titre de la page */
        .page-title h1 {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            text-align: center; /* Centrer le titre */
            margin-top: 20px;
            margin-bottom: 20px;
        }

        /* Bouton Ajouter un produit */
        .text-center .btn-primary {
            padding: 12px 20px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 8px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            border: none;
            transition: all 0.3s ease-in-out;
        }

        .text-center .btn-primary:hover {
            background: linear-gradient(135deg, #0056b3, #003d80);
        }

        /* Ajouter un espacement entre la table et les boutons */
        .text-center .btn-primary {
            margin-top: 20px;
        }
    </style>
{% endblock %}

{% block title %}Liste des produits{% endblock %}

{% block body %}

    <div class=\"container-fluid\" style=\"margin-left: 100px;\">
        <div class=\"row justify-content-center\">
            <div class=\"col-12 col-md-10\">
                <h1 class=\"page-title\">📦 Liste des Produits</h1> <!-- Espacement ajouté autour du titre -->
                
                <table class=\"table text-center\">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Prix (€)</th>
                            <th>Disponible</th>
                            <th>Quantité</th> <!-- Nouvelle colonne pour la quantité -->
                            <th>Catégorie</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for produit in produits %}
                            <tr>
                                <td>{{ produit.id }}</td>
                                <td>
                                    {% if produit.image %}
                                        <img src=\"{{ asset('uploads/' ~ produit.image) }}\" alt=\"Image du produit\" width=\"80\">
                                    {% else %}
                                        Pas d'image
                                    {% endif %}
                                </td>
                                <td>{{ produit.nom }}</td>
                                <td>{{ produit.description }}</td>
                                <td>{{ produit.prix }}</td>
                                <td>{{ produit.disponible ? 'Oui' : 'Non' }}</td>
                                <td>{{ produit.quantite }}</td> <!-- Affichage de la quantité -->
                                <td>{{ produit.categorie.nom }}</td>
                                <td>
                                    <a href=\"{{ path('produit_show', {'id': produit.id}) }}\" class=\"btn btn-info btn-sm\">Voir</a>
                                    <a href=\"{{ path('produit_edit', {'id': produit.id}) }}\" class=\"btn btn-warning btn-sm\">Éditer</a>
                                    <form method=\"post\" action=\"{{ path('produit_delete', {'id': produit.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce produit ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ produit.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"9\">Aucun enregistrement trouvé</td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
                <div class=\"text-center\">
                    <a href=\"{{ path('produit_add') }}\" class=\"btn btn-primary\">➕ Créer un produit</a>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "produit/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\produit\\index.html.twig");
    }
}
