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

/* admin/ajouterFournisseur.html.twig */
class __TwigTemplate_7ae49780fd473758bb5dd2be179d850c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterFournisseur.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/ajouterFournisseur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/ajouterFournisseur.html.twig", 1);
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
                                            <h4 class=\"card-title\">Ajouter Fournisseur</h4>
                                        </div>
                                    </div>
                                    ";
        // line 66
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["fournisseuradd"]) || array_key_exists("fournisseuradd", $context) ? $context["fournisseuradd"] : (function () { throw new RuntimeError('Variable "fournisseuradd" does not exist.', 66, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                                    <div class=\"card-body\">
                                        <div class=\"form-group\">
                                            ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseuradd"]) || array_key_exists("fournisseuradd", $context) ? $context["fournisseuradd"] : (function () { throw new RuntimeError('Variable "fournisseuradd" does not exist.', 69, $this->source); })()), "firstName", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "First Name"]]);
        yield "
                                            <div class=\"text-danger\">
                                                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseuradd"]) || array_key_exists("fournisseuradd", $context) ? $context["fournisseuradd"] : (function () { throw new RuntimeError('Variable "fournisseuradd" does not exist.', 71, $this->source); })()), "firstName", [], "any", false, false, false, 71), 'errors');
        yield "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseuradd"]) || array_key_exists("fournisseuradd", $context) ? $context["fournisseuradd"] : (function () { throw new RuntimeError('Variable "fournisseuradd" does not exist.', 75, $this->source); })()), "lastName", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control form-control", "placeholder" => "Last Name"]]);
        yield "
                                            <div class=\"text-danger\">
                                                ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseuradd"]) || array_key_exists("fournisseuradd", $context) ? $context["fournisseuradd"] : (function () { throw new RuntimeError('Variable "fournisseuradd" does not exist.', 77, $this->source); })()), "lastName", [], "any", false, false, false, 77), 'errors');
        yield "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseuradd"]) || array_key_exists("fournisseuradd", $context) ? $context["fournisseuradd"] : (function () { throw new RuntimeError('Variable "fournisseuradd" does not exist.', 81, $this->source); })()), "email", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control form-control-sm", "placeholder" => "Email"]]);
        yield "
                                            <div class=\"text-danger\">
                                                ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseuradd"]) || array_key_exists("fournisseuradd", $context) ? $context["fournisseuradd"] : (function () { throw new RuntimeError('Variable "fournisseuradd" does not exist.', 83, $this->source); })()), "email", [], "any", false, false, false, 83), 'errors');
        yield "
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseuradd"]) || array_key_exists("fournisseuradd", $context) ? $context["fournisseuradd"] : (function () { throw new RuntimeError('Variable "fournisseuradd" does not exist.', 87, $this->source); })()), "adresse", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control form-control", "placeholder" => "Adresse"]]);
        yield "
                                            <div class=\"text-danger\">
                                                ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournisseuradd"]) || array_key_exists("fournisseuradd", $context) ? $context["fournisseuradd"] : (function () { throw new RuntimeError('Variable "fournisseuradd" does not exist.', 89, $this->source); })()), "adresse", [], "any", false, false, false, 89), 'errors');
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
        // line 98
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["fournisseuradd"]) || array_key_exists("fournisseuradd", $context) ? $context["fournisseuradd"] : (function () { throw new RuntimeError('Variable "fournisseuradd" does not exist.', 98, $this->source); })()), 'form_end');
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
        return "admin/ajouterFournisseur.html.twig";
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
        return array (  224 => 98,  212 => 89,  207 => 87,  200 => 83,  195 => 81,  188 => 77,  183 => 75,  176 => 71,  171 => 69,  165 => 66,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                                            <h4 class=\"card-title\">Ajouter Fournisseur</h4>
                                        </div>
                                    </div>
                                    {{ form_start(fournisseuradd, {'attr': {'novalidate': 'novalidate'}}) }}
                                    <div class=\"card-body\">
                                        <div class=\"form-group\">
                                            {{ form_widget(fournisseuradd.firstName, { 'attr': {'class': 'form-control form-control-lg', 'placeholder': 'First Name'} }) }}
                                            <div class=\"text-danger\">
                                                {{ form_errors(fournisseuradd.firstName) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_widget(fournisseuradd.lastName, { 'attr': {'class': 'form-control form-control', 'placeholder': 'Last Name'} }) }}
                                            <div class=\"text-danger\">
                                                {{ form_errors(fournisseuradd.lastName) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_widget(fournisseuradd.email, { 'attr': {'class': 'form-control form-control-sm', 'placeholder': 'Email'} }) }}
                                            <div class=\"text-danger\">
                                                {{ form_errors(fournisseuradd.email) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_widget(fournisseuradd.adresse, { 'attr': {'class': 'form-control form-control', 'placeholder': 'Adresse'} }) }}
                                            <div class=\"text-danger\">
                                                {{ form_errors(fournisseuradd.adresse) }}
                                            </div>
                                        </div>
                                        <div class=\"form-group\">
                                            <button type=\"submit\" class=\"btn btn-primary\">
                                                Ajouter
                                            </button>
                                        </div>
                                    </div>
                                    {{ form_end(fournisseuradd) }}
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
    
{% endblock %}", "admin/ajouterFournisseur.html.twig", "C:\\Users\\OUSSAMA BEN GAMRA\\OneDrive\\Desktop\\symfony\\symfony_pi_dev\\templates\\admin\\ajouterFournisseur.html.twig");
    }
}
