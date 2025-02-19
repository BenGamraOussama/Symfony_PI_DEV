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

/* patient/index.html.twig */
class __TwigTemplate_b9c8b3c071a46debb0e7ce016b079041 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "basePatient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/index.html.twig"));

        $this->parent = $this->loadTemplate("basePatient.html.twig", "patient/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        // line 3
        yield "<div class=\"container my-5\">
    <h2 class=\"text-center mb-5\">Welcome to Your Wellness Portal</h2>
    
    <div class=\"row g-4\">
        ";
        // line 8
        yield "        <div class=\"col-md-6\">
            <div class=\"card h-100 shadow-lg hover-effect\">
                <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/exercice-card.jpg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Exercise Program\">
                <div class=\"card-body\">
                    <h3 class=\"card-title mb-3\">
                        <i class=\"bi bi-heart-pulse me-2\"></i>
                        Exercise Programs
                    </h3>
                    <p class=\"card-text\">
                        Access personalized exercise routines designed by our physiotherapy experts. 
                        Track your progress and stay motivated with daily goals.
                    </p>
                    <div class=\"d-grid\">
                        <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_index");
        yield "\" class=\"btn btn-primary\">
                            View Exercises <i class=\"bi bi-arrow-right ms-2\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 30
        yield "        <div class=\"col-md-6\">
            <div class=\"card h-100 shadow-lg hover-effect\">
                <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/activity-card.jpg"), "html", null, true);
        yield "\" class=\"card-img-top\" alt=\"Activity Tracking\">
                <div class=\"card-body\">
                    <h3 class=\"card-title mb-3\">
                        <i class=\"bi bi-graph-up me-2\"></i>
                        Activity Tracking
                    </h3>
                    <p class=\"card-text\">
                        Monitor your daily activities and rehabilitation progress. 
                        Get insights and recommendations based on your performance.
                    </p>
                    <div class=\"d-grid\">
                        <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_activity_index");
        yield "\" class=\"btn btn-primary\">
                            View Activities <i class=\"bi bi-arrow-right ms-2\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 53
        yield "    <div class=\"row mt-5\">
        <div class=\"col-12 text-center\">
            <div class=\"info-box p-4 rounded-3\">
                <h4 class=\"mb-3\">
                    <i class=\"bi bi-speedometer2 me-2\"></i>
                    Your Current Progress
                </h4>
                <div class=\"progress\" style=\"height: 25px;\">
                    <div class=\"progress-bar bg-success\" role=\"progressbar\" 
                         style=\"width: 65%\" aria-valuenow=\"65\" 
                         aria-valuemin=\"0\" aria-valuemax=\"100\">
                        65% Completed
                    </div>
                </div>
                <p class=\"mt-3 mb-0 text-muted\">
                    Next milestone: 10 consecutive days of exercise
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-effect {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-effect:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    .info-box {
        background-color: #f8f9fa;
        border: 1px solid #e9ecef;
    }
    .card-img-top {
        height: 250px;
        object-fit: cover;
        border-top-left-radius: 0.375rem;
        border-top-right-radius: 0.375rem;
    }
    .progress {
        max-width: 500px;
        margin: 0 auto;
    }
</style>
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
        return "patient/index.html.twig";
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
        return array (  141 => 53,  129 => 43,  115 => 32,  111 => 30,  100 => 21,  86 => 10,  82 => 8,  76 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePatient.html.twig' %}
{% block body %}
<div class=\"container my-5\">
    <h2 class=\"text-center mb-5\">Welcome to Your Wellness Portal</h2>
    
    <div class=\"row g-4\">
        {# Exercice Card #}
        <div class=\"col-md-6\">
            <div class=\"card h-100 shadow-lg hover-effect\">
                <img src=\"{{ asset('assets/img/exercice-card.jpg') }}\" class=\"card-img-top\" alt=\"Exercise Program\">
                <div class=\"card-body\">
                    <h3 class=\"card-title mb-3\">
                        <i class=\"bi bi-heart-pulse me-2\"></i>
                        Exercise Programs
                    </h3>
                    <p class=\"card-text\">
                        Access personalized exercise routines designed by our physiotherapy experts. 
                        Track your progress and stay motivated with daily goals.
                    </p>
                    <div class=\"d-grid\">
                        <a href=\"{{ path('app_exercice_index') }}\" class=\"btn btn-primary\">
                            View Exercises <i class=\"bi bi-arrow-right ms-2\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        {# Activity Card #}
        <div class=\"col-md-6\">
            <div class=\"card h-100 shadow-lg hover-effect\">
                <img src=\"{{ asset('images/activity-card.jpg') }}\" class=\"card-img-top\" alt=\"Activity Tracking\">
                <div class=\"card-body\">
                    <h3 class=\"card-title mb-3\">
                        <i class=\"bi bi-graph-up me-2\"></i>
                        Activity Tracking
                    </h3>
                    <p class=\"card-text\">
                        Monitor your daily activities and rehabilitation progress. 
                        Get insights and recommendations based on your performance.
                    </p>
                    <div class=\"d-grid\">
                        <a href=\"{{ path('patient_activity_index') }}\" class=\"btn btn-primary\">
                            View Activities <i class=\"bi bi-arrow-right ms-2\"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {# Stats Section #}
    <div class=\"row mt-5\">
        <div class=\"col-12 text-center\">
            <div class=\"info-box p-4 rounded-3\">
                <h4 class=\"mb-3\">
                    <i class=\"bi bi-speedometer2 me-2\"></i>
                    Your Current Progress
                </h4>
                <div class=\"progress\" style=\"height: 25px;\">
                    <div class=\"progress-bar bg-success\" role=\"progressbar\" 
                         style=\"width: 65%\" aria-valuenow=\"65\" 
                         aria-valuemin=\"0\" aria-valuemax=\"100\">
                        65% Completed
                    </div>
                </div>
                <p class=\"mt-3 mb-0 text-muted\">
                    Next milestone: 10 consecutive days of exercise
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-effect {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-effect:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }
    .info-box {
        background-color: #f8f9fa;
        border: 1px solid #e9ecef;
    }
    .card-img-top {
        height: 250px;
        object-fit: cover;
        border-top-left-radius: 0.375rem;
        border-top-right-radius: 0.375rem;
    }
    .progress {
        max-width: 500px;
        margin: 0 auto;
    }
</style>
{% endblock %}
", "patient/index.html.twig", "C:\\xampp\\htdocs\\symfony_pi_dev (4)\\symfony_pi_dev\\templates\\patient\\index.html.twig");
    }
}
