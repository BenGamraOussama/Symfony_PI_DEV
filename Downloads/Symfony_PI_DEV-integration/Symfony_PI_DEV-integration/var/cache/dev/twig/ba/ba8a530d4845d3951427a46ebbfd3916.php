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

/* produit/index_patient.html.twig */
class __TwigTemplate_e8c88e5abcee95bc87d1d319184680f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index_patient.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index_patient.html.twig"));

        $this->parent = $this->loadTemplate("basePatient.html.twig", "produit/index_patient.html.twig", 1);
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
        yield "    <!-- Start Search Layout -->
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
    <div class=\"page-banner-with-full-image\">
        <div class=\"container\">
            <div class=\"page-banner-content-two\">
                <h2>Nos Produits</h2>
                <!-- Message de remise -->
                <p class=\"remise-info\" style=\"color: #ff6347; font-size: 16px;\">
                    Profitez d'une remise de 10% dès que la somme des produits atteint 100 TND !
                </p>
                <ul>
                    <li>
                        <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index_patient");
        yield "\">Accueil</a>
                    </li>
                    <li>Produits</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Formulaire de filtre par prix -->
    <div class=\"container mt-4\">
        <form action=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index_patient");
        yield "\" method=\"GET\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <label for=\"prix_min\">Prix minimum (TND)</label>
                    <input type=\"number\" id=\"prix_min\" name=\"prix_min\" class=\"form-control\" placeholder=\"Prix min\" value=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "get", ["prix_min"], "method", false, false, false, 54), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-4\">
                    <label for=\"prix_max\">Prix maximum (TND)</label>
                    <input type=\"number\" id=\"prix_max\" name=\"prix_max\" class=\"form-control\" placeholder=\"Prix max\" value=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "get", ["prix_max"], "method", false, false, false, 58), "html", null, true);
        yield "\">
                </div>
                <div class=\"col-md-4\">
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"margin-top: 32px;\">Filtrer</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Afficher les messages flash -->
    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "flashes", ["success"], "method", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 69
            yield "        <div class=\"alert alert-success\">
            ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        yield "
    <!-- Start Products Area -->
    <section class=\"courses-area ptb-100\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 79
            yield "                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-courses-box\">
                            <div class=\"courses-image\">
                                <a href=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show_patient", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "\">
                                    <img src=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 83))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 83), "html", null, true);
            yield "\">
                                </a>
                                <div class=\"price\">";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 85), "html", null, true);
            yield " TND</div>
                            </div>
                            <div class=\"courses-content\">
                                <h3>
                                    <a href=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show_patient", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 89), "html", null, true);
            yield "</a>
                                </h3>

                                <ul class=\"courses-box-footer d-flex justify-content-between align-items-center\">
                                    <li>
                                        <i class='bx bxs-book'></i> ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponible", [], "any", false, false, false, 94), "html", null, true);
            yield " en stock
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show_patient", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            yield "\">Voir les détails</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Bouton \"Ajouter au panier\" -->
                            <form action=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_panier", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            yield "\" method=\"POST\">
                                <input type=\"number\" name=\"quantite\" value=\"1\" min=\"1\" max=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponible", [], "any", false, false, false, 104), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-shopping-cart\"></i> Ajouter au panier
                                </button>
                            </form>

                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "            </div>

            <div class=\"pagination\">
                ";
        // line 116
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 116, $this->source); })()));
        yield "
            </div>
        </div>
    </section>
    <!-- End Products Area -->

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
        return "produit/index_patient.html.twig";
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
        return array (  253 => 116,  248 => 113,  233 => 104,  229 => 103,  220 => 97,  214 => 94,  204 => 89,  197 => 85,  190 => 83,  186 => 82,  181 => 79,  177 => 78,  170 => 73,  161 => 70,  158 => 69,  154 => 68,  141 => 58,  134 => 54,  127 => 50,  113 => 39,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePatient.html.twig' %}

{% block body %}
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
    <div class=\"page-banner-with-full-image\">
        <div class=\"container\">
            <div class=\"page-banner-content-two\">
                <h2>Nos Produits</h2>
                <!-- Message de remise -->
                <p class=\"remise-info\" style=\"color: #ff6347; font-size: 16px;\">
                    Profitez d'une remise de 10% dès que la somme des produits atteint 100 TND !
                </p>
                <ul>
                    <li>
                        <a href=\"{{ path('produit_index_patient') }}\">Accueil</a>
                    </li>
                    <li>Produits</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Formulaire de filtre par prix -->
    <div class=\"container mt-4\">
        <form action=\"{{ path('produit_index_patient') }}\" method=\"GET\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    <label for=\"prix_min\">Prix minimum (TND)</label>
                    <input type=\"number\" id=\"prix_min\" name=\"prix_min\" class=\"form-control\" placeholder=\"Prix min\" value=\"{{ app.request.get('prix_min') }}\">
                </div>
                <div class=\"col-md-4\">
                    <label for=\"prix_max\">Prix maximum (TND)</label>
                    <input type=\"number\" id=\"prix_max\" name=\"prix_max\" class=\"form-control\" placeholder=\"Prix max\" value=\"{{ app.request.get('prix_max') }}\">
                </div>
                <div class=\"col-md-4\">
                    <button type=\"submit\" class=\"btn btn-primary\" style=\"margin-top: 32px;\">Filtrer</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Afficher les messages flash -->
    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}

    <!-- Start Products Area -->
    <section class=\"courses-area ptb-100\">
        <div class=\"container\">
            <div class=\"row\">
                {% for produit in pagination %}
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-courses-box\">
                            <div class=\"courses-image\">
                                <a href=\"{{ path('produit_show_patient', {'id': produit.id}) }}\">
                                    <img src=\"{{ asset('uploads/' ~ produit.image) }}\" alt=\"{{ produit.nom }}\">
                                </a>
                                <div class=\"price\">{{ produit.prix }} TND</div>
                            </div>
                            <div class=\"courses-content\">
                                <h3>
                                    <a href=\"{{ path('produit_show_patient', {'id': produit.id}) }}\">{{ produit.nom }}</a>
                                </h3>

                                <ul class=\"courses-box-footer d-flex justify-content-between align-items-center\">
                                    <li>
                                        <i class='bx bxs-book'></i> {{ produit.disponible }} en stock
                                    </li>
                                    <li>
                                        <a href=\"{{ path('produit_show_patient', {'id': produit.id}) }}\">Voir les détails</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Bouton \"Ajouter au panier\" -->
                            <form action=\"{{ path('ajouter_panier', {'id': produit.id}) }}\" method=\"POST\">
                                <input type=\"number\" name=\"quantite\" value=\"1\" min=\"1\" max=\"{{ produit.disponible }}\">
                                <button type=\"submit\" class=\"btn btn-primary\">
                                    <i class=\"fas fa-shopping-cart\"></i> Ajouter au panier
                                </button>
                            </form>

                        </div>
                    </div>
                {% endfor %}
            </div>

            <div class=\"pagination\">
                {{ knp_pagination_render(pagination) }}
            </div>
        </div>
    </section>
    <!-- End Products Area -->

{% endblock %}
", "produit/index_patient.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\produit\\index_patient.html.twig");
    }
}
