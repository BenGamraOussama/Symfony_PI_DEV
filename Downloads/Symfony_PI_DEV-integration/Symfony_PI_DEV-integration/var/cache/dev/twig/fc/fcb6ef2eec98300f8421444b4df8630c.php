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

/* consultation/index.html.twig */
class __TwigTemplate_f848a8cd754d90b261e947fc9fe289b4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "consultation/index.html.twig", 1);
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

        yield "List Consultations";
        
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
<style>
.card {
    border-radius: 10px;
}
</style>

<div class=\"app\">
    <div class=\"app-wrap\">
        <!-- Contenu de l'application -->
        <div class=\"app-container\">
            <div class=\"app-main\" id=\"main\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"card container shadow\">
                            <h5 class=\"card-header\">List Consultations</h5>
                            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#defaultModal\">
                                <b><i class=\"bx bx-add-to-queue me-1\"></i> Add Consultation</b>
                            </button>

                            <!-- Tableau des consultations -->
                            <div class=\"table-responsive text-nowrap\">
                                <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Heure</th>
                                            <th>Prix</th>
                                            <th>Mode de Consultation</th>
                                            <th>État</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class=\"table-border-bottom-0\">
                                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["consultations"]) || array_key_exists("consultations", $context) ? $context["consultations"] : (function () { throw new RuntimeError('Variable "consultations" does not exist.', 40, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["consultation"]) {
            // line 41
            yield "                                            <tr>
                                                <td><i class=\"fab fa-angular fa-lg text-danger me-3\"></i> <strong>";
            // line 42
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "date", [], "any", false, false, false, 42)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "date", [], "any", false, false, false, 42), "Y-m-d"), "html", null, true)) : (""));
            yield "</strong></td>
                                                <td>";
            // line 43
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "heure", [], "any", false, false, false, 43)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "heure", [], "any", false, false, false, 43), "H:i:s"), "html", null, true)) : (""));
            yield "</td>
                                                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "prix", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                                                <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "modeconsultation", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                                                <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "etaenum", [], "any", false, false, false, 46), "value", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                                                <td>
                                                    <!-- Bouton d'édition -->
                                                        <a class=\"btn btn-warning btn-action\" href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\">
                                                            <i class=\"dripicons dripicons-pencil\"></i> Modifier
                                                        </a>
                                                        <!-- Bouton de suppression avec modal de confirmation -->
                                                        <button class=\"btn btn-danger btn-action\" data-toggle=\"modal\" data-target=\"#deleteModal";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "id", [], "any", false, false, false, 53), "html", null, true);
            yield "\">
                                                            <i class=\"dripicons dripicons-trash\"></i> Supprimer
                                                        </button>
                                                </td>
                                            </tr>

                                            <!-- Modal de confirmation de suppression pour chaque consultation -->
                                            <div class=\"modal fade\" id=\"verticalCenter";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "id", [], "any", false, false, false, 60), "html", null, true);
            yield "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "id", [], "any", false, false, false, 60), "html", null, true);
            yield "\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\" id=\"deleteModalLabel";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "id", [], "any", false, false, false, 64), "html", null, true);
            yield "\">Confirmation de suppression</h5>
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            Êtes-vous sûr de vouloir supprimer cette consultation ?
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                                            <form method=\"post\" action=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_consultation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\">
                                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["consultation"], "id", [], "any", false, false, false, 75))), "html", null, true);
            yield "\">
                                                                <button type=\"submit\" class=\"btn btn-danger confirm-delete\">Supprimer</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 83
            yield "                                            <tr>
                                                <td colspan=\"6\">Aucune consultation trouvée</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['consultation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour ajouter une consultation -->
<div class=\"modal fade\" id=\"defaultModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"defaultModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"defaultModalLabel\">Ajouter une Consultation</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 109
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), 'form_start', ["attr" => ["id" => "addConsultationForm", "novalidate" => "novalidate"]]);
        yield "
                <div class=\"input-group mb-3\">
                    ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "date", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "form-control form-control-lg bg-light fs-6", "placeholder" => "Date", "id" => "consultation_date"]]);
        yield "
                </div>
                <div class=\"input-group mb-3\">
                    ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "heure", [], "any", false, false, false, 114), 'widget', ["attr" => ["class" => "form-control form-control-lg bg-light fs-6", "placeholder" => "Heure", "id" => "consultation_heure"]]);
        yield "
                </div>
                <div class=\"input-group mb-3\">
                    ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "prix", [], "any", false, false, false, 117), 'widget', ["attr" => ["class" => "form-control form-control-lg bg-light fs-6", "placeholder" => "Prix", "id" => "consultation_prix"]]);
        yield "
                </div>
                <div class=\"input-group mb-3\">
                    ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "modeconsultation", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "form-control form-control-lg bg-light fs-6", "placeholder" => "Mode de Consultation", "id" => "consultation_modeconsultation"]]);
        yield "
                </div>
                <div class=\"input-group mb-3\">
                    ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "etaenum", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control form-control-lg bg-light fs-6", "placeholder" => "État", "id" => "consultation_etaenum"]]);
        yield "
                </div>
                <button class=\"btn btn-lg btn-primary w-100 fs-6\" type=\"submit\">
                    <b>Ajouter</b>
                </button>
                ";
        // line 128
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<!-- Inclure jQuery (si ce n'est pas déjà fait) -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<!-- Script pour gérer les modals -->
<script>
    \$(document).ready(function() {
        // Validation du formulaire d'ajout de consultation
        \$('#addConsultationForm').on('submit', function(event) {
            var isValid = true;

            // Clear previous error messages
            \$('.error-message').remove();

            // Validate Date field
            var date = \$('#consultation_date').val();
            if (!date) {
                \$('#consultation_date').after('<div class=\"text-danger error-message\">La date ne peut pas être vide.</div>');
                isValid = false;
            }

            // Validate Heure field
            var heure = \$('#consultation_heure').val();
            if (!heure) {
                \$('#consultation_heure').after('<div class=\"text-danger error-message\">L\\'heure ne peut pas être vide.</div>');
                isValid = false;
            }

            // Validate Prix field
            var prix = \$('#consultation_prix').val();
            if (!prix || isNaN(prix) || prix <= 0) {
                \$('#consultation_prix').after('<div class=\"text-danger error-message\">Le prix doit être un nombre positif.</div>');
                isValid = false;
            }

            // Validate Mode de Consultation field
            var modeconsultation = \$('#consultation_modeconsultation').val();
            if (!modeconsultation) {
                \$('#consultation_modeconsultation').after('<div class=\"text-danger error-message\">Le mode de consultation ne peut pas être vide.</div>');
                isValid = false;
            }

            // Validate État field
            var etaenum = \$('#consultation_etaenum').val();
            if (!etaenum) {
                \$('#consultation_etaenum').after('<div class=\"text-danger error-message\">L\\'état ne peut pas être vide.</div>');
                isValid = false;
            }

            // Prevent form submission if any field is invalid
            if (!isValid) {
                event.preventDefault();
            }
        });
    });
</script>

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
        return "consultation/index.html.twig";
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
        return array (  292 => 128,  284 => 123,  278 => 120,  272 => 117,  266 => 114,  260 => 111,  255 => 109,  231 => 87,  222 => 83,  209 => 75,  205 => 74,  192 => 64,  183 => 60,  173 => 53,  166 => 49,  160 => 46,  156 => 45,  152 => 44,  148 => 43,  144 => 42,  141 => 41,  136 => 40,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}List Consultations{% endblock %}

{% block body %}

<style>
.card {
    border-radius: 10px;
}
</style>

<div class=\"app\">
    <div class=\"app-wrap\">
        <!-- Contenu de l'application -->
        <div class=\"app-container\">
            <div class=\"app-main\" id=\"main\">
                <div class=\"container-fluid\">
                    <div class=\"row\">
                        <div class=\"card container shadow\">
                            <h5 class=\"card-header\">List Consultations</h5>
                            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#defaultModal\">
                                <b><i class=\"bx bx-add-to-queue me-1\"></i> Add Consultation</b>
                            </button>

                            <!-- Tableau des consultations -->
                            <div class=\"table-responsive text-nowrap\">
                                <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Heure</th>
                                            <th>Prix</th>
                                            <th>Mode de Consultation</th>
                                            <th>État</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class=\"table-border-bottom-0\">
                                        {% for consultation in consultations %}
                                            <tr>
                                                <td><i class=\"fab fa-angular fa-lg text-danger me-3\"></i> <strong>{{ consultation.date ? consultation.date|date('Y-m-d') : '' }}</strong></td>
                                                <td>{{ consultation.heure ? consultation.heure|date('H:i:s') : '' }}</td>
                                                <td>{{ consultation.prix }}</td>
                                                <td>{{ consultation.modeconsultation }}</td>
                                                <td>{{ consultation.etaenum.value }}</td>
                                                <td>
                                                    <!-- Bouton d'édition -->
                                                        <a class=\"btn btn-warning btn-action\" href=\"{{ path('app_consultation_edit', {'id': consultation.id}) }}\">
                                                            <i class=\"dripicons dripicons-pencil\"></i> Modifier
                                                        </a>
                                                        <!-- Bouton de suppression avec modal de confirmation -->
                                                        <button class=\"btn btn-danger btn-action\" data-toggle=\"modal\" data-target=\"#deleteModal{{ consultation.id }}\">
                                                            <i class=\"dripicons dripicons-trash\"></i> Supprimer
                                                        </button>
                                                </td>
                                            </tr>

                                            <!-- Modal de confirmation de suppression pour chaque consultation -->
                                            <div class=\"modal fade\" id=\"verticalCenter{{ consultation.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel{{ consultation.id }}\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\" id=\"deleteModalLabel{{ consultation.id }}\">Confirmation de suppression</h5>
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            Êtes-vous sûr de vouloir supprimer cette consultation ?
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                                            <form method=\"post\" action=\"{{ path('app_consultation_delete', {'id': consultation.id}) }}\">
                                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ consultation.id) }}\">
                                                                <button type=\"submit\" class=\"btn btn-danger confirm-delete\">Supprimer</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% else %}
                                            <tr>
                                                <td colspan=\"6\">Aucune consultation trouvée</td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal pour ajouter une consultation -->
<div class=\"modal fade\" id=\"defaultModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"defaultModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"defaultModalLabel\">Ajouter une Consultation</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                {{ form_start(form, {'attr': {'id': 'addConsultationForm', 'novalidate': 'novalidate'}}) }}
                <div class=\"input-group mb-3\">
                    {{ form_widget(form.date, { 'attr': {'class': 'form-control form-control-lg bg-light fs-6', 'placeholder': 'Date', 'id': 'consultation_date'} }) }}
                </div>
                <div class=\"input-group mb-3\">
                    {{ form_widget(form.heure, { 'attr': {'class': 'form-control form-control-lg bg-light fs-6', 'placeholder': 'Heure', 'id': 'consultation_heure'} }) }}
                </div>
                <div class=\"input-group mb-3\">
                    {{ form_widget(form.prix, { 'attr': {'class': 'form-control form-control-lg bg-light fs-6', 'placeholder': 'Prix', 'id': 'consultation_prix'} }) }}
                </div>
                <div class=\"input-group mb-3\">
                    {{ form_widget(form.modeconsultation, { 'attr': {'class': 'form-control form-control-lg bg-light fs-6', 'placeholder': 'Mode de Consultation', 'id': 'consultation_modeconsultation'} }) }}
                </div>
                <div class=\"input-group mb-3\">
                    {{ form_widget(form.etaenum, { 'attr': {'class': 'form-control form-control-lg bg-light fs-6', 'placeholder': 'État', 'id': 'consultation_etaenum'} }) }}
                </div>
                <button class=\"btn btn-lg btn-primary w-100 fs-6\" type=\"submit\">
                    <b>Ajouter</b>
                </button>
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>

<!-- Inclure jQuery (si ce n'est pas déjà fait) -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<!-- Script pour gérer les modals -->
<script>
    \$(document).ready(function() {
        // Validation du formulaire d'ajout de consultation
        \$('#addConsultationForm').on('submit', function(event) {
            var isValid = true;

            // Clear previous error messages
            \$('.error-message').remove();

            // Validate Date field
            var date = \$('#consultation_date').val();
            if (!date) {
                \$('#consultation_date').after('<div class=\"text-danger error-message\">La date ne peut pas être vide.</div>');
                isValid = false;
            }

            // Validate Heure field
            var heure = \$('#consultation_heure').val();
            if (!heure) {
                \$('#consultation_heure').after('<div class=\"text-danger error-message\">L\\'heure ne peut pas être vide.</div>');
                isValid = false;
            }

            // Validate Prix field
            var prix = \$('#consultation_prix').val();
            if (!prix || isNaN(prix) || prix <= 0) {
                \$('#consultation_prix').after('<div class=\"text-danger error-message\">Le prix doit être un nombre positif.</div>');
                isValid = false;
            }

            // Validate Mode de Consultation field
            var modeconsultation = \$('#consultation_modeconsultation').val();
            if (!modeconsultation) {
                \$('#consultation_modeconsultation').after('<div class=\"text-danger error-message\">Le mode de consultation ne peut pas être vide.</div>');
                isValid = false;
            }

            // Validate État field
            var etaenum = \$('#consultation_etaenum').val();
            if (!etaenum) {
                \$('#consultation_etaenum').after('<div class=\"text-danger error-message\">L\\'état ne peut pas être vide.</div>');
                isValid = false;
            }

            // Prevent form submission if any field is invalid
            if (!isValid) {
                event.preventDefault();
            }
        });
    });
</script>

{% endblock %}", "consultation/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\consultation\\index.html.twig");
    }
}
