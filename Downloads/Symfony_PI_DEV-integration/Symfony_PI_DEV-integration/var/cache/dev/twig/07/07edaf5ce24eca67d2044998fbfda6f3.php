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

/* activite/index.html.twig */
class __TwigTemplate_6cbcc84e6f6eb9c515e486c2eb4059e7 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activite/index.html.twig", 1);
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

        yield "Admin - Activities";
        
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
        <div class=\"app-container\">
            <div class=\"app-main\" id=\"main\">
                <div class=\"container-fluid\">
                    <!-- Header Section -->
                    <div class=\"row\">
                        <div class=\"col-md-12 m-b-30\">
                            <div class=\"d-block d-lg-flex flex-nowrap align-items-center\">
                                <div class=\"page-title mr-4 pr-4 border-right\">
                                    <h1>Activities & Exercices</h1>
                                </div>
                                <div class=\"breadcrumb-bar align-items-center\">
                                    <nav>
                                        <ol class=\"breadcrumb p-0 m-b-0\">
                                            <li class=\"breadcrumb-item\">
                                                <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"ti ti-home\"></i></a>
                                            </li>
                                            <li class=\"breadcrumb-item active\">Activities</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card shadow\">
                                <div class=\"card-header bg-primary text-white\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <h2 class=\"h4 mb-0\">Activities & Exercices Management</h2>
                                        <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_new");
        yield "\" class=\"btn btn-light btn-sm\">
                                            <i class=\"bi bi-plus-circle me-2\"></i>New
                                        </a>
                                    </div>
                                </div>

                                <div class=\"card-body\">
                                    <!-- Filters -->
                                    <form method=\"get\" class=\"mb-4\">
                                        <div class=\"row g-3\">
                                            <div class=\"col-md-8\">
                                                <label class=\"form-label\">Activity Type</label>
                                                <select name=\"type\" class=\"form-select\" onchange=\"this.form.submit()\">
                                                    <option value=\"\">All Types (Including Exercises)</option>
                                                    <option value=\"mentale\" ";
        // line 53
        yield ((((isset($context["typeFilter"]) || array_key_exists("typeFilter", $context) ? $context["typeFilter"] : (function () { throw new RuntimeError('Variable "typeFilter" does not exist.', 53, $this->source); })()) == "mentale")) ? ("selected") : (""));
        yield ">Mental</option>
                                                    <option value=\"relaxation\" ";
        // line 54
        yield ((((isset($context["typeFilter"]) || array_key_exists("typeFilter", $context) ? $context["typeFilter"] : (function () { throw new RuntimeError('Variable "typeFilter" does not exist.', 54, $this->source); })()) == "relaxation")) ? ("selected") : (""));
        yield ">Relaxation</option>
                                                    <option value=\"sociale\" ";
        // line 55
        yield ((((isset($context["typeFilter"]) || array_key_exists("typeFilter", $context) ? $context["typeFilter"] : (function () { throw new RuntimeError('Variable "typeFilter" does not exist.', 55, $this->source); })()) == "sociale")) ? ("selected") : (""));
        yield ">Social</option>
                                                    <option value=\"exercise\" ";
        // line 56
        yield ((((isset($context["typeFilter"]) || array_key_exists("typeFilter", $context) ? $context["typeFilter"] : (function () { throw new RuntimeError('Variable "typeFilter" does not exist.', 56, $this->source); })()) == "exercise")) ? ("selected") : (""));
        yield ">Exercises Only</option>
                                                </select>
                                            </div>
                                            <div class=\"col-md-4 d-flex align-items-end\">
                                                <a href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_index");
        yield "\" class=\"btn btn-secondary w-100\">Reset Filters</a>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- Activities Table -->
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover align-middle\">
                                            <thead class=\"table-light\">
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                    <th>Type</th>
                                                    <th>Exercise</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 79, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 80
            yield "                                                <tr>
                                                    <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "titre", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "description", [], "any", false, false, false, 82)), "truncate", [50, "..."], "method", false, false, false, 82), "html", null, true);
            yield "</td>
                                                    <td>
                                                        <span class=\"badge rounded-pill 
                                                            ";
            // line 85
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "status", [], "any", false, false, false, 85) == "not_started")) {
                yield "bg-secondary
                                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 86
$context["activite"], "status", [], "any", false, false, false, 86) == "in_progress")) {
                yield "bg-warning text-dark
                                                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 87
$context["activite"], "status", [], "any", false, false, false, 87) == "completed")) {
                yield "bg-success
                                                            ";
            }
            // line 88
            yield "\">
                                                            ";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "status", [], "any", false, false, false, 89), ["_" => " "])), "html", null, true);
            yield "
                                                        </span>
                                                    </td>
                                                    <td>
                                                        ";
            // line 93
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "type", [], "any", false, false, false, 93) == "exercise")) {
                // line 94
                yield "                                                            Exercise
                                                        ";
            } else {
                // line 96
                yield "                                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "type", [], "any", false, false, false, 96)), "html", null, true);
                yield "
                                                        ";
            }
            // line 98
            yield "                                                    </td>
                                                    <td>
                                                        ";
            // line 100
            if (CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "exercice", [], "any", false, false, false, 100)) {
                // line 101
                yield "                                                            <i class=\"bi bi-check-circle text-success\"></i>
                                                        ";
            } else {
                // line 103
                yield "                                                            <i class=\"bi bi-x-circle text-secondary\"></i>
                                                        ";
            }
            // line 105
            yield "                                                    </td>
                                                    <td>
                                                        <div class=\"d-flex gap-2\">
                                                            <a href=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 108)]), "html", null, true);
            yield "\" 
                                                               class=\"btn btn-sm btn-info\"
                                                               data-bs-toggle=\"tooltip\"
                                                               title=\"View Details\">
                                                                <i class=\"bi bi-eye\"></i>
                                                            </a>

                                                            <a href=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 115)]), "html", null, true);
            yield "\" 
                                                               class=\"btn btn-sm btn-warning\"
                                                               data-bs-toggle=\"tooltip\"
                                                               title=\"Edit\">
                                                                <i class=\"bi bi-pencil\"></i>
                                                            </a>

                                                            <form method=\"post\" 
                                                                  action=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 123)]), "html", null, true);
            yield "\"
                                                                  onsubmit=\"return confirm('Are you sure you want to delete this activity?');\">
                                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 125))), "html", null, true);
            yield "\">
                                                                <button type=\"submit\" 
                                                                        class=\"btn btn-sm btn-danger\"
                                                                        data-bs-toggle=\"tooltip\"
                                                                        title=\"Delete\">
                                                                    <i class=\"bi bi-trash\"></i>
                                                                </button>
                                                            </form>

                                                            ";
            // line 134
            if (CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "exercice", [], "any", false, false, false, 134)) {
                // line 135
                yield "                                                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 135)]), "html", null, true);
                yield "#responses\" 
                                                               class=\"btn btn-sm btn-success\"
                                                               data-bs-toggle=\"tooltip\"
                                                               title=\"View Responses\">
                                                                <i class=\"bi bi-chat-text\"></i>
                                                            </a>
                                                            ";
            }
            // line 142
            yield "                                                        </div>
                                                    </td>
                                                </tr>
                                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 146
            yield "                                                <tr>
                                                    <td colspan=\"6\" class=\"text-center text-muted py-4\">
                                                        No activities found matching your criteria
                                                    </td>
                                                </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activite'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 165
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 166
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Bootstrap tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    tooltipTriggerList.forEach(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
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
        return "activite/index.html.twig";
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
        return array (  377 => 166,  354 => 165,  339 => 152,  328 => 146,  320 => 142,  309 => 135,  307 => 134,  295 => 125,  290 => 123,  279 => 115,  269 => 108,  264 => 105,  260 => 103,  256 => 101,  254 => 100,  250 => 98,  244 => 96,  240 => 94,  238 => 93,  231 => 89,  228 => 88,  223 => 87,  219 => 86,  215 => 85,  209 => 82,  205 => 81,  202 => 80,  197 => 79,  175 => 60,  168 => 56,  164 => 55,  160 => 54,  156 => 53,  139 => 39,  119 => 22,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin - Activities{% endblock %}

{% block body %}
<div class=\"app\">
    <div class=\"app-wrap\">
        <div class=\"app-container\">
            <div class=\"app-main\" id=\"main\">
                <div class=\"container-fluid\">
                    <!-- Header Section -->
                    <div class=\"row\">
                        <div class=\"col-md-12 m-b-30\">
                            <div class=\"d-block d-lg-flex flex-nowrap align-items-center\">
                                <div class=\"page-title mr-4 pr-4 border-right\">
                                    <h1>Activities & Exercices</h1>
                                </div>
                                <div class=\"breadcrumb-bar align-items-center\">
                                    <nav>
                                        <ol class=\"breadcrumb p-0 m-b-0\">
                                            <li class=\"breadcrumb-item\">
                                                <a href=\"{{ path('app_home') }}\"><i class=\"ti ti-home\"></i></a>
                                            </li>
                                            <li class=\"breadcrumb-item active\">Activities</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card shadow\">
                                <div class=\"card-header bg-primary text-white\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <h2 class=\"h4 mb-0\">Activities & Exercices Management</h2>
                                        <a href=\"{{ path('app_activite_new') }}\" class=\"btn btn-light btn-sm\">
                                            <i class=\"bi bi-plus-circle me-2\"></i>New
                                        </a>
                                    </div>
                                </div>

                                <div class=\"card-body\">
                                    <!-- Filters -->
                                    <form method=\"get\" class=\"mb-4\">
                                        <div class=\"row g-3\">
                                            <div class=\"col-md-8\">
                                                <label class=\"form-label\">Activity Type</label>
                                                <select name=\"type\" class=\"form-select\" onchange=\"this.form.submit()\">
                                                    <option value=\"\">All Types (Including Exercises)</option>
                                                    <option value=\"mentale\" {{ typeFilter == 'mentale' ? 'selected' : '' }}>Mental</option>
                                                    <option value=\"relaxation\" {{ typeFilter == 'relaxation' ? 'selected' : '' }}>Relaxation</option>
                                                    <option value=\"sociale\" {{ typeFilter == 'sociale' ? 'selected' : '' }}>Social</option>
                                                    <option value=\"exercise\" {{ typeFilter == 'exercise' ? 'selected' : '' }}>Exercises Only</option>
                                                </select>
                                            </div>
                                            <div class=\"col-md-4 d-flex align-items-end\">
                                                <a href=\"{{ path('app_activite_index') }}\" class=\"btn btn-secondary w-100\">Reset Filters</a>
                                            </div>
                                        </div>
                                    </form>

                                    <!-- Activities Table -->
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover align-middle\">
                                            <thead class=\"table-light\">
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                    <th>Type</th>
                                                    <th>Exercise</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                {% for activite in activites %}
                                                <tr>
                                                    <td>{{ activite.titre }}</td>
                                                    <td>{{ activite.description|u.truncate(50, '...') }}</td>
                                                    <td>
                                                        <span class=\"badge rounded-pill 
                                                            {% if activite.status == 'not_started' %}bg-secondary
                                                            {% elseif activite.status == 'in_progress' %}bg-warning text-dark
                                                            {% elseif activite.status == 'completed' %}bg-success
                                                            {% endif %}\">
                                                            {{ activite.status|replace({'_': ' '})|title }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        {% if activite.type == 'exercise' %}
                                                            Exercise
                                                        {% else %}
                                                            {{ activite.type|capitalize }}
                                                        {% endif %}
                                                    </td>
                                                    <td>
                                                        {% if activite.exercice %}
                                                            <i class=\"bi bi-check-circle text-success\"></i>
                                                        {% else %}
                                                            <i class=\"bi bi-x-circle text-secondary\"></i>
                                                        {% endif %}
                                                    </td>
                                                    <td>
                                                        <div class=\"d-flex gap-2\">
                                                            <a href=\"{{ path('app_activite_show', {'id': activite.id}) }}\" 
                                                               class=\"btn btn-sm btn-info\"
                                                               data-bs-toggle=\"tooltip\"
                                                               title=\"View Details\">
                                                                <i class=\"bi bi-eye\"></i>
                                                            </a>

                                                            <a href=\"{{ path('app_activite_edit', {'id': activite.id}) }}\" 
                                                               class=\"btn btn-sm btn-warning\"
                                                               data-bs-toggle=\"tooltip\"
                                                               title=\"Edit\">
                                                                <i class=\"bi bi-pencil\"></i>
                                                            </a>

                                                            <form method=\"post\" 
                                                                  action=\"{{ path('app_activite_delete', {'id': activite.id}) }}\"
                                                                  onsubmit=\"return confirm('Are you sure you want to delete this activity?');\">
                                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ activite.id) }}\">
                                                                <button type=\"submit\" 
                                                                        class=\"btn btn-sm btn-danger\"
                                                                        data-bs-toggle=\"tooltip\"
                                                                        title=\"Delete\">
                                                                    <i class=\"bi bi-trash\"></i>
                                                                </button>
                                                            </form>

                                                            {% if activite.exercice %}
                                                            <a href=\"{{ path('app_activite_show', {'id': activite.id}) }}#responses\" 
                                                               class=\"btn btn-sm btn-success\"
                                                               data-bs-toggle=\"tooltip\"
                                                               title=\"View Responses\">
                                                                <i class=\"bi bi-chat-text\"></i>
                                                            </a>
                                                            {% endif %}
                                                        </div>
                                                    </td>
                                                </tr>
                                                {% else %}
                                                <tr>
                                                    <td colspan=\"6\" class=\"text-center text-muted py-4\">
                                                        No activities found matching your criteria
                                                    </td>
                                                </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Bootstrap tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    tooltipTriggerList.forEach(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
});
</script>
{% endblock %}
{% endblock %}
", "activite/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\activite\\index.html.twig");
    }
}
