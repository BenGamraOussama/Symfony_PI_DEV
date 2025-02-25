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
            'footer' => [$this, 'block_footer'],
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
                        <input type=\"text\" class=\"input-search\" placeholder=\"Rechercher ici...\">
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
                <h2>Produits</h2>
                <ul>
                    <li><a href=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index_patient");
        yield "\">Accueil</a></li>
                    <li>Produits</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Products Area -->
    <section class=\"products-area ptb-100\">
        <div class=\"container\">
            <div class=\"psylo-grid-sorting row align-items-center\">
                <div class=\"col-lg-6 col-md-6 result-count\">
                    <p>Nous avons trouvé <span class=\"count\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 47, $this->source); })())), "html", null, true);
        yield "</span> produits disponibles</p>
                </div>

                <div class=\"col-lg-6 col-md-6 ordering\">
                    <div class=\"select-box\">
                        <label>Trier par :</label>
                        <select>
                            <option>Par défaut</option>
                            <option>Popularité</option>
                            <option>Prix : bas au haut</option>
                            <option>Prix : haut au bas</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 65
            yield "                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-product-box\">
                            <div class=\"product-image\">
                                <a href=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\">
                                    <img src=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 69))), "html", null, true);
            yield "\" alt=\"image\">
                                </a>
                                <div class=\"price\">";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 71), "html", null, true);
            yield " €</div>
                            </div>
                            <div class=\"product-content\">
                                <h3>
                                    <a href=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 75), "html", null, true);
            yield "</a>
                                </h3>

                                <!-- Display Quantity and Availability -->
                                <div class=\"product-info\">
                                    <button class=\"btn btn-sm btn-outline-secondary\">Quantité: ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponible", [], "any", false, false, false, 80), "html", null, true);
            yield "</button>
                                    <button class=\"btn btn-sm ";
            // line 81
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponible", [], "any", false, false, false, 81) > 0)) ? ("btn-success") : ("btn-danger"));
            yield "\">
                                        ";
            // line 82
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponible", [], "any", false, false, false, 82) > 0)) ? ("Disponible") : ("Indisponible"));
            yield "
                                    </button>
                                </div>

                                <!-- Command Button and Description Link -->
                                <div class=\"product-actions mt-2\">
                                    ";
            // line 88
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponible", [], "any", false, false, false, 88) > 0)) {
                // line 89
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_add_ligne_de_commande", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 89)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-block\">Commander</a>
                                    ";
            } else {
                // line 91
                yield "                                        <button class=\"btn btn-outline-secondary btn-block\" disabled>Épuisé</button>
                                    ";
            }
            // line 93
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            yield "\" class=\"btn btn-link\">Voir plus de détails</a>
                                </div>

                                <!-- Add to Cart Button with Cart Icon -->
                                <div class=\"add-to-cart mt-2 text-center\">
                                    <button class=\"btn btn-warning add-to-cart-btn\" data-id=\"";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 98), "html", null, true);
            yield "\">
                                        <i class=\"fas fa-cart-plus\"></i> Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "            </div>

            <div class=\"navigation\" style=\"margin-top: 40px\">
                ";
        // line 109
        yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 109, $this->source); })()));
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

    // line 116
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 117
        yield "    <!-- Start Footer Area -->
    <footer class=\"footer-area\">
        <div class=\"container\">
            <div class=\"footer-logo\">
                <a href=\"#\">My Shop</a>
            </div>

            <!-- Panier icône -->
            <div class=\"cart-icon\">
                <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier");
        yield "\">
                    <i class=\"fas fa-shopping-cart\"></i>
                    <span class=\"cart-counter\">0</span> <!-- Le nombre d'articles sera mis à jour par JS -->
                </a>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            document.querySelectorAll(\".add-to-cart-btn\").forEach(button => {
                button.addEventListener(\"click\", function() {
                    let productId = this.getAttribute(\"data-id\");

                    fetch(\"";
        // line 141
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_panier_ajouter");
        yield "\", {
                        method: \"POST\",
                        headers: {
                            \"Content-Type\": \"application/json\",
                            \"X-Requested-With\": \"XMLHttpRequest\"
                        },
                        body: JSON.stringify({ id: productId })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            let cartCounter = document.querySelector(\".cart-counter\");
                            if (cartCounter) {
                                cartCounter.textContent = data.total; // Met à jour le compteur d'articles
                            }
                            alert(\"Produit ajouté au panier !\");
                        } else {
                            alert(\"Erreur lors de l'ajout au panier.\");
                        }
                    })
                    .catch(error => {
                        console.error(\"Erreur :\", error);
                        alert(\"Une erreur s'est produite. Veuillez réessayer.\");
                    });
                });
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
        return array (  296 => 141,  278 => 126,  267 => 117,  254 => 116,  237 => 109,  232 => 106,  218 => 98,  209 => 93,  205 => 91,  199 => 89,  197 => 88,  188 => 82,  184 => 81,  180 => 80,  170 => 75,  163 => 71,  158 => 69,  154 => 68,  149 => 65,  145 => 64,  125 => 47,  109 => 34,  77 => 4,  64 => 3,  41 => 1,);
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
                        <input type=\"text\" class=\"input-search\" placeholder=\"Rechercher ici...\">
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
                <h2>Produits</h2>
                <ul>
                    <li><a href=\"{{ path('produit_index_patient') }}\">Accueil</a></li>
                    <li>Produits</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Start Products Area -->
    <section class=\"products-area ptb-100\">
        <div class=\"container\">
            <div class=\"psylo-grid-sorting row align-items-center\">
                <div class=\"col-lg-6 col-md-6 result-count\">
                    <p>Nous avons trouvé <span class=\"count\">{{ produits|length }}</span> produits disponibles</p>
                </div>

                <div class=\"col-lg-6 col-md-6 ordering\">
                    <div class=\"select-box\">
                        <label>Trier par :</label>
                        <select>
                            <option>Par défaut</option>
                            <option>Popularité</option>
                            <option>Prix : bas au haut</option>
                            <option>Prix : haut au bas</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                {% for produit in produits %}
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-product-box\">
                            <div class=\"product-image\">
                                <a href=\"{{ path('produit_show', {'id': produit.id}) }}\">
                                    <img src=\"{{ asset('uploads/' ~ produit.image) }}\" alt=\"image\">
                                </a>
                                <div class=\"price\">{{ produit.prix }} €</div>
                            </div>
                            <div class=\"product-content\">
                                <h3>
                                    <a href=\"{{ path('produit_show', {'id': produit.id}) }}\">{{ produit.nom }}</a>
                                </h3>

                                <!-- Display Quantity and Availability -->
                                <div class=\"product-info\">
                                    <button class=\"btn btn-sm btn-outline-secondary\">Quantité: {{ produit.disponible }}</button>
                                    <button class=\"btn btn-sm {{ produit.disponible > 0 ? 'btn-success' : 'btn-danger' }}\">
                                        {{ produit.disponible > 0 ? 'Disponible' : 'Indisponible' }}
                                    </button>
                                </div>

                                <!-- Command Button and Description Link -->
                                <div class=\"product-actions mt-2\">
                                    {% if produit.disponible > 0 %}
                                        <a href=\"{{ path('app_commande_add_ligne_de_commande', {'id': produit.id}) }}\" class=\"btn btn-primary btn-block\">Commander</a>
                                    {% else %}
                                        <button class=\"btn btn-outline-secondary btn-block\" disabled>Épuisé</button>
                                    {% endif %}
                                    <a href=\"{{ path('produit_show', {'id': produit.id}) }}\" class=\"btn btn-link\">Voir plus de détails</a>
                                </div>

                                <!-- Add to Cart Button with Cart Icon -->
                                <div class=\"add-to-cart mt-2 text-center\">
                                    <button class=\"btn btn-warning add-to-cart-btn\" data-id=\"{{ produit.id }}\">
                                        <i class=\"fas fa-cart-plus\"></i> Ajouter au panier
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>

            <div class=\"navigation\" style=\"margin-top: 40px\">
                {{ knp_pagination_render(produits) }}
            </div>
        </div>
    </section>
    <!-- End Products Area -->
{% endblock %}

{% block footer %}
    <!-- Start Footer Area -->
    <footer class=\"footer-area\">
        <div class=\"container\">
            <div class=\"footer-logo\">
                <a href=\"#\">My Shop</a>
            </div>

            <!-- Panier icône -->
            <div class=\"cart-icon\">
                <a href=\"{{ path('app_panier') }}\">
                    <i class=\"fas fa-shopping-cart\"></i>
                    <span class=\"cart-counter\">0</span> <!-- Le nombre d'articles sera mis à jour par JS -->
                </a>
            </div>
        </div>
    </footer>
    <!-- End Footer Area -->

    <script>
        document.addEventListener(\"DOMContentLoaded\", function() {
            document.querySelectorAll(\".add-to-cart-btn\").forEach(button => {
                button.addEventListener(\"click\", function() {
                    let productId = this.getAttribute(\"data-id\");

                    fetch(\"{{ path('app_panier_ajouter') }}\", {
                        method: \"POST\",
                        headers: {
                            \"Content-Type\": \"application/json\",
                            \"X-Requested-With\": \"XMLHttpRequest\"
                        },
                        body: JSON.stringify({ id: productId })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            let cartCounter = document.querySelector(\".cart-counter\");
                            if (cartCounter) {
                                cartCounter.textContent = data.total; // Met à jour le compteur d'articles
                            }
                            alert(\"Produit ajouté au panier !\");
                        } else {
                            alert(\"Erreur lors de l'ajout au panier.\");
                        }
                    })
                    .catch(error => {
                        console.error(\"Erreur :\", error);
                        alert(\"Une erreur s'est produite. Veuillez réessayer.\");
                    });
                });
            });
        });
    </script>
{% endblock %}
", "produit/index_patient.html.twig", "C:\\Users\\Lenovo\\Downloads\\Symfony_PI_DEV-integration\\Symfony_PI_DEV-integration\\templates\\produit\\index_patient.html.twig");
    }
}
