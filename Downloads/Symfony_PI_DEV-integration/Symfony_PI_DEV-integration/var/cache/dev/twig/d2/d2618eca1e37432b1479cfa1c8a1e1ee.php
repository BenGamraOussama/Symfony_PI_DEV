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

/* exercice/show.html.twig */
class __TwigTemplate_65837c38035af4da8e2f753d22501213 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "exercice/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "exercice/show.html.twig", 1);
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
        yield "    <!-- begin app -->
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
                                
                                   
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- Notification -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                               
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                        <div class=\"row\">
                            
<!-- Question and Response Form -->
<div class=\"col-md-8\">
    <div class=\"card mb-4 shadow-sm\">
        <div class=\"card-header bg-info text-white\">
            <h3 class=\"h5 mb-0\">Exercise Question</h3>
        </div>
        <div class=\"card-body\">
            <div class=\"alert alert-light border\">
                ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 59, $this->source); })()), "question", [], "any", false, false, false, 59), "html", null, true);
        yield "
            </div>
            
            ";
        // line 62
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "patient", [], "any", false, false, false, 62))) {
            // line 63
            yield "            <h4 class=\"mt-4\">Your Answer</h4>
            <form method=\"post\" action=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["activite"]) || array_key_exists("activite", $context) ? $context["activite"] : (function () { throw new RuntimeError('Variable "activite" does not exist.', 64, $this->source); })()), "exercice", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64)]), "html", null, true);
            yield "\">
                <div class=\"mb-3\">
                    <textarea class=\"form-control\" name=\"reponse\" 
                              rows=\"4\" placeholder=\"Type your answer here...\" 
                              required ";
            // line 68
            if ((isset($context["hasResponse"]) || array_key_exists("hasResponse", $context) ? $context["hasResponse"] : (function () { throw new RuntimeError('Variable "hasResponse" does not exist.', 68, $this->source); })())) {
                yield "disabled";
            }
            yield "></textarea>
                </div>
                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("response"), "html", null, true);
            yield "\">
                <button type=\"submit\" class=\"btn btn-primary\" ";
            // line 71
            if ((isset($context["hasResponse"]) || array_key_exists("hasResponse", $context) ? $context["hasResponse"] : (function () { throw new RuntimeError('Variable "hasResponse" does not exist.', 71, $this->source); })())) {
                yield "disabled";
            }
            yield ">
                    <i class=\"bi bi-send me-2\"></i>
                    ";
            // line 73
            if ((isset($context["hasResponse"]) || array_key_exists("hasResponse", $context) ? $context["hasResponse"] : (function () { throw new RuntimeError('Variable "hasResponse" does not exist.', 73, $this->source); })())) {
                yield "Response Submitted";
            } else {
                yield "Submit Answer";
            }
            // line 74
            yield "                </button>
            </form>
            ";
        } else {
            // line 77
            yield "            <div class=\"alert alert-warning\">
                You need to be logged in as a patient to submit answers
            </div>
            ";
        }
        // line 81
        yield "        </div>
    </div>
</div>

<!-- Response Statistics -->
<div class=\"col-md-4\">
    <div class=\"card shadow-sm border-primary\">
        <div class=\"card-header bg-primary text-white\">
            <h5 class=\"mb-0\">Response Insights</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"text-center mb-3\">
                <span class=\"display-4\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 93, $this->source); })()), "reponses", [], "any", false, false, false, 93)), "html", null, true);
        yield "</span>
                <p class=\"text-muted mb-0\">Total Responses</p>
            </div>
            <hr>
            <div class=\"list-group\">
                <div class=\"list-group-item d-flex justify-content-between\">
                    <span>Latest Response</span>
                    <strong>
                        ";
        // line 101
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 101, $this->source); })()), "reponses", [], "any", false, false, false, 101)) > 0)) {
            // line 102
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::last($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 102, $this->source); })()), "reponses", [], "any", false, false, false, 102)), "dateCreation", [], "any", false, false, false, 102), "M d, Y"), "html", null, true);
            yield "
                        ";
        } else {
            // line 104
            yield "                            N/A
                        ";
        }
        // line 106
        yield "                    </strong>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Responses List -->
<div class=\"mt-5\">
<h4 class=\"mb-4\">All Responses</h4>
";
        // line 117
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 117, $this->source); })()), "reponses", [], "any", false, false, false, 117)) > 0)) {
            // line 118
            yield "<div class=\"response-list\">
    ";
            // line 119
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["exercice"]) || array_key_exists("exercice", $context) ? $context["exercice"] : (function () { throw new RuntimeError('Variable "exercice" does not exist.', 119, $this->source); })()), "reponses", [], "any", false, false, false, 119)));
            foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
                // line 120
                yield "    <div class=\"card mb-3 shadow-sm\">
        <div class=\"card-body\">
            <div class=\"d-flex justify-content-between align-items-start\">
                <div class=\"w-75\">
                    <p class=\"mb-1\">";
                // line 124
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "contenu", [], "any", false, false, false, 124), "html", null, true);
                yield "</p>
                    <small class=\"text-muted\">
   Answered by ";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "patient", [], "any", false, false, false, 126), "name", [], "any", false, false, false, 126), "html", null, true);
                yield "  ";
                // line 127
                yield " on ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "dateCreation", [], "any", false, false, false, 127), "M d, Y H:i"), "html", null, true);
                yield "
                    </small>
                </div>
                ";
                // line 130
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 131
                    yield "                <div class=\"btn-group\">
                    <form method=\"post\" 
                          action=\"";
                    // line 133
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 133)]), "html", null, true);
                    yield "\"
                          onsubmit=\"return confirm('Are you sure you want to delete this response?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 135
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_response"), "html", null, true);
                    yield "\">
                        <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                            <i class=\"bi bi-trash\"></i>
                        </button>
                    </form>
                </div>
                ";
                }
                // line 142
                yield "            </div>
        </div>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reponse'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            yield "</div>
";
        } else {
            // line 148
            yield "<div class=\"alert alert-info\">
    <i class=\"bi bi-info-circle me-2\"></i>No responses yet
</div>
";
        }
        // line 152
        yield "</div>
</div>
</div>
                       
                        <!-- end row -->
                        <!-- event Modal -->
                        
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
            <footer></footer>
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
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
        return "exercice/show.html.twig";
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
        return array (  328 => 152,  322 => 148,  318 => 146,  309 => 142,  299 => 135,  294 => 133,  290 => 131,  288 => 130,  281 => 127,  278 => 126,  273 => 124,  267 => 120,  263 => 119,  260 => 118,  258 => 117,  245 => 106,  241 => 104,  235 => 102,  233 => 101,  222 => 93,  208 => 81,  202 => 77,  197 => 74,  191 => 73,  184 => 71,  180 => 70,  173 => 68,  166 => 64,  163 => 63,  161 => 62,  155 => 59,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                                
                                   
                                </div>
                                <!-- end page title -->
                            </div>
                        </div>
                        <!-- Notification -->
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                               
                            </div>
                        </div>
                        <!-- end row -->
                        <!-- begin row -->
                        <div class=\"row\">
                            
<!-- Question and Response Form -->
<div class=\"col-md-8\">
    <div class=\"card mb-4 shadow-sm\">
        <div class=\"card-header bg-info text-white\">
            <h3 class=\"h5 mb-0\">Exercise Question</h3>
        </div>
        <div class=\"card-body\">
            <div class=\"alert alert-light border\">
                {{ exercice.question }}
            </div>
            
            {% if app.user and app.user.patient %}
            <h4 class=\"mt-4\">Your Answer</h4>
            <form method=\"post\" action=\"{{ path('app_reponse_new', {'id': activite.exercice.id}) }}\">
                <div class=\"mb-3\">
                    <textarea class=\"form-control\" name=\"reponse\" 
                              rows=\"4\" placeholder=\"Type your answer here...\" 
                              required {% if hasResponse %}disabled{% endif %}></textarea>
                </div>
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('response') }}\">
                <button type=\"submit\" class=\"btn btn-primary\" {% if hasResponse %}disabled{% endif %}>
                    <i class=\"bi bi-send me-2\"></i>
                    {% if hasResponse %}Response Submitted{% else %}Submit Answer{% endif %}
                </button>
            </form>
            {% else %}
            <div class=\"alert alert-warning\">
                You need to be logged in as a patient to submit answers
            </div>
            {% endif %}
        </div>
    </div>
</div>

<!-- Response Statistics -->
<div class=\"col-md-4\">
    <div class=\"card shadow-sm border-primary\">
        <div class=\"card-header bg-primary text-white\">
            <h5 class=\"mb-0\">Response Insights</h5>
        </div>
        <div class=\"card-body\">
            <div class=\"text-center mb-3\">
                <span class=\"display-4\">{{ exercice.reponses|length }}</span>
                <p class=\"text-muted mb-0\">Total Responses</p>
            </div>
            <hr>
            <div class=\"list-group\">
                <div class=\"list-group-item d-flex justify-content-between\">
                    <span>Latest Response</span>
                    <strong>
                        {% if exercice.reponses|length > 0 %}
                            {{ exercice.reponses|last.dateCreation|date('M d, Y') }}
                        {% else %}
                            N/A
                        {% endif %}
                    </strong>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Responses List -->
<div class=\"mt-5\">
<h4 class=\"mb-4\">All Responses</h4>
{% if exercice.reponses|length > 0 %}
<div class=\"response-list\">
    {% for reponse in exercice.reponses|reverse %}
    <div class=\"card mb-3 shadow-sm\">
        <div class=\"card-body\">
            <div class=\"d-flex justify-content-between align-items-start\">
                <div class=\"w-75\">
                    <p class=\"mb-1\">{{ reponse.contenu }}</p>
                    <small class=\"text-muted\">
   Answered by {{ reponse.patient.name }}  {# Added patient name #}
 on {{ reponse.dateCreation|date('M d, Y H:i') }}
                    </small>
                </div>
                {% if is_granted('ROLE_ADMIN') %}
                <div class=\"btn-group\">
                    <form method=\"post\" 
                          action=\"{{ path('app_reponse_delete', {'id': reponse.id}) }}\"
                          onsubmit=\"return confirm('Are you sure you want to delete this response?');\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_response') }}\">
                        <button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">
                            <i class=\"bi bi-trash\"></i>
                        </button>
                    </form>
                </div>
                {% endif %}
            </div>
        </div>
    </div>
    {% endfor %}
</div>
{% else %}
<div class=\"alert alert-info\">
    <i class=\"bi bi-info-circle me-2\"></i>No responses yet
</div>
{% endif %}
</div>
</div>
</div>
                       
                        <!-- end row -->
                        <!-- event Modal -->
                        
                    </div>
                    <!-- end container-fluid -->
                </div>
                <!-- end app-main -->
            </div>
            <!-- end app-container -->
            <!-- begin footer -->
            <footer></footer>
            <!-- end footer -->
        </div>
        <!-- end app-wrap -->
    </div>
    <!-- end app -->

    <!-- plugins -->
{% endblock %}
", "exercice/show.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\exercice\\show.html.twig");
    }
}
