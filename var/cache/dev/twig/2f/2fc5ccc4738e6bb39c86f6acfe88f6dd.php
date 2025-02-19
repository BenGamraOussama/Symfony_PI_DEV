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
class __TwigTemplate_1c75a44945e7cc1c93eaa425a61fb99b extends Template
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
            'footer' => [$this, 'block_footer'],
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
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 8
        yield "\t\t</title>

\t\t<!-- Favicon -->
\t\t<link
\t\trel=\"shortcut icon\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico"), "html", null, true);
        yield "\">

\t\t<!-- Bootstrap -->
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css\" integrity=\"sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD\" crossorigin=\"anonymous\">

\t\t<!-- Google Fonts -->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">

\t\t<!-- Custom Stylesheets -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/vendors.css"), "html", null, true);
        yield "\">
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        yield "\">

\t\t<!-- Stylesheets Block -->
\t\t";
        // line 29
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 30
        yield "
\t\t<style>
\t\t\t#bglogo {
\t\t\t\tbackground: #7b9dfd;
\t\t\t}
\t\t</style>

\t\t<!-- JavaScripts Block -->
\t\t";
        // line 38
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 43
        yield "\t</head>

\t<body class=\"light-sidebar\">
\t\t";
        // line 46
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 479
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 605
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 606
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 607
        yield "\t\t<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendors.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 608
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        yield "\"></script>
\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Welcome!
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
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

    // line 38
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

        // line 39
        yield "\t\t\t";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 42
        yield "\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
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

        // line 40
        yield "\t\t\t\t";
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        yield "
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
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

        // line 47
        yield "\t\t\t<header
\t\t\t\tclass=\"app-header top-bar\">
\t\t\t\t<!-- begin navbar -->
\t\t\t\t<nav
\t\t\t\t\tclass=\"navbar navbar-expand-md\">

\t\t\t\t\t<!-- begin navbar-header -->
\t\t\t\t\t<div class=\"navbar-header d-flex align-items-center\" id=\"bglogo\">
\t\t\t\t\t\t<a href=\"javascript:void:(0)\" class=\"mobile-toggle\">
\t\t\t\t\t\t\t<i class=\"ti ti-align-right\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t\t\t<img src=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo11.png"), "html", null, true);
        yield "\" class=\"img-fluid logo-desktop mx-4\" alt=\"logo\"/>
\t\t\t\t\t\t\t<img src=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo-icon.png"), "html", null, true);
        yield "\" class=\"img-fluid logo-mobile\" alt=\"logo\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<i class=\"ti ti-align-left\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- end navbar-header -->
\t\t\t\t\t<!-- begin navigation -->
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<div class=\"navigation d-flex\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav nav-left\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link sidebar-toggle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-align-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link  \" href=\"javascript:void(0)\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Mega Menu
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu mega-menu animated fadeIn\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 p-20\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>UI Kit</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-alerts.html\">Alerts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-button.html\">Buttons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-cards.html\">Cards</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-carousel.html\">Carousel</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-dropdowns.html\">Dropdowns</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-list-group.html\">List Group</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-modals.html\">Modals</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-progressbars.html\">Progress Bars</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-tabs.html\">Tabs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 p-20\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Pages</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-account-settings.html\">Account Settings</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-clients.html\">Clients</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-contacts.html\">Contacts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-gallery.html\">Gallery</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-pricing.html\">Pricing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-task-list.html\">Task List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-404.html\">404</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-500.html\">500</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-coming-soon.html\">Coming Soon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 p-20\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"Password1\" placeholder=\"Enter Name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"Email1\" placeholder=\"Enter Email\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" placeholder=\"Message\" id=\"Textarea1\" rows=\"3\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary text-uppercase\">Submit</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"p-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-1\">Page Views</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Daily page visitors</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-primary font-xxl mt-2\">80+</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"apexchart-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"pageview\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link \" id=\"navbarDropdown1\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Drop Down
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu animated fadeIn\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item nav-link\" href=\"javascript:void(0)\">Action</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item nav-link\" href=\"javascript:void(0)\">Another action</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item nav-link\" href=\"javascript:void(0)\">Something else here</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item full-screen d-none d-lg-block\" id=\"btnFullscreen\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link expand\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-size-fullscreen\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"navbar-nav nav-right ml-auto\">
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" id=\"navbarDropdown2\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-email\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu extended animated fadeIn\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header bg-gradient p-4 text-white text-left\">Messages
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-info label-round\">6</label>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"float-right btn btn-square btn-inverse-light btn-xs m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tMark all as read</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"scrollbar scroll_dark max-h-240\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avtar/03.jpg"), "html", null, true);
        yield "\" alt=\"user3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Brianing Leyon</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>You will sail along until you...</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 228
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avtar/01.jpg"), "html", null, true);
        yield "\" alt=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Jimmyimg Leyon</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Okay</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 241
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avtar/02.jpg"), "html", null, true);
        yield "\" alt=\"user2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Brainjon Leyon</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>So, make the decision...</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 254
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avtar/04.jpg"), "html", null, true);
        yield "\" alt=\"user4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Smithmin Leyon</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Thanks</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avtar/05.jpg"), "html", null, true);
        yield "\" alt=\"user5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Jennyns Leyon</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>How are you</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avtar/06.jpg"), "html", null, true);
        yield "\" alt=\"user6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Demian Leyon</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>I like your themes</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"font-13\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\tView All messages
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" id=\"navbarDropdown3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fe fe-bell\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"notify\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"blink\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dot\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu extended animated fadeIn\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header bg-gradient p-4 text-white text-left\">Notifications
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"float-right btn btn-square btn-inverse-light btn-xs m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tClear all</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-body min-h-240 nicescroll\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"scrollbar scroll_dark max-h-240\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-type bg-type-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>HY</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">New registered user</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Just now</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-type bg-type-md bg-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>GM</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">New invoice received</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>22 min</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-type bg-type-md bg-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>FR</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Server error report</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>7 min</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-type bg-type-md bg-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>HT</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Database report</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>1 day</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-type bg-type-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>DE</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Order confirmation</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>2 day</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"font-13\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\tView All Notifications
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link search\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-search\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"search-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"close-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-close\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"search-content\">
\t\t\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-search magnifier\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control autocomplete\" placeholder=\"Search Here\" id=\"autocomplete-ajax\" autofocus=\"autofocus\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown user-profile\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link dropdown-toggle \" id=\"navbarDropdown4\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 422
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/avtar/02.jpg"), "html", null, true);
        yield "\" alt=\"avtar-img\">
\t\t\t\t\t\t\t\t\t\t<span class=\"bg-success user-status\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu animated fadeIn\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-gradient px-4 py-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-white mb-0\">Alice Williams</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-white\">Henry@example.com</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-white font-20 tooltip-wrapper\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Logout\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-power\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex nav-link\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user pr-2 text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tProfile</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex nav-link\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope pr-2 text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tInbox
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-primary ml-auto\">6</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex nav-link\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" ti ti-settings pr-2 text-info\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex nav-link\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-compass pr-2 text-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tNeed help?</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"bg-light p-3 text-center d-block\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fe fe-mail font-20 text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-block font-13 mt-2\">My messages</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"bg-light p-3 text-center d-block\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fe fe-plus font-20 text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-block font-13 mt-2\">Compose new</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end navigation -->
\t\t\t\t</nav>
\t\t\t\t<!-- end navbar -->
\t\t\t</header>

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 479
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

        // line 480
        yield "\t\t\t<div class=\"light-sidebar\">
\t\t\t\t<aside
\t\t\t\t\tclass=\"app-navbar\">
\t\t\t\t\t<!-- begin sidebar-nav -->
\t\t\t\t\t<div class=\"sidebar-nav scrollbar scroll_Dark\">
\t\t\t\t\t\t<ul class=\"metismenu \" id=\"sidebarNav\">
\t\t\t\t\t\t\t<li class=\"nav-static-title\">Personal</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"admin\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon ti ti-home\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Tableau de bord</span>

\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"listclient\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar-check\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Rendez-vous</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon ti ti-user\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Administrateur</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href='ajouterAdmin'>Ajouter Administrateurs</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href='listAdmin'>List d'Administrateurs</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Fournisseur</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"listfournisseur\">List Fournisseur</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href='listAdmin'>List Fournisseur</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon ti ti-truck\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Livreur</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"ajouterlivreur\">Ajouter Livreur</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"listlivreur\">List Livreur</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"listclient\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Client</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"listproduit\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-shop\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Produit</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"listcolis\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Colis</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t


                            \t<li>
\t\t\t\t\t\t\t\t<a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon bi bi-command\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Commande</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/commande\">Commande</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"listcontact\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon ti ti-email\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Reclamation</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Activite Et Exercice</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 590
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_index");
        yield "\">Gestion Activite
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 594
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_exercice_index");
        yield "\">Gestion Exercice</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t\t<!-- end sidebar-nav -->
\t\t\t\t</aside>
\t\t\t</div>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 605
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

    // line 606
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
        return array (  905 => 606,  883 => 605,  861 => 594,  854 => 590,  742 => 480,  729 => 479,  661 => 422,  516 => 280,  500 => 267,  484 => 254,  468 => 241,  452 => 228,  436 => 215,  278 => 60,  274 => 59,  260 => 47,  247 => 46,  233 => 40,  220 => 39,  209 => 42,  206 => 39,  193 => 38,  171 => 29,  147 => 6,  132 => 608,  127 => 607,  124 => 606,  121 => 605,  118 => 479,  116 => 46,  111 => 43,  109 => 38,  99 => 30,  97 => 29,  91 => 26,  86 => 24,  71 => 12,  65 => 8,  63 => 6,  56 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>

\t\t<!-- Favicon -->
\t\t<link
\t\trel=\"shortcut icon\" href=\"{{ asset('img/favicon.ico') }}\">

\t\t<!-- Bootstrap -->
\t\t<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH\" crossorigin=\"anonymous\">
\t\t<link
\t\trel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css\" integrity=\"sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD\" crossorigin=\"anonymous\">

\t\t<!-- Google Fonts -->
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Roboto:300,400,500,700\" rel=\"stylesheet\">

\t\t<!-- Custom Stylesheets -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/vendors.css') }}\">
\t\t<link
\t\trel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/style.css') }}\">

\t\t<!-- Stylesheets Block -->
\t\t{% block stylesheets %}{% endblock %}

\t\t<style>
\t\t\t#bglogo {
\t\t\t\tbackground: #7b9dfd;
\t\t\t}
\t\t</style>

\t\t<!-- JavaScripts Block -->
\t\t{% block javascripts %}
\t\t\t{% block importmap %}
\t\t\t\t{{ importmap('app') }}
\t\t\t{% endblock %}
\t\t{% endblock %}
\t</head>

\t<body class=\"light-sidebar\">
\t\t{% block header %}
\t\t\t<header
\t\t\t\tclass=\"app-header top-bar\">
\t\t\t\t<!-- begin navbar -->
\t\t\t\t<nav
\t\t\t\t\tclass=\"navbar navbar-expand-md\">

\t\t\t\t\t<!-- begin navbar-header -->
\t\t\t\t\t<div class=\"navbar-header d-flex align-items-center\" id=\"bglogo\">
\t\t\t\t\t\t<a href=\"javascript:void:(0)\" class=\"mobile-toggle\">
\t\t\t\t\t\t\t<i class=\"ti ti-align-right\"></i>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a class=\"navbar-brand\" href=\"index.html\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/logo11.png')}}\" class=\"img-fluid logo-desktop mx-4\" alt=\"logo\"/>
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/logo-icon.png')}}\" class=\"img-fluid logo-mobile\" alt=\"logo\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<i class=\"ti ti-align-left\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t<!-- end navbar-header -->
\t\t\t\t\t<!-- begin navigation -->
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
\t\t\t\t\t\t<div class=\"navigation d-flex\">
\t\t\t\t\t\t\t<ul class=\"navbar-nav nav-left\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link sidebar-toggle\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-align-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link  \" href=\"javascript:void(0)\" id=\"navbarDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Mega Menu
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu mega-menu animated fadeIn\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 p-20\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>UI Kit</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-alerts.html\">Alerts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-button.html\">Buttons</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-cards.html\">Cards</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-carousel.html\">Carousel</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-dropdowns.html\">Dropdowns</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-list-group.html\">List Group</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-modals.html\">Modals</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-progressbars.html\">Progress Bars</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"ui-tabs.html\">Tabs</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 p-20\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Pages</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-account-settings.html\">Account Settings</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-clients.html\">Clients</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-contacts.html\">Contacts</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-gallery.html\">Gallery</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-pricing.html\">Pricing</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-task-list.html\">Task List</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-404.html\">404</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-500.html\">500</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-link\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"page-coming-soon.html\">Coming Soon</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4 p-20\">
\t\t\t\t\t\t\t\t\t\t\t\t<h4>Contact Us</h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"Password1\" placeholder=\"Enter Name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control\" id=\"Email1\" placeholder=\"Enter Email\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea class=\"form-control\" placeholder=\"Message\" id=\"Textarea1\" rows=\"3\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary text-uppercase\">Submit</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"chart-wrap\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"p-20\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"mb-1\">Page Views</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>Daily page visitors</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h2 class=\"text-primary font-xxl mt-2\">80+</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"apexchart-wrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"pageview\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link \" id=\"navbarDropdown1\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Drop Down
\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu animated fadeIn\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item nav-link\" href=\"javascript:void(0)\">Action</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item nav-link\" href=\"javascript:void(0)\">Another action</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item nav-link\" href=\"javascript:void(0)\">Something else here</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item full-screen d-none d-lg-block\" id=\"btnFullscreen\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link expand\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-size-fullscreen\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<ul class=\"navbar-nav nav-right ml-auto\">
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" id=\"navbarDropdown2\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-email\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu extended animated fadeIn\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header bg-gradient p-4 text-white text-left\">Messages
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"label label-info label-round\">6</label>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"float-right btn btn-square btn-inverse-light btn-xs m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tMark all as read</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-body\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"scrollbar scroll_dark max-h-240\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset('assets/img/avtar/03.jpg')}}\" alt=\"user3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Brianing Leyon</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>You will sail along until you...</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset('assets/img/avtar/01.jpg')}}\" alt=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Jimmyimg Leyon</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Okay</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset('assets/img/avtar/02.jpg')}}\" alt=\"user2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Brainjon Leyon</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>So, make the decision...</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset('assets/img/avtar/04.jpg')}}\" alt=\"user4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Smithmin Leyon</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Thanks</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset('assets/img/avtar/05.jpg')}}\" alt=\"user5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Jennyns Leyon</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>How are you</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{ asset('assets/img/avtar/06.jpg')}}\" alt=\"user6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Demian Leyon</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>I like your themes</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"font-13\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\tView All messages
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"javascript:void(0)\" id=\"navbarDropdown3\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fe fe-bell\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"notify\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"blink\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"dot\"></span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu extended animated fadeIn\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-header bg-gradient p-4 text-white text-left\">Notifications
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"float-right btn btn-square btn-inverse-light btn-xs m-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-13\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tClear all</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-body min-h-240 nicescroll\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"scrollbar scroll_dark max-h-240\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-type bg-type-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>HY</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">New registered user</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>Just now</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-type bg-type-md bg-success\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>GM</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">New invoice received</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>22 min</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-type bg-type-md bg-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>FR</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Server error report</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>7 min</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-type bg-type-md bg-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>HT</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Database report</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>1 day</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notification d-flex flex-row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-icon bg-img align-self-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-type bg-type-md\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span>DE</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"notify-message\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"font-weight-bold\">Order confirmation</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>2 day</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t<li class=\"dropdown-footer\">
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"font-13\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t\tView All Notifications
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t<a class=\"nav-link search\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-search\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"search-wrapper\">
\t\t\t\t\t\t\t\t\t\t<div class=\"close-btn\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-close\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"search-content\">
\t\t\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ti ti-search magnifier\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control autocomplete\" placeholder=\"Search Here\" id=\"autocomplete-ajax\" autofocus=\"autofocus\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item dropdown user-profile\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0)\" class=\"nav-link dropdown-toggle \" id=\"navbarDropdown4\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/img/avtar/02.jpg')}}\" alt=\"avtar-img\">
\t\t\t\t\t\t\t\t\t\t<span class=\"bg-success user-status\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu animated fadeIn\" aria-labelledby=\"navbarDropdown\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-gradient px-4 py-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mr-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"text-white mb-0\">Alice Williams</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t<small class=\"text-white\">Henry@example.com</small>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-white font-20 tooltip-wrapper\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Logout\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"zmdi zmdi-power\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex nav-link\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-user pr-2 text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tProfile</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex nav-link\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-envelope pr-2 text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tInbox
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge badge-primary ml-auto\">6</span>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex nav-link\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\" ti ti-settings pr-2 text-info\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex nav-link\" href=\"javascript:void(0)\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-compass pr-2 text-warning\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tNeed help?</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"bg-light p-3 text-center d-block\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fe fe-mail font-20 text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-block font-13 mt-2\">My messages</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"bg-light p-3 text-center d-block\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fe fe-plus font-20 text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-block font-13 mt-2\">Compose new</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- end navigation -->
\t\t\t\t</nav>
\t\t\t\t<!-- end navbar -->
\t\t\t</header>

\t\t{% endblock %}
\t\t{% block sidebar %}
\t\t\t<div class=\"light-sidebar\">
\t\t\t\t<aside
\t\t\t\t\tclass=\"app-navbar\">
\t\t\t\t\t<!-- begin sidebar-nav -->
\t\t\t\t\t<div class=\"sidebar-nav scrollbar scroll_Dark\">
\t\t\t\t\t\t<ul class=\"metismenu \" id=\"sidebarNav\">
\t\t\t\t\t\t\t<li class=\"nav-static-title\">Personal</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"admin\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon ti ti-home\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Tableau de bord</span>

\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"listclient\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-calendar-check\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Rendez-vous</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon ti ti-user\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Administrateur</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href='ajouterAdmin'>Ajouter Administrateurs</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href='listAdmin'>List d'Administrateurs</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Fournisseur</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"listfournisseur\">List Fournisseur</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href='listAdmin'>List Fournisseur</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon ti ti-truck\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Livreur</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"ajouterlivreur\">Ajouter Livreur</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"listlivreur\">List Livreur</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"listclient\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Client</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"listproduit\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-shop\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Produit</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"listcolis\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-box\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Colis</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t


                            \t<li>
\t\t\t\t\t\t\t\t<a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon bi bi-command\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Commande</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"/commande\">Commande</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t 
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"listcontact\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"nav-icon ti ti-email\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Reclamation</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a class=\"has-arrow\" href=\"javascript:void(0)\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-people\"></i>
\t\t\t\t\t\t\t\t\t<span class=\"nav-title\">Activite Et Exercice</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<ul aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_activite_index') }}\">Gestion Activite
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_exercice_index') }}\">Gestion Exercice</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>

\t\t\t\t\t</div>
\t\t\t\t\t<!-- end sidebar-nav -->
\t\t\t\t</aside>
\t\t\t</div>
\t\t{% endblock %}
\t\t{% block body %}{% endblock %}
\t\t{% block footer %}{% endblock %}
\t\t<script src=\"{{ asset('assets/js/vendors.js')}}\"></script>
\t\t<script src=\"{{ asset('assets/js/app.js')}}\"></script>
\t</body>
</html>
", "base.html.twig", "C:\\Users\\Administrator\\Desktop\\symfony_pi_dev (4)\\symfony_pi_dev\\templates\\base.html.twig");
    }
}
