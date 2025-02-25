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

/* exercice/edit.html.twig */
class __TwigTemplate_36e6a7733ae8ae4d9c00df5c3c06c7e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "exercice/edit.html.twig", 1);
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
                            <div class=\"\">
                                <!-- begin page title -->
                                <div class=\"d-block d-lg-flex flex-nowrap align-items-center\">
                                    <div class=\"page-title mr-4 pr-4 border-right\">
                                        <h1>exercice</h1>
                                    </div>
                                    <div class=\"breadcrumb-bar align-items-center\">
                                        <nav>
                                            <ol class=\"breadcrumb p-0 m-b-0\">
                                                <li class=\"breadcrumb-item\">
                                                    <a href=\"index.html\"><i class=\"ti ti-home\"></i></a>
                                                </li>
                                                <li class=\"breadcrumb-item\">
                                                    exercice
                                                </li>
                                                <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">Default</li>
                                            </ol>
                                        </nav>
                                    </div>
                                   
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- Notification -->
                        
                        <!-- end row -->
                        <!-- begin row -->
                        <div class=\"row\">
                            

                            <div class=\"container-fluid py-4\">
                                            <div class=\"row justify-content-center\">
                                            <div class=\"col-md-8\">
                                                ";
        // line 67
        yield Twig\Extension\CoreExtension::include($this->env, $context, "exercice/_form.html.twig", ["button_label" => "Update"]);
        yield "
                                            </div>
                                        </div>
                                        
                                        ";
        // line 72
        yield "                                        
                                    </div>
                            </div>
                            
                
                            
                            ";
        // line 78
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 91
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
                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 78
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

        // line 79
        yield "                            <script>
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
        return "exercice/edit.html.twig";
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
        return array (  229 => 79,  216 => 78,  181 => 91,  179 => 78,  171 => 72,  164 => 67,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
                            <div class=\"\">
                                <!-- begin page title -->
                                <div class=\"d-block d-lg-flex flex-nowrap align-items-center\">
                                    <div class=\"page-title mr-4 pr-4 border-right\">
                                        <h1>exercice</h1>
                                    </div>
                                    <div class=\"breadcrumb-bar align-items-center\">
                                        <nav>
                                            <ol class=\"breadcrumb p-0 m-b-0\">
                                                <li class=\"breadcrumb-item\">
                                                    <a href=\"index.html\"><i class=\"ti ti-home\"></i></a>
                                                </li>
                                                <li class=\"breadcrumb-item\">
                                                    exercice
                                                </li>
                                                <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">Default</li>
                                            </ol>
                                        </nav>
                                    </div>
                                   
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- Notification -->
                        
                        <!-- end row -->
                        <!-- begin row -->
                        <div class=\"row\">
                            

                            <div class=\"container-fluid py-4\">
                                            <div class=\"row justify-content-center\">
                                            <div class=\"col-md-8\">
                                                {{ include('exercice/_form.html.twig', {'button_label': 'Update'}) }}
                                            </div>
                                        </div>
                                        
                                        {# Delete Section #}
                                        
                                    </div>
                            </div>
                            
                
                            
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
                            {% endblock %}
", "exercice/edit.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\exercice\\edit.html.twig");
    }
}
