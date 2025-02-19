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

/* exercice/show.html.twig */
class __TwigTemplate_9378b2a3fce0c5e92dd50a3b9e9eadc9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "exercice/show.html.twig", 1);
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

        yield "exercice";
        
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
        yield "<!-- begin app -->
<div class=\"app\">
    <!-- begin app-wrap -->
    <div class=\"app-wrap\">
        <!-- begin app-container -->
        <div class=\"app-container\">
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
                                    <h1>Activity Details</h1>
                                </div>
                                <div class=\"breadcrumb-bar align-items-center\">
                                    <nav>
                                        <ol class=\"breadcrumb p-0 m-b-0\">
                                            <li class=\"breadcrumb-item\">
                                                <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"ti ti-home\"></i></a>
                                            </li>
                                            <li class=\"breadcrumb-item\">
                                                <a href=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_index");
        yield "\">Activities</a>
                                            </li>
                                            <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">Details</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <!-- end page title -->
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- begin row -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card card-statistics shadow\">
                                <div class=\"card-header bg-primary text-white\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <h2 class=\"h4 mb-0\">Activity ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), "html", null, true);
        yield "</h2>
                                        
                                    </div>
                                </div>

                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <dl class=\"row mb-4\">
                                                <dt class=\"col-sm-4\">ID</dt>
                                                <dd class=\"col-sm-8\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59), "html", null, true);
        yield "</dd>

                                                <dt class=\"col-sm-4\">Title</dt>
                                                <dd class=\"col-sm-8\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 62, $this->source); })()), "titre", [], "any", false, false, false, 62), "html", null, true);
        yield "</dd>

                                                
                                            </dl>
                                        </div>

                                        <div class=\"col-md-6\">
                                            <dl class=\"row mb-4\">
                                                <dt class=\"col-sm-4\">Status</dt>
                                                <dd class=\"col-sm-8\">
                                                    <span class=\"badge status-badge 
                                                        ";
        // line 73
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 73, $this->source); })()), "status", [], "any", false, false, false, 73) == "not_started")) {
            yield "bg-secondary
                                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 74
(isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 74, $this->source); })()), "status", [], "any", false, false, false, 74) == "in_progress")) {
            yield "bg-warning text-dark
                                                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 75
(isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 75, $this->source); })()), "status", [], "any", false, false, false, 75) == "completed")) {
            yield "bg-success
                                                        ";
        }
        // line 76
        yield "\">
                                                        ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 77, $this->source); })()), "status", [], "any", false, false, false, 77), ["_" => " "])), "html", null, true);
        yield "
                                                    </span>
                                                </dd>
                                                <dt class=\"col-sm-4\">Description</dt>
                                                <dd class=\"col-sm-8\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 81, $this->source); })()), "description", [], "any", false, false, false, 81), "html", null, true);
        yield "</dd>
                                            </dl>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end app-main -->
        </div>
        <!-- end app-container -->
    </div>
    <!-- end app-wrap -->
</div>
<!-- end app -->

<!-- Delete Confirmation Modal -->
<div class=\"modal fade\" id=\"deleteConfirmModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirm Deletion</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                Are you absolutely sure you want to delete this activity? This action cannot be undone.
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                ";
        // line 116
        yield Twig\Extension\CoreExtension::include($this->env, $context, "exercice/_delete_form.html.twig");
        yield "
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 124
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

        // line 125
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    // Delete confirmation handler
    const confirmDeleteBtn = document.getElementById('modalConfirmDelete');
    if(confirmDeleteBtn) {
        confirmDeleteBtn.addEventListener('click', function() {
            document.getElementById('deleteForm').submit();
        });
    }
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
        return "exercice/show.html.twig";
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
        return array (  277 => 125,  264 => 124,  246 => 116,  208 => 81,  201 => 77,  198 => 76,  193 => 75,  189 => 74,  185 => 73,  171 => 62,  165 => 59,  152 => 49,  131 => 31,  125 => 28,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}exercice{% endblock %}

{% block body %}
<!-- begin app -->
<div class=\"app\">
    <!-- begin app-wrap -->
    <div class=\"app-wrap\">
        <!-- begin app-container -->
        <div class=\"app-container\">
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
                                    <h1>Activity Details</h1>
                                </div>
                                <div class=\"breadcrumb-bar align-items-center\">
                                    <nav>
                                        <ol class=\"breadcrumb p-0 m-b-0\">
                                            <li class=\"breadcrumb-item\">
                                                <a href=\"{{ path('app_home') }}\"><i class=\"ti ti-home\"></i></a>
                                            </li>
                                            <li class=\"breadcrumb-item\">
                                                <a href=\"{{ path('app_exercice_index') }}\">Activities</a>
                                            </li>
                                            <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">Details</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                            <!-- end page title -->
                        </div>
                    </div>
                    <!-- end row -->

                    <!-- begin row -->
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card card-statistics shadow\">
                                <div class=\"card-header bg-primary text-white\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <h2 class=\"h4 mb-0\">Activity {{ exercice.id }}</h2>
                                        
                                    </div>
                                </div>

                                <div class=\"card-body\">
                                    <div class=\"row\">
                                        <div class=\"col-md-6\">
                                            <dl class=\"row mb-4\">
                                                <dt class=\"col-sm-4\">ID</dt>
                                                <dd class=\"col-sm-8\">{{ exercice.id }}</dd>

                                                <dt class=\"col-sm-4\">Title</dt>
                                                <dd class=\"col-sm-8\">{{ exercice.titre }}</dd>

                                                
                                            </dl>
                                        </div>

                                        <div class=\"col-md-6\">
                                            <dl class=\"row mb-4\">
                                                <dt class=\"col-sm-4\">Status</dt>
                                                <dd class=\"col-sm-8\">
                                                    <span class=\"badge status-badge 
                                                        {% if exercice.status == 'not_started' %}bg-secondary
                                                        {% elseif exercice.status == 'in_progress' %}bg-warning text-dark
                                                        {% elseif exercice.status == 'completed' %}bg-success
                                                        {% endif %}\">
                                                        {{ exercice.status|replace({'_': ' '})|title }}
                                                    </span>
                                                </dd>
                                                <dt class=\"col-sm-4\">Description</dt>
                                                <dd class=\"col-sm-8\">{{ exercice.description }}</dd>
                                            </dl>
                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end app-main -->
        </div>
        <!-- end app-container -->
    </div>
    <!-- end app-wrap -->
</div>
<!-- end app -->

<!-- Delete Confirmation Modal -->
<div class=\"modal fade\" id=\"deleteConfirmModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-danger text-white\">
                <h5 class=\"modal-title\"><i class=\"bi bi-exclamation-triangle me-2\"></i>Confirm Deletion</h5>
                <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
            </div>
            <div class=\"modal-body\">
                Are you absolutely sure you want to delete this activity? This action cannot be undone.
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
                {{ include('exercice/_delete_form.html.twig') }}
            </div>
        </div>
    </div>
</div>

{% endblock %}

{% block javascripts %}
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Delete confirmation handler
    const confirmDeleteBtn = document.getElementById('modalConfirmDelete');
    if(confirmDeleteBtn) {
        confirmDeleteBtn.addEventListener('click', function() {
            document.getElementById('deleteForm').submit();
        });
    }
});
</script>
{% endblock %}", "exercice/show.html.twig", "C:\\xampp\\htdocs\\symfony_pi_dev (4)\\symfony_pi_dev\\templates\\exercice\\show.html.twig");
    }
}
