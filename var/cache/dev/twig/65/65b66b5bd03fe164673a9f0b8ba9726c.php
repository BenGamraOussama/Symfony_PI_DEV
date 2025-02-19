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

/* base.html.twig */
class __TwigTemplate_6769a76d4217b2be97040d35b906cdcd extends Template
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
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'myfooter' => [$this, 'block_myfooter'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.ico"), "html", null, true);
        yield "\">

    <!-- Bootstrap -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" 
          integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" 
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css\" 
          integrity=\"sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD\" 
          crossorigin=\"anonymous\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">

    <!-- Custom Stylesheets -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendors.css"), "html", null, true);
        yield "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">

    <!-- Stylesheets Block -->
    ";
        // line 26
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 27
        yield "
    <style>
        #bglogo {
            background: #8e54e9;
        }
        .footer {
          background: #fff;
          position: fixed;
          padding: 1.5rem 2.3rem;
          z-index: 0;
          width: calc(100% - 240px);
          bottom: 0;
          right: 0;
          height: 60px;
          -webkit-box-shadow: 0 0 20px rgba(115, 105, 215, .15);
          -moz-box-shadow: 0 0 20px rgba(115, 105, 215, .15);
          box-shadow: 0 0 20px rgba(115, 105, 215, .15);
          transition: all .3s ease-out
        }
    </style>

    <!-- JavaScripts Block -->
    ";
        // line 49
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 52
        yield "</head>

    <body class=\"light-sidebar\">
    ";
        // line 55
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 495
        yield "    ";
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 561
        yield "    ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 563
        yield "    ";
        yield from $this->unwrap()->yieldBlock('myfooter', $context, $blocks);
        // line 575
        yield "    <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendors.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 576
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

    // line 26
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 49
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

        // line 50
        yield "        ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 51
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
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

    // line 55
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

        // line 56
        yield "        <header class=\"app-header top-bar\">
                <!-- begin navbar -->
                <nav class=\"navbar navbar-expand-md\">

                    <!-- begin navbar-header -->
                    <div class=\"navbar-header d-flex align-items-center\" id=\"bglogo\">
                        <a href=\"javascript:void:(0)\" class=\"mobile-toggle\"><i class=\"ti ti-align-right\"></i></a>
                        <a class=\"navbar-brand\" href=\"index.html\">
                            <img src=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo11.png"), "html", null, true);
        yield "\" class=\"img-fluid logo-desktop mx-4\" alt=\"logo\" />
                            <img src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-icon.png"), "html", null, true);
        yield "\" class=\"img-fluid logo-mobile\" alt=\"logo\" />
                        </a>
                    </div>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <i class=\"ti ti-align-left\"></i>
                    </button>
                    <!-- end navbar-header -->
                    <!-- begin navigation -->
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <div class=\"navigation d-flex\">
                            <ul class=\"navbar-nav nav-left\">
                                <li class=\"nav-item\">
                                    <a href=\"javascript:void(0)\" class=\"nav-link sidebar-toggle\">
                                        <i class=\"ti ti-align-right\"></i>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link  \" href=\"javascript:void(0)\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Mega Menu
                                        <i class=\"fa fa-angle-down\"></i>
                                    </a>
                                    <div class=\"dropdown-menu mega-menu animated fadeIn\" aria-labelledby=\"navbarDropdown\">
                                        <div class=\"row no-gutters\">
                                            <div class=\"col-sm-2 p-20\">
                                                <h4>UI Kit</h4>
                                                <ul>
                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-alerts.html\">Alerts</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-button.html\">Buttons</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-cards.html\">Cards</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-carousel.html\">Carousel</a>
                                                    </li>

                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-dropdowns.html\">Dropdowns</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-list-group.html\">List Group</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-modals.html\">Modals</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-progressbars.html\">Progress Bars</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-tabs.html\">Tabs</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"col-sm-2 p-20\">
                                                <h4>Pages</h4>
                                                <ul>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-account-settings.html\">Account Settings</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-clients.html\">Clients</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-contacts.html\">Contacts</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-gallery.html\">Gallery</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-pricing.html\">Pricing</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-task-list.html\">Task List</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-404.html\">404</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-500.html\">500</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-coming-soon.html\">Coming Soon</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"col-sm-4 p-20\">
                                                <h4>Contact Us</h4>
                                                <div>
                                                    <form>
                                                        <div class=\"form-group\">
                                                            <input type=\"text\" class=\"form-control\" id=\"Password1\" placeholder=\"Enter Name\">
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <input type=\"email\" class=\"form-control\" id=\"Email1\" placeholder=\"Enter Email\">
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <textarea class=\"form-control\" placeholder=\"Message\" id=\"Textarea1\" rows=\"3\"></textarea>
                                                        </div>
                                                        <button type=\"submit\" class=\"btn btn-primary text-uppercase\">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-4\">
                                                <div class=\"chart-wrap\">
                                                    <div class=\"p-20\">
                                                        <h4 class=\"mb-1\">Page Views</h4>
                                                        <p>Daily page visitors</p>
                                                        <h2 class=\"text-primary font-xxl mt-2\">80+</h2>
                                                    </div>
                                                    <div class=\"apexchart-wrapper\">
                                                        <div id=\"pageview\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a href=\"javascript:void(0)\" class=\"nav-link \" id=\"navbarDropdown1\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Drop Down
                                        <i class=\"fa fa-angle-down\"></i>
                                    </a>
                                    <div class=\"dropdown-menu animated fadeIn\" aria-labelledby=\"navbarDropdown\">
                                        <a class=\"dropdown-item nav-link\" href=\"javascript:void(0)\">Action</a>
                                        <a class=\"dropdown-item nav-link\" href=\"javascript:void(0)\">Another action</a>
                                        <a class=\"dropdown-item nav-link\" href=\"javascript:void(0)\">Something else here</a>
                                    </div>
                                </li>
                                <li class=\"nav-item full-screen d-none d-lg-block\" id=\"btnFullscreen\">
                                    <a href=\"javascript:void(0)\" class=\"nav-link expand\">
                                        <i class=\"icon-size-fullscreen\"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class=\"navbar-nav nav-right ml-auto\">
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" id=\"navbarDropdown2\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"ti ti-email\"></i>
                                    </a>
                                    <div class=\"dropdown-menu extended animated fadeIn\" aria-labelledby=\"navbarDropdown\">
                                        <ul>
                                            <li class=\"dropdown-header bg-gradient p-4 text-white text-left\">Messages
                                                <label class=\"label label-info label-round\">6</label>
                                                <a href=\"#\" class=\"float-right btn btn-square btn-inverse-light btn-xs m-0\">
                                                    <span class=\"font-13\"> Mark all as read</span></a>
                                            </li>
                                            <li class=\"dropdown-body\">
                                                <ul class=\"scrollbar scroll_dark max-h-240\">
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <img class=\"img-fluid\" src=\"";
        // line 218
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avtar/03.jpg"), "html", null, true);
        yield "\" alt=\"user3\">
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Brianing Leyon</p>
                                                                    <small>You will sail along until you...</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <img class=\"img-fluid\" src=\"";
        // line 231
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avtar/01.jpg"), "html", null, true);
        yield "\" alt=\"user\">
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Jimmyimg Leyon</p>
                                                                    <small>Okay</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <img class=\"img-fluid\" src=\"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avtar/02.jpg"), "html", null, true);
        yield "\" alt=\"user2\">
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Brainjon Leyon</p>
                                                                    <small>So, make the decision...</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <img class=\"img-fluid\" src=\"";
        // line 257
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avtar/04.jpg"), "html", null, true);
        yield "\" alt=\"user4\">
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Smithmin Leyon</p>
                                                                    <small>Thanks</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <img class=\"img-fluid\" src=\"";
        // line 270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avtar/05.jpg"), "html", null, true);
        yield "\" alt=\"user5\">
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Jennyns Leyon</p>
                                                                    <small>How are you</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <img class=\"img-fluid\" src=\"";
        // line 283
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avtar/06.jpg"), "html", null, true);
        yield "\" alt=\"user6\">
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Demian Leyon</p>
                                                                    <small>I like your themes</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=\"dropdown-footer\">
                                                <a class=\"font-13\" href=\"javascript:void(0)\"> View All messages </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" id=\"navbarDropdown3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fe fe-bell\"></i>
                                        <span class=\"notify\">
                                                    <span class=\"blink\"></span>
                                        <span class=\"dot\"></span>
                                        </span>
                                    </a>
                                    <div class=\"dropdown-menu extended animated fadeIn\" aria-labelledby=\"navbarDropdown\">
                                        <ul>
                                            <li class=\"dropdown-header bg-gradient p-4 text-white text-left\">Notifications
                                                <a href=\"#\" class=\"float-right btn btn-square btn-inverse-light btn-xs m-0\">
                                                    <span class=\"font-13\"> Clear all</span></a>
                                            </li>
                                            <li class=\"dropdown-body min-h-240 nicescroll\">
                                                <ul class=\"scrollbar scroll_dark max-h-240\">
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <div class=\"bg-type bg-type-md\">
                                                                        <span>HY</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">New registered user</p>
                                                                    <small>Just now</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <div class=\"bg-type bg-type-md bg-success\">
                                                                        <span>GM</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">New invoice received</p>
                                                                    <small>22 min</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <div class=\"bg-type bg-type-md bg-danger\">
                                                                        <span>FR</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Server error report</p>
                                                                    <small>7 min</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <div class=\"bg-type bg-type-md bg-info\">
                                                                        <span>HT</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Database report</p>
                                                                    <small>1 day</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <div class=\"bg-type bg-type-md\">
                                                                        <span>DE</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Order confirmation</p>
                                                                    <small>2 day</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=\"dropdown-footer\">
                                                <a class=\"font-13\" href=\"javascript:void(0)\"> View All Notifications
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link search\" href=\"javascript:void(0)\">
                                        <i class=\"ti ti-search\"></i>
                                    </a>
                                    <div class=\"search-wrapper\">
                                        <div class=\"close-btn\">
                                            <i class=\"ti ti-close\"></i>
                                        </div>
                                        <div class=\"search-content\">
                                            <form>
                                                <div class=\"form-group\">
                                                    <i class=\"ti ti-search magnifier\"></i>
                                                    <input type=\"text\" class=\"form-control autocomplete\" placeholder=\"Search Here\" id=\"autocomplete-ajax\" autofocus=\"autofocus\">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"nav-item dropdown user-profile\">
                                    <a href=\"javascript:void(0)\" class=\"nav-link dropdown-toggle \" id=\"navbarDropdown4\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <img src=\"";
        // line 420
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avtar/02.jpg"), "html", null, true);
        yield "\" alt=\"avtar-img\">
                                        <span class=\"bg-success user-status\"></span>
                                    </a>
                                    <div class=\"dropdown-menu animated fadeIn\" aria-labelledby=\"navbarDropdown\">
                                        <div class=\"bg-gradient px-4 py-3\">
                                            <div class=\"d-flex align-items-center justify-content-between\">
                                                <div class=\"mr-1\">
                                                ";
        // line 427
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FOURNISSEUR")) {
            // line 428
            yield "                                                    <h4 class=\"text-white mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 428, $this->source); })()), "firstName", [], "any", false, false, false, 428), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 428, $this->source); })()), "lastName", [], "any", false, false, false, 428), "html", null, true);
            yield "</h4>
                                                    <small class=\"text-white\">";
            // line 429
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 429, $this->source); })()), "email", [], "any", false, false, false, 429), "html", null, true);
            yield "</small>
                                                ";
        }
        // line 431
        yield "                                                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PATIENT")) {
            // line 432
            yield "                                                    <h4 class=\"text-white mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 432, $this->source); })()), "firstName", [], "any", false, false, false, 432), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 432, $this->source); })()), "lastName", [], "any", false, false, false, 432), "html", null, true);
            yield "</h4>
                                                    <small class=\"text-white\">";
            // line 433
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 433, $this->source); })()), "email", [], "any", false, false, false, 433), "html", null, true);
            yield "</small>
                                                ";
        }
        // line 435
        yield "                                                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PSYCHIATRE")) {
            // line 436
            yield "                                                    <h4 class=\"text-white mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 436, $this->source); })()), "firstName", [], "any", false, false, false, 436), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 436, $this->source); })()), "lastName", [], "any", false, false, false, 436), "html", null, true);
            yield "</h4>
                                                    <small class=\"text-white\">";
            // line 437
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 437, $this->source); })()), "email", [], "any", false, false, false, 437), "html", null, true);
            yield "</small>
                                                ";
        }
        // line 439
        yield "                                                ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 440
            yield "                                                    <h4 class=\"text-white mb-0\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 440, $this->source); })()), "firstName", [], "any", false, false, false, 440), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 440, $this->source); })()), "lastName", [], "any", false, false, false, 440), "html", null, true);
            yield "</h4>
                                                    <small class=\"text-white\">";
            // line 441
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 441, $this->source); })()), "email", [], "any", false, false, false, 441), "html", null, true);
            yield "</small>
                                                ";
        }
        // line 443
        yield "                                                </div>
                                                <a href=\"";
        // line 444
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"text-white font-20 tooltip-wrapper\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Logout\"> <i class=\"zmdi zmdi-power\"></i></a>
                                            </div>
                                        </div>
                                        <div class=\"p-4\">
                                        ";
        // line 448
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FOURNISSEUR")) {
            // line 449
            yield "                                          <a class=\"dropdown-item d-flex nav-link\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_fournisseur_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 449, $this->source); })()), "id", [], "any", false, false, false, 449)]), "html", null, true);
            yield "\">
                                          <i class=\"fa fa-user pr-2 text-success\"></i> Profile</a>
                                         ";
        }
        // line 452
        yield "                                            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_PSYCHIATRE")) {
            // line 453
            yield "                                            <a class=\"dropdown-item d-flex nav-link\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_psychiatre_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 453, $this->source); })()), "id", [], "any", false, false, false, 453)]), "html", null, true);
            yield "\">
                                            <i class=\"fa fa-user pr-2 text-success\"></i> Profile</a>
                                            ";
        }
        // line 456
        yield "                                             ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 457
            yield "                                            <a class=\"dropdown-item d-flex nav-link\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 457, $this->source); })()), "id", [], "any", false, false, false, 457)]), "html", null, true);
            yield "\">
                                            <i class=\"fa fa-user pr-2 text-success\"></i> Profile</a>
                                            ";
        }
        // line 460
        yield "                                            <a class=\"dropdown-item d-flex nav-link\" href=\"javascript:void(0)\">
                                                <i class=\"fa fa-envelope pr-2 text-primary\"></i> Inbox
                                                <span class=\"badge badge-primary ml-auto\">6</span>
                                            </a>
                                            <a class=\"dropdown-item d-flex nav-link\" href=\"javascript:void(0)\">
                                                <i class=\" ti ti-settings pr-2 text-info\"></i> Settings
                                            </a>
                                            <a class=\"dropdown-item d-flex nav-link\" href=\"javascript:void(0)\">
                                                <i class=\"fa fa-compass pr-2 text-warning\"></i> Need help?</a>
                                            <div class=\"row mt-2\">
                                                <div class=\"col\">
                                                    <a class=\"bg-light p-3 text-center d-block\" href=\"#\">
                                                        <i class=\"fe fe-mail font-20 text-primary\"></i>
                                                        <span class=\"d-block font-13 mt-2\">My messages</span>
                                                    </a>
                                                </div>
                                                <div class=\"col\">
                                                    <a class=\"bg-light p-3 text-center d-block\" href=\"#\">
                                                        <i class=\"fe fe-plus font-20 text-primary\"></i>
                                                        <span class=\"d-block font-13 mt-2\">Compose new</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end navigation -->
                </nav>
                <!-- end navbar -->
            </header>

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 495
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 496
        yield "    <div class=\"light-sidebar\">
        <aside class=\"app-navbar\">
    <!-- begin sidebar-nav -->
    <div class=\"sidebar-nav scrollbar scroll_Dark\">
        <ul class=\"metismenu \" id=\"sidebarNav\">
            <li class=\"nav-static-title\">Personal</li>
            <li>
                <a href=\"admin\" aria-expanded=\"false\">
                    <i class=\"nav-icon ti ti-home\"></i>
                    <span class=\"nav-title\">Tableau de bord</span>
    
                </a>
            </li>
            ";
        // line 509
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 510
            yield "            <li><a href='";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rendez__vous_admin");
            yield "' aria-expanded=\"false\"><i class=\"bi bi-calendar-check\"></i><span class=\"nav-title\">Rendez-vous</span></a> </li>
            <li><a href='";
            // line 511
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_traitement_index");
            yield "' aria-expanded=\"false\"><i class=\"bi bi-calendar-check\"></i><span class=\"nav-title\">Traitement</span></a> </li>
            <li><a href='";
            // line 512
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_index");
            yield "' aria-expanded=\"false\"><i class=\"bi bi-calendar-check\"></i><span class=\"nav-title\">Consultation</span></a> </li>

            <li><a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
            <i class=\"nav-icon ti ti-user\"></i>
            <span class=\"nav-title\">Psychiatre</span></a>
                <ul aria-expanded=\"false\">
                    <li> 
                        <a href='";
            // line 519
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ajouterpsychiatre");
            yield "'>Ajouter Psychiatre</a> </li>
                    <li> <a href='";
            // line 520
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_listpsychiatre");
            yield "'>List Psychiatre</a> </li>
                        </ul>
            </li>
                    ";
        }
        // line 524
        yield "                    ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 525
            yield "            <li>
                <a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
                <i class=\"bi bi-people\"></i>
                <span class=\"nav-title\">Fournisseur</span> </a>
                <ul aria-expanded=\"false\">
                    <li> <a href='";
            // line 530
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_ajouterfournisseur");
            yield "'>Ajouter Fournisseur</a> </li>
                    <li> <a href='";
            // line 531
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_listfournisseur");
            yield "'>List Fournisseur</a> </li>
                </ul>
            </li>
              ";
        }
        // line 535
        yield "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 536
            yield "            <li>
                <a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"bi bi-people\"></i><span class=\"nav-title\">Patient</span> </a>
                <ul aria-expanded=\"false\">
                    <li> <a href='";
            // line 539
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_patient_new");
            yield "'>Ajouter Patient</a> </li>
                    <li> <a href='";
            // line 540
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("list_patient_index");
            yield "'>List Patient</a> </li>
                </ul>
            </li>
            ";
        }
        // line 544
        yield "            <li><a href=\"listclient\" aria-expanded=\"false\"><i class=\"bi bi-people\"></i><span class=\"nav-title\">Client</span></a> </li>
            <li><a href=\"listproduit\" aria-expanded=\"false\"><i class=\"bi bi-shop\"></i><span class=\"nav-title\">Produit</span></a> </li>
            <li>
                <a href=\"listcolis\" aria-expanded=\"false\"><i class=\"bi bi-box\"></i> <span class=\"nav-title\">Colis</span></a>
            </li>
            <li><a href=\"affcom\" aria-expanded=\"false\"><i class=\"bi bi-command\"></i><span class=\"nav-title\">Commandes</span></a></li>           
            <li><a href=\"listcontact\" aria-expanded=\"false\"><i class=\"nav-icon ti ti-email\"></i><span class=\"nav-title\">Reclamation</span></a></li>        
                <li><a href=\"";
        // line 551
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_index");
        yield "\" aria-expanded=\"false\"><i class=\"bi bi-people\"></i><span class=\"nav-title\">Activities & Exercices</span> </a></li>
               
            </li>
        </ul>
       
    </div>
    <!-- end sidebar-nav -->
  </aside>
  </div>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 561
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

        // line 562
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 563
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_myfooter(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myfooter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "myfooter"));

        // line 564
        yield "    <div class=\"footer\">
      <div class=\"row\">
        <div class=\"col-12 col-sm-6 text-center text-sm-left\">
            <p>&copy; Copyright 2025. All rights reserved.</p>
        </div>
        <div class=\"col  col-sm-6 ml-sm-auto text-center text-sm-right\">
            <p>ShopFlow Developped <i class=\"fa fa-heart text-danger mx-1\"></i> by Oussama Ben Gamra</p>
        </div>
      </div>
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
        return "base.html.twig";
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
        return array (  977 => 564,  964 => 563,  953 => 562,  940 => 561,  919 => 551,  910 => 544,  903 => 540,  899 => 539,  894 => 536,  891 => 535,  884 => 531,  880 => 530,  873 => 525,  870 => 524,  863 => 520,  859 => 519,  849 => 512,  845 => 511,  840 => 510,  838 => 509,  823 => 496,  810 => 495,  765 => 460,  758 => 457,  755 => 456,  748 => 453,  745 => 452,  738 => 449,  736 => 448,  729 => 444,  726 => 443,  721 => 441,  714 => 440,  711 => 439,  706 => 437,  699 => 436,  696 => 435,  691 => 433,  684 => 432,  681 => 431,  676 => 429,  669 => 428,  667 => 427,  657 => 420,  517 => 283,  501 => 270,  485 => 257,  469 => 244,  453 => 231,  437 => 218,  281 => 65,  277 => 64,  267 => 56,  254 => 55,  231 => 50,  220 => 51,  217 => 50,  204 => 49,  182 => 26,  159 => 5,  144 => 576,  139 => 575,  136 => 563,  133 => 561,  130 => 495,  128 => 55,  123 => 52,  121 => 49,  97 => 27,  95 => 26,  89 => 23,  85 => 22,  68 => 8,  62 => 5,  56 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/img/favicon.ico') }}\">

    <!-- Bootstrap -->
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" 
          integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" 
          crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css\" 
          integrity=\"sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD\" 
          crossorigin=\"anonymous\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">

    <!-- Custom Stylesheets -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/vendors.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/style.css') }}\">

    <!-- Stylesheets Block -->
    {% block stylesheets %}{% endblock %}

    <style>
        #bglogo {
            background: #8e54e9;
        }
        .footer {
          background: #fff;
          position: fixed;
          padding: 1.5rem 2.3rem;
          z-index: 0;
          width: calc(100% - 240px);
          bottom: 0;
          right: 0;
          height: 60px;
          -webkit-box-shadow: 0 0 20px rgba(115, 105, 215, .15);
          -moz-box-shadow: 0 0 20px rgba(115, 105, 215, .15);
          box-shadow: 0 0 20px rgba(115, 105, 215, .15);
          transition: all .3s ease-out
        }
    </style>

    <!-- JavaScripts Block -->
    {% block javascripts %}
        {% block importmap %}{{ importmap('app') }}{% endblock %}
    {% endblock %}
</head>

    <body class=\"light-sidebar\">
    {% block header %}
        <header class=\"app-header top-bar\">
                <!-- begin navbar -->
                <nav class=\"navbar navbar-expand-md\">

                    <!-- begin navbar-header -->
                    <div class=\"navbar-header d-flex align-items-center\" id=\"bglogo\">
                        <a href=\"javascript:void:(0)\" class=\"mobile-toggle\"><i class=\"ti ti-align-right\"></i></a>
                        <a class=\"navbar-brand\" href=\"index.html\">
                            <img src=\"{{ asset('assets/img/logo11.png')}}\" class=\"img-fluid logo-desktop mx-4\" alt=\"logo\" />
                            <img src=\"{{ asset('assets/img/logo-icon.png')}}\" class=\"img-fluid logo-mobile\" alt=\"logo\" />
                        </a>
                    </div>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <i class=\"ti ti-align-left\"></i>
                    </button>
                    <!-- end navbar-header -->
                    <!-- begin navigation -->
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <div class=\"navigation d-flex\">
                            <ul class=\"navbar-nav nav-left\">
                                <li class=\"nav-item\">
                                    <a href=\"javascript:void(0)\" class=\"nav-link sidebar-toggle\">
                                        <i class=\"ti ti-align-right\"></i>
                                    </a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link  \" href=\"javascript:void(0)\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Mega Menu
                                        <i class=\"fa fa-angle-down\"></i>
                                    </a>
                                    <div class=\"dropdown-menu mega-menu animated fadeIn\" aria-labelledby=\"navbarDropdown\">
                                        <div class=\"row no-gutters\">
                                            <div class=\"col-sm-2 p-20\">
                                                <h4>UI Kit</h4>
                                                <ul>
                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-alerts.html\">Alerts</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-button.html\">Buttons</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-cards.html\">Cards</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-carousel.html\">Carousel</a>
                                                    </li>

                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-dropdowns.html\">Dropdowns</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-list-group.html\">List Group</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-modals.html\">Modals</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-progressbars.html\">Progress Bars</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"ui-tabs.html\">Tabs</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"col-sm-2 p-20\">
                                                <h4>Pages</h4>
                                                <ul>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-account-settings.html\">Account Settings</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-clients.html\">Clients</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-contacts.html\">Contacts</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-gallery.html\">Gallery</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-pricing.html\">Pricing</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-task-list.html\">Task List</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-404.html\">404</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-500.html\">500</a>
                                                    </li>
                                                    <li class=\"nav-link\">
                                                        <a href=\"page-coming-soon.html\">Coming Soon</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class=\"col-sm-4 p-20\">
                                                <h4>Contact Us</h4>
                                                <div>
                                                    <form>
                                                        <div class=\"form-group\">
                                                            <input type=\"text\" class=\"form-control\" id=\"Password1\" placeholder=\"Enter Name\">
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <input type=\"email\" class=\"form-control\" id=\"Email1\" placeholder=\"Enter Email\">
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <textarea class=\"form-control\" placeholder=\"Message\" id=\"Textarea1\" rows=\"3\"></textarea>
                                                        </div>
                                                        <button type=\"submit\" class=\"btn btn-primary text-uppercase\">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class=\"col-sm-4\">
                                                <div class=\"chart-wrap\">
                                                    <div class=\"p-20\">
                                                        <h4 class=\"mb-1\">Page Views</h4>
                                                        <p>Daily page visitors</p>
                                                        <h2 class=\"text-primary font-xxl mt-2\">80+</h2>
                                                    </div>
                                                    <div class=\"apexchart-wrapper\">
                                                        <div id=\"pageview\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a href=\"javascript:void(0)\" class=\"nav-link \" id=\"navbarDropdown1\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Drop Down
                                        <i class=\"fa fa-angle-down\"></i>
                                    </a>
                                    <div class=\"dropdown-menu animated fadeIn\" aria-labelledby=\"navbarDropdown\">
                                        <a class=\"dropdown-item nav-link\" href=\"javascript:void(0)\">Action</a>
                                        <a class=\"dropdown-item nav-link\" href=\"javascript:void(0)\">Another action</a>
                                        <a class=\"dropdown-item nav-link\" href=\"javascript:void(0)\">Something else here</a>
                                    </div>
                                </li>
                                <li class=\"nav-item full-screen d-none d-lg-block\" id=\"btnFullscreen\">
                                    <a href=\"javascript:void(0)\" class=\"nav-link expand\">
                                        <i class=\"icon-size-fullscreen\"></i>
                                    </a>
                                </li>
                            </ul>
                            <ul class=\"navbar-nav nav-right ml-auto\">
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" id=\"navbarDropdown2\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"ti ti-email\"></i>
                                    </a>
                                    <div class=\"dropdown-menu extended animated fadeIn\" aria-labelledby=\"navbarDropdown\">
                                        <ul>
                                            <li class=\"dropdown-header bg-gradient p-4 text-white text-left\">Messages
                                                <label class=\"label label-info label-round\">6</label>
                                                <a href=\"#\" class=\"float-right btn btn-square btn-inverse-light btn-xs m-0\">
                                                    <span class=\"font-13\"> Mark all as read</span></a>
                                            </li>
                                            <li class=\"dropdown-body\">
                                                <ul class=\"scrollbar scroll_dark max-h-240\">
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <img class=\"img-fluid\" src=\"{{ asset('assets/img/avtar/03.jpg')}}\" alt=\"user3\">
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Brianing Leyon</p>
                                                                    <small>You will sail along until you...</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <img class=\"img-fluid\" src=\"{{ asset('assets/img/avtar/01.jpg')}}\" alt=\"user\">
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Jimmyimg Leyon</p>
                                                                    <small>Okay</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <img class=\"img-fluid\" src=\"{{ asset('assets/img/avtar/02.jpg')}}\" alt=\"user2\">
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Brainjon Leyon</p>
                                                                    <small>So, make the decision...</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <img class=\"img-fluid\" src=\"{{ asset('assets/img/avtar/04.jpg')}}\" alt=\"user4\">
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Smithmin Leyon</p>
                                                                    <small>Thanks</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <img class=\"img-fluid\" src=\"{{ asset('assets/img/avtar/05.jpg')}}\" alt=\"user5\">
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Jennyns Leyon</p>
                                                                    <small>How are you</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <img class=\"img-fluid\" src=\"{{ asset('assets/img/avtar/06.jpg')}}\" alt=\"user6\">
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Demian Leyon</p>
                                                                    <small>I like your themes</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=\"dropdown-footer\">
                                                <a class=\"font-13\" href=\"javascript:void(0)\"> View All messages </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" id=\"navbarDropdown3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fe fe-bell\"></i>
                                        <span class=\"notify\">
                                                    <span class=\"blink\"></span>
                                        <span class=\"dot\"></span>
                                        </span>
                                    </a>
                                    <div class=\"dropdown-menu extended animated fadeIn\" aria-labelledby=\"navbarDropdown\">
                                        <ul>
                                            <li class=\"dropdown-header bg-gradient p-4 text-white text-left\">Notifications
                                                <a href=\"#\" class=\"float-right btn btn-square btn-inverse-light btn-xs m-0\">
                                                    <span class=\"font-13\"> Clear all</span></a>
                                            </li>
                                            <li class=\"dropdown-body min-h-240 nicescroll\">
                                                <ul class=\"scrollbar scroll_dark max-h-240\">
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <div class=\"bg-type bg-type-md\">
                                                                        <span>HY</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">New registered user</p>
                                                                    <small>Just now</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <div class=\"bg-type bg-type-md bg-success\">
                                                                        <span>GM</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">New invoice received</p>
                                                                    <small>22 min</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <div class=\"bg-type bg-type-md bg-danger\">
                                                                        <span>FR</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Server error report</p>
                                                                    <small>7 min</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <div class=\"bg-type bg-type-md bg-info\">
                                                                        <span>HT</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Database report</p>
                                                                    <small>1 day</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"javascript:void(0)\">
                                                            <div class=\"notification d-flex flex-row align-items-center\">
                                                                <div class=\"notify-icon bg-img align-self-center\">
                                                                    <div class=\"bg-type bg-type-md\">
                                                                        <span>DE</span>
                                                                    </div>
                                                                </div>
                                                                <div class=\"notify-message\">
                                                                    <p class=\"font-weight-bold\">Order confirmation</p>
                                                                    <small>2 day</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=\"dropdown-footer\">
                                                <a class=\"font-13\" href=\"javascript:void(0)\"> View All Notifications
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link search\" href=\"javascript:void(0)\">
                                        <i class=\"ti ti-search\"></i>
                                    </a>
                                    <div class=\"search-wrapper\">
                                        <div class=\"close-btn\">
                                            <i class=\"ti ti-close\"></i>
                                        </div>
                                        <div class=\"search-content\">
                                            <form>
                                                <div class=\"form-group\">
                                                    <i class=\"ti ti-search magnifier\"></i>
                                                    <input type=\"text\" class=\"form-control autocomplete\" placeholder=\"Search Here\" id=\"autocomplete-ajax\" autofocus=\"autofocus\">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class=\"nav-item dropdown user-profile\">
                                    <a href=\"javascript:void(0)\" class=\"nav-link dropdown-toggle \" id=\"navbarDropdown4\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <img src=\"{{ asset('assets/img/avtar/02.jpg')}}\" alt=\"avtar-img\">
                                        <span class=\"bg-success user-status\"></span>
                                    </a>
                                    <div class=\"dropdown-menu animated fadeIn\" aria-labelledby=\"navbarDropdown\">
                                        <div class=\"bg-gradient px-4 py-3\">
                                            <div class=\"d-flex align-items-center justify-content-between\">
                                                <div class=\"mr-1\">
                                                {% if is_granted('ROLE_FOURNISSEUR') %}
                                                    <h4 class=\"text-white mb-0\">{{user.firstName}} {{user.lastName}}</h4>
                                                    <small class=\"text-white\">{{user.email}}</small>
                                                {% endif %}
                                                {% if is_granted('ROLE_PATIENT') %}
                                                    <h4 class=\"text-white mb-0\">{{user.firstName}} {{user.lastName}}</h4>
                                                    <small class=\"text-white\">{{user.email}}</small>
                                                {% endif %}
                                                {% if is_granted('ROLE_PSYCHIATRE') %}
                                                    <h4 class=\"text-white mb-0\">{{user.firstName}} {{user.lastName}}</h4>
                                                    <small class=\"text-white\">{{user.email}}</small>
                                                {% endif %}
                                                {% if is_granted('ROLE_ADMIN') %}
                                                    <h4 class=\"text-white mb-0\">{{user.firstName}} {{user.lastName}}</h4>
                                                    <small class=\"text-white\">{{user.email}}</small>
                                                {% endif %}
                                                </div>
                                                <a href=\"{{ path('app_logout')}}\" class=\"text-white font-20 tooltip-wrapper\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Logout\"> <i class=\"zmdi zmdi-power\"></i></a>
                                            </div>
                                        </div>
                                        <div class=\"p-4\">
                                        {% if is_granted('ROLE_FOURNISSEUR') %}
                                          <a class=\"dropdown-item d-flex nav-link\" href=\"{{ path('app_fournisseur_show', {'id': user.id})}}\">
                                          <i class=\"fa fa-user pr-2 text-success\"></i> Profile</a>
                                         {% endif %}
                                            {% if is_granted('ROLE_PSYCHIATRE') %}
                                            <a class=\"dropdown-item d-flex nav-link\" href=\"{{ path('app_psychiatre_show', {'id': user.id})}}\">
                                            <i class=\"fa fa-user pr-2 text-success\"></i> Profile</a>
                                            {% endif %}
                                             {% if is_granted('ROLE_ADMIN') %}
                                            <a class=\"dropdown-item d-flex nav-link\" href=\"{{ path('app_admin_show', {'id': user.id})}}\">
                                            <i class=\"fa fa-user pr-2 text-success\"></i> Profile</a>
                                            {% endif %}
                                            <a class=\"dropdown-item d-flex nav-link\" href=\"javascript:void(0)\">
                                                <i class=\"fa fa-envelope pr-2 text-primary\"></i> Inbox
                                                <span class=\"badge badge-primary ml-auto\">6</span>
                                            </a>
                                            <a class=\"dropdown-item d-flex nav-link\" href=\"javascript:void(0)\">
                                                <i class=\" ti ti-settings pr-2 text-info\"></i> Settings
                                            </a>
                                            <a class=\"dropdown-item d-flex nav-link\" href=\"javascript:void(0)\">
                                                <i class=\"fa fa-compass pr-2 text-warning\"></i> Need help?</a>
                                            <div class=\"row mt-2\">
                                                <div class=\"col\">
                                                    <a class=\"bg-light p-3 text-center d-block\" href=\"#\">
                                                        <i class=\"fe fe-mail font-20 text-primary\"></i>
                                                        <span class=\"d-block font-13 mt-2\">My messages</span>
                                                    </a>
                                                </div>
                                                <div class=\"col\">
                                                    <a class=\"bg-light p-3 text-center d-block\" href=\"#\">
                                                        <i class=\"fe fe-plus font-20 text-primary\"></i>
                                                        <span class=\"d-block font-13 mt-2\">Compose new</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- end navigation -->
                </nav>
                <!-- end navbar -->
            </header>

    {% endblock %}
    {% block sidebar %}
    <div class=\"light-sidebar\">
        <aside class=\"app-navbar\">
    <!-- begin sidebar-nav -->
    <div class=\"sidebar-nav scrollbar scroll_Dark\">
        <ul class=\"metismenu \" id=\"sidebarNav\">
            <li class=\"nav-static-title\">Personal</li>
            <li>
                <a href=\"admin\" aria-expanded=\"false\">
                    <i class=\"nav-icon ti ti-home\"></i>
                    <span class=\"nav-title\">Tableau de bord</span>
    
                </a>
            </li>
            {% if is_granted('ROLE_ADMIN') %}
            <li><a href='{{path('app_rendez__vous_admin')}}' aria-expanded=\"false\"><i class=\"bi bi-calendar-check\"></i><span class=\"nav-title\">Rendez-vous</span></a> </li>
            <li><a href='{{path('app_traitement_index')}}' aria-expanded=\"false\"><i class=\"bi bi-calendar-check\"></i><span class=\"nav-title\">Traitement</span></a> </li>
            <li><a href='{{path('app_consultation_index')}}' aria-expanded=\"false\"><i class=\"bi bi-calendar-check\"></i><span class=\"nav-title\">Consultation</span></a> </li>

            <li><a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
            <i class=\"nav-icon ti ti-user\"></i>
            <span class=\"nav-title\">Psychiatre</span></a>
                <ul aria-expanded=\"false\">
                    <li> 
                        <a href='{{path('app_admin_ajouterpsychiatre')}}'>Ajouter Psychiatre</a> </li>
                    <li> <a href='{{path('app_admin_listpsychiatre')}}'>List Psychiatre</a> </li>
                        </ul>
            </li>
                    {% endif %}
                    {% if is_granted('ROLE_ADMIN') %}
            <li>
                <a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
                <i class=\"bi bi-people\"></i>
                <span class=\"nav-title\">Fournisseur</span> </a>
                <ul aria-expanded=\"false\">
                    <li> <a href='{{path('app_admin_ajouterfournisseur')}}'>Ajouter Fournisseur</a> </li>
                    <li> <a href='{{path('app_admin_listfournisseur')}}'>List Fournisseur</a> </li>
                </ul>
            </li>
              {% endif %}
            {% if is_granted('ROLE_ADMIN') %}
            <li>
                <a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\"><i class=\"bi bi-people\"></i><span class=\"nav-title\">Patient</span> </a>
                <ul aria-expanded=\"false\">
                    <li> <a href='{{path('app_patient_new')}}'>Ajouter Patient</a> </li>
                    <li> <a href='{{path('list_patient_index')}}'>List Patient</a> </li>
                </ul>
            </li>
            {% endif %}
            <li><a href=\"listclient\" aria-expanded=\"false\"><i class=\"bi bi-people\"></i><span class=\"nav-title\">Client</span></a> </li>
            <li><a href=\"listproduit\" aria-expanded=\"false\"><i class=\"bi bi-shop\"></i><span class=\"nav-title\">Produit</span></a> </li>
            <li>
                <a href=\"listcolis\" aria-expanded=\"false\"><i class=\"bi bi-box\"></i> <span class=\"nav-title\">Colis</span></a>
            </li>
            <li><a href=\"affcom\" aria-expanded=\"false\"><i class=\"bi bi-command\"></i><span class=\"nav-title\">Commandes</span></a></li>           
            <li><a href=\"listcontact\" aria-expanded=\"false\"><i class=\"nav-icon ti ti-email\"></i><span class=\"nav-title\">Reclamation</span></a></li>        
                <li><a href=\"{{ path('app_activite_index') }}\" aria-expanded=\"false\"><i class=\"bi bi-people\"></i><span class=\"nav-title\">Activities & Exercices</span> </a></li>
               
            </li>
        </ul>
       
    </div>
    <!-- end sidebar-nav -->
  </aside>
  </div>
    {% endblock %}
    {% block body %}
    {% endblock %}
    {% block myfooter %}
    <div class=\"footer\">
      <div class=\"row\">
        <div class=\"col-12 col-sm-6 text-center text-sm-left\">
            <p>&copy; Copyright 2025. All rights reserved.</p>
        </div>
        <div class=\"col  col-sm-6 ml-sm-auto text-center text-sm-right\">
            <p>ShopFlow Developped <i class=\"fa fa-heart text-danger mx-1\"></i> by Oussama Ben Gamra</p>
        </div>
      </div>
    </div>
    {% endblock %}
    <script src=\"{{ asset('assets/js/vendors.js')}}\"></script>
    <script src=\"{{ asset('assets/js/app.js')}}\"></script>
    </body>
</html>
", "base.html.twig", "C:\\Users\\OUSSAMA BEN GAMRA\\OneDrive\\Desktop\\symfony\\symfony_pi_dev\\templates\\base.html.twig");
    }
}
