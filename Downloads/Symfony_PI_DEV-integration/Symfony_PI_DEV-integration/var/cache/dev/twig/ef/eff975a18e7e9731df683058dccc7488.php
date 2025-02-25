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
  #contentRegister {
      width: 40%;
      margin: auto;
      background: #f8f9fa;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  #logo {
      background: #8e54e9;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      font-size: 2.5rem;
      font-weight: bold;
  }

  .nav-tabs .nav-link {
      border: none;
      color: #495057;
      font-weight: bold;
      margin-top: -20px;
  }

  .nav-tabs .nav-link.active {
      border-bottom: 3px solid #8e54e9;
      color: #8e54e9;
  }

  .form-control {
      border-radius: 10px;
      border: 1px solid #ced4da;
      padding: 10px;
  }

  .btn-warning {
      background-color: #8e54e9;
      border: none;
      border-radius: 10px;
      padding: 10px;
      font-size: 1.2rem;
      transition: background-color 0.3s ease;
  }

  .btn-warning:hover {
      background-color: #8e54e9;
  }

  .text-danger {
      color: #dc3545;
      font-size: 0.9rem;
  }

  .card-header {
      background-color: #fff;
      border-bottom: 1px solid #dee2e6;
      text-align: center;
  }

  .card-body {
      padding: 0px;
  }
</style>

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

<section class=\"register-area ptb-100\">
    <div class=\"container\">
        <div class=\"register-form\">
            <h2>Register</h2>
            <div class=\"card-body\">
                <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link active\" id=\"patient-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#patient\" type=\"button\" role=\"tab\" aria-controls=\"patient\" aria-selected=\"true\"><b>Patient</b></button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"psychiatre-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#psychiatre\" type=\"button\" role=\"tab\" aria-controls=\"psychiatre\" aria-selected=\"false\"><b>Psychiatre</b></button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"fournisseur-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#fournisseur\" type=\"button\" role=\"tab\" aria-controls=\"fournisseur\" aria-selected=\"false\"><b>Fournisseur</b></button>
                    </li>
                </ul>

                <div class=\"tab-content mt-3\" id=\"myTabContent\">
                    <!-- Onglet Patient -->
                    <div class=\"tab-pane fade show active\" id=\"patient\" role=\"tabpanel\" aria-labelledby=\"patient-tab\">
                        ";
        // line 105
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["patientFormType"]) || array_key_exists("patientFormType", $context) ? $context["patientFormType"] : (function () { throw new RuntimeError('Variable "patientFormType" does not exist.', 105, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
    <div class=\"form-group\">
        <label>First Name</label>
        ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientFormType"]) || array_key_exists("patientFormType", $context) ? $context["patientFormType"] : (function () { throw new RuntimeError('Variable "patientFormType" does not exist.', 108, $this->source); })()), "firstName", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "First Name", "required" => "required"]]);
        yield "
        <div class=\"text-danger mb-3\">
            ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientFormType"]) || array_key_exists("patientFormType", $context) ? $context["patientFormType"] : (function () { throw new RuntimeError('Variable "patientFormType" does not exist.', 110, $this->source); })()), "firstName", [], "any", false, false, false, 110), 'errors');
        yield "
        </div>
    </div>
    <div class=\"form-group\">
        <label>Last Name</label>
        ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientFormType"]) || array_key_exists("patientFormType", $context) ? $context["patientFormType"] : (function () { throw new RuntimeError('Variable "patientFormType" does not exist.', 115, $this->source); })()), "lastName", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Last Name", "required" => "required"]]);
        yield "
        <div class=\"text-danger mb-3\">
            ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientFormType"]) || array_key_exists("patientFormType", $context) ? $context["patientFormType"] : (function () { throw new RuntimeError('Variable "patientFormType" does not exist.', 117, $this->source); })()), "lastName", [], "any", false, false, false, 117), 'errors');
        yield "
        </div>
    </div>
    <div class=\"form-group\">
        <label>Email</label>
        ";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientFormType"]) || array_key_exists("patientFormType", $context) ? $context["patientFormType"] : (function () { throw new RuntimeError('Variable "patientFormType" does not exist.', 122, $this->source); })()), "email", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email", "required" => "required"]]);
        yield "
        <div class=\"text-danger mb-3\">
            ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientFormType"]) || array_key_exists("patientFormType", $context) ? $context["patientFormType"] : (function () { throw new RuntimeError('Variable "patientFormType" does not exist.', 124, $this->source); })()), "email", [], "any", false, false, false, 124), 'errors');
        yield "
        </div>
    </div>
    <div class=\"form-group\">
        <label>Password</label>
        ";
        // line 129
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientFormType"]) || array_key_exists("patientFormType", $context) ? $context["patientFormType"] : (function () { throw new RuntimeError('Variable "patientFormType" does not exist.', 129, $this->source); })()), "plainPassword", [], "any", false, false, false, 129), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password", "minlength" => "8", "required" => "required"]]);
        yield "
        <div class=\"text-danger mb-3\">
            ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientFormType"]) || array_key_exists("patientFormType", $context) ? $context["patientFormType"] : (function () { throw new RuntimeError('Variable "patientFormType" does not exist.', 131, $this->source); })()), "plainPassword", [], "any", false, false, false, 131), 'errors');
        yield "
        </div>
    </div>
    <div class=\"form-group\">
        <label>Phone</label>
        ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientFormType"]) || array_key_exists("patientFormType", $context) ? $context["patientFormType"] : (function () { throw new RuntimeError('Variable "patientFormType" does not exist.', 136, $this->source); })()), "phone", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Phone"]]);
        yield "
        <div class=\"text-danger mb-3\">
            ";
        // line 138
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientFormType"]) || array_key_exists("patientFormType", $context) ? $context["patientFormType"] : (function () { throw new RuntimeError('Variable "patientFormType" does not exist.', 138, $this->source); })()), "phone", [], "any", false, false, false, 138), 'errors');
        yield "
        </div>
    </div>
    <div class=\"form-control-check\">
        <label>Gender</label>
        ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientFormType"]) || array_key_exists("patientFormType", $context) ? $context["patientFormType"] : (function () { throw new RuntimeError('Variable "patientFormType" does not exist.', 143, $this->source); })()), "gener", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "form-check"]]);
        yield "
        <div class=\"text-danger mb-3\">
            ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientFormType"]) || array_key_exists("patientFormType", $context) ? $context["patientFormType"] : (function () { throw new RuntimeError('Variable "patientFormType" does not exist.', 145, $this->source); })()), "gener", [], "any", false, false, false, 145), 'errors');
        yield "
        </div>
    </div>
    <div class=\"form-group\">
        <label>Adresse</label>
        ";
        // line 150
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientFormType"]) || array_key_exists("patientFormType", $context) ? $context["patientFormType"] : (function () { throw new RuntimeError('Variable "patientFormType" does not exist.', 150, $this->source); })()), "adresse", [], "any", false, false, false, 150), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse"]]);
        yield "
        <div class=\"text-danger mb-3\">
            ";
        // line 152
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["patientFormType"]) || array_key_exists("patientFormType", $context) ? $context["patientFormType"] : (function () { throw new RuntimeError('Variable "patientFormType" does not exist.', 152, $this->source); })()), "adresse", [], "any", false, false, false, 152), 'errors');
        yield "
        </div>
    </div>
    <button type=\"submit\">Register Now</button>
    <div class=\"col-12 mt-3\">
        <p>Already have an account? <a href=\"";
        // line 157
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Sign In</a></p>
    </div>
";
        // line 159
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["patientFormType"]) || array_key_exists("patientFormType", $context) ? $context["patientFormType"] : (function () { throw new RuntimeError('Variable "patientFormType" does not exist.', 159, $this->source); })()), 'form_end');
        yield "
                    </div>

                    <!-- Onglet Psychiatre -->
                    <div class=\"tab-pane fade\" id=\"psychiatre\" role=\"tabpanel\" aria-labelledby=\"psychiatre-tab\">
                        ";
        // line 164
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 164, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                            <div class=\"form-group\">
                            <label>First Name</label>
                            ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 167, $this->source); })()), "firstName", [], "any", false, false, false, 167), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "First Name", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mb-3\">
                                ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 169, $this->source); })()), "firstName", [], "any", false, false, false, 169), 'errors');
        yield "
                            </div>
                          </div>
                           <div class=\"form-group\">
                            <label>Last Name</label>
                            ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 174, $this->source); })()), "lastName", [], "any", false, false, false, 174), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Last Name", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mb-3\">
                                ";
        // line 176
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 176, $this->source); })()), "lastName", [], "any", false, false, false, 176), 'errors');
        yield "
                            </div>
                         </div>
                         <div class=\"form-group\">
                            <label>Email</label>
                            ";
        // line 181
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 181, $this->source); })()), "email", [], "any", false, false, false, 181), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mb-3\">
                                ";
        // line 183
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 183, $this->source); })()), "email", [], "any", false, false, false, 183), 'errors');
        yield "
                            </div>
                         </div>
                         <div class=\"form-group\">
                            <label>Password</label>
                            ";
        // line 188
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 188, $this->source); })()), "plainPassword", [], "any", false, false, false, 188), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password", "minlength" => "8", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mb-3\">
                                ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 190, $this->source); })()), "plainPassword", [], "any", false, false, false, 190), 'errors');
        yield "
                            </div>
                         </div>
                          <div class=\"form-group\">
                            <label>Specialite</label>
                            ";
        // line 195
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 195, $this->source); })()), "specialite", [], "any", false, false, false, 195), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Specialite", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mb-3\">
                                ";
        // line 197
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 197, $this->source); })()), "specialite", [], "any", false, false, false, 197), 'errors');
        yield "
                            </div>
                          </div>
                          
    <div class=\"form-group\">
        <label>Num Licence</label>
        ";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 203, $this->source); })()), "numLicence", [], "any", false, false, false, 203), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Num Licence", "required" => "required"]]);
        yield "
        <div class=\"text-danger mb-3\">
            ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 205, $this->source); })()), "numLicence", [], "any", false, false, false, 205), 'errors');
        yield "
        </div>
    </div>
    <div class=\"form-group\">
        <label>Phone</label>
        ";
        // line 210
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 210, $this->source); })()), "phone", [], "any", false, false, false, 210), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Phone"]]);
        yield "
        <div class=\"text-danger mb-3\">
            ";
        // line 212
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 212, $this->source); })()), "phone", [], "any", false, false, false, 212), 'errors');
        yield "
        </div>
    </div>
    <div class=\"form-group\">
        <label>Adresse</label>
        ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 217, $this->source); })()), "adresse", [], "any", false, false, false, 217), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse"]]);
        yield "
        <div class=\"text-danger mb-3\">
            ";
        // line 219
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 219, $this->source); })()), "adresse", [], "any", false, false, false, 219), 'errors');
        yield "
        </div>
    </div>
                          <button type=\"submit\">Register Now</button>
                          <div class=\"col-12 mt-3\">
                            <p>Already have an account? <a href=\"";
        // line 224
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Sign In</a></p>
                          </div>
                        ";
        // line 226
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["psychiatreType"]) || array_key_exists("psychiatreType", $context) ? $context["psychiatreType"] : (function () { throw new RuntimeError('Variable "psychiatreType" does not exist.', 226, $this->source); })()), 'form_end');
        yield "
                    </div>

                    <!-- Onglet Fournisseur -->
                    <div class=\"tab-pane fade\" id=\"fournisseur\" role=\"tabpanel\" aria-labelledby=\"fournisseur-tab\">
                        ";
        // line 231
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["fournissuerType"]) || array_key_exists("fournissuerType", $context) ? $context["fournissuerType"] : (function () { throw new RuntimeError('Variable "fournissuerType" does not exist.', 231, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                        <div class=\"form-group\">
                            <label>First Name</label>
                            ";
        // line 234
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournissuerType"]) || array_key_exists("fournissuerType", $context) ? $context["fournissuerType"] : (function () { throw new RuntimeError('Variable "fournissuerType" does not exist.', 234, $this->source); })()), "firstName", [], "any", false, false, false, 234), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "First Name", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mb-3\">
                                ";
        // line 236
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournissuerType"]) || array_key_exists("fournissuerType", $context) ? $context["fournissuerType"] : (function () { throw new RuntimeError('Variable "fournissuerType" does not exist.', 236, $this->source); })()), "firstName", [], "any", false, false, false, 236), 'errors');
        yield "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Last Name</label>
                            ";
        // line 241
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournissuerType"]) || array_key_exists("fournissuerType", $context) ? $context["fournissuerType"] : (function () { throw new RuntimeError('Variable "fournissuerType" does not exist.', 241, $this->source); })()), "lastName", [], "any", false, false, false, 241), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Last Name", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mb-3\">
                                ";
        // line 243
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournissuerType"]) || array_key_exists("fournissuerType", $context) ? $context["fournissuerType"] : (function () { throw new RuntimeError('Variable "fournissuerType" does not exist.', 243, $this->source); })()), "lastName", [], "any", false, false, false, 243), 'errors');
        yield "
                            </div>
                        </div>
                         <div class=\"form-group\">
                            <label>Adresse</label>
                            ";
        // line 248
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournissuerType"]) || array_key_exists("fournissuerType", $context) ? $context["fournissuerType"] : (function () { throw new RuntimeError('Variable "fournissuerType" does not exist.', 248, $this->source); })()), "adresse", [], "any", false, false, false, 248), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Adresse", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mb-3\">
                                ";
        // line 250
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournissuerType"]) || array_key_exists("fournissuerType", $context) ? $context["fournissuerType"] : (function () { throw new RuntimeError('Variable "fournissuerType" does not exist.', 250, $this->source); })()), "adresse", [], "any", false, false, false, 250), 'errors');
        yield "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Email</label>
                            ";
        // line 255
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournissuerType"]) || array_key_exists("fournissuerType", $context) ? $context["fournissuerType"] : (function () { throw new RuntimeError('Variable "fournissuerType" does not exist.', 255, $this->source); })()), "email", [], "any", false, false, false, 255), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mb-3\">
                                ";
        // line 257
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournissuerType"]) || array_key_exists("fournissuerType", $context) ? $context["fournissuerType"] : (function () { throw new RuntimeError('Variable "fournissuerType" does not exist.', 257, $this->source); })()), "email", [], "any", false, false, false, 257), 'errors');
        yield "
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Password</label>
                            ";
        // line 262
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournissuerType"]) || array_key_exists("fournissuerType", $context) ? $context["fournissuerType"] : (function () { throw new RuntimeError('Variable "fournissuerType" does not exist.', 262, $this->source); })()), "plainPassword", [], "any", false, false, false, 262), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Password", "minlength" => "8", "required" => "required"]]);
        yield "
                            <div class=\"text-danger mb-3\">
                                ";
        // line 264
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["fournissuerType"]) || array_key_exists("fournissuerType", $context) ? $context["fournissuerType"] : (function () { throw new RuntimeError('Variable "fournissuerType" does not exist.', 264, $this->source); })()), "plainPassword", [], "any", false, false, false, 264), 'errors');
        yield "
                            </div>
                        </div>
                        <button type=\"submit\">Register Now</button>
                        <div class=\"col-12 mt-3\">
                            <p>Already have an account? <a href=\"";
        // line 269
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Sign In</a></p>
                        </div>
                        ";
        // line 271
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["fournissuerType"]) || array_key_exists("fournissuerType", $context) ? $context["fournissuerType"] : (function () { throw new RuntimeError('Variable "fournissuerType" does not exist.', 271, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
        return array (  511 => 271,  506 => 269,  498 => 264,  493 => 262,  485 => 257,  480 => 255,  472 => 250,  467 => 248,  459 => 243,  454 => 241,  446 => 236,  441 => 234,  435 => 231,  427 => 226,  422 => 224,  414 => 219,  409 => 217,  401 => 212,  396 => 210,  388 => 205,  383 => 203,  374 => 197,  369 => 195,  361 => 190,  356 => 188,  348 => 183,  343 => 181,  335 => 176,  330 => 174,  322 => 169,  317 => 167,  311 => 164,  303 => 159,  298 => 157,  290 => 152,  285 => 150,  277 => 145,  272 => 143,  264 => 138,  259 => 136,  251 => 131,  246 => 129,  238 => 124,  233 => 122,  225 => 117,  220 => 115,  212 => 110,  207 => 108,  201 => 105,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePatient.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
<style>
  #contentRegister {
      width: 40%;
      margin: auto;
      background: #f8f9fa;
      border-radius: 15px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  #logo {
      background: #8e54e9;
      background-clip: text;
      -webkit-text-fill-color: transparent;
      font-size: 2.5rem;
      font-weight: bold;
  }

  .nav-tabs .nav-link {
      border: none;
      color: #495057;
      font-weight: bold;
      margin-top: -20px;
  }

  .nav-tabs .nav-link.active {
      border-bottom: 3px solid #8e54e9;
      color: #8e54e9;
  }

  .form-control {
      border-radius: 10px;
      border: 1px solid #ced4da;
      padding: 10px;
  }

  .btn-warning {
      background-color: #8e54e9;
      border: none;
      border-radius: 10px;
      padding: 10px;
      font-size: 1.2rem;
      transition: background-color 0.3s ease;
  }

  .btn-warning:hover {
      background-color: #8e54e9;
  }

  .text-danger {
      color: #dc3545;
      font-size: 0.9rem;
  }

  .card-header {
      background-color: #fff;
      border-bottom: 1px solid #dee2e6;
      text-align: center;
  }

  .card-body {
      padding: 0px;
  }
</style>

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

<section class=\"register-area ptb-100\">
    <div class=\"container\">
        <div class=\"register-form\">
            <h2>Register</h2>
            <div class=\"card-body\">
                <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link active\" id=\"patient-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#patient\" type=\"button\" role=\"tab\" aria-controls=\"patient\" aria-selected=\"true\"><b>Patient</b></button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"psychiatre-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#psychiatre\" type=\"button\" role=\"tab\" aria-controls=\"psychiatre\" aria-selected=\"false\"><b>Psychiatre</b></button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"fournisseur-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#fournisseur\" type=\"button\" role=\"tab\" aria-controls=\"fournisseur\" aria-selected=\"false\"><b>Fournisseur</b></button>
                    </li>
                </ul>

                <div class=\"tab-content mt-3\" id=\"myTabContent\">
                    <!-- Onglet Patient -->
                    <div class=\"tab-pane fade show active\" id=\"patient\" role=\"tabpanel\" aria-labelledby=\"patient-tab\">
                        {{ form_start(patientFormType, {'attr': {'novalidate': 'novalidate'}}) }}
    <div class=\"form-group\">
        <label>First Name</label>
        {{ form_widget(patientFormType.firstName, { 'attr': {'class': 'form-control', 'placeholder': 'First Name', 'required': 'required'} }) }}
        <div class=\"text-danger mb-3\">
            {{ form_errors(patientFormType.firstName) }}
        </div>
    </div>
    <div class=\"form-group\">
        <label>Last Name</label>
        {{ form_widget(patientFormType.lastName, { 'attr': {'class': 'form-control', 'placeholder': 'Last Name', 'required': 'required'} }) }}
        <div class=\"text-danger mb-3\">
            {{ form_errors(patientFormType.lastName) }}
        </div>
    </div>
    <div class=\"form-group\">
        <label>Email</label>
        {{ form_widget(patientFormType.email, { 'attr': {'class': 'form-control', 'placeholder': 'Email', 'required': 'required'} }) }}
        <div class=\"text-danger mb-3\">
            {{ form_errors(patientFormType.email) }}
        </div>
    </div>
    <div class=\"form-group\">
        <label>Password</label>
        {{ form_widget(patientFormType.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Password', 'minlength': '8', 'required': 'required'}}) }}
        <div class=\"text-danger mb-3\">
            {{ form_errors(patientFormType.plainPassword) }}
        </div>
    </div>
    <div class=\"form-group\">
        <label>Phone</label>
        {{ form_widget(patientFormType.phone, { 'attr': {'class': 'form-control', 'placeholder': 'Phone'} }) }}
        <div class=\"text-danger mb-3\">
            {{ form_errors(patientFormType.phone) }}
        </div>
    </div>
    <div class=\"form-control-check\">
        <label>Gender</label>
        {{ form_widget(patientFormType.gener, { 'attr': {'class': 'form-check'} }) }}
        <div class=\"text-danger mb-3\">
            {{ form_errors(patientFormType.gener) }}
        </div>
    </div>
    <div class=\"form-group\">
        <label>Adresse</label>
        {{ form_widget(patientFormType.adresse, { 'attr': {'class': 'form-control', 'placeholder': 'Adresse'} }) }}
        <div class=\"text-danger mb-3\">
            {{ form_errors(patientFormType.adresse) }}
        </div>
    </div>
    <button type=\"submit\">Register Now</button>
    <div class=\"col-12 mt-3\">
        <p>Already have an account? <a href=\"{{ path('app_login') }}\">Sign In</a></p>
    </div>
{{ form_end(patientFormType) }}
                    </div>

                    <!-- Onglet Psychiatre -->
                    <div class=\"tab-pane fade\" id=\"psychiatre\" role=\"tabpanel\" aria-labelledby=\"psychiatre-tab\">
                        {{ form_start(psychiatreType, {'attr': {'novalidate': 'novalidate'}}) }}
                            <div class=\"form-group\">
                            <label>First Name</label>
                            {{ form_widget(psychiatreType.firstName, { 'attr': {'class': 'form-control', 'placeholder': 'First Name', 'required': 'required'} }) }}
                            <div class=\"text-danger mb-3\">
                                {{ form_errors(psychiatreType.firstName) }}
                            </div>
                          </div>
                           <div class=\"form-group\">
                            <label>Last Name</label>
                            {{ form_widget(psychiatreType.lastName, { 'attr': {'class': 'form-control', 'placeholder': 'Last Name', 'required': 'required'} }) }}
                            <div class=\"text-danger mb-3\">
                                {{ form_errors(psychiatreType.lastName) }}
                            </div>
                         </div>
                         <div class=\"form-group\">
                            <label>Email</label>
                            {{ form_widget(psychiatreType.email, { 'attr': {'class': 'form-control', 'placeholder': 'Email', 'required': 'required'} }) }}
                            <div class=\"text-danger mb-3\">
                                {{ form_errors(psychiatreType.email) }}
                            </div>
                         </div>
                         <div class=\"form-group\">
                            <label>Password</label>
                            {{ form_widget(psychiatreType.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Password', 'minlength': '8', 'required': 'required'}}) }}
                            <div class=\"text-danger mb-3\">
                                {{ form_errors(psychiatreType.plainPassword) }}
                            </div>
                         </div>
                          <div class=\"form-group\">
                            <label>Specialite</label>
                            {{ form_widget(psychiatreType.specialite, { 'attr': {'class': 'form-control', 'placeholder': 'Specialite', 'required': 'required'} }) }}
                            <div class=\"text-danger mb-3\">
                                {{ form_errors(psychiatreType.specialite) }}
                            </div>
                          </div>
                          
    <div class=\"form-group\">
        <label>Num Licence</label>
        {{ form_widget(psychiatreType.numLicence, { 'attr': {'class': 'form-control', 'placeholder': 'Num Licence', 'required': 'required'} }) }}
        <div class=\"text-danger mb-3\">
            {{ form_errors(psychiatreType.numLicence) }}
        </div>
    </div>
    <div class=\"form-group\">
        <label>Phone</label>
        {{ form_widget(psychiatreType.phone, { 'attr': {'class': 'form-control', 'placeholder': 'Phone'} }) }}
        <div class=\"text-danger mb-3\">
            {{ form_errors(psychiatreType.phone) }}
        </div>
    </div>
    <div class=\"form-group\">
        <label>Adresse</label>
        {{ form_widget(psychiatreType.adresse, { 'attr': {'class': 'form-control', 'placeholder': 'Adresse'} }) }}
        <div class=\"text-danger mb-3\">
            {{ form_errors(psychiatreType.adresse) }}
        </div>
    </div>
                          <button type=\"submit\">Register Now</button>
                          <div class=\"col-12 mt-3\">
                            <p>Already have an account? <a href=\"{{ path('app_login') }}\">Sign In</a></p>
                          </div>
                        {{ form_end(psychiatreType) }}
                    </div>

                    <!-- Onglet Fournisseur -->
                    <div class=\"tab-pane fade\" id=\"fournisseur\" role=\"tabpanel\" aria-labelledby=\"fournisseur-tab\">
                        {{ form_start(fournissuerType, {'attr': {'novalidate': 'novalidate'}}) }}
                        <div class=\"form-group\">
                            <label>First Name</label>
                            {{ form_widget(fournissuerType.firstName, { 'attr': {'class': 'form-control', 'placeholder': 'First Name', 'required': 'required'} }) }}
                            <div class=\"text-danger mb-3\">
                                {{ form_errors(fournissuerType.firstName) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Last Name</label>
                            {{ form_widget(fournissuerType.lastName, { 'attr': {'class': 'form-control', 'placeholder': 'Last Name', 'required': 'required'} }) }}
                            <div class=\"text-danger mb-3\">
                                {{ form_errors(fournissuerType.lastName) }}
                            </div>
                        </div>
                         <div class=\"form-group\">
                            <label>Adresse</label>
                            {{ form_widget(fournissuerType.adresse, { 'attr': {'class': 'form-control', 'placeholder': 'Adresse', 'required': 'required'} }) }}
                            <div class=\"text-danger mb-3\">
                                {{ form_errors(fournissuerType.adresse) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Email</label>
                            {{ form_widget(fournissuerType.email, { 'attr': {'class': 'form-control', 'placeholder': 'Email', 'required': 'required'} }) }}
                            <div class=\"text-danger mb-3\">
                                {{ form_errors(fournissuerType.email) }}
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Password</label>
                            {{ form_widget(fournissuerType.plainPassword, {'attr': {'class': 'form-control', 'placeholder': 'Password', 'minlength': '8', 'required': 'required'}}) }}
                            <div class=\"text-danger mb-3\">
                                {{ form_errors(fournissuerType.plainPassword) }}
                            </div>
                        </div>
                        <button type=\"submit\">Register Now</button>
                        <div class=\"col-12 mt-3\">
                            <p>Already have an account? <a href=\"{{ path('app_login') }}\">Sign In</a></p>
                        </div>
                        {{ form_end(fournissuerType) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\registration\\register.html.twig");
    }
}
