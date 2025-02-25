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

/* admin/index.html.twig */
class __TwigTemplate_e4053b3682d5b64c2b81a3d46b1fa136 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
                            <div class=\"col-md-12 m-b-30\">
                                <!-- begin page title -->
                                <div class=\"d-block d-lg-flex flex-nowrap align-items-center\">
                                    <div class=\"page-title mr-4 pr-4 border-right\">
                                        <h1>Tableau de bord</h1>
                                    </div>
                                    <div class=\"breadcrumb-bar align-items-center\">
                                        <nav>
                                            <ol class=\"breadcrumb p-0 m-b-0\">
                                                <li class=\"breadcrumb-item\">
                                                    <a href=\"index.html\"><i class=\"ti ti-home\"></i></a>
                                                </li>
                                                <li class=\"breadcrumb-item\">
                                                    Tableau de bord
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
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                               
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"card card-statistics\">
                                    <div class=\"row no-gutters\">
                                        <div class=\"col-xxl-3 col-lg-6\">
                                            <div class=\"p-20 border-lg-right border-bottom border-xxl-bottom-0\">
                                                <div class=\"d-flex m-b-10\">
                                                    <p class=\"mb-0 font-regular text-muted font-weight-bold\">Total Visits</p>
                                                    <a class=\"mb-0 ml-auto font-weight-bold\" href=\"#\"><i class=\"ti ti-more-alt\"></i> </a>
                                                </div>
                                                <div class=\"d-block d-sm-flex h-100 align-items-center\">
                                                    <div class=\"apexchart-wrapper\">
                                                        <div id=\"analytics7\"></div>
                                                    </div>
                                                    <div class=\"statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right\">
                                                        <h3 class=\"mb-0\"><i class=\"icon-arrow-up-circle\"></i> 15,640</h3>
                                                        <p>Monthly visitor</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xxl-3 col-lg-6\">
                                            <div class=\"p-20 border-xxl-right border-bottom border-xxl-bottom-0\">
                                                <div class=\"d-flex m-b-10\">
                                                    <p class=\"mb-0 font-regular text-muted font-weight-bold\">Total Cost</p>
                                                    <a class=\"mb-0 ml-auto font-weight-bold\" href=\"#\"><i class=\"ti ti-more-alt\"></i> </a>
                                                </div>
                                                <div class=\"d-block d-sm-flex h-100 align-items-center\">
                                                    <div class=\"apexchart-wrapper\">
                                                        <div id=\"analytics8\"></div>
                                                    </div>
                                                    <div class=\"statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right\">
                                                        <h3 class=\"mb-0\"><i class=\"icon-arrow-up-circle\"></i> 16,656</h3>
                                                        <p>This month</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xxl-3 col-lg-6\">
                                            <div class=\"p-20 border-lg-right border-bottom border-lg-bottom-0\">
                                                <div class=\"d-flex m-b-10\">
                                                    <p class=\"mb-0 font-regular text-muted font-weight-bold\">Total Sales</p>
                                                    <a class=\"mb-0 ml-auto font-weight-bold\" href=\"#\"><i class=\"ti ti-more-alt\"></i> </a>
                                                </div>
                                                <div class=\"d-block d-sm-flex h-100 align-items-center\">
                                                    <div class=\"apexchart-wrapper\">
                                                        <div id=\"analytics9\"></div>
                                                    </div>
                                                    <div class=\"statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right\">
                                                        <h3 class=\"mb-0\"><i class=\"icon-arrow-up-circle\"></i>569</h3>
                                                        <p>Avg. Sales per day</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xxl-3 col-lg-6\">
                                            <div class=\"p-20\">
                                                <div class=\"d-block d-sm-flex h-100 align-items-center\">
                                                    <div class=\"apexchart-wrapper\">
                                                        <div id=\"analytics10\"></div>
                                                    </div>
                                                    <div class=\"statistics ml-sm-auto mt-4 mt-sm-0 pr-sm-5\">
                                                        <ul class=\"list-style-none p-0\">
                                                            <li class=\"d-flex py-1\">
                                                                <span><i class=\"fa fa-circle text-primary pr-2\"></i> Redirect Visits</span> <span class=\"pl-2 font-weight-bold\">456</span></li>
                                                            <li class=\"d-flex py-1\"><span><i class=\"fa fa-circle text-warning pr-2\"></i> New Visits</span> <span class=\"pl-2 font-weight-bold\">256</span></li>
                                                            <li class=\"d-flex py-1\"><span><i class=\"fa fa-circle text-info pr-2\"></i> Direct Visits</span> <span class=\"pl-2 font-weight-bold\">128</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/index.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                            <div class=\"col-md-12 m-b-30\">
                                <!-- begin page title -->
                                <div class=\"d-block d-lg-flex flex-nowrap align-items-center\">
                                    <div class=\"page-title mr-4 pr-4 border-right\">
                                        <h1>Tableau de bord</h1>
                                    </div>
                                    <div class=\"breadcrumb-bar align-items-center\">
                                        <nav>
                                            <ol class=\"breadcrumb p-0 m-b-0\">
                                                <li class=\"breadcrumb-item\">
                                                    <a href=\"index.html\"><i class=\"ti ti-home\"></i></a>
                                                </li>
                                                <li class=\"breadcrumb-item\">
                                                    Tableau de bord
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
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                               
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"card card-statistics\">
                                    <div class=\"row no-gutters\">
                                        <div class=\"col-xxl-3 col-lg-6\">
                                            <div class=\"p-20 border-lg-right border-bottom border-xxl-bottom-0\">
                                                <div class=\"d-flex m-b-10\">
                                                    <p class=\"mb-0 font-regular text-muted font-weight-bold\">Total Visits</p>
                                                    <a class=\"mb-0 ml-auto font-weight-bold\" href=\"#\"><i class=\"ti ti-more-alt\"></i> </a>
                                                </div>
                                                <div class=\"d-block d-sm-flex h-100 align-items-center\">
                                                    <div class=\"apexchart-wrapper\">
                                                        <div id=\"analytics7\"></div>
                                                    </div>
                                                    <div class=\"statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right\">
                                                        <h3 class=\"mb-0\"><i class=\"icon-arrow-up-circle\"></i> 15,640</h3>
                                                        <p>Monthly visitor</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xxl-3 col-lg-6\">
                                            <div class=\"p-20 border-xxl-right border-bottom border-xxl-bottom-0\">
                                                <div class=\"d-flex m-b-10\">
                                                    <p class=\"mb-0 font-regular text-muted font-weight-bold\">Total Cost</p>
                                                    <a class=\"mb-0 ml-auto font-weight-bold\" href=\"#\"><i class=\"ti ti-more-alt\"></i> </a>
                                                </div>
                                                <div class=\"d-block d-sm-flex h-100 align-items-center\">
                                                    <div class=\"apexchart-wrapper\">
                                                        <div id=\"analytics8\"></div>
                                                    </div>
                                                    <div class=\"statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right\">
                                                        <h3 class=\"mb-0\"><i class=\"icon-arrow-up-circle\"></i> 16,656</h3>
                                                        <p>This month</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xxl-3 col-lg-6\">
                                            <div class=\"p-20 border-lg-right border-bottom border-lg-bottom-0\">
                                                <div class=\"d-flex m-b-10\">
                                                    <p class=\"mb-0 font-regular text-muted font-weight-bold\">Total Sales</p>
                                                    <a class=\"mb-0 ml-auto font-weight-bold\" href=\"#\"><i class=\"ti ti-more-alt\"></i> </a>
                                                </div>
                                                <div class=\"d-block d-sm-flex h-100 align-items-center\">
                                                    <div class=\"apexchart-wrapper\">
                                                        <div id=\"analytics9\"></div>
                                                    </div>
                                                    <div class=\"statistics mt-3 mt-sm-0 ml-sm-auto text-center text-sm-right\">
                                                        <h3 class=\"mb-0\"><i class=\"icon-arrow-up-circle\"></i>569</h3>
                                                        <p>Avg. Sales per day</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-xxl-3 col-lg-6\">
                                            <div class=\"p-20\">
                                                <div class=\"d-block d-sm-flex h-100 align-items-center\">
                                                    <div class=\"apexchart-wrapper\">
                                                        <div id=\"analytics10\"></div>
                                                    </div>
                                                    <div class=\"statistics ml-sm-auto mt-4 mt-sm-0 pr-sm-5\">
                                                        <ul class=\"list-style-none p-0\">
                                                            <li class=\"d-flex py-1\">
                                                                <span><i class=\"fa fa-circle text-primary pr-2\"></i> Redirect Visits</span> <span class=\"pl-2 font-weight-bold\">456</span></li>
                                                            <li class=\"d-flex py-1\"><span><i class=\"fa fa-circle text-warning pr-2\"></i> New Visits</span> <span class=\"pl-2 font-weight-bold\">256</span></li>
                                                            <li class=\"d-flex py-1\"><span><i class=\"fa fa-circle text-info pr-2\"></i> Direct Visits</span> <span class=\"pl-2 font-weight-bold\">128</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
", "admin/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\admin\\index.html.twig");
    }
}
