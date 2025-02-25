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

/* reset_password/reset.html.twig */
class __TwigTemplate_f56ff213238feec5f1b4db24697fae9f extends Template
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
        return "basePatient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

        $this->parent = $this->loadTemplate("basePatient.html.twig", "reset_password/reset.html.twig", 1);
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

        yield "Reset your password";
        
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
        yield "<!-- Start Preloader Area -->
<div class=\"preloader-area\">
    <div class=\"spinner\">
        <div class=\"inner\">
            <div class=\"disc\"></div>
            <div class=\"disc\"></div>
            <div class=\"disc\"></div>
        </div>
    </div>
</div>

<div class=\"search-overlay\">
    <div class=\"d-table\">
        <div class=\"d-table-cell\">
            <div class=\"search-overlay-layer\"></div>
            <div class=\"search-overlay-layer\"></div>
            <div class=\"search-overlay-layer\"></div>
            
            <div class=\"search-overlay-close\">
                <span class=\"search-overlay-close-line\"></span>
                <span class=\"search-overlay-close-line\"></span>
            </div>

            <div class=\"search-overlay-form\">
                <form>
                    <input type=\"text\" class=\"input-search\" placeholder=\"Search here...\">
                    <button type=\"submit\"><i class='flaticon-search'></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class=\"page-banner-with-full-image item-bg3\">
    <div class=\"container\">
        <div class=\"page-banner-content-two\">
            <h2>Reset your password</h2>
            <ul>
                <li>
                    <a href=\"index.html\">Home</a>
                </li>
                <li>Reset your password</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Login Area -->
<section class=\"login-area ptb-100\">
    <div class=\"container\">
        <div class=\"login-form\">
            <h2>Reset your password</h2>

            ";
        // line 59
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 59, $this->source); })()), 'form_start');
        yield "
                <div class=\"form-group\">
                    <label for=\"plainPassword\">New Password</label>
                    ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 62, $this->source); })()), "plainPassword", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "New Password"]]);
        yield "
                    <div class=\"text-danger mb-3\">
                        ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 64, $this->source); })()), "plainPassword", [], "any", false, false, false, 64), 'errors');
        yield "
                    </div>
                </div>
                <button class=\"btn btn-primary\">Reset password</button>
            ";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 68, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</section>
<div class=\"go-top\">
    <i class='flaticon-up-arrow'></i>
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
        return "reset_password/reset.html.twig";
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
        return array (  173 => 68,  166 => 64,  161 => 62,  155 => 59,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePatient.html.twig' %}

{% block title %}Reset your password{% endblock %}

{% block body %}
<!-- Start Preloader Area -->
<div class=\"preloader-area\">
    <div class=\"spinner\">
        <div class=\"inner\">
            <div class=\"disc\"></div>
            <div class=\"disc\"></div>
            <div class=\"disc\"></div>
        </div>
    </div>
</div>

<div class=\"search-overlay\">
    <div class=\"d-table\">
        <div class=\"d-table-cell\">
            <div class=\"search-overlay-layer\"></div>
            <div class=\"search-overlay-layer\"></div>
            <div class=\"search-overlay-layer\"></div>
            
            <div class=\"search-overlay-close\">
                <span class=\"search-overlay-close-line\"></span>
                <span class=\"search-overlay-close-line\"></span>
            </div>

            <div class=\"search-overlay-form\">
                <form>
                    <input type=\"text\" class=\"input-search\" placeholder=\"Search here...\">
                    <button type=\"submit\"><i class='flaticon-search'></i></button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class=\"page-banner-with-full-image item-bg3\">
    <div class=\"container\">
        <div class=\"page-banner-content-two\">
            <h2>Reset your password</h2>
            <ul>
                <li>
                    <a href=\"index.html\">Home</a>
                </li>
                <li>Reset your password</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Login Area -->
<section class=\"login-area ptb-100\">
    <div class=\"container\">
        <div class=\"login-form\">
            <h2>Reset your password</h2>

            {{ form_start(resetForm) }}
                <div class=\"form-group\">
                    <label for=\"plainPassword\">New Password</label>
                    {{ form_widget(resetForm.plainPassword, { 'attr': {'class': 'form-control', 'placeholder': 'New Password'} }) }}
                    <div class=\"text-danger mb-3\">
                        {{ form_errors(resetForm.plainPassword) }}
                    </div>
                </div>
                <button class=\"btn btn-primary\">Reset password</button>
            {{ form_end(resetForm) }}
        </div>
    </div>
</section>
<div class=\"go-top\">
    <i class='flaticon-up-arrow'></i>
</div>
{% endblock %}
", "reset_password/reset.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\reset_password\\reset.html.twig");
    }
}
