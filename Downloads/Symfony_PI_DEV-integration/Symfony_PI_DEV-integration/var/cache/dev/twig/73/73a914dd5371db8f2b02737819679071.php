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

/* activite/new.html.twig */
class __TwigTemplate_dd2cc5b4e263fb1ac204fe5c9da404ce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "activite/new.html.twig", 1);
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

        yield "New Activity";
        
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
                    <div class=\"row\">
                        <div class=\"col-md-12 m-b-30\">
                            <div class=\"d-block d-lg-flex flex-nowrap align-items-center\">
                                <div class=\"page-title mr-4 pr-4 border-right\">
                                    <h1>New Activity</h1>
                                </div>
                                <div class=\"breadcrumb-bar align-items-center\">
                                    <nav>
                                        <ol class=\"breadcrumb p-0 m-b-0\">
                                            <li class=\"breadcrumb-item\">
                                                <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><i class=\"ti ti-home\"></i></a>
                                            </li>
                                            <li class=\"breadcrumb-item\">
                                                <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_index");
        yield "\">Activities</a>
                                            </li>
                                            <li class=\"breadcrumb-item active text-primary\">New Activity</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card shadow\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h2 class=\"h4 mb-0\">Create New Activity</h2>
                                </div>
                                <div class=\"card-body\">
                                    ";
        // line 41
        yield Twig\Extension\CoreExtension::include($this->env, $context, "activite/_form.html.twig");
        yield "
                                </div>
                                <div class=\"card-footer bg-light\">
                                    <a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_index");
        yield "\" class=\"btn btn-secondary\">
                                        <i class=\"bi bi-arrow-left me-2\"></i>Back to List
                                    </a>
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
        // line 57
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

        // line 58
        yield "<script>
document.addEventListener('DOMContentLoaded', function() {
    const typeSelect = document.getElementById('activite_type');
    const exerciseSection = document.getElementById('exercise-section');
    
    function toggleExerciseFields() {
        if (typeSelect.value === 'exercise') {
            exerciseSection.style.display = 'block';
            document.getElementById('activite_exercice_question').required = true;
        } else {
            exerciseSection.style.display = 'none';
            document.getElementById('activite_exercice_question').required = false;
        }
    }

    // Initial state
    toggleExerciseFields();
    
    // Listen for changes
    typeSelect.addEventListener('change', toggleExerciseFields);
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
        return "activite/new.html.twig";
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
        return array (  189 => 58,  166 => 57,  150 => 44,  144 => 41,  124 => 24,  118 => 21,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}New Activity{% endblock %}

{% block body %}
<div class=\"app\">
    <div class=\"app-wrap\">
        <div class=\"app-container\">
            <div class=\"app-main\" id=\"main\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"col-md-12 m-b-30\">
                            <div class=\"d-block d-lg-flex flex-nowrap align-items-center\">
                                <div class=\"page-title mr-4 pr-4 border-right\">
                                    <h1>New Activity</h1>
                                </div>
                                <div class=\"breadcrumb-bar align-items-center\">
                                    <nav>
                                        <ol class=\"breadcrumb p-0 m-b-0\">
                                            <li class=\"breadcrumb-item\">
                                                <a href=\"{{ path('app_home') }}\"><i class=\"ti ti-home\"></i></a>
                                            </li>
                                            <li class=\"breadcrumb-item\">
                                                <a href=\"{{ path('app_activite_index') }}\">Activities</a>
                                            </li>
                                            <li class=\"breadcrumb-item active text-primary\">New Activity</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"card shadow\">
                                <div class=\"card-header bg-primary text-white\">
                                    <h2 class=\"h4 mb-0\">Create New Activity</h2>
                                </div>
                                <div class=\"card-body\">
                                    {{ include('activite/_form.html.twig') }}
                                </div>
                                <div class=\"card-footer bg-light\">
                                    <a href=\"{{ path('app_activite_index') }}\" class=\"btn btn-secondary\">
                                        <i class=\"bi bi-arrow-left me-2\"></i>Back to List
                                    </a>
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
    const typeSelect = document.getElementById('activite_type');
    const exerciseSection = document.getElementById('exercise-section');
    
    function toggleExerciseFields() {
        if (typeSelect.value === 'exercise') {
            exerciseSection.style.display = 'block';
            document.getElementById('activite_exercice_question').required = true;
        } else {
            exerciseSection.style.display = 'none';
            document.getElementById('activite_exercice_question').required = false;
        }
    }

    // Initial state
    toggleExerciseFields();
    
    // Listen for changes
    typeSelect.addEventListener('change', toggleExerciseFields);
});
</script>
{% endblock %}
{% endblock %}
", "activite/new.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\activite\\new.html.twig");
    }
}
