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

/* home/index.html.twig */
class __TwigTemplate_9f8579bc8973f9744865d2fa7fc923ef extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Hello HomeController!";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "
<style>















/* ==================== Top Navigation CSS ==================== */


#espace {
  margin-bottom: -33px;
  margin-left: 5px;
  color: #5F5490;
}


.navbar-brand {
  float: left;
}

.menu {
  float: right;
  margin-right: 10px;
  margin-top: 10px;
  font-size: 30px;
  cursor: pointer;
  color: #000;
  display: none;
  text-decoration: none;
}

/* Global styling for sidebar */


.sidebar {
  width: 250px;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  color: #fff;
  padding-top: 0px;
  
  /* Background image and styling */
  background-image: url('/images/bgside.jpeg'); /* Replace with your image URL */
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

/* Adding an overlay for better text readability */
.sidebar::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(30, 30, 47, 0.85); /* Dark overlay */
  z-index: 1;
}

.sidebar * {
  position: relative;
  z-index: 2;
}

/* Sidebar header styling */
.sidebar-header {
  padding: 10px;
}

.logo {
  width: 120px;
  height: 120px;
  
 
}

.bg-warning{
  background: #FF8A00;
}

.sidebar-title {
  font-size: 18px;
  font-weight: bold;
  color: #ddd;
}

/* Profile section styling */
.profile {
  margin: 20px 0;
}

.profile-img {
  width: 50px;
  height: 50px;
  margin-bottom: 5px;
}

.profile-name {
  font-size: 14px;
  color: #ddd;
}

.profile-icon {
  color: #ccc;
  font-size: 10px;
}

/* Navigation links styling */
.nav-link {
  color: #bbb;
  padding: 10px 20px;
  font-size: 20px;
  display: flex;
}

.nav-link i {
  margin-right: 10px;
  width: 20px;
  height: 20px;
}

.nav-link span {
  width: 20px;
  height: 20px;
  margin-right: 10px;
}

.nav-link:hover {
  background-color: rgba(255, 255, 255, 0.1);
  color: #fff;
  transition: background-color 0.3s;
}

.nav-link.active {
  background-color: rgba(255, 255, 255, 0.2);
  color: #fff;
}
/* ==================== Main Content CSS ==================== */
.main-content {
  margin-left: 250px;
  margin-top: 50px;
  padding: 10px 18px;
  transition: margin-left .5s;
  color: #000;
}



/* ==================== Responsive CSS ==================== */
@media screen and (max-width:500px) {
  .menu {
      display: block;
  }

  .sidebar {
      display: none;
      width: 160px;
  }

  .sidebar a {
      padding: 10px 0px;
  }

  .main-content {
      margin-left: 0px;
  }
}


</style>

<!-- Left Sidebar Navigation -->
<div class=\"sidebar\" >
  <span class=\"menu text-dark\">
    <i class=\"bi bi-list\"></i>
  </span>
  <div class=\"sidebar-header text-center bg-warning\">
    <img src=\"/images/logo sans back.png\" alt=\"Logo\" class=\"logo\">
    <h4 class=\"sidebar-title\"></h4>
  </div>
  
  <div class=\"profile text-center\">
    <a href=\"/admin/profile\">
      <img src=\"https://cdn-icons-png.flaticon.com/512/5367/5367605.png\" alt=\"User Profile\" class=\"profile-img rounded-circle\">
    </a>
  </div>
  
  <ul class=\"nav flex-column\">
    <li class=\"nav-item\">
      <a href=\"/admin/stat\" class=\"nav-link active\"> <span> ";
        // line 209
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("fluent-mdl2:b-i-dashboard");
        yield " </span> Dashboard</a>
    </li>
    <li class=\"nav-item\">
      <a href=\"/admin/projects\" class=\"nav-link\"><span> ";
        // line 212
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("fluent-mdl2:product-variant");
        yield " </span> Produits</a>
    </li>
    <li class=\"nav-item\">
      <a href=\"/admin/employee\" class=\"nav-link\"><span> ";
        // line 215
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("clarity:employee-group-line");
        yield " </span> Employes </a>
    </li>
    <li class=\"nav-item\">
      <a href=\"/admin/employee\" class=\"nav-link\"><span> ";
        // line 218
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("lucide:tractor");
        yield " </span> Equipements </a>
    </li>
    <li class=\"nav-item\">
      <a href=\"/admin/tasks\" class=\"nav-link\"><span> ";
        // line 221
        yield $this->env->getRuntime('Symfony\UX\Icons\Twig\UXIconRuntime')->renderIcon("clarity:event-solid");
        yield " </span> Evenements</a>
    </li>
    
  </ul>
</div>
<!-- End of Left Sidebar Navigation -->

<!-- Main Content -->
<div class=\"main-content text-dark\">
  <div>
  <h1>Espace Fermier !</h1>
  </div>
</div>
<!-- End of Main Content -->\t

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  299 => 221,  293 => 218,  287 => 215,  281 => 212,  275 => 209,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home/index.html.twig", "/home/anas/Desktop/symfony_pi_dev/templates/home/index.html.twig");
    }
}
