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

/* admin/listPsychiatre.html.twig */
class __TwigTemplate_65b8fc1f8dc44d5a27c1e39492b1248c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listPsychiatre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/listPsychiatre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/listPsychiatre.html.twig", 1);
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
<!-- Mirrored from themes.potenzaglobalsolutions.com/html/mentor-bootstrap-4-admin-dashboard-template/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Jan 2023 12:27:52 GMT -->
    <!-- begin app -->
    <div class=\"app\">
        <!-- begin app-wrap -->
        <div class=\"app-wrap\">
            <!-- begin pre-loader -->
            <div class=\"loader\">
                <div class=\"h-100 d-flex justify-content-center\">
                    <div class=\"align-self-center\">
                        <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/loader/loader.svg"), "html", null, true);
        yield "\" alt=\"loader\">
                    </div>
                </div>
            </div>
            <!-- end pre-loader -->
            <!-- begin app-header -->
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
                                <div class=\"d-block d-sm-flex flex-nowrap align-items-center\">
                                    <div class=\"page-title mb-2 mb-sm-0\">
                                        <h1>List des Psychiatres</h1>
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
                                                <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">List des Psychiatres</li>
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
                                            <table  id=\"datatable\" class=\"display compact table table-striped table-bordered\">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>N° tel</th>
                                                        <th>numLicence</th>
                                                        <th>Specialite</th>
                                                        <th>Adresse</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["psychiatres"]) || array_key_exists("psychiatres", $context) ? $context["psychiatres"] : (function () { throw new RuntimeError('Variable "psychiatres" does not exist.', 76, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["psychiatre"]) {
            // line 77
            yield "                                                    <tr>
                                                        <td>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["psychiatre"], "lastName", [], "any", false, false, false, 78), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["psychiatre"], "firstName", [], "any", false, false, false, 78), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["psychiatre"], "email", [], "any", false, false, false, 79), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["psychiatre"], "phone", [], "any", false, false, false, 80), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["psychiatre"], "numLicence", [], "any", false, false, false, 81), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["psychiatre"], "specialite", [], "any", false, false, false, 82), "html", null, true);
            yield "</td>
                                                        <td>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["psychiatre"], "adresse", [], "any", false, false, false, 83), "html", null, true);
            yield "</td>
                                                        <td>
                                                            <button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#defaultModal\">Supprimer</button>
                                                            <div class=\"modal fade\" id=\"defaultModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"defaultModal\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\">Waring</h5>
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                            <span aria-hidden=\"true\">&times;</span>
                                                            </button>
                                                             </div>
                                                            <div class=\"modal-body\">
                                                             Are you sure you want to delete ";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["psychiatre"], "firstName", [], "any", false, false, false, 96), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["psychiatre"], "lastName", [], "any", false, false, false, 96), "html", null, true);
            yield " ?
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                                                            <form method=\"post\" action=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("psychiatre_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["psychiatre"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            yield "\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["psychiatre"], "id", [], "any", false, false, false, 101))), "html", null, true);
            yield "\">
                                                             <button class=\"btn btn-danger\">Supprimer</button>
                                                            </form>
                                                            </div>
                                                           </div>
                                                           </div>
                                                            </div>
                                                        </td></tr>
                                                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['psychiatre'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        yield "                                                        </tbody></table>
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
            <!-- begin footer -->
            <!-- end footer -->
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
        return "admin/listPsychiatre.html.twig";
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
        return array (  248 => 110,  233 => 101,  229 => 100,  220 => 96,  204 => 83,  200 => 82,  196 => 81,  192 => 80,  188 => 79,  182 => 78,  179 => 77,  175 => 76,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin{% endblock %}

{% block body %}

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/mentor-bootstrap-4-admin-dashboard-template/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 Jan 2023 12:27:52 GMT -->
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
            <!-- begin app-header -->
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
                                <div class=\"d-block d-sm-flex flex-nowrap align-items-center\">
                                    <div class=\"page-title mb-2 mb-sm-0\">
                                        <h1>List des Psychiatres</h1>
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
                                                <li class=\"breadcrumb-item active text-primary\" aria-current=\"page\">List des Psychiatres</li>
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
                                            <table  id=\"datatable\" class=\"display compact table table-striped table-bordered\">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>N° tel</th>
                                                        <th>numLicence</th>
                                                        <th>Specialite</th>
                                                        <th>Adresse</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                {% for psychiatre in psychiatres %}
                                                    <tr>
                                                        <td>{{ psychiatre.lastName }} {{ psychiatre.firstName }}</td>
                                                        <td>{{ psychiatre.email }}</td>
                                                        <td>{{ psychiatre.phone }}</td>
                                                        <td>{{ psychiatre.numLicence }}</td>
                                                        <td>{{ psychiatre.specialite }}</td>
                                                        <td>{{ psychiatre.adresse }}</td>
                                                        <td>
                                                            <button class=\"btn btn-danger\" data-toggle=\"modal\" data-target=\"#defaultModal\">Supprimer</button>
                                                            <div class=\"modal fade\" id=\"defaultModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"defaultModal\" aria-hidden=\"true\">
                                                            <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\">Waring</h5>
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                            <span aria-hidden=\"true\">&times;</span>
                                                            </button>
                                                             </div>
                                                            <div class=\"modal-body\">
                                                             Are you sure you want to delete {{ psychiatre.firstName }} {{ psychiatre.lastName }} ?
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Close</button>
                                                            <form method=\"post\" action=\"{{ path('psychiatre_delete', {'id': psychiatre.id}) }}\">
                                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ psychiatre.id) }}\">
                                                             <button class=\"btn btn-danger\">Supprimer</button>
                                                            </form>
                                                            </div>
                                                           </div>
                                                           </div>
                                                            </div>
                                                        </td></tr>
                                                         {% endfor %}
                                                        </tbody></table>
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
            <!-- begin footer -->
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->
{% endblock %}
", "admin/listPsychiatre.html.twig", "C:\\Users\\OUSSAMA BEN GAMRA\\OneDrive\\Desktop\\symfony\\symfony_pi_dev\\templates\\admin\\listPsychiatre.html.twig");
    }
}
