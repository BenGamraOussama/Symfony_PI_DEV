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

/* exercice/index.html.twig */
class __TwigTemplate_e66982c94d4af76aadc0d1af793da32c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "exercice/index.html.twig", 1);
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
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- Notification -->
                        
                        <!-- end row -->
                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"modal fade\" id=\"deleteExerciceModal\" tabindex=\"-1\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header bg-danger text-white\">
                                            <h5 class=\"modal-title\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirm Deletion</h5>
                                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            Are you sure you want to delete this exercice? This action cannot be undone.
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                                            <button type=\"button\" class=\"btn btn-danger\" id=\"confirmExerciceDelete\">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"container-fluid py-0\">
                                <div class=\"row\">
                                    
                                    <div class=\"col-md-10 main-content\"><br>
                                                    <br><br>
                                        <div class=\"card shadow\" >
                                            <div class=\"card-header bg-primary text-white\">
                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                    <h2 class=\"h4 mb-0\">Exercices List</h2>
                                                    <a href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_new");
        yield "\" class=\"btn btn-light btn-sm\">
                                                        <i class=\"bi bi-plus-circle\"></i> Create New
                                                    </a>
                                                </div>
                                            </div>
                        
                                            <div class=\"card-body\">
                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-striped table-hover \">
                                                        <thead class=\"table-light\">
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Titre</th>
                                                                <th>Description</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["exercices"]) || array_key_exists("exercices", $context) ? $context["exercices"] : (function () { throw new RuntimeError('Variable "exercices" does not exist.', 106, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["exercice"]) {
            // line 107
            yield "                                                            <tr>
                                                                <td>";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 108), "html", null, true);
            yield "</td>
                                                                <td>";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exercice"], "titre", [], "any", false, false, false, 109), "html", null, true);
            yield "</td>
                                                                <td>";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["exercice"], "description", [], "any", false, false, false, 110), "html", null, true);
            yield "</td>
                                                                <td>
                                                                    <span class=\"badge status-badge 
                                                                        ";
            // line 113
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["exercice"], "status", [], "any", false, false, false, 113) == "not_started")) {
                yield "bg-secondary
                                                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 114
$context["exercice"], "status", [], "any", false, false, false, 114) == "in_progress")) {
                yield "bg-warning text-dark
                                                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 115
$context["exercice"], "status", [], "any", false, false, false, 115) == "completed")) {
                yield "bg-success
                                                                        ";
            }
            // line 116
            yield "\">
                                                                        ";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["exercice"], "status", [], "any", false, false, false, 117), ["_" => " "])), "html", null, true);
            yield "
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <div class=\"d-flex gap-2\">
                                                                        <a href=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 122)]), "html", null, true);
            yield "\" 
                                                                           class=\"btn btn-sm btn-info\"
                                                                           title=\"View details\">
                                                                            <i class=\"bi bi-eye\"></i>
                                                                        </a>
                        
                                                                        <a href=\"";
            // line 128
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 128)]), "html", null, true);
            yield "\" 
                                                                           class=\"btn btn-sm btn-warning\"
                                                                           title=\"Edit item\">
                                                                            <i class=\"bi bi-pencil\"></i>
                                                                        </a>
                        
                                                                        <form method=\"post\" 
                                                      action=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 135)]), "html", null, true);
            yield "\" 
                                                      onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["exercice"], "id", [], "any", false, false, false, 137))), "html", null, true);
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
            // line 148
            yield "                                                            <tr>
                                                                <td colspan=\"5\" class=\"text-center text-muted py-4\">No records found</td>
                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['exercice'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        yield "                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                            ";
        // line 161
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 184
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
    
                            <style>
                                
                                
                                .table-responsive {
                                    overflow-x: auto;
                                    
                                }
                            </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 161
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

        // line 162
        yield "                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const deleteButtons = document.querySelectorAll('.delete-exercice-btn');
                                        const confirmDeleteBtn = document.getElementById('confirmExerciceDelete');
                                        let currentExerciceId = null;
                        
                                        deleteButtons.forEach(button => {
                                            button.addEventListener('click', function() {
                                                currentExerciceId = this.dataset.exerciceId;
                                            });
                                        });
                        
                                        confirmDeleteBtn.addEventListener('click', function() {
                                            if(currentExerciceId) {
                                                const form = document.getElementById(`deleteExerciceForm\${currentExerciceId}`);
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
        return "exercice/index.html.twig";
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
        return array (  368 => 162,  355 => 161,  314 => 184,  312 => 161,  301 => 152,  292 => 148,  276 => 137,  271 => 135,  261 => 128,  252 => 122,  244 => 117,  241 => 116,  236 => 115,  232 => 114,  228 => 113,  222 => 110,  218 => 109,  214 => 108,  211 => 107,  206 => 106,  184 => 87,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- Notification -->
                        
                        <!-- end row -->
                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"modal fade\" id=\"deleteExerciceModal\" tabindex=\"-1\">
                                <div class=\"modal-dialog\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header bg-danger text-white\">
                                            <h5 class=\"modal-title\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirm Deletion</h5>
                                            <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                                        </div>
                                        <div class=\"modal-body\">
                                            Are you sure you want to delete this exercice? This action cannot be undone.
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                                            <button type=\"button\" class=\"btn btn-danger\" id=\"confirmExerciceDelete\">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"container-fluid py-0\">
                                <div class=\"row\">
                                    
                                    <div class=\"col-md-10 main-content\"><br>
                                                    <br><br>
                                        <div class=\"card shadow\" >
                                            <div class=\"card-header bg-primary text-white\">
                                                <div class=\"d-flex justify-content-between align-items-center\">
                                                    <h2 class=\"h4 mb-0\">Exercices List</h2>
                                                    <a href=\"{{ path('app_exercice_new') }}\" class=\"btn btn-light btn-sm\">
                                                        <i class=\"bi bi-plus-circle\"></i> Create New
                                                    </a>
                                                </div>
                                            </div>
                        
                                            <div class=\"card-body\">
                                                <div class=\"table-responsive\">
                                                    <table class=\"table table-striped table-hover \">
                                                        <thead class=\"table-light\">
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Titre</th>
                                                                <th>Description</th>
                                                                <th>Status</th>
                                                                <th>Actions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        {% for exercice in exercices %}
                                                            <tr>
                                                                <td>{{ exercice.id }}</td>
                                                                <td>{{ exercice.titre }}</td>
                                                                <td>{{ exercice.description }}</td>
                                                                <td>
                                                                    <span class=\"badge status-badge 
                                                                        {% if exercice.status == 'not_started' %}bg-secondary
                                                                        {% elseif exercice.status == 'in_progress' %}bg-warning text-dark
                                                                        {% elseif exercice.status == 'completed' %}bg-success
                                                                        {% endif %}\">
                                                                        {{ exercice.status|replace({'_': ' '})|title }}
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    <div class=\"d-flex gap-2\">
                                                                        <a href=\"{{ path('app_exercice_show', {'id': exercice.id}) }}\" 
                                                                           class=\"btn btn-sm btn-info\"
                                                                           title=\"View details\">
                                                                            <i class=\"bi bi-eye\"></i>
                                                                        </a>
                        
                                                                        <a href=\"{{ path('app_exercice_edit', {'id': exercice.id}) }}\" 
                                                                           class=\"btn btn-sm btn-warning\"
                                                                           title=\"Edit item\">
                                                                            <i class=\"bi bi-pencil\"></i>
                                                                        </a>
                        
                                                                        <form method=\"post\" 
                                                      action=\"{{ path('app_exercice_delete', {'id': exercice.id}) }}\" 
                                                      onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ exercice.id) }}\">
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
                                </div>
                            </div>
                        
                            {% block javascripts %}
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const deleteButtons = document.querySelectorAll('.delete-exercice-btn');
                                        const confirmDeleteBtn = document.getElementById('confirmExerciceDelete');
                                        let currentExerciceId = null;
                        
                                        deleteButtons.forEach(button => {
                                            button.addEventListener('click', function() {
                                                currentExerciceId = this.dataset.exerciceId;
                                            });
                                        });
                        
                                        confirmDeleteBtn.addEventListener('click', function() {
                                            if(currentExerciceId) {
                                                const form = document.getElementById(`deleteExerciceForm\${currentExerciceId}`);
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
    
                            <style>
                                
                                
                                .table-responsive {
                                    overflow-x: auto;
                                    
                                }
                            </style>
{% endblock %}
", "exercice/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\exercice\\index.html.twig");
    }
}
