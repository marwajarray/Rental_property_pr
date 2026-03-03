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

/* restaurant/index.html.twig */
class __TwigTemplate_adc2fd57574b7a054ab6f1ebacc0c6ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "restaurant/index.html.twig"));

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

        yield "Restaurant - UrbanStay Luxury Apartment Rental";
        
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
        <h1 class=\"mb-2 mb-lg-0\">Restaurant</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
            <li class=\"current\">Restaurant</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Restaurant Section -->
    <section id=\"restaurant\" class=\"restaurant section\">

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"row g-5 align-items-center\">
          <div class=\"col-lg-6\" data-aos=\"fade-up\">
            <div class=\"about-content\">
              <h2>Experience Our Culinary Excellence</h2>
              <p class=\"fst-italic\">At UrbanStay, we believe that exceptional dining is an art form that combines the finest ingredients with innovative techniques and warm hospitality.</p>
              <p>Our award-winning chefs craft each dish with passion and precision, using only the freshest seasonal ingredients sourced from local farms and international suppliers. Every meal tells a story of flavor, tradition, and innovation.</p>

              <div class=\"row mt-4\">
                <div class=\"col-md-6\">
                  <div class=\"feature-item\" data-aos=\"fade-up\" data-aos-delay=\"150\">
                    <i class=\"bi bi-award\"></i>
                    <h4>Exceptional Service</h4>
                    <p>Our attentive staff provides personalized service in an elegant atmosphere, ensuring every guest feels valued and cared for.</p>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"feature-item\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                    <i class=\"bi bi-trophy\"></i>
                    <h4>Industry Recognition</h4>
                    <p>Consistently recognized by culinary critics and awarded multiple Michelin stars for our innovative cuisine and outstanding service.</p>
                  </div>
                </div>
              </div>

              <div class=\"signature mt-4\" data-aos=\"fade-up\" data-aos-delay=\"250\">
                <p class=\"chef-name\">Chef Marco Rossi, Executive Chef</p>
                <img src=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/misc/signature-1.webp"), "html", null, true);
        yield "\" alt=\"Chef Signature\" class=\"img-fluid\">
              </div>
            </div>
          </div>

          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"about-gallery\">
              <div class=\"row g-3\">
                <div class=\"col-6\">
                  <img src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/restaurant/showcase-3.webp"), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"Restaurant Image\">
                </div>
                <div class=\"col-6\">
                  <img src=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/restaurant/showcase-8.webp"), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"Restaurant Image\">
                </div>
                <div class=\"col-12 mt-3\">
                  <div class=\"years-badge\">
                    <span class=\"number\">18</span>
                    <span class=\"text\">Years of Dedication</span>
                  </div>
                  <img src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/restaurant/showcase-6.webp"), "html", null, true);
        yield "\" class=\"img-fluid rounded\" alt=\"Restaurant Image\">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Restaurant Section -->

    <!-- Menu Section -->
    <section id=\"menu\" class=\"menu section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <span class=\"description-title\">Our Menu</span>
        <h2>Culinary Delights</h2>
        <p>Discover our carefully crafted menu featuring the finest ingredients and innovative culinary techniques</p>
      </div><!-- End Section Title -->

      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"isotope-layout\" data-default-filter=\"*\" data-layout=\"masonry\" data-sort=\"original-order\">

          <div class=\"menu-filters isotope-filters mb-5\">
            <ul>
              <li data-filter=\"*\" class=\"filter-active\">All</li>
              <li data-filter=\".filter-starters\">Starters</li>
              <li data-filter=\".filter-main\">Main Courses</li>
              <li data-filter=\".filter-dessert\">Desserts</li>
              <li data-filter=\".filter-drinks\">Drinks</li>
            </ul>
          </div>

          <div class=\"menu-container isotope-container row gy-4\">

            <!-- Regular Menu Items -->
            <div class=\"col-lg-6 isotope-item filter-starters\">
              <div class=\"menu-item d-flex align-items-center gap-4\">
                <img src=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/restaurant/starter-2.webp"), "html", null, true);
        yield "\" alt=\"Starter\" class=\"menu-img img-fluid rounded-3\">
                <div class=\"menu-content\">
                  <h5>Bruschetta Trio <span class=\"menu-tag\">Vegetarian</span></h5>
                  <p>Three varieties of toasted bread topped with fresh tomatoes, basil, garlic, and balsamic glaze.</p>
                  <div class=\"price\">\$8.95</div>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6 isotope-item filter-starters\">
              <div class=\"d-flex menu-item align-items-center gap-4\">
                <img src=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/restaurant/starter-5.webp"), "html", null, true);
        yield "\" alt=\"Starter\" class=\"menu-img img-fluid rounded-3\">
                <div class=\"menu-content\">
                  <h5>Calamari Fritti <span class=\"menu-tag\">Seafood</span></h5>
                  <p>Crispy fried squid rings served with marinara sauce and lemon wedges.</p>
                  <div class=\"price\">\$10.95</div>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6 isotope-item filter-main\">
              <div class=\"d-flex menu-item align-items-center gap-4\">
                <img src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/restaurant/main-1.webp"), "html", null, true);
        yield "\" alt=\"Main Course\" class=\"menu-img img-fluid rounded-3\">
                <div class=\"menu-content\">
                  <h5>Wild Mushroom Risotto <span class=\"menu-tag\">Vegetarian</span></h5>
                  <p>Creamy Arborio rice cooked with wild mushrooms, truffle oil, and Parmesan cheese.</p>
                  <div class=\"price\">\$18.95</div>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6 isotope-item filter-main\">
              <div class=\"d-flex menu-item align-items-center gap-4\">
                <img src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/restaurant/main-4.webp"), "html", null, true);
        yield "\" alt=\"Main Course\" class=\"menu-img img-fluid rounded-3\">
                <div class=\"menu-content\">
                  <h5>Braised Lamb Shank <span class=\"menu-tag\">Chef's Choice</span></h5>
                  <p>Slow-braised lamb shank with red wine reduction, root vegetables, and herbs.</p>
                  <div class=\"price\">\$26.95</div>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6 isotope-item filter-dessert\">
              <div class=\"d-flex menu-item align-items-center gap-4\">
                <img src=\"";
        // line 156
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/restaurant/dessert-2.webp"), "html", null, true);
        yield "\" alt=\"Dessert\" class=\"menu-img img-fluid rounded-3\">
                <div class=\"menu-content\">
                  <h5>Chocolate Lava Cake <span class=\"menu-tag\">Gluten Free</span></h5>
                  <p>Warm chocolate cake with molten center, served with vanilla ice cream.</p>
                  <div class=\"price\">\$9.95</div>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6 isotope-item filter-dessert\">
              <div class=\"d-flex menu-item align-items-center gap-4\">
                <img src=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/restaurant/dessert-7.webp"), "html", null, true);
        yield "\" alt=\"Dessert\" class=\"menu-img img-fluid rounded-3\">
                <div class=\"menu-content\">
                  <h5>Tiramisu <span class=\"menu-tag\">Classic</span></h5>
                  <p>Traditional Italian dessert with coffee-soaked ladyfingers and mascarpone cream.</p>
                  <div class=\"price\">\$8.95</div>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6 isotope-item filter-drinks\">
              <div class=\"d-flex menu-item align-items-center gap-4\">
                <img src=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/restaurant/drink-3.webp"), "html", null, true);
        yield "\" alt=\"Drink\" class=\"menu-img img-fluid rounded-3\">
                <div class=\"menu-content\">
                  <h5>Signature Cocktail <span class=\"menu-tag\">Alcoholic</span></h5>
                  <p>House specialty with premium spirits, fresh juices, and exotic garnishes.</p>
                  <div class=\"price\">\$12.95</div>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6 isotope-item filter-drinks\">
              <div class=\"d-flex menu-item align-items-center gap-4\">
                <img src=\"";
        // line 189
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/restaurant/drink-8.webp"), "html", null, true);
        yield "\" alt=\"Drink\" class=\"menu-img img-fluid rounded-3\">
                <div class=\"menu-content\">
                  <h5>Berry Smoothie <span class=\"menu-tag\">Non-Alcoholic</span></h5>
                  <p>Refreshing blend of mixed berries, yogurt, and honey.</p>
                  <div class=\"price\">\$7.95</div>
                </div>
              </div>
            </div>
          </div>

        </div>

       

        <!-- Chef's Specials -->
        <div class=\"col-12 mt-5\" data-aos=\"fade-up\">
          <div class=\"specials-badge\">
            <span><i class=\"bi bi-award\"></i> Chef's Specials</span>
          </div>
          <div class=\"specials-container\">
            <div class=\"row g-4\">
              <div class=\"col-md-6\">
                <div class=\"menu-item special-item\">
                  <div class=\"menu-item-img\">
                    <img src=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/restaurant/main-3.webp"), "html", null, true);
        yield "\" alt=\"Special Dish\" class=\"img-fluid\">
                    <div class=\"menu-item-badges\">
                      <span class=\"badge-special\">Special</span>
                      <span class=\"badge-vegan\">Vegan</span>
                    </div>
                  </div>
                  <div class=\"menu-item-content\">
                    <h4>Mediterranean Grilled Salmon</h4>
                    <p>Fresh Atlantic salmon grilled to perfection, served with roasted vegetables, quinoa, and lemon herb sauce. A healthy and flavorful choice.</p>
                    <div class=\"menu-item-price\">\$24.99</div>
                  </div>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"menu-item special-item\">
                  <div class=\"menu-item-img\">
                    <img src=\"";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/restaurant/main-7.webp"), "html", null, true);
        yield "\" alt=\"Special Dish\" class=\"img-fluid\">
                    <div class=\"menu-item-badges\">
                      <span class=\"badge-special\">Special</span>
                      <span class=\"badge-spicy\">Spicy</span>
                    </div>
                  </div>
                  <div class=\"menu-item-content\">
                    <h4>Signature Ribeye Steak</h4>
                    <p>Prime 12oz ribeye steak cooked to your preference, served with garlic mashed potatoes and seasonal vegetables.</p>
                    <div class=\"menu-item-price\">\$32.99</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Menu Section -->

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
        return "restaurant/index.html.twig";
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
        return array (  367 => 229,  348 => 213,  321 => 189,  307 => 178,  293 => 167,  279 => 156,  265 => 145,  251 => 134,  237 => 123,  223 => 112,  180 => 72,  170 => 65,  164 => 62,  152 => 53,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Restaurant - UrbanStay Luxury Apartment Rental{% endblock %}

{% block body %}

  <main class=\"main\">

     <!-- Page Title -->
    <div class=\"page-title light-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Restaurant</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ path('app_home') }}\">Home</a></li>
            <li class=\"current\">Restaurant</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Restaurant Section -->
    <section id=\"restaurant\" class=\"restaurant section\">

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"row g-5 align-items-center\">
          <div class=\"col-lg-6\" data-aos=\"fade-up\">
            <div class=\"about-content\">
              <h2>Experience Our Culinary Excellence</h2>
              <p class=\"fst-italic\">At UrbanStay, we believe that exceptional dining is an art form that combines the finest ingredients with innovative techniques and warm hospitality.</p>
              <p>Our award-winning chefs craft each dish with passion and precision, using only the freshest seasonal ingredients sourced from local farms and international suppliers. Every meal tells a story of flavor, tradition, and innovation.</p>

              <div class=\"row mt-4\">
                <div class=\"col-md-6\">
                  <div class=\"feature-item\" data-aos=\"fade-up\" data-aos-delay=\"150\">
                    <i class=\"bi bi-award\"></i>
                    <h4>Exceptional Service</h4>
                    <p>Our attentive staff provides personalized service in an elegant atmosphere, ensuring every guest feels valued and cared for.</p>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"feature-item\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                    <i class=\"bi bi-trophy\"></i>
                    <h4>Industry Recognition</h4>
                    <p>Consistently recognized by culinary critics and awarded multiple Michelin stars for our innovative cuisine and outstanding service.</p>
                  </div>
                </div>
              </div>

              <div class=\"signature mt-4\" data-aos=\"fade-up\" data-aos-delay=\"250\">
                <p class=\"chef-name\">Chef Marco Rossi, Executive Chef</p>
                <img src=\"{{ asset('assets/img/misc/signature-1.webp') }}\" alt=\"Chef Signature\" class=\"img-fluid\">
              </div>
            </div>
          </div>

          <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"about-gallery\">
              <div class=\"row g-3\">
                <div class=\"col-6\">
                  <img src=\"{{ asset('assets/img/restaurant/showcase-3.webp') }}\" class=\"img-fluid rounded\" alt=\"Restaurant Image\">
                </div>
                <div class=\"col-6\">
                  <img src=\"{{ asset('assets/img/restaurant/showcase-8.webp') }}\" class=\"img-fluid rounded\" alt=\"Restaurant Image\">
                </div>
                <div class=\"col-12 mt-3\">
                  <div class=\"years-badge\">
                    <span class=\"number\">18</span>
                    <span class=\"text\">Years of Dedication</span>
                  </div>
                  <img src=\"{{ asset('assets/img/restaurant/showcase-6.webp') }}\" class=\"img-fluid rounded\" alt=\"Restaurant Image\">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Restaurant Section -->

    <!-- Menu Section -->
    <section id=\"menu\" class=\"menu section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <span class=\"description-title\">Our Menu</span>
        <h2>Culinary Delights</h2>
        <p>Discover our carefully crafted menu featuring the finest ingredients and innovative culinary techniques</p>
      </div><!-- End Section Title -->

      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"isotope-layout\" data-default-filter=\"*\" data-layout=\"masonry\" data-sort=\"original-order\">

          <div class=\"menu-filters isotope-filters mb-5\">
            <ul>
              <li data-filter=\"*\" class=\"filter-active\">All</li>
              <li data-filter=\".filter-starters\">Starters</li>
              <li data-filter=\".filter-main\">Main Courses</li>
              <li data-filter=\".filter-dessert\">Desserts</li>
              <li data-filter=\".filter-drinks\">Drinks</li>
            </ul>
          </div>

          <div class=\"menu-container isotope-container row gy-4\">

            <!-- Regular Menu Items -->
            <div class=\"col-lg-6 isotope-item filter-starters\">
              <div class=\"menu-item d-flex align-items-center gap-4\">
                <img src=\"{{ asset('assets/img/restaurant/starter-2.webp') }}\" alt=\"Starter\" class=\"menu-img img-fluid rounded-3\">
                <div class=\"menu-content\">
                  <h5>Bruschetta Trio <span class=\"menu-tag\">Vegetarian</span></h5>
                  <p>Three varieties of toasted bread topped with fresh tomatoes, basil, garlic, and balsamic glaze.</p>
                  <div class=\"price\">\$8.95</div>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6 isotope-item filter-starters\">
              <div class=\"d-flex menu-item align-items-center gap-4\">
                <img src=\"{{ asset('assets/img/restaurant/starter-5.webp') }}\" alt=\"Starter\" class=\"menu-img img-fluid rounded-3\">
                <div class=\"menu-content\">
                  <h5>Calamari Fritti <span class=\"menu-tag\">Seafood</span></h5>
                  <p>Crispy fried squid rings served with marinara sauce and lemon wedges.</p>
                  <div class=\"price\">\$10.95</div>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6 isotope-item filter-main\">
              <div class=\"d-flex menu-item align-items-center gap-4\">
                <img src=\"{{ asset('assets/img/restaurant/main-1.webp') }}\" alt=\"Main Course\" class=\"menu-img img-fluid rounded-3\">
                <div class=\"menu-content\">
                  <h5>Wild Mushroom Risotto <span class=\"menu-tag\">Vegetarian</span></h5>
                  <p>Creamy Arborio rice cooked with wild mushrooms, truffle oil, and Parmesan cheese.</p>
                  <div class=\"price\">\$18.95</div>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6 isotope-item filter-main\">
              <div class=\"d-flex menu-item align-items-center gap-4\">
                <img src=\"{{ asset('assets/img/restaurant/main-4.webp') }}\" alt=\"Main Course\" class=\"menu-img img-fluid rounded-3\">
                <div class=\"menu-content\">
                  <h5>Braised Lamb Shank <span class=\"menu-tag\">Chef's Choice</span></h5>
                  <p>Slow-braised lamb shank with red wine reduction, root vegetables, and herbs.</p>
                  <div class=\"price\">\$26.95</div>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6 isotope-item filter-dessert\">
              <div class=\"d-flex menu-item align-items-center gap-4\">
                <img src=\"{{ asset('assets/img/restaurant/dessert-2.webp') }}\" alt=\"Dessert\" class=\"menu-img img-fluid rounded-3\">
                <div class=\"menu-content\">
                  <h5>Chocolate Lava Cake <span class=\"menu-tag\">Gluten Free</span></h5>
                  <p>Warm chocolate cake with molten center, served with vanilla ice cream.</p>
                  <div class=\"price\">\$9.95</div>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6 isotope-item filter-dessert\">
              <div class=\"d-flex menu-item align-items-center gap-4\">
                <img src=\"{{ asset('assets/img/restaurant/dessert-7.webp') }}\" alt=\"Dessert\" class=\"menu-img img-fluid rounded-3\">
                <div class=\"menu-content\">
                  <h5>Tiramisu <span class=\"menu-tag\">Classic</span></h5>
                  <p>Traditional Italian dessert with coffee-soaked ladyfingers and mascarpone cream.</p>
                  <div class=\"price\">\$8.95</div>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6 isotope-item filter-drinks\">
              <div class=\"d-flex menu-item align-items-center gap-4\">
                <img src=\"{{ asset('assets/img/restaurant/drink-3.webp') }}\" alt=\"Drink\" class=\"menu-img img-fluid rounded-3\">
                <div class=\"menu-content\">
                  <h5>Signature Cocktail <span class=\"menu-tag\">Alcoholic</span></h5>
                  <p>House specialty with premium spirits, fresh juices, and exotic garnishes.</p>
                  <div class=\"price\">\$12.95</div>
                </div>
              </div>
            </div>

            <div class=\"col-lg-6 isotope-item filter-drinks\">
              <div class=\"d-flex menu-item align-items-center gap-4\">
                <img src=\"{{ asset('assets/img/restaurant/drink-8.webp') }}\" alt=\"Drink\" class=\"menu-img img-fluid rounded-3\">
                <div class=\"menu-content\">
                  <h5>Berry Smoothie <span class=\"menu-tag\">Non-Alcoholic</span></h5>
                  <p>Refreshing blend of mixed berries, yogurt, and honey.</p>
                  <div class=\"price\">\$7.95</div>
                </div>
              </div>
            </div>
          </div>

        </div>

       

        <!-- Chef's Specials -->
        <div class=\"col-12 mt-5\" data-aos=\"fade-up\">
          <div class=\"specials-badge\">
            <span><i class=\"bi bi-award\"></i> Chef's Specials</span>
          </div>
          <div class=\"specials-container\">
            <div class=\"row g-4\">
              <div class=\"col-md-6\">
                <div class=\"menu-item special-item\">
                  <div class=\"menu-item-img\">
                    <img src=\"{{ asset('assets/img/restaurant/main-3.webp') }}\" alt=\"Special Dish\" class=\"img-fluid\">
                    <div class=\"menu-item-badges\">
                      <span class=\"badge-special\">Special</span>
                      <span class=\"badge-vegan\">Vegan</span>
                    </div>
                  </div>
                  <div class=\"menu-item-content\">
                    <h4>Mediterranean Grilled Salmon</h4>
                    <p>Fresh Atlantic salmon grilled to perfection, served with roasted vegetables, quinoa, and lemon herb sauce. A healthy and flavorful choice.</p>
                    <div class=\"menu-item-price\">\$24.99</div>
                  </div>
                </div>
              </div>
              <div class=\"col-md-6\">
                <div class=\"menu-item special-item\">
                  <div class=\"menu-item-img\">
                    <img src=\"{{ asset('assets/img/restaurant/main-7.webp') }}\" alt=\"Special Dish\" class=\"img-fluid\">
                    <div class=\"menu-item-badges\">
                      <span class=\"badge-special\">Special</span>
                      <span class=\"badge-spicy\">Spicy</span>
                    </div>
                  </div>
                  <div class=\"menu-item-content\">
                    <h4>Signature Ribeye Steak</h4>
                    <p>Prime 12oz ribeye steak cooked to your preference, served with garlic mashed potatoes and seasonal vegetables.</p>
                    <div class=\"menu-item-price\">\$32.99</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Menu Section -->

  </main>
{% endblock %}

", "restaurant/index.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\restaurant\\index.html.twig");
    }
}
