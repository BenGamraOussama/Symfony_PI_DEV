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

/* first/index.html.twig */
class __TwigTemplate_c56665ba172773a719b37e49612979d3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "first/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Hello FirstController!";
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
        yield "<style>
    img {
    width: 100%;
    height: 100%;
    }

/* Logo */


/* Contenu centré */
.content {
    position: absolute;
    top: 50%;
    left: 40%;
    text-align: center;
}

.content h1 {
    font-size: 50px;
    font-weight: 400;
    letter-spacing: 2px;
    margin-bottom: 10px;
    color: white;
    text-align: center;
}

.content hr {
    width: 50px;
    height: 2px;
    background: #ffffff;
    border: none;
    margin: 10px auto;
    text-align: center;
}

.content p {
    font-size: 20px;
    font-weight: 400;
    margin-top: 10px;
    text-align: center;
}

.modal-header{
    background: linear-gradient(-135deg, #eea98e, #e1633f);
    text-align: center;
    font-size: 25px;
    color: #fff;
}


.input-group .btn {
  position: relative;
  z-index: 2;
  height: auto;}

.logo{
    width: 100px;
    height: 100px;
}




</style>


<div class=\"background\">
<img src=\"/images/banner.jpg\" alt=\"\">
  <!-- Contenu principal -->
  <div class=\"content\">
      
      <p id=\"signInButton\" class=\"btn btn-danger text-light mx-2\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal\">Sign in</p>
      <p id=\"signUpButton\" class=\"btn btn-danger text-light\" data-bs-toggle=\"modal\" data-bs-target=\"#Modal\">Sign up</p>

      <!-- Sign In Modal -->
      <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog modal-dialog-centered\">
              <div class=\"modal-content\">
                  <div class=\"modal-header\">
                      <h5 class=\"modal-title\" id=\"exampleModalLabel\">Login</h5>
                      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                  </div>
                  <div class=\"modal-body\">
                      
                  </div>
              </div>
          </div>
      </div>

      <!-- Sign Up Modal -->
      <div class=\"modal fade\" id=\"Modal\" tabindex=\"-1\" aria-labelledby=\"ModalLabel\" aria-hidden=\"true\">
          <div class=\"modal-dialog modal-dialog-centered\">
              <div class=\"modal-content\">
                  <div class=\"modal-header\">
                      <h5 class=\"modal-title\" id=\"ModalLabel\">Register</h5>
                      <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                  </div>
                  <div class=\"modal-body\">
                      
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "first/index.html.twig";
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
        return array (  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "first/index.html.twig", "/home/anas/Desktop/symfony_pi_dev/templates/first/index.html.twig");
    }
}
