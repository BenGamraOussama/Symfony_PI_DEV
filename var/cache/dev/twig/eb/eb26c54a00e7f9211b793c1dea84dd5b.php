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
class __TwigTemplate_6f9245632a41357b22748054ca4b3bb1 extends Template
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
    
    <div class=\"row g-4\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["patientActivities"]) || array_key_exists("patientActivities", $context) ? $context["patientActivities"] : (function () { throw new RuntimeError('Variable "patientActivities" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 11
            yield "        <div class=\"col-md-4\">
            <div class=\"card h-100 shadow activity-card\" 
                 data-bs-toggle=\"modal\" 
                 data-bs-target=\"#activityModal\"
                 data-activity-id=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 15), "html", null, true);
            yield "\"
                 data-title=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "titre", [], "any", false, false, false, 16), "html", null, true);
            yield "\"
                 data-description=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "description", [], "any", false, false, false, 17), "html", null, true);
            yield "\"
                 data-status=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "status", [], "any", false, false, false, 18), "html", null, true);
            yield "\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "titre", [], "any", false, false, false, 21), "html", null, true);
            yield "
                        <span class=\"badge float-end 
                            ";
            // line 23
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "status", [], "any", false, false, false, 23) == "not_started")) {
                yield "bg-secondary
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 24
$context["activity"], "status", [], "any", false, false, false, 24) == "in_progress")) {
                yield "bg-warning text-dark
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 25
$context["activity"], "status", [], "any", false, false, false, 25) == "completed")) {
                yield "bg-success
                            ";
            }
            // line 26
            yield "\">
                            ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["activity"], "status", [], "any", false, false, false, 27), ["_" => " "])), "html", null, true);
            yield "
                        </span>
                    </h5>
                </div>
            </div>
        </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 34
            yield "        <div class=\"col-12\">
            <div class=\"alert alert-info\">No activities assigned yet.</div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['activity'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "    </div>

    ";
        // line 41
        yield "    <div class=\"modal fade\" id=\"activityModal\" tabindex=\"-1\">
        <div class=\"modal-dialog\">
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
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("update_status"), "html", null, true);
        yield "\">
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"updateStatus()\">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('activityModal');
    
    modal.addEventListener('show.bs.modal', function(event) {
        const card = event.relatedTarget;
        document.getElementById('activityModalTitle').textContent = card.dataset.title;
        document.getElementById('activityModalDescription').textContent = card.dataset.description;
        document.getElementById('statusSelect').value = card.dataset.status;
        document.getElementById('activityId').value = card.dataset.activityId;
    });
});

function updateStatus() {
    const formData = new FormData(document.getElementById('statusUpdateForm'));
    
    fetch('";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_update_activity_status");
        yield "', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if(response.ok) {
            const activityId = document.getElementById('activityId').value;
            const newStatus = document.getElementById('statusSelect').value;
            const badge = document.querySelector(`[data-activity-id=\"\${activityId}\"] .badge`);
            
            badge.textContent = newStatus.replace('_', ' ').toTitleCase();
            badge.className = `badge float-end \${
                newStatus === 'not_started' ? 'bg-secondary' :
                newStatus === 'in_progress' ? 'bg-warning text-dark' :
                'bg-success'
            }`;
            
            bootstrap.Modal.getInstance(document.getElementById('activityModal')).hide();
        }
    })
    .catch(error => console.error('Error:', error));
}

// Helper function to title case
String.prototype.toTitleCase = function() {
    return this.replace(/\\w\\S*/g, function(txt) {
        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
    });
};
</script>

<style>
.activity-card {
    cursor: pointer;
    transition: transform 0.2s;
}
.activity-card:hover {
    transform: translateY(-5px);
}
.badge {
    font-size: 0.8rem;
    padding: 0.5em 0.75em;
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
        return array (  237 => 92,  206 => 64,  181 => 41,  177 => 38,  168 => 34,  156 => 27,  153 => 26,  148 => 25,  144 => 24,  140 => 23,  135 => 21,  129 => 18,  125 => 17,  121 => 16,  117 => 15,  111 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePatient.html.twig' %}

{% block title %}My Activities{% endblock %}

{% block body %}
<div class=\"container my-5\">
    <h2 class=\"text-center mb-5\">Your Activities</h2>
    
    <div class=\"row g-4\">
        {% for activity in patientActivities %}
        <div class=\"col-md-4\">
            <div class=\"card h-100 shadow activity-card\" 
                 data-bs-toggle=\"modal\" 
                 data-bs-target=\"#activityModal\"
                 data-activity-id=\"{{ activity.id }}\"
                 data-title=\"{{ activity.titre }}\"
                 data-description=\"{{ activity.description }}\"
                 data-status=\"{{ activity.status }}\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        {{ activity.titre }}
                        <span class=\"badge float-end 
                            {% if activity.status == 'not_started' %}bg-secondary
                            {% elseif activity.status == 'in_progress' %}bg-warning text-dark
                            {% elseif activity.status == 'completed' %}bg-success
                            {% endif %}\">
                            {{ activity.status|replace({'_': ' '})|title }}
                        </span>
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
        <div class=\"modal-dialog\">
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
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"updateStatus()\">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('activityModal');
    
    modal.addEventListener('show.bs.modal', function(event) {
        const card = event.relatedTarget;
        document.getElementById('activityModalTitle').textContent = card.dataset.title;
        document.getElementById('activityModalDescription').textContent = card.dataset.description;
        document.getElementById('statusSelect').value = card.dataset.status;
        document.getElementById('activityId').value = card.dataset.activityId;
    });
});

function updateStatus() {
    const formData = new FormData(document.getElementById('statusUpdateForm'));
    
    fetch('{{ path(\"patient_update_activity_status\") }}', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if(response.ok) {
            const activityId = document.getElementById('activityId').value;
            const newStatus = document.getElementById('statusSelect').value;
            const badge = document.querySelector(`[data-activity-id=\"\${activityId}\"] .badge`);
            
            badge.textContent = newStatus.replace('_', ' ').toTitleCase();
            badge.className = `badge float-end \${
                newStatus === 'not_started' ? 'bg-secondary' :
                newStatus === 'in_progress' ? 'bg-warning text-dark' :
                'bg-success'
            }`;
            
            bootstrap.Modal.getInstance(document.getElementById('activityModal')).hide();
        }
    })
    .catch(error => console.error('Error:', error));
}

// Helper function to title case
String.prototype.toTitleCase = function() {
    return this.replace(/\\w\\S*/g, function(txt) {
        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
    });
};
</script>

<style>
.activity-card {
    cursor: pointer;
    transition: transform 0.2s;
}
.activity-card:hover {
    transform: translateY(-5px);
}
.badge {
    font-size: 0.8rem;
    padding: 0.5em 0.75em;
}
</style>
{% endblock %}", "patient/activities.html.twig", "C:\\xampp\\htdocs\\symfony_pi_dev (4)\\symfony_pi_dev\\templates\\patient\\activities.html.twig");
    }
}
