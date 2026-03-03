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

/* home/about.html.twig */
class __TwigTemplate_9a365bb1ac5dc9c4106748d0bae436c9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Our Properties - UrbanStay Luxury Apartment Rental";
        
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
        yield "
  <main class=\"main\">

     <!-- Page Title -->
    <div class=\"page-title light-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">About</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
            <li class=\"current\">About us</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


     <!-- About Section -->
    <section id=\"about\" class=\"about section\">

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"row align-items-center\">
          <div class=\"col-lg-5\">
            <div class=\"image-stack\">
              <div class=\"main-image-wrapper\" data-aos=\"fade-right\" data-aos-delay=\"200\">
                <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/showcase-9.webp"), "html", null, true);
        yield "\" alt=\"Apartment Rental Exterior\" class=\"img-fluid main-image\">
                <div class=\"floating-card\" data-aos=\"zoom-in\" data-aos-delay=\"400\">
                  <div class=\"card-icon\">
                    <i class=\"bi bi-star-fill\"></i>
                  </div>
                  <h6>5-Star Excellence</h6>
                  <p>Rated #1 Luxury Resort</p>
                </div>
              </div>
              <div class=\"secondary-image\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                <img src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/property-8.webp"), "html", null, true);
        yield "\" alt=\"Luxury Suite\" class=\"img-fluid\">
              </div>
            </div>
          </div>

          <div class=\"col-lg-7\">
            <div class=\"content-wrapper\" data-aos=\"fade-left\" data-aos-delay=\"200\">
              <div class=\"badge\">
                <span>Est. 1923</span>
              </div>

              <h2>Where Timeless Elegance Meets Modern Luxury</h2>

              <p class=\"lead\">
              The story of UrbanStay began in 1924, when the visionary architect Julien Grandor converted a historic manor into a boutique retreat for the European elite. His goal was simple yet ambitious: to create a \"Sanctuary of Gold and Earth\" where every guest felt like royalty.
              </p>


              <div class=\"milestone-timeline\">
                <div class=\"milestone-item\" data-aos=\"slide-up\" data-aos-delay=\"250\">
                  <div class=\"milestone-year\">1923</div>
                  <div class=\"milestone-content\">
                    <h5>Grand Opening</h5>
                    <p>Founded as exclusive mountain retreat</p>
                  </div>
                </div>
                <div class=\"milestone-item\" data-aos=\"slide-up\" data-aos-delay=\"300\">
                  <div class=\"milestone-year\">1987</div>
                  <div class=\"milestone-content\">
                    <h5>Major Renovation</h5>
                    <p>Modern amenities while preserving heritage</p>
                  </div>
                </div>
                <div class=\"milestone-item\" data-aos=\"slide-up\" data-aos-delay=\"350\">
                  <div class=\"milestone-year\">2019</div>
                  <div class=\"milestone-content\">
                    <h5>Spa &amp; Wellness</h5>
                    <p>Award-winning wellness center addition</p>
                  </div>
                </div>
              </div>

              <div class=\"action-buttons\">
                <a href=\"#\" class=\"btn-explore\">
                  <i class=\"bi bi-compass\"></i>
                  Explore Our Heritage
                </a>
                <a href=\"https://www.youtube.com/watch?v=Y7f98aduVJ8\" class=\"btn-video glightbox\">
                  <i class=\"bi bi-play-circle\"></i>
                  Watch Story
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class=\"row features-showcase\">
          <div class=\"col-12\">
            <div class=\"features-header text-center\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <h3>Exceptional Hospitality Redefined</h3>
              <p>Discover the amenities and services that make your stay unforgettable</p>
            </div>
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"feature-card\" data-aos=\"flip-up\" data-aos-delay=\"200\">
              <div class=\"feature-visual\">
                <img src=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/amenities-3.webp"), "html", null, true);
        yield "\" alt=\"Spa Services\" class=\"img-fluid\">
                <div class=\"feature-overlay\">
                  <div class=\"feature-icon\">
                    <i class=\"bi bi-flower1\"></i>
                  </div>
                </div>
              </div>
              <div class=\"feature-details\">
                <h4>World-Class Spa</h4>
                <p>Rejuvenating treatments in our award-winning wellness sanctuary</p>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"feature-card\" data-aos=\"flip-up\" data-aos-delay=\"250\">
              <div class=\"feature-visual\">
                <img src=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/dining-4.webp"), "html", null, true);
        yield "\" alt=\"Fine Dining\" class=\"img-fluid\">
                <div class=\"feature-overlay\">
                  <div class=\"feature-icon\">
                    <i class=\"bi bi-cup-hot\"></i>
                  </div>
                </div>
              </div>
              <div class=\"feature-details\">
                <h4>Gourmet Dining</h4>
                <p>Michelin-starred cuisine crafted by renowned executive chefs</p>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"feature-card\" data-aos=\"flip-up\" data-aos-delay=\"300\">
              <div class=\"feature-visual\">
                <img src=\"";
        // line 143
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/location-2.webp"), "html", null, true);
        yield "\" alt=\"Prime Location\" class=\"img-fluid\">
                <div class=\"feature-overlay\">
                  <div class=\"feature-icon\">
                    <i class=\"bi bi-geo-alt\"></i>
                  </div>
                </div>
              </div>
              <div class=\"feature-details\">
                <h4>Prime Location</h4>
                <p>Nestled in the heart of the city with breathtaking panoramic views</p>
              </div>
            </div>
          </div>
        </div>

        <div class=\"row achievements-section\">
          <div class=\"col-lg-8 offset-lg-2\">
            <div class=\"achievements-grid\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"achievement-stat\">
                <div class=\"stat-counter\">
                  <span data-purecounter-start=\"0\" data-purecounter-end=\"236\" data-purecounter-duration=\"2\" class=\"purecounter\"></span>
                </div>
                <div class=\"stat-description\">Luxury Suites</div>
              </div>
              <div class=\"achievement-stat\">
                <div class=\"stat-counter\">
                  <span data-purecounter-start=\"80\" data-purecounter-end=\"96\" data-purecounter-duration=\"2\" class=\"purecounter\"></span>%
                </div>
                <div class=\"stat-description\">Satisfaction Rate</div>
              </div>
              <div class=\"achievement-stat\">
                <div class=\"stat-counter\">
                  <span data-purecounter-start=\"0\" data-purecounter-end=\"15\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                </div>
                <div class=\"stat-description\">International Awards</div>
              </div>
              <div class=\"achievement-stat\">
                <div class=\"stat-counter\">
                  <span data-purecounter-start=\"90\" data-purecounter-end=\"100\" data-purecounter-duration=\"2\" class=\"purecounter\"></span>
                </div>
                <div class=\"stat-description\">Years of Excellence</div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

  </main>
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
        return "home/about.html.twig";
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
        return array (  254 => 143,  235 => 127,  216 => 111,  144 => 42,  131 => 32,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Our Properties - UrbanStay Luxury Apartment Rental{% endblock %}

{% block body %}

  <main class=\"main\">

     <!-- Page Title -->
    <div class=\"page-title light-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">About</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ path('app_home') }}\">Home</a></li>
            <li class=\"current\">About us</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


     <!-- About Section -->
    <section id=\"about\" class=\"about section\">

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"row align-items-center\">
          <div class=\"col-lg-5\">
            <div class=\"image-stack\">
              <div class=\"main-image-wrapper\" data-aos=\"fade-right\" data-aos-delay=\"200\">
                <img src=\"{{ asset('assets/img/apartment rental/showcase-9.webp') }}\" alt=\"Apartment Rental Exterior\" class=\"img-fluid main-image\">
                <div class=\"floating-card\" data-aos=\"zoom-in\" data-aos-delay=\"400\">
                  <div class=\"card-icon\">
                    <i class=\"bi bi-star-fill\"></i>
                  </div>
                  <h6>5-Star Excellence</h6>
                  <p>Rated #1 Luxury Resort</p>
                </div>
              </div>
              <div class=\"secondary-image\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                <img src=\"{{ asset('assets/img/apartment rental/property-8.webp') }}\" alt=\"Luxury Suite\" class=\"img-fluid\">
              </div>
            </div>
          </div>

          <div class=\"col-lg-7\">
            <div class=\"content-wrapper\" data-aos=\"fade-left\" data-aos-delay=\"200\">
              <div class=\"badge\">
                <span>Est. 1923</span>
              </div>

              <h2>Where Timeless Elegance Meets Modern Luxury</h2>

              <p class=\"lead\">
              The story of UrbanStay began in 1924, when the visionary architect Julien Grandor converted a historic manor into a boutique retreat for the European elite. His goal was simple yet ambitious: to create a \"Sanctuary of Gold and Earth\" where every guest felt like royalty.
              </p>


              <div class=\"milestone-timeline\">
                <div class=\"milestone-item\" data-aos=\"slide-up\" data-aos-delay=\"250\">
                  <div class=\"milestone-year\">1923</div>
                  <div class=\"milestone-content\">
                    <h5>Grand Opening</h5>
                    <p>Founded as exclusive mountain retreat</p>
                  </div>
                </div>
                <div class=\"milestone-item\" data-aos=\"slide-up\" data-aos-delay=\"300\">
                  <div class=\"milestone-year\">1987</div>
                  <div class=\"milestone-content\">
                    <h5>Major Renovation</h5>
                    <p>Modern amenities while preserving heritage</p>
                  </div>
                </div>
                <div class=\"milestone-item\" data-aos=\"slide-up\" data-aos-delay=\"350\">
                  <div class=\"milestone-year\">2019</div>
                  <div class=\"milestone-content\">
                    <h5>Spa &amp; Wellness</h5>
                    <p>Award-winning wellness center addition</p>
                  </div>
                </div>
              </div>

              <div class=\"action-buttons\">
                <a href=\"#\" class=\"btn-explore\">
                  <i class=\"bi bi-compass\"></i>
                  Explore Our Heritage
                </a>
                <a href=\"https://www.youtube.com/watch?v=Y7f98aduVJ8\" class=\"btn-video glightbox\">
                  <i class=\"bi bi-play-circle\"></i>
                  Watch Story
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class=\"row features-showcase\">
          <div class=\"col-12\">
            <div class=\"features-header text-center\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <h3>Exceptional Hospitality Redefined</h3>
              <p>Discover the amenities and services that make your stay unforgettable</p>
            </div>
          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"feature-card\" data-aos=\"flip-up\" data-aos-delay=\"200\">
              <div class=\"feature-visual\">
                <img src=\"{{ asset('assets/img/apartment rental/amenities-3.webp') }}\" alt=\"Spa Services\" class=\"img-fluid\">
                <div class=\"feature-overlay\">
                  <div class=\"feature-icon\">
                    <i class=\"bi bi-flower1\"></i>
                  </div>
                </div>
              </div>
              <div class=\"feature-details\">
                <h4>World-Class Spa</h4>
                <p>Rejuvenating treatments in our award-winning wellness sanctuary</p>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"feature-card\" data-aos=\"flip-up\" data-aos-delay=\"250\">
              <div class=\"feature-visual\">
                <img src=\"{{ asset('assets/img/apartment rental/dining-4.webp') }}\" alt=\"Fine Dining\" class=\"img-fluid\">
                <div class=\"feature-overlay\">
                  <div class=\"feature-icon\">
                    <i class=\"bi bi-cup-hot\"></i>
                  </div>
                </div>
              </div>
              <div class=\"feature-details\">
                <h4>Gourmet Dining</h4>
                <p>Michelin-starred cuisine crafted by renowned executive chefs</p>
              </div>
            </div>
          </div>
          <div class=\"col-lg-4 col-md-6\">
            <div class=\"feature-card\" data-aos=\"flip-up\" data-aos-delay=\"300\">
              <div class=\"feature-visual\">
                <img src=\"{{ asset('assets/img/apartment rental/location-2.webp') }}\" alt=\"Prime Location\" class=\"img-fluid\">
                <div class=\"feature-overlay\">
                  <div class=\"feature-icon\">
                    <i class=\"bi bi-geo-alt\"></i>
                  </div>
                </div>
              </div>
              <div class=\"feature-details\">
                <h4>Prime Location</h4>
                <p>Nestled in the heart of the city with breathtaking panoramic views</p>
              </div>
            </div>
          </div>
        </div>

        <div class=\"row achievements-section\">
          <div class=\"col-lg-8 offset-lg-2\">
            <div class=\"achievements-grid\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"achievement-stat\">
                <div class=\"stat-counter\">
                  <span data-purecounter-start=\"0\" data-purecounter-end=\"236\" data-purecounter-duration=\"2\" class=\"purecounter\"></span>
                </div>
                <div class=\"stat-description\">Luxury Suites</div>
              </div>
              <div class=\"achievement-stat\">
                <div class=\"stat-counter\">
                  <span data-purecounter-start=\"80\" data-purecounter-end=\"96\" data-purecounter-duration=\"2\" class=\"purecounter\"></span>%
                </div>
                <div class=\"stat-description\">Satisfaction Rate</div>
              </div>
              <div class=\"achievement-stat\">
                <div class=\"stat-counter\">
                  <span data-purecounter-start=\"0\" data-purecounter-end=\"15\" data-purecounter-duration=\"1\" class=\"purecounter\"></span>
                </div>
                <div class=\"stat-description\">International Awards</div>
              </div>
              <div class=\"achievement-stat\">
                <div class=\"stat-counter\">
                  <span data-purecounter-start=\"90\" data-purecounter-end=\"100\" data-purecounter-duration=\"2\" class=\"purecounter\"></span>
                </div>
                <div class=\"stat-description\">Years of Excellence</div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

  </main>
{% endblock %}
", "home/about.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\home\\about.html.twig");
    }
}
