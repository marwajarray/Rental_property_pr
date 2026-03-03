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

/* property/index.html.twig */
class __TwigTemplate_e86581d991b3885b8a431b424490a46a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/index.html.twig"));

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

        yield "Our Properties – UrbanStay Luxury";
        
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
<style>
/* ================= GRANDORIA LUXURY STYLE ================= */
.page-header {
  background: linear-gradient(135deg, #5c3d2e, #7a5238);
  color: #fff;
  padding: 60px 0;
}

.page-header h1 {
  font-weight: 600;
  letter-spacing: 1px;
}

.property-card {
  background: #ffffff;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 15px 40px rgba(0,0,0,0.08);
  transition: all .35s ease;
}

.property-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 25px 55px rgba(0,0,0,0.15);
}

.property-image {
  height: 230px;
  background-size: cover;
  background-position: center;
}

.property-content {
  padding: 24px;
}

.property-title {
  color: #5c3d2e;
  font-weight: 600;
}

.property-meta {
  font-size: .9rem;
  color: #8c6b4f;
}

.price {
  font-size: 1.3rem;
  font-weight: bold;
  color: #b68d40;
}

.btn-luxury {
  background: linear-gradient(135deg, #b68d40, #d6b46a);
  border: none;
  color: #fff;
  border-radius: 30px;
  padding: 8px 22px;
}

.btn-luxury:hover {
  background: linear-gradient(135deg, #a07a35, #c9a14f);
  color: #fff;
}

.btn-outline-luxury {
  border: 1px solid #b68d40;
  color: #b68d40;
  border-radius: 30px;
  padding: 8px 22px;
}

.btn-outline-luxury:hover {
  background: #b68d40;
  color: #fff;
}

.admin-btn {
  margin-top: 40px;
}
</style>
    
     <!-- Page Title -->
    <div class=\"page-title light-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Our Properties</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
            <li><a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_property_index");
        yield "\">Properties</a></li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

<!-- ================= HEADER ================= -->
<section class=\"page-header\">
  <div class=\"container text-center\">
    <h1>Our Properties</h1>
    <p class=\"mt-2\">Experience refined comfort and timeless luxury</p>
  </div>
</section>

<!-- ================= ROOMS GRID ================= -->
<section class=\"container my-5\">
  <div class=\"row g-4\">

    ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 114, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 115
            yield "      <div class=\"col-lg-4 col-md-6\">
        <div class=\"property-card\">

          <!-- IMAGE -->
          <div class=\"property-image\"
               style=\"background-image:url('";
            // line 120
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["property"], "images", [], "any", false, false, false, 120)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 121
$context["property"], "images", [], "any", false, false, false, 121)), "filename", [], "any", false, false, false, 121))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/property-6.webp"), "html", null, true)));
            // line 122
            yield "')\">
          </div>

          <!-- CONTENT -->
          <div class=\"property-content\">
            <h4 class=\"property-title\">";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["property"], "type", [], "any", false, false, false, 127), "html", null, true);
            yield "</h4>

            <p class=\"property-meta mb-2\">
              <i class=\"bi bi-people\"></i> ";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["property"], "capacity", [], "any", false, false, false, 130), "html", null, true);
            yield " Guests &nbsp; • &nbsp;
              <i class=\"bi bi-wifi\"></i> Free Wi-Fi
            </p>

            <p class=\"mb-3 text-muted\">
              ";
            // line 135
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["property"], "shortdescription", [], "any", true, true, false, 135) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["property"], "shortdescription", [], "any", false, false, false, 135)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["property"], "shortdescription", [], "any", false, false, false, 135), "html", null, true)) : ("Luxury accommodation with premium amenities."));
            yield "
            </p>

            <div class=\"d-flex justify-content-between align-items-center\">
              <div class=\"price\">
                \$";
            // line 140
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["property"], "price", [], "any", false, false, false, 140), "html", null, true);
            yield " <small>/ night</small>
              </div>

              <a href=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_property_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 143)]), "html", null, true);
            yield "\"
                 class=\"btn btn-outline-luxury\">
                View Details
              </a>
            </div>

            ";
            // line 149
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 150
                yield "              <div class=\"mt-3 text-end\">
                <a href=\"";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_property_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 151)]), "html", null, true);
                yield "\"
                   class=\"btn btn-sm btn-outline-secondary\">
                  <i class=\"bi bi-pencil\"></i> Edit
                </a>
              </div>
            ";
            }
            // line 157
            yield "          </div>

        </div>
      </div>
    ";
            $context['_iterated'] = true;
        }
        // line 161
        if (!$context['_iterated']) {
            // line 162
            yield "      <div class=\"col-12 text-center\">
        <p class=\"text-muted fst-italic\">No properties available at the moment.</p>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['property'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
        yield "
  </div>

  ";
        // line 169
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 170
            yield "    <div class=\"text-center admin-btn\">
      <a href=\"";
            // line 171
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_property_new");
            yield "\" class=\"btn btn-luxury\">
        <i class=\"bi bi-plus-circle\"></i> Add New Property
      </a>
    </div>
  ";
        }
        // line 176
        yield "</section>

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
        return "property/index.html.twig";
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
        return array (  326 => 176,  318 => 171,  315 => 170,  313 => 169,  308 => 166,  299 => 162,  297 => 161,  289 => 157,  280 => 151,  277 => 150,  275 => 149,  266 => 143,  260 => 140,  252 => 135,  244 => 130,  238 => 127,  231 => 122,  229 => 121,  228 => 120,  221 => 115,  216 => 114,  195 => 96,  191 => 95,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Our Properties – UrbanStay Luxury{% endblock %}

{% block body %}

<style>
/* ================= GRANDORIA LUXURY STYLE ================= */
.page-header {
  background: linear-gradient(135deg, #5c3d2e, #7a5238);
  color: #fff;
  padding: 60px 0;
}

.page-header h1 {
  font-weight: 600;
  letter-spacing: 1px;
}

.property-card {
  background: #ffffff;
  border-radius: 16px;
  overflow: hidden;
  box-shadow: 0 15px 40px rgba(0,0,0,0.08);
  transition: all .35s ease;
}

.property-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 25px 55px rgba(0,0,0,0.15);
}

.property-image {
  height: 230px;
  background-size: cover;
  background-position: center;
}

.property-content {
  padding: 24px;
}

.property-title {
  color: #5c3d2e;
  font-weight: 600;
}

.property-meta {
  font-size: .9rem;
  color: #8c6b4f;
}

.price {
  font-size: 1.3rem;
  font-weight: bold;
  color: #b68d40;
}

.btn-luxury {
  background: linear-gradient(135deg, #b68d40, #d6b46a);
  border: none;
  color: #fff;
  border-radius: 30px;
  padding: 8px 22px;
}

.btn-luxury:hover {
  background: linear-gradient(135deg, #a07a35, #c9a14f);
  color: #fff;
}

.btn-outline-luxury {
  border: 1px solid #b68d40;
  color: #b68d40;
  border-radius: 30px;
  padding: 8px 22px;
}

.btn-outline-luxury:hover {
  background: #b68d40;
  color: #fff;
}

.admin-btn {
  margin-top: 40px;
}
</style>
    
     <!-- Page Title -->
    <div class=\"page-title light-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Our Properties</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ path('app_home') }}\">Home</a></li>
            <li><a href=\"{{ path('app_property_index') }}\">Properties</a></li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

<!-- ================= HEADER ================= -->
<section class=\"page-header\">
  <div class=\"container text-center\">
    <h1>Our Properties</h1>
    <p class=\"mt-2\">Experience refined comfort and timeless luxury</p>
  </div>
</section>

<!-- ================= ROOMS GRID ================= -->
<section class=\"container my-5\">
  <div class=\"row g-4\">

    {% for property in properties %}
      <div class=\"col-lg-4 col-md-6\">
        <div class=\"property-card\">

          <!-- IMAGE -->
          <div class=\"property-image\"
               style=\"background-image:url('{{ property.images|length > 0 
                 ? asset('uploads/images/' ~ property.images|first.filename) 
                 : asset('assets/img/apartment rental/property-6.webp') }}')\">
          </div>

          <!-- CONTENT -->
          <div class=\"property-content\">
            <h4 class=\"property-title\">{{ property.type }}</h4>

            <p class=\"property-meta mb-2\">
              <i class=\"bi bi-people\"></i> {{ property.capacity }} Guests &nbsp; • &nbsp;
              <i class=\"bi bi-wifi\"></i> Free Wi-Fi
            </p>

            <p class=\"mb-3 text-muted\">
              {{ property.shortdescription ?? 'Luxury accommodation with premium amenities.' }}
            </p>

            <div class=\"d-flex justify-content-between align-items-center\">
              <div class=\"price\">
                \${{ property.price }} <small>/ night</small>
              </div>

              <a href=\"{{ path('app_property_show', {id: property.id}) }}\"
                 class=\"btn btn-outline-luxury\">
                View Details
              </a>
            </div>

            {% if is_granted('ROLE_ADMIN') %}
              <div class=\"mt-3 text-end\">
                <a href=\"{{ path('app_property_edit', {id: property.id}) }}\"
                   class=\"btn btn-sm btn-outline-secondary\">
                  <i class=\"bi bi-pencil\"></i> Edit
                </a>
              </div>
            {% endif %}
          </div>

        </div>
      </div>
    {% else %}
      <div class=\"col-12 text-center\">
        <p class=\"text-muted fst-italic\">No properties available at the moment.</p>
      </div>
    {% endfor %}

  </div>

  {% if is_granted('ROLE_ADMIN') %}
    <div class=\"text-center admin-btn\">
      <a href=\"{{ path('app_property_new') }}\" class=\"btn btn-luxury\">
        <i class=\"bi bi-plus-circle\"></i> Add New Property
      </a>
    </div>
  {% endif %}
</section>

{% endblock %}
", "property/index.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\property\\index.html.twig");
    }
}
