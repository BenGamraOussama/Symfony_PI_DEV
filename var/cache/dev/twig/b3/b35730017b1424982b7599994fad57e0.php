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

/* profile/index.html.twig */
class __TwigTemplate_3385c9deda34e25348f1855de856ed56 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->loadTemplate("basePatient.html.twig", "profile/index.html.twig", 1);
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

        yield "Register";
        
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
        yield "        <!-- Start Preloader Area -->
        <div class=\"preloader-area\">
            <div class=\"spinner\">
                <div class=\"inner\">
                    <div class=\"disc\"></div>
                    <div class=\"disc\"></div>
                    <div class=\"disc\"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Top Header Area -->
        <!-- End Top Header Area -->

        <!-- Start Navbar Area -->
        <!-- End Navbar Area -->
        
        <!-- Start Search Layout -->
        <div class=\"search-overlay\">
            <div class=\"d-table\">
                <div class=\"d-table-cell\">
                    <div class=\"search-overlay-layer\"></div>
                    <div class=\"search-overlay-layer\"></div>
                    <div class=\"search-overlay-layer\"></div>
                    
                    <div class=\"search-overlay-close\">
                        <span class=\"search-overlay-close-line\"></span>
                        <span class=\"search-overlay-close-line\"></span>
                    </div>

                    <div class=\"search-overlay-form\">
                        <form>
                            <input type=\"text\" class=\"input-search\" placeholder=\"Search here...\">
                            <button type=\"submit\"><i class='flaticon-search'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Layout -->
        
        <!-- Start Page Banner Area -->
        <div class=\"page-banner-with-full-image item-bg1\">
            <div class=\"container\">
                <div class=\"page-banner-content-two\">
                    <h2>My Account</h2>
                    <ul>
                        <li>
                            <a href=\"index.html\">Home</a>
                        </li>
                        <li>My Account</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start My Account Area -->
        <section class=\"my-account-area ptb-100\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Modifier mes informations -->
                    <div class=\"col-md-6\">
                        <div class=\"card p-4\">
                            <h4 class=\"mb-3\">Modifier mes informations</h4>
                            <form method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("update_profile"), "html", null, true);
        yield "\">
                                
                                <div class=\"mb-3\">
                                    <label>Genre :</label><br>
                                    <input type=\"radio\" name=\"gender\" value=\"female\" ";
        // line 77
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "gener", [], "any", false, false, false, 77) == "female")) {
            yield "checked";
        }
        yield "> Femme
                                    <input type=\"radio\" name=\"gender\" value=\"male\" ";
        // line 78
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "gener", [], "any", false, false, false, 78) == "male")) {
            yield "checked";
        }
        yield "> Homme
                                </div>
            
                                <div class=\"mb-3\">
                                    <input type=\"text\" class=\"form-control\" name=\"last_name\" value=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 82, $this->source); })()), "lastName", [], "any", false, false, false, 82), "html", null, true);
        yield "\" placeholder=\"Nom\" required>
                                </div>
            
                                <div class=\"mb-3\">
                                    <input type=\"text\" class=\"form-control\" name=\"first_name\" value=\"";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "firstName", [], "any", false, false, false, 86), "html", null, true);
        yield "\" placeholder=\"Prénom\" required>
                                </div>
            
                                <div class=\"mb-3\">
                                    <label>Date de naissance :</label>
                                    <div class=\"d-flex\">
                                        <select class=\"form-select me-2\" name=\"day\" required>
                                            <option value=\"\">Jour</option>
                                            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 95
            yield "                                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 95, $this->source); })()), "birthday", [], "any", false, false, false, 95) == $context["i"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "                                        </select>
                                        <select class=\"form-select me-2\" name=\"month\" required>
                                            <option value=\"\">Mois</option>
                                            ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 101
            yield "                                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 101, $this->source); })()), "birthMonth", [], "any", false, false, false, 101) == $context["i"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                                        </select>
                                        <select class=\"form-select\" name=\"year\" required>
                                            <option value=\"\">Année</option>
                                            ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1950, 2024));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 107
            yield "                                                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 107, $this->source); })()), "birthYear", [], "any", false, false, false, 107) == $context["i"])) {
                yield "selected";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield "</option>
                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "                                        </select>
                                    </div>
                                </div>
            
                                <div class=\"mb-3\">
                                    <input type=\"text\" class=\"form-control\" name=\"locality\" value=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 114, $this->source); })()), "adresse", [], "any", false, false, false, 114), "html", null, true);
        yield "\" placeholder=\"Localité\" required>
                                </div>
            
                                <div class=\"mb-3 d-flex\">
                                    <select class=\"form-select me-2\">
                                        <option>+216</option>
                                    </select>
                                    <input type=\"text\" class=\"form-control\" name=\"phone\" value=\"";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 121, $this->source); })()), "phone", [], "any", false, false, false, 121), "html", null, true);
        yield "\" placeholder=\"Numéro de mobile\" required>
                                </div>
            
                                <div class=\"mb-3\">
                                    <input type=\"email\" class=\"form-control\" value=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "email", [], "any", false, false, false, 125), "html", null, true);
        yield "\" disabled>
                                </div>
            
                                <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
                            </form>
                        </div>
                    </div>
            
                    <!-- Modifier mon mot de passe -->
                    <div class=\"col-md-6\">
                        <div class=\"card p-4\">
                            <h4 class=\"mb-3\">Modifier mon mot de passe</h4>
                            <form method=\"post\" id=\"passwordForm\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("update_password"), "html", null, true);
        yield "\">
                                
                                <div class=\"mb-3\">
                                    <input type=\"password\" class=\"form-control\" name=\"new_password\" placeholder=\"Nouveau mot de passe\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <input type=\"password\" class=\"form-control\" name=\"confirm_password\" placeholder=\"Confirmation du nouveau mot de passe\" required>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                            </form>
                        </div>
                        <div class=\"mt-3\">
                            <form method=\"post\" action=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_patient_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 150, $this->source); })()), "id", [], "any", false, false, false, 150)]), "html", null, true);
        yield "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 151, $this->source); })()), "id", [], "any", false, false, false, 151))), "html", null, true);
        yield "\">
    <button class=\"btn\">Delete</button>
</form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Script pour la validation des mots de passe -->
        <script>
            document.getElementById('passwordForm').addEventListener('submit', function (e) {
                const newPassword = document.querySelector('input[name=\"new_password\"]').value;
                const confirmPassword = document.querySelector('input[name=\"confirm_password\"]').value;
                if (newPassword !== confirmPassword) {
                    e.preventDefault();
                    alert('Les mots de passe ne correspondent pas.');
                }
            });

            // Confirmation avant la suppression du compte
           
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
        return "profile/index.html.twig";
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
        return array (  335 => 151,  331 => 150,  316 => 138,  300 => 125,  293 => 121,  283 => 114,  276 => 109,  261 => 107,  257 => 106,  252 => 103,  237 => 101,  233 => 100,  228 => 97,  213 => 95,  209 => 94,  198 => 86,  191 => 82,  182 => 78,  176 => 77,  169 => 73,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePatient.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
        <!-- Start Preloader Area -->
        <div class=\"preloader-area\">
            <div class=\"spinner\">
                <div class=\"inner\">
                    <div class=\"disc\"></div>
                    <div class=\"disc\"></div>
                    <div class=\"disc\"></div>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Top Header Area -->
        <!-- End Top Header Area -->

        <!-- Start Navbar Area -->
        <!-- End Navbar Area -->
        
        <!-- Start Search Layout -->
        <div class=\"search-overlay\">
            <div class=\"d-table\">
                <div class=\"d-table-cell\">
                    <div class=\"search-overlay-layer\"></div>
                    <div class=\"search-overlay-layer\"></div>
                    <div class=\"search-overlay-layer\"></div>
                    
                    <div class=\"search-overlay-close\">
                        <span class=\"search-overlay-close-line\"></span>
                        <span class=\"search-overlay-close-line\"></span>
                    </div>

                    <div class=\"search-overlay-form\">
                        <form>
                            <input type=\"text\" class=\"input-search\" placeholder=\"Search here...\">
                            <button type=\"submit\"><i class='flaticon-search'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Layout -->
        
        <!-- Start Page Banner Area -->
        <div class=\"page-banner-with-full-image item-bg1\">
            <div class=\"container\">
                <div class=\"page-banner-content-two\">
                    <h2>My Account</h2>
                    <ul>
                        <li>
                            <a href=\"index.html\">Home</a>
                        </li>
                        <li>My Account</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner Area -->

        <!-- Start My Account Area -->
        <section class=\"my-account-area ptb-100\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- Modifier mes informations -->
                    <div class=\"col-md-6\">
                        <div class=\"card p-4\">
                            <h4 class=\"mb-3\">Modifier mes informations</h4>
                            <form method=\"post\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('update_profile') }}\">
                                
                                <div class=\"mb-3\">
                                    <label>Genre :</label><br>
                                    <input type=\"radio\" name=\"gender\" value=\"female\" {% if user.gener == 'female' %}checked{% endif %}> Femme
                                    <input type=\"radio\" name=\"gender\" value=\"male\" {% if user.gener == 'male' %}checked{% endif %}> Homme
                                </div>
            
                                <div class=\"mb-3\">
                                    <input type=\"text\" class=\"form-control\" name=\"last_name\" value=\"{{ user.lastName }}\" placeholder=\"Nom\" required>
                                </div>
            
                                <div class=\"mb-3\">
                                    <input type=\"text\" class=\"form-control\" name=\"first_name\" value=\"{{ user.firstName }}\" placeholder=\"Prénom\" required>
                                </div>
            
                                <div class=\"mb-3\">
                                    <label>Date de naissance :</label>
                                    <div class=\"d-flex\">
                                        <select class=\"form-select me-2\" name=\"day\" required>
                                            <option value=\"\">Jour</option>
                                            {% for i in 1..31 %}
                                                <option value=\"{{ i }}\" {% if user.birthday == i %}selected{% endif %}>{{ i }}</option>
                                            {% endfor %}
                                        </select>
                                        <select class=\"form-select me-2\" name=\"month\" required>
                                            <option value=\"\">Mois</option>
                                            {% for i in 1..12 %}
                                                <option value=\"{{ i }}\" {% if user.birthMonth == i %}selected{% endif %}>{{ i }}</option>
                                            {% endfor %}
                                        </select>
                                        <select class=\"form-select\" name=\"year\" required>
                                            <option value=\"\">Année</option>
                                            {% for i in 1950..2024 %}
                                                <option value=\"{{ i }}\" {% if user.birthYear == i %}selected{% endif %}>{{ i }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
            
                                <div class=\"mb-3\">
                                    <input type=\"text\" class=\"form-control\" name=\"locality\" value=\"{{ user.adresse }}\" placeholder=\"Localité\" required>
                                </div>
            
                                <div class=\"mb-3 d-flex\">
                                    <select class=\"form-select me-2\">
                                        <option>+216</option>
                                    </select>
                                    <input type=\"text\" class=\"form-control\" name=\"phone\" value=\"{{ user.phone }}\" placeholder=\"Numéro de mobile\" required>
                                </div>
            
                                <div class=\"mb-3\">
                                    <input type=\"email\" class=\"form-control\" value=\"{{ user.email }}\" disabled>
                                </div>
            
                                <button type=\"submit\" class=\"btn btn-primary\">Sauvegarder</button>
                            </form>
                        </div>
                    </div>
            
                    <!-- Modifier mon mot de passe -->
                    <div class=\"col-md-6\">
                        <div class=\"card p-4\">
                            <h4 class=\"mb-3\">Modifier mon mot de passe</h4>
                            <form method=\"post\" id=\"passwordForm\">
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('update_password') }}\">
                                
                                <div class=\"mb-3\">
                                    <input type=\"password\" class=\"form-control\" name=\"new_password\" placeholder=\"Nouveau mot de passe\" required>
                                </div>
                                <div class=\"mb-3\">
                                    <input type=\"password\" class=\"form-control\" name=\"confirm_password\" placeholder=\"Confirmation du nouveau mot de passe\" required>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour</button>
                            </form>
                        </div>
                        <div class=\"mt-3\">
                            <form method=\"post\" action=\"{{ path('app_patient_delete', {'id': user.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ user.id) }}\">
    <button class=\"btn\">Delete</button>
</form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Script pour la validation des mots de passe -->
        <script>
            document.getElementById('passwordForm').addEventListener('submit', function (e) {
                const newPassword = document.querySelector('input[name=\"new_password\"]').value;
                const confirmPassword = document.querySelector('input[name=\"confirm_password\"]').value;
                if (newPassword !== confirmPassword) {
                    e.preventDefault();
                    alert('Les mots de passe ne correspondent pas.');
                }
            });

            // Confirmation avant la suppression du compte
           
        </script>
{% endblock %}", "profile/index.html.twig", "C:\\Users\\OUSSAMA BEN GAMRA\\OneDrive\\Desktop\\symfony\\symfony_pi_dev\\templates\\profile\\index.html.twig");
    }
}
