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

/* registration/register.html.twig */
class __TwigTemplate_a500616c75d85ca6d70ac40506f1ec25 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("basePatient.html.twig", "registration/register.html.twig", 1);
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

        yield "Register";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "<style>
.newcss .form-group .form-control {
  height: 60px;
  padding: 20px;
  line-height: initial;
  color: #6b6b84;
  background-color: #ffffff;
  box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
  border: 1px solid #ffffff;
  transition: 0.6s;
  font-weight: 500;
  font-size: 16px;
  width: 100%;
}
.newcss .form-group .form-control:focus {
  border: 1px solid #8e54e9;
  background-color: transparent;
  box-shadow: unset;
  outline: 0;
}
.newcss .nice-select {
  height: 60px;
  width: 100%;
  line-height: 60px;
  padding-left: 20px;
  padding-right: 20px;
  color: #6b6b84;
  background-color: #ffffff;
  box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
  border: 1px solid #eeeeee;
  transition: 0.6s;
  margin-bottom: 15px;
  font-weight: 500;
  font-size: 16px;
}
.newcss .nice-select:focus {
  border: 1px solid #8e54e9;
  background-color: transparent;
  box-shadow: unset;
}
.newcss .nice-select .list {
  background-color: #ffffff;
  box-shadow: 0px 0px 29px 0px rgba(102, 102, 102, 0.1);
  margin-top: 0;
  margin-bottom: 0;
  width: 100%;
  padding-top: 10px;
  padding-bottom: 10px;
  height: 215px;
  overflow-y: scroll;
}
.newcss .nice-select .list .option {
  transition: 0.6s;
  color: #212529;
  padding-left: 20px;
  padding-right: 20px;
  font-size: 16px;
  font-weight: 500;
}
.newcss .nice-select .list .option:hover {
  background-color: #8e54e9 !important;
  color: #ffffff;
}
.newcss .nice-select .list .option.selected {
  background-color: transparent;
  font-weight: 600;
}
.newcss .nice-select::after {
  height: 8px;
  width: 8px;
  border-color: #8e54e9;
  right: 20px;
}
</style>
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
        <div class=\"page-banner-with-full-image item-bg4\">
            <div class=\"container\">
                <div class=\"page-banner-content-two\">
                    <h2>Register</h2>
                    <ul>
                        <li>
                            <a href=\"index.html\">Home</a>
                        </li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Register Area -->
        <section class=\"register-area ptb-100\">
            <div class=\"container\">
                <div class=\"register-form\">
                    <h2>Register</h2>
                    ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 127, $this->source); })()), 'errors');
        yield "
                    <form method=\"post\">
                        ";
        // line 129
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 129, $this->source); })()), 'form_start');
        yield "
                        <div class=\"form-group\">
                            <label>Name</label>
                            ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 132, $this->source); })()), "firstName", [], "any", false, false, false, 132), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "First Name"]]);
        yield "
                        </div>
                        <div class=\"form-group\">
                            <label>Name</label>
                            ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 136, $this->source); })()), "lastName", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Last Name"]]);
        yield "
                        </div>
                        
                          <div class=\"newcss form-group\">
                            <label for=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 140, $this->source); })()), "roles", [], "any", false, false, false, 140), "vars", [], "any", false, false, false, 140), "id", [], "any", false, false, false, 140), "html", null, true);
        yield "\" class=\"form-label\">Choisissez votre rôle</label>
                            <select name=\"";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 141, $this->source); })()), "roles", [], "any", false, false, false, 141), "vars", [], "any", false, false, false, 141), "full_name", [], "any", false, false, false, 141), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 141, $this->source); })()), "roles", [], "any", false, false, false, 141), "vars", [], "any", false, false, false, 141), "id", [], "any", false, false, false, 141), "html", null, true);
        yield "\" class=\"newcss\">
                                <option value=\"\">Sélectionnez un rôle</option>
                                <option class=\"list\" value=\"ROLE_PATIENT\">Patient</option>
                                <option class=\"list\" value=\"ROLE_PSYCHIATRE\">Psychiatre</option>
                                <option class=\"list\" value=\"ROLE_FOURNISSEUR\">Fournisseur</option>
                            </select>
                          
                        </div>

                        <div class=\"form-group\">
                            <label>Email</label>
                            ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 152, $this->source); })()), "email", [], "any", false, false, false, 152), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        yield "
                        </div>
                        <div class=\"form-group\">
                            <label>Password</label>
                            ";
        // line 156
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 156, $this->source); })()), "plainPassword", [], "any", false, false, false, 156), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password"]]);
        yield "
                        </div>

                        <p class=\"description\">The password should be at least eight characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! \" ? \$ % ^ & )</p>
                        
                        <div class=\"col-12\">
                            <div class=\"form-check\">                              
                                ";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 163, $this->source); })()), "agreeTerms", [], "any", false, false, false, 163), 'widget', ["attr" => ["class" => "form-check-input", "type" => "checkbox"]]);
        yield "
                                <label class=\"form-check-label\">
                                    ";
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 165, $this->source); })()), "agreeTerms", [], "any", false, false, false, 165), 'label');
        yield "
                                </label>
                            </div>
                        </div>
                        <button type=\"submit\">Register Now</button>
                        <div class=\"col-12  mt-3\">
                            <p>Already have an account ?<a href=\"";
        // line 171
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\"> Sign In</a></p>
                        </div>
                        ";
        // line 173
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 173, $this->source); })()), 'form_end');
        yield "
                    </form>
                </div>
            </div>
        </section>
        <!-- End Register Area -->
       
        <!-- Start Subscribe Area -->
        <div class=\"subscribe-area bg-top\">
            <div class=\"container\">
                <div class=\"subscribe-inner-box\">
                    <div class=\"subscribe-content\">
                        <h2>Subscribe Our Newsletter</h2>
                        <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua.</p>
    
                        <form class=\"newsletter-form\" data-bs-toggle=\"validator\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 col-md-6\">
                                    <input type=\"email\" class=\"input-newsletter\" placeholder=\"Enter your email\" name=\"EMAIL\" required=\"\" autocomplete=\"off\">
                                </div>

                                <div class=\"col-lg-4 col-md-6\">
                                    <button type=\"submit\">Subscribe Now <i class=\"flaticon-paper-plane\"></i></button>
                                    <div id=\"validator-newsletter\" class=\"form-result\"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe Area -->
        <!-- Start Copy Right Area -->
        <div class=\"copyright-area\">
            <div class=\"container\">
                <div class=\"copyright-area-content\">
                    <p>
                        Copyright Psylo. All rights reserved By
                        <a href=\"https://envytheme.com/\" target=\"_blank\">EnvyTheme</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area -->

        <!-- Start Go Top Area -->
        <div class=\"go-top\">
            <i class='flaticon-up-arrow'></i>
        </div>
        <!-- End Go Top Area -->
        
        <!-- Jquery Slim JS -->
       

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
        return "registration/register.html.twig";
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
        return array (  305 => 173,  300 => 171,  291 => 165,  286 => 163,  276 => 156,  269 => 152,  253 => 141,  249 => 140,  242 => 136,  235 => 132,  229 => 129,  224 => 127,  100 => 5,  87 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePatient.html.twig' %}

{% block title %}Register{% endblock %}
{% block body %}
<style>
.newcss .form-group .form-control {
  height: 60px;
  padding: 20px;
  line-height: initial;
  color: #6b6b84;
  background-color: #ffffff;
  box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
  border: 1px solid #ffffff;
  transition: 0.6s;
  font-weight: 500;
  font-size: 16px;
  width: 100%;
}
.newcss .form-group .form-control:focus {
  border: 1px solid #8e54e9;
  background-color: transparent;
  box-shadow: unset;
  outline: 0;
}
.newcss .nice-select {
  height: 60px;
  width: 100%;
  line-height: 60px;
  padding-left: 20px;
  padding-right: 20px;
  color: #6b6b84;
  background-color: #ffffff;
  box-shadow: 0 0 1.25rem rgba(108, 118, 134, 0.1);
  border: 1px solid #eeeeee;
  transition: 0.6s;
  margin-bottom: 15px;
  font-weight: 500;
  font-size: 16px;
}
.newcss .nice-select:focus {
  border: 1px solid #8e54e9;
  background-color: transparent;
  box-shadow: unset;
}
.newcss .nice-select .list {
  background-color: #ffffff;
  box-shadow: 0px 0px 29px 0px rgba(102, 102, 102, 0.1);
  margin-top: 0;
  margin-bottom: 0;
  width: 100%;
  padding-top: 10px;
  padding-bottom: 10px;
  height: 215px;
  overflow-y: scroll;
}
.newcss .nice-select .list .option {
  transition: 0.6s;
  color: #212529;
  padding-left: 20px;
  padding-right: 20px;
  font-size: 16px;
  font-weight: 500;
}
.newcss .nice-select .list .option:hover {
  background-color: #8e54e9 !important;
  color: #ffffff;
}
.newcss .nice-select .list .option.selected {
  background-color: transparent;
  font-weight: 600;
}
.newcss .nice-select::after {
  height: 8px;
  width: 8px;
  border-color: #8e54e9;
  right: 20px;
}
</style>
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
        <div class=\"page-banner-with-full-image item-bg4\">
            <div class=\"container\">
                <div class=\"page-banner-content-two\">
                    <h2>Register</h2>
                    <ul>
                        <li>
                            <a href=\"index.html\">Home</a>
                        </li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start Register Area -->
        <section class=\"register-area ptb-100\">
            <div class=\"container\">
                <div class=\"register-form\">
                    <h2>Register</h2>
                    {{ form_errors(registrationForm) }}
                    <form method=\"post\">
                        {{ form_start(registrationForm) }}
                        <div class=\"form-group\">
                            <label>Name</label>
                            {{ form_widget(registrationForm.firstName, { 'attr': {'class': 'form-control', 'placeholder': 'First Name'} }) }}
                        </div>
                        <div class=\"form-group\">
                            <label>Name</label>
                            {{ form_widget(registrationForm.lastName, { 'attr': {'class': 'form-control', 'placeholder': 'Last Name'} }) }}
                        </div>
                        
                          <div class=\"newcss form-group\">
                            <label for=\"{{ registrationForm.roles.vars.id }}\" class=\"form-label\">Choisissez votre rôle</label>
                            <select name=\"{{ registrationForm.roles.vars.full_name }}\" id=\"{{ registrationForm.roles.vars.id }}\" class=\"newcss\">
                                <option value=\"\">Sélectionnez un rôle</option>
                                <option class=\"list\" value=\"ROLE_PATIENT\">Patient</option>
                                <option class=\"list\" value=\"ROLE_PSYCHIATRE\">Psychiatre</option>
                                <option class=\"list\" value=\"ROLE_FOURNISSEUR\">Fournisseur</option>
                            </select>
                          
                        </div>

                        <div class=\"form-group\">
                            <label>Email</label>
                            {{ form_widget(registrationForm.email, { 'attr': {'class': 'form-control', 'placeholder': 'Email'} }) }}
                        </div>
                        <div class=\"form-group\">
                            <label>Password</label>
                            {{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Password'}}) }}
                        </div>

                        <p class=\"description\">The password should be at least eight characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! \" ? \$ % ^ & )</p>
                        
                        <div class=\"col-12\">
                            <div class=\"form-check\">                              
                                {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input', 'type': 'checkbox'}}) }}
                                <label class=\"form-check-label\">
                                    {{ form_label(registrationForm.agreeTerms) }}
                                </label>
                            </div>
                        </div>
                        <button type=\"submit\">Register Now</button>
                        <div class=\"col-12  mt-3\">
                            <p>Already have an account ?<a href=\"{{ path('app_login') }}\"> Sign In</a></p>
                        </div>
                        {{ form_end(registrationForm) }}
                    </form>
                </div>
            </div>
        </section>
        <!-- End Register Area -->
       
        <!-- Start Subscribe Area -->
        <div class=\"subscribe-area bg-top\">
            <div class=\"container\">
                <div class=\"subscribe-inner-box\">
                    <div class=\"subscribe-content\">
                        <h2>Subscribe Our Newsletter</h2>
                        <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua.</p>
    
                        <form class=\"newsletter-form\" data-bs-toggle=\"validator\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 col-md-6\">
                                    <input type=\"email\" class=\"input-newsletter\" placeholder=\"Enter your email\" name=\"EMAIL\" required=\"\" autocomplete=\"off\">
                                </div>

                                <div class=\"col-lg-4 col-md-6\">
                                    <button type=\"submit\">Subscribe Now <i class=\"flaticon-paper-plane\"></i></button>
                                    <div id=\"validator-newsletter\" class=\"form-result\"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe Area -->
        <!-- Start Copy Right Area -->
        <div class=\"copyright-area\">
            <div class=\"container\">
                <div class=\"copyright-area-content\">
                    <p>
                        Copyright Psylo. All rights reserved By
                        <a href=\"https://envytheme.com/\" target=\"_blank\">EnvyTheme</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Copy Right Area -->

        <!-- Start Go Top Area -->
        <div class=\"go-top\">
            <i class='flaticon-up-arrow'></i>
        </div>
        <!-- End Go Top Area -->
        
        <!-- Jquery Slim JS -->
       

{% endblock %}
", "registration/register.html.twig", "C:\\xampp\\htdocs\\symfony_pi_dev (4)\\symfony_pi_dev\\templates\\registration\\register.html.twig");
    }
}
