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

/* admin/ajouterPsychiatre.html.twig */
class __TwigTemplate_79d0195962ad76d257d3d443cb8c22d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterPsychiatre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterPsychiatre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/ajouterPsychiatre.html.twig", 1);
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
        yield "<style>
.text-danger {
    color: red;
}
</style>
    <!-- begin app -->
    <div class=\"app\">
        <!-- begin app-wrap -->
        <div class=\"app-wrap\">
            <!-- begin pre-loader -->
            <div class=\"loader\">
                <div class=\"h-100 d-flex justify-content-center\">
                    <div class=\"align-self-center\">
                        <img src=\"";
        // line 19
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
                                            <h4 class=\"card-title\">Ajouter Psychiatre</h4>
                                        </div>
                                    </div>
                                    ";
        // line 71
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["psychiatreadd"]) || array_key_exists("psychiatreadd", $context) ? $context["psychiatreadd"] : (function () { throw new RuntimeError('Variable "psychiatreadd" does not exist.', 71, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                                    <div class=\"card-body\">
                                        <div class=\"form-group\">
                                            ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreadd"]) || array_key_exists("psychiatreadd", $context) ? $context["psychiatreadd"] : (function () { throw new RuntimeError('Variable "psychiatreadd" does not exist.', 74, $this->source); })()), "firstName", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "First Name"]]);
        yield "
                                            <div class=\"text-danger\">
                                                ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreadd"]) || array_key_exists("psychiatreadd", $context) ? $context["psychiatreadd"] : (function () { throw new RuntimeError('Variable "psychiatreadd" does not exist.', 76, $this->source); })()), "firstName", [], "any", false, false, false, 76), 'errors');
        yield "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreadd"]) || array_key_exists("psychiatreadd", $context) ? $context["psychiatreadd"] : (function () { throw new RuntimeError('Variable "psychiatreadd" does not exist.', 80, $this->source); })()), "lastName", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control form-control", "placeholder" => "Last Name"]]);
        yield "
                                            <div class=\"text-danger\">
                                                ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreadd"]) || array_key_exists("psychiatreadd", $context) ? $context["psychiatreadd"] : (function () { throw new RuntimeError('Variable "psychiatreadd" does not exist.', 82, $this->source); })()), "lastName", [], "any", false, false, false, 82), 'errors');
        yield "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreadd"]) || array_key_exists("psychiatreadd", $context) ? $context["psychiatreadd"] : (function () { throw new RuntimeError('Variable "psychiatreadd" does not exist.', 86, $this->source); })()), "email", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control form-control-sm", "placeholder" => "Email"]]);
        yield "
                                            <div class=\"text-danger\">
                                                ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreadd"]) || array_key_exists("psychiatreadd", $context) ? $context["psychiatreadd"] : (function () { throw new RuntimeError('Variable "psychiatreadd" does not exist.', 88, $this->source); })()), "email", [], "any", false, false, false, 88), 'errors');
        yield "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreadd"]) || array_key_exists("psychiatreadd", $context) ? $context["psychiatreadd"] : (function () { throw new RuntimeError('Variable "psychiatreadd" does not exist.', 92, $this->source); })()), "specialite", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "form-control form-control-sm", "placeholder" => "Specialite"]]);
        yield "
                                            <div class=\"text-danger\">
                                                ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreadd"]) || array_key_exists("psychiatreadd", $context) ? $context["psychiatreadd"] : (function () { throw new RuntimeError('Variable "psychiatreadd" does not exist.', 94, $this->source); })()), "specialite", [], "any", false, false, false, 94), 'errors');
        yield "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreadd"]) || array_key_exists("psychiatreadd", $context) ? $context["psychiatreadd"] : (function () { throw new RuntimeError('Variable "psychiatreadd" does not exist.', 98, $this->source); })()), "numLicence", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control form-control_sm", "placeholder" => "Numéro de licence"]]);
        yield "
                                            <div class=\"text-danger\">
                                                ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreadd"]) || array_key_exists("psychiatreadd", $context) ? $context["psychiatreadd"] : (function () { throw new RuntimeError('Variable "psychiatreadd" does not exist.', 100, $this->source); })()), "numLicence", [], "any", false, false, false, 100), 'errors');
        yield "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreadd"]) || array_key_exists("psychiatreadd", $context) ? $context["psychiatreadd"] : (function () { throw new RuntimeError('Variable "psychiatreadd" does not exist.', 104, $this->source); })()), "adresse", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => "form-control form-control", "placeholder" => "Adresse"]]);
        yield "
                                            <div class=\"text-danger\">
                                                ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreadd"]) || array_key_exists("psychiatreadd", $context) ? $context["psychiatreadd"] : (function () { throw new RuntimeError('Variable "psychiatreadd" does not exist.', 106, $this->source); })()), "adresse", [], "any", false, false, false, 106), 'errors');
        yield "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreadd"]) || array_key_exists("psychiatreadd", $context) ? $context["psychiatreadd"] : (function () { throw new RuntimeError('Variable "psychiatreadd" does not exist.', 110, $this->source); })()), "phone", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Numéro de téléphone"]]);
        yield "
                                            <div class=\"text-danger\">
                                                ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreadd"]) || array_key_exists("psychiatreadd", $context) ? $context["psychiatreadd"] : (function () { throw new RuntimeError('Variable "psychiatreadd" does not exist.', 112, $this->source); })()), "phone", [], "any", false, false, false, 112), 'errors');
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
        // line 122
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["psychiatreadd"]) || array_key_exists("psychiatreadd", $context) ? $context["psychiatreadd"] : (function () { throw new RuntimeError('Variable "psychiatreadd" does not exist.', 122, $this->source); })()), 'form_end');
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
        return "admin/ajouterPsychiatre.html.twig";
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
        return array (  266 => 122,  253 => 112,  248 => 110,  241 => 106,  236 => 104,  229 => 100,  224 => 98,  217 => 94,  212 => 92,  205 => 88,  200 => 86,  193 => 82,  188 => 80,  181 => 76,  176 => 74,  170 => 71,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin{% endblock %}

{% block body %}
<style>
.text-danger {
    color: red;
}
</style>
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
                                            <h4 class=\"card-title\">Ajouter Psychiatre</h4>
                                        </div>
                                    </div>
                                    {{ form_start(psychiatreadd, {'attr': {'novalidate': 'novalidate'}}) }}
                                    <div class=\"card-body\">
                                        <div class=\"form-group\">
                                            {{ form_widget(psychiatreadd.firstName, { 'attr': {'class': 'form-control form-control-lg', 'placeholder': 'First Name'} }) }}
                                            <div class=\"text-danger\">
                                                {{ form_errors(psychiatreadd.firstName) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_widget(psychiatreadd.lastName, { 'attr': {'class': 'form-control form-control', 'placeholder': 'Last Name'} }) }}
                                            <div class=\"text-danger\">
                                                {{ form_errors(psychiatreadd.lastName) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_widget(psychiatreadd.email, { 'attr': {'class': 'form-control form-control-sm', 'placeholder': 'Email'} }) }}
                                            <div class=\"text-danger\">
                                                {{ form_errors(psychiatreadd.email) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_widget(psychiatreadd.specialite, { 'attr': {'class': 'form-control form-control-sm', 'placeholder': 'Specialite'} }) }}
                                            <div class=\"text-danger\">
                                                {{ form_errors(psychiatreadd.specialite) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_widget(psychiatreadd.numLicence, { 'attr': {'class': 'form-control form-control_sm', 'placeholder': 'Numéro de licence'} }) }}
                                            <div class=\"text-danger\">
                                                {{ form_errors(psychiatreadd.numLicence) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_widget(psychiatreadd.adresse, { 'attr': {'class': 'form-control form-control', 'placeholder': 'Adresse'} }) }}
                                            <div class=\"text-danger\">
                                                {{ form_errors(psychiatreadd.adresse) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_widget(psychiatreadd.phone, { 'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Numéro de téléphone'} }) }}
                                            <div class=\"text-danger\">
                                                {{ form_errors(psychiatreadd.phone) }}
                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"btn btn-primary\">
                                                Ajouter
                                            </button>
                                        </div>
                                    </div>
                                    {{ form_end(psychiatreadd) }}
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
    
{% endblock %}", "admin/ajouterPsychiatre.html.twig", "C:\\Users\\OUSSAMA BEN GAMRA\\OneDrive\\Desktop\\symfony\\symfony_pi_dev\\templates\\admin\\ajouterPsychiatre.html.twig");
    }
}
