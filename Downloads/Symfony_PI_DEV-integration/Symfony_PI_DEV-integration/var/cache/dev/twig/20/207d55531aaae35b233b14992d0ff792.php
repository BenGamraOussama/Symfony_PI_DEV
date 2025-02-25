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

/* patient/home_activite.html.twig */
class __TwigTemplate_c539843d9bedc59e5012d324be1cb2e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/home_activite.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "patient/home_activite.html.twig"));

        $this->parent = $this->loadTemplate("basePatient.html.twig", "patient/home_activite.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<div class=\"container-fluid px-4 py-5\">
    <!-- Hero Section -->
    <div class=\"hero-section text-center mb-5 bg-gradient-primary rounded-4 shadow-lg\">
        <div class=\"py-5 px-4\">
            <h1 class=\"display-5 fw-bold text-white mb-3\">Welcome Back, ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8), "patient", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
        yield "! 👋</h1>
            <p class=\"lead text-white-80 mb-0\">Track your wellness journey in style</p>
        </div>
    </div>

    <!-- Stats Overview -->
    <div class=\"row g-4 mb-5\">
        <div class=\"col-md-4\">
            <div class=\"card stat-card border-0 shadow-sm hover-lift\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-shape bg-primary-soft text-primary rounded-3 p-3 me-3\">
                            <i class=\"bi bi-check2-circle fs-2\"></i>
                        </div>
                        <div>
                            <h5 class=\"text-muted mb-1\">Completed</h5>
                            <div class=\"d-flex align-items-baseline\">
                                <h2 class=\"mb-0 me-2\">12</h2>
                                <span class=\"text-muted\">/25 activities</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card stat-card border-0 shadow-sm hover-lift\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-shape bg-success-soft text-success rounded-3 p-3 me-3\">
                            <i class=\"bi bi-lightning-charge fs-2\"></i>
                        </div>
                        <div>
                            <h5 class=\"text-muted mb-1\">Current Streak</h5>
                            <h2 class=\"mb-0\">5 Days</h2>
                            <small class=\"text-success\">🔥 Personal Best!</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card stat-card border-0 shadow-sm hover-lift\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-shape bg-warning-soft text-warning rounded-3 p-3 me-3\">
                            <i class=\"bi bi-trophy fs-2\"></i>
                        </div>
                        <div>
                            <h5 class=\"text-muted mb-1\">Achievements</h5>
                            <div class=\"d-flex align-items-baseline\">
                                <h2 class=\"mb-0 me-2\">8</h2>
                                <span class=\"text-muted\">/15 unlocked</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class=\"row g-4\">
        <!-- Activity Dashboard -->
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-bottom-0 pb-0 pt-4\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h3 class=\"h5 mb-0\">
                            <i class=\"bi bi-clipboard2-pulse text-primary me-2\"></i>
                            Activity Progress
                        </h3>
                        <div class=\"badge bg-primary-soft text-primary\">Weekly Summary</div>
                    </div>
                </div>
                <div class=\"card-body pt-4\">
                    <!-- Progress Tracker -->
                    <div class=\"progress-tracker mb-5\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <div>
                                <span class=\"text-muted\">Weekly Goal Progress</span>
                                <h4 class=\"mb-0\">65% Completed</h4>
                            </div>
                            <div class=\"text-end\">
                                <span class=\"badge bg-primary\">2 Days Left</span>
                            </div>
                        </div>
                        <div class=\"progress bg-soft-primary\" style=\"height: 12px; border-radius: 6px;\">
                            <div class=\"progress-bar bg-primary\" role=\"progressbar\" 
                                style=\"width: 65%; border-radius: 6px;\" 
                                aria-valuenow=\"65\" 
                                aria-valuemin=\"0\" 
                                aria-valuemax=\"100\">
                            </div>
                        </div>
                    </div>

                    <!-- Activity Grid -->
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"card activity-card border-0 shadow-sm hover-lift bg-soft-info\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"icon-shape bg-info text-white rounded-3 p-3 me-3\">
                                            <i class=\"bi bi-clipboard-check fs-4\"></i>
                                        </div>
                                        <div>
                                            <h5 class=\"mb-1\">Today's Plan</h5>
                                            <p class=\"text-muted mb-0\">3 activities remaining</p>
                                        </div>
                                        <i class=\"bi bi-chevron-right ms-auto text-muted\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"card activity-card border-0 shadow-sm hover-lift bg-soft-success\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"icon-shape bg-success text-white rounded-3 p-3 me-3\">
                                            <i class=\"bi bi-graph-up fs-4\"></i>
                                        </div>
                                        <div>
                                            <h5 class=\"mb-1\">Progress History</h5>
                                            <p class=\"text-muted mb-0\">View detailed analytics</p>
                                        </div>
                                        <i class=\"bi bi-chevron-right ms-auto text-muted\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions Sidebar -->
        <div class=\"col-lg-4\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-bottom-0 pb-0 pt-4\">
                    <h3 class=\"h5 mb-0\">
                        <i class=\"bi bi-rocket-takeoff text-warning me-2\"></i>
                        Quick Actions
                    </h3>
                </div>
                <div class=\"card-body pt-4\">
                    <div class=\"list-group list-group-flush\">
                        <a href=\"";
        // line 158
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("patient_activity_index");
        yield "\" 
                           class=\"list-group-item list-group-item-action d-flex align-items-center py-3 px-4 rounded-3 mb-2\">
                            <div class=\"icon-shape bg-primary-soft text-primary rounded-3 p-2 me-3\">
                                <i class=\"bi bi-plus-lg\"></i>
                            </div>
                            <div>
                                <h6 class=\"mb-0\">New Activity</h6>
                                <small class=\"text-muted\">Start a new wellness activity</small>
                            </div>
                        </a>
                        
                        <a href=\"#\" 
                           class=\"list-group-item list-group-item-action d-flex align-items-center py-3 px-4 rounded-3 mb-2\">
                            <div class=\"icon-shape bg-success-soft text-success rounded-3 p-2 me-3\">
                                <i class=\"bi bi-check2-square\"></i>
                            </div>
                            <div>
                                <h6 class=\"mb-0\">Daily Check-in</h6>
                                <small class=\"text-muted\">Complete your daily assessment</small>
                            </div>
                            <span class=\"badge bg-success-soft text-success ms-auto\">New</span>
                        </a>
                        
                        <a href=\"#\" 
                           class=\"list-group-item list-group-item-action d-flex align-items-center py-3 px-4 rounded-3\">
                            <div class=\"icon-shape bg-info-soft text-info rounded-3 p-2 me-3\">
                                <i class=\"bi bi-chat-dots\"></i>
                            </div>
                            <div>
                                <h6 class=\"mb-0\">Chat Support</h6>
                                <small class=\"text-muted\">Message your therapist</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --primary: #6366f1;
        --success: #22c55e;
        --warning: #f59e0b;
        --info: #3b82f6;
        --soft-bg: #f8f9fc;
    }

    .hero-section {
        background: linear-gradient(135deg, var(--primary) 0%, #4f46e5 100%);
    }

    .stat-card {
        transition: all 0.3s ease;
        border-radius: 1rem;
        background: white;
    }

    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1)!important;
    }

    .icon-shape {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .progress-tracker {
        background: var(--soft-bg);
        padding: 1.5rem;
        border-radius: 1rem;
    }

    .activity-card {
        border-radius: 1rem;
        transition: all 0.3s ease;
    }

    .list-group-item {
        border: none;
        background: transparent;
        transition: all 0.3s ease;
    }

    .list-group-item:hover {
        background: var(--soft-bg);
    }

    .bg-soft-primary { background-color: rgba(99, 102, 241, 0.1); }
    .bg-soft-success { background-color: rgba(34, 197, 94, 0.1); }
    .bg-soft-warning { background-color: rgba(245, 158, 11, 0.1); }
    .bg-soft-info { background-color: rgba(59, 130, 246, 0.1); }
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
        return "patient/home_activite.html.twig";
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
        return array (  235 => 158,  82 => 8,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePatient.html.twig' %}

{% block body %}
<div class=\"container-fluid px-4 py-5\">
    <!-- Hero Section -->
    <div class=\"hero-section text-center mb-5 bg-gradient-primary rounded-4 shadow-lg\">
        <div class=\"py-5 px-4\">
            <h1 class=\"display-5 fw-bold text-white mb-3\">Welcome Back, {{ app.user.patient.name }}! 👋</h1>
            <p class=\"lead text-white-80 mb-0\">Track your wellness journey in style</p>
        </div>
    </div>

    <!-- Stats Overview -->
    <div class=\"row g-4 mb-5\">
        <div class=\"col-md-4\">
            <div class=\"card stat-card border-0 shadow-sm hover-lift\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-shape bg-primary-soft text-primary rounded-3 p-3 me-3\">
                            <i class=\"bi bi-check2-circle fs-2\"></i>
                        </div>
                        <div>
                            <h5 class=\"text-muted mb-1\">Completed</h5>
                            <div class=\"d-flex align-items-baseline\">
                                <h2 class=\"mb-0 me-2\">12</h2>
                                <span class=\"text-muted\">/25 activities</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card stat-card border-0 shadow-sm hover-lift\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-shape bg-success-soft text-success rounded-3 p-3 me-3\">
                            <i class=\"bi bi-lightning-charge fs-2\"></i>
                        </div>
                        <div>
                            <h5 class=\"text-muted mb-1\">Current Streak</h5>
                            <h2 class=\"mb-0\">5 Days</h2>
                            <small class=\"text-success\">🔥 Personal Best!</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-md-4\">
            <div class=\"card stat-card border-0 shadow-sm hover-lift\">
                <div class=\"card-body\">
                    <div class=\"d-flex align-items-center\">
                        <div class=\"icon-shape bg-warning-soft text-warning rounded-3 p-3 me-3\">
                            <i class=\"bi bi-trophy fs-2\"></i>
                        </div>
                        <div>
                            <h5 class=\"text-muted mb-1\">Achievements</h5>
                            <div class=\"d-flex align-items-baseline\">
                                <h2 class=\"mb-0 me-2\">8</h2>
                                <span class=\"text-muted\">/15 unlocked</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class=\"row g-4\">
        <!-- Activity Dashboard -->
        <div class=\"col-lg-8\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-bottom-0 pb-0 pt-4\">
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <h3 class=\"h5 mb-0\">
                            <i class=\"bi bi-clipboard2-pulse text-primary me-2\"></i>
                            Activity Progress
                        </h3>
                        <div class=\"badge bg-primary-soft text-primary\">Weekly Summary</div>
                    </div>
                </div>
                <div class=\"card-body pt-4\">
                    <!-- Progress Tracker -->
                    <div class=\"progress-tracker mb-5\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <div>
                                <span class=\"text-muted\">Weekly Goal Progress</span>
                                <h4 class=\"mb-0\">65% Completed</h4>
                            </div>
                            <div class=\"text-end\">
                                <span class=\"badge bg-primary\">2 Days Left</span>
                            </div>
                        </div>
                        <div class=\"progress bg-soft-primary\" style=\"height: 12px; border-radius: 6px;\">
                            <div class=\"progress-bar bg-primary\" role=\"progressbar\" 
                                style=\"width: 65%; border-radius: 6px;\" 
                                aria-valuenow=\"65\" 
                                aria-valuemin=\"0\" 
                                aria-valuemax=\"100\">
                            </div>
                        </div>
                    </div>

                    <!-- Activity Grid -->
                    <div class=\"row g-4\">
                        <div class=\"col-md-6\">
                            <div class=\"card activity-card border-0 shadow-sm hover-lift bg-soft-info\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"icon-shape bg-info text-white rounded-3 p-3 me-3\">
                                            <i class=\"bi bi-clipboard-check fs-4\"></i>
                                        </div>
                                        <div>
                                            <h5 class=\"mb-1\">Today's Plan</h5>
                                            <p class=\"text-muted mb-0\">3 activities remaining</p>
                                        </div>
                                        <i class=\"bi bi-chevron-right ms-auto text-muted\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"col-md-6\">
                            <div class=\"card activity-card border-0 shadow-sm hover-lift bg-soft-success\">
                                <div class=\"card-body\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"icon-shape bg-success text-white rounded-3 p-3 me-3\">
                                            <i class=\"bi bi-graph-up fs-4\"></i>
                                        </div>
                                        <div>
                                            <h5 class=\"mb-1\">Progress History</h5>
                                            <p class=\"text-muted mb-0\">View detailed analytics</p>
                                        </div>
                                        <i class=\"bi bi-chevron-right ms-auto text-muted\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions Sidebar -->
        <div class=\"col-lg-4\">
            <div class=\"card border-0 shadow-sm\">
                <div class=\"card-header bg-white border-bottom-0 pb-0 pt-4\">
                    <h3 class=\"h5 mb-0\">
                        <i class=\"bi bi-rocket-takeoff text-warning me-2\"></i>
                        Quick Actions
                    </h3>
                </div>
                <div class=\"card-body pt-4\">
                    <div class=\"list-group list-group-flush\">
                        <a href=\"{{ path('patient_activity_index') }}\" 
                           class=\"list-group-item list-group-item-action d-flex align-items-center py-3 px-4 rounded-3 mb-2\">
                            <div class=\"icon-shape bg-primary-soft text-primary rounded-3 p-2 me-3\">
                                <i class=\"bi bi-plus-lg\"></i>
                            </div>
                            <div>
                                <h6 class=\"mb-0\">New Activity</h6>
                                <small class=\"text-muted\">Start a new wellness activity</small>
                            </div>
                        </a>
                        
                        <a href=\"#\" 
                           class=\"list-group-item list-group-item-action d-flex align-items-center py-3 px-4 rounded-3 mb-2\">
                            <div class=\"icon-shape bg-success-soft text-success rounded-3 p-2 me-3\">
                                <i class=\"bi bi-check2-square\"></i>
                            </div>
                            <div>
                                <h6 class=\"mb-0\">Daily Check-in</h6>
                                <small class=\"text-muted\">Complete your daily assessment</small>
                            </div>
                            <span class=\"badge bg-success-soft text-success ms-auto\">New</span>
                        </a>
                        
                        <a href=\"#\" 
                           class=\"list-group-item list-group-item-action d-flex align-items-center py-3 px-4 rounded-3\">
                            <div class=\"icon-shape bg-info-soft text-info rounded-3 p-2 me-3\">
                                <i class=\"bi bi-chat-dots\"></i>
                            </div>
                            <div>
                                <h6 class=\"mb-0\">Chat Support</h6>
                                <small class=\"text-muted\">Message your therapist</small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    :root {
        --primary: #6366f1;
        --success: #22c55e;
        --warning: #f59e0b;
        --info: #3b82f6;
        --soft-bg: #f8f9fc;
    }

    .hero-section {
        background: linear-gradient(135deg, var(--primary) 0%, #4f46e5 100%);
    }

    .stat-card {
        transition: all 0.3s ease;
        border-radius: 1rem;
        background: white;
    }

    .hover-lift:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1)!important;
    }

    .icon-shape {
        width: 48px;
        height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .progress-tracker {
        background: var(--soft-bg);
        padding: 1.5rem;
        border-radius: 1rem;
    }

    .activity-card {
        border-radius: 1rem;
        transition: all 0.3s ease;
    }

    .list-group-item {
        border: none;
        background: transparent;
        transition: all 0.3s ease;
    }

    .list-group-item:hover {
        background: var(--soft-bg);
    }

    .bg-soft-primary { background-color: rgba(99, 102, 241, 0.1); }
    .bg-soft-success { background-color: rgba(34, 197, 94, 0.1); }
    .bg-soft-warning { background-color: rgba(245, 158, 11, 0.1); }
    .bg-soft-info { background-color: rgba(59, 130, 246, 0.1); }
</style>
{% endblock %}", "patient/home_activite.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\patient\\home_activite.html.twig");
    }
}
