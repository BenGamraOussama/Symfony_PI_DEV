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

/* home/index.html.twig */
class __TwigTemplate_3c6f5f701933a907dd2807b3b6822849 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("basePatient.html.twig", "home/index.html.twig", 1);
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

        yield "Hello HomeController!";
        
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
        <div class=\"header-information\">Header Information</div>
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
        
        <!-- Start Main Banner Area -->
        <div class=\"main-banner-area\">
            <div class=\"main-banner-item\">
                <div class=\"container\">
                    <div class=\"main-banner-content\">
                        <h1>An Extraordinary Life Starts With <span>Selfcare</span></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.</p>
    
                        <div class=\"banner-btn\">
                            <a href=\"online-booking.html\" class=\"default-btn\">Book Online Session <i class=\"flaticon-pointer\"></i></a>
                            <a href=\"services.html\" class=\"optional-btn\">Our Services <i class=\"flaticon-repairing-service\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

        <!-- Start Features Area -->
        <section class=\"features-area pb-70\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features\">
                            <div class=\"features-title\">
                                <i class=\"flaticon-balance\"></i>
                                <h3><a href=\"services-details.html\">Psychology Therapy</a></h3>
                                <span>For Every Kind Of Mental Stress</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features\">
                            <div class=\"features-title\">
                                <i class=\"flaticon-exhausted\"></i>
                                <h3><a href=\"services-details.html\">Restoring Confidence</a></h3>
                                <span>At Every Situation</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features\">
                            <div class=\"features-title\">
                                <i class=\"flaticon-triumph\"></i>
                                <h3><a href=\"services-details.html\">Work Improvements</a></h3>
                                <span>In A Continuous Process</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Area -->

        <!-- Start About Area -->
        <section class=\"about-area pb-100\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"about-main-image\">
                            <img src=\"assetsP/images/about/about-1.jpg\" alt=\"image\">

                            <div class=\"about-shape\">
                                <div class=\"shape-1\">
                                    <img src=\"assetsP/images/about/shape-1.png\" alt=\"image\">
                                </div>

                                <div class=\"shape-2\">
                                    <img src=\"assetsP/images/about/shape-2.png\" alt=\"image\">
                                </div>

                                <div class=\"shape-3\">
                                    <img src=\"assetsP/images/about/shape-3.png\" alt=\"image\">
                                </div>

                                <div class=\"shape-4\">
                                    <img src=\"assetsP/images/about/shape-4.png\" alt=\"image\">
                                </div>

                                <div class=\"shape-5\">
                                    <img src=\"assetsP/images/about/shape-5.png\" alt=\"image\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-6\">
                        <div class=\"about-main-content\">
                            <h3>Know About Us</h3>

                            <div class=\"about-content-image\">
                                <img src=\"assetsP/images/about/about-2.jpg\" alt=\"image\">

                                <h4 class=\"sub-title\">Hanna Emeli</h4>

                                <a href=\"https://www.youtube.com/watch?v=ODfy2YIKS1M\" class=\"video-btn popup-youtube\">
                                    <i class=\"flaticon-play\"></i>
                                </a>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Lorem ipsum dolor sit amet consetetur sadipsy ci ngelapit elitr sed diam nonumy eirmod temp por invidunt ut labore et dolore magna.</p>

                            <div class=\"row\">
                                <div class=\"col-lg-6 col-sm-6\">
                                    <div class=\"about-information\">
                                        <i class=\"flaticon-trophy\"></i>
                                        <h5>25+ Years</h5>
                                        <span>Experience</span>
                                    </div>
                                </div>

                                <div class=\"col-lg-6 col-sm-6\">
                                    <div class=\"about-information\">
                                        <i class=\"flaticon-customer\"></i>
                                        <h5>1K+ Happy</h5>
                                        <span>Clients</span>
                                    </div>
                                </div>
                            </div>

                            <div class=\"about-btn\">
                                <a href=\"about.html\" class=\"default-btn\">More About Us <i class=\"flaticon-user\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"about-main-shape\">
                <img src=\"assetsP/images/about/line-shape.png\" alt=\"image\">
            </div>
        </section>
        <!-- End About Area -->

        <!-- Start Partner Area -->
        <div class=\"partner-area ptb-100\">
            <div class=\"container\">
                <div class=\"partner-slides owl-carousel owl-theme\">
                    <div class=\"single-partner\">
                        <a href=\"about.html\"><img src=\"assetsP/images/partner/partner-1.png\" alt=\"image\"></a>
                    </div>

                    <div class=\"single-partner style-two\">
                        <a href=\"about.html\"><img src=\"assetsP/images/partner/partner-2.png\" alt=\"image\"></a>
                    </div>

                    <div class=\"single-partner\">
                        <a href=\"about.html\"><img src=\"assetsP/images/partner/partner-3.png\" alt=\"image\"></a>
                    </div>

                    <div class=\"single-partner style-two\">
                        <a href=\"about.html\"><img src=\"assetsP/images/partner/partner-4.png\" alt=\"image\"></a>
                    </div>

                    <div class=\"single-partner\">
                        <a href=\"about.html\"><img src=\"assetsP/images/partner/partner-5.png\" alt=\"image\"></a>
                    </div>

                    <div class=\"single-partner style-two\">
                        <a href=\"about.html\"><img src=\"assetsP/images/partner/partner-6.png\" alt=\"image\"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Partner Area -->
        
        <!-- Start Offer Area -->
        <section class=\"offer-area\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"offer-item\">
                            <div class=\"content\">
                                <h2>Services That We Offer</h2>
                            </div>

                            <div class=\"accordion\">
                                <div class=\"accordion-item\">
                                    <div class=\"accordion-title active\">
                                        <i class=\"flaticon-imagination\"></i>
                                        <h3>Teens Consultation</h3>
                                        <span>For Better Development</span>
                                    </div>

                                    <div class=\"accordion-content show\">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a href=\"services-details.html\" class=\"offer-btn\">Read More</a>
                                    </div>
                                </div>

                                <div class=\"accordion-item\">
                                    <div class=\"accordion-title\">
                                        <i class=\"flaticon-introvert\"></i>
                                        <h3>Family Consultation</h3>
                                        <span>For Every Family Problem</span>
                                    </div>

                                    <div class=\"accordion-content\">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a href=\"services-details.html\" class=\"offer-btn\">Read More</a>
                                    </div>
                                </div>

                                <div class=\"accordion-item\">
                                    <div class=\"accordion-title\">
                                        <i class=\"flaticon-anger\"></i>
                                        <h3>One To One Consultation</h3>
                                        <span>For Psychological Problem</span>
                                    </div>

                                    <div class=\"accordion-content\">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a href=\"services-details.html\" class=\"offer-btn\">Read More</a>
                                    </div>
                                </div>

                                <div class=\"accordion-item\">
                                    <div class=\"accordion-title\">
                                        <i class=\"flaticon-bipolar\"></i>
                                        <h3>Couple Therapy</h3>
                                        <span>For Couple Goal</span>
                                    </div>

                                    <div class=\"accordion-content\">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a href=\"services-details.html\" class=\"offer-btn\">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"all-offer-btn\">
                                <a href=\"services.html\" class=\"default-btn\">
                                    Discover All Services 
                                    <i class=\"flaticon-repairing-service\"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-6\">
                        <div class=\"offer-image\">
                            <img src=\"assetsP/images/offer/offer-1.png\" alt=\"image\">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Offer Area -->

        <!-- Start Reviews Area -->
        <section class=\"reviews-area ptb-100\">
            <div class=\"container\">
                <div class=\"row align-items-end\">
                    <div class=\"col-lg-6\">
                        <div class=\"reviews-image\">
                            <img src=\"assetsP/images/reviews/reviews-1.jpg\" alt=\"image\">
                        </div>
                    </div>

                    <div class=\"col-lg-6\">
                        <div class=\"reviews-title\">
                            <h3>Clients Testimonials</h3>
                        </div>

                        <div class=\"reviews-slides\">
                            <div class=\"reviews-feedback\">
                                <div>
                                    <div class=\"item\">
                                        <div class=\"single-feedback\">
                                            <div class=\"icon\">
                                                <i class=\"flaticon-close\"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"single-feedback\">
                                            <div class=\"icon\">
                                                <i class=\"flaticon-close\"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"single-feedback\">
                                            <div class=\"icon\">
                                                <i class=\"flaticon-close\"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"single-feedback\">
                                            <div class=\"icon\">
                                                <i class=\"flaticon-close\"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"single-feedback\">
                                            <div class=\"icon\">
                                                <i class=\"flaticon-close\"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                        </div>
                                    </div>

                                    <div class=\"item\">
                                        <div class=\"single-feedback\">
                                            <div class=\"icon\">
                                                <i class=\"flaticon-close\"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <button class=\"prev-arrow slick-arrow\">
                                    <i class=\"bx bxs-left-arrow\"></i>
                                </button>
                                
                                <button class=\"next-arrow slick-arrow\">
                                    <i class=\"bx bxs-right-arrow\"></i>
                                </button>
                            </div>
                            
                            <div class=\"reviews-thumbnails\">
                                <div>
                                    <div class=\"item\">
                                        <div class=\"title\">
                                            <h3>Sarah Doodi</h3>
                                            <span>Officer</span>
                                        </div>

                                        <div class=\"img-fill\">
                                            <img src=\"assetsP/images/reviews/images-1.jpg\" alt=\"client\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"title\">
                                            <h3>Sadio Finn</h3>
                                            <span>General Director</span>
                                        </div>

                                        <div class=\"img-fill\">
                                            <img src=\"assetsP/images/reviews/images-2.jpg\" alt=\"client\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"title\">
                                            <h3>Tom Olivar</h3>
                                            <span>Course Researcher</span>
                                        </div>

                                        <div class=\"img-fill\">
                                            <img src=\"assetsP/images/reviews/images-3.jpg\" alt=\"client\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"title\">
                                            <h3>James Finn</h3>
                                            <span>Linguistic Mentor</span>
                                        </div>

                                        <div class=\"img-fill\">
                                            <img src=\"assetsP/images/reviews/images-4.jpg\" alt=\"client\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"title\">
                                            <h3>John Lucy</h3>
                                            <span>Lifestyle Inspirer</span>
                                        </div>

                                        <div class=\"img-fill\">
                                            <img src=\"assetsP/images/reviews/images-5.jpg\" alt=\"client\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"title\">
                                            <h3>Sarah Taylor</h3>
                                            <span>Computer Engineer</span>
                                        </div>

                                        <div class=\"img-fill\">
                                            <img src=\"assetsP/images/reviews/images-6.jpg\" alt=\"client\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"reviews-main-shape\">
                <img src=\"assetsP/images/reviews/shape-1.png\" alt=\"image\">
            </div>
        </section>
        <!-- End Reviews Area -->

        <!-- Start Philosophy Area -->
        <section class=\"philosophy-area ptb-100\">
            <div class=\"container\">
                <div class=\"philosophy-slides owl-carousel owl-theme\">
                    <div class=\"philosophy-item\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-lg-6\">
                                <div class=\"philosophy-content\">
                                    <h3>Our Unique Philosophy Guides</h3>
                                    <h4>Slow Down For A Moment</h4>
                                    <p>We have found that when people take the time to slow down for a moment to discover their strengths and develop their self-awareness they are then able to speed up the job search with more accuracy and success.</p>

                                    <div class=\"philosophy-quote\">
                                        <i class=\"flaticon-close\"></i>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class=\"philosophy-btn\">
                                        <a href=\"https://www.youtube.com/watch?v=ODfy2YIKS1M\" class=\"default-btn popup-youtube\">Watch Video <i class=\"flaticon-play\"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6\">
                                <div class=\"philosophy-image\">
                                    <img src=\"assetsP/images/philosophy/philosophy-1.png\" alt=\"image\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"philosophy-item\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-lg-6\">
                                <div class=\"philosophy-content\">
                                    <h3>Our Unique Philosophy Guides</h3>
                                    <h4>Slow Down For A Moment</h4>
                                    <p>We have found that when people take the time to slow down for a moment to discover their strengths and develop their self-awareness they are then able to speed up the job search with more accuracy and success.</p>

                                    <div class=\"philosophy-quote\">
                                        <i class=\"flaticon-close\"></i>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class=\"philosophy-btn\">
                                        <a href=\"https://www.youtube.com/watch?v=ODfy2YIKS1M\" class=\"default-btn popup-youtube\">Watch Video <i class=\"flaticon-play\"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6\">
                                <div class=\"philosophy-image\">
                                    <img src=\"assetsP/images/philosophy/philosophy-2.png\" alt=\"image\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"philosophy-item\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-lg-6\">
                                <div class=\"philosophy-content\">
                                    <h3>Our Unique Philosophy Guides</h3>
                                    <h4>Slow Down For A Moment</h4>
                                    <p>We have found that when people take the time to slow down for a moment to discover their strengths and develop their self-awareness they are then able to speed up the job search with more accuracy and success.</p>

                                    <div class=\"philosophy-quote\">
                                        <i class=\"flaticon-close\"></i>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class=\"philosophy-btn\">
                                        <a href=\"https://www.youtube.com/watch?v=ODfy2YIKS1M\" class=\"default-btn popup-youtube\">Watch Video <i class=\"flaticon-play\"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6\">
                                <div class=\"philosophy-image\">
                                    <img src=\"assetsP/images/philosophy/philosophy-3.png\" alt=\"image\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"philosophy-main-shape\">
                <img src=\"assetsP/images/philosophy/line-shape.png\" alt=\"image\">
            </div>
        </section>
        <!-- End Philosophy Area -->

        <!-- Start Products Area -->
        <section class=\"products-area ptb-100\">
            <div class=\"container-fluid\">
                <div class=\"section-title\">
                    <h2>Buy Your Books Online</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class=\"products-slides owl-carousel owl-theme\">
                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-1.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">Become Confident Everyday</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-2.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">Psychology Is The Best Power</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-3.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">Be The Owner Of Happiness</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-4.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">How To Become Happier</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-5.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">Get Solution Of Every Problem</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-6.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">How To Deal Crisis</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-1.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">Become Confident Everyday</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-2.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">Psychology Is The Best Power</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-3.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">Be The Owner Of Happiness</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-4.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">How To Become Happier</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-5.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">Get Solution Of Every Problem</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-6.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">How To Deal Crisis</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>
                </div>

                <div class=\"book-store-btn\">
                    <a href=\"products-grid.html\" class=\"default-btn\">Visit Book Store <i class=\"flaticon-shopping-cart\"></i></a>
                </div>
            </div>

            <div class=\"products-main-shape\">
                <img src=\"assetsP/images/products/shape-1.png\" alt=\"image\">
            </div>
        </section>
        <!-- End Products Area -->

        <!-- Start Subscribe Area -->
        <div class=\"subscribe-area\">
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

        <!-- Start Blog Area -->
        <section class=\"blog-area pt-100 pb-70\">
            <div class=\"container\">
                <div class=\"section-title\">
                    <h2>Dive Into Our Blog</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-blog\">
                            <div class=\"blog-image\">
                                <a href=\"blog-details.html\"><img src=\"assetsP/images/blog/blog-1.jpg\" alt=\"image\"></a>

                                <div class=\"tag\">13th <span>Jan</span></div>
                            </div>

                            <div class=\"blog-content\">
                                <h3>
                                    <a href=\"blog-details.html\">How To Take A Short Break From The Social Media</a>
                                </h3>
                                <div class=\"blog-btn\">
                                    <a href=\"blog-details.html\" class=\"default-btn\">Read More <i class=\"flaticon-plus\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-blog\">
                            <div class=\"blog-image\">
                                <a href=\"blog-details.html\"><img src=\"assetsP/images/blog/blog-2.jpg\" alt=\"image\"></a>

                                <div class=\"tag\">14th <span>Jan</span></div>
                            </div>

                            <div class=\"blog-content\">
                                <h3>
                                    <a href=\"blog-details.html\">15 Ways To Be Happy Alone and Live A Full Life</a>
                                </h3>
                                <div class=\"blog-btn\">
                                    <a href=\"blog-details.html\" class=\"default-btn\">Read More <i class=\"flaticon-plus\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-blog\">
                            <div class=\"blog-image\">
                                <a href=\"blog-details.html\"><img src=\"assetsP/images/blog/blog-3.jpg\" alt=\"image\"></a>

                                <div class=\"tag\">14th <span>Jan</span></div>
                            </div>

                            <div class=\"blog-content\">
                                <h3>
                                    <a href=\"blog-details.html\">How Does A Psychologist Help To Maintain A Good Mental Health</a>
                                </h3>
                                <div class=\"blog-btn\">
                                    <a href=\"blog-details.html\" class=\"default-btn\">Read More <i class=\"flaticon-plus\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

        <!-- Start Footer Area -->
        
        <!-- End Go Top Area -->
        
        <!-- Jquery Slim JS -->
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
        return "home/index.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'basePatient.html.twig' %}

{% block title %}Hello HomeController!{% endblock %}

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
        <div class=\"header-information\">Header Information</div>
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
        
        <!-- Start Main Banner Area -->
        <div class=\"main-banner-area\">
            <div class=\"main-banner-item\">
                <div class=\"container\">
                    <div class=\"main-banner-content\">
                        <h1>An Extraordinary Life Starts With <span>Selfcare</span></h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam.</p>
    
                        <div class=\"banner-btn\">
                            <a href=\"online-booking.html\" class=\"default-btn\">Book Online Session <i class=\"flaticon-pointer\"></i></a>
                            <a href=\"services.html\" class=\"optional-btn\">Our Services <i class=\"flaticon-repairing-service\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

        <!-- Start Features Area -->
        <section class=\"features-area pb-70\">
            <div class=\"container\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features\">
                            <div class=\"features-title\">
                                <i class=\"flaticon-balance\"></i>
                                <h3><a href=\"services-details.html\">Psychology Therapy</a></h3>
                                <span>For Every Kind Of Mental Stress</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features\">
                            <div class=\"features-title\">
                                <i class=\"flaticon-exhausted\"></i>
                                <h3><a href=\"services-details.html\">Restoring Confidence</a></h3>
                                <span>At Every Situation</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-features\">
                            <div class=\"features-title\">
                                <i class=\"flaticon-triumph\"></i>
                                <h3><a href=\"services-details.html\">Work Improvements</a></h3>
                                <span>In A Continuous Process</span>
                            </div>

                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Features Area -->

        <!-- Start About Area -->
        <section class=\"about-area pb-100\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"about-main-image\">
                            <img src=\"assetsP/images/about/about-1.jpg\" alt=\"image\">

                            <div class=\"about-shape\">
                                <div class=\"shape-1\">
                                    <img src=\"assetsP/images/about/shape-1.png\" alt=\"image\">
                                </div>

                                <div class=\"shape-2\">
                                    <img src=\"assetsP/images/about/shape-2.png\" alt=\"image\">
                                </div>

                                <div class=\"shape-3\">
                                    <img src=\"assetsP/images/about/shape-3.png\" alt=\"image\">
                                </div>

                                <div class=\"shape-4\">
                                    <img src=\"assetsP/images/about/shape-4.png\" alt=\"image\">
                                </div>

                                <div class=\"shape-5\">
                                    <img src=\"assetsP/images/about/shape-5.png\" alt=\"image\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-6\">
                        <div class=\"about-main-content\">
                            <h3>Know About Us</h3>

                            <div class=\"about-content-image\">
                                <img src=\"assetsP/images/about/about-2.jpg\" alt=\"image\">

                                <h4 class=\"sub-title\">Hanna Emeli</h4>

                                <a href=\"https://www.youtube.com/watch?v=ODfy2YIKS1M\" class=\"video-btn popup-youtube\">
                                    <i class=\"flaticon-play\"></i>
                                </a>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p>Lorem ipsum dolor sit amet consetetur sadipsy ci ngelapit elitr sed diam nonumy eirmod temp por invidunt ut labore et dolore magna.</p>

                            <div class=\"row\">
                                <div class=\"col-lg-6 col-sm-6\">
                                    <div class=\"about-information\">
                                        <i class=\"flaticon-trophy\"></i>
                                        <h5>25+ Years</h5>
                                        <span>Experience</span>
                                    </div>
                                </div>

                                <div class=\"col-lg-6 col-sm-6\">
                                    <div class=\"about-information\">
                                        <i class=\"flaticon-customer\"></i>
                                        <h5>1K+ Happy</h5>
                                        <span>Clients</span>
                                    </div>
                                </div>
                            </div>

                            <div class=\"about-btn\">
                                <a href=\"about.html\" class=\"default-btn\">More About Us <i class=\"flaticon-user\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"about-main-shape\">
                <img src=\"assetsP/images/about/line-shape.png\" alt=\"image\">
            </div>
        </section>
        <!-- End About Area -->

        <!-- Start Partner Area -->
        <div class=\"partner-area ptb-100\">
            <div class=\"container\">
                <div class=\"partner-slides owl-carousel owl-theme\">
                    <div class=\"single-partner\">
                        <a href=\"about.html\"><img src=\"assetsP/images/partner/partner-1.png\" alt=\"image\"></a>
                    </div>

                    <div class=\"single-partner style-two\">
                        <a href=\"about.html\"><img src=\"assetsP/images/partner/partner-2.png\" alt=\"image\"></a>
                    </div>

                    <div class=\"single-partner\">
                        <a href=\"about.html\"><img src=\"assetsP/images/partner/partner-3.png\" alt=\"image\"></a>
                    </div>

                    <div class=\"single-partner style-two\">
                        <a href=\"about.html\"><img src=\"assetsP/images/partner/partner-4.png\" alt=\"image\"></a>
                    </div>

                    <div class=\"single-partner\">
                        <a href=\"about.html\"><img src=\"assetsP/images/partner/partner-5.png\" alt=\"image\"></a>
                    </div>

                    <div class=\"single-partner style-two\">
                        <a href=\"about.html\"><img src=\"assetsP/images/partner/partner-6.png\" alt=\"image\"></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Partner Area -->
        
        <!-- Start Offer Area -->
        <section class=\"offer-area\">
            <div class=\"container-fluid\">
                <div class=\"row align-items-center\">
                    <div class=\"col-lg-6\">
                        <div class=\"offer-item\">
                            <div class=\"content\">
                                <h2>Services That We Offer</h2>
                            </div>

                            <div class=\"accordion\">
                                <div class=\"accordion-item\">
                                    <div class=\"accordion-title active\">
                                        <i class=\"flaticon-imagination\"></i>
                                        <h3>Teens Consultation</h3>
                                        <span>For Better Development</span>
                                    </div>

                                    <div class=\"accordion-content show\">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a href=\"services-details.html\" class=\"offer-btn\">Read More</a>
                                    </div>
                                </div>

                                <div class=\"accordion-item\">
                                    <div class=\"accordion-title\">
                                        <i class=\"flaticon-introvert\"></i>
                                        <h3>Family Consultation</h3>
                                        <span>For Every Family Problem</span>
                                    </div>

                                    <div class=\"accordion-content\">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a href=\"services-details.html\" class=\"offer-btn\">Read More</a>
                                    </div>
                                </div>

                                <div class=\"accordion-item\">
                                    <div class=\"accordion-title\">
                                        <i class=\"flaticon-anger\"></i>
                                        <h3>One To One Consultation</h3>
                                        <span>For Psychological Problem</span>
                                    </div>

                                    <div class=\"accordion-content\">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a href=\"services-details.html\" class=\"offer-btn\">Read More</a>
                                    </div>
                                </div>

                                <div class=\"accordion-item\">
                                    <div class=\"accordion-title\">
                                        <i class=\"flaticon-bipolar\"></i>
                                        <h3>Couple Therapy</h3>
                                        <span>For Couple Goal</span>
                                    </div>

                                    <div class=\"accordion-content\">
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        <a href=\"services-details.html\" class=\"offer-btn\">Read More</a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"all-offer-btn\">
                                <a href=\"services.html\" class=\"default-btn\">
                                    Discover All Services 
                                    <i class=\"flaticon-repairing-service\"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-6\">
                        <div class=\"offer-image\">
                            <img src=\"assetsP/images/offer/offer-1.png\" alt=\"image\">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Offer Area -->

        <!-- Start Reviews Area -->
        <section class=\"reviews-area ptb-100\">
            <div class=\"container\">
                <div class=\"row align-items-end\">
                    <div class=\"col-lg-6\">
                        <div class=\"reviews-image\">
                            <img src=\"assetsP/images/reviews/reviews-1.jpg\" alt=\"image\">
                        </div>
                    </div>

                    <div class=\"col-lg-6\">
                        <div class=\"reviews-title\">
                            <h3>Clients Testimonials</h3>
                        </div>

                        <div class=\"reviews-slides\">
                            <div class=\"reviews-feedback\">
                                <div>
                                    <div class=\"item\">
                                        <div class=\"single-feedback\">
                                            <div class=\"icon\">
                                                <i class=\"flaticon-close\"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"single-feedback\">
                                            <div class=\"icon\">
                                                <i class=\"flaticon-close\"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"single-feedback\">
                                            <div class=\"icon\">
                                                <i class=\"flaticon-close\"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"single-feedback\">
                                            <div class=\"icon\">
                                                <i class=\"flaticon-close\"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"single-feedback\">
                                            <div class=\"icon\">
                                                <i class=\"flaticon-close\"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                        </div>
                                    </div>

                                    <div class=\"item\">
                                        <div class=\"single-feedback\">
                                            <div class=\"icon\">
                                                <i class=\"flaticon-close\"></i>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                                        </div>
                                    </div>
                                </div>
                                
                                <button class=\"prev-arrow slick-arrow\">
                                    <i class=\"bx bxs-left-arrow\"></i>
                                </button>
                                
                                <button class=\"next-arrow slick-arrow\">
                                    <i class=\"bx bxs-right-arrow\"></i>
                                </button>
                            </div>
                            
                            <div class=\"reviews-thumbnails\">
                                <div>
                                    <div class=\"item\">
                                        <div class=\"title\">
                                            <h3>Sarah Doodi</h3>
                                            <span>Officer</span>
                                        </div>

                                        <div class=\"img-fill\">
                                            <img src=\"assetsP/images/reviews/images-1.jpg\" alt=\"client\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"title\">
                                            <h3>Sadio Finn</h3>
                                            <span>General Director</span>
                                        </div>

                                        <div class=\"img-fill\">
                                            <img src=\"assetsP/images/reviews/images-2.jpg\" alt=\"client\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"title\">
                                            <h3>Tom Olivar</h3>
                                            <span>Course Researcher</span>
                                        </div>

                                        <div class=\"img-fill\">
                                            <img src=\"assetsP/images/reviews/images-3.jpg\" alt=\"client\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"title\">
                                            <h3>James Finn</h3>
                                            <span>Linguistic Mentor</span>
                                        </div>

                                        <div class=\"img-fill\">
                                            <img src=\"assetsP/images/reviews/images-4.jpg\" alt=\"client\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"title\">
                                            <h3>John Lucy</h3>
                                            <span>Lifestyle Inspirer</span>
                                        </div>

                                        <div class=\"img-fill\">
                                            <img src=\"assetsP/images/reviews/images-5.jpg\" alt=\"client\">
                                        </div>
                                    </div>
                                    
                                    <div class=\"item\">
                                        <div class=\"title\">
                                            <h3>Sarah Taylor</h3>
                                            <span>Computer Engineer</span>
                                        </div>

                                        <div class=\"img-fill\">
                                            <img src=\"assetsP/images/reviews/images-6.jpg\" alt=\"client\">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"reviews-main-shape\">
                <img src=\"assetsP/images/reviews/shape-1.png\" alt=\"image\">
            </div>
        </section>
        <!-- End Reviews Area -->

        <!-- Start Philosophy Area -->
        <section class=\"philosophy-area ptb-100\">
            <div class=\"container\">
                <div class=\"philosophy-slides owl-carousel owl-theme\">
                    <div class=\"philosophy-item\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-lg-6\">
                                <div class=\"philosophy-content\">
                                    <h3>Our Unique Philosophy Guides</h3>
                                    <h4>Slow Down For A Moment</h4>
                                    <p>We have found that when people take the time to slow down for a moment to discover their strengths and develop their self-awareness they are then able to speed up the job search with more accuracy and success.</p>

                                    <div class=\"philosophy-quote\">
                                        <i class=\"flaticon-close\"></i>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class=\"philosophy-btn\">
                                        <a href=\"https://www.youtube.com/watch?v=ODfy2YIKS1M\" class=\"default-btn popup-youtube\">Watch Video <i class=\"flaticon-play\"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6\">
                                <div class=\"philosophy-image\">
                                    <img src=\"assetsP/images/philosophy/philosophy-1.png\" alt=\"image\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"philosophy-item\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-lg-6\">
                                <div class=\"philosophy-content\">
                                    <h3>Our Unique Philosophy Guides</h3>
                                    <h4>Slow Down For A Moment</h4>
                                    <p>We have found that when people take the time to slow down for a moment to discover their strengths and develop their self-awareness they are then able to speed up the job search with more accuracy and success.</p>

                                    <div class=\"philosophy-quote\">
                                        <i class=\"flaticon-close\"></i>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class=\"philosophy-btn\">
                                        <a href=\"https://www.youtube.com/watch?v=ODfy2YIKS1M\" class=\"default-btn popup-youtube\">Watch Video <i class=\"flaticon-play\"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6\">
                                <div class=\"philosophy-image\">
                                    <img src=\"assetsP/images/philosophy/philosophy-2.png\" alt=\"image\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"philosophy-item\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-lg-6\">
                                <div class=\"philosophy-content\">
                                    <h3>Our Unique Philosophy Guides</h3>
                                    <h4>Slow Down For A Moment</h4>
                                    <p>We have found that when people take the time to slow down for a moment to discover their strengths and develop their self-awareness they are then able to speed up the job search with more accuracy and success.</p>

                                    <div class=\"philosophy-quote\">
                                        <i class=\"flaticon-close\"></i>
                                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class=\"philosophy-btn\">
                                        <a href=\"https://www.youtube.com/watch?v=ODfy2YIKS1M\" class=\"default-btn popup-youtube\">Watch Video <i class=\"flaticon-play\"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-6\">
                                <div class=\"philosophy-image\">
                                    <img src=\"assetsP/images/philosophy/philosophy-3.png\" alt=\"image\">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"philosophy-main-shape\">
                <img src=\"assetsP/images/philosophy/line-shape.png\" alt=\"image\">
            </div>
        </section>
        <!-- End Philosophy Area -->

        <!-- Start Products Area -->
        <section class=\"products-area ptb-100\">
            <div class=\"container-fluid\">
                <div class=\"section-title\">
                    <h2>Buy Your Books Online</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class=\"products-slides owl-carousel owl-theme\">
                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-1.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">Become Confident Everyday</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-2.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">Psychology Is The Best Power</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-3.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">Be The Owner Of Happiness</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-4.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">How To Become Happier</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-5.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">Get Solution Of Every Problem</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-6.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">How To Deal Crisis</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-1.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">Become Confident Everyday</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-2.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">Psychology Is The Best Power</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-3.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">Be The Owner Of Happiness</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-4.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">How To Become Happier</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-5.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">Get Solution Of Every Problem</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>

                    <div class=\"products-item\">
                        <div class=\"products-image\">
                            <a href=\"products-details.html\"><img src=\"assetsP/images/products/products-6.jpg\" alt=\"image\"></a>

                            <div class=\"action-btn\">
                                <a href=\"cart.html\" class=\"default-btn\">Add To Cart<i class=\"flaticon-shopping-cart\"></i></a>
                            </div>
                        </div>

                        <div class=\"products-content\">
                            <h3>
                                <a href=\"products-details.html\">How To Deal Crisis</a>
                            </h3>
                            <span>\$140 - \$150</span>
                        </div>
                    </div>
                </div>

                <div class=\"book-store-btn\">
                    <a href=\"products-grid.html\" class=\"default-btn\">Visit Book Store <i class=\"flaticon-shopping-cart\"></i></a>
                </div>
            </div>

            <div class=\"products-main-shape\">
                <img src=\"assetsP/images/products/shape-1.png\" alt=\"image\">
            </div>
        </section>
        <!-- End Products Area -->

        <!-- Start Subscribe Area -->
        <div class=\"subscribe-area\">
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

        <!-- Start Blog Area -->
        <section class=\"blog-area pt-100 pb-70\">
            <div class=\"container\">
                <div class=\"section-title\">
                    <h2>Dive Into Our Blog</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>

                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-blog\">
                            <div class=\"blog-image\">
                                <a href=\"blog-details.html\"><img src=\"assetsP/images/blog/blog-1.jpg\" alt=\"image\"></a>

                                <div class=\"tag\">13th <span>Jan</span></div>
                            </div>

                            <div class=\"blog-content\">
                                <h3>
                                    <a href=\"blog-details.html\">How To Take A Short Break From The Social Media</a>
                                </h3>
                                <div class=\"blog-btn\">
                                    <a href=\"blog-details.html\" class=\"default-btn\">Read More <i class=\"flaticon-plus\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-blog\">
                            <div class=\"blog-image\">
                                <a href=\"blog-details.html\"><img src=\"assetsP/images/blog/blog-2.jpg\" alt=\"image\"></a>

                                <div class=\"tag\">14th <span>Jan</span></div>
                            </div>

                            <div class=\"blog-content\">
                                <h3>
                                    <a href=\"blog-details.html\">15 Ways To Be Happy Alone and Live A Full Life</a>
                                </h3>
                                <div class=\"blog-btn\">
                                    <a href=\"blog-details.html\" class=\"default-btn\">Read More <i class=\"flaticon-plus\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"single-blog\">
                            <div class=\"blog-image\">
                                <a href=\"blog-details.html\"><img src=\"assetsP/images/blog/blog-3.jpg\" alt=\"image\"></a>

                                <div class=\"tag\">14th <span>Jan</span></div>
                            </div>

                            <div class=\"blog-content\">
                                <h3>
                                    <a href=\"blog-details.html\">How Does A Psychologist Help To Maintain A Good Mental Health</a>
                                </h3>
                                <div class=\"blog-btn\">
                                    <a href=\"blog-details.html\" class=\"default-btn\">Read More <i class=\"flaticon-plus\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->

        <!-- Start Footer Area -->
        
        <!-- End Go Top Area -->
        
        <!-- Jquery Slim JS -->
{% endblock %}
", "home/index.html.twig", "C:\\xampp\\htdocs\\symfony_pi_dev (4)\\symfony_pi_dev\\templates\\home\\index.html.twig");
    }
}
