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
class __TwigTemplate_370b15e8d381998339d878ceb192eaa6 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Register";
        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 8
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
                    <h1 id=\"logo\"><b>Register</b></h1>
                </div>

                <!-- Affichage des erreurs de formulaire -->
                ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["registrationForm"] ?? null), 'errors');
        yield "

                <form method=\"post\">
                    ";
        // line 91
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_start');
        yield "

                    <div class=\"input-group mb-3\">
                        ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "firstName", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Prenom"]]);
        yield "
                    </div>

                    <div class=\"input-group mb-3\">
                        ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "lastName", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Nom"]]);
        yield "
                    </div>    

                    <div class=\"input-group mb-3\">
                        ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Email"]]);
        yield "
                    </div>

                    <div class=\"input-group mb-3\">
                        ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Mot de passe"]]);
        yield "
                    </div>

                    <div class=\"form-check mb-3\">
                        ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-check-input", "type" => "radio"]]);
        yield "
                        <label class=\"form-check-label ms-2\">";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", false, false, false, 111), 'label');
        yield "</label>
                    </div>

                    <button type=\"submit\" class=\"btn btn-lg btn-success w-100 fs-6\">Register</button>

                    ";
        // line 116
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["registrationForm"] ?? null), 'form_end');
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
        return array (  204 => 116,  196 => 111,  192 => 110,  185 => 106,  178 => 102,  171 => 98,  164 => 94,  158 => 91,  152 => 88,  70 => 8,  63 => 7,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "registration/register.html.twig", "/home/anas/Desktop/symfony_pi_dev/templates/registration/register.html.twig");
    }
}
