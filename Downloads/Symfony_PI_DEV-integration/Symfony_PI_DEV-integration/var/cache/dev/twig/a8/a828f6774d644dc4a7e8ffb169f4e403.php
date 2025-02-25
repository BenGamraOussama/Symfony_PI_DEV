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

/* ligne_commande/index.html.twig */
class __TwigTemplate_04f898e902f6d48af6323005abd2d01d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ligne_commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ligne_commande/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ligne_commande/index.html.twig", 1);
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

        yield "LigneCommande index";
        
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
        yield "   <!-- begin app -->
    <div class=\"app\">
        <!-- begin app-wrap -->
        <div class=\"app-wrap\">
            <!-- begin pre-loader -->
            <div class=\"loader\">
                <div class=\"h-100 d-flex justify-content-center\">
                    <div class=\"align-self-center\">
                        <img src=\"img/loader/loader.svg\" alt=\"loader\">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
            <header></header>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class=\"app-container\">
                <!-- begin app-nabar -->
               
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class=\"app-main\" id=\"main\">
                    <!-- begin container-fluid -->
                    <div class=\"container-fluid\">
                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"col-md-12 m-b-30\">
                                <!-- begin page title -->
                                
                                <div class=\"d-block d-lg-flex flex-nowrap align-items-center\">
                                    <div class=\"page-title mr-4 pr-4 border-right\">
                                        <h1>Activite</h1>
                                    </div>
                                    <div class=\"breadcrumb-bar align-items-center\">
                                        <nav>
                                            <ol class=\"breadcrumb p-0 m-b-0\">
                                                <li class=\"breadcrumb-item\">
                                                    <a href=\"index.html\"><i class=\"ti ti-home\"></i></a>
                                                </li>
                                                <li class=\"breadcrumb-item\">
                                                    Activite
                                                </li>
                                                <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">Default</li>
                                            </ol>
                                        </nav>
                                    </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- Notification -->
                        
                        <!-- end row -->
                        <!-- begin row -->
                        <div class=\"row\">
                          
                            <div class=\"container-fluid py-0\">
                                <div class=\"row\">
                                    
                                    <div class=\"col-md-10 main-content\"><br>
                                                    <br><br>
                                        <div class=\"card shadow\" >
                                           
                        
                                            <div class=\"card-body\">
                                                <div class=\"table-responsive\">
    <h1>LigneCommande index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Quantite</th>
                <th>Prix_unitaire</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ligne_commandes"]) || array_key_exists("ligne_commandes", $context) ? $context["ligne_commandes"] : (function () { throw new RuntimeError('Variable "ligne_commandes" does not exist.', 84, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ligne_commande"]) {
            // line 85
            yield "            <tr>
                <td>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne_commande"], "id", [], "any", false, false, false, 86), "html", null, true);
            yield "</td>
                <td>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne_commande"], "quantite", [], "any", false, false, false, 87), "html", null, true);
            yield "</td>
                <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ligne_commande"], "prixUnitaire", [], "any", false, false, false, 88), "html", null, true);
            yield "</td>
                <td>
                    <a href=\"";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ligne_commande_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ligne_commande"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            yield "\">show</a>
                    <a href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ligne_commande_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["ligne_commande"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            yield "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 95
            yield "            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ligne_commande'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "        </tbody>
    </table>

    <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ligne_commande_new");
        yield "\">Create new</a>
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
        return "ligne_commande/index.html.twig";
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
        return array (  228 => 102,  223 => 99,  214 => 95,  205 => 91,  201 => 90,  196 => 88,  192 => 87,  188 => 86,  185 => 85,  180 => 84,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LigneCommande index{% endblock %}

{% block body %}
   <!-- begin app -->
    <div class=\"app\">
        <!-- begin app-wrap -->
        <div class=\"app-wrap\">
            <!-- begin pre-loader -->
            <div class=\"loader\">
                <div class=\"h-100 d-flex justify-content-center\">
                    <div class=\"align-self-center\">
                        <img src=\"img/loader/loader.svg\" alt=\"loader\">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
            <header></header>
            <!-- end app-header -->
            <!-- begin app-container -->
            <div class=\"app-container\">
                <!-- begin app-nabar -->
               
                <!-- end app-navbar -->
                <!-- begin app-main -->
                <div class=\"app-main\" id=\"main\">
                    <!-- begin container-fluid -->
                    <div class=\"container-fluid\">
                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"col-md-12 m-b-30\">
                                <!-- begin page title -->
                                
                                <div class=\"d-block d-lg-flex flex-nowrap align-items-center\">
                                    <div class=\"page-title mr-4 pr-4 border-right\">
                                        <h1>Activite</h1>
                                    </div>
                                    <div class=\"breadcrumb-bar align-items-center\">
                                        <nav>
                                            <ol class=\"breadcrumb p-0 m-b-0\">
                                                <li class=\"breadcrumb-item\">
                                                    <a href=\"index.html\"><i class=\"ti ti-home\"></i></a>
                                                </li>
                                                <li class=\"breadcrumb-item\">
                                                    Activite
                                                </li>
                                                <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">Default</li>
                                            </ol>
                                        </nav>
                                    </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- Notification -->
                        
                        <!-- end row -->
                        <!-- begin row -->
                        <div class=\"row\">
                          
                            <div class=\"container-fluid py-0\">
                                <div class=\"row\">
                                    
                                    <div class=\"col-md-10 main-content\"><br>
                                                    <br><br>
                                        <div class=\"card shadow\" >
                                           
                        
                                            <div class=\"card-body\">
                                                <div class=\"table-responsive\">
    <h1>LigneCommande index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Quantite</th>
                <th>Prix_unitaire</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for ligne_commande in ligne_commandes %}
            <tr>
                <td>{{ ligne_commande.id }}</td>
                <td>{{ ligne_commande.quantite }}</td>
                <td>{{ ligne_commande.prixUnitaire }}</td>
                <td>
                    <a href=\"{{ path('app_ligne_commande_show', {'id': ligne_commande.id}) }}\">show</a>
                    <a href=\"{{ path('app_ligne_commande_edit', {'id': ligne_commande.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"4\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <a href=\"{{ path('app_ligne_commande_new') }}\">Create new</a>
{% endblock %}
", "ligne_commande/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\ligne_commande\\index.html.twig");
    }
}
