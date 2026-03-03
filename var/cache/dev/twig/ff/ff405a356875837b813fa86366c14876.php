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

/* image/index.html.twig */
class __TwigTemplate_a9a755a123ff825f88847d0568cd7636 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "image/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "image/index.html.twig"));

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

        yield "Property Details - UrbanStay Luxury Apartment Rental";
        
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
        <h1 class=\"mb-2 mb-lg-0\">Gallery</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
            <li class=\"current\">Gallery</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


    <!-- Gallery Section -->
    <section id=\"gallery\" class=\"gallery section\">

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"isotope-layout\" data-default-filter=\"*\" data-layout=\"masonry\" data-sort=\"original-order\">
          <ul class=\"apartment rental-filters isotope-filters\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <li data-filter=\"*\" class=\"filter-active\">All</li>
            <li data-filter=\".filter-properties\">Properties</li>
            <li data-filter=\".filter-services\">Services</li>
            <li data-filter=\".filter-events\">Events</li>
          </ul><!-- End Apartment Rental Gallery Filters -->

          <div class=\"row gy-4 isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 38
            yield "              ";
            $context["filterClass"] = "";
            // line 39
            yield "              ";
            $context["title"] = CoreExtension::getAttribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 39);
            // line 40
            yield "              ";
            $context["alt"] = CoreExtension::getAttribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 40);
            // line 41
            yield "              ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["image"], "property", [], "any", false, false, false, 41)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                yield "                ";
                $context["filterClass"] = "filter-properties";
                // line 43
                yield "                ";
                $context["title"] = ((("Property: " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image"], "property", [], "any", false, false, false, 43), "type", [], "any", false, false, false, 43)) . " ") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image"], "property", [], "any", false, false, false, 43), "number", [], "any", false, false, false, 43));
                // line 44
                yield "                ";
                $context["alt"] = "Property image";
                // line 45
                yield "              ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["image"], "service", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 46
                yield "                ";
                $context["filterClass"] = "filter-services";
                // line 47
                yield "                ";
                $context["title"] = ("Service: " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image"], "service", [], "any", false, false, false, 47), "nom", [], "any", false, false, false, 47));
                // line 48
                yield "                ";
                $context["alt"] = "Service image";
                // line 49
                yield "              ";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["image"], "event", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 50
                yield "                ";
                $context["filterClass"] = "filter-events";
                // line 51
                yield "                ";
                $context["title"] = ("Event: " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["image"], "event", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51));
                // line 52
                yield "                ";
                $context["alt"] = "Event image";
                // line 53
                yield "              ";
            }
            // line 54
            yield "              <div class=\"col-lg-4 col-md-6 gallery-item isotope-item ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filterClass"]) || array_key_exists("filterClass", $context) ? $context["filterClass"] : (function () { throw new RuntimeError('Variable "filterClass" does not exist.', 54, $this->source); })()), "html", null, true);
            yield "\">
                <div class=\"gallery-wrapper\">
                  <img src=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 56))), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["alt"]) || array_key_exists("alt", $context) ? $context["alt"] : (function () { throw new RuntimeError('Variable "alt" does not exist.', 56, $this->source); })()), "html", null, true);
            yield "\">
                  <div class=\"gallery-overlay\">
                    <a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 58))), "html", null, true);
            yield "\" class=\"glightbox\" title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 58, $this->source); })()), "html", null, true);
            yield "\">
                      <i class=\"bi bi-eye\"></i>
                    </a>
                  </div>
                </div>
              </div><!-- End Gallery Item -->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "          </div><!-- End Apartment Rental Gallery Items Container -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

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
        return "image/index.html.twig";
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
        return array (  216 => 65,  201 => 58,  194 => 56,  188 => 54,  185 => 53,  182 => 52,  179 => 51,  176 => 50,  173 => 49,  170 => 48,  167 => 47,  164 => 46,  161 => 45,  158 => 44,  155 => 43,  152 => 42,  149 => 41,  146 => 40,  143 => 39,  140 => 38,  136 => 37,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Property Details - UrbanStay Luxury Apartment Rental{% endblock %}

{% block body %}

  <main class=\"main\">

     <!-- Page Title -->
    <div class=\"page-title light-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Gallery</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ path('app_home') }}\">Home</a></li>
            <li class=\"current\">Gallery</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


    <!-- Gallery Section -->
    <section id=\"gallery\" class=\"gallery section\">

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <div class=\"isotope-layout\" data-default-filter=\"*\" data-layout=\"masonry\" data-sort=\"original-order\">
          <ul class=\"apartment rental-filters isotope-filters\" data-aos=\"fade-up\" data-aos-delay=\"100\">
            <li data-filter=\"*\" class=\"filter-active\">All</li>
            <li data-filter=\".filter-properties\">Properties</li>
            <li data-filter=\".filter-services\">Services</li>
            <li data-filter=\".filter-events\">Events</li>
          </ul><!-- End Apartment Rental Gallery Filters -->

          <div class=\"row gy-4 isotope-container\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            {% for image in images %}
              {% set filterClass = '' %}
              {% set title = image.filename %}
              {% set alt = image.filename %}
              {% if image.property %}
                {% set filterClass = 'filter-properties' %}
                {% set title = 'Property: ' ~ image.property.type ~ ' ' ~ image.property.number %}
                {% set alt = 'Property image' %}
              {% elseif image.service %}
                {% set filterClass = 'filter-services' %}
                {% set title = 'Service: ' ~ image.service.nom %}
                {% set alt = 'Service image' %}
              {% elseif image.event %}
                {% set filterClass = 'filter-events' %}
                {% set title = 'Event: ' ~ image.event.name %}
                {% set alt = 'Event image' %}
              {% endif %}
              <div class=\"col-lg-4 col-md-6 gallery-item isotope-item {{ filterClass }}\">
                <div class=\"gallery-wrapper\">
                  <img src=\"{{ asset('uploads/images/' ~ image.filename) }}\" class=\"img-fluid\" alt=\"{{ alt }}\">
                  <div class=\"gallery-overlay\">
                    <a href=\"{{ asset('uploads/images/' ~ image.filename) }}\" class=\"glightbox\" title=\"{{ title }}\">
                      <i class=\"bi bi-eye\"></i>
                    </a>
                  </div>
                </div>
              </div><!-- End Gallery Item -->
            {% endfor %}
          </div><!-- End Apartment Rental Gallery Items Container -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

  </main>
{% endblock %}

", "image/index.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\image\\index.html.twig");
    }
}
