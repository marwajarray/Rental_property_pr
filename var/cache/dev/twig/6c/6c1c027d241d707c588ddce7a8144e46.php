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

/* property/show.html.twig */
class __TwigTemplate_d5e1c661acecbda17bec62cc7a058cc2 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/show.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Property Details - UrbanStay Luxury Apartment Rental";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "
  <main class=\"main\">
    
     <!-- Page Title -->
    <div class=\"page-title light-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Property</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
            <li><a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_property_index");
        yield "\">Properties</a></li>
            <li class=\"current\">Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->



   <!-- Property Details Section -->
    <section id=\"property-details\" class=\"property-details section\">

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

       
        <!-- Property Header with Image and Basic Info -->
            
            ";
        // line 35
        yield "            ";
        // line 36
        yield "            ";
        // line 37
        yield "        <div class=\"row align-items-center mb-5\">
          <div class=\"col-lg-7\" data-aos=\"fade-right\" data-aos-delay=\"200\">
            <div class=\"property-header-image\">
              ";
        // line 40
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 40, $this->source); })()), "images", [], "any", false, false, false, 40))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 41, $this->source); })()), "images", [], "any", false, false, false, 41), "first", [], "any", false, false, false, 41), "filename", [], "any", false, false, false, 41))), "html", null, true);
            yield "\" class=\"img-fluid w-100\">
              ";
        } else {
            // line 43
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/placeholder-property.webp"), "html", null, true);
            yield "\" alt=\"No Image Available\" class=\"img-fluid w-100\">
              ";
        }
        // line 45
        yield "               <div class=\"property-badge\">
                <span class=\"text-white\">";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 46, $this->source); })()), "type", [], "any", false, false, false, 46), "html", null, true);
        yield "</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-5\" data-aos=\"fade-left\" data-aos-delay=\"300\">
            <div class=\"property-header-content\">
              <div class=\"property-rating mb-3\">
                <span class=\"rating-score\">4.8</span>
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i>
                  <i class=\"bi bi-star-fill\"></i>
                  <i class=\"bi bi-star-fill\"></i>
                  <i class=\"bi bi-star-fill\"></i>
                  <i class=\"bi bi-star-fill\"></i>
                </div>
               
                <span class=\"reviews-count\">(127 reviews)</span>
              </div>
             <div class=\"property-description mt-4\">
               <h1 class=\"property-title\"> Property: ";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 66, $this->source); })()), "number", [], "any", false, false, false, 66), "html", null, true);
        yield "</h1>
              <h3 class=\"mt-4\">Property Specifications</h3>
              <div class=\"row gy-3 amenities-list\">
                <div class=\"col-md-4\"><i class=\"bi bi-person-fill\"></i> Capacity: ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 69, $this->source); })()), "capacity", [], "any", false, false, false, 69), "html", null, true);
        yield " Guests</div>
                <div class=\"col-md-4\"><i class=\"bi bi-rulers\"></i> Size: ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 70, $this->source); })()), "size", [], "any", false, false, false, 70), "html", null, true);
        yield "</div>
                <div class=\"col-md-4\"><i class=\"bi bi-tag\"></i> Type: ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 71, $this->source); })()), "type", [], "any", false, false, false, 71), "html", null, true);
        yield "</div>
                <div class=\"col-md-4\"><i class=\"bi bi-check-circle\"></i> Status: ";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 72, $this->source); })()), "status", [], "any", false, false, false, 72)), "html", null, true);
        yield "</div>
                <div class=\"col-md-4\"><i class=\"bi bi-wifi\"></i> High-Speed Wi-Fi</div>
                <div class=\"col-md-4\"><i class=\"bi bi-cup-hot\"></i> 24/7 Property Service</div>
              </div>

              <div class=\"property-price\">
                <span class=\"price-amount\">\$";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 78, $this->source); })()), "price", [], "any", false, false, false, 78), 2, ".", ","), "html", null, true);
        yield "</span>
                <span class=\"price-period\">per night</span>
              </div>

                
                ";
        // line 83
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 83, $this->source); })()), "status", [], "any", false, false, false, 83) == "available")) {
            // line 84
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_new", ["propertyId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)]), "html", null, true);
            yield "\"
   class=\"btn btn-book-now\">
    BOOK THIS ROOM NOW
</a>
                    <p class=\"mt-3 text-muted\">You will be redirected to our secure booking page.</p>
                ";
        } else {
            // line 90
            yield "                    <button class=\"btn btn-book-now\" disabled>
                        ROOM UNAVAILABLE
                    </button>
                    <p class=\"mt-3 text-danger\">This property is currently ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 93, $this->source); })()), "status", [], "any", false, false, false, 93), ["_" => " "])), "html", null, true);
            yield ".</p>
                ";
        }
        // line 95
        yield "
            </div>
            </div>
          </div>
        </div>
                 <!-- Property Gallery -->
        <div class=\"property-gallery mb-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <h3 class=\"section-subtitle mb-4\">Property Gallery</h3>
          <div class=\"gallery-grid\">
            <div class=\"gallery-main\">
               ";
        // line 105
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 105, $this->source); })()), "images", [], "any", false, false, false, 105))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 106, $this->source); })()), "images", [], "any", false, false, false, 106), "first", [], "any", false, false, false, 106), "filename", [], "any", false, false, false, 106))), "html", null, true);
            yield "\" class=\"glightbox\">
              ";
        } else {
            // line 108
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/placeholder-property.webp"), "html", null, true);
            yield "\" alt=\"No Image Available\" class=\"img-fluid w-100\">
              ";
        }
        // line 110
        yield "            </div>
            <div class=\"gallery-thumbnails\">
                ";
        // line 113
        yield "            ";
        // line 114
        yield "            ";
        // line 115
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 115, $this->source); })()), "images", [], "any", false, false, false, 115)) > 1)) {
            // line 116
            yield "

                ";
            // line 119
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 119, $this->source); })()), "images", [], "any", false, false, false, 119), 1));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 120
                yield "
 
                      <img src=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 122))), "html", null, true);
                yield "\" class=\"glightbox\">


                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            yield "
            ";
        }
        // line 128
        yield "            </div>
          </div>
        </div>
            

        <!-- Property Description -->
        <div class=\"row mb-5\">
          <div class=\"col-lg-8\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"property-description\">
              <h3 class=\"section-subtitle\">Property Overview</h3>
              ";
        // line 139
        yield "              <p>";
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 139, $this->source); })()), "longdescription", [], "any", false, false, false, 139), "html", null, true));
        yield "</p>
            </div>
          </div>
          <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"highlight-box\">
              <div class=\"highlight-icon\">
                <i class=\"bi bi-star\"></i>
              </div>
              <h4>Premium Experience</h4>
              <p>\"The most beautiful suite we've ever stayed in. The ocean view is absolutely breathtaking and the attention to detail is remarkable.\"</p>
              <div class=\"quote-author\">
                <span>- Sarah M., Verified Guest</span>
              </div>
            </div>
          </div>
        </div>

          

            <!-- Amenities and Features -->
        <div class=\"property-amenities mb-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <h3 class=\"section-subtitle mb-4\">Property Amenities</h3>
          <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 mb-4\">
              <div class=\"amenity-category\">
                <h5>Sleeping</h5>
                <ul>
                  <li><i class=\"bi bi-check2\"></i> King size bed</li>
                  <li><i class=\"bi bi-check2\"></i> Premium linens</li>
                  <li><i class=\"bi bi-check2\"></i> Memory foam pillows</li>
                  <li><i class=\"bi bi-check2\"></i> Blackout curtains</li>
                </ul>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-4\">
              <div class=\"amenity-category\">
                <h5>Technology</h5>
                <ul>
                  <li><i class=\"bi bi-check2\"></i> High-speed WiFi</li>
                  <li><i class=\"bi bi-check2\"></i> 55\" Smart TV</li>
                  <li><i class=\"bi bi-check2\"></i> Bluetooth speakers</li>
                  <li><i class=\"bi bi-check2\"></i> USB charging ports</li>
                </ul>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-4\">
              <div class=\"amenity-category\">
                <h5>Comfort</h5>
                <ul>
                  <li><i class=\"bi bi-check2\"></i> Climate control</li>
                  <li><i class=\"bi bi-check2\"></i> Mini refrigerator</li>
                  <li><i class=\"bi bi-check2\"></i> Coffee machine</li>
                  <li><i class=\"bi bi-check2\"></i> Safe deposit box</li>
                </ul>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-4\">
              <div class=\"amenity-category\">
                <h5>Bathroom</h5>
                <ul>
                  <li><i class=\"bi bi-check2\"></i> Marble bathroom</li>
                  <li><i class=\"bi bi-check2\"></i> Rain shower</li>
                  <li><i class=\"bi bi-check2\"></i> Luxury toiletries</li>
                  <li><i class=\"bi bi-check2\"></i> Heated floors</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Tabbed Information -->
        <div class=\"property-tabs mb-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <ul class=\"nav nav-tabs\" id=\"property-detailsRoomTabs\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
              <button class=\"nav-link active\" id=\"property-details-policies-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#property-details-policies\" type=\"button\" role=\"tab\">Policies</button>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
              <button class=\"nav-link\" id=\"property-details-location-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#property-details-location\" type=\"button\" role=\"tab\">Location</button>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
              <button class=\"nav-link\" id=\"property-details-services-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#property-details-services\" type=\"button\" role=\"tab\">Services</button>
            </li>
          </ul>
          <div class=\"tab-content\" id=\"property-detailsRoomTabsContent\">
            <div class=\"tab-pane fade show active\" id=\"property-details-policies\" role=\"tabpanel\">
              <div class=\"tab-content-wrapper\">
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <h6>Check-in / Check-out</h6>
                    <p>Check-in: 3:00 PM<br>Check-out: 11:00 AM</p>
                  </div>
                  <div class=\"col-md-4\">
                    <h6>Cancellation</h6>
                    <p>Free cancellation up to 24 hours before arrival</p>
                  </div>
                  <div class=\"col-md-4\">
                    <h6>Pets</h6>
                    <p>Pet-friendly with additional fee</p>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane fade\" id=\"property-details-location\" role=\"tabpanel\">
              <div class=\"tab-content-wrapper\">
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <h6>Nearby Attractions</h6>
                    <ul>
                      <li>Beach access - 2 minutes walk</li>
                      <li>Marina District - 0.5 miles</li>
                      <li>Historic Downtown - 1.2 miles</li>
                      <li>Shopping Center - 0.8 miles</li>
                    </ul>
                  </div>
                  <div class=\"col-md-6\">
                    <h6>Transportation</h6>
                    <ul>
                      <li>Airport shuttle available</li>
                      <li>Valet parking - \$25/night</li>
                      <li>Public transportation nearby</li>
                      <li>Car rental desk in lobby</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane fade\" id=\"property-details-services\" role=\"tabpanel\">
              <div class=\"tab-content-wrapper\">
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <h6>Concierge</h6>
                    <p>24/7 concierge service for reservations and recommendations</p>
                  </div>
                  <div class=\"col-md-4\">
                    <h6>Property Service</h6>
                    <p>Available 6:00 AM - 11:00 PM daily</p>
                  </div>
                  <div class=\"col-md-4\">
                    <h6>Housekeeping</h6>
                    <p>Daily housekeeping and turndown service</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Optional Add-ons -->
        <div class=\"property-addons mb-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <h3 class=\"section-subtitle mb-4\">Enhance Your Stay</h3>
          <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"addon-card\">
                <div class=\"addon-icon\">
                  <i class=\"bi bi-cup-hot\"></i>
                </div>
                <h5>Breakfast Package</h5>
                <p>Start your day with our signature breakfast buffet featuring fresh local ingredients</p>
                <div class=\"addon-price\">+\$35 per person</div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"addon-card\">
                <div class=\"addon-icon\">
                  <i class=\"bi bi-flower1\"></i>
                </div>
                <h5>Spa Access</h5>
                <p>Enjoy unlimited access to our luxury spa facilities during your stay</p>
                <div class=\"addon-price\">+\$75 per day</div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"addon-card\">
                <div class=\"addon-icon\">
                  <i class=\"bi bi-airplane\"></i>
                </div>
                <h5>Airport Transfer</h5>
                <p>Private luxury vehicle transfer to and from the airport</p>
                <div class=\"addon-price\">+\$95 round trip</div>
              </div>
            </div>
          </div>
        </div>
 


      </div>

    </section><!-- /Property Details Section -->

  

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
        return "property/show.html.twig";
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
        return array (  317 => 139,  305 => 128,  301 => 126,  291 => 122,  287 => 120,  282 => 119,  278 => 116,  275 => 115,  273 => 114,  271 => 113,  267 => 110,  261 => 108,  255 => 106,  253 => 105,  241 => 95,  236 => 93,  231 => 90,  221 => 84,  219 => 83,  211 => 78,  202 => 72,  198 => 71,  194 => 70,  190 => 69,  184 => 66,  161 => 46,  158 => 45,  152 => 43,  146 => 41,  144 => 40,  139 => 37,  137 => 36,  135 => 35,  115 => 17,  111 => 16,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block title %}Property Details - UrbanStay Luxury Apartment Rental{% endblock %}

{% block body %}

  <main class=\"main\">
    
     <!-- Page Title -->
    <div class=\"page-title light-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Property</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ path('app_home') }}\">Home</a></li>
            <li><a href=\"{{ path('app_property_index') }}\">Properties</a></li>
            <li class=\"current\">Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->



   <!-- Property Details Section -->
    <section id=\"property-details\" class=\"property-details section\">

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

       
        <!-- Property Header with Image and Basic Info -->
            
            {# ---------------------------------------------------------------- #}
            {# FEATURE IMAGE (First Image) #}
            {# ---------------------------------------------------------------- #}
        <div class=\"row align-items-center mb-5\">
          <div class=\"col-lg-7\" data-aos=\"fade-right\" data-aos-delay=\"200\">
            <div class=\"property-header-image\">
              {% if property.images is not empty %}
                <img src=\"{{ asset('uploads/images/' ~ property.images.first.filename) }}\" class=\"img-fluid w-100\">
              {% else %}
                <img src=\"{{ asset('assets/img/apartment rental/placeholder-property.webp') }}\" alt=\"No Image Available\" class=\"img-fluid w-100\">
              {% endif %}
               <div class=\"property-badge\">
                <span class=\"text-white\">{{ property.type }}</span>
              </div>
            </div>
          </div>

          <div class=\"col-lg-5\" data-aos=\"fade-left\" data-aos-delay=\"300\">
            <div class=\"property-header-content\">
              <div class=\"property-rating mb-3\">
                <span class=\"rating-score\">4.8</span>
                <div class=\"stars\">
                  <i class=\"bi bi-star-fill\"></i>
                  <i class=\"bi bi-star-fill\"></i>
                  <i class=\"bi bi-star-fill\"></i>
                  <i class=\"bi bi-star-fill\"></i>
                  <i class=\"bi bi-star-fill\"></i>
                </div>
               
                <span class=\"reviews-count\">(127 reviews)</span>
              </div>
             <div class=\"property-description mt-4\">
               <h1 class=\"property-title\"> Property: {{ property.number }}</h1>
              <h3 class=\"mt-4\">Property Specifications</h3>
              <div class=\"row gy-3 amenities-list\">
                <div class=\"col-md-4\"><i class=\"bi bi-person-fill\"></i> Capacity: {{ property.capacity }} Guests</div>
                <div class=\"col-md-4\"><i class=\"bi bi-rulers\"></i> Size: {{ property.size }}</div>
                <div class=\"col-md-4\"><i class=\"bi bi-tag\"></i> Type: {{ property.type }}</div>
                <div class=\"col-md-4\"><i class=\"bi bi-check-circle\"></i> Status: {{ property.status|capitalize }}</div>
                <div class=\"col-md-4\"><i class=\"bi bi-wifi\"></i> High-Speed Wi-Fi</div>
                <div class=\"col-md-4\"><i class=\"bi bi-cup-hot\"></i> 24/7 Property Service</div>
              </div>

              <div class=\"property-price\">
                <span class=\"price-amount\">\${{ property.price|number_format(2, '.', ',') }}</span>
                <span class=\"price-period\">per night</span>
              </div>

                
                {% if property.status == 'available' %}
                    <a href=\"{{ path('app_reservation_new', { propertyId: property.id }) }}\"
   class=\"btn btn-book-now\">
    BOOK THIS ROOM NOW
</a>
                    <p class=\"mt-3 text-muted\">You will be redirected to our secure booking page.</p>
                {% else %}
                    <button class=\"btn btn-book-now\" disabled>
                        ROOM UNAVAILABLE
                    </button>
                    <p class=\"mt-3 text-danger\">This property is currently {{ property.status|replace({'_': ' '})|upper }}.</p>
                {% endif %}

            </div>
            </div>
          </div>
        </div>
                 <!-- Property Gallery -->
        <div class=\"property-gallery mb-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <h3 class=\"section-subtitle mb-4\">Property Gallery</h3>
          <div class=\"gallery-grid\">
            <div class=\"gallery-main\">
               {% if property.images is not empty %}
                <img src=\"{{ asset('uploads/images/' ~ property.images.first.filename) }}\" class=\"glightbox\">
              {% else %}
                <img src=\"{{ asset('assets/img/apartment rental/placeholder-property.webp') }}\" alt=\"No Image Available\" class=\"img-fluid w-100\">
              {% endif %}
            </div>
            <div class=\"gallery-thumbnails\">
                {# ---------------------------------------------------------------- #}
            {# GALLERY SECTION (Remaining Images) #}
            {# ---------------------------------------------------------------- #}
            {% if property.images|length > 1 %}


                {# Loop through all images, skipping the first one (index 0) #}
                {% for image in property.images|slice(1) %}

 
                      <img src=\"{{ asset('uploads/images/' ~ image.filename) }}\" class=\"glightbox\">


                {% endfor %}

            {% endif %}
            </div>
          </div>
        </div>
            

        <!-- Property Description -->
        <div class=\"row mb-5\">
          <div class=\"col-lg-8\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"property-description\">
              <h3 class=\"section-subtitle\">Property Overview</h3>
              {# Display the long description #}
              <p>{{ property.longdescription|nl2br }}</p>
            </div>
          </div>
          <div class=\"col-lg-4\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"highlight-box\">
              <div class=\"highlight-icon\">
                <i class=\"bi bi-star\"></i>
              </div>
              <h4>Premium Experience</h4>
              <p>\"The most beautiful suite we've ever stayed in. The ocean view is absolutely breathtaking and the attention to detail is remarkable.\"</p>
              <div class=\"quote-author\">
                <span>- Sarah M., Verified Guest</span>
              </div>
            </div>
          </div>
        </div>

          

            <!-- Amenities and Features -->
        <div class=\"property-amenities mb-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <h3 class=\"section-subtitle mb-4\">Property Amenities</h3>
          <div class=\"row\">
            <div class=\"col-lg-3 col-md-6 mb-4\">
              <div class=\"amenity-category\">
                <h5>Sleeping</h5>
                <ul>
                  <li><i class=\"bi bi-check2\"></i> King size bed</li>
                  <li><i class=\"bi bi-check2\"></i> Premium linens</li>
                  <li><i class=\"bi bi-check2\"></i> Memory foam pillows</li>
                  <li><i class=\"bi bi-check2\"></i> Blackout curtains</li>
                </ul>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-4\">
              <div class=\"amenity-category\">
                <h5>Technology</h5>
                <ul>
                  <li><i class=\"bi bi-check2\"></i> High-speed WiFi</li>
                  <li><i class=\"bi bi-check2\"></i> 55\" Smart TV</li>
                  <li><i class=\"bi bi-check2\"></i> Bluetooth speakers</li>
                  <li><i class=\"bi bi-check2\"></i> USB charging ports</li>
                </ul>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-4\">
              <div class=\"amenity-category\">
                <h5>Comfort</h5>
                <ul>
                  <li><i class=\"bi bi-check2\"></i> Climate control</li>
                  <li><i class=\"bi bi-check2\"></i> Mini refrigerator</li>
                  <li><i class=\"bi bi-check2\"></i> Coffee machine</li>
                  <li><i class=\"bi bi-check2\"></i> Safe deposit box</li>
                </ul>
              </div>
            </div>
            <div class=\"col-lg-3 col-md-6 mb-4\">
              <div class=\"amenity-category\">
                <h5>Bathroom</h5>
                <ul>
                  <li><i class=\"bi bi-check2\"></i> Marble bathroom</li>
                  <li><i class=\"bi bi-check2\"></i> Rain shower</li>
                  <li><i class=\"bi bi-check2\"></i> Luxury toiletries</li>
                  <li><i class=\"bi bi-check2\"></i> Heated floors</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Tabbed Information -->
        <div class=\"property-tabs mb-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <ul class=\"nav nav-tabs\" id=\"property-detailsRoomTabs\" role=\"tablist\">
            <li class=\"nav-item\" role=\"presentation\">
              <button class=\"nav-link active\" id=\"property-details-policies-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#property-details-policies\" type=\"button\" role=\"tab\">Policies</button>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
              <button class=\"nav-link\" id=\"property-details-location-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#property-details-location\" type=\"button\" role=\"tab\">Location</button>
            </li>
            <li class=\"nav-item\" role=\"presentation\">
              <button class=\"nav-link\" id=\"property-details-services-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#property-details-services\" type=\"button\" role=\"tab\">Services</button>
            </li>
          </ul>
          <div class=\"tab-content\" id=\"property-detailsRoomTabsContent\">
            <div class=\"tab-pane fade show active\" id=\"property-details-policies\" role=\"tabpanel\">
              <div class=\"tab-content-wrapper\">
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <h6>Check-in / Check-out</h6>
                    <p>Check-in: 3:00 PM<br>Check-out: 11:00 AM</p>
                  </div>
                  <div class=\"col-md-4\">
                    <h6>Cancellation</h6>
                    <p>Free cancellation up to 24 hours before arrival</p>
                  </div>
                  <div class=\"col-md-4\">
                    <h6>Pets</h6>
                    <p>Pet-friendly with additional fee</p>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane fade\" id=\"property-details-location\" role=\"tabpanel\">
              <div class=\"tab-content-wrapper\">
                <div class=\"row\">
                  <div class=\"col-md-6\">
                    <h6>Nearby Attractions</h6>
                    <ul>
                      <li>Beach access - 2 minutes walk</li>
                      <li>Marina District - 0.5 miles</li>
                      <li>Historic Downtown - 1.2 miles</li>
                      <li>Shopping Center - 0.8 miles</li>
                    </ul>
                  </div>
                  <div class=\"col-md-6\">
                    <h6>Transportation</h6>
                    <ul>
                      <li>Airport shuttle available</li>
                      <li>Valet parking - \$25/night</li>
                      <li>Public transportation nearby</li>
                      <li>Car rental desk in lobby</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class=\"tab-pane fade\" id=\"property-details-services\" role=\"tabpanel\">
              <div class=\"tab-content-wrapper\">
                <div class=\"row\">
                  <div class=\"col-md-4\">
                    <h6>Concierge</h6>
                    <p>24/7 concierge service for reservations and recommendations</p>
                  </div>
                  <div class=\"col-md-4\">
                    <h6>Property Service</h6>
                    <p>Available 6:00 AM - 11:00 PM daily</p>
                  </div>
                  <div class=\"col-md-4\">
                    <h6>Housekeeping</h6>
                    <p>Daily housekeeping and turndown service</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Optional Add-ons -->
        <div class=\"property-addons mb-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <h3 class=\"section-subtitle mb-4\">Enhance Your Stay</h3>
          <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"addon-card\">
                <div class=\"addon-icon\">
                  <i class=\"bi bi-cup-hot\"></i>
                </div>
                <h5>Breakfast Package</h5>
                <p>Start your day with our signature breakfast buffet featuring fresh local ingredients</p>
                <div class=\"addon-price\">+\$35 per person</div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"addon-card\">
                <div class=\"addon-icon\">
                  <i class=\"bi bi-flower1\"></i>
                </div>
                <h5>Spa Access</h5>
                <p>Enjoy unlimited access to our luxury spa facilities during your stay</p>
                <div class=\"addon-price\">+\$75 per day</div>
              </div>
            </div>
            <div class=\"col-lg-4 col-md-6 mb-4\">
              <div class=\"addon-card\">
                <div class=\"addon-icon\">
                  <i class=\"bi bi-airplane\"></i>
                </div>
                <h5>Airport Transfer</h5>
                <p>Private luxury vehicle transfer to and from the airport</p>
                <div class=\"addon-price\">+\$95 round trip</div>
              </div>
            </div>
          </div>
        </div>
 


      </div>

    </section><!-- /Property Details Section -->

  

  </main>
{% endblock %}
", "property/show.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\property\\show.html.twig");
    }
}
