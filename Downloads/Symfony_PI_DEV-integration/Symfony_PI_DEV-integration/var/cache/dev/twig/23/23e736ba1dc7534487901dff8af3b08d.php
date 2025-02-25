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

/* rendez_vous/index.html.twig */
class __TwigTemplate_61665df0edba3316acdf5f9be2854db9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rendez_vous/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "rendez_vous/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "rendez_vous/index.html.twig", 1);
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

        yield "RDV index";
        
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
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.btn-action {
    margin: 2px;
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
                            <h5 class=\"card-header\">List RDVs</h5>
                            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addRdvModal\">
                                <b><i class=\"bx bx-add-to-queue me-1\"></i> Add RDV</b>
                            </button>

                            <!-- Tableau des RDVs -->
                            <div class=\"table-responsive text-nowrap\">
                                <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Heure</th>
                                            <th>Priorité</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class=\"table-border-bottom-0\">
                                        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rdvs"]) || array_key_exists("rdvs", $context) ? $context["rdvs"] : (function () { throw new RuntimeError('Variable "rdvs" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["rdv"]) {
            // line 43
            yield "                                            <tr>
                                                <td><i class=\"fab fa-angular fa-lg text-danger me-3\"></i> <strong>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 44), "html", null, true);
            yield "</strong></td>
                                                <td>";
            // line 45
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "heure", [], "any", false, false, false, 45)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "heure", [], "any", false, false, false, 45), "H:i:s"), "html", null, true)) : (""));
            yield "</td>
                                                <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "priorite", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                                                <td>
                                                    <!-- Bouton d'édition -->
                                                    <a class=\"btn btn-warning btn-action\" href=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rdv_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 49)]), "html", null, true);
            yield "\">
                                                        <i class=\"dripicons dripicons-pencil\"></i> Modifier
                                                    </a>
                                                    <!-- Bouton de suppression avec modal de confirmation -->
                                                    <button class=\"btn btn-danger btn-action\" data-toggle=\"modal\" data-target=\"#deleteModal";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 53), "html", null, true);
            yield "\">
                                                        <i class=\"dripicons dripicons-trash\"></i> Supprimer
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Modal de confirmation de suppression pour chaque RDV -->
                                            <div class=\"modal fade\" id=\"deleteModal";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 60), "html", null, true);
            yield "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 60), "html", null, true);
            yield "\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\" id=\"deleteModalLabel";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 64), "html", null, true);
            yield "\">Confirmation de suppression</h5>
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            Êtes-vous sûr de vouloir supprimer ce RDV ?
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                                            <form method=\"post\" action=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_rdv_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\">
                                                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["rdv"], "id", [], "any", false, false, false, 75))), "html", null, true);
            yield "\">
                                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
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
                                                <td colspan=\"4\">Aucun RDV trouvé</td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rdv'], $context['_parent'], $context['_iterated']);
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



<!-- Inclure jQuery (si ce n'est pas déjà fait) -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<!-- Script pour gérer les modals -->
<script>
    \$(document).ready(function() {
        // Ouvrir la modal d'ajout ou de confirmation lorsque le bouton est cliqué
        \$('[data-toggle=\"modal\"]').on('click', function() {
            var target = \$(this).data('target'); // Récupère l'ID de la modal
            \$(target).modal('show'); // Ouvre la modal
        });

        // Fermer la modal lorsque le bouton \"Close\" est cliqué
        \$('[data-dismiss=\"modal\"]').on('click', function() {
            \$(this).closest('.modal').modal('hide'); // Ferme la modal
        });

        // Fermer la modal lorsque l'utilisateur clique en dehors de la modal
        \$('.modal').on('click', function(event) {
            if (\$(event.target).hasClass('modal')) {
                \$(this).modal('hide'); // Ferme la modal
            }
        });

        // Soumettre le formulaire de suppression lorsque l'utilisateur confirme
        \$('.confirm-delete').on('click', function() {
            var form = \$(this).closest('.modal').find('form'); // Récupère le formulaire associé
            form.submit(); // Soumet le formulaire
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
        return "rendez_vous/index.html.twig";
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
        return array (  225 => 87,  216 => 83,  203 => 75,  199 => 74,  186 => 64,  177 => 60,  167 => 53,  160 => 49,  154 => 46,  150 => 45,  146 => 44,  143 => 43,  138 => 42,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}RDV index{% endblock %}

{% block body %}

<style>
.card {
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.btn-action {
    margin: 2px;
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
                            <h5 class=\"card-header\">List RDVs</h5>
                            <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addRdvModal\">
                                <b><i class=\"bx bx-add-to-queue me-1\"></i> Add RDV</b>
                            </button>

                            <!-- Tableau des RDVs -->
                            <div class=\"table-responsive text-nowrap\">
                                <table class=\"table table-striped\">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Heure</th>
                                            <th>Priorité</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class=\"table-border-bottom-0\">
                                        {% for rdv in rdvs %}
                                            <tr>
                                                <td><i class=\"fab fa-angular fa-lg text-danger me-3\"></i> <strong>{{ rdv.id }}</strong></td>
                                                <td>{{ rdv.heure ? rdv.heure|date('H:i:s') : '' }}</td>
                                                <td>{{ rdv.priorite }}</td>
                                                <td>
                                                    <!-- Bouton d'édition -->
                                                    <a class=\"btn btn-warning btn-action\" href=\"{{ path('app_rdv_edit', {'id': rdv.id}) }}\">
                                                        <i class=\"dripicons dripicons-pencil\"></i> Modifier
                                                    </a>
                                                    <!-- Bouton de suppression avec modal de confirmation -->
                                                    <button class=\"btn btn-danger btn-action\" data-toggle=\"modal\" data-target=\"#deleteModal{{ rdv.id }}\">
                                                        <i class=\"dripicons dripicons-trash\"></i> Supprimer
                                                    </button>
                                                </td>
                                            </tr>

                                            <!-- Modal de confirmation de suppression pour chaque RDV -->
                                            <div class=\"modal fade\" id=\"deleteModal{{ rdv.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel{{ rdv.id }}\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\" id=\"deleteModalLabel{{ rdv.id }}\">Confirmation de suppression</h5>
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                <span aria-hidden=\"true\">×</span>
                                                            </button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            Êtes-vous sûr de vouloir supprimer ce RDV ?
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                                            <form method=\"post\" action=\"{{ path('app_rdv_delete', {'id': rdv.id}) }}\">
                                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ rdv.id) }}\">
                                                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {% else %}
                                            <tr>
                                                <td colspan=\"4\">Aucun RDV trouvé</td>
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



<!-- Inclure jQuery (si ce n'est pas déjà fait) -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>

<!-- Script pour gérer les modals -->
<script>
    \$(document).ready(function() {
        // Ouvrir la modal d'ajout ou de confirmation lorsque le bouton est cliqué
        \$('[data-toggle=\"modal\"]').on('click', function() {
            var target = \$(this).data('target'); // Récupère l'ID de la modal
            \$(target).modal('show'); // Ouvre la modal
        });

        // Fermer la modal lorsque le bouton \"Close\" est cliqué
        \$('[data-dismiss=\"modal\"]').on('click', function() {
            \$(this).closest('.modal').modal('hide'); // Ferme la modal
        });

        // Fermer la modal lorsque l'utilisateur clique en dehors de la modal
        \$('.modal').on('click', function(event) {
            if (\$(event.target).hasClass('modal')) {
                \$(this).modal('hide'); // Ferme la modal
            }
        });

        // Soumettre le formulaire de suppression lorsque l'utilisateur confirme
        \$('.confirm-delete').on('click', function() {
            var form = \$(this).closest('.modal').find('form'); // Récupère le formulaire associé
            form.submit(); // Soumet le formulaire
        });
    });
</script>

{% endblock %}", "rendez_vous/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\rendez_vous\\index.html.twig");
    }
}
