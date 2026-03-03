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

/* event/show.html.twig */
class __TwigTemplate_3f849e21f78c386712a97703f1f6872b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/show.html.twig"));

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

        yield "Event: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        /* Soft Beige Overrides - Consistent Design */
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
        <h1 class=\"mb-2 mb-lg-0\">Event</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
            <li><a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\">Events</a></li>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 75, $this->source); })()), "name", [], "any", false, false, false, 75), "html", null, true);
        yield "</h2>
                                ";
        // line 77
        yield "                                <span class=\"badge category-badge text-uppercase small\">Event Details</span>
                            </div>
                            <span class=\"badge rounded-pill px-4 py-2\" style=\"background-color: var(--accent-beige); font-size: 1.1rem;\">
                                \$";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 80, $this->source); })()), "price", [], "any", false, false, false, 80), "html", null, true);
        yield "
                            </span>
                        </div>

                        <div class=\"row mb-4\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"text-muted small text-uppercase fw-bold d-block\">Date & Time</label>
                                <span class=\"fs-5\"><i class=\"bi bi-calendar text-beige me-2\"></i> ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 87, $this->source); })()), "date", [], "any", false, false, false, 87), "d M Y H:i"), "html", null, true);
        yield "</span>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"text-muted small text-uppercase fw-bold d-block\">Location</label>
                                <span class=\"fs-5\"><i class=\"bi bi-geo-alt text-beige me-2\"></i> ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 91, $this->source); })()), "location", [], "any", false, false, false, 91), "html", null, true);
        yield "</span>
                            </div>
                        </div>

                        <div class=\"p-4 rounded-3\" style=\"background-color: #faf9f6; border-left: 5px solid var(--accent-beige);\">
                            <h5 class=\"fw-bold text-beige\">Description</h5>
                            <p class=\"mb-0 text-muted\" style=\"white-space: pre-line; line-height: 1.8;\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 97, $this->source); })()), "description", [], "any", false, false, false, 97), "html", null, true);
        yield "</p>
                        </div>
                    </div>

                    ";
        // line 102
        yield "                    <div class=\"gallery-container\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <h4 class=\"fw-bold text-beige\"><i class=\"bi bi-images me-2\"></i> Event Gallery</h4>
                            ";
        // line 105
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "                                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_image_upload", ["entityType" => "event", "entityId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)]), "html", null, true);
            yield "\" class=\"btn btn-outline-beige btn-sm\">
                                    <i class=\"bi bi-plus-circle me-1\"></i> Add Images
                                </a>
                            ";
        }
        // line 110
        yield "                        </div>
                        
                        <div class=\"row gy-4\">
                            ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 113, $this->source); })()), "images", [], "any", false, false, false, 113));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 114
            yield "                                <div class=\"col-md-4\">
                                    <div class=\"shadow-sm border-0 rounded overflow-hidden\">
                                        <img src=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 116))), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"Event Image\">
                                    </div>
                                </div>
                            ";
            $context['_iterated'] = true;
        }
        // line 119
        if (!$context['_iterated']) {
            // line 120
            yield "                                <div class=\"col-12 text-center py-5 border rounded-3 bg-light\">
                                    <p class=\"text-muted mb-0\">No images available for this event.</p>
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "                        </div>
                    </div>
                </div>

                ";
        // line 129
        yield "                <div class=\"col-lg-4\">
                    <div class=\"sticky-sidebar\">
                        ";
        // line 131
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 132
            yield "                        <div class=\"card shadow-sm border-0 p-4\" style=\"border-radius: 15px;\">
                            <h5 class=\"fw-bold mb-4 border-bottom pb-2\">Admin Panel</h5>
                            
                            <div class=\"d-grid gap-3\">
                                <a href=\"";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 136, $this->source); })()), "id", [], "any", false, false, false, 136)]), "html", null, true);
            yield "\" class=\"btn btn-beige py-2 fw-bold\">
                                    <i class=\"bi bi-pencil-square me-2\"></i> Edit Event
                                </a>
                                
                                <a href=\"";
            // line 140
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
            yield "\" class=\"btn btn-outline-secondary py-2\">
                                    <i class=\"bi bi-arrow-left me-2\"></i> Back to Events
                                </a>

                                <div class=\"mt-3 pt-3 border-top\">
                                    ";
            // line 145
            yield Twig\Extension\CoreExtension::include($this->env, $context, "event/_delete_form.html.twig");
            yield "
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 150
        yield "                    </div>
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
        return "event/show.html.twig";
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
        return array (  334 => 150,  326 => 145,  318 => 140,  311 => 136,  305 => 132,  303 => 131,  299 => 129,  293 => 124,  284 => 120,  282 => 119,  274 => 116,  270 => 114,  265 => 113,  260 => 110,  252 => 106,  250 => 105,  245 => 102,  238 => 97,  229 => 91,  222 => 87,  212 => 80,  207 => 77,  203 => 75,  197 => 71,  182 => 58,  178 => 57,  169 => 50,  156 => 49,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Event: {{ event.name }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        /* Soft Beige Overrides - Consistent Design */
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
        <h1 class=\"mb-2 mb-lg-0\">Event</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ path('app_home') }}\">Home</a></li>
            <li><a href=\"{{ path('app_event_index') }}\">Events</a></li>
            <li class=\"current\">Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


    <section class=\"section mt-5\">
        <div class=\"container\">
            <div class=\"row gy-5\">
                
                {# --- LEFT COLUMN: EVENT INFO --- #}
                <div class=\"col-lg-8\">
                    <div class=\"card shadow-sm border-0 p-4 mb-5\" style=\"border-radius: 15px;\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <div>
                                <h2 class=\"text-beige fw-bold mb-1\">{{ event.name }}</h2>
                                {# Assuming events might have a category or status, otherwise keep it clean #}
                                <span class=\"badge category-badge text-uppercase small\">Event Details</span>
                            </div>
                            <span class=\"badge rounded-pill px-4 py-2\" style=\"background-color: var(--accent-beige); font-size: 1.1rem;\">
                                \${{ event.price }}
                            </span>
                        </div>

                        <div class=\"row mb-4\">
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"text-muted small text-uppercase fw-bold d-block\">Date & Time</label>
                                <span class=\"fs-5\"><i class=\"bi bi-calendar text-beige me-2\"></i> {{ event.date|date('d M Y H:i') }}</span>
                            </div>
                            <div class=\"col-md-6 mb-3\">
                                <label class=\"text-muted small text-uppercase fw-bold d-block\">Location</label>
                                <span class=\"fs-5\"><i class=\"bi bi-geo-alt text-beige me-2\"></i> {{ event.location }}</span>
                            </div>
                        </div>

                        <div class=\"p-4 rounded-3\" style=\"background-color: #faf9f6; border-left: 5px solid var(--accent-beige);\">
                            <h5 class=\"fw-bold text-beige\">Description</h5>
                            <p class=\"mb-0 text-muted\" style=\"white-space: pre-line; line-height: 1.8;\">{{ event.description }}</p>
                        </div>
                    </div>

                    {# --- GALLERY SECTION --- #}
                    <div class=\"gallery-container\">
                        <div class=\"d-flex justify-content-between align-items-center mb-4\">
                            <h4 class=\"fw-bold text-beige\"><i class=\"bi bi-images me-2\"></i> Event Gallery</h4>
                            {% if is_granted('ROLE_ADMIN') %}
                                <a href=\"{{ path('app_image_upload', {'entityType':'event','entityId':event.id}) }}\" class=\"btn btn-outline-beige btn-sm\">
                                    <i class=\"bi bi-plus-circle me-1\"></i> Add Images
                                </a>
                            {% endif %}
                        </div>
                        
                        <div class=\"row gy-4\">
                            {% for image in event.images %}
                                <div class=\"col-md-4\">
                                    <div class=\"shadow-sm border-0 rounded overflow-hidden\">
                                        <img src=\"{{ asset('uploads/images/' ~ image.filename) }}\" class=\"img-fluid\" alt=\"Event Image\">
                                    </div>
                                </div>
                            {% else %}
                                <div class=\"col-12 text-center py-5 border rounded-3 bg-light\">
                                    <p class=\"text-muted mb-0\">No images available for this event.</p>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>

                {# --- RIGHT COLUMN: ADMIN SIDEBAR --- #}
                <div class=\"col-lg-4\">
                    <div class=\"sticky-sidebar\">
                        {% if is_granted('ROLE_ADMIN') %}
                        <div class=\"card shadow-sm border-0 p-4\" style=\"border-radius: 15px;\">
                            <h5 class=\"fw-bold mb-4 border-bottom pb-2\">Admin Panel</h5>
                            
                            <div class=\"d-grid gap-3\">
                                <a href=\"{{ path('app_event_edit', {id:event.id}) }}\" class=\"btn btn-beige py-2 fw-bold\">
                                    <i class=\"bi bi-pencil-square me-2\"></i> Edit Event
                                </a>
                                
                                <a href=\"{{ path('app_event_index') }}\" class=\"btn btn-outline-secondary py-2\">
                                    <i class=\"bi bi-arrow-left me-2\"></i> Back to Events
                                </a>

                                <div class=\"mt-3 pt-3 border-top\">
                                    {{ include('event/_delete_form.html.twig') }}
                                </div>
                            </div>
                        </div>
                        {% endif %}
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
{% endblock %}", "event/show.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\event\\show.html.twig");
    }
}
