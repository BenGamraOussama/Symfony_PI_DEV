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

/* activite/_form.html.twig */
class __TwigTemplate_784f60b0eccc2f2462ab501cd24b39b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "activite/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => true]]);
        yield "
<div class=\"card shadow\">
    <div class=\"card-header bg-primary text-white\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">
                <i class=\"bi bi-activity me-2\"></i>
                ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 7, $this->source); })()), "New Activity")) : ("New Activity")), "html", null, true);
        yield "
            </h5>
            
        </div>
    </div>

    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 17
        yield "                <div class=\"mb-4\">
                    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "titre", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Title"]);
        yield "
                    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "titre", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "titre", [], "any", false, false, false, 20), "vars", [], "any", false, false, false, 20), "valid", [], "any", false, false, false, 20)) ? ("") : (" is-invalid"))), "placeholder" => "Enter activity title"]]);
        // line 22
        yield "
                    <div class=\"invalid-feedback\">
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "titre", [], "any", false, false, false, 24), 'errors');
        yield "
                    </div>
                </div>

                ";
        // line 29
        yield "                <div class=\"mb-4\">
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Description"]);
        yield "
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => ("form-control" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 32
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "valid", [], "any", false, false, false, 32)) ? ("") : (" is-invalid"))), "rows" => 4, "placeholder" => "Describe the activity details"]]);
        // line 35
        yield "
                    <div class=\"invalid-feedback\">
                        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "description", [], "any", false, false, false, 37), 'errors');
        yield "
                    </div>
                </div>

                ";
        // line 42
        yield "                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "status", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Status"]);
        yield "
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">
                                    <i class=\"bi bi-check-circle\"></i>
                                </span>
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "status", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => ("form-select" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 51
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "status", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "valid", [], "any", false, false, false, 51)) ? ("") : (" is-invalid")))]]);
        // line 52
        yield "
                            </div>
                            <div class=\"invalid-feedback\">
                                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "status", [], "any", false, false, false, 55), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "type", [], "any", false, false, false, 61), 'label', ["label_attr" => ["class" => "form-label fw-bold"], "label" => "Type"]);
        yield "
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">
                                    <i class=\"bi bi-tag\"></i>
                                </span>
                                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "type", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => ("form-select" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 67
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "type", [], "any", false, false, false, 67), "vars", [], "any", false, false, false, 67), "valid", [], "any", false, false, false, 67)) ? ("") : (" is-invalid")))]]);
        // line 68
        yield "
                            </div>
                            <div class=\"invalid-feedback\">
                                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "type", [], "any", false, false, false, 71), 'errors');
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                ";
        // line 78
        yield "                <div class=\"mb-4\">
                    <div class=\"form-group\">
                        <label class=\"form-label fw-bold\">
                            <i class=\"bi bi-person-heart me-2\"></i>
                            Associated Patients
                        </label>
                        ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "patient", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => ("form-select" . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 86
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "patient", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "valid", [], "any", false, false, false, 86)) ? ("") : (" is-invalid"))), "data-choices" => true]]);
        // line 89
        yield "
                        <small class=\"form-text text-muted\">Select patient(s) for this activity</small>
                        <div class=\"invalid-feedback\">
                            ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "patient", [], "any", false, false, false, 92), 'errors');
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
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 106, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "
            </button>
        </div>
    </div>
</div>
";
        // line 111
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "activite/_form.html.twig";
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
        return array (  207 => 111,  199 => 106,  182 => 92,  177 => 89,  175 => 86,  174 => 84,  166 => 78,  157 => 71,  152 => 68,  150 => 67,  149 => 66,  141 => 61,  132 => 55,  127 => 52,  125 => 51,  124 => 50,  116 => 45,  111 => 42,  104 => 37,  100 => 35,  98 => 32,  97 => 31,  93 => 30,  90 => 29,  83 => 24,  79 => 22,  77 => 20,  76 => 19,  72 => 18,  69 => 17,  57 => 7,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': true}}) }}
<div class=\"card shadow\">
    <div class=\"card-header bg-primary text-white\">
        <div class=\"d-flex justify-content-between align-items-center\">
            <h5 class=\"mb-0\">
                <i class=\"bi bi-activity me-2\"></i>
                {{ button_label|default('New Activity') }}
            </h5>
            
        </div>
    </div>

    <div class=\"card-body\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {# Title Field #}
                <div class=\"mb-4\">
                    {{ form_label(form.titre, 'Title', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                    {{ form_widget(form.titre, {'attr': {
                        'class': 'form-control' ~ (form.titre.vars.valid ? '' : ' is-invalid'),
                        'placeholder': 'Enter activity title'
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
                        'placeholder': 'Describe the activity details'
                    }}) }}
                    <div class=\"invalid-feedback\">
                        {{ form_errors(form.description) }}
                    </div>
                </div>

                {# Status & Type Row #}
                <div class=\"row mb-4\">
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(form.status, 'Status', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">
                                    <i class=\"bi bi-check-circle\"></i>
                                </span>
                                {{ form_widget(form.status, {'attr': {
                                    'class': 'form-select' ~ (form.status.vars.valid ? '' : ' is-invalid')
                                }}) }}
                            </div>
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.status) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_label(form.type, 'Type', {'label_attr': {'class': 'form-label fw-bold'}}) }}
                            <div class=\"input-group\">
                                <span class=\"input-group-text\">
                                    <i class=\"bi bi-tag\"></i>
                                </span>
                                {{ form_widget(form.type, {'attr': {
                                    'class': 'form-select' ~ (form.type.vars.valid ? '' : ' is-invalid')
                                }}) }}
                            </div>
                            <div class=\"invalid-feedback\">
                                {{ form_errors(form.type) }}
                            </div>
                        </div>
                    </div>
                </div>

                {# Patients Field #}
                <div class=\"mb-4\">
                    <div class=\"form-group\">
                        <label class=\"form-label fw-bold\">
                            <i class=\"bi bi-person-heart me-2\"></i>
                            Associated Patients
                        </label>
                        {{ form_widget(form.patient, {
                            'attr': {
                                'class': 'form-select' ~ (form.patient.vars.valid ? '' : ' is-invalid'),
                                'data-choices': true
                            }
                        }) }}
                        <small class=\"form-text text-muted\">Select patient(s) for this activity</small>
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
{{ form_end(form) }}", "activite/_form.html.twig", "C:\\xampp\\htdocs\\symfony_pi_dev (4)\\symfony_pi_dev\\templates\\activite\\_form.html.twig");
    }
}
