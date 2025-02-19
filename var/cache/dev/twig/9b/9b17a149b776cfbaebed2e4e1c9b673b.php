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

/* basePatient.html.twig */
class __TwigTemplate_82cff95cfb4f91762d53f1684a2a7a3b extends Template
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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basePatient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basePatient.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <!-- Bootstrap CSS --> 
        <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/css/bootstrap.min.css"), "html", null, true);
        yield "\">
        <!-- Animate CSS --> 
        <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/css/animate.min.css"), "html", null, true);
        yield "\">
        <!-- Meanmenu CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/css/meanmenu.css"), "html", null, true);
        yield "\">
        <!-- Boxicons CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/css/boxicons.min.css"), "html", null, true);
        yield "\">
        <!-- Flaticon CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/css/flaticon.css"), "html", null, true);
        yield "\">
        <!-- Odometer CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/css/odometer.min.css"), "html", null, true);
        yield "\">
        <!-- Slick Min CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/css/slick.min.css"), "html", null, true);
        yield "\">
        <!-- Nice Select CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/css/nice-select.min.css"), "html", null, true);
        yield "\">
        <!-- Carousel CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/css/owl.carousel.min.css"), "html", null, true);
        yield "\">
        <!-- Carousel Default CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/css/owl.theme.default.min.css"), "html", null, true);
        yield "\">
        <!-- Magnific Popup CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/css/magnific-popup.min.css"), "html", null, true);
        yield "\">
        <!-- Fancybox CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/css/fancybox.min.css"), "html", null, true);
        yield "\">
        <!-- Style CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/css/style.css"), "html", null, true);
        yield "\">
        <!-- Dark CSS -->
        <link rel=\"stylesheet\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/css/dark.css"), "html", null, true);
        yield "\">
        <!-- Responsive CSS -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/css/responsive.css"), "html", null, true);
        yield "\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/images/favicon.png"), "html", null, true);
        yield "\">
        ";
        // line 38
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 40
        yield "
        ";
        // line 41
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 44
        yield "    </head>
    <body>
    
        ";
        // line 47
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 302
        yield "        ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 303
        yield "        ";
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 431
        yield "        <script data-cfasync=\"false\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"), "html", null, true);
        yield "\"></script><script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/js/jquery.min.js"), "html", null, true);
        yield "\"></script>
        <!-- Bootstrap Bundle JS -->
        <script src=\"";
        // line 433
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
        <!-- Meanmenu JS -->
        <script src=\"";
        // line 435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/js/jquery.meanmenu.js"), "html", null, true);
        yield "\"></script>
        <!-- Owl Carousel JS -->
        <script src=\"";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/js/owl.carousel.min.js"), "html", null, true);
        yield "\"></script>
        <!-- Jquery Appear JS -->
        <script src=\"";
        // line 439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/js/jquery.appear.js"), "html", null, true);
        yield "\"></script>
        <!-- Odometer JS -->
        <script src=\"";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/js/odometer.min.js"), "html", null, true);
        yield "\"></script>
        <!-- Slick Min JS -->
        <script src=\"";
        // line 443
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/js/slick.min.js"), "html", null, true);
        yield "\"></script>
        <!-- Nice Select JS -->
        <script src=\"";
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/js/nice-select.min.js"), "html", null, true);
        yield "\"></script>
        <!-- Magnific Popup JS -->
        <script src=\"";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/js/jquery.magnific-popup.min.js"), "html", null, true);
        yield "\"></script>
        <!-- Fancybox JS -->
        <script src=\"";
        // line 449
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/js/fancybox.min.js"), "html", null, true);
        yield "\"></script>
        <!-- Ajaxchimp JS -->
\t\t<script src=\"";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/js/jquery.ajaxchimp.min.js"), "html", null, true);
        yield "\"></script>
\t\t<!-- Form Validator JS -->
\t\t<script src=\"";
        // line 453
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/js/form-validator.min.js"), "html", null, true);
        yield "\"></script>
\t\t<!-- Contact JS -->
        <script src=\"";
        // line 455
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/js/contact-form-script.js"), "html", null, true);
        yield "\"></script>
        <!-- Wow JS -->
        <script src=\"";
        // line 457
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/js/wow.min.js"), "html", null, true);
        yield "\"></script>
        <!-- Custom JS -->
        <script src=\"";
        // line 459
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/js/main.js"), "html", null, true);
        yield "\"></script>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 39
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
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

        // line 42
        yield "          ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 43
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 48
        yield "         <div class=\"navbar-area\">
            <div class=\"main-responsive-nav\">
                <div class=\"container\">
                    <div class=\"main-responsive-menu\">
                        <div class=\"logo\">
                            <a href=\"index.html\">
                                <img src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/images/logo.png"), "html", null, true);
        yield "\" class=\"black-logo\" alt=\"image\">
                                <img src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/images/logo-2.png"), "html", null, true);
        yield "\" class=\"white-logo\" alt=\"image\">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"main-navbar\">
                <div class=\"container\">
                    <nav class=\"navbar navbar-expand-md navbar-light\">
                        <a class=\"navbar-brand\" href=\"index.html\">
                            <img src=\"";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/images/logo.png"), "html", null, true);
        yield "\" class=\"black-logo\" alt=\"image\">
                            <img src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/images/logo-2.png"), "html", null, true);
        yield "\" class=\"white-logo\" alt=\"image\">
                        </a>

                        <div class=\"collapse navbar-collapse mean-menu\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav m-auto\">
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link active\">
                                        Home 
                                    </a> 
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_activity_index");
        yield "\" class=\"nav-link\">
                                        Activities 
                                    </a>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"#\" class=\"nav-link\">
                                        Courses 
                                        <i class='bx bx-caret-down'></i>
                                    </a>

                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\">
                                            <a href=\"courses-1.html\" class=\"nav-link\">Courses (3 in Row)</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"courses-2.html\" class=\"nav-link\">Courses (Full Width)</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"membership-levels.html\" class=\"nav-link\">Membership Levels</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"become-coaches.html\" class=\"nav-link\">Become Coaches</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"courses-details.html\" class=\"nav-link\">Courses Details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"#\" class=\"nav-link\">
                                        Services 
                                        <i class='bx bx-caret-down'></i>
                                    </a>

                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\">
                                            <a href=\"services.html\" class=\"nav-link\">Services</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"services-details.html\" class=\"nav-link\">Services Details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"#\" class=\"nav-link\">
                                        Shop 
                                        <i class='bx bx-caret-down'></i>
                                    </a>

                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\">
                                            <a href=\"products-grid.html\" class=\"nav-link\">Products Grid</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"cart.html\" class=\"nav-link\">Cart</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"wishlist.html\" class=\"nav-link\">Wishlist</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"checkout.html\" class=\"nav-link\">Checkout</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"my-account.html\" class=\"nav-link\">My Account</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"products-details.html\" class=\"nav-link\">Products Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"contact.html\" class=\"nav-link\">Contact</a>
                                </li>
                            </ul>

                            <div class=\"others-options d-flex align-items-center\">
                                <div class=\"option-item\">
                                    <div class=\"cart-btn\">
                                        <a href=\"cart.html\">
                                            <i class='flaticon-shopping-cart'></i>
                                            <span>2</span>
                                        </a>
                                    </div>
                                </div>

                                <div class=\"option-item\">
                                    <div class=\"search-box\">
                                        <i class='flaticon-search'></i>
                                    </div>
                                </div>
                                ";
        // line 181
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 181, $this->source); })()), "user", [], "any", false, false, false, 181)) {
            // line 182
            yield "                                <div class=\"option-item\">
                                    <div class=\"navbar-btn\">
                                        <a href=\"";
            // line 184
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"default-btn\">Login <i class=\"flaticon-pointer\"></i></a>
                                    </div>
                                </div>
                                ";
        }
        // line 188
        yield "                               ";
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 188, $this->source); })()), "user", [], "any", false, false, false, 188)) {
            // line 189
            yield "                                <div class=\"option-item\">
                                    <div class=\"navbar-btn\">
                                        <a href=\"";
            // line 191
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"default-btn\">Register <i class=\"flaticon-pointer\"></i></a>
                                    </div>
                                </div>
                                ";
        }
        // line 195
        yield "                               ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FOURNISSEUR")) {
            // line 196
            yield "                                  <div class=\"option-item dropdown\">
                                    <div class=\"navbar-btn\">
                                    <a href=\"#\" class=\"default-btn dropdown-toggle\" id=\"accountDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                     My Account <i class=\"flaticon-pointer\"></i>
                                     </a>
                                     <ul class=\"dropdown-menu\" aria-labelledby=\"accountDropdown\">
                                     <li><a class=\"dropdown-item\" href=\"";
            // line 202
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur");
            yield "\">Profile</a></li>
                                     <li><a class=\"dropdown-item\" href=\"";
            // line 203
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a></li>
                                    </ul>
                                    </div>
                                  </div>
                                ";
        }
        // line 208
        yield "                                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 209
            yield "                                  <div class=\"option-item dropdown\">
                                    <div class=\"navbar-btn\">
                                    <a href=\"#\" class=\"default-btn dropdown-toggle\" id=\"accountDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                     My Account <i class=\"flaticon-pointer\"></i>
                                     </a>
                                     <ul class=\"dropdown-menu\" aria-labelledby=\"accountDropdown\">
                                     <li><a class=\"dropdown-item\" href=\"";
            // line 215
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            yield "\">Profile</a></li>
                                     <li><a class=\"dropdown-item\" href=\"";
            // line 216
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a></li>
                                    </ul>
                                    </div>
                                  </div>
                                ";
        }
        // line 221
        yield "                                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PSYCHIATRE")) {
            // line 222
            yield "                                  <div class=\"option-item dropdown\">
                                    <div class=\"navbar-btn\">
                                    <a href=\"#\" class=\"default-btn dropdown-toggle\" id=\"accountDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                     My Account <i class=\"flaticon-pointer\"></i>
                                     </a>
                                     <ul class=\"dropdown-menu\" aria-labelledby=\"accountDropdown\">
                                     <li><a class=\"dropdown-item\" href=\"";
            // line 228
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_psychiatre");
            yield "\">Profile</a></li>
                                     <li><a class=\"dropdown-item\" href=\"";
            // line 229
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a></li>
                                    </ul>
                                    </div>
                                  </div>
                                ";
        }
        // line 234
        yield "                                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PATIENT")) {
            // line 235
            yield "                                  <div class=\"option-item dropdown\">
                                    <div class=\"navbar-btn\">
                                    <a href=\"#\" class=\"default-btn dropdown-toggle\" id=\"accountDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                     My Account <i class=\"flaticon-pointer\"></i>
                                     </a>
                                     <ul class=\"dropdown-menu\" aria-labelledby=\"accountDropdown\">
                                     <li><a class=\"dropdown-item\" href=\"";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_patient_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 241, $this->source); })()), "user", [], "any", false, false, false, 241), "id", [], "any", false, false, false, 241)]), "html", null, true);
            yield "\">Profile</a></li>
                                     <li><a class=\"dropdown-item\" href=\"";
            // line 242
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a></li>
                                    </ul>
                                    </div>
                                  </div>
                                ";
        }
        // line 247
        yield "                               ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 247, $this->source); })()), "user", [], "any", false, false, false, 247)) {
            // line 248
            yield "                                <div class=\"option-item\">
                                    <div class=\"navbar-btn\">
                                        <a href=\"";
            // line 250
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rdv_index");
            yield "\" class=\"default-btn\">Book Online <i class=\"flaticon-pointer\"></i></a>
                                    </div>
                                </div>
                                ";
        }
        // line 254
        yield "                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class=\"others-option-for-responsive\">
                <div class=\"container\">
                    <div class=\"dot-menu\">
                        <div class=\"inner\">
                            <div class=\"circle circle-one\"></div>
                            <div class=\"circle circle-two\"></div>
                            <div class=\"circle circle-three\"></div>
                        </div>
                    </div>
                    
                    <div class=\"container\">
                        <div class=\"option-inner\">
                            <div class=\"others-options d-flex align-items-center\">
                                ";
        // line 273
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 273, $this->source); })()), "user", [], "any", false, false, false, 273)) {
            // line 274
            yield "                                <div class=\"option-item\">
                                    <div class=\"cart-btn\">
                                        <a href=\"cart.html\">
                                            <i class='flaticon-shopping-cart'></i>
                                            <span>2</span>
                                        </a>
                                    </div>
                                </div>
                                ";
        }
        // line 283
        yield "                                <div class=\"option-item\">
                                    <div class=\"search-box\">
                                        <i class='flaticon-search'></i>
                                    </div>
                                </div>
                                
                                <div class=\"option-item\">
                                    <div class=\"navbar-btn\">

                                        <a href=\"";
        // line 292
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rdv_index");
        yield "\" class=\"default-btn\">Book Online <i class=\"flaticon-pointer\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 302
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 303
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 304
        yield "         <footer class=\"footer-area pt-100 pb-70\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"single-footer-widget\">
                            <div class=\"widget-logo\">
                                <a href=\"index.html\"><img src=\"";
        // line 310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assetsP/images/logo-2.png"), "html", null, true);
        yield "\" alt=\"image\"></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eir mod tempor invidunt ut labore et.</p>

                            <div class=\"widget-share\">
                                <a href=\"#\" target=\"_blank\">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                                <a href=\"#\" target=\"_blank\">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                                <a href=\"#\" target=\"_blank\">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                                <a href=\"#\" target=\"_blank\">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"single-footer-widget\">
                            <h3>Quick Links</h3>

                            <ul class=\"quick-links\">
                                <li>
                                    <a href=\"index.html\"><i class='bx bxs-right-arrow'></i> Home</a>
                                </li>
                                <li>
                                    <a href=\"about.html\"><i class='bx bxs-right-arrow'></i> About</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class='bx bxs-right-arrow'></i> Programs</a>
                                </li>
                                <li>
                                    <a href=\"services.html\"><i class='bx bxs-right-arrow'></i> Services</a>
                                </li>
                                <li>
                                    <a href=\"blog-3.html\"><i class='bx bxs-right-arrow'></i> Blog</a>
                                </li>
                                <li>
                                    <a href=\"contact.html\"><i class='bx bxs-right-arrow'></i> Contacts</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"single-footer-widget\">
                            <h3>Explore</h3>

                            <ul class=\"quick-links\">
                                <li>
                                    <a href=\"about.html\"><i class='bx bxs-right-arrow'></i> About Us</a>
                                </li>
                                <li>
                                    <a href=\"success-story.html\"><i class='bx bxs-right-arrow'></i> Success Story</a>
                                </li>
                                <li>
                                    <a href=\"membership-levels.html\"><i class='bx bxs-right-arrow'></i> Membership</a>
                                </li>
                                <li>
                                    <a href=\"purchase-guide.html\"><i class='bx bxs-right-arrow'></i> Purchase Guide</a>
                                </li>
                                <li>
                                    <a href=\"privacy-policy.html\"><i class='bx bxs-right-arrow'></i> Privacy Policy</a>
                                </li>
                                <li>
                                    <a href=\"terms-of-service.html\"><i class='bx bxs-right-arrow'></i> Terms Of Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"single-footer-widget\">
                            <h3>Contact Us</h3>

                            <ul class=\"footer-contact-info\">
                                <li>
                                    <i class='flaticon-phone-call'></i>
                                    <span>Phone No:</span>
                                    <a href=\"tel:9885394203\">+988 5394 203</a>
                                </li>
                                <li>
                                    <i class='flaticon-mail'></i>
                                    <span>Email Address:</span>
                                    <a href=\"/cdn-cgi/l/email-protection#1a727f7676755a6a6963767534797577\"><span class=\"__cf_email__\" data-cfemail=\"3159545d5d5e714142485d5e1f525e5c\">[email&#160;protected]</span></a>
                                </li>
                                <li>
                                    <i class='flaticon-placeholder'></i>
                                    <span>Location:</span>
                                    3 Edgar Buildings, George Street, England, BA1 2FJ.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         </footer>
         <!-- End Footer Area -->

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
        return "basePatient.html.twig";
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
        return array (  758 => 310,  750 => 304,  737 => 303,  715 => 302,  694 => 292,  683 => 283,  672 => 274,  670 => 273,  649 => 254,  642 => 250,  638 => 248,  635 => 247,  627 => 242,  623 => 241,  615 => 235,  612 => 234,  604 => 229,  600 => 228,  592 => 222,  589 => 221,  581 => 216,  577 => 215,  569 => 209,  566 => 208,  558 => 203,  554 => 202,  546 => 196,  543 => 195,  536 => 191,  532 => 189,  529 => 188,  522 => 184,  518 => 182,  516 => 181,  410 => 78,  402 => 73,  393 => 67,  389 => 66,  375 => 55,  371 => 54,  363 => 48,  350 => 47,  327 => 42,  316 => 43,  313 => 42,  300 => 41,  289 => 39,  276 => 38,  253 => 4,  238 => 459,  233 => 457,  228 => 455,  223 => 453,  218 => 451,  213 => 449,  208 => 447,  203 => 445,  198 => 443,  193 => 441,  188 => 439,  183 => 437,  178 => 435,  173 => 433,  165 => 431,  162 => 303,  159 => 302,  157 => 47,  152 => 44,  150 => 41,  147 => 40,  145 => 38,  141 => 37,  137 => 36,  132 => 34,  127 => 32,  122 => 30,  117 => 28,  112 => 26,  107 => 24,  102 => 22,  97 => 20,  92 => 18,  87 => 16,  82 => 14,  77 => 12,  72 => 10,  67 => 8,  60 => 4,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>{% block title %}Welcome!{% endblock %}</title>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <!-- Bootstrap CSS --> 
        <link rel=\"stylesheet\" href=\"{{ asset('assetsP/css/bootstrap.min.css') }}\">
        <!-- Animate CSS --> 
        <link rel=\"stylesheet\" href=\"{{ asset('assetsP/css/animate.min.css') }}\">
        <!-- Meanmenu CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assetsP/css/meanmenu.css') }}\">
        <!-- Boxicons CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assetsP/css/boxicons.min.css') }}\">
        <!-- Flaticon CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assetsP/css/flaticon.css') }}\">
        <!-- Odometer CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assetsP/css/odometer.min.css') }}\">
        <!-- Slick Min CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assetsP/css/slick.min.css') }}\">
        <!-- Nice Select CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assetsP/css/nice-select.min.css') }}\">
        <!-- Carousel CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assetsP/css/owl.carousel.min.css') }}\">
        <!-- Carousel Default CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assetsP/css/owl.theme.default.min.css') }}\">
        <!-- Magnific Popup CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assetsP/css/magnific-popup.min.css') }}\">
        <!-- Fancybox CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assetsP/css/fancybox.min.css') }}\">
        <!-- Style CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assetsP/css/style.css') }}\">
        <!-- Dark CSS -->
        <link rel=\"stylesheet\" href=\"{{ asset('assetsP/css/dark.css') }}\">
        <!-- Responsive CSS -->
\t\t<link rel=\"stylesheet\" href=\"{{ asset('assetsP/css/responsive.css') }}\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ asset('assetsP/images/favicon.png') }}\">
        {% block stylesheets %}
        {% endblock %}

        {% block javascripts %}
          {% block importmap %}{{ importmap('app') }}{% endblock %}
        {% endblock %}
    </head>
    <body>
    
        {% block header %}
         <div class=\"navbar-area\">
            <div class=\"main-responsive-nav\">
                <div class=\"container\">
                    <div class=\"main-responsive-menu\">
                        <div class=\"logo\">
                            <a href=\"index.html\">
                                <img src=\"{{ asset('assetsP/images/logo.png')}}\" class=\"black-logo\" alt=\"image\">
                                <img src=\"{{ asset('assetsP/images/logo-2.png')}}\" class=\"white-logo\" alt=\"image\">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"main-navbar\">
                <div class=\"container\">
                    <nav class=\"navbar navbar-expand-md navbar-light\">
                        <a class=\"navbar-brand\" href=\"index.html\">
                            <img src=\"{{ asset('assetsP/images/logo.png')}}\" class=\"black-logo\" alt=\"image\">
                            <img src=\"{{ asset('assetsP/images/logo-2.png')}}\" class=\"white-logo\" alt=\"image\">
                        </a>

                        <div class=\"collapse navbar-collapse mean-menu\" id=\"navbarSupportedContent\">
                            <ul class=\"navbar-nav m-auto\">
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('app_home')}}\" class=\"nav-link active\">
                                        Home 
                                    </a> 
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"{{ path('patient_activity_index')}}\" class=\"nav-link\">
                                        Activities 
                                    </a>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"#\" class=\"nav-link\">
                                        Courses 
                                        <i class='bx bx-caret-down'></i>
                                    </a>

                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\">
                                            <a href=\"courses-1.html\" class=\"nav-link\">Courses (3 in Row)</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"courses-2.html\" class=\"nav-link\">Courses (Full Width)</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"membership-levels.html\" class=\"nav-link\">Membership Levels</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"become-coaches.html\" class=\"nav-link\">Become Coaches</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"courses-details.html\" class=\"nav-link\">Courses Details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"#\" class=\"nav-link\">
                                        Services 
                                        <i class='bx bx-caret-down'></i>
                                    </a>

                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\">
                                            <a href=\"services.html\" class=\"nav-link\">Services</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"services-details.html\" class=\"nav-link\">Services Details</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class=\"nav-item\">
                                    <a href=\"#\" class=\"nav-link\">
                                        Shop 
                                        <i class='bx bx-caret-down'></i>
                                    </a>

                                    <ul class=\"dropdown-menu\">
                                        <li class=\"nav-item\">
                                            <a href=\"products-grid.html\" class=\"nav-link\">Products Grid</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"cart.html\" class=\"nav-link\">Cart</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"wishlist.html\" class=\"nav-link\">Wishlist</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"checkout.html\" class=\"nav-link\">Checkout</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"my-account.html\" class=\"nav-link\">My Account</a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a href=\"products-details.html\" class=\"nav-link\">Products Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"nav-item\">
                                    <a href=\"contact.html\" class=\"nav-link\">Contact</a>
                                </li>
                            </ul>

                            <div class=\"others-options d-flex align-items-center\">
                                <div class=\"option-item\">
                                    <div class=\"cart-btn\">
                                        <a href=\"cart.html\">
                                            <i class='flaticon-shopping-cart'></i>
                                            <span>2</span>
                                        </a>
                                    </div>
                                </div>

                                <div class=\"option-item\">
                                    <div class=\"search-box\">
                                        <i class='flaticon-search'></i>
                                    </div>
                                </div>
                                {% if not app.user %}
                                <div class=\"option-item\">
                                    <div class=\"navbar-btn\">
                                        <a href=\"{{ path('app_login') }}\" class=\"default-btn\">Login <i class=\"flaticon-pointer\"></i></a>
                                    </div>
                                </div>
                                {% endif %}
                               {% if not app.user %}
                                <div class=\"option-item\">
                                    <div class=\"navbar-btn\">
                                        <a href=\"{{ path('app_register') }}\" class=\"default-btn\">Register <i class=\"flaticon-pointer\"></i></a>
                                    </div>
                                </div>
                                {% endif %}
                               {% if is_granted('ROLE_FOURNISSEUR') %}
                                  <div class=\"option-item dropdown\">
                                    <div class=\"navbar-btn\">
                                    <a href=\"#\" class=\"default-btn dropdown-toggle\" id=\"accountDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                     My Account <i class=\"flaticon-pointer\"></i>
                                     </a>
                                     <ul class=\"dropdown-menu\" aria-labelledby=\"accountDropdown\">
                                     <li><a class=\"dropdown-item\" href=\"{{ path('app_fournisseur')}}\">Profile</a></li>
                                     <li><a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">Logout</a></li>
                                    </ul>
                                    </div>
                                  </div>
                                {% endif %}
                                {% if is_granted('ROLE_ADMIN') %}
                                  <div class=\"option-item dropdown\">
                                    <div class=\"navbar-btn\">
                                    <a href=\"#\" class=\"default-btn dropdown-toggle\" id=\"accountDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                     My Account <i class=\"flaticon-pointer\"></i>
                                     </a>
                                     <ul class=\"dropdown-menu\" aria-labelledby=\"accountDropdown\">
                                     <li><a class=\"dropdown-item\" href=\"{{ path('app_admin')}}\">Profile</a></li>
                                     <li><a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">Logout</a></li>
                                    </ul>
                                    </div>
                                  </div>
                                {% endif %}
                                {% if is_granted('ROLE_PSYCHIATRE') %}
                                  <div class=\"option-item dropdown\">
                                    <div class=\"navbar-btn\">
                                    <a href=\"#\" class=\"default-btn dropdown-toggle\" id=\"accountDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                     My Account <i class=\"flaticon-pointer\"></i>
                                     </a>
                                     <ul class=\"dropdown-menu\" aria-labelledby=\"accountDropdown\">
                                     <li><a class=\"dropdown-item\" href=\"{{ path('app_psychiatre')}}\">Profile</a></li>
                                     <li><a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">Logout</a></li>
                                    </ul>
                                    </div>
                                  </div>
                                {% endif %}
                                {% if is_granted('ROLE_PATIENT') %}
                                  <div class=\"option-item dropdown\">
                                    <div class=\"navbar-btn\">
                                    <a href=\"#\" class=\"default-btn dropdown-toggle\" id=\"accountDropdown\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                     My Account <i class=\"flaticon-pointer\"></i>
                                     </a>
                                     <ul class=\"dropdown-menu\" aria-labelledby=\"accountDropdown\">
                                     <li><a class=\"dropdown-item\" href=\"{{ path('app_patient_show', {'id': app.user.id})}}\">Profile</a></li>
                                     <li><a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">Logout</a></li>
                                    </ul>
                                    </div>
                                  </div>
                                {% endif %}
                               {% if app.user %}
                                <div class=\"option-item\">
                                    <div class=\"navbar-btn\">
                                        <a href=\"{{ path('app_rdv_index') }}\" class=\"default-btn\">Book Online <i class=\"flaticon-pointer\"></i></a>
                                    </div>
                                </div>
                                {% endif %}
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class=\"others-option-for-responsive\">
                <div class=\"container\">
                    <div class=\"dot-menu\">
                        <div class=\"inner\">
                            <div class=\"circle circle-one\"></div>
                            <div class=\"circle circle-two\"></div>
                            <div class=\"circle circle-three\"></div>
                        </div>
                    </div>
                    
                    <div class=\"container\">
                        <div class=\"option-inner\">
                            <div class=\"others-options d-flex align-items-center\">
                                {% if app.user %}
                                <div class=\"option-item\">
                                    <div class=\"cart-btn\">
                                        <a href=\"cart.html\">
                                            <i class='flaticon-shopping-cart'></i>
                                            <span>2</span>
                                        </a>
                                    </div>
                                </div>
                                {% endif %}
                                <div class=\"option-item\">
                                    <div class=\"search-box\">
                                        <i class='flaticon-search'></i>
                                    </div>
                                </div>
                                
                                <div class=\"option-item\">
                                    <div class=\"navbar-btn\">

                                        <a href=\"{{ path('app_rdv_index') }}\" class=\"default-btn\">Book Online <i class=\"flaticon-pointer\"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
        {% endblock %}
        {% block body %}{% endblock %}
        {% block footer %}
         <footer class=\"footer-area pt-100 pb-70\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"single-footer-widget\">
                            <div class=\"widget-logo\">
                                <a href=\"index.html\"><img src=\"{{ asset('assetsP/images/logo-2.png')}}\" alt=\"image\"></a>
                            </div>
                            <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eir mod tempor invidunt ut labore et.</p>

                            <div class=\"widget-share\">
                                <a href=\"#\" target=\"_blank\">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                                <a href=\"#\" target=\"_blank\">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                                <a href=\"#\" target=\"_blank\">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                                <a href=\"#\" target=\"_blank\">
                                    <i class='bx bxl-linkedin'></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"single-footer-widget\">
                            <h3>Quick Links</h3>

                            <ul class=\"quick-links\">
                                <li>
                                    <a href=\"index.html\"><i class='bx bxs-right-arrow'></i> Home</a>
                                </li>
                                <li>
                                    <a href=\"about.html\"><i class='bx bxs-right-arrow'></i> About</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class='bx bxs-right-arrow'></i> Programs</a>
                                </li>
                                <li>
                                    <a href=\"services.html\"><i class='bx bxs-right-arrow'></i> Services</a>
                                </li>
                                <li>
                                    <a href=\"blog-3.html\"><i class='bx bxs-right-arrow'></i> Blog</a>
                                </li>
                                <li>
                                    <a href=\"contact.html\"><i class='bx bxs-right-arrow'></i> Contacts</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"single-footer-widget\">
                            <h3>Explore</h3>

                            <ul class=\"quick-links\">
                                <li>
                                    <a href=\"about.html\"><i class='bx bxs-right-arrow'></i> About Us</a>
                                </li>
                                <li>
                                    <a href=\"success-story.html\"><i class='bx bxs-right-arrow'></i> Success Story</a>
                                </li>
                                <li>
                                    <a href=\"membership-levels.html\"><i class='bx bxs-right-arrow'></i> Membership</a>
                                </li>
                                <li>
                                    <a href=\"purchase-guide.html\"><i class='bx bxs-right-arrow'></i> Purchase Guide</a>
                                </li>
                                <li>
                                    <a href=\"privacy-policy.html\"><i class='bx bxs-right-arrow'></i> Privacy Policy</a>
                                </li>
                                <li>
                                    <a href=\"terms-of-service.html\"><i class='bx bxs-right-arrow'></i> Terms Of Services</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class=\"col-lg-3 col-sm-6\">
                        <div class=\"single-footer-widget\">
                            <h3>Contact Us</h3>

                            <ul class=\"footer-contact-info\">
                                <li>
                                    <i class='flaticon-phone-call'></i>
                                    <span>Phone No:</span>
                                    <a href=\"tel:9885394203\">+988 5394 203</a>
                                </li>
                                <li>
                                    <i class='flaticon-mail'></i>
                                    <span>Email Address:</span>
                                    <a href=\"/cdn-cgi/l/email-protection#1a727f7676755a6a6963767534797577\"><span class=\"__cf_email__\" data-cfemail=\"3159545d5d5e714142485d5e1f525e5c\">[email&#160;protected]</span></a>
                                </li>
                                <li>
                                    <i class='flaticon-placeholder'></i>
                                    <span>Location:</span>
                                    3 Edgar Buildings, George Street, England, BA1 2FJ.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
         </footer>
         <!-- End Footer Area -->

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
        <script data-cfasync=\"false\" src=\"{{ asset('assetsP/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}\"></script><script src=\"{{ asset('assetsP/js/jquery.min.js')}}\"></script>
        <!-- Bootstrap Bundle JS -->
        <script src=\"{{ asset('assetsP/js/bootstrap.bundle.min.js')}}\"></script>
        <!-- Meanmenu JS -->
        <script src=\"{{ asset('assetsP/js/jquery.meanmenu.js')}}\"></script>
        <!-- Owl Carousel JS -->
        <script src=\"{{ asset('assetsP/js/owl.carousel.min.js')}}\"></script>
        <!-- Jquery Appear JS -->
        <script src=\"{{ asset('assetsP/js/jquery.appear.js')}}\"></script>
        <!-- Odometer JS -->
        <script src=\"{{ asset('assetsP/js/odometer.min.js')}}\"></script>
        <!-- Slick Min JS -->
        <script src=\"{{ asset('assetsP/js/slick.min.js')}}\"></script>
        <!-- Nice Select JS -->
        <script src=\"{{ asset('assetsP/js/nice-select.min.js')}}\"></script>
        <!-- Magnific Popup JS -->
        <script src=\"{{ asset('assetsP/js/jquery.magnific-popup.min.js')}}\"></script>
        <!-- Fancybox JS -->
        <script src=\"{{ asset('assetsP/js/fancybox.min.js')}}\"></script>
        <!-- Ajaxchimp JS -->
\t\t<script src=\"{{ asset('assetsP/js/jquery.ajaxchimp.min.js')}}\"></script>
\t\t<!-- Form Validator JS -->
\t\t<script src=\"{{ asset('assetsP/js/form-validator.min.js')}}\"></script>
\t\t<!-- Contact JS -->
        <script src=\"{{ asset('assetsP/js/contact-form-script.js')}}\"></script>
        <!-- Wow JS -->
        <script src=\"{{ asset('assetsP/js/wow.min.js')}}\"></script>
        <!-- Custom JS -->
        <script src=\"{{ asset('assetsP/js/main.js')}}\"></script>
    </body>
</html>
", "basePatient.html.twig", "C:\\Users\\OUSSAMA BEN GAMRA\\OneDrive\\Desktop\\symfony\\symfony_pi_dev\\templates\\basePatient.html.twig");
    }
}
