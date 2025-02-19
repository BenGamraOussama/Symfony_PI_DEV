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

/* exercice/_form.html.twig */
class __TwigTemplate_faa88b604b036184ccbf0d85393ded96 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
<div class=\"card shadow\">
    <div class=\"card-header bg-primary text-white\">
        <h5 class=\"mb-0\">
            <i class=\"bi bi-person-plus me-2\"></i>
            ";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 6, $this->source); })()), "New Exercise")) : ("New Exercise")), "html", null, true);
        yield "
        </h5>
    </div>
    
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 14
        yield "                <div class=\"mb-4\">
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Title"]);
        yield "
                    ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "titre", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 17
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "titre", [], "any", false, false, false, 17), "vars", [], "any", false, false, false, 17), "valid", [], "any", false, false, false, 17)) ? ("") : (" is-invalid"))), "placeholder" => "Enter exercise title"]]);
        // line 19
        yield "
                    <div class=\"invalid-feedback\">
                        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "titre", [], "any", false, false, false, 21), 'errors');
        yield "
                    </div>
                </div>

                ";
        // line 26
        yield "                <div class=\"mb-4\">
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "description", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Description"]);
        yield "
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 29
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "valid", [], "any", false, false, false, 29)) ? ("") : (" is-invalid"))), "rows" => 4, "placeholder" => "Describe the exercise details"]]);
        // line 32
        yield "
                    <div class=\"invalid-feedback\">
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'errors');
        yield "
                    </div>
                </div>

               ";
        // line 39
        yield "<div class=\"row mb-4\">
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "status", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Status"]);
        yield "
            <div class=\"input-group\">
                <span class=\"input-group-text\">
                    <i class=\"bi bi-activity\"></i>
                </span>
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "status", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => ("form-select" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 49
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "status", [], "any", false, false, false, 49), "vars", [], "any", false, false, false, 49), "valid", [], "any", false, false, false, 49)) ? ("") : (" is-invalid")))]]);
        // line 51
        yield "
            </div>
            <div class=\"invalid-feedback\">
                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "status", [], "any", false, false, false, 54), 'errors');
        yield "
            </div>
        </div>
    </div>
</div>

                ";
        // line 61
        yield "                <div class=\"mb-4\">
                    <div class=\"form-group\">
                        <label class=\"form-label fw-bold\">
                            <i class=\"bi bi-person-heart me-2\"></i>
                            Associated Patient
                        </label>
                        ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "patient", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => ("form-select" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 69
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "patient", [], "any", false, false, false, 69), "vars", [], "any", false, false, false, 69), "valid", [], "any", false, false, false, 69)) ? ("") : (" is-invalid"))), "data-choices" => true]]);
        // line 72
        yield "
                        <small class=\"form-text text-muted\">Select patient(s) for this exercise</small>
                        <div class=\"invalid-feedback\">
                            ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "patient", [], "any", false, false, false, 75), 'errors');
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"card-footer bg-light\">
        <div class=\"d-flex justify-content-between\">
            <button type=\"reset\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-eraser me-2\"></i>Reset Form
            </button>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"bi bi-save me-2\"></i>";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 89, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "
            </button>
        </div>
    </div>
</div>
";
        // line 94
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "exercice/_form.html.twig";
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
        return array (  179 => 94,  171 => 89,  154 => 75,  149 => 72,  147 => 69,  146 => 67,  138 => 61,  129 => 54,  124 => 51,  122 => 49,  121 => 47,  113 => 42,  108 => 39,  101 => 34,  97 => 32,  95 => 29,  94 => 28,  90 => 27,  87 => 26,  80 => 21,  76 => 19,  74 => 17,  73 => 16,  69 => 15,  66 => 14,  56 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}
<div class=\"card shadow\">
    <div class=\"card-header bg-primary text-white\">
        <h5 class=\"mb-0\">
            <i class=\"bi bi-person-plus me-2\"></i>
            {{ button_label|default('New Exercise') }}
        </h5>
    </div>
    
    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {# Title Field #}
                <div class=\"mb-4\">
                    {{ form_label(form.titre, 'Title', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.titre, {'attr': {
                        'class': 'form-control' ~ (form.titre.vars.valid ? '' : ' is-invalid'),
                        'placeholder': 'Enter exercise title'
                    }}) }}
                    <div class=\"invalid-feedback\">
                        {{ form_errors(form.titre) }}
                    </div>
                </div>

                {# Description Field #}
                <div class=\"mb-4\">
                    {{ form_label(form.description, 'Description', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.description, {'attr': {
                        'class': 'form-control' ~ (form.description.vars.valid ? '' : ' is-invalid'),
                        'rows': 4,
                        'placeholder': 'Describe the exercise details'
                    }}) }}
                    <div class=\"invalid-feedback\">
                        {{ form_errors(form.description) }}
                    </div>
                </div>

               {# Status Field #}
<div class=\"row mb-4\">
    <div class=\"col-md-6\">
        <div class=\"form-group\">
            {{ form_label(form.status, 'Status', {'label_attr': {'class': 'form-label fw-bold'}}) }}
            <div class=\"input-group\">
                <span class=\"input-group-text\">
                    <i class=\"bi bi-activity\"></i>
                </span>
                {{ form_widget(form.status, {
                    'attr': {
                        'class': 'form-select' ~ (form.status.vars.valid ? '' : ' is-invalid')
                    }
                }) }}
            </div>
            <div class=\"invalid-feedback\">
                {{ form_errors(form.status) }}
            </div>
        </div>
    </div>
</div>

                {# Patient Field #}
                <div class=\"mb-4\">
                    <div class=\"form-group\">
                        <label class=\"form-label fw-bold\">
                            <i class=\"bi bi-person-heart me-2\"></i>
                            Associated Patient
                        </label>
                        {{ form_widget(form.patient, {
                            'attr': {
                                'class': 'form-select' ~ (form.patient.vars.valid ? '' : ' is-invalid'),
                                'data-choices': true
                            }
                        }) }}
                        <small class=\"form-text text-muted\">Select patient(s) for this exercise</small>
                        <div class=\"invalid-feedback\">
                            {{ form_errors(form.patient) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"card-footer bg-light\">
        <div class=\"d-flex justify-content-between\">
            <button type=\"reset\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-eraser me-2\"></i>Reset Form
            </button>
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"bi bi-save me-2\"></i>{{ button_label|default('Save') }}
            </button>
        </div>
    </div>
</div>
{{ form_end(form) }}", "exercice/_form.html.twig", "C:\\xampp\\htdocs\\symfony_pi_dev (4)\\symfony_pi_dev\\templates\\exercice\\_form.html.twig");
    }
}
