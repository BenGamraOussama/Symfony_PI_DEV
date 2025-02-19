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

/* reset_password/request.html.twig */
class __TwigTemplate_8912d710fd3282bf2e834f0f2a2e1969 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/request.html.twig"));

        $this->parent = $this->loadTemplate("basePatient.html.twig", "reset_password/request.html.twig", 1);
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

        yield "Reset your password";
        
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
        yield "<!-- Start Preloader Area -->
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
<div class=\"page-banner-with-full-image item-bg3\">
    <div class=\"container\">
        <div class=\"page-banner-content-two\">
            <h2>Reset your password</h2>
            <ul>
                <li>
                    <a href=\"index.html\">Home</a>
                </li>
                <li>Reset your password</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Login Area -->
<section class=\"login-area ptb-100\">
    <div class=\"container\">
        <div class=\"login-form\">
            <h2>Reset your password</h2>

            ";
        // line 59
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 59, $this->source); })()), 'form_start');
        yield "
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"inputEmail\">Email*</label>
                            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        yield "
                            <div class=\"text-danger mb-3\">
                                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'errors');
        yield "
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <small>
                                Enter your email address, and we will send you a
                                link to reset your password.
                            </small>
                        </div>
                    </div>
                </div>
                <button class=\"btn btn-lg btn btn-primary text-uppercase\">Send password reset email</button>
            ";
        // line 78
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["requestForm"]) || array_key_exists("requestForm", $context) ? $context["requestForm"] : (function () { throw new RuntimeError('Variable "requestForm" does not exist.', 78, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</section>
<!-- End Login Area -->

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

<!-- Start Footer Area -->

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
        return "reset_password/request.html.twig";
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
        return array (  183 => 78,  168 => 66,  163 => 64,  155 => 59,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePatient.html.twig' %}

{% block title %}Reset your password{% endblock %}

{% block body %}
<!-- Start Preloader Area -->
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
<div class=\"page-banner-with-full-image item-bg3\">
    <div class=\"container\">
        <div class=\"page-banner-content-two\">
            <h2>Reset your password</h2>
            <ul>
                <li>
                    <a href=\"index.html\">Home</a>
                </li>
                <li>Reset your password</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner Area -->

<!-- Start Login Area -->
<section class=\"login-area ptb-100\">
    <div class=\"container\">
        <div class=\"login-form\">
            <h2>Reset your password</h2>

            {{ form_start(requestForm) }}
                <div class=\"row\">
                    <div class=\"col-12\">
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"inputEmail\">Email*</label>
                            {{ form_widget(requestForm.email, { 'attr': {'class': 'form-control', 'placeholder': 'Email'} }) }}
                            <div class=\"text-danger mb-3\">
                                {{ form_errors(requestForm.email) }}
                            </div>
                        </div>
                        <div class=\"mb-3\">
                            <small>
                                Enter your email address, and we will send you a
                                link to reset your password.
                            </small>
                        </div>
                    </div>
                </div>
                <button class=\"btn btn-lg btn btn-primary text-uppercase\">Send password reset email</button>
            {{ form_end(requestForm) }}
        </div>
    </div>
</section>
<!-- End Login Area -->

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

<!-- Start Footer Area -->

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
{% endblock %}
", "reset_password/request.html.twig", "C:\\Users\\OUSSAMA BEN GAMRA\\OneDrive\\Desktop\\symfony\\symfony_pi_dev\\templates\\reset_password\\request.html.twig");
    }
}
