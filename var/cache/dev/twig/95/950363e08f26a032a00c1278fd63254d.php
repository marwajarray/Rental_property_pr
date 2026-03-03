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

/* reservation/new.html.twig */
class __TwigTemplate_7c3b75e6a2b650188d40882d088726e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/new.html.twig"));

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

        yield "Book Property: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 3, $this->source); })()), "number", [], "any", false, false, false, 3), "html", null, true);
        
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
        :root {
            --accent-beige: #d2b48c;
            --soft-beige: #f5f5dc;
            --dark-beige: #8b7355;
        }

        .booking-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: none;
            overflow: hidden;
        }

        .booking-header {
            background-color: var(--accent-beige);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .btn-beige {
            background-color: var(--accent-beige);
            color: white;
            border: none;
            padding: 12px;
            font-weight: 600;
            border-radius: 10px;
            transition: 0.3s;
        }

        .btn-beige:hover {
            background-color: var(--dark-beige);
            color: white;
            transform: translateY(-2px);
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            padding: 10px 15px;
        }

        .form-control:focus {
            border-color: var(--accent-beige);
            box-shadow: 0 0 0 0.2rem rgba(210, 180, 140, 0.25);
        }

        .text-beige { color: var(--dark-beige); }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 60
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

        // line 61
        yield "<main class=\"main\">
    ";
        // line 63
        yield "    <div class=\"page-title dark-background\">
        <div class=\"container\">
            <h1 style=\"color: var(--soft-beige);\">Reservation</h1>
            <nav class=\"breadcrumbs\">
                <ol>
                    <li><a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                    <li><a href=\"#\">Properties</a></li>
                    <li class=\"current text-beige\">Booking</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class=\"section mt-5 pb-5\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\">
                    
                    ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "flashes", ["error"], "method", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 82
            yield "                        <div class=\"alert alert-danger border-0 shadow-sm mb-4\" style=\"border-radius: 12px;\">
                            <i class=\"bi bi-exclamation-triangle me-2\"></i> ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "
                    <div class=\"booking-card\">
                        <div class=\"booking-header\">
                            <i class=\"bi bi-calendar-check mb-2\" style=\"font-size: 2rem;\"></i>
                            <h3 class=\"mb-0 fw-bold\">Property ";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 90, $this->source); })()), "number", [], "any", false, false, false, 90), "html", null, true);
        yield "</h3>
                            <p class=\"mb-0 opacity-75\">Secure your stay with us</p>
                        </div>

                        <div class=\"p-4 p-md-5\">
                            ";
        // line 95
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_start');
        yield "
                                <div class=\"mb-4\">
                                    <label class=\"form-label fw-bold text-muted small text-uppercase\">Check-in Date</label>
                                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "dateArrivee", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "dateArrivee", [], "any", false, false, false, 99), 'errors');
        yield "
                                </div>

                                <div class=\"mb-4\">
                                    <label class=\"form-label fw-bold text-muted small text-uppercase\">Check-out Date</label>
                                    ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "dateDepart", [], "any", false, false, false, 104), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                                    ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "dateDepart", [], "any", false, false, false, 105), 'errors');
        yield "
                                </div>

                                <div class=\"mb-4\">
                                    <label class=\"form-label fw-bold text-muted small text-uppercase\">Number of Guests</label>
                                    ";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "nombrePersonnes", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-control", "type" => "number", "min" => "1"]]);
        yield "
                                    ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "nombrePersonnes", [], "any", false, false, false, 111), 'errors');
        yield "
                                </div>

                                <div class=\"mt-5\">
                                    <button type=\"submit\" class=\"btn btn-beige w-100 shadow-sm\">
                                        Confirm Reservation
                                    </button>
                                    <a href=\"";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-link w-100 mt-3 text-muted text-decoration-none small\">
                                        <i class=\"bi bi-arrow-left me-1\"></i> Cancel and go back
                                    </a>
                                </div>
                            ";
        // line 122
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), 'form_end');
        yield "
                        </div>
                    </div>

                    <div class=\"text-center mt-4 text-muted\">
                        <small><i class=\"bi bi-shield-lock me-1\"></i> Your booking is encrypted and secure</small>
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
        return "reservation/new.html.twig";
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
        return array (  287 => 122,  280 => 118,  270 => 111,  266 => 110,  258 => 105,  254 => 104,  246 => 99,  242 => 98,  236 => 95,  228 => 90,  222 => 86,  213 => 83,  210 => 82,  206 => 81,  190 => 68,  183 => 63,  180 => 61,  167 => 60,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Book Property: {{ property.number }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --accent-beige: #d2b48c;
            --soft-beige: #f5f5dc;
            --dark-beige: #8b7355;
        }

        .booking-card {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            border: none;
            overflow: hidden;
        }

        .booking-header {
            background-color: var(--accent-beige);
            color: white;
            padding: 2rem;
            text-align: center;
        }

        .btn-beige {
            background-color: var(--accent-beige);
            color: white;
            border: none;
            padding: 12px;
            font-weight: 600;
            border-radius: 10px;
            transition: 0.3s;
        }

        .btn-beige:hover {
            background-color: var(--dark-beige);
            color: white;
            transform: translateY(-2px);
        }

        .form-control {
            border-radius: 8px;
            border: 1px solid #e0e0e0;
            padding: 10px 15px;
        }

        .form-control:focus {
            border-color: var(--accent-beige);
            box-shadow: 0 0 0 0.2rem rgba(210, 180, 140, 0.25);
        }

        .text-beige { color: var(--dark-beige); }
    </style>
{% endblock %}

{% block body %}
<main class=\"main\">
    {# --- HEADER SECTION --- #}
    <div class=\"page-title dark-background\">
        <div class=\"container\">
            <h1 style=\"color: var(--soft-beige);\">Reservation</h1>
            <nav class=\"breadcrumbs\">
                <ol>
                    <li><a href=\"{{ path('app_home') }}\">Home</a></li>
                    <li><a href=\"#\">Properties</a></li>
                    <li class=\"current text-beige\">Booking</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class=\"section mt-5 pb-5\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\">
                    
                    {% for message in app.flashes('error') %}
                        <div class=\"alert alert-danger border-0 shadow-sm mb-4\" style=\"border-radius: 12px;\">
                            <i class=\"bi bi-exclamation-triangle me-2\"></i> {{ message }}
                        </div>
                    {% endfor %}

                    <div class=\"booking-card\">
                        <div class=\"booking-header\">
                            <i class=\"bi bi-calendar-check mb-2\" style=\"font-size: 2rem;\"></i>
                            <h3 class=\"mb-0 fw-bold\">Property {{ property.number }}</h3>
                            <p class=\"mb-0 opacity-75\">Secure your stay with us</p>
                        </div>

                        <div class=\"p-4 p-md-5\">
                            {{ form_start(form) }}
                                <div class=\"mb-4\">
                                    <label class=\"form-label fw-bold text-muted small text-uppercase\">Check-in Date</label>
                                    {{ form_widget(form.dateArrivee, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.dateArrivee) }}
                                </div>

                                <div class=\"mb-4\">
                                    <label class=\"form-label fw-bold text-muted small text-uppercase\">Check-out Date</label>
                                    {{ form_widget(form.dateDepart, {'attr': {'class': 'form-control'}}) }}
                                    {{ form_errors(form.dateDepart) }}
                                </div>

                                <div class=\"mb-4\">
                                    <label class=\"form-label fw-bold text-muted small text-uppercase\">Number of Guests</label>
                                    {{ form_widget(form.nombrePersonnes, {'attr': {'class': 'form-control', 'type': 'number', 'min': '1'}}) }}
                                    {{ form_errors(form.nombrePersonnes) }}
                                </div>

                                <div class=\"mt-5\">
                                    <button type=\"submit\" class=\"btn btn-beige w-100 shadow-sm\">
                                        Confirm Reservation
                                    </button>
                                    <a href=\"{{ path('app_home') }}\" class=\"btn btn-link w-100 mt-3 text-muted text-decoration-none small\">
                                        <i class=\"bi bi-arrow-left me-1\"></i> Cancel and go back
                                    </a>
                                </div>
                            {{ form_end(form) }}
                        </div>
                    </div>

                    <div class=\"text-center mt-4 text-muted\">
                        <small><i class=\"bi bi-shield-lock me-1\"></i> Your booking is encrypted and secure</small>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
{% endblock %}
", "reservation/new.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\reservation\\new.html.twig");
    }
}
