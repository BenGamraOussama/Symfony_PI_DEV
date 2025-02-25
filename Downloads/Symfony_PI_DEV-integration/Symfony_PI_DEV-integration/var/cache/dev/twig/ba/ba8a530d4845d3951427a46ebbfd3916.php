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
                <h2>Courses (Three in Row)</h2>
                <ul>
                    <li>
                        <a href=\"index.html\">Home</a>
                    </li>
                    <li>Courses (3 in Row)</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Courses Area -->
    <section class=\"courses-area ptb-100\">
        <div class=\"container\">
            <div class=\"psylo-grid-sorting row align-items-center\">
                <div class=\"col-lg-6 col-md-6 result-count\">
                    <p>We found <span class=\"count\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 49, $this->source); })()), "getTotalItemCount", [], "method", false, false, false, 49), "html", null, true);
        yield "</span> courses available for you</p>
                </div>

                <div class=\"col-lg-6 col-md-6 ordering\">
                    <div class=\"select-box\">
                        <label>Sort By:</label>
                        <select>
                            <option>Default</option>
                            <option>Popularity</option>
                            <option>Latest</option>
                            <option>Price: low to high</option>
                            <option>Price: high to low</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 68
            yield "                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-courses-box\">
                            <div class=\"courses-image\">
                                <a href=\"courses-details.html\">
                                    <img src=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 72))), "html", null, true);
            yield "\" alt=\"image\">
                                </a>
                                <div class=\"price\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 74), "html", null, true);
            yield " €</div>
                            </div>
                            <div class=\"courses-content\">
                                <div class=\"course-author d-flex align-items-center\">
                                </div>
                                <h3>
                                    <a href=\"courses-details.html\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 80), "html", null, true);
            yield "</a>
                                </h3>
                                <p>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 82), "html", null, true);
            yield "</p>
                                <ul class=\"courses-box-footer d-flex justify-content-between align-items-center\">
                                    <li>
                                        <i class='bx bxs-book'></i> ";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponible", [], "any", false, false, false, 85), "html", null, true);
            yield "
                                        <button class=\"btn btn-outline-primary\">commander</button>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show_patient", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            yield "\">Voir les détails</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "            </div>

            <div class=\"pagination\">
                ";
        // line 99
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 99, $this->source); })()));
        yield "
            </div>
        </div>
    </section>
    <!-- End Courses Area -->

    <!-- Start Subscribe Area -->
    <div class=\"subscribe-area bg-top\">
        <div class=\"container\">
            <div class=\"subscribe-inner-box\">
                <div class=\"subscribe-content\">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua.</p>

                    <form class=\"newsletter-form\" data-bs-toggle=\"validator\">
                        <div class=\"row\">
                            <div class=\"col-lg-8 col-md-6\">
                                <input type=\"email\" class=\"input-newsletter\" placeholder=\"Enter your email\" name=\"EMAIL\" required=\"\" autocomplete=\"off\">
                            </div>

                            <div class=\"col-lg-4 col-md-6\">
                                <button type=\"submit\">Subscribe Now <i class=\"flaticon-paper-plane\"></i></button>
                                <div id=\"validator-newsletter\" class=\"form-result\"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subscribe Area -->

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
        return array (  204 => 99,  199 => 96,  186 => 89,  179 => 85,  173 => 82,  168 => 80,  159 => 74,  154 => 72,  148 => 68,  144 => 67,  123 => 49,  76 => 4,  63 => 3,  40 => 1,);
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
                <h2>Courses (Three in Row)</h2>
                <ul>
                    <li>
                        <a href=\"index.html\">Home</a>
                    </li>
                    <li>Courses (3 in Row)</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Courses Area -->
    <section class=\"courses-area ptb-100\">
        <div class=\"container\">
            <div class=\"psylo-grid-sorting row align-items-center\">
                <div class=\"col-lg-6 col-md-6 result-count\">
                    <p>We found <span class=\"count\">{{ pagination.getTotalItemCount() }}</span> courses available for you</p>
                </div>

                <div class=\"col-lg-6 col-md-6 ordering\">
                    <div class=\"select-box\">
                        <label>Sort By:</label>
                        <select>
                            <option>Default</option>
                            <option>Popularity</option>
                            <option>Latest</option>
                            <option>Price: low to high</option>
                            <option>Price: high to low</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                {% for produit in pagination %}
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-courses-box\">
                            <div class=\"courses-image\">
                                <a href=\"courses-details.html\">
                                    <img src=\"{{ asset('uploads/' ~ produit.image) }}\" alt=\"image\">
                                </a>
                                <div class=\"price\">{{ produit.prix }} €</div>
                            </div>
                            <div class=\"courses-content\">
                                <div class=\"course-author d-flex align-items-center\">
                                </div>
                                <h3>
                                    <a href=\"courses-details.html\">{{ produit.nom }}</a>
                                </h3>
                                <p>{{ produit.description }}</p>
                                <ul class=\"courses-box-footer d-flex justify-content-between align-items-center\">
                                    <li>
                                        <i class='bx bxs-book'></i> {{ produit.disponible }}
                                        <button class=\"btn btn-outline-primary\">commander</button>
                                    </li>
                                    <li>
                                        <a href=\"{{ path('produit_show_patient', {'id': produit.id}) }}\">Voir les détails</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>

            <div class=\"pagination\">
                {{ knp_pagination_render(pagination) }}
            </div>
        </div>
    </section>
    <!-- End Courses Area -->

    <!-- Start Subscribe Area -->
    <div class=\"subscribe-area bg-top\">
        <div class=\"container\">
            <div class=\"subscribe-inner-box\">
                <div class=\"subscribe-content\">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua.</p>

                    <form class=\"newsletter-form\" data-bs-toggle=\"validator\">
                        <div class=\"row\">
                            <div class=\"col-lg-8 col-md-6\">
                                <input type=\"email\" class=\"input-newsletter\" placeholder=\"Enter your email\" name=\"EMAIL\" required=\"\" autocomplete=\"off\">
                            </div>

                            <div class=\"col-lg-4 col-md-6\">
                                <button type=\"submit\">Subscribe Now <i class=\"flaticon-paper-plane\"></i></button>
                                <div id=\"validator-newsletter\" class=\"form-result\"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Subscribe Area -->

{% endblock %}
", "produit/index_patient.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\produit\\index_patient.html.twig");
    }
}
