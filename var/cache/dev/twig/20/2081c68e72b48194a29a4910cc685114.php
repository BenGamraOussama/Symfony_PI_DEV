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

/* psychiatre/show.html.twig */
class __TwigTemplate_06a2f2363313be59d2ae91f88f094e7c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "psychiatre/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "psychiatre/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "psychiatre/show.html.twig", 1);
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

        yield "Psychiatre";
        
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
                                        <h1>My Account</h1>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 66, $this->source); })()), "firstName", [], "any", false, false, false, 66), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 66, $this->source); })()), "lastName", [], "any", false, false, false, 66), "html", null, true);
        yield "</h4>
                                                                <p>";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 67, $this->source); })()), "specialite", [], "any", false, false, false, 67), "html", null, true);
        yield "</p>
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
                                                    <div class=\"form-titel border-bottom p-3\">
                                                        <h5 class=\"mb-0 py-2\">Edit Your Personal Settings</h5>
                                                    </div>
                                                    <div class=\"p-4\">
                                                        <form>
                                                            <div class=\"form-row\">
                                                                <div class=\"form-group col-md-12\">
                                                                    <label for=\"name1\">Email</label>
                                                                    <ul>
                                                                     <li>";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 109, $this->source); })()), "email", [], "any", false, false, false, 109), "html", null, true);
        yield "</li></ul>
                                                                </div>
                                                                 
                                                                <div class=\"form-group col-md-12\">
                                                                    <label for=\"name1\">numLicence</label>
                                                                    <ul>
                                                                     <li>";
        // line 115
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 115, $this->source); })()), "numLicence", [], "any", false, false, false, 115), "html", null, true);
        yield "</li></ul>
                                                                </div>
                                                                <div class=\"form-group col-md-12\">
                                                                    <label for=\"name1\">Adresse</label>
                                                                    <ul>
                                                                     <li>";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 120, $this->source); })()), "adresse", [], "any", false, false, false, 120), "html", null, true);
        yield "</li></ul>
                                                                </div>
                                                                <div class=\"form-group col-md-12\">
                                                                    <label for=\"name1\">N° tel</label>
                                                                    <ul>
                                                                     <li>";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 125, $this->source); })()), "phone", [], "any", false, false, false, 125), "html", null, true);
        yield "</li></ul>
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                            <button class=\"btn btn-primary\"><a href=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_psychiatre_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130)]), "html", null, true);
        yield "\">Update Information</a></button>
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
    <h1>Psychiatre</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 162, $this->source); })()), "id", [], "any", false, false, false, 162), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 166, $this->source); })()), "email", [], "any", false, false, false, 166), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>";
        // line 170
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 170, $this->source); })()), "roles", [], "any", false, false, false, 170)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 170, $this->source); })()), "roles", [], "any", false, false, false, 170)), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>";
        // line 174
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 174, $this->source); })()), "password", [], "any", false, false, false, 174), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>LastName</th>
                <td>";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 178, $this->source); })()), "lastName", [], "any", false, false, false, 178), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td>";
        // line 182
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 182, $this->source); })()), "firstName", [], "any", false, false, false, 182), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Specialite</th>
                <td>";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 186, $this->source); })()), "specialite", [], "any", false, false, false, 186), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

<<<<<<< HEAD
    <a href=\"";
        // line 192
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_psychiatre");
        yield "\">back to home</a>

=======
    <a href=\"";
        // line 195
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_psychiatre_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 197
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_psychiatre_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatre"]) || array_key_exists("psychiatre", $context) ? $context["psychiatre"] : (function () { throw new RuntimeError('Variable "psychiatre" does not exist.', 197, $this->source); })()), "id", [], "any", false, false, false, 197)]), "html", null, true);
        yield "\">edit</a>
>>>>>>> 9bd41d03ceb5065df5944360abcef9615ca32490

    ";
        // line 200
        yield Twig\Extension\CoreExtension::include($this->env, $context, "psychiatre/_delete_form.html.twig");
        yield "
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
        return "psychiatre/show.html.twig";
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
        return array (  352 => 200,  346 => 197,  341 => 195,  335 => 192,  326 => 186,  319 => 182,  312 => 178,  305 => 174,  298 => 170,  291 => 166,  284 => 162,  249 => 130,  241 => 125,  233 => 120,  225 => 115,  216 => 109,  171 => 67,  165 => 66,  159 => 63,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Psychiatre{% endblock %}

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
                                        <h1>My Account</h1>
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
                                                                <h4 class=\"mb-1\">{{ psychiatre.firstName }} {{ psychiatre.lastName }}</h4>
                                                                <p>{{ psychiatre.specialite }}</p>
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
                                                    <div class=\"form-titel border-bottom p-3\">
                                                        <h5 class=\"mb-0 py-2\">Edit Your Personal Settings</h5>
                                                    </div>
                                                    <div class=\"p-4\">
                                                        <form>
                                                            <div class=\"form-row\">
                                                                <div class=\"form-group col-md-12\">
                                                                    <label for=\"name1\">Email</label>
                                                                    <ul>
                                                                     <li>{{ psychiatre.email }}</li></ul>
                                                                </div>
                                                                 
                                                                <div class=\"form-group col-md-12\">
                                                                    <label for=\"name1\">numLicence</label>
                                                                    <ul>
                                                                     <li>{{ psychiatre.numLicence }}</li></ul>
                                                                </div>
                                                                <div class=\"form-group col-md-12\">
                                                                    <label for=\"name1\">Adresse</label>
                                                                    <ul>
                                                                     <li>{{ psychiatre.adresse }}</li></ul>
                                                                </div>
                                                                <div class=\"form-group col-md-12\">
                                                                    <label for=\"name1\">N° tel</label>
                                                                    <ul>
                                                                     <li>{{ psychiatre.phone }}</li></ul>
                                                                </div>
                                                                
                                                                
                                                            </div>
                                                            <button class=\"btn btn-primary\"><a href=\"{{ path('app_psychiatre_edit', {'id': psychiatre.id}) }}\">Update Information</a></button>
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
    <h1>Psychiatre</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ psychiatre.id }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ psychiatre.email }}</td>
            </tr>
            <tr>
                <th>Roles</th>
                <td>{{ psychiatre.roles ? psychiatre.roles|json_encode : '' }}</td>
            </tr>
            <tr>
                <th>Password</th>
                <td>{{ psychiatre.password }}</td>
            </tr>
            <tr>
                <th>LastName</th>
                <td>{{ psychiatre.lastName }}</td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td>{{ psychiatre.firstName }}</td>
            </tr>
            <tr>
                <th>Specialite</th>
                <td>{{ psychiatre.specialite }}</td>
            </tr>
        </tbody>
    </table>

<<<<<<< HEAD
    <a href=\"{{ path('app_psychiatre') }}\">back to home</a>

=======
    <a href=\"{{ path('app_psychiatre_index') }}\">back to list</a>

    <a href=\"{{ path('app_psychiatre_edit', {'id': psychiatre.id}) }}\">edit</a>
>>>>>>> 9bd41d03ceb5065df5944360abcef9615ca32490

    {{ include('psychiatre/_delete_form.html.twig') }}
{% endblock %}
", "psychiatre/show.html.twig", "C:\\Users\\OUSSAMA BEN GAMRA\\OneDrive\\Desktop\\symfony\\symfony_pi_dev\\templates\\psychiatre\\show.html.twig");
    }
}
