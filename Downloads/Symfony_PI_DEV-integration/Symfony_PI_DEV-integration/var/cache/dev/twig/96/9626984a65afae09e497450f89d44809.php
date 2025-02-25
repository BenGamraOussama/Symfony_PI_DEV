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

/* traitement/index.html.twig */
class __TwigTemplate_12793999dd50304630fea8a0f9d21e2b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "traitement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "traitement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "traitement/index.html.twig", 1);
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

        yield "Traitement Index";
        
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
        yield "    <style>
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
                                <h5 class=\"card-header\">Liste des Traitements</h5>
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addTraitementModal\">
                                    <b><i class=\"bx bx-add-to-queue me-1\"></i> Ajouter un Traitement</b>
                                </button>

                                <!-- Tableau des traitements -->
                                <div class=\"table-responsive text-nowrap\">
                                    <table class=\"table table-striped\">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Type</th>
                                                <th>Médicament</th>
                                                <th>Suivi</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"table-border-bottom-0\">
                                            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["traitements"]) || array_key_exists("traitements", $context) ? $context["traitements"] : (function () { throw new RuntimeError('Variable "traitements" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["traitement"]) {
            // line 43
            yield "                                                <tr>
                                                    <td><i class=\"fab fa-angular fa-lg text-danger me-3\"></i> <strong>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["traitement"], "id", [], "any", false, false, false, 44), "html", null, true);
            yield "</strong></td>
                                                    <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["traitement"], "type", [], "any", false, false, false, 45), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["traitement"], "medicament", [], "any", false, false, false, 46), "html", null, true);
            yield "</td>
                                                    <td>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["traitement"], "suivi", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
                                                    <td>
                                                        <!-- Bouton d'édition -->
                                                        <a class=\"btn btn-warning btn-action\" href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_traitement_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["traitement"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\">
                                                            <i class=\"dripicons dripicons-pencil\"></i> Modifier
                                                        </a>
                                                        <!-- Bouton de suppression avec modal de confirmation -->
                                                        <button class=\"btn btn-danger btn-action\" data-toggle=\"modal\" data-target=\"#deleteModal";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["traitement"], "id", [], "any", false, false, false, 54), "html", null, true);
            yield "\">
                                                            <i class=\"dripicons dripicons-trash\"></i> Supprimer
                                                        </button>
                                                    </td>
                                                </tr>

                                                <!-- Modal de confirmation de suppression pour chaque traitement -->
                                                <div class=\"modal fade\" id=\"deleteModal";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["traitement"], "id", [], "any", false, false, false, 61), "html", null, true);
            yield "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["traitement"], "id", [], "any", false, false, false, 61), "html", null, true);
            yield "\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title\" id=\"deleteModalLabel";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["traitement"], "id", [], "any", false, false, false, 65), "html", null, true);
            yield "\">Confirmation de suppression</h5>
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">×</span>
                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                Êtes-vous sûr de vouloir supprimer ce traitement ?
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                                                <form method=\"post\" action=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_traitement_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["traitement"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\">
                                                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["traitement"], "id", [], "any", false, false, false, 76))), "html", null, true);
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
            // line 84
            yield "                                                <tr>
                                                    <td colspan=\"5\">Aucun traitement trouvé</td>
                                                </tr>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['traitement'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        yield "                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- Modal pour ajouter un traitement -->
<div class=\"modal fade\" id=\"addTraitementModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addTraitementModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"addTraitementModalLabel\">Ajouter un Traitement</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 110
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_start', ["attr" => ["id" => "addTraitementForm"]]);
        yield "
                <div class=\"input-group mb-3\">
                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "type", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control form-control-lg bg-light fs-6", "placeholder" => "Type", "id" => "traitement_type"]]);
        yield "
                </div>
                <div class=\"input-group mb-3\">
                    ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "medicament", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => "form-control form-control-lg bg-light fs-6", "placeholder" => "Médicament", "id" => "traitement_medicament"]]);
        yield "
                </div>
                <div class=\"input-group mb-3\">
                    ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "suivi", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control form-control-lg bg-light fs-6", "placeholder" => "Suivi", "id" => "traitement_suivi"]]);
        yield "
                </div>
                <button class=\"btn btn-lg btn-primary w-100 fs-6\" type=\"submit\">
                    <b>Ajouter</b>
                </button>
                ";
        // line 123
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), 'form_end');
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

        // Validation du formulaire d'ajout de traitement
        \$('#addTraitementModal form').on('submit', function(event) {
            var type = \$('#traitement_type').val();
            var medicament = \$('#traitement_medicament').val();
            var suivi = \$('#traitement_suivi').val();

            if (!type || !medicament || !suivi) {
                alert('Tous les champs sont obligatoires.');
                event.preventDefault(); // Empêche la soumission du formulaire
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
        return "traitement/index.html.twig";
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
        return array (  278 => 123,  270 => 118,  264 => 115,  258 => 112,  253 => 110,  229 => 88,  220 => 84,  207 => 76,  203 => 75,  190 => 65,  181 => 61,  171 => 54,  164 => 50,  158 => 47,  154 => 46,  150 => 45,  146 => 44,  143 => 43,  138 => 42,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Traitement Index{% endblock %}

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
                                <h5 class=\"card-header\">Liste des Traitements</h5>
                                <button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#addTraitementModal\">
                                    <b><i class=\"bx bx-add-to-queue me-1\"></i> Ajouter un Traitement</b>
                                </button>

                                <!-- Tableau des traitements -->
                                <div class=\"table-responsive text-nowrap\">
                                    <table class=\"table table-striped\">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Type</th>
                                                <th>Médicament</th>
                                                <th>Suivi</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class=\"table-border-bottom-0\">
                                            {% for traitement in traitements %}
                                                <tr>
                                                    <td><i class=\"fab fa-angular fa-lg text-danger me-3\"></i> <strong>{{ traitement.id }}</strong></td>
                                                    <td>{{ traitement.type }}</td>
                                                    <td>{{ traitement.medicament }}</td>
                                                    <td>{{ traitement.suivi }}</td>
                                                    <td>
                                                        <!-- Bouton d'édition -->
                                                        <a class=\"btn btn-warning btn-action\" href=\"{{ path('app_traitement_edit', {'id': traitement.id}) }}\">
                                                            <i class=\"dripicons dripicons-pencil\"></i> Modifier
                                                        </a>
                                                        <!-- Bouton de suppression avec modal de confirmation -->
                                                        <button class=\"btn btn-danger btn-action\" data-toggle=\"modal\" data-target=\"#deleteModal{{ traitement.id }}\">
                                                            <i class=\"dripicons dripicons-trash\"></i> Supprimer
                                                        </button>
                                                    </td>
                                                </tr>

                                                <!-- Modal de confirmation de suppression pour chaque traitement -->
                                                <div class=\"modal fade\" id=\"deleteModal{{ traitement.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"deleteModalLabel{{ traitement.id }}\" aria-hidden=\"true\">
                                                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                                        <div class=\"modal-content\">
                                                            <div class=\"modal-header\">
                                                                <h5 class=\"modal-title\" id=\"deleteModalLabel{{ traitement.id }}\">Confirmation de suppression</h5>
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                    <span aria-hidden=\"true\">×</span>
                                                                </button>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                Êtes-vous sûr de vouloir supprimer ce traitement ?
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Annuler</button>
                                                                <form method=\"post\" action=\"{{ path('app_traitement_delete', {'id': traitement.id}) }}\">
                                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ traitement.id) }}\">
                                                                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            {% else %}
                                                <tr>
                                                    <td colspan=\"5\">Aucun traitement trouvé</td>
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

  <!-- Modal pour ajouter un traitement -->
<div class=\"modal fade\" id=\"addTraitementModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addTraitementModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"addTraitementModalLabel\">Ajouter un Traitement</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">×</span>
                </button>
            </div>
            <div class=\"modal-body\">
                {{ form_start(form, {'attr': {'id': 'addTraitementForm'}}) }}
                <div class=\"input-group mb-3\">
                    {{ form_widget(form.type, { 'attr': {'class': 'form-control form-control-lg bg-light fs-6', 'placeholder': 'Type', 'id': 'traitement_type'} }) }}
                </div>
                <div class=\"input-group mb-3\">
                    {{ form_widget(form.medicament, { 'attr': {'class': 'form-control form-control-lg bg-light fs-6', 'placeholder': 'Médicament', 'id': 'traitement_medicament'} }) }}
                </div>
                <div class=\"input-group mb-3\">
                    {{ form_widget(form.suivi, { 'attr': {'class': 'form-control form-control-lg bg-light fs-6', 'placeholder': 'Suivi', 'id': 'traitement_suivi'} }) }}
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

        // Validation du formulaire d'ajout de traitement
        \$('#addTraitementModal form').on('submit', function(event) {
            var type = \$('#traitement_type').val();
            var medicament = \$('#traitement_medicament').val();
            var suivi = \$('#traitement_suivi').val();

            if (!type || !medicament || !suivi) {
                alert('Tous les champs sont obligatoires.');
                event.preventDefault(); // Empêche la soumission du formulaire
            }
        });
    });
</script>
{% endblock %}", "traitement/index.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\traitement\\index.html.twig");
    }
}
