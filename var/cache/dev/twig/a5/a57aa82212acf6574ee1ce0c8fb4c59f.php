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

/* service/show.html.twig */
class __TwigTemplate_869ccac24c5b587e13db28b0117009ea extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/show.html.twig"));

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

        yield "Service: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 3, $this->source); })()), "nom", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        /* Soft Beige Overrides - Consistent with Events */
        :root {
            --accent-beige: #d2b48c;
            --soft-beige: #f5f5dc;
            --dark-beige: #8b7355;
        }
        .btn-beige {
            background-color: var(--accent-beige);
            color: white;
            border: none;
            transition: 0.3s;
        }
        .btn-beige:hover {
            background-color: var(--dark-beige);
            color: white;
        }
        .btn-outline-beige {
            border: 2px solid var(--accent-beige);
            color: var(--dark-beige);
            transition: 0.3s;
        }
        .btn-outline-beige:hover {
            background-color: var(--accent-beige);
            color: white;
        }
        .text-beige { color: var(--dark-beige); }
        
        .sticky-sidebar {
            position: -webkit-sticky;
            position: sticky;
            top: 120px; 
            z-index: 10;
        }
        .category-badge {
            background-color: #f8f1e7;
            color: var(--dark-beige);
            border: 1px solid var(--accent-beige);
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 49
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

        // line 50
        yield "<main class=\"main\">
     <!-- Page Title -->
    <div class=\"page-title light-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Service</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
            <li><a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_index");
        yield "\">Service</a></li>
            <li class=\"current\">Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


    <section class=\"section mt-5\">
        <div class=\"container\">
            <div class=\"row gy-5\">
                
                ";
        // line 71
        yield "                <div class=\"col-lg-8\">
                    <div class=\"card shadow-sm border-0 p-4 mb-5\" style=\"border-radius: 15px;\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <div>
                                <h2 class=\"text-beige fw-bold mb-1\">";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 75, $this->source); })()), "nom", [], "any", false, false, false, 75), "html", null, true);
        yield "</h2>
                                <span class=\"badge category-badge text-uppercase small\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 76, $this->source); })()), "category", [], "any", false, false, false, 76), "html", null, true);
        yield "</span>
                            </div>
                            <span class=\"badge rounded-pill px-4 py-2\" style=\"background-color: var(--accent-beige); font-size: 1.1rem;\">
                                \$";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 79, $this->source); })()), "price", [], "any", false, false, false, 79), "html", null, true);
        yield "
                            </span>
                        </div>

                        <div class=\"row mb-4\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"text-muted small text-uppercase fw-bold d-block\">Schedule</label>
                                <span class=\"fs-5\"><i class=\"bi bi-clock text-beige me-2\"></i> ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 86, $this->source); })()), "servtime", [], "any", false, false, false, 86), "html", null, true);
        yield "</span>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"text-muted small text-uppercase fw-bold d-block\">Location</label>
                                <span class=\"fs-5\"><i class=\"bi bi-geo-alt text-beige me-2\"></i> ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 90, $this->source); })()), "location", [], "any", false, false, false, 90), "html", null, true);
        yield "</span>
                            </div>
                        </div>

                        <div class=\"p-4 rounded-3\" style=\"background-color: #faf9f6; border-left: 5px solid var(--accent-beige);\">
                            <h5 class=\"fw-bold text-beige\">Service Description</h5>
                            <p class=\"mb-0 text-muted\" style=\"white-space: pre-line; line-height: 1.8;\">";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 96, $this->source); })()), "description", [], "any", false, false, false, 96), "html", null, true);
        yield "</p>
                        </div>
                    </div>

                    ";
        // line 101
        yield "                    <div class=\"gallery-container\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <h4 class=\"fw-bold text-beige\"><i class=\"bi bi-images me-2\"></i> Service Photos</h4>
                            ";
        // line 104
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_image_upload", ["entityType" => "service", "entityId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105)]), "html", null, true);
            yield "\" class=\"btn btn-outline-beige btn-sm\">
                                <i class=\"bi bi-plus-circle me-1\"></i> Add Photos
                            </a>
                            ";
        }
        // line 109
        yield "                        </div>
                        
                        <div class=\"row gy-4\">
                            ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 112, $this->source); })()), "images", [], "any", false, false, false, 112));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 113
            yield "                                <div class=\"col-md-4\">
                                    <div class=\"amenity-card shadow-sm border-0\">
                                        <div class=\"amenity-image\">
                                            <img src=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 116))), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"Service Image\">
                                        </div>
                                    </div>
                                </div>
                            ";
            $context['_iterated'] = true;
        }
        // line 120
        if (!$context['_iterated']) {
            // line 121
            yield "                                <div class=\"col-12 text-center py-5 border rounded-3 bg-light\">
                                    <p class=\"text-muted mb-0\">No images yet for this service.</p>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "                        </div>
                    </div>
                </div>

                ";
        // line 130
        yield "                <div class=\"col-lg-4\">
                    <div class=\"sticky-sidebar\">
                        ";
        // line 132
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 133
            yield "                        <div class=\"card shadow-sm border-0 p-4\" style=\"border-radius: 15px;\">
                            <h5 class=\"fw-bold mb-4 border-bottom pb-2\">Service Management</h5>
                            
                            <div class=\"d-grid gap-3\">
                                <a href=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 137, $this->source); })()), "id", [], "any", false, false, false, 137)]), "html", null, true);
            yield "\" class=\"btn btn-beige py-2 fw-bold\">
                                    <i class=\"bi bi-pencil-square me-2\"></i> Edit Service
                                </a>
                                
                                <a href=\"";
            // line 141
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_index");
            yield "\" class=\"btn btn-outline-secondary py-2\">
                                    <i class=\"bi bi-arrow-left me-2\"></i> Back to List
                                </a>

                                <div class=\"mt-3 pt-3 border-top\">
                                    ";
            // line 146
            yield Twig\Extension\CoreExtension::include($this->env, $context, "service/_delete_form.html.twig");
            yield "
                                </div>
                            </div>

                        </div>
                        ";
        }
        // line 152
        yield "
                        <div class=\"mt-4 p-3 rounded\" style=\"background-color: var(--soft-beige);\">
                            <small class=\"fw-bold text-beige d-block mb-1\">
                                <i class=\"bi bi-info-circle-fill me-1\"></i> Quick Info
                            </small>
                            <p class=\"small text-muted mb-0\">
                                Total Reservations: <strong>";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 158, $this->source); })()), "reservations", [], "any", false, false, false, 158)), "html", null, true);
        yield "</strong>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
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
        return "service/show.html.twig";
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
        return array (  346 => 158,  338 => 152,  329 => 146,  321 => 141,  314 => 137,  308 => 133,  306 => 132,  302 => 130,  296 => 125,  287 => 121,  285 => 120,  276 => 116,  271 => 113,  266 => 112,  261 => 109,  253 => 105,  251 => 104,  246 => 101,  239 => 96,  230 => 90,  223 => 86,  213 => 79,  207 => 76,  203 => 75,  197 => 71,  182 => 58,  178 => 57,  169 => 50,  156 => 49,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Service: {{ service.nom }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Soft Beige Overrides - Consistent with Events */
        :root {
            --accent-beige: #d2b48c;
            --soft-beige: #f5f5dc;
            --dark-beige: #8b7355;
        }
        .btn-beige {
            background-color: var(--accent-beige);
            color: white;
            border: none;
            transition: 0.3s;
        }
        .btn-beige:hover {
            background-color: var(--dark-beige);
            color: white;
        }
        .btn-outline-beige {
            border: 2px solid var(--accent-beige);
            color: var(--dark-beige);
            transition: 0.3s;
        }
        .btn-outline-beige:hover {
            background-color: var(--accent-beige);
            color: white;
        }
        .text-beige { color: var(--dark-beige); }
        
        .sticky-sidebar {
            position: -webkit-sticky;
            position: sticky;
            top: 120px; 
            z-index: 10;
        }
        .category-badge {
            background-color: #f8f1e7;
            color: var(--dark-beige);
            border: 1px solid var(--accent-beige);
        }
    </style>
{% endblock %}

{% block body %}
<main class=\"main\">
     <!-- Page Title -->
    <div class=\"page-title light-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Service</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ path('app_home') }}\">Home</a></li>
            <li><a href=\"{{ path('app_service_index') }}\">Service</a></li>
            <li class=\"current\">Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


    <section class=\"section mt-5\">
        <div class=\"container\">
            <div class=\"row gy-5\">
                
                {# --- LEFT COLUMN: SERVICE INFO --- #}
                <div class=\"col-lg-8\">
                    <div class=\"card shadow-sm border-0 p-4 mb-5\" style=\"border-radius: 15px;\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <div>
                                <h2 class=\"text-beige fw-bold mb-1\">{{ service.nom }}</h2>
                                <span class=\"badge category-badge text-uppercase small\">{{ service.category }}</span>
                            </div>
                            <span class=\"badge rounded-pill px-4 py-2\" style=\"background-color: var(--accent-beige); font-size: 1.1rem;\">
                                \${{ service.price }}
                            </span>
                        </div>

                        <div class=\"row mb-4\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"text-muted small text-uppercase fw-bold d-block\">Schedule</label>
                                <span class=\"fs-5\"><i class=\"bi bi-clock text-beige me-2\"></i> {{ service.servtime }}</span>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"text-muted small text-uppercase fw-bold d-block\">Location</label>
                                <span class=\"fs-5\"><i class=\"bi bi-geo-alt text-beige me-2\"></i> {{ service.location }}</span>
                            </div>
                        </div>

                        <div class=\"p-4 rounded-3\" style=\"background-color: #faf9f6; border-left: 5px solid var(--accent-beige);\">
                            <h5 class=\"fw-bold text-beige\">Service Description</h5>
                            <p class=\"mb-0 text-muted\" style=\"white-space: pre-line; line-height: 1.8;\">{{ service.description }}</p>
                        </div>
                    </div>

                    {# --- GALLERY SECTION --- #}
                    <div class=\"gallery-container\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <h4 class=\"fw-bold text-beige\"><i class=\"bi bi-images me-2\"></i> Service Photos</h4>
                            {% if is_granted('ROLE_ADMIN') %}
                            <a href=\"{{ path('app_image_upload', {'entityType': 'service', 'entityId': service.id}) }}\" class=\"btn btn-outline-beige btn-sm\">
                                <i class=\"bi bi-plus-circle me-1\"></i> Add Photos
                            </a>
                            {% endif %}
                        </div>
                        
                        <div class=\"row gy-4\">
                            {% for image in service.images %}
                                <div class=\"col-md-4\">
                                    <div class=\"amenity-card shadow-sm border-0\">
                                        <div class=\"amenity-image\">
                                            <img src=\"{{ asset('uploads/images/' ~ image.filename) }}\" class=\"img-fluid\" alt=\"Service Image\">
                                        </div>
                                    </div>
                                </div>
                            {% else %}
                                <div class=\"col-12 text-center py-5 border rounded-3 bg-light\">
                                    <p class=\"text-muted mb-0\">No images yet for this service.</p>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>

                {# --- RIGHT COLUMN: STICKY MANAGE SIDEBAR --- #}
                <div class=\"col-lg-4\">
                    <div class=\"sticky-sidebar\">
                        {% if is_granted('ROLE_ADMIN') %}
                        <div class=\"card shadow-sm border-0 p-4\" style=\"border-radius: 15px;\">
                            <h5 class=\"fw-bold mb-4 border-bottom pb-2\">Service Management</h5>
                            
                            <div class=\"d-grid gap-3\">
                                <a href=\"{{ path('app_service_edit', {'id': service.id}) }}\" class=\"btn btn-beige py-2 fw-bold\">
                                    <i class=\"bi bi-pencil-square me-2\"></i> Edit Service
                                </a>
                                
                                <a href=\"{{ path('app_service_index') }}\" class=\"btn btn-outline-secondary py-2\">
                                    <i class=\"bi bi-arrow-left me-2\"></i> Back to List
                                </a>

                                <div class=\"mt-3 pt-3 border-top\">
                                    {{ include('service/_delete_form.html.twig') }}
                                </div>
                            </div>

                        </div>
                        {% endif %}

                        <div class=\"mt-4 p-3 rounded\" style=\"background-color: var(--soft-beige);\">
                            <small class=\"fw-bold text-beige d-block mb-1\">
                                <i class=\"bi bi-info-circle-fill me-1\"></i> Quick Info
                            </small>
                            <p class=\"small text-muted mb-0\">
                                Total Reservations: <strong>{{ service.reservations|length }}</strong>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
{% endblock %}
", "service/show.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\service\\show.html.twig");
    }
}
