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

/* service/index.html.twig */
class __TwigTemplate_20068c81f8fd2e775b10530c5c2c9701 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/index.html.twig"));

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

        yield "Our Services – UrbanStay Luxury";
        
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
/* ================= GRANDORIA SERVICES STYLE ================= */
.services-header {
  background: linear-gradient(135deg, #5c3d2e, #7a5238);
  color: #fff;
  padding: 60px 0;
}

.services-header h1 {
  font-weight: 600;
  letter-spacing: 1px;
}

.service-card {
  background: #ffffff;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 15px 40px rgba(0,0,0,0.08);
  transition: all .35s ease;
  height: 100%;
}

.service-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 25px 55px rgba(0,0,0,0.15);
}

.service-image {
  height: 220px;
  background-size: cover;
  background-position: center;
}

.service-body {
  padding: 24px;
}

.service-title {
  color: #5c3d2e;
  font-weight: 600;
}

.service-category {
  font-size: .85rem;
  color: #b68d40;
  text-transform: uppercase;
  letter-spacing: .08em;
}

.service-price {
  font-size: 1.2rem;
  font-weight: bold;
  color: #b68d40;
}

.btn-gold {
  background: linear-gradient(135deg, #b68d40, #d6b46a);
  border: none;
  color: #fff;
  border-radius: 30px;
  padding: 8px 22px;
}

.btn-gold:hover {
  background: linear-gradient(135deg, #a07a35, #c9a14f);
  color: #fff;
}

.btn-outline-gold {
  border: 1px solid #b68d40;
  color: #b68d40;
  border-radius: 30px;
  padding: 8px 22px;
}

.btn-outline-gold:hover {
  background: #b68d40;
  color: #fff;
}

.admin-actions {
  margin-top: 15px;
}
</style>
 <!-- Page Title -->
    <div class=\"page-title light-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Services</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
            <li class=\"current\">Services</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

<!-- ================= HEADER ================= -->
<section class=\"services-header\">
  <div class=\"container text-center\">
    <h1>Our Premium Services</h1>
    <p class=\"mt-2\">Exclusive experiences crafted for your comfort</p>
  </div>
</section>

<!-- ================= SERVICES ================= -->
<section class=\"container my-5\">
  <div class=\"row g-4\">

    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 116, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["service"]) {
            // line 117
            yield "      <div class=\"col-lg-4 col-md-6\">
        <div class=\"service-card\">

          <!-- IMAGE -->
          <div class=\"service-image\"
               style=\"background-image:url('";
            // line 122
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "images", [], "any", false, false, false, 122)) > 0)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 123
$context["service"], "images", [], "any", false, false, false, 123)), "filename", [], "any", false, false, false, 123))), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/amenities-3.webp"), "html", null, true)));
            // line 124
            yield "')\">
          </div>

          <!-- BODY -->
          <div class=\"service-body\">
            <span class=\"service-category\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "category", [], "any", false, false, false, 129), "html", null, true);
            yield "</span>
            <h4 class=\"service-title mt-2\">";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "nom", [], "any", false, false, false, 130), "html", null, true);
            yield "</h4>

            <p class=\"text-muted mt-2\">
              ";
            // line 133
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["service"], "description", [], "any", false, false, false, 133)) > 100)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 134
$context["service"], "description", [], "any", false, false, false, 134), 0, 100) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source,             // line 135
$context["service"], "description", [], "any", false, false, false, 135), "html", null, true)));
            yield "
            </p>

            ";
            // line 138
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["service"], "servtime", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 139
                yield "              <p class=\"small text-muted\">
                <i class=\"bi bi-clock\"></i> ";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "servtime", [], "any", false, false, false, 140), "html", null, true);
                yield "
              </p>
            ";
            }
            // line 143
            yield "
            <div class=\"d-flex justify-content-between align-items-center mt-3\">
              <div class=\"service-price\">
                \$";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["service"], "price", [], "any", false, false, false, 146), "html", null, true);
            yield "
              </div>

              <a href=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 149)]), "html", null, true);
            yield "\"
                 class=\"btn btn-outline-gold btn-sm\">
                View Details
              </a>
            </div>

            ";
            // line 155
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 156
                yield "              <div class=\"admin-actions text-end\">
                <a href=\"";
                // line 157
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["service"], "id", [], "any", false, false, false, 157)]), "html", null, true);
                yield "\"
                   class=\"btn btn-sm btn-outline-secondary\">
                  <i class=\"bi bi-pencil\"></i> Edit
                </a>
              </div>
            ";
            }
            // line 163
            yield "          </div>

        </div>
      </div>
    ";
            $context['_iterated'] = true;
        }
        // line 167
        if (!$context['_iterated']) {
            // line 168
            yield "      <div class=\"col-12 text-center\">
        <p class=\"text-muted fst-italic\">No services available at the moment.</p>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['service'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        yield "
  </div>
<br>

       <div class=\"text-center mt-5\" data-aos=\"fade-up\">
          <a href=\"";
        // line 177
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_restaurant");
        yield "\"\">
             Explore Our Restaurant Menu <i bi bi-arrow-right-circle\"></i>
          </a>
        </div>


  ";
        // line 183
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 184
            yield "    <div class=\"text-center mt-5\">
      <a href=\"";
            // line 185
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_new");
            yield "\" class=\"btn btn-gold\">
        <i class=\"bi bi-plus-circle\"></i> Add New Service
      </a>
    </div>
  ";
        }
        // line 190
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
        return "service/index.html.twig";
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
        return array (  348 => 190,  340 => 185,  337 => 184,  335 => 183,  326 => 177,  319 => 172,  310 => 168,  308 => 167,  300 => 163,  291 => 157,  288 => 156,  286 => 155,  277 => 149,  271 => 146,  266 => 143,  260 => 140,  257 => 139,  255 => 138,  249 => 135,  248 => 134,  247 => 133,  241 => 130,  237 => 129,  230 => 124,  228 => 123,  227 => 122,  220 => 117,  215 => 116,  193 => 97,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Our Services – UrbanStay Luxury{% endblock %}

{% block body %}

<style>
/* ================= GRANDORIA SERVICES STYLE ================= */
.services-header {
  background: linear-gradient(135deg, #5c3d2e, #7a5238);
  color: #fff;
  padding: 60px 0;
}

.services-header h1 {
  font-weight: 600;
  letter-spacing: 1px;
}

.service-card {
  background: #ffffff;
  border-radius: 18px;
  overflow: hidden;
  box-shadow: 0 15px 40px rgba(0,0,0,0.08);
  transition: all .35s ease;
  height: 100%;
}

.service-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 25px 55px rgba(0,0,0,0.15);
}

.service-image {
  height: 220px;
  background-size: cover;
  background-position: center;
}

.service-body {
  padding: 24px;
}

.service-title {
  color: #5c3d2e;
  font-weight: 600;
}

.service-category {
  font-size: .85rem;
  color: #b68d40;
  text-transform: uppercase;
  letter-spacing: .08em;
}

.service-price {
  font-size: 1.2rem;
  font-weight: bold;
  color: #b68d40;
}

.btn-gold {
  background: linear-gradient(135deg, #b68d40, #d6b46a);
  border: none;
  color: #fff;
  border-radius: 30px;
  padding: 8px 22px;
}

.btn-gold:hover {
  background: linear-gradient(135deg, #a07a35, #c9a14f);
  color: #fff;
}

.btn-outline-gold {
  border: 1px solid #b68d40;
  color: #b68d40;
  border-radius: 30px;
  padding: 8px 22px;
}

.btn-outline-gold:hover {
  background: #b68d40;
  color: #fff;
}

.admin-actions {
  margin-top: 15px;
}
</style>
 <!-- Page Title -->
    <div class=\"page-title light-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Services</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ path('app_home') }}\">Home</a></li>
            <li class=\"current\">Services</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

<!-- ================= HEADER ================= -->
<section class=\"services-header\">
  <div class=\"container text-center\">
    <h1>Our Premium Services</h1>
    <p class=\"mt-2\">Exclusive experiences crafted for your comfort</p>
  </div>
</section>

<!-- ================= SERVICES ================= -->
<section class=\"container my-5\">
  <div class=\"row g-4\">

    {% for service in services %}
      <div class=\"col-lg-4 col-md-6\">
        <div class=\"service-card\">

          <!-- IMAGE -->
          <div class=\"service-image\"
               style=\"background-image:url('{{ service.images|length > 0
                 ? asset('uploads/images/' ~ service.images|first.filename)
                 : asset('assets/img/apartment rental/amenities-3.webp') }}')\">
          </div>

          <!-- BODY -->
          <div class=\"service-body\">
            <span class=\"service-category\">{{ service.category }}</span>
            <h4 class=\"service-title mt-2\">{{ service.nom }}</h4>

            <p class=\"text-muted mt-2\">
              {{ service.description|length > 100
                ? service.description|slice(0, 100) ~ '...'
                : service.description }}
            </p>

            {% if service.servtime %}
              <p class=\"small text-muted\">
                <i class=\"bi bi-clock\"></i> {{ service.servtime }}
              </p>
            {% endif %}

            <div class=\"d-flex justify-content-between align-items-center mt-3\">
              <div class=\"service-price\">
                \${{ service.price }}
              </div>

              <a href=\"{{ path('app_service_show', {id: service.id}) }}\"
                 class=\"btn btn-outline-gold btn-sm\">
                View Details
              </a>
            </div>

            {% if is_granted('ROLE_ADMIN') %}
              <div class=\"admin-actions text-end\">
                <a href=\"{{ path('app_service_edit', {id: service.id}) }}\"
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
        <p class=\"text-muted fst-italic\">No services available at the moment.</p>
      </div>
    {% endfor %}

  </div>
<br>

       <div class=\"text-center mt-5\" data-aos=\"fade-up\">
          <a href=\"{{ path('app_restaurant') }}\"\">
             Explore Our Restaurant Menu <i bi bi-arrow-right-circle\"></i>
          </a>
        </div>


  {% if is_granted('ROLE_ADMIN') %}
    <div class=\"text-center mt-5\">
      <a href=\"{{ path('app_service_new') }}\" class=\"btn btn-gold\">
        <i class=\"bi bi-plus-circle\"></i> Add New Service
      </a>
    </div>
  {% endif %}
</section>

{% endblock %}
", "service/index.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\service\\index.html.twig");
    }
}
