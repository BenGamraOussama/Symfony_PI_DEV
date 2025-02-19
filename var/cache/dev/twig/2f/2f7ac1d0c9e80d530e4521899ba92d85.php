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

/* commande/show.html.twig */
class __TwigTemplate_97094523aa57e207e8831329c41ba077 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commande/show.html.twig", 1);
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

        yield "Commande";
        
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
        yield "<div class=\"app\">
    <div class=\"app-wrap\">
        <div class=\"loader\">
            <div class=\"h-100 d-flex justify-content-center\">
                <div class=\"align-self-center\">
                    <img src=\"img/loader/loader.svg\" alt=\"loader\">
                </div>
            </div>
        </div>                                            ";
        // line 14
        $context["total"] = 0;
        // line 15
        yield "
";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 16, $this->source); })()), "lignes", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 17
            yield "                                                ";
            $context["ligneTotal"] = (CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 17) * CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "prixUnitaire", [], "any", false, false, false, 17));
            // line 18
            yield "                                                ";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 18, $this->source); })()) + (isset($context["ligneTotal"]) || array_key_exists("ligneTotal", $context) ? $context["ligneTotal"] : (function () { throw new RuntimeError('Variable "ligneTotal" does not exist.', 18, $this->source); })()));
            // line 19
            yield "                                          
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ligne'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "        <div class=\"app-container\">
            <div class=\"app-main\" id=\"main\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12 m-b-30\">
                            <div class=\"d-block d-lg-flex flex-nowrap align-items-center\">
                                <div class=\"page-title mr-4 pr-4 border-right\">
                                    <h1>Commande</h1>
                                </div>
                                <div class=\"breadcrumb-bar align-items-center\">
                                    <nav>
                                        <ol class=\"breadcrumb p-0 m-b-0\">
                                            <li class=\"breadcrumb-item\">
                                                <a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"ti ti-home\"></i></a>
                                            </li>
                                            <li class=\"breadcrumb-item\">
                                                Commandes
                                            </li>
                                            <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">Détails</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section Commande -->
                    <div class=\"row\">
                        <div class=\"col-md-10 mx-auto\">
                            <div class=\"card shadow\">
                                <div class=\"card-body\">
                                    <h2 class=\"mb-4\">Détails de la Commande</h2>
                                    <table class=\"table table-bordered\">
                                        <tbody>
                                            <tr>
                                                <th>ID</th>
                                                <td>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 57, $this->source); })()), "id", [], "any", false, false, false, 57), "html", null, true);
        yield "</td>
                                            </tr>
                                            <tr>
                                                <th>Date de Commande</th>
                                                <td>";
        // line 61
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 61, $this->source); })()), "dateCommande", [], "any", false, false, false, 61)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 61, $this->source); })()), "dateCommande", [], "any", false, false, false, 61), "Y-m-d H:i:s"), "html", null, true)) : ("N/A"));
        yield "</td>
                                            </tr>
                                            <tr>
                                                <th>Montant Total</th>
                                                <td>";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 65, $this->source); })()), 2, ".", " "), "html", null, true);
        yield "  TND</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- Lignes de Commande -->
                                    <h3 class=\"mt-4\">Lignes de Commande</h3>
                                    <table class=\"table table-striped\">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Quantité</th>
                                                <th>Prix Unitaire (TND)</th>
                                                <th>Total (TND)</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            ";
        // line 83
        $context["total"] = 0;
        // line 84
        yield "                                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 84, $this->source); })()), "lignes", [], "any", false, false, false, 84));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 85
            yield "                                                ";
            $context["ligneTotal"] = (CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 85) * CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "prixUnitaire", [], "any", false, false, false, 85));
            // line 86
            yield "                                                ";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 86, $this->source); })()) + (isset($context["ligneTotal"]) || array_key_exists("ligneTotal", $context) ? $context["ligneTotal"] : (function () { throw new RuntimeError('Variable "ligneTotal" does not exist.', 86, $this->source); })()));
            // line 87
            yield "                                                <tr>
                                                    <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "id", [], "any", false, false, false, 88), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "quantite", [], "any", false, false, false, 89), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "prixUnitaire", [], "any", false, false, false, 90), 2, ".", " "), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["ligneTotal"]) || array_key_exists("ligneTotal", $context) ? $context["ligneTotal"] : (function () { throw new RuntimeError('Variable "ligneTotal" does not exist.', 91, $this->source); })()), 2, ".", " "), "html", null, true);
            yield "</td>
                                                    <td> <a class=\"btn btn-secondary\" href=\"";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ligne_commande_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            yield "\">consulter</a>
                    <a href=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ligne_commande_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ligne"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            yield "\" class=\"btn btn-warning\" >modifier</a></td>
                                                </tr>
                                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 96
            yield "                                                <tr>
                                                    <td colspan=\"4\" class=\"text-center text-muted\">Aucune ligne de commande</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ligne'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan=\"3\" class=\"text-right\">Total Calculé</th>
                                                <th>";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 104, $this->source); })()), 2, ".", " "), "html", null, true);
        yield " TND</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <a class=\"btn btn-success\" href=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_add_ligne_de_commande", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 109, $this->source); })()), "id", [], "any", false, false, false, 109)]), "html", null, true);
        yield "\">Ajouter une Ligne</a>
                                    <a class=\"btn btn-warning\" href=\"";
        // line 110
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 110, $this->source); })()), "id", [], "any", false, false, false, 110)]), "html", null, true);
        yield "\">Modifier</a>
                                    ";
        // line 111
        yield Twig\Extension\CoreExtension::include($this->env, $context, "commande/_delete_form.html.twig");
        yield "
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Section Commande -->
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
        return "commande/show.html.twig";
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
        return array (  284 => 111,  280 => 110,  276 => 109,  268 => 104,  262 => 100,  253 => 96,  245 => 93,  241 => 92,  237 => 91,  233 => 90,  229 => 89,  225 => 88,  222 => 87,  219 => 86,  216 => 85,  210 => 84,  208 => 83,  187 => 65,  180 => 61,  173 => 57,  147 => 34,  132 => 21,  125 => 19,  122 => 18,  119 => 17,  115 => 16,  112 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Commande{% endblock %}

{% block body %}
<div class=\"app\">
    <div class=\"app-wrap\">
        <div class=\"loader\">
            <div class=\"h-100 d-flex justify-content-center\">
                <div class=\"align-self-center\">
                    <img src=\"img/loader/loader.svg\" alt=\"loader\">
                </div>
            </div>
        </div>                                            {% set total = 0 %}

{% for ligne in commande.lignes %}
                                                {% set ligneTotal = ligne.quantite * ligne.prixUnitaire %}
                                                {% set total = total + ligneTotal %}
                                          
                                            {% endfor %}
        <div class=\"app-container\">
            <div class=\"app-main\" id=\"main\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12 m-b-30\">
                            <div class=\"d-block d-lg-flex flex-nowrap align-items-center\">
                                <div class=\"page-title mr-4 pr-4 border-right\">
                                    <h1>Commande</h1>
                                </div>
                                <div class=\"breadcrumb-bar align-items-center\">
                                    <nav>
                                        <ol class=\"breadcrumb p-0 m-b-0\">
                                            <li class=\"breadcrumb-item\">
                                                <a href=\"{{ path('app_home') }}\"><i class=\"ti ti-home\"></i></a>
                                            </li>
                                            <li class=\"breadcrumb-item\">
                                                Commandes
                                            </li>
                                            <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">Détails</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Section Commande -->
                    <div class=\"row\">
                        <div class=\"col-md-10 mx-auto\">
                            <div class=\"card shadow\">
                                <div class=\"card-body\">
                                    <h2 class=\"mb-4\">Détails de la Commande</h2>
                                    <table class=\"table table-bordered\">
                                        <tbody>
                                            <tr>
                                                <th>ID</th>
                                                <td>{{ commande.id }}</td>
                                            </tr>
                                            <tr>
                                                <th>Date de Commande</th>
                                                <td>{{ commande.dateCommande ? commande.dateCommande|date('Y-m-d H:i:s') : 'N/A' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Montant Total</th>
                                                <td>{{ total|number_format(2, '.', ' ') }}  TND</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <!-- Lignes de Commande -->
                                    <h3 class=\"mt-4\">Lignes de Commande</h3>
                                    <table class=\"table table-striped\">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Quantité</th>
                                                <th>Prix Unitaire (TND)</th>
                                                <th>Total (TND)</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {% set total = 0 %}
                                            {% for ligne in commande.lignes %}
                                                {% set ligneTotal = ligne.quantite * ligne.prixUnitaire %}
                                                {% set total = total + ligneTotal %}
                                                <tr>
                                                    <td>{{ ligne.id }}</td>
                                                    <td>{{ ligne.quantite }}</td>
                                                    <td>{{ ligne.prixUnitaire|number_format(2, '.', ' ') }}</td>
                                                    <td>{{ ligneTotal|number_format(2, '.', ' ') }}</td>
                                                    <td> <a class=\"btn btn-secondary\" href=\"{{ path('app_ligne_commande_show', {'id': ligne.id}) }}\">consulter</a>
                    <a href=\"{{ path('app_ligne_commande_edit', {'id': ligne.id}) }}\" class=\"btn btn-warning\" >modifier</a></td>
                                                </tr>
                                            {% else %}
                                                <tr>
                                                    <td colspan=\"4\" class=\"text-center text-muted\">Aucune ligne de commande</td>
                                                </tr>
                                            {% endfor %}
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan=\"3\" class=\"text-right\">Total Calculé</th>
                                                <th>{{ total|number_format(2, '.', ' ') }} TND</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                    <a class=\"btn btn-success\" href=\"{{ path('app_commande_add_ligne_de_commande', {'id': commande.id}) }}\">Ajouter une Ligne</a>
                                    <a class=\"btn btn-warning\" href=\"{{ path('app_commande_edit', {'id': commande.id}) }}\">Modifier</a>
                                    {{ include('commande/_delete_form.html.twig') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin Section Commande -->
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "commande/show.html.twig", "C:\\Users\\Administrator\\Desktop\\symfony_pi_dev (4)\\symfony_pi_dev\\templates\\commande\\show.html.twig");
    }
}
