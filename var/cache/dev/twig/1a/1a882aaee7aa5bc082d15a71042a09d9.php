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
class __TwigTemplate_82b76c9cf6ef643309876dc7cc233943 extends Template
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

        yield "Admin";
        
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
        yield "    <!-- begin app -->
    <div class=\"app\">
        <!-- begin app-wrap -->
        <div class=\"app-wrap\">
            <!-- begin pre-loader -->
            <div class=\"loader\">
                <div class=\"h-100 d-flex justify-content-center\">
                    <div class=\"align-self-center\">
                        <img src=\"img/loader/loader.svg\" alt=\"loader\">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
            <header></header>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class=\"app-container\">
                <!-- begin app-nabar -->
               
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class=\"app-main\" id=\"main\">
                    <!-- begin container-fluid -->
                    <div class=\"container-fluid\">
                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"col-md-12 m-b-30\">
                                <!-- begin page title -->
                                <div class=\"d-block d-lg-flex flex-nowrap align-items-center\">
                                    <div class=\"page-title mr-4 pr-4 border-right\">
                                        <h1>Activite</h1>
                                    </div>
                                    <div class=\"breadcrumb-bar align-items-center\">
                                        <nav>
                                            <ol class=\"breadcrumb p-0 m-b-0\">
                                                <li class=\"breadcrumb-item\">
                                                    <a href=\"index.html\"><i class=\"ti ti-home\"></i></a>
                                                </li>
                                                <li class=\"breadcrumb-item\">
                                                    Activite
                                                </li>
                                                <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">Default</li>
                                            </ol>
                                        </nav>
                                    </div>
                                   
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- Notification -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                               
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"modal fade\" id=\"deleteConfirmModal\" tabindex=\"-1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-danger text-white\">
                    <h5 class=\"modal-title\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirm Deletion</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    Are you sure you want to delete this activity? This action cannot be undone.
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                    <button type=\"button\" class=\"btn btn-danger\" id=\"modalConfirmDelete\">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <div> 
        <div class=\"card shadow\">
            <div class=\"card-header bg-primary text-white\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h2 class=\"h4 mb-0\">Activities List</h2>
                    <a href=\"";
        // line 89
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_new");
        yield "\" class=\"btn btn-light btn-sm\">
                        <i class=\"bi bi-plus-circle\"></i> Create New
                    </a>
                </div>
            </div>

            <div class=\"card-body\">
           <form method=\"get\" class=\"mb-3\">
    <label for=\"filterType\" class=\"form-label\">Filter by Type:</label>
    <select id=\"filterType\" name=\"type\" class=\"form-select\" onchange=\"this.form.submit()\">
        <option value=\"\">All</option>
        <option value=\"mentale\" ";
        // line 100
        if (((isset($context["typeFilter"]) || array_key_exists("typeFilter", $context) ? $context["typeFilter"] : (function () { throw new RuntimeError('Variable "typeFilter" does not exist.', 100, $this->source); })()) == "mentale")) {
            yield "selected";
        }
        yield ">MENTALE</option>
        <option value=\"relaxation\" ";
        // line 101
        if (((isset($context["typeFilter"]) || array_key_exists("typeFilter", $context) ? $context["typeFilter"] : (function () { throw new RuntimeError('Variable "typeFilter" does not exist.', 101, $this->source); })()) == "relaxation")) {
            yield "selected";
        }
        yield ">RELAXATION</option>
        <option value=\"sociale\" ";
        // line 102
        if (((isset($context["typeFilter"]) || array_key_exists("typeFilter", $context) ? $context["typeFilter"] : (function () { throw new RuntimeError('Variable "typeFilter" does not exist.', 102, $this->source); })()) == "sociale")) {
            yield "selected";
        }
        yield ">SOCIALE</option>
    </select>
</form>

                <div class=\"table-responsive\">
                    <table class=\"table table-striped table-hover\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["activites"]) || array_key_exists("activites", $context) ? $context["activites"] : (function () { throw new RuntimeError('Variable "activites" does not exist.', 118, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activite"]) {
            // line 119
            yield "                            <tr>
                                <td>";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "titre", [], "any", false, false, false, 120), "html", null, true);
            yield "</td>
                                <td>";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "description", [], "any", false, false, false, 121), "html", null, true);
            yield "</td>
                                <td>
    <span class=\"badge status-badge 
        ";
            // line 124
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "status", [], "any", false, false, false, 124) == "not_started")) {
                yield "bg-secondary
        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 125
$context["activite"], "status", [], "any", false, false, false, 125) == "in_progress")) {
                yield "bg-warning text-dark
        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 126
$context["activite"], "status", [], "any", false, false, false, 126) == "completed")) {
                yield "bg-success
        ";
            }
            // line 127
            yield "\">
        ";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "status", [], "any", false, false, false, 128), ["_" => " "])), "html", null, true);
            yield "
    </span>
    </td>      
                                <td>";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "type", [], "any", false, false, false, 131), "html", null, true);
            yield "</td>
                                <td>
                                    <div class=\"d-flex gap-2\">
                                        <a href=\"";
            // line 134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 134)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-info\"
                                           title=\"Show\">
                                            <i class=\"bi bi-eye\"></i>
                                        </a>

                                        <a href=\"";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 140)]), "html", null, true);
            yield "\" 
                                           class=\"btn btn-sm btn-warning\"
                                           title=\"Edit\">
                                            <i class=\"bi bi-pencil\"></i>
                                        </a>

                                    
                                        ";
            // line 148
            yield "                                       <form method=\"post\" 
                              action=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 149)]), "html", null, true);
            yield "\" 
                              onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["activite"], "id", [], "any", false, false, false, 151))), "html", null, true);
            yield "\">
                            <button type=\"submit\" 
                                    class=\"btn btn-sm btn-danger\"
                                    title=\"Delete\">
                                <i class=\"bi bi-trash\"></i>
                            </button>
                        </form>
                                    </div>
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 162
            yield "                            <tr>
                                <td colspan=\"5\" class=\"text-center text-muted py-4\">No records found</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activite'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 173
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 197
        yield "
                        </div>
                       
                        <!-- end row -->
                        <!-- event Modal -->
                        
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
            <footer></footer>
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 173
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

        // line 174
        yield "        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const deleteButtons = document.querySelectorAll('.delete-btn');
                const confirmDeleteBtn = document.getElementById('modalConfirmDelete');
                let currentActivityId = null;

                deleteButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        currentActivityId = this.dataset.activityId;
                    });
                });

                confirmDeleteBtn.addEventListener('click', function() {
                    if(currentActivityId) {
                        const form = document.getElementById(`deleteForm\${currentActivityId}`);
                        if(form) {
                            form.submit();
                        }
                    }
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
        return array (  387 => 174,  374 => 173,  342 => 197,  340 => 173,  331 => 166,  322 => 162,  306 => 151,  301 => 149,  298 => 148,  288 => 140,  279 => 134,  273 => 131,  267 => 128,  264 => 127,  259 => 126,  255 => 125,  251 => 124,  245 => 121,  241 => 120,  238 => 119,  233 => 118,  212 => 102,  206 => 101,  200 => 100,  186 => 89,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin{% endblock %}

{% block body %}
    <!-- begin app -->
    <div class=\"app\">
        <!-- begin app-wrap -->
        <div class=\"app-wrap\">
            <!-- begin pre-loader -->
            <div class=\"loader\">
                <div class=\"h-100 d-flex justify-content-center\">
                    <div class=\"align-self-center\">
                        <img src=\"img/loader/loader.svg\" alt=\"loader\">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
            <header></header>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class=\"app-container\">
                <!-- begin app-nabar -->
               
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class=\"app-main\" id=\"main\">
                    <!-- begin container-fluid -->
                    <div class=\"container-fluid\">
                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"col-md-12 m-b-30\">
                                <!-- begin page title -->
                                <div class=\"d-block d-lg-flex flex-nowrap align-items-center\">
                                    <div class=\"page-title mr-4 pr-4 border-right\">
                                        <h1>Activite</h1>
                                    </div>
                                    <div class=\"breadcrumb-bar align-items-center\">
                                        <nav>
                                            <ol class=\"breadcrumb p-0 m-b-0\">
                                                <li class=\"breadcrumb-item\">
                                                    <a href=\"index.html\"><i class=\"ti ti-home\"></i></a>
                                                </li>
                                                <li class=\"breadcrumb-item\">
                                                    Activite
                                                </li>
                                                <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">Default</li>
                                            </ol>
                                        </nav>
                                    </div>
                                   
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- Notification -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                               
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"modal fade\" id=\"deleteConfirmModal\" tabindex=\"-1\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-danger text-white\">
                    <h5 class=\"modal-title\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirm Deletion</h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    Are you sure you want to delete this activity? This action cannot be undone.
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                    <button type=\"button\" class=\"btn btn-danger\" id=\"modalConfirmDelete\">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <div> 
        <div class=\"card shadow\">
            <div class=\"card-header bg-primary text-white\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <h2 class=\"h4 mb-0\">Activities List</h2>
                    <a href=\"{{ path('app_activite_new') }}\" class=\"btn btn-light btn-sm\">
                        <i class=\"bi bi-plus-circle\"></i> Create New
                    </a>
                </div>
            </div>

            <div class=\"card-body\">
           <form method=\"get\" class=\"mb-3\">
    <label for=\"filterType\" class=\"form-label\">Filter by Type:</label>
    <select id=\"filterType\" name=\"type\" class=\"form-select\" onchange=\"this.form.submit()\">
        <option value=\"\">All</option>
        <option value=\"mentale\" {% if typeFilter == 'mentale' %}selected{% endif %}>MENTALE</option>
        <option value=\"relaxation\" {% if typeFilter == 'relaxation' %}selected{% endif %}>RELAXATION</option>
        <option value=\"sociale\" {% if typeFilter == 'sociale' %}selected{% endif %}>SOCIALE</option>
    </select>
</form>

                <div class=\"table-responsive\">
                    <table class=\"table table-striped table-hover\">
                        <thead class=\"table-light\">
                            <tr>
                                <th>Titre</th>
                                <th>Description</th>
                                <th>Status</th>
                                <th>Type</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for activite in activites %}
                            <tr>
                                <td>{{ activite.titre }}</td>
                                <td>{{ activite.description }}</td>
                                <td>
    <span class=\"badge status-badge 
        {% if activite.status == 'not_started' %}bg-secondary
        {% elseif activite.status == 'in_progress' %}bg-warning text-dark
        {% elseif activite.status == 'completed' %}bg-success
        {% endif %}\">
        {{ activite.status|replace({'_': ' '})|title }}
    </span>
    </td>      
                                <td>{{ activite.type }}</td>
                                <td>
                                    <div class=\"d-flex gap-2\">
                                        <a href=\"{{ path('app_activite_show', {'id': activite.id}) }}\" 
                                           class=\"btn btn-sm btn-info\"
                                           title=\"Show\">
                                            <i class=\"bi bi-eye\"></i>
                                        </a>

                                        <a href=\"{{ path('app_activite_edit', {'id': activite.id}) }}\" 
                                           class=\"btn btn-sm btn-warning\"
                                           title=\"Edit\">
                                            <i class=\"bi bi-pencil\"></i>
                                        </a>

                                    
                                        {# Hidden Delete Form #}
                                       <form method=\"post\" 
                              action=\"{{ path('app_activite_delete', {'id': activite.id}) }}\" 
                              onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ activite.id) }}\">
                            <button type=\"submit\" 
                                    class=\"btn btn-sm btn-danger\"
                                    title=\"Delete\">
                                <i class=\"bi bi-trash\"></i>
                            </button>
                        </form>
                                    </div>
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"5\" class=\"text-center text-muted py-4\">No records found</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {% block javascripts %}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const deleteButtons = document.querySelectorAll('.delete-btn');
                const confirmDeleteBtn = document.getElementById('modalConfirmDelete');
                let currentActivityId = null;

                deleteButtons.forEach(button => {
                    button.addEventListener('click', function() {
                        currentActivityId = this.dataset.activityId;
                    });
                });

                confirmDeleteBtn.addEventListener('click', function() {
                    if(currentActivityId) {
                        const form = document.getElementById(`deleteForm\${currentActivityId}`);
                        if(form) {
                            form.submit();
                        }
                    }
                });
            });
        </script>
    {% endblock %}

                        </div>
                       
                        <!-- end row -->
                        <!-- event Modal -->
                        
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
            <footer></footer>
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
{% endblock %}
", "activite/index.html.twig", "C:\\xampp\\htdocs\\symfony_pi_dev (4)\\symfony_pi_dev\\templates\\activite\\index.html.twig");
    }
}
