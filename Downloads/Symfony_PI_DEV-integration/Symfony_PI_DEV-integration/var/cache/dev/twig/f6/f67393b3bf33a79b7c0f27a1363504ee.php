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

/* admin/ajouterPatient.html.twig */
class __TwigTemplate_e84f648b47d53fcbff7371057570fc24 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterPatient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterPatient.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/ajouterPatient.html.twig", 1);
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
                        <img src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loader/loader.svg"), "html", null, true);
        yield "\" alt=\"loader\">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
            <app-header></app-header>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class=\"app-container\">
                <!-- begin app-nabar -->
                <app-menu></app-menu>
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class=\"app-main\" id=\"main\">
                    <!-- begin container-fluid -->
                    <div class=\"container-fluid\">
                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"col-md-12 m-b-30\">
                                <!-- begin page title -->
                                <div class=\"d-block d-sm-flex flex-nowrap align-items-center\">
                                    <div class=\"page-title mb-2 mb-sm-0\">
                                        <h1>Administrateur</h1>
                                    </div>
                                    <div class=\"ml-auto d-flex align-items-center\">
                                        <nav>
                                            <ol class=\"breadcrumb p-0 m-b-0\">
                                                <li class=\"breadcrumb-item\">
                                                    <a href=\"index.html\"><i class=\"ti ti-home\"></i></a>
                                                </li>
                                                <li class=\"breadcrumb-item\">
                                                    Forms
                                                </li>
                                                <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">Administrateur</li>
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
                            <div class=\"col-md-12\">
                                <div class=\"card card-statistics\">
                                    <div class=\"card-header\">
                                        <div class=\"card-heading\">
                                            <h4 class=\"card-title\">Ajouter Patient</h4>
                                        </div>
                                    </div>
                                    ";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["patientadd"]) || array_key_exists("patientadd", $context) ? $context["patientadd"] : (function () { throw new RuntimeError('Variable "patientadd" does not exist.', 66, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                                    <div class=\"card-body\">
                                        <div class=\"form-group\">
                                            ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientadd"]) || array_key_exists("patientadd", $context) ? $context["patientadd"] : (function () { throw new RuntimeError('Variable "patientadd" does not exist.', 69, $this->source); })()), "firstName", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "First Name"]]);
        yield "
                                            <div class=\"text-danger\">
                                                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientadd"]) || array_key_exists("patientadd", $context) ? $context["patientadd"] : (function () { throw new RuntimeError('Variable "patientadd" does not exist.', 71, $this->source); })()), "firstName", [], "any", false, false, false, 71), 'errors');
        yield "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientadd"]) || array_key_exists("patientadd", $context) ? $context["patientadd"] : (function () { throw new RuntimeError('Variable "patientadd" does not exist.', 75, $this->source); })()), "lastName", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control form-control", "placeholder" => "Last Name"]]);
        yield "
                                            <div class=\"text-danger\">
                                                ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientadd"]) || array_key_exists("patientadd", $context) ? $context["patientadd"] : (function () { throw new RuntimeError('Variable "patientadd" does not exist.', 77, $this->source); })()), "lastName", [], "any", false, false, false, 77), 'errors');
        yield "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientadd"]) || array_key_exists("patientadd", $context) ? $context["patientadd"] : (function () { throw new RuntimeError('Variable "patientadd" does not exist.', 81, $this->source); })()), "email", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control form-control-sm", "placeholder" => "Email"]]);
        yield "
                                            <div class=\"text-danger\">
                                                ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientadd"]) || array_key_exists("patientadd", $context) ? $context["patientadd"] : (function () { throw new RuntimeError('Variable "patientadd" does not exist.', 83, $this->source); })()), "email", [], "any", false, false, false, 83), 'errors');
        yield "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"btn btn-primary\">
                                                Ajouter
                                            </button>
                                        </div>
                                    </div>
                                    ";
        // line 92
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["patientadd"]) || array_key_exists("patientadd", $context) ? $context["patientadd"] : (function () { throw new RuntimeError('Variable "patientadd" does not exist.', 92, $this->source); })()), 'form_end');
        yield "
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
            <!-- begin footer -->
            <app-footer></app-footer>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/ajouterPatient.html.twig";
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
        return array (  212 => 92,  200 => 83,  195 => 81,  188 => 77,  183 => 75,  176 => 71,  171 => 69,  165 => 66,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                        <img src=\"{{ asset('assets/img/loader/loader.svg')}}\" alt=\"loader\">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
            <app-header></app-header>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class=\"app-container\">
                <!-- begin app-nabar -->
                <app-menu></app-menu>
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class=\"app-main\" id=\"main\">
                    <!-- begin container-fluid -->
                    <div class=\"container-fluid\">
                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"col-md-12 m-b-30\">
                                <!-- begin page title -->
                                <div class=\"d-block d-sm-flex flex-nowrap align-items-center\">
                                    <div class=\"page-title mb-2 mb-sm-0\">
                                        <h1>Administrateur</h1>
                                    </div>
                                    <div class=\"ml-auto d-flex align-items-center\">
                                        <nav>
                                            <ol class=\"breadcrumb p-0 m-b-0\">
                                                <li class=\"breadcrumb-item\">
                                                    <a href=\"index.html\"><i class=\"ti ti-home\"></i></a>
                                                </li>
                                                <li class=\"breadcrumb-item\">
                                                    Forms
                                                </li>
                                                <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">Administrateur</li>
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
                            <div class=\"col-md-12\">
                                <div class=\"card card-statistics\">
                                    <div class=\"card-header\">
                                        <div class=\"card-heading\">
                                            <h4 class=\"card-title\">Ajouter Patient</h4>
                                        </div>
                                    </div>
                                    {{ form_start(patientadd, {'attr': {'novalidate': 'novalidate'}}) }}
                                    <div class=\"card-body\">
                                        <div class=\"form-group\">
                                            {{ form_widget(patientadd.firstName, { 'attr': {'class': 'form-control form-control-lg', 'placeholder': 'First Name'} }) }}
                                            <div class=\"text-danger\">
                                                {{ form_errors(patientadd.firstName) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_widget(patientadd.lastName, { 'attr': {'class': 'form-control form-control', 'placeholder': 'Last Name'} }) }}
                                            <div class=\"text-danger\">
                                                {{ form_errors(patientadd.lastName) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_widget(patientadd.email, { 'attr': {'class': 'form-control form-control-sm', 'placeholder': 'Email'} }) }}
                                            <div class=\"text-danger\">
                                                {{ form_errors(patientadd.email) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"btn btn-primary\">
                                                Ajouter
                                            </button>
                                        </div>
                                    </div>
                                    {{ form_end(patientadd) }}
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
            <!-- begin footer -->
            <app-footer></app-footer>
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
    
{% endblock %}", "admin/ajouterPatient.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\admin\\ajouterPatient.html.twig");
    }
}
