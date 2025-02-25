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

/* patient/activities.html.twig */
class __TwigTemplate_d06366b7c8629aa64c050e67e609a9b6 extends Template
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
        return "basePatient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/activities.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/activities.html.twig"));

        $this->parent = $this->loadTemplate("basePatient.html.twig", "patient/activities.html.twig", 1);
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

        yield "My Activities";
        
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
        yield "<div class=\"container my-5\">
    <h2 class=\"text-center mb-5\">Your Activities</h2>
    
    ";
        // line 10
        yield "    <div class=\"mb-4\">
        <div class=\"btn-group\" role=\"group\">
            <button type=\"button\" class=\"btn btn-outline-primary filter active\" data-filter=\"all\">All</button>
            ";
        // line 13
        $context["uniqueTypes"] = [];
        // line 14
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["patientActivities"]) || array_key_exists("patientActivities", $context) ? $context["patientActivities"] : (function () { throw new RuntimeError('Variable "patientActivities" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 15
            yield "                ";
            if (!CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 15), (isset($context["uniqueTypes"]) || array_key_exists("uniqueTypes", $context) ? $context["uniqueTypes"] : (function () { throw new RuntimeError('Variable "uniqueTypes" does not exist.', 15, $this->source); })()))) {
                // line 16
                yield "                    ";
                $context["uniqueTypes"] = Twig\Extension\CoreExtension::merge((isset($context["uniqueTypes"]) || array_key_exists("uniqueTypes", $context) ? $context["uniqueTypes"] : (function () { throw new RuntimeError('Variable "uniqueTypes" does not exist.', 16, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 16)]);
                // line 17
                yield "                    <button type=\"button\" class=\"btn btn-outline-primary filter\" data-filter=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 17), "html", null, true);
                yield "\">
                        ";
                // line 18
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 18)), "html", null, true);
                yield "
                    </button>
                ";
            }
            // line 21
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "        </div>
    </div>

    <div class=\"row g-4\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["patientActivities"]) || array_key_exists("patientActivities", $context) ? $context["patientActivities"] : (function () { throw new RuntimeError('Variable "patientActivities" does not exist.', 26, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 27
            yield "        <div class=\"col-md-4 activity-item\" data-type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 27), "html", null, true);
            yield "\">
            <div class=\"card h-100 shadow activity-card\" 
                 data-bs-toggle=\"modal\" 
                 data-bs-target=\"#activityModal\"
                 data-activity-id=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 31), "html", null, true);
            yield "\"
                 data-title=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "titre", [], "any", false, false, false, 32), "html", null, true);
            yield "\"
                 data-description=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 33), "html", null, true);
            yield "\"
                 data-status=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "status", [], "any", false, false, false, 34), "html", null, true);
            yield "\"
                 data-is-exercise=\"";
            // line 35
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 35) == "exercise")) ? ("true") : ("false"));
            yield "\"
                 data-exercise-id=\"";
            // line 36
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "exercice", [], "any", false, false, false, 36)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "exercice", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true)) : (""));
            yield "\"
                 data-question=\"";
            // line 37
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "exercice", [], "any", false, false, false, 37)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "exercice", [], "any", false, false, false, 37), "question", [], "any", false, false, false, 37), "html", null, true)) : (""));
            yield "\"
                 data-has-response=\"";
            // line 38
            yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "exercice", [], "any", false, false, false, 38) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "patient", [], "any", false, false, false, 38)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "exercice", [], "any", false, false, false, 38), "reponses", [], "any", false, false, false, 38), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 38, $this->source); })()), "patient", [], "any", false, false, false, 38) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "patient", [], "any", false, false, false, 38)); })) > 0))) ? ("true") : ("false"));
            yield "\">
                <div class=\"card-body\">
                    <h5 class=\"card-title d-flex justify-content-between align-items-center\">
                        ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "titre", [], "any", false, false, false, 41), "html", null, true);
            yield "
                        <div class=\"badge-container\">
                            <span class=\"badge bg-info me-2\">
                                <i class=\"bi 
                                    ";
            // line 45
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 45) == "exercise")) {
                yield "bi-question-circle
                                    ";
            } else {
                // line 46
                yield "bi-clipboard-check
                                    ";
            }
            // line 47
            yield " me-1\"></i>
                                ";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 48)), "html", null, true);
            yield "
                            </span>
                            ";
            // line 50
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "type", [], "any", false, false, false, 50) == "exercise")) {
                // line 51
                yield "                                <span class=\"badge bg-";
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "exercice", [], "any", false, false, false, 51) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "patient", [], "any", false, false, false, 51)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "exercice", [], "any", false, false, false, 51), "reponses", [], "any", false, false, false, 51), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 51, $this->source); })()), "patient", [], "any", false, false, false, 51) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "patient", [], "any", false, false, false, 51)); })) > 0))) ? ("success") : ("warning"));
                yield "\">
                                    ";
                // line 52
                yield ((((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "exercice", [], "any", false, false, false, 52) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "patient", [], "any", false, false, false, 52)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "exercice", [], "any", false, false, false, 52), "reponses", [], "any", false, false, false, 52), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 52, $this->source); })()), "patient", [], "any", false, false, false, 52) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "patient", [], "any", false, false, false, 52)); })) > 0))) ? ("Answered") : ("Pending"));
                yield "
                                </span>
                            ";
            } else {
                // line 55
                yield "                                <span class=\"badge 
                                    ";
                // line 56
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "status", [], "any", false, false, false, 56) == "not_started")) {
                    yield "bg-secondary
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 57
$context["activity"], "status", [], "any", false, false, false, 57) == "in_progress")) {
                    yield "bg-warning text-dark
                                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 58
$context["activity"], "status", [], "any", false, false, false, 58) == "completed")) {
                    yield "bg-success
                                    ";
                }
                // line 59
                yield "\">
                                    ";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "status", [], "any", false, false, false, 60), ["_" => " "])), "html", null, true);
                yield "
                                </span>
                            ";
            }
            // line 63
            yield "                        </div>
                    </h5>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            yield "        <div class=\"col-12\">
            <div class=\"alert alert-info\">No activities assigned yet.</div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "    </div>

    ";
        // line 76
        yield "    <div class=\"modal fade\" id=\"activityModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-primary text-white\">
                    <h5 class=\"modal-title\" id=\"activityModalTitle\"></h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"mb-3\">
                        <h6>Description</h6>
                        <p id=\"activityModalDescription\" class=\"text-muted\"></p>
                    </div>

                    <div id=\"exerciseSection\" style=\"display: none;\">
                        <div class=\"mb-3\">
                            <h6>Exercise Question</h6>
                            <p id=\"activityModalQuestion\" class=\"text-muted fst-italic\"></p>
                        </div>
                        
                        <div id=\"responseContainer\">
                            <h6>Your Response</h6>
                            <div id=\"existingResponses\"></div>
                            <div id=\"responseFormContainer\" style=\"display: none;\">
                                ";
        // line 99
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99), "patient", [], "any", false, false, false, 99))) {
            // line 100
            yield "                                <form id=\"responseForm\" method=\"POST\">
                                    <div class=\"mb-3\">
                                        <textarea name=\"reponse\" class=\"form-control\" rows=\"3\" 
                                                  placeholder=\"Type your answer here...\" required></textarea>
                                    </div>
                                    <input type=\"hidden\" name=\"exercise_id\" id=\"exerciseId\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("response"), "html", null, true);
            yield "\">
                                    <button type=\"submit\" class=\"btn btn-success\">
                                        <i class=\"bi bi-send me-2\"></i>Submit Answer
                                    </button>
                                </form>
                                ";
        } else {
            // line 112
            yield "                                <div class=\"alert alert-danger\">
                                    Patient profile not found. Cannot submit response.
                                </div>
                                ";
        }
        // line 116
        yield "                            </div>
                        </div>
                        <hr>
                    </div>

                    <div id=\"statusUpdateSection\" style=\"display: none;\">
                        <form id=\"statusUpdateForm\" method=\"POST\">
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Update Status</label>
                                <select name=\"status\" class=\"form-select\" id=\"statusSelect\">
                                    <option value=\"not_started\">Not Started</option>
                                    <option value=\"in_progress\">In Progress</option>
                                    <option value=\"completed\">Completed</option>
                                </select>
                            </div>
                            <input type=\"hidden\" name=\"activity_id\" id=\"activityId\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("update_status"), "html", null, true);
        yield "\">
                        </form>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"statusUpdateButton\" style=\"display: none;\">
                        Save Status
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterButtons = document.querySelectorAll('.filter');
    const activityItems = document.querySelectorAll('.activity-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            const filterValue = this.dataset.filter;
            
            activityItems.forEach(item => {
                if (filterValue === 'all' || item.dataset.type === filterValue) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Modal functionality
    const modal = document.getElementById('activityModal');
    const responseForm = document.getElementById('responseForm');
    const statusUpdateSection = document.getElementById('statusUpdateSection');
    const statusUpdateButton = document.getElementById('statusUpdateButton');
    
    const responseUrlTemplate = '";
        // line 177
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new", ["id" => "__id__"]);
        yield "';

    modal.addEventListener('show.bs.modal', function(event) {
        const card = event.relatedTarget;
        const isExercise = card.dataset.isExercise === 'true';
        const hasResponse = card.dataset.hasResponse === 'true';
        const exerciseId = card.dataset.exerciseId;
        const question = card.dataset.question;

        document.getElementById('existingResponses').innerHTML = '';
        if(responseForm) responseForm.reset();
        
        document.getElementById('activityModalTitle').textContent = card.dataset.title;
        document.getElementById('activityModalDescription').textContent = card.dataset.description;
        document.getElementById('activityId').value = card.dataset.activityId;
        document.getElementById('exerciseId').value = exerciseId;

        if (isExercise) {
            document.getElementById('exerciseSection').style.display = 'block';
            document.getElementById('activityModalQuestion').textContent = question;
            statusUpdateSection.style.display = 'none';
            statusUpdateButton.style.display = 'none';

            ";
        // line 200
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 200, $this->source); })()), "user", [], "any", false, false, false, 200) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 200, $this->source); })()), "user", [], "any", false, false, false, 200), "patient", [], "any", false, false, false, 200))) {
            // line 201
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "user", [], "any", false, false, false, 201), "patient", [], "any", false, false, false, 201), "reponses", [], "any", false, false, false, 201));
            foreach ($context['_seq'] as $context["_key"] => $context["response"]) {
                // line 202
                yield "                    if (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["response"], "exercice", [], "any", false, false, false, 202), "id", [], "any", false, false, false, 202), "html", null, true);
                yield " == exerciseId) {
                        document.getElementById('existingResponses').innerHTML = `
                            <div class=\"card mb-3\">
                                <div class=\"card-body\">
                                    <p class=\"card-text\">";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["response"], "contenu", [], "any", false, false, false, 206), "html", null, true);
                yield "</p>
                                    <small class=\"text-muted\">
                                        Answered on ";
                // line 208
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["response"], "dateCreation", [], "any", false, false, false, 208), "Y-m-d H:i"), "html", null, true);
                yield "
                                    </small>
                                </div>
                            </div>`;
                        document.getElementById('responseFormContainer').style.display = 'none';
                    }
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['response'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            yield "            ";
        }
        // line 216
        yield "
            if (!hasResponse && document.getElementById('responseFormContainer')) {
                document.getElementById('responseFormContainer').style.display = 'block';
            }
        } else {
            document.getElementById('exerciseSection').style.display = 'none';
            statusUpdateSection.style.display = 'block';
            statusUpdateButton.style.display = 'block';
            document.getElementById('statusSelect').value = card.dataset.status;
        }
    });

    if(responseForm) {
        responseForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            const exerciseId = formData.get('exercise_id');
            
            const url = responseUrlTemplate.replace('__id__', exerciseId);
            
            fetch(url, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if(response.ok) {
                    document.getElementById('responseFormContainer').style.display = 'none';
                    document.getElementById('existingResponses').innerHTML = `
                        <div class=\"card mb-3\">
                            <div class=\"card-body\">
                                <p class=\"card-text\">\${formData.get('reponse')}</p>
                                <small class=\"text-muted\">Answered just now</small>
                            </div>
                        </div>`;
                }
            })
            .catch(error => console.error('Error:', error));
        });
    }

    statusUpdateButton.addEventListener('click', function() {
        const formData = new FormData(document.getElementById('statusUpdateForm'));
        
        fetch('";
        // line 259
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_activite_update_status");
        yield "', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if(response.ok) {
                location.reload();
                const activityId = document.getElementById('activityId').value;
                const newStatus = document.getElementById('statusSelect').value;
                const badge = document.querySelector(`[data-activity-id=\"\${activityId}\"] .badge:last-child`);
                
                badge.textContent = newStatus.replace('_', ' ').toTitleCase();
                badge.className = `badge \${
                    newStatus === 'not_started' ? 'bg-secondary' :
                    newStatus === 'in_progress' ? 'bg-warning text-dark' :
                    'bg-success'
                }`;
                
                bootstrap.Modal.getInstance(modal).hide();
            }
        })
        .catch(error => console.error('Error:', error));
    });
});

String.prototype.toTitleCase = function() {
    return this.replace(/\\w\\S*/g, function(txt) {
        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
    });
};
</script>

<style>
.filter {
    transition: all 0.2s ease;
}
.filter.active {
    background-color: #0d6efd;
    color: white !important;
    border-color: #0d6efd;
}
.activity-card {
    cursor: pointer;
    transition: transform 0.2s, box-shadow 0.2s;
    border: 1px solid rgba(0,0,0,0.125);
}
.activity-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
}
.badge {
    font-size: 0.85rem;
    padding: 0.5em 0.75em;
    display: inline-flex;
    align-items: center;
}
.card-title {
    font-size: 1.1rem;
    font-weight: 500;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}
.badge-container {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
    justify-content: flex-end;
}
</style>
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
        return "patient/activities.html.twig";
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
        return array (  501 => 259,  456 => 216,  453 => 215,  440 => 208,  435 => 206,  427 => 202,  422 => 201,  420 => 200,  394 => 177,  346 => 132,  328 => 116,  322 => 112,  313 => 106,  305 => 100,  303 => 99,  278 => 76,  274 => 73,  265 => 69,  255 => 63,  249 => 60,  246 => 59,  241 => 58,  237 => 57,  233 => 56,  230 => 55,  224 => 52,  219 => 51,  217 => 50,  212 => 48,  209 => 47,  205 => 46,  200 => 45,  193 => 41,  187 => 38,  183 => 37,  179 => 36,  175 => 35,  171 => 34,  167 => 33,  163 => 32,  159 => 31,  151 => 27,  146 => 26,  140 => 22,  134 => 21,  128 => 18,  123 => 17,  120 => 16,  117 => 15,  112 => 14,  110 => 13,  105 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePatient.html.twig' %}

{% block title %}My Activities{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <h2 class=\"text-center mb-5\">Your Activities</h2>
    
    {# Filter Controls #}
    <div class=\"mb-4\">
        <div class=\"btn-group\" role=\"group\">
            <button type=\"button\" class=\"btn btn-outline-primary filter active\" data-filter=\"all\">All</button>
            {% set uniqueTypes = [] %}
            {% for activity in patientActivities %}
                {% if activity.type not in uniqueTypes %}
                    {% set uniqueTypes = uniqueTypes|merge([activity.type]) %}
                    <button type=\"button\" class=\"btn btn-outline-primary filter\" data-filter=\"{{ activity.type }}\">
                        {{ activity.type|capitalize }}
                    </button>
                {% endif %}
            {% endfor %}
        </div>
    </div>

    <div class=\"row g-4\">
        {% for activity in patientActivities %}
        <div class=\"col-md-4 activity-item\" data-type=\"{{ activity.type }}\">
            <div class=\"card h-100 shadow activity-card\" 
                 data-bs-toggle=\"modal\" 
                 data-bs-target=\"#activityModal\"
                 data-activity-id=\"{{ activity.id }}\"
                 data-title=\"{{ activity.titre }}\"
                 data-description=\"{{ activity.description }}\"
                 data-status=\"{{ activity.status }}\"
                 data-is-exercise=\"{{ activity.type == 'exercise' ? 'true' : 'false' }}\"
                 data-exercise-id=\"{{ activity.exercice ? activity.exercice.id : '' }}\"
                 data-question=\"{{ activity.exercice ? activity.exercice.question : '' }}\"
                 data-has-response=\"{{ (activity.exercice and app.user.patient and activity.exercice.reponses|filter(r => r.patient == app.user.patient)|length > 0) ? 'true' : 'false' }}\">
                <div class=\"card-body\">
                    <h5 class=\"card-title d-flex justify-content-between align-items-center\">
                        {{ activity.titre }}
                        <div class=\"badge-container\">
                            <span class=\"badge bg-info me-2\">
                                <i class=\"bi 
                                    {% if activity.type == 'exercise' %}bi-question-circle
                                    {% else %}bi-clipboard-check
                                    {% endif %} me-1\"></i>
                                {{ activity.type|capitalize }}
                            </span>
                            {% if activity.type == 'exercise' %}
                                <span class=\"badge bg-{{ (activity.exercice and app.user.patient and activity.exercice.reponses|filter(r => r.patient == app.user.patient)|length > 0) ? 'success' : 'warning' }}\">
                                    {{ (activity.exercice and app.user.patient and activity.exercice.reponses|filter(r => r.patient == app.user.patient)|length > 0) ? 'Answered' : 'Pending' }}
                                </span>
                            {% else %}
                                <span class=\"badge 
                                    {% if activity.status == 'not_started' %}bg-secondary
                                    {% elseif activity.status == 'in_progress' %}bg-warning text-dark
                                    {% elseif activity.status == 'completed' %}bg-success
                                    {% endif %}\">
                                    {{ activity.status|replace({'_': ' '})|title }}
                                </span>
                            {% endif %}
                        </div>
                    </h5>
                </div>
            </div>
        </div>
        {% else %}
        <div class=\"col-12\">
            <div class=\"alert alert-info\">No activities assigned yet.</div>
        </div>
        {% endfor %}
    </div>

    {# Activity Modal #}
    <div class=\"modal fade\" id=\"activityModal\" tabindex=\"-1\">
        <div class=\"modal-dialog modal-lg\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-primary text-white\">
                    <h5 class=\"modal-title\" id=\"activityModalTitle\"></h5>
                    <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"mb-3\">
                        <h6>Description</h6>
                        <p id=\"activityModalDescription\" class=\"text-muted\"></p>
                    </div>

                    <div id=\"exerciseSection\" style=\"display: none;\">
                        <div class=\"mb-3\">
                            <h6>Exercise Question</h6>
                            <p id=\"activityModalQuestion\" class=\"text-muted fst-italic\"></p>
                        </div>
                        
                        <div id=\"responseContainer\">
                            <h6>Your Response</h6>
                            <div id=\"existingResponses\"></div>
                            <div id=\"responseFormContainer\" style=\"display: none;\">
                                {% if app.user and app.user.patient %}
                                <form id=\"responseForm\" method=\"POST\">
                                    <div class=\"mb-3\">
                                        <textarea name=\"reponse\" class=\"form-control\" rows=\"3\" 
                                                  placeholder=\"Type your answer here...\" required></textarea>
                                    </div>
                                    <input type=\"hidden\" name=\"exercise_id\" id=\"exerciseId\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('response') }}\">
                                    <button type=\"submit\" class=\"btn btn-success\">
                                        <i class=\"bi bi-send me-2\"></i>Submit Answer
                                    </button>
                                </form>
                                {% else %}
                                <div class=\"alert alert-danger\">
                                    Patient profile not found. Cannot submit response.
                                </div>
                                {% endif %}
                            </div>
                        </div>
                        <hr>
                    </div>

                    <div id=\"statusUpdateSection\" style=\"display: none;\">
                        <form id=\"statusUpdateForm\" method=\"POST\">
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Update Status</label>
                                <select name=\"status\" class=\"form-select\" id=\"statusSelect\">
                                    <option value=\"not_started\">Not Started</option>
                                    <option value=\"in_progress\">In Progress</option>
                                    <option value=\"completed\">Completed</option>
                                </select>
                            </div>
                            <input type=\"hidden\" name=\"activity_id\" id=\"activityId\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('update_status') }}\">
                        </form>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"statusUpdateButton\" style=\"display: none;\">
                        Save Status
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filter functionality
    const filterButtons = document.querySelectorAll('.filter');
    const activityItems = document.querySelectorAll('.activity-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            const filterValue = this.dataset.filter;
            
            activityItems.forEach(item => {
                if (filterValue === 'all' || item.dataset.type === filterValue) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Modal functionality
    const modal = document.getElementById('activityModal');
    const responseForm = document.getElementById('responseForm');
    const statusUpdateSection = document.getElementById('statusUpdateSection');
    const statusUpdateButton = document.getElementById('statusUpdateButton');
    
    const responseUrlTemplate = '{{ path(\"app_reponse_new\", { id: \"__id__\" }) }}';

    modal.addEventListener('show.bs.modal', function(event) {
        const card = event.relatedTarget;
        const isExercise = card.dataset.isExercise === 'true';
        const hasResponse = card.dataset.hasResponse === 'true';
        const exerciseId = card.dataset.exerciseId;
        const question = card.dataset.question;

        document.getElementById('existingResponses').innerHTML = '';
        if(responseForm) responseForm.reset();
        
        document.getElementById('activityModalTitle').textContent = card.dataset.title;
        document.getElementById('activityModalDescription').textContent = card.dataset.description;
        document.getElementById('activityId').value = card.dataset.activityId;
        document.getElementById('exerciseId').value = exerciseId;

        if (isExercise) {
            document.getElementById('exerciseSection').style.display = 'block';
            document.getElementById('activityModalQuestion').textContent = question;
            statusUpdateSection.style.display = 'none';
            statusUpdateButton.style.display = 'none';

            {% if app.user and app.user.patient %}
                {% for response in app.user.patient.reponses %}
                    if ({{ response.exercice.id }} == exerciseId) {
                        document.getElementById('existingResponses').innerHTML = `
                            <div class=\"card mb-3\">
                                <div class=\"card-body\">
                                    <p class=\"card-text\">{{ response.contenu }}</p>
                                    <small class=\"text-muted\">
                                        Answered on {{ response.dateCreation|date('Y-m-d H:i') }}
                                    </small>
                                </div>
                            </div>`;
                        document.getElementById('responseFormContainer').style.display = 'none';
                    }
                {% endfor %}
            {% endif %}

            if (!hasResponse && document.getElementById('responseFormContainer')) {
                document.getElementById('responseFormContainer').style.display = 'block';
            }
        } else {
            document.getElementById('exerciseSection').style.display = 'none';
            statusUpdateSection.style.display = 'block';
            statusUpdateButton.style.display = 'block';
            document.getElementById('statusSelect').value = card.dataset.status;
        }
    });

    if(responseForm) {
        responseForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            const exerciseId = formData.get('exercise_id');
            
            const url = responseUrlTemplate.replace('__id__', exerciseId);
            
            fetch(url, {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if(response.ok) {
                    document.getElementById('responseFormContainer').style.display = 'none';
                    document.getElementById('existingResponses').innerHTML = `
                        <div class=\"card mb-3\">
                            <div class=\"card-body\">
                                <p class=\"card-text\">\${formData.get('reponse')}</p>
                                <small class=\"text-muted\">Answered just now</small>
                            </div>
                        </div>`;
                }
            })
            .catch(error => console.error('Error:', error));
        });
    }

    statusUpdateButton.addEventListener('click', function() {
        const formData = new FormData(document.getElementById('statusUpdateForm'));
        
        fetch('{{ path(\"app_activite_update_status\") }}', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if(response.ok) {
                location.reload();
                const activityId = document.getElementById('activityId').value;
                const newStatus = document.getElementById('statusSelect').value;
                const badge = document.querySelector(`[data-activity-id=\"\${activityId}\"] .badge:last-child`);
                
                badge.textContent = newStatus.replace('_', ' ').toTitleCase();
                badge.className = `badge \${
                    newStatus === 'not_started' ? 'bg-secondary' :
                    newStatus === 'in_progress' ? 'bg-warning text-dark' :
                    'bg-success'
                }`;
                
                bootstrap.Modal.getInstance(modal).hide();
            }
        })
        .catch(error => console.error('Error:', error));
    });
});

String.prototype.toTitleCase = function() {
    return this.replace(/\\w\\S*/g, function(txt) {
        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
    });
};
</script>

<style>
.filter {
    transition: all 0.2s ease;
}
.filter.active {
    background-color: #0d6efd;
    color: white !important;
    border-color: #0d6efd;
}
.activity-card {
    cursor: pointer;
    transition: transform 0.2s, box-shadow 0.2s;
    border: 1px solid rgba(0,0,0,0.125);
}
.activity-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
}
.badge {
    font-size: 0.85rem;
    padding: 0.5em 0.75em;
    display: inline-flex;
    align-items: center;
}
.card-title {
    font-size: 1.1rem;
    font-weight: 500;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}
.badge-container {
    display: flex;
    gap: 0.5rem;
    flex-wrap: wrap;
    justify-content: flex-end;
}
</style>
{% endblock %}", "patient/activities.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\patient\\activities.html.twig");
    }
}
