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

/* patient/index.html.twig */
class __TwigTemplate_910ea63295d21ab531c6a9444984e77f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "patient/index.html.twig", 1);
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

        yield "Admin";
        
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
        yield "
    <!-- begin app -->
    <div class=\"app\">
        <!-- begin app-wrap -->
        <div class=\"app-wrap\">
            <!-- begin pre-loader -->
            <div class=\"loader\">
                <div class=\"h-100 d-flex justify-content-center\">
                    <div class=\"align-self-center\">
                        <img src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loader/loader.svg"), "html", null, true);
        yield "\" alt=\"loader\">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-container -->
            <div class=\"app-container\">
                <!-- begin app-main -->
                <div class=\"app-main\" id=\"main\">
                    <!-- begin container-fluid -->
                    <div class=\"container-fluid\">
                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"col-md-12 m-b-30\">
                                <!-- begin page title -->
                                <div class=\"d-block d-sm-flex flex-nowrap align-items-center\">
                                    <div class=\"page-title mb-2 mb-sm-0\">
                                        <h1>Liste des Psychiatres</h1>
                                    </div>
                                    <div class=\"ml-auto d-flex align-items-center\">
                                        <nav>
                                            <ol class=\"breadcrumb p-0 m-b-0\">
                                                <li class=\"breadcrumb-item\">
                                                    <a href=\"index.html\"><i class=\"ti ti-home\"></i></a>
                                                </li>
                                                <li class=\"breadcrumb-item\">
                                                    Tables
                                                </li>
                                                <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">Liste des Psychiatres</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"card card-statistics\">
                                    <div class=\"card-body\">
                                        <div class=\"datatable-wrapper table-responsive\">
                                            ";
        // line 59
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FOURNISSEUR"))) {
            // line 60
            yield "                                                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_new");
            yield "\" class=\"btn btn-primary mb-3\">Ajouter un produit</a>
                                            ";
        }
        // line 62
        yield "                                            <table id=\"datatable\" class=\"display compact table table-striped table-bordered\">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Email</th>
                                                    <th>Nom</th>
                                                    <th>Prénom</th>
                                                    <th>Spécialité</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["patient"]) {
            // line 75
            yield "                                                    <tr>
                                                        <td>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["patient"], "email", [], "any", false, false, false, 77), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["patient"], "lastName", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["patient"], "firstName", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["patient"], "dossierMedical", [], "any", false, false, false, 80), "html", null, true);
            yield "</td>
                                                        <td>
                                                            <form method=\"post\" action=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["patient"], "id", [], "any", false, false, false, 83))), "html", null, true);
            yield "\">
                                                                <button class=\"btn btn-danger\">Bloquer</button>
                                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['patient'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "                                                </tbody>
                                            </table>
                                            <pagination-controls style=\"text-align: right;\" (pageChange)=\"p = \$event\"></pagination-controls>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

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
        return "patient/index.html.twig";
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
        return array (  225 => 90,  212 => 83,  208 => 82,  203 => 80,  199 => 79,  195 => 78,  191 => 77,  187 => 76,  184 => 75,  180 => 74,  166 => 62,  160 => 60,  158 => 59,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin{% endblock %}

{% block body %}

    <!-- begin app -->
    <div class=\"app\">
        <!-- begin app-wrap -->
        <div class=\"app-wrap\">
            <!-- begin pre-loader -->
            <div class=\"loader\">
                <div class=\"h-100 d-flex justify-content-center\">
                    <div class=\"align-self-center\">
                        <img src=\"{{ asset('assets/img/loader/loader.svg')}}\" alt=\"loader\">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-container -->
            <div class=\"app-container\">
                <!-- begin app-main -->
                <div class=\"app-main\" id=\"main\">
                    <!-- begin container-fluid -->
                    <div class=\"container-fluid\">
                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"col-md-12 m-b-30\">
                                <!-- begin page title -->
                                <div class=\"d-block d-sm-flex flex-nowrap align-items-center\">
                                    <div class=\"page-title mb-2 mb-sm-0\">
                                        <h1>Liste des Psychiatres</h1>
                                    </div>
                                    <div class=\"ml-auto d-flex align-items-center\">
                                        <nav>
                                            <ol class=\"breadcrumb p-0 m-b-0\">
                                                <li class=\"breadcrumb-item\">
                                                    <a href=\"index.html\"><i class=\"ti ti-home\"></i></a>
                                                </li>
                                                <li class=\"breadcrumb-item\">
                                                    Tables
                                                </li>
                                                <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">Liste des Psychiatres</li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- begin row -->
                        <div class=\"row\">
                            <div class=\"col-lg-12\">
                                <div class=\"card card-statistics\">
                                    <div class=\"card-body\">
                                        <div class=\"datatable-wrapper table-responsive\">
                                            {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_FOURNISSEUR') %}
                                                <a href=\"{{ path('produit_new') }}\" class=\"btn btn-primary mb-3\">Ajouter un produit</a>
                                            {% endif %}
                                            <table id=\"datatable\" class=\"display compact table table-striped table-bordered\">
                                                <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Email</th>
                                                    <th>Nom</th>
                                                    <th>Prénom</th>
                                                    <th>Spécialité</th>
                                                    <th>Actions</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                {% for patient in patients %}
                                                    <tr>
                                                        <td>{{ patient.id }}</td>
                                                        <td>{{ patient.email }}</td>
                                                        <td>{{ patient.lastName }}</td>
                                                        <td>{{ patient.firstName }}</td>
                                                        <td>{{ patient.dossierMedical }}</td>
                                                        <td>
                                                            <form method=\"post\" action=\"{{ path('patient_delete', {'id': patient.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\">
                                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ patient.id) }}\">
                                                                <button class=\"btn btn-danger\">Bloquer</button>
                                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                {% endfor %}
                                                </tbody>
                                            </table>
                                            <pagination-controls style=\"text-align: right;\" (pageChange)=\"p = \$event\"></pagination-controls>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

{% endblock %}
", "patient/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\patient\\index.html.twig");
    }
}
