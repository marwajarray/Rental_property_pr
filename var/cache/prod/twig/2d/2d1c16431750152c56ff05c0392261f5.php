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
class __TwigTemplate_ab8cf73ff86b7bbe9bffd01333d7afd2 extends Template
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
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Home - UrbanStay Luxury Apartment Rental";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "    <!-- Apartment Rental Hero Section -->
    <section id=\"apartment rental-hero\" class=\"apartment-rental-hero section\">

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"row gy-4 align-items-center\">

          <div class=\"col-lg-6\" data-aos=\"fade-right\" data-aos-delay=\"200\">
            <div class=\"hero-content\">
              <h1>Luxury Redefined in Every Stay</h1>
              <p class=\"lead\">Experience unparalleled comfort and sophistication at our premium apartment rental. From elegant suites to world-class amenities, every moment of your stay is crafted to perfection.</p>
              <div class=\"hero-features\">
                <div class=\"feature-item\">
                  <i class=\"bi bi-wifi\"></i>
                  <span>Complimentary WiFi</span>
                </div>
                <div class=\"feature-item\">
                  <i class=\"bi bi-car-front\"></i>
                  <span>Valet Parking</span>
                </div>
                <div class=\"feature-item\">
                  <i class=\"bi bi-cup-hot\"></i>
                  <span>24/7 Property Service</span>
                </div>
              </div>
              <div class=\"hero-buttons\">
                ";
        // line 33
        yield "                <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_property_index");
        yield "\" class=\"btn btn-outline\">View Properties</a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-6\" data-aos=\"fade-left\" data-aos-delay=\"300\">
            <div class=\"hero-images\">
              <div class=\"main-image\">
                <img src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/showcase-3.webp"), "html", null, true);
        yield "\" alt=\"Luxury Property Rental\" class=\"img-fluid\">
              </div>
              <div class=\"floating-card\" data-aos=\"zoom-in\" data-aos-delay=\"400\">
                <div class=\"card-content\">
                  <div class=\"rating\">
                    <i class=\"bi bi-star-fill\"></i>
                    <i class=\"bi bi-star-fill\"></i>
                    <i class=\"bi bi-star-fill\"></i>
                    <i class=\"bi bi-star-fill\"></i>
                  </div>
                  <h6>Exceptional Experience</h6>
                  <p>\"Absolutely stunning property rental! The service was impeccable and the views breathtaking.\"</p>
                  <div class=\"guest-info\">
                    <img src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/person/person-f-3.webp"), "html", null, true);
        yield "\" alt=\"Guest\" class=\"guest-avatar\">
                    <span>Sarah Johnson</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class=\"hero-stats\" data-aos=\"fade-up\">
          <div class=\"row text-center\">
            <div class=\"col-md-3 col-6\">
              <div class=\"stat-item\">
                <span class=\"stat-number purecounter\" data-purecounter-start=\"0\" data-purecounter-end=\"150\" data-purecounter-duration=\"1\">150</span>
                <span class=\"stat-label\">Luxury Properties</span>
              </div>
            </div>
            <div class=\"col-md-3 col-6\">
              <div class=\"stat-item\">
                <span class=\"stat-number purecounter\" data-purecounter-start=\"0\" data-purecounter-end=\"5\" data-purecounter-duration=\"1\">5</span>
                <span class=\"stat-label\">Star Rating</span>
              </div>
            </div>
            <div class=\"col-md-3 col-6\">
              <div class=\"stat-item\">
                <span class=\"stat-number purecounter\" data-purecounter-start=\"0\" data-purecounter-end=\"24\" data-purecounter-duration=\"1\">24</span>
                <span class=\"stat-label\">Hour Service</span>
              </div>
            </div>
            <div class=\"col-md-3 col-6\">
              <div class=\"stat-item\">
                <span class=\"stat-number purecounter\" data-purecounter-start=\"0\" data-purecounter-end=\"98\" data-purecounter-duration=\"1\">98</span>
                <span class=\"stat-label\">Guest Satisfaction</span>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Apartment Rental Hero Section -->

    <!-- About Home Section -->
    <section id=\"about-home\" class=\"about-home section light-background\">

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"row gy-4 align-items-center\">

          <div class=\"col-lg-6\" data-aos=\"fade-right\" data-aos-delay=\"200\">
            <div class=\"about-content\">
              <h2>Welcome to UrbanStay Property Rental</h2>
              <p class=\"lead\">Where luxury meets tranquility in the heart of nature's paradise.</p>
              <p>Nestled among rolling hills and pristine landscapes, Grandview Property Rental has been offering exceptional hospitality for over three decades. Our commitment to excellence and attention to detail creates an unforgettable experience for discerning travelers seeking both comfort and adventure.</p>
              <div class=\"stats-row\">
                <div class=\"stat-item\">
                  <div class=\"stat-number\">185</div>
                  <div class=\"stat-label\">Luxury Properties</div>
                </div>
                <div class=\"stat-item\">
                  <div class=\"stat-number\">98%</div>
                  <div class=\"stat-label\">Guest Satisfaction</div>
                </div>
                <div class=\"stat-item\">
                  <div class=\"stat-number\">30</div>
                  <div class=\"stat-label\">Years of Excellence</div>
                </div>
              </div><!-- End Stats Row -->

              <div class=\"about-actions\">
                <a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_about");
        yield "\" class=\"btn-primary\">Our Story</a>
                <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_property_index");
        yield "\" class=\"btn-secondary\">Voir les propriétés</a>
              </div>
            </div>
          </div><!-- End About Content -->

          <div class=\"col-lg-6\" data-aos=\"fade-left\" data-aos-delay=\"300\">
            <div class=\"about-images\">
              <div class=\"main-image\">
                  <img src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/showcase-8.webp"), "html", null, true);
        yield "\" alt=\"Grandview Resort Main View\" class=\"img-fluid\">
                </div>
                <div class=\"secondary-image\">
                  <img src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/property-12.webp"), "html", null, true);
        yield "\" alt=\"Luxury Suite Interior\" class=\"img-fluid\">
                </div>
                <div class=\"experience-badge\">
                <div class=\"badge-content\">
                  <span class=\"badge-number\">30+</span>
                  <span class=\"badge-text\">Years<br>Experience</span>
                </div>
              </div>
            </div>
          </div><!-- End About Images -->

        </div>

      </div>

    </section><!-- /About Home Section -->

    <!-- Properties Section -->
    <section id=\"properties-showcase\" class=\"properties-showcase section\">

      <div class=\"container section-title\" data-aos=\"fade-up\">
        <h2>Our Properties</h2>
        <p>Experience the perfect blend of comfort and luxury</p>
      </div><!-- End Section Title -->

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        

        <div class=\"row mt-6\">
          <div class=\"col-lg-3 col-sm-6\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <div class=\"minimal-room-card\">
              <div class=\"room-image\">
                <img src=\"";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/property-1.webp"), "html", null, true);
        yield "\" alt=\"Classic Property\" class=\"img-fluid\">
                
              </div>
              <div class=\"room-summary\">
                <h5>Classic Double</h5>
                <div class=\"price-tag\">\$189<span>/night</span></div>
                <div class=\"basic-amenities\">
                  <i class=\"bi bi-wifi\"></i>
                  <i class=\"bi bi-tv\"></i>
                  <i class=\"bi bi-telephone\"></i>
                </div>
              </div>
            </div>
          </div><!-- End Minimal Property -->

          <div class=\"col-lg-3 col-sm-6\" data-aos=\"fade-up\" data-aos-delay=\"450\">
            <div class=\"minimal-room-card\">
              <div class=\"room-image\">
                <img src=\"";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/property-5.webp"), "html", null, true);
        yield "\" alt=\"Superior Property\" class=\"img-fluid\">
                
              </div>
              <div class=\"room-summary\">
                <h5>Superior King</h5>
                <div class=\"price-tag\">\$249<span>/night</span></div>
                <div class=\"basic-amenities\">
                  <i class=\"bi bi-wifi\"></i>
                  <i class=\"bi bi-cup-hot\"></i>
                  <i class=\"bi bi-snow\"></i>
                </div>
              </div>
            </div>
          </div><!-- End Minimal Property -->

          <div class=\"col-lg-3 col-sm-6\" data-aos=\"fade-up\" data-aos-delay=\"500\">
            <div class=\"minimal-room-card\">
              <div class=\"room-image\">
                <img src=\"";
        // line 206
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/property-8.webp"), "html", null, true);
        yield "\" alt=\"Premium Property\" class=\"img-fluid\">
                
              </div>
              <div class=\"room-summary\">
                <h5>Premium Ocean View</h5>
                <div class=\"price-tag\">\$359<span>/night</span></div>
                <div class=\"basic-amenities\">
                  <i class=\"bi bi-water\"></i>
                  <i class=\"bi bi-door-open\"></i>
                  <i class=\"bi bi-award\"></i>
                </div>
              </div>
            </div>
          </div><!-- End Minimal Property -->

          <div class=\"col-lg-3 col-sm-6\" data-aos=\"fade-up\" data-aos-delay=\"550\">
            <div class=\"minimal-room-card\">
              <div class=\"room-image\">
                <img src=\"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/property-17.webp"), "html", null, true);
        yield "\" alt=\"Luxury Suite\" class=\"img-fluid\">
              </div>
              <div class=\"room-summary\">
                <h5>Luxury Penthouse</h5>
                <div class=\"price-tag\">\$1,199<span>/night</span></div>
                <div class=\"basic-amenities\">
                  <i class=\"bi bi-star\"></i>
                  <i class=\"bi bi-house\"></i>
                  <i class=\"bi bi-gem\"></i>
                </div>
              </div>
            </div>
          </div><!-- End Minimal Property -->

        </div>

        <div class=\"text-center\" data-aos=\"fade-up\" data-aos-delay=\"600\">
          <a href=\"";
        // line 241
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_property_index");
        yield "\" class=\"explore-all-link\">
            <span>Explore All Accommodations</span>
            <i class=\"bi bi-arrow-right\"></i>
          </a>
        </div>

      </div>

    </section><!-- /Properties Section -->

    <!-- Amenities Section -->
    <section id=\"amenities-cards\" class=\"amenities-cards section\">

      <div class=\"container section-title\" data-aos=\"fade-up\">
        <span class=\"description-title\">Amenities</span>
        <h2>Amenities</h2>
        <p>Everything you need for a perfect stay</p>
      </div>

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"row g-5\">

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <div class=\"facility-card\">
              <div class=\"facility-image\">
                <img src=\"";
        // line 267
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/amenities-1.webp"), "html", null, true);
        yield "\" alt=\"Wireless Internet\" class=\"img-fluid\">
                <div class=\"facility-overlay\">
                  <i class=\"bi bi-wifi\"></i>
                </div>
              </div>
              <div class=\"facility-info\">
                <h4>High-Speed Internet</h4>
                <p>Complimentary wireless internet access throughout the property rental premises with enterprise-grade security and unlimited bandwidth for all your connectivity needs.</p>
                <div class=\"facility-features\">
                  <span><i class=\"bi bi-check-circle\"></i> 24/7 Available</span>
                  <span><i class=\"bi bi-check-circle\"></i> High Speed</span>
                </div>
              </div>
            </div>
          </div><!-- End Facility Card -->

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"150\">
            <div class=\"facility-card\">
              <div class=\"facility-image\">
                <img src=\"";
        // line 286
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/amenities-3.webp"), "html", null, true);
        yield "\" alt=\"Swimming Pool\" class=\"img-fluid\">
                <div class=\"facility-overlay\">
                  <i class=\"bi bi-droplet\"></i>
                </div>
              </div>
              <div class=\"facility-info\">
                <h4>Rooftop Pool</h4>
                <p>Luxurious rooftop swimming pool with breathtaking city skyline views. Features heated water, poolside service, and premium lounging areas for ultimate relaxation.</p>
                <div class=\"facility-features\">
                  <span><i class=\"bi bi-check-circle\"></i> Heated Pool</span>
                  <span><i class=\"bi bi-check-circle\"></i> City Views</span>
                </div>
              </div>
            </div>
          </div><!-- End Facility Card -->

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"facility-card\">
              <div class=\"facility-image\">
                <img src=\"";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/amenities-5.webp"), "html", null, true);
        yield "\" alt=\"Valet Parking\" class=\"img-fluid\">
                <div class=\"facility-overlay\">
                  <i class=\"bi bi-car-front\"></i>
                </div>
              </div>
              <div class=\"facility-info\">
                <h4>Valet Parking</h4>
                <p>Premium valet parking service with secure underground faciliailable upon request.</p>
                <div class=\"facility-features\">
                  <span><i class=\"bi bi-check-circle\"></i> Secure</span>
                  <span><i class=\"bi bi-check-circle\"></i> Valet Service</span>
                </div>
              </div>
            </div>
          </div><!-- End Facility Card -->

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"250\">
            <div class=\"facility-card\">
              <div class=\"facility-image\">
                <img src=\"";
        // line 324
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/amenities-2.webp"), "html", null, true);
        yield "\" alt=\"Fitness Center\" class=\"img-fluid\">
                <div class=\"facility-overlay\">
                  <i class=\"bi bi-heart-pulse\"></i>
                </div>
              </div>
              <div class=\"facility-info\">
                <h4>Modern Fitness Center</h4>
                <p>Cutting-edge fitness facility featuring premium equipment</p>
                <div class=\"facility-features\">
                  <span><i class=\"bi bi-check-circle\"></i> 24/7 Access</span>
                  <span><i class=\"bi bi-check-circle\"></i> Personal Training</span>
                </div>
              </div>
            </div>
          </div><!-- End Facility Card -->

          <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"facility-card\">
              <div class=\"facility-image\">
                <img src=\"";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/dining-2.webp"), "html", null, true);
        yield "\" alt=\"Fine Dining\" class=\"img-fluid\">
                <div class=\"facility-overlay\">
                  <i class=\"bi bi-cup-hot\"></i>
                </div>
              </div>
              
            </div>
          </div><!-- End Facility Card -->

          

        </div>

      </div>

    </section><!-- /Amenities Section -->


    <!-- Testimonials Section -->
    <section id=\"testimonials\" class=\"testimonials section light-background\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <span class=\"description-title\">Testimonials</span>
        <h2>Testimonials</h2>
        <p>Hear what our guests have to say about their unforgettable experiences at UrbanStay Luxury Property Rental.</p>
      </div><!-- End Section Title -->

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"testimonials-wrapper\">

          <div class=\"row g-4\">

            <!-- Testimonial Item 1 -->
            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"testimonial-card\">
                <div class=\"quote-mark\">
                  <i class=\"bi bi-quote\"></i>
                </div>
                <div class=\"testimonial-content\">
                  <p>The service at UrbanStay was exceptional. From the moment we arrived, the staff went above and beyond to make our anniversary celebration special. The property was immaculate, and the attention to detail was remarkable.</p>
                </div>
                <div class=\"testimonial-author\">
                  <img src=\"";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/person/person-m-5.webp"), "html", null, true);
        yield "\" alt=\"Client\" class=\"img-fluid rounded-circle\" loading=\"lazy\">
                  <div class=\"author-info\">
                    <h4>Robert Johnson</h4>
                    <span>Chief Executive Officer</span>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <!-- Testimonial Item 2 -->
            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
              <div class=\"testimonial-card\">
                <div class=\"quote-mark\">
                  <i class=\"bi bi-quote\"></i>
                </div>
                <div class=\"testimonial-content\">
                  <p>I've stayed at many luxury property rentals, but UrbanStay stands out for its perfect blend of elegance and comfort. The spa treatments were rejuvenating, and the dining experience was culinary excellence at its finest.</p>
                </div>
                <div class=\"testimonial-author\">
                  <img src=\"";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/person/person-f-7.webp"), "html", null, true);
        yield "\" alt=\"Client\" class=\"img-fluid rounded-circle\" loading=\"lazy\">
                  <div class=\"author-info\">
                    <h4>Sarah Williams</h4>
                    <span>Marketing Director</span>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <!-- Testimonial Item 3 -->
            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"400\">
              <div class=\"testimonial-card\">
                <div class=\"quote-mark\">
                  <i class=\"bi bi-quote\"></i>
                </div>
                <div class=\"testimonial-content\">
                  <p>Our family vacation at UrbanStay was perfect. The kids loved the pool and activities, while we enjoyed the peaceful atmosphere. The staff's hospitality made us feel right at home. Highly recommended!</p>
                </div>
                <div class=\"testimonial-author\">
                  <img src=\"";
        // line 425
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/person/person-m-9.webp"), "html", null, true);
        yield "\" alt=\"Client\" class=\"img-fluid rounded-circle\" loading=\"lazy\">
                  <div class=\"author-info\">
                    <h4>Michael Davis</h4>
                    <span>Product Manager</span>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

            <!-- Testimonial Item 4 -->
            <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"500\">
              <div class=\"testimonial-card\">
                <div class=\"quote-mark\">
                  <i class=\"bi bi-quote\"></i>
                </div>
                <div class=\"testimonial-content\">
                  <p>For our business conference, UrbanStay provided outstanding facilities and impeccable service. The meeting properties were well-equipped, and the catering was excellent. Our event was a complete success.</p>
                </div>
                <div class=\"testimonial-author\">
                  <img src=\"";
        // line 444
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/person/person-f-3.webp"), "html", null, true);
        yield "\" alt=\"Client\" class=\"img-fluid rounded-circle\" loading=\"lazy\">
                  <div class=\"author-info\">
                    <h4>Emily Thompson</h4>
                    <span>Design Lead</span>
                  </div>
                </div>
              </div>
            </div><!-- End Testimonial Item -->

          </div>

        </div>

      </div>

    </section><!-- /Testimonials Section -->


    <!-- Events Cards Section -->
    <section id=\"events-cards\" class=\"events-cards section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <span class=\"description-title\">Events</span>
        <h2>Events</h2>
        <p>Host your special occasions in our elegant venues designed for memorable celebrations and successful business gatherings.</p>
      </div><!-- End Section Title -->

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"row g-4\">

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"event-item\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"event-header\">
                <div class=\"event-icon\">
                  <i class=\"bi bi-heart-fill\"></i>
                </div>
                <img src=\"";
        // line 482
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/event-1.webp"), "html", null, true);
        yield "\" alt=\"Wedding Celebrations\" class=\"img-fluid\">
              </div>
              <div class=\"event-content\">
                <h4>Wedding Celebrations</h4>
                <p>Create magical moments in our beautifully decorated ballrooms and garden venues, perfect for your dream wedding day.</p>
                <div class=\"event-features\">
                  <span class=\"feature-item\"><i class=\"bi bi-check-circle\"></i> Premium Venues</span>
                  <span class=\"feature-item\"><i class=\"bi bi-check-circle\"></i> Full Catering</span>
                </div>
                
              </div>
            </div>
          </div><!-- End Event Item -->

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"event-item\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"event-header\">
                <div class=\"event-icon\">
                  <i class=\"bi bi-building\"></i>
                </div>
                <img src=\"";
        // line 502
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/event-4.webp"), "html", null, true);
        yield "\" alt=\"Business Conferences\" class=\"img-fluid\">
              </div>
              <div class=\"event-content\">
                <h4>Business Conferences</h4>
                <p>State-of-the-art conference facilities with advanced AV equipment, high-speed internet, and professional catering services.</p>
                <div class=\"event-features\">
                  <span class=\"feature-item\"><i class=\"bi bi-check-circle\"></i> Modern Tech</span>
                  <span class=\"feature-item\"><i class=\"bi bi-check-circle\"></i> WiFi Access</span>
                </div>
                
              </div>
            </div>
          </div><!-- End Event Item -->

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"event-item\" data-aos=\"fade-up\" data-aos-delay=\"300\">
              <div class=\"event-header\">
                <div class=\"event-icon\">
                  <i class=\"bi bi-calendar-event\"></i>
                </div>
                <img src=\"";
        // line 522
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/event-8.webp"), "html", null, true);
        yield "\" alt=\"Special Occasions\" class=\"img-fluid\">
              </div>
              <div class=\"event-content\">
                <h4>Special Occasions</h4>
                <p>Celebrate birthdays, anniversaries, and milestones in our versatile event spaces with personalized service and attention to detail.</p>
                <div class=\"event-features\">
                  <span class=\"feature-item\"><i class=\"bi bi-check-circle\"></i> Custom Setup</span>
                  <span class=\"feature-item\"><i class=\"bi bi-check-circle\"></i> Event Coordination</span>
                </div>
                
              </div>
            </div>
          </div><!-- End Event Item -->

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"event-item\" data-aos=\"fade-up\" data-aos-delay=\"100\">
              <div class=\"event-header\">
                <div class=\"event-icon\">
                  <i class=\"bi bi-people\"></i>
                </div>
                <img src=\"";
        // line 542
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/event-5.webp"), "html", null, true);
        yield "\" alt=\"Corporate Retreats\" class=\"img-fluid\">
              </div>
              <div class=\"event-content\">
                <h4>Corporate Retreats</h4>
                <p>Enhance team productivity and morale with our dedicated retreat spaces featuring collaborative areas, recreational facilities, and scenic outdoor venues for team-building activities.</p>
                <div class=\"event-features\">
                  <span class=\"feature-item\"><i class=\"bi bi-check-circle\"></i> Team Building</span>
                  <span class=\"feature-item\"><i class=\"bi bi-check-circle\"></i> Outdoor Activities</span>
                </div>
                
              </div>
            </div>
          </div><!-- End Event Item -->

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"event-item\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <div class=\"event-header\">
                <div class=\"event-icon\">
                  <i class=\"bi bi-music-note-beamed\"></i>
                </div>
                <img src=\"";
        // line 562
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/event-6.webp"), "html", null, true);
        yield "\" alt=\"Entertainment Events\" class=\"img-fluid\">
              </div>
              <div class=\"event-content\">
                <h4>Entertainment Events</h4>
                <p>Bring your events to life with our entertainment venues equipped with state-of-the-art sound systems, lighting, and spacious dance floors for unforgettable celebrations.</p>
                <div class=\"event-features\">
                  <span class=\"feature-item\"><i class=\"bi bi-check-circle\"></i> Live Music</span>
                  <span class=\"feature-item\"><i class=\"bi bi-check-circle\"></i> Dance Floor</span>
                </div>
                
              </div>
            </div>
          </div><!-- End Event Item -->

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"event-item\" data-aos=\"fade-up\" data-aos-delay=\"300\">
              <div class=\"event-header\">
                <div class=\"event-icon\">
                  <i class=\"bi bi-star\"></i>
                </div>
                <img src=\"";
        // line 582
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/event-9.webp"), "html", null, true);
        yield "\" alt=\"VIP Gatherings\" class=\"img-fluid\">
              </div>
              <div class=\"event-content\">
                <h4>VIP Gatherings</h4>
                <p>Experience exclusivity and luxury in our private VIP suites designed for intimate gatherings, private dinners, and exclusive celebrations with premium amenities.</p>
                <div class=\"event-features\">
                  <span class=\"feature-item\"><i class=\"bi bi-check-circle\"></i> Exclusive Access</span>
                  <span class=\"feature-item\"><i class=\"bi bi-check-circle\"></i> Premium Service</span>
                </div>
                
              </div>
            </div>
          </div><!-- End Event Item -->

        </div>

      </div>

    </section><!-- /Events Cards Section -->


    <!-- Location Cards Section -->
    <section id=\"location-cards\" class=\"location-cards section\">

      <!-- Section Title -->
      <div class=\"container section-title\" data-aos=\"fade-up\">
        <span class=\"description-title\">Location &amp; Activities</span>
        <h2>Location &amp; Activities</h2>
        <p>Discover the perfect location and enjoy a variety of recreational activities designed for relaxation and adventure.</p>
      </div><!-- End Section Title -->

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"row gy-5 align-items-center\">
          <div class=\"col-lg-8\">
            <div class=\"row gy-4\">
              <div class=\"col-md-6\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
                <div class=\"area-highlight\">
                  <div class=\"area-image-wrapper\">
                    <img src=\"";
        // line 621
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/location-3.webp"), "html", null, true);
        yield "\" alt=\"Entertainment District\" class=\"img-fluid\">
                    <div class=\"area-badge\">
                      <i class=\"bi bi-music-note-beamed\"></i>
                      <span>2 min walk</span>
                    </div>
                  </div>
                  <div class=\"area-info\">
                    <h5>Entertainment Quarter</h5>
                    <p>Experience the vibrant nightlife with world-class theaters, live music venues, and diverse dining options just steps from our property rental.</p>
                    <div class=\"quick-stats\">
                      <span><i class=\"bi bi-clock\"></i> Open 24/7</span>
                      <span><i class=\"bi bi-star-fill\"></i> 4.8 Rating</span>
                    </div>
                  </div>
                </div>
              </div><!-- End Area Highlight -->

              <div class=\"col-md-6\" data-aos=\"zoom-in\" data-aos-delay=\"300\">
                <div class=\"area-highlight\">
                  <div class=\"area-image-wrapper\">
                    <img src=\"";
        // line 641
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/location-6.webp"), "html", null, true);
        yield "\" alt=\"Waterfront Marina\" class=\"img-fluid\">
                    <div class=\"area-badge\">
                      <i class=\"bi bi-water\"></i>
                      <span>5 min drive</span>
                    </div>
                  </div>
                  <div class=\"area-info\">
                    <h5>Waterfront Marina</h5>
                    <p>Enjoy waterfront dining, boat tours, and stunning sunset views at our nearby marina with premium yacht charters available.</p>
                    <div class=\"quick-stats\">
                      <span><i class=\"bi bi-brightness-high\"></i> Scenic Views</span>
                      <span><i class=\"bi bi-camera\"></i> Photo Spot</span>
                    </div>
                  </div>
                </div>
              </div><!-- End Area Highlight -->

              <div class=\"col-md-6\" data-aos=\"zoom-in\" data-aos-delay=\"400\">
                <div class=\"area-highlight\">
                  <div class=\"area-image-wrapper\">
                    <img src=\"";
        // line 661
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/location-8.webp"), "html", null, true);
        yield "\" alt=\"Historic Quarter\" class=\"img-fluid\">
                    <div class=\"area-badge\">
                      <i class=\"bi bi-bank\"></i>
                      <span>10 min walk</span>
                    </div>
                  </div>
                  <div class=\"area-info\">
                    <h5>Historic Quarter</h5>
                    <p>Explore centuries-old architecture, museums, and cultural landmarks in the beautifully preserved historic district nearby.</p>
                    <div class=\"quick-stats\">
                      <span><i class=\"bi bi-book\"></i> Guided Tours</span>
                      <span><i class=\"bi bi-bicycle\"></i> Bike Friendly</span>
                    </div>
                  </div>
                </div>
              </div><!-- End Area Highlight -->

              <div class=\"col-md-6\" data-aos=\"zoom-in\" data-aos-delay=\"500\">
                <div class=\"area-highlight\">
                  <div class=\"area-image-wrapper\">
                    <img src=\"";
        // line 681
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/location-4.webp"), "html", null, true);
        yield "\" alt=\"Shopping Plaza\" class=\"img-fluid\">
                    <div class=\"area-badge\">
                      <i class=\"bi bi-shop\"></i>
                      <span>3 min walk</span>
                    </div>
                  </div>
                  <div class=\"area-info\">
                    <h5>Premium Shopping Plaza</h5>
                    <p>Indulge in luxury shopping with high-end boutiques, designer stores, and gourmet cafés in our adjacent premium shopping destination.</p>
                    
                  </div>
                </div>
              </div><!-- End Area Highlight -->
            </div>
          </div>

          <div class=\"col-lg-4\" data-aos=\"fade-left\" data-aos-delay=\"200\">
            <div class=\"location-overview\">
              <div class=\"overview-header\">
                <div class=\"location-marker\">
                  <i class=\"bi bi-geo-alt-fill\"></i>
                </div>
                <h3>Prime Location Benefits</h3>
                <p class=\"overview-subtitle\">Our strategic location provides unparalleled convenience with easy access to transportation, entertainment, and business districts.</p>
              </div>

              <div class=\"benefits-list\">
                <div class=\"benefit-item\">
                  <div class=\"benefit-icon\">
                    <i class=\"bi bi-train-front\"></i>
                  </div>
                  <div class=\"benefit-content\">
                    <h6>Public Transport Hub</h6>
                    <span>Metro station 200m away</span>
                  </div>
                </div>

                <div class=\"benefit-item\">
                  <div class=\"benefit-icon\">
                    <i class=\"bi bi-airplane\"></i>
                  </div>
                  <div class=\"benefit-content\">
                    <h6>Airport Connection</h6>
                    <span>Direct shuttle every 30 min</span>
                  </div>
                </div>

                <div class=\"benefit-item\">
                  <div class=\"benefit-icon\">
                    <i class=\"bi bi-car-front\"></i>
                  </div>
                  <div class=\"benefit-content\">
                    <h6>Valet Parking</h6>
                    <span>Complimentary for guests</span>
                  </div>
                </div>

                <div class=\"benefit-item\">
                  <div class=\"benefit-icon\">
                    <i class=\"bi bi-compass\"></i>
                  </div>
                  <div class=\"benefit-content\">
                    <h6>City Center Access</h6>
                    <span>Walking distance to main attractions</span>
                  </div>
                </div>
              </div>

              <a href=\"";
        // line 749
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_location");
        yield "\" class=\"location-guide-btn\">
                <span>View Full Location Guide</span>
                <i class=\"bi bi-arrow-right\"></i>
              </a>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /Location Cards Section -->


    <!-- Gallery Showcase Section -->
    <section id=\"gallery-showcase\" class=\"gallery-showcase section\">

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"gallery-carousel swiper init-swiper\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <script type=\"application/json\" class=\"swiper-config\">
            {
              \"loop\": true,
              \"speed\": 600,
              \"autoplay\": {
                \"delay\": 3000
              },
              \"slidesPerView\": 1,
              \"spaceBetween\": 20,
              \"centeredSlides\": true,
              \"breakpoints\": {
                \"576\": {
                  \"slidesPerView\": 2,
                  \"centeredSlides\": false
                },
                \"768\": {
                  \"slidesPerView\": 3,
                  \"centeredSlides\": false
                },
                \"992\": {
                  \"slidesPerView\": 4,
                  \"centeredSlides\": false
                },
                \"1200\": {
                  \"slidesPerView\": 5,
                  \"centeredSlides\": false
                }
              }
            }
          </script>
          <div class=\"swiper-wrapper\">
            <div class=\"swiper-slide\">
              <div class=\"gallery-item\">
                <img src=\"";
        // line 802
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/gallery-1.webp"), "html", null, true);
        yield "\" alt=\"Luxurious Suite\" class=\"img-fluid\" loading=\"lazy\">
                <a href=\"";
        // line 803
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/gallery-1.webp"), "html", null, true);
        yield "\" class=\"gallery-overlay glightbox\">
                  <i class=\"bi bi-eye\"></i>
                </a>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"gallery-item\">
                <img src=\"";
        // line 810
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/gallery-5.webp"), "html", null, true);
        yield "\" alt=\"Modern Lobby\" class=\"img-fluid\" loading=\"lazy\">
                <a href=\"";
        // line 811
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/gallery-5.webp"), "html", null, true);
        yield "\" class=\"gallery-overlay glightbox\">
                  <i class=\"bi bi-eye\"></i>
                </a>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"gallery-item\">
                <img src=\"";
        // line 818
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/gallery-12.webp"), "html", null, true);
        yield "\" alt=\"Elegant Dining Area\" class=\"img-fluid\" loading=\"lazy\">
                <a href=\"";
        // line 819
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/gallery-12.webp"), "html", null, true);
        yield "\" class=\"gallery-overlay glightbox\">
                  <i class=\"bi bi-eye\"></i>
                </a>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"gallery-item\">
                <img src=\"";
        // line 826
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/gallery-8.webp"), "html", null, true);
        yield "\" alt=\"Grand Ballroom Setup\" class=\"img-fluid\" loading=\"lazy\">
                <a href=\"";
        // line 827
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/gallery-8.webp"), "html", null, true);
        yield "\" class=\"gallery-overlay glightbox\">
                  <i class=\"bi bi-eye\"></i>
                </a>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"gallery-item\">
                <img src=\"";
        // line 834
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/gallery-15.webp"), "html", null, true);
        yield "\" alt=\"Relaxing Poolside\" class=\"img-fluid\" loading=\"lazy\">
                <a href=\"";
        // line 835
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/gallery-15.webp"), "html", null, true);
        yield "\" class=\"gallery-overlay glightbox\">
                  <i class=\"bi bi-eye\"></i>
                </a>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"gallery-item\">
                <img src=\"";
        // line 842
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/gallery-3.webp"), "html", null, true);
        yield "\" alt=\"Cozy Guest Property\" class=\"img-fluid\" loading=\"lazy\">
                <a href=\"";
        // line 843
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/gallery-3.webp"), "html", null, true);
        yield "\" class=\"gallery-overlay glightbox\">
                  <i class=\"bi bi-eye\"></i>
                </a>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"gallery-item\">
                <img src=\"";
        // line 850
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/gallery-18.webp"), "html", null, true);
        yield "\" alt=\"Spa and Wellness Center\" class=\"img-fluid\" loading=\"lazy\">
                <a href=\"";
        // line 851
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/gallery-18.webp"), "html", null, true);
        yield "\" class=\"gallery-overlay glightbox\">
                  <i class=\"bi bi-eye\"></i>
                </a>
              </div>
            </div>
            <div class=\"swiper-slide\">
              <div class=\"gallery-item\">
                <img src=\"";
        // line 858
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/gallery-7.webp"), "html", null, true);
        yield "\" alt=\"Conference Facilities\" class=\"img-fluid\" loading=\"lazy\">
                <a href=\"";
        // line 859
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/gallery-7.webp"), "html", null, true);
        yield "\" class=\"gallery-overlay glightbox\">
                  <i class=\"bi bi-eye\"></i>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class=\"text-center mt-5\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <a href=\"";
        // line 868
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_image");
        yield "\" class=\"btn btn-gallery\">
            <i class=\"bi bi-collection me-2\"></i>Discover Our Full Gallery
          </a>
        </div>

      </div>

    </section><!-- /Gallery Showcase Section -->



";
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
        return array (  1078 => 868,  1066 => 859,  1062 => 858,  1052 => 851,  1048 => 850,  1038 => 843,  1034 => 842,  1024 => 835,  1020 => 834,  1010 => 827,  1006 => 826,  996 => 819,  992 => 818,  982 => 811,  978 => 810,  968 => 803,  964 => 802,  908 => 749,  837 => 681,  814 => 661,  791 => 641,  768 => 621,  726 => 582,  703 => 562,  680 => 542,  657 => 522,  634 => 502,  611 => 482,  570 => 444,  548 => 425,  526 => 406,  504 => 387,  457 => 343,  435 => 324,  413 => 305,  391 => 286,  369 => 267,  340 => 241,  320 => 224,  299 => 206,  278 => 188,  257 => 170,  221 => 137,  215 => 134,  204 => 126,  200 => 125,  126 => 54,  110 => 41,  98 => 33,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "home/index.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\home\\index.html.twig");
    }
}
