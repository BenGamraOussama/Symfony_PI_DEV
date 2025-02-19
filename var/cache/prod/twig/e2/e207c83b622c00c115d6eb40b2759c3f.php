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
class __TwigTemplate_b93e874f256854bdd72f0c61cb9577d5 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/request.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Reset your password";
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
    /*------------ Login container ------------*/
.box-area{
  width: 1332px;
  height: 595px;
}
/*------------ Right box ------------*/
.right-box{
  padding: 90px 50px 90px 50px;
}
/*------------ Custom Placeholder ------------*/
::placeholder{
  font-size: 16px;
}
.rounded-4{
  border-radius: 20px;
}
.rounded-5{
  border-radius: 30px;
}
/*------------ For small screens------------*/
@media only screen and (max-width: 768px){
   .box-area{
      margin: 0 10px;
   }
   .left-box{
      height: 100px;
      overflow: hidden;
   }
   .right-box{
      padding: 20px;
   }
}

.input-group .btn {
position: relative;
z-index: 2;
height: auto;}

#left-content{
background: #000000;
background: url('/images/logo sans back.png');
background-size: cover;
background-repeat: no-repeat;

}

#logo{
/*background: linear-gradient(to right, #014512,#00fe11,#014512); */
background: #ff8a00;
background-clip: text;
-webkit-text-fill-color: transparent;
}
a{
text-decoration: none;
}
</style>

<div class=\"container d-flex justify-content-center align-items-center min-vh-100\">
    
    <div class=\"row border rounded-5 p-3 bg-light shadow box-area\">
        
        <!-- Section gauche (peut contenir une image ou autre contenu) -->
        <div class=\"col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box\" id=\"left-content\">
            <div class=\"featured-image mb-3\">
                <!-- Insérer une image ici si nécessaire -->
            </div>
        </div> 
        
        <!-- Section droite : Formulaire d'inscription -->
        <div class=\"col-md-6 right-box\">
            <div class=\"row align-items-center\">
                
                <!-- Titre de la page -->
                <div class=\"header-text mb-4 text-center\">
                    <h1 id=\"logo\"><b>Reset Password</b></h1>
                </div>
    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "flashes", ["reset_password_error"], "method", false, false, false, 84));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 85
            yield "        <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "    
<form>
    ";
        // line 89
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestForm"] ?? null), 'form_start');
        yield "
    <div class=\"input-group mb-1\">
        ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["requestForm"] ?? null), "email", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        yield "
    </div>    
        <div class=\"mb-3\">
            <small>
                Enter your email address, and we will send you a
                link to reset your password.
            </small>
        </div>

        <button class=\"btn btn-lg btn-success w-100 fs-6\">Send password reset email</button>
    ";
        // line 101
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["requestForm"] ?? null), 'form_end');
        yield "
    </form>
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
        return array (  185 => 101,  172 => 91,  167 => 89,  163 => 87,  154 => 85,  150 => 84,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "reset_password/request.html.twig", "/home/anas/Desktop/symfony_pi_dev/templates/reset_password/request.html.twig");
    }
}
