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
class __TwigTemplate_e99ca4371eca77b90c9ed19ec5074f48 extends Template
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
                    <form method=\"get\" action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index");
        yield "\">
                        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher un produit...\" value=\"";
        // line 19
        yield (((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 19, $this->source); })())) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 19, $this->source); })()), "html", null, true)) : (""));
        yield "\">

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
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index_patient");
        yield "\">Accueil</a></li>
                    <li>Produits</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Banner Area -->

    <!-- Affichage du message d'erreur si la recherche ne retourne aucun produit -->
    ";
        // line 44
        if ((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 44, $this->source); })())) {
            // line 45
            yield "        <div class=\"alert alert-warning\">
            ";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 46, $this->source); })()), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 49
        yield "
    <!-- Start Products Area -->
    <section class=\"products-area ptb-100\">
        <div class=\"container\">
            <div class=\"psylo-grid-sorting row align-items-center\">
                <div class=\"col-lg-6 col-md-6 result-count\">
                    <p>Nous avons trouvé <span class=\"count\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 55, $this->source); })())), "html", null, true);
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
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 73
            yield "                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-product-box\">
                            <div class=\"product-image\">
                                <a href=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\">
                                    <img src=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 77))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 77), "html", null, true);
            yield "\">
                                </a>
                                <div class=\"price\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 79), "html", null, true);
            yield " €</div>
                            </div>
                            <div class=\"product-content\">
                                <h3>
                                    <a href=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 83), "html", null, true);
            yield "</a>
                                </h3>

                                <!-- Display Quantity and Availability -->
                                <div class=\"product-info\">
                                    <button class=\"btn btn-sm btn-outline-secondary\">Quantité: ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponible", [], "any", false, false, false, 88), "html", null, true);
            yield "</button>
                                    <button class=\"btn btn-sm ";
            // line 89
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponible", [], "any", false, false, false, 89) > 0)) ? ("btn-success") : ("btn-danger"));
            yield "\">
                                        ";
            // line 90
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponible", [], "any", false, false, false, 90) > 0)) ? ("Disponible") : ("Indisponible"));
            yield "
                                    </button>
                                </div>

                                <!-- Command Button and Description Link -->
                                <div class=\"product-actions mt-2\">
                                    ";
            // line 96
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "disponible", [], "any", false, false, false, 96) > 0)) {
                // line 97
                yield "                                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_add_ligne_de_commande", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-block\">Commander</a>
                                    ";
            } else {
                // line 99
                yield "                                        <button class=\"btn btn-outline-secondary btn-block\" disabled>Épuisé</button>
                                    ";
            }
            // line 101
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 101)]), "html", null, true);
            yield "\" class=\"btn btn-link\">Voir plus de détails</a>
                                </div>

                                <!-- Add to Cart Button with Cart Icon -->
                                <div class=\"add-to-cart mt-2 text-center\">
                                    <button class=\"btn btn-warning add-to-cart-btn\" data-id=\"";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 106), "html", null, true);
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
        // line 115
        yield "            </div>
        </div>
    </section>
    <!-- End Products Area -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 122
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

        // line 123
        yield "    <!-- Start Footer Area -->
    <footer class=\"footer-area\">
        <div class=\"container\">
            <div class=\"footer-logo\">
                <a href=\"";
        // line 127
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("produit_index_patient");
        yield "\">My Shop</a>
            </div>

            <!-- Cart Icon in Footer -->
            <div class=\"cart-icon\">
                <a href=\"";
        // line 132
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
        // line 147
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
        return array (  318 => 147,  300 => 132,  292 => 127,  286 => 123,  273 => 122,  257 => 115,  242 => 106,  233 => 101,  229 => 99,  223 => 97,  221 => 96,  212 => 90,  208 => 89,  204 => 88,  194 => 83,  187 => 79,  180 => 77,  176 => 76,  171 => 73,  167 => 72,  147 => 55,  139 => 49,  133 => 46,  130 => 45,  128 => 44,  116 => 35,  97 => 19,  93 => 18,  77 => 4,  64 => 3,  41 => 1,);
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
                    <form method=\"get\" action=\"{{ path('produit_index') }}\">
                        <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"Rechercher un produit...\" value=\"{{ search ? search : '' }}\">

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

    <!-- Affichage du message d'erreur si la recherche ne retourne aucun produit -->
    {% if message %}
        <div class=\"alert alert-warning\">
            {{ message }}
        </div>
    {% endif %}

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
                                    <img src=\"{{ asset('uploads/' ~ produit.image) }}\" alt=\"{{ produit.nom }}\">
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
        </div>
    </section>
    <!-- End Products Area -->

{% endblock %}

{% block footer %}
    <!-- Start Footer Area -->
    <footer class=\"footer-area\">
        <div class=\"container\">
            <div class=\"footer-logo\">
                <a href=\"{{ path('produit_index_patient') }}\">My Shop</a>
            </div>

            <!-- Cart Icon in Footer -->
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
