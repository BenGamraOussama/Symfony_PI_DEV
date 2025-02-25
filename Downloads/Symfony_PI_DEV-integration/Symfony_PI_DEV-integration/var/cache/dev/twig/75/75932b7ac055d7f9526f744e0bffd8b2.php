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

/* rdv/index.html.twig */
class __TwigTemplate_75736827ddef6738bd042bdc5e8ab706 extends Template
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
        // line 2
        return "basePatient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rdv/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rdv/index.html.twig"));

        $this->parent = $this->loadTemplate("basePatient.html.twig", "rdv/index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "New Rendez-vous";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "
        
        <!-- Start Search Layout -->
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
                            <button type=\"submit\"><i class=\"flaticon-search\"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Layout -->
        
        <!-- Start Page Banner Area -->
        <div class=\"page-banner-area\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"page-banner-image\">
                            <img src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/images/page-banner/page-banner-3.jpg"), "html", null, true);
        yield "\" alt=\"image\">

                            <div class=\"image-shape\">
                                <img src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/images/page-banner/shape.png"), "html", null, true);
        yield "\" alt=\"image\">
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"page-banner-content\">
                            <h2>Online Booking</h2>
                            <ul>
                                <li>
                                    <a href=\"index.html\">Home</a>
                                </li>
                                <li>Online Booking</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"page-banner-shape\">
                <img src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/images/page-banner/banner-shape-1.png"), "html", null, true);
        yield "\" alt=\"image\">
            </div>
        </div>
        <!-- End Page Banner Area -->

       <!-- Start Book Online Area -->
<section class=\"book-online-area bg-ffffff ptb-100\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"book-online-form bg-top\">
                    <h3>Book Our Online Session</h3>

                    ";
        // line 75
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_start');
        yield "
                        <div class=\"form-group\">
                            ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "patient", [], "any", false, false, false, 77), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "psychiatre", [], "any", false, false, false, 80), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "heure", [], "any", false, false, false, 83), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "priorite", [], "any", false, false, false, 86), 'row', ["attr" => ["class" => "form-control"]]);
        yield "
                        </div>
                        <div class=\"book-online-btn\">
                            <button type=\"submit\" class=\"default-btn\">Book Online <i class=\"flaticon-pointer\"></i></button>
                        </div>
                    ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>

            <div class=\"col-lg-6\">
                <div class=\"book-online-image\"></div>
            </div>
        </div>
    </div>

    <div class=\"book-main-shape\">
        <img src=\"";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/images/book-online-shape.png"), "html", null, true);
        yield "\" alt=\"image\">
    </div>
</section>
<!-- End Book Online Area -->
        <!-- Start Subscribe Area -->
        <div class=\"subscribe-area bg-top pt-100\">
            <div class=\"container\">
                <div class=\"subscribe-inner-box\">
                    <div class=\"subscribe-content\">
                        <h2>Subscribe Our Newsletter</h2>
                        <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua.</p>
    
                        <form class=\"newsletter-form\" data-bs-toggle=\"validator\" novalidate=\"true\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 col-md-6\">
                                    <input type=\"email\" class=\"input-newsletter\" placeholder=\"Enter your email\" name=\"EMAIL\" required=\"\" autocomplete=\"off\">
                                </div>

                                <div class=\"col-lg-4 col-md-6\">
                                    <button type=\"submit\" class=\"disabled\" style=\"pointer-events: all; cursor: pointer;\">Subscribe Now <i class=\"flaticon-paper-plane\"></i></button>
                                    <div id=\"validator-newsletter\" class=\"form-result\"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe Area -->

       

       

        <!-- Start Go Top Area -->
        <div class=\"go-top\">
            <i class=\"flaticon-up-arrow\"></i>
        </div>
        <!-- End Go Top Area -->
        
        <!-- Jquery Slim JS -->
        <script src=\"assets/js/jquery.min.js\"></script>
        <!-- Bootstrap Bundle JS -->
        <script src=\"assets/js/bootstrap.bundle.min.js\"></script>
        <!-- Meanmenu JS -->
        <script src=\"assets/js/jquery.meanmenu.js\"></script>
        <!-- Owl Carousel JS -->
        <script src=\"assets/js/owl.carousel.min.js\"></script>
        <!-- Jquery Appear JS -->
        <script src=\"assets/js/jquery.appear.js\"></script>
        <!-- Odometer JS -->
        <script src=\"assets/js/odometer.min.js\"></script>
        <!-- Slick Min JS -->
        <script src=\"assets/js/slick.min.js\"></script>
        <!-- Nice Select JS -->
        <script src=\"assets/js/nice-select.min.js\"></script>
        <!-- Magnific Popup JS -->
        <script src=\"assets/js/jquery.magnific-popup.min.js\"></script>
        <!-- Fancybox JS -->
        <script src=\"assets/js/fancybox.min.js\"></script>
        <!-- Ajaxchimp JS -->
\t\t<script src=\"assets/js/jquery.ajaxchimp.min.js\"></script>
\t\t<!-- Form Validator JS -->
\t\t<script src=\"assets/js/form-validator.min.js\"></script>
\t\t<!-- Contact JS -->
        <script src=\"assets/js/contact-form-script.js\"></script>
        <!-- Wow JS -->
        <script src=\"assets/js/wow.min.js\"></script>
        <!-- Custom JS -->
        <script src=\"assets/js/main.js\"></script><a href=\"https://themeforest.net/checkout/from_item/30387585?license=regular&amp;support=bundle_6month&amp;_ga=2.245508931.634514020.1646539215-1425290503.1590986634\" target=\"_blank\" class=\"buy-now-btn\">Buy Now</a><div class=\"switch-box\"><label id=\"switch\" class=\"switch\"><input type=\"checkbox\" onchange=\"toggleTheme()\" id=\"slider\"><span class=\"slider round\"></span></label></div>
    
\t\t<!-- Form Validator JS -->
\t\t<script src=\"assets/js/form-validator.min.js\"></script>
\t\t<!-- Contact JS -->
        <script src=\"assets/js/contact-form-script.js\"></script>
        <!-- Wow JS -->
        <script src=\"assets/js/wow.min.js\"></script>
        <!-- Custom JS -->
        <script src=\"assets/js/main.js\"></script><a href=\"https://themeforest.net/checkout/from_item/30387585?license=regular&amp;support=bundle_6month&amp;_ga=2.245508931.634514020.1646539215-1425290503.1590986634\" target=\"_blank\" class=\"buy-now-btn\">Buy Now</a><div class=\"switch-box\"><label id=\"switch\" class=\"switch\"><input type=\"checkbox\" onchange=\"toggleTheme()\" id=\"slider\"><span class=\"slider round\"></span></label></div>
    
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
        return "rdv/index.html.twig";
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
        return array (  224 => 102,  210 => 91,  202 => 86,  196 => 83,  190 => 80,  184 => 77,  179 => 75,  163 => 62,  140 => 42,  134 => 39,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
       {% extends 'basePatient.html.twig' %}

{% block title %}New Rendez-vous{% endblock %}

{% block body %}

        
        <!-- Start Search Layout -->
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
                            <button type=\"submit\"><i class=\"flaticon-search\"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Layout -->
        
        <!-- Start Page Banner Area -->
        <div class=\"page-banner-area\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"page-banner-image\">
                            <img src=\"{{asset('assetsP/images/page-banner/page-banner-3.jpg')}}\" alt=\"image\">

                            <div class=\"image-shape\">
                                <img src=\"{{ asset('assetsP/images/page-banner/shape.png') }}\" alt=\"image\">
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"page-banner-content\">
                            <h2>Online Booking</h2>
                            <ul>
                                <li>
                                    <a href=\"index.html\">Home</a>
                                </li>
                                <li>Online Booking</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"page-banner-shape\">
                <img src=\"{{asset('assetsP/images/page-banner/banner-shape-1.png')}}\" alt=\"image\">
            </div>
        </div>
        <!-- End Page Banner Area -->

       <!-- Start Book Online Area -->
<section class=\"book-online-area bg-ffffff ptb-100\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <div class=\"book-online-form bg-top\">
                    <h3>Book Our Online Session</h3>

                    {{ form_start(form) }}
                        <div class=\"form-group\">
                            {{ form_row(form.patient, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_row(form.psychiatre, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_row(form.heure, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"form-group\">
                            {{ form_row(form.priorite, {'attr': {'class': 'form-control'}}) }}
                        </div>
                        <div class=\"book-online-btn\">
                            <button type=\"submit\" class=\"default-btn\">Book Online <i class=\"flaticon-pointer\"></i></button>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>

            <div class=\"col-lg-6\">
                <div class=\"book-online-image\"></div>
            </div>
        </div>
    </div>

    <div class=\"book-main-shape\">
        <img src=\"{{ asset('assetsP/images/book-online-shape.png') }}\" alt=\"image\">
    </div>
</section>
<!-- End Book Online Area -->
        <!-- Start Subscribe Area -->
        <div class=\"subscribe-area bg-top pt-100\">
            <div class=\"container\">
                <div class=\"subscribe-inner-box\">
                    <div class=\"subscribe-content\">
                        <h2>Subscribe Our Newsletter</h2>
                        <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua.</p>
    
                        <form class=\"newsletter-form\" data-bs-toggle=\"validator\" novalidate=\"true\">
                            <div class=\"row\">
                                <div class=\"col-lg-8 col-md-6\">
                                    <input type=\"email\" class=\"input-newsletter\" placeholder=\"Enter your email\" name=\"EMAIL\" required=\"\" autocomplete=\"off\">
                                </div>

                                <div class=\"col-lg-4 col-md-6\">
                                    <button type=\"submit\" class=\"disabled\" style=\"pointer-events: all; cursor: pointer;\">Subscribe Now <i class=\"flaticon-paper-plane\"></i></button>
                                    <div id=\"validator-newsletter\" class=\"form-result\"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe Area -->

       

       

        <!-- Start Go Top Area -->
        <div class=\"go-top\">
            <i class=\"flaticon-up-arrow\"></i>
        </div>
        <!-- End Go Top Area -->
        
        <!-- Jquery Slim JS -->
        <script src=\"assets/js/jquery.min.js\"></script>
        <!-- Bootstrap Bundle JS -->
        <script src=\"assets/js/bootstrap.bundle.min.js\"></script>
        <!-- Meanmenu JS -->
        <script src=\"assets/js/jquery.meanmenu.js\"></script>
        <!-- Owl Carousel JS -->
        <script src=\"assets/js/owl.carousel.min.js\"></script>
        <!-- Jquery Appear JS -->
        <script src=\"assets/js/jquery.appear.js\"></script>
        <!-- Odometer JS -->
        <script src=\"assets/js/odometer.min.js\"></script>
        <!-- Slick Min JS -->
        <script src=\"assets/js/slick.min.js\"></script>
        <!-- Nice Select JS -->
        <script src=\"assets/js/nice-select.min.js\"></script>
        <!-- Magnific Popup JS -->
        <script src=\"assets/js/jquery.magnific-popup.min.js\"></script>
        <!-- Fancybox JS -->
        <script src=\"assets/js/fancybox.min.js\"></script>
        <!-- Ajaxchimp JS -->
\t\t<script src=\"assets/js/jquery.ajaxchimp.min.js\"></script>
\t\t<!-- Form Validator JS -->
\t\t<script src=\"assets/js/form-validator.min.js\"></script>
\t\t<!-- Contact JS -->
        <script src=\"assets/js/contact-form-script.js\"></script>
        <!-- Wow JS -->
        <script src=\"assets/js/wow.min.js\"></script>
        <!-- Custom JS -->
        <script src=\"assets/js/main.js\"></script><a href=\"https://themeforest.net/checkout/from_item/30387585?license=regular&amp;support=bundle_6month&amp;_ga=2.245508931.634514020.1646539215-1425290503.1590986634\" target=\"_blank\" class=\"buy-now-btn\">Buy Now</a><div class=\"switch-box\"><label id=\"switch\" class=\"switch\"><input type=\"checkbox\" onchange=\"toggleTheme()\" id=\"slider\"><span class=\"slider round\"></span></label></div>
    
\t\t<!-- Form Validator JS -->
\t\t<script src=\"assets/js/form-validator.min.js\"></script>
\t\t<!-- Contact JS -->
        <script src=\"assets/js/contact-form-script.js\"></script>
        <!-- Wow JS -->
        <script src=\"assets/js/wow.min.js\"></script>
        <!-- Custom JS -->
        <script src=\"assets/js/main.js\"></script><a href=\"https://themeforest.net/checkout/from_item/30387585?license=regular&amp;support=bundle_6month&amp;_ga=2.245508931.634514020.1646539215-1425290503.1590986634\" target=\"_blank\" class=\"buy-now-btn\">Buy Now</a><div class=\"switch-box\"><label id=\"switch\" class=\"switch\"><input type=\"checkbox\" onchange=\"toggleTheme()\" id=\"slider\"><span class=\"slider round\"></span></label></div>
    
{% endblock %}", "rdv/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\rdv\\index.html.twig");
    }
}
