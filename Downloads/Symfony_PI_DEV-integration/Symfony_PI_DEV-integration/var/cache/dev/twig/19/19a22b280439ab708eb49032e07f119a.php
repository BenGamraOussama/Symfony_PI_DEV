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

/* psychiatre/edit.html.twig */
class __TwigTemplate_02b834b49a79a2047133e4dcba6af71c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "psychiatre/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "psychiatre/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "psychiatre/edit.html.twig", 1);
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

        yield "Edit Psychiatre";
        
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
                                                     ";
        // line 104
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                                                         <div class=\"form-row\">
                                                             <div class=\"form-group col-md-12\">
                                                                 <label for=\"name1\">Email</label>
                                                                  ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "email", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                                              
                                                                  <div class=\"text-danger\">
                                                                      ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "email", [], "any", false, false, false, 110), 'errors');
        yield "
                                                                  </div>
                                                             </div>
                                                             <div class=\"form-group col-md-12\">
                                                                 <label for=\"name1\">First Name</label>
                                                                  ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "firstName", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "  
                                                                  <div class=\"text-danger\">
                                                                      ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "firstName", [], "any", false, false, false, 117), 'errors');
        yield "
                                                                  </div>
                                                             </div>
                                                             <div class=\"form-group col-md-12\">
                                                                 <label for=\"name1\">Last Name</label>
                                                                  ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "lastName", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                                                
                                                                  <div class=\"text-danger\">
                                                                      ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "lastName", [], "any", false, false, false, 124), 'errors');
        yield "
                                                                  </div>
                                                             </div>
                                                             <div class=\"form-group col-md-12\">
                                                                 <label for=\"name1\">Specialite</label>
                                                                  ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), "specialite", [], "any", false, false, false, 129), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                                                
                                                                  <div class=\"text-danger\">
                                                                      ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 131, $this->source); })()), "specialite", [], "any", false, false, false, 131), 'errors');
        yield "
                                                                  </div>
                                                             </div>
                                                             <div class=\"form-group col-md-12\">
                                                                 <label for=\"name1\">Numéro de Licence</label>
                                                                  ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "numLicence", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                                                
                                                                  <div class=\"text-danger\">
                                                                      ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "numLicence", [], "any", false, false, false, 138), 'errors');
        yield "
                                                                  </div>
                                                             </div>
                                                             <div class=\"form-group col-md-12\">
                                                                 <label for=\"name1\">Adresse</label>
                                                                  ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "adresse", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                                                
                                                                  <div class=\"text-danger\">
                                                                      ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "adresse", [], "any", false, false, false, 145), 'errors');
        yield "
                                                                  </div>
                                                             </div>
                                                             <div class=\"form-group col-md-12\">
                                                                 <label for=\"name1\">Numéro de Téléphone</label>
                                                                  ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 150, $this->source); })()), "phone", [], "any", false, false, false, 150), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "                                                                
                                                                  <div class=\"text-danger\">
                                                                      ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 152, $this->source); })()), "phone", [], "any", false, false, false, 152), 'errors');
        yield "
                                                                  </div>
                                                             </div>
                                                         </div>
                                                         <button type=\"submit\" class=\"btn btn-primary\">Update Information</button>
                                                     ";
        // line 157
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), 'form_end');
        yield "
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
        return "psychiatre/edit.html.twig";
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
        return array (  309 => 157,  301 => 152,  296 => 150,  288 => 145,  283 => 143,  275 => 138,  270 => 136,  262 => 131,  257 => 129,  249 => 124,  244 => 122,  236 => 117,  231 => 115,  223 => 110,  218 => 108,  211 => 104,  171 => 67,  165 => 66,  159 => 63,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Psychiatre{% endblock %}

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
                                                             <h4 class=\"mb-1\">{{psychiatre.firstName}} {{psychiatre.lastName}}</h4>
                                                             <p>{{psychiatre.specialite}}</p>
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
                                                     {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                                                         <div class=\"form-row\">
                                                             <div class=\"form-group col-md-12\">
                                                                 <label for=\"name1\">Email</label>
                                                                  {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}                                                              
                                                                  <div class=\"text-danger\">
                                                                      {{ form_errors(form.email) }}
                                                                  </div>
                                                             </div>
                                                             <div class=\"form-group col-md-12\">
                                                                 <label for=\"name1\">First Name</label>
                                                                  {{ form_widget(form.firstName, {'attr': {'class': 'form-control'}}) }}  
                                                                  <div class=\"text-danger\">
                                                                      {{ form_errors(form.firstName) }}
                                                                  </div>
                                                             </div>
                                                             <div class=\"form-group col-md-12\">
                                                                 <label for=\"name1\">Last Name</label>
                                                                  {{ form_widget(form.lastName, {'attr': {'class': 'form-control'}}) }}                                                                
                                                                  <div class=\"text-danger\">
                                                                      {{ form_errors(form.lastName) }}
                                                                  </div>
                                                             </div>
                                                             <div class=\"form-group col-md-12\">
                                                                 <label for=\"name1\">Specialite</label>
                                                                  {{ form_widget(form.specialite, {'attr': {'class': 'form-control'}}) }}                                                                
                                                                  <div class=\"text-danger\">
                                                                      {{ form_errors(form.specialite) }}
                                                                  </div>
                                                             </div>
                                                             <div class=\"form-group col-md-12\">
                                                                 <label for=\"name1\">Numéro de Licence</label>
                                                                  {{ form_widget(form.numLicence, {'attr': {'class': 'form-control'}}) }}                                                                
                                                                  <div class=\"text-danger\">
                                                                      {{ form_errors(form.numLicence) }}
                                                                  </div>
                                                             </div>
                                                             <div class=\"form-group col-md-12\">
                                                                 <label for=\"name1\">Adresse</label>
                                                                  {{ form_widget(form.adresse, {'attr': {'class': 'form-control'}}) }}                                                                
                                                                  <div class=\"text-danger\">
                                                                      {{ form_errors(form.adresse) }}
                                                                  </div>
                                                             </div>
                                                             <div class=\"form-group col-md-12\">
                                                                 <label for=\"name1\">Numéro de Téléphone</label>
                                                                  {{ form_widget(form.phone, {'attr': {'class': 'form-control'}}) }}                                                                
                                                                  <div class=\"text-danger\">
                                                                      {{ form_errors(form.phone) }}
                                                                  </div>
                                                             </div>
                                                         </div>
                                                         <button type=\"submit\" class=\"btn btn-primary\">Update Information</button>
                                                     {{ form_end(form) }}
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
 {% endblock %}
", "psychiatre/edit.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\psychiatre\\edit.html.twig");
    }
}
