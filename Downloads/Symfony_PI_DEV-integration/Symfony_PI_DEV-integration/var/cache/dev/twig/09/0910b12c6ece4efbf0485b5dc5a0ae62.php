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

/* patient/edit.html.twig */
class __TwigTemplate_f00767a0bd39097598ba53ec7ad6df7a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/edit.html.twig"));

        $this->parent = $this->loadTemplate("basePatient.html.twig", "patient/edit.html.twig", 1);
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

        yield "Mon Profil";
        
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
.form-check{position:relative;display:block;padding-left:1.25rem}.form-check-input{position:absolute;margin-top:.3rem;margin-left:-1.25rem}.form-check-input:disabled~.form-check-label{color:#6c757d}.form-check-label{margin-bottom:0}.form-check-inline{display:inline-flex;align-items:center;padding-left:0;margin-right:.75rem}.form-check-inline .form-check-input{position:static;margin-top:0;margin-right:.3125rem;margin-left:0}
</style>
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
        <!-- End Search Layout -->
        
        <!-- Start Page Banner Area -->
        <div class=\"page-banner-with-full-image item-bg1\">
            <div class=\"container\">
                <div class=\"page-banner-content-two\">
                    <h2>Account Settings</h2>
                    <ul>
                        <li>
                            <a href=\"index.html\">Accueil</a>
                        </li>
                        <li>Account Settings</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start My Account Area -->
        <section class=\"my-account-area ptb-100\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Modifier mes informations -->
                    <div class=\"col-md-6\">
                        <div class=\"card p-4\">
                            <h4 class=\"mb-3\">Modifier mes informations</h4>
                            ";
        // line 56
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
    <div class=\"mb-3\">
        <div class=\"form-check\">
        <label class=\"form-check-label\" for=\"form_gener\">Genre</label>
            ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "gener", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-check"]]);
        yield "
        </div>
    </div>

    <div class=\"mb-3\">
        ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "firstName", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prénom"]]);
        yield "
        <div class=\"text-danger\">
            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "firstName", [], "any", false, false, false, 67), 'errors');
        yield "
        </div>
    </div>
    <div class=\"mb-3\">
        ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "lastName", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        yield "
        <div class=\"text-danger\">
            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "lastName", [], "any", false, false, false, 73), 'errors');
        yield "
        </div>
    </div>
    <div class=\"mb-3\">
        ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "adresse", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Localité"]]);
        yield "
        <div class=\"text-danger\">
            ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "adresse", [], "any", false, false, false, 79), 'errors');
        yield "
        </div>
    </div>

    <div class=\"mb-3 d-flex\">
        <select>
            <option>+216</option>
        </select>
        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "phone", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Numéro de mobile"]]);
        yield "
        <div class=\"text-danger\">
            ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "phone", [], "any", false, false, false, 89), 'errors');
        yield "
        </div>
    </div>
    <div class=\"mb-3\">
        ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "dossierMedical", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Dossier Medical"]]);
        yield "
        <div class=\"text-danger\">
            ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "dossierMedical", [], "any", false, false, false, 95), 'errors');
        yield "
        </div>
    </div>
    <div class=\"mb-3\">
        ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "email", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        <div class=\"text-danger\">
            ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "email", [], "any", false, false, false, 101), 'errors');
        yield "
        </div>
    </div>

    <button type=\"submit\" value=\"Save\" class=\"btn btn-primary\">";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 105, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
";
        // line 106
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'form_end');
        yield "
                        </div>
                    </div>
            
                    <!-- Modifier mon mot de passe -->
                    <div class=\"col-md-6\">
                        <div class=\"card p-4\">
                            <h4 class=\"mb-3\">Modifier mon mot de passe</h4>
                            ";
        // line 114
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 114, $this->source); })()), 'form_start', ["attr" => ["id" => "passwordForm", "novalidate" => "novalidate"]]);
        yield "
                                <div class=\"mb-3\">
                                    ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 116, $this->source); })()), "plainPassword", [], "any", false, false, false, 116), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nouveau mot de passe"]]);
        yield "
                                    <div class=\"text-danger\">
                                        ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 118, $this->source); })()), "plainPassword", [], "any", false, false, false, 118), 'errors');
        yield "
                                    </div>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                            ";
        // line 122
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formP"]) || array_key_exists("formP", $context) ? $context["formP"] : (function () { throw new RuntimeError('Variable "formP" does not exist.', 122, $this->source); })()), 'form_end');
        yield "
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Script pour la validation des mots de passe -->
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
        return "patient/edit.html.twig";
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
        return array (  275 => 122,  268 => 118,  263 => 116,  258 => 114,  247 => 106,  243 => 105,  236 => 101,  231 => 99,  224 => 95,  219 => 93,  212 => 89,  207 => 87,  196 => 79,  191 => 77,  184 => 73,  179 => 71,  172 => 67,  167 => 65,  159 => 60,  152 => 56,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePatient.html.twig' %}

{% block title %}Mon Profil{% endblock %}

{% block body %}
<style>
.form-check{position:relative;display:block;padding-left:1.25rem}.form-check-input{position:absolute;margin-top:.3rem;margin-left:-1.25rem}.form-check-input:disabled~.form-check-label{color:#6c757d}.form-check-label{margin-bottom:0}.form-check-inline{display:inline-flex;align-items:center;padding-left:0;margin-right:.75rem}.form-check-inline .form-check-input{position:static;margin-top:0;margin-right:.3125rem;margin-left:0}
</style>
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
        <!-- End Search Layout -->
        
        <!-- Start Page Banner Area -->
        <div class=\"page-banner-with-full-image item-bg1\">
            <div class=\"container\">
                <div class=\"page-banner-content-two\">
                    <h2>Account Settings</h2>
                    <ul>
                        <li>
                            <a href=\"index.html\">Accueil</a>
                        </li>
                        <li>Account Settings</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start My Account Area -->
        <section class=\"my-account-area ptb-100\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Modifier mes informations -->
                    <div class=\"col-md-6\">
                        <div class=\"card p-4\">
                            <h4 class=\"mb-3\">Modifier mes informations</h4>
                            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"mb-3\">
        <div class=\"form-check\">
        <label class=\"form-check-label\" for=\"form_gener\">Genre</label>
            {{ form_widget(form.gener, {'attr': {'class': 'form-check'}}) }}
        </div>
    </div>

    <div class=\"mb-3\">
        {{ form_widget(form.firstName, {'attr': {'class': 'form-control', 'placeholder': 'Prénom'}}) }}
        <div class=\"text-danger\">
            {{ form_errors(form.firstName) }}
        </div>
    </div>
    <div class=\"mb-3\">
        {{ form_widget(form.lastName, {'attr': {'class': 'form-control', 'placeholder': 'Nom'}}) }}
        <div class=\"text-danger\">
            {{ form_errors(form.lastName) }}
        </div>
    </div>
    <div class=\"mb-3\">
        {{ form_widget(form.adresse, {'attr': {'class': 'form-control', 'placeholder': 'Localité'}}) }}
        <div class=\"text-danger\">
            {{ form_errors(form.adresse) }}
        </div>
    </div>

    <div class=\"mb-3 d-flex\">
        <select>
            <option>+216</option>
        </select>
        {{ form_widget(form.phone, {'attr': {'class': 'form-control', 'placeholder': 'Numéro de mobile'}}) }}
        <div class=\"text-danger\">
            {{ form_errors(form.phone) }}
        </div>
    </div>
    <div class=\"mb-3\">
        {{ form_widget(form.dossierMedical, {'attr': {'class': 'form-control', 'placeholder': 'Dossier Medical'}}) }}
        <div class=\"text-danger\">
            {{ form_errors(form.dossierMedical) }}
        </div>
    </div>
    <div class=\"mb-3\">
        {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
        <div class=\"text-danger\">
            {{ form_errors(form.email) }}
        </div>
    </div>

    <button type=\"submit\" value=\"Save\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
{{ form_end(form) }}
                        </div>
                    </div>
            
                    <!-- Modifier mon mot de passe -->
                    <div class=\"col-md-6\">
                        <div class=\"card p-4\">
                            <h4 class=\"mb-3\">Modifier mon mot de passe</h4>
                            {{ form_start(formP, {'attr': {'id': 'passwordForm', 'novalidate': 'novalidate'}}) }}
                                <div class=\"mb-3\">
                                    {{ form_widget(formP.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Nouveau mot de passe'}}) }}
                                    <div class=\"text-danger\">
                                        {{ form_errors(formP.plainPassword) }}
                                    </div>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                            {{ form_end(formP) }}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Script pour la validation des mots de passe -->
{% endblock %}
", "patient/edit.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\patient\\edit.html.twig");
    }
}
