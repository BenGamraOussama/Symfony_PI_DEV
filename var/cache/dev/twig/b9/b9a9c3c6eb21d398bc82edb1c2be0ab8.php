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

/* admin/profile.html.twig */
class __TwigTemplate_363ea70cb72c12abb241c9a1f3d89a16 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/profile.html.twig", 1);
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
        yield "
    <!-- begin app -->
    <div class=\"app\">
        <!-- begin app-wrap -->
        <div class=\"app-wrap\">
            <!-- begin pre-loader -->
            <div class=\"loader\">
                <div class=\"h-100 d-flex justify-content-center\">
                    <div class=\"align-self-center\">
                        <img src=\"assets/img/loader/loader.svg\" alt=\"loader\">
                    </div>
                </div>
            </div>
            
            <div class=\"app-container\">
                
                <div class=\"app-main\" id=\"main\">
                    <!-- begin container-fluid -->
                    <div class=\"container-fluid\">
                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"col-md-12 m-b-30\">
                                <!-- begin page title -->
                                <div class=\"d-block d-sm-flex flex-nowrap align-items-center\">
                                    <div class=\"page-title mb-2 mb-sm-0\">
                                        <h1>Account Settings</h1>
                                    </div>
                                    <div class=\"ml-auto d-flex align-items-center\">
                                        <nav>
                                            <ol class=\"breadcrumb p-0 m-b-0\">
                                                <li class=\"breadcrumb-item\">
                                                    <a href=\"index.html\"><i class=\"ti ti-home\"></i></a>
                                                </li>
                                                <li class=\"breadcrumb-item\">
                                                    Pages
                                                </li>
                                                <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">Account Settings</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->

                        <!--mail-Compose-contant-start-->
                        <div class=\"row account-contant\">
                            <div class=\"col-12\">
                                <div class=\"card card-statistics\">
                                    <div class=\"card-body p-0\">
                                        <div class=\"row no-gutters\">
                                            <div class=\"col-xl-3 pb-xl-0 pb-5 border-right\">
                                                <div class=\"page-account-profil pt-5\">
                                                    <div class=\"profile-img text-center rounded-circle\">
                                                        <div class=\"pt-5\">
                                                            <div class=\"bg-img m-auto\">
                                                                <img src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avtar/01.jpg"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"users-avatar\">
                                                            </div>
                                                            <div class=\"profile pt-4\">
                                                                <h4 class=\"mb-1\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "firstName", [], "any", false, false, false, 66), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "lastName", [], "any", false, false, false, 66), "html", null, true);
        yield "</h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"py-5 profile-counter\">
                                                        <ul class=\"nav justify-content-center text-center\">
                                                            <li class=\"nav-item border-right px-3\">
                                                                <div>
                                                                    <h4 class=\"mb-0\">90</h4>
                                                                    <p>Post</p>
                                                                </div>
                                                            </li>

                                                            <li class=\"nav-item border-right px-3\">
                                                                <div>
                                                                    <h4 class=\"mb-0\">1.5K</h4>
                                                                    <p>Messages</p>
                                                                </div>
                                                            </li>

                                                            <li class=\"nav-item px-3\">
                                                                <div>
                                                                    <h4 class=\"mb-0\">4.4K</h4>
                                                                    <p>Members</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>                              
                                                </div>
                                            </div>
                                            <div class=\"col-xl-5 col-md-6 col-12 border-t border-right\">
                                                <div class=\"page-account-form\">
                                                    
                                                    <div class=\"p-4\">
                                                        <form>
                                                            <div class=\"form-row\">
                                                                <div class=\"form-group col-md-12\">
                                                                    <label for=\"name1\">Email</label>
                                                                    <ul>
                                                                     <li>";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 106, $this->source); })()), "email", [], "any", false, false, false, 106), "html", null, true);
        yield "</li></ul>
                                                                </div>
                                                                
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--mail-Compose-contant-end-->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
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
        return "admin/profile.html.twig";
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
        return array (  210 => 106,  165 => 66,  159 => 63,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                        <img src=\"assets/img/loader/loader.svg\" alt=\"loader\">
                    </div>
                </div>
            </div>
            
            <div class=\"app-container\">
                
                <div class=\"app-main\" id=\"main\">
                    <!-- begin container-fluid -->
                    <div class=\"container-fluid\">
                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"col-md-12 m-b-30\">
                                <!-- begin page title -->
                                <div class=\"d-block d-sm-flex flex-nowrap align-items-center\">
                                    <div class=\"page-title mb-2 mb-sm-0\">
                                        <h1>Account Settings</h1>
                                    </div>
                                    <div class=\"ml-auto d-flex align-items-center\">
                                        <nav>
                                            <ol class=\"breadcrumb p-0 m-b-0\">
                                                <li class=\"breadcrumb-item\">
                                                    <a href=\"index.html\"><i class=\"ti ti-home\"></i></a>
                                                </li>
                                                <li class=\"breadcrumb-item\">
                                                    Pages
                                                </li>
                                                <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">Account Settings</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->

                        <!--mail-Compose-contant-start-->
                        <div class=\"row account-contant\">
                            <div class=\"col-12\">
                                <div class=\"card card-statistics\">
                                    <div class=\"card-body p-0\">
                                        <div class=\"row no-gutters\">
                                            <div class=\"col-xl-3 pb-xl-0 pb-5 border-right\">
                                                <div class=\"page-account-profil pt-5\">
                                                    <div class=\"profile-img text-center rounded-circle\">
                                                        <div class=\"pt-5\">
                                                            <div class=\"bg-img m-auto\">
                                                                <img src=\"{{ asset('assets/img/avtar/01.jpg')}}\" class=\"img-fluid\" alt=\"users-avatar\">
                                                            </div>
                                                            <div class=\"profile pt-4\">
                                                                <h4 class=\"mb-1\">{{ user.firstName }} {{ user.lastName }}</h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class=\"py-5 profile-counter\">
                                                        <ul class=\"nav justify-content-center text-center\">
                                                            <li class=\"nav-item border-right px-3\">
                                                                <div>
                                                                    <h4 class=\"mb-0\">90</h4>
                                                                    <p>Post</p>
                                                                </div>
                                                            </li>

                                                            <li class=\"nav-item border-right px-3\">
                                                                <div>
                                                                    <h4 class=\"mb-0\">1.5K</h4>
                                                                    <p>Messages</p>
                                                                </div>
                                                            </li>

                                                            <li class=\"nav-item px-3\">
                                                                <div>
                                                                    <h4 class=\"mb-0\">4.4K</h4>
                                                                    <p>Members</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>                              
                                                </div>
                                            </div>
                                            <div class=\"col-xl-5 col-md-6 col-12 border-t border-right\">
                                                <div class=\"page-account-form\">
                                                    
                                                    <div class=\"p-4\">
                                                        <form>
                                                            <div class=\"form-row\">
                                                                <div class=\"form-group col-md-12\">
                                                                    <label for=\"name1\">Email</label>
                                                                    <ul>
                                                                     <li>{{ user.email }}</li></ul>
                                                                </div>
                                                                
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--mail-Compose-contant-end-->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
{% endblock %}
", "admin/profile.html.twig", "C:\\Users\\OUSSAMA BEN GAMRA\\OneDrive\\Desktop\\symfony\\symfony_pi_dev\\templates\\admin\\profile.html.twig");
    }
}
