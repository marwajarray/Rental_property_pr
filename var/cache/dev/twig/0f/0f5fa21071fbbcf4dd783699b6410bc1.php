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

/* admin/dashboard.html.twig */
class __TwigTemplate_c0c84acdcb1b797ec7a2be87760cbea0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

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

        yield "Admin Dashboard - UrbanStay";
        
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
        yield "<style>
  /* ===== GRANDORIA ADMIN DASHBOARD STYLE ===== */

  .dashboard-title {
    font-weight: 700;
    color: #3e2a1d;
  }

  .dashboard-card {
    border: none;
    border-radius: 16px;
    background: linear-gradient(145deg, #ffffff, #f4efe9);
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
  }

  .dashboard-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(0,0,0,0.12);
  }

  .dashboard-card h5 {
    font-weight: 600;
    color: #5c3d2e;
  }

  .dashboard-number {
    font-size: 2.2rem;
    font-weight: 700;
    color: #b68d40; /* doré */
  }

  .btn-grandoria {
    background-color: #b68d40;
    color: white;
    border-radius: 30px;
    padding: 6px 20px;
    font-weight: 500;
    border: none;
  }

  .btn-grandoria:hover {
    background-color: #a07a35;
    color: white;
  }

  .dashboard-icon {
    font-size: 2.4rem;
    color: #b68d40;
    margin-bottom: 10px;
  }
</style>

<div class=\"container mt-5 mb-5\">

  <h1 class=\"dashboard-title mb-4\">
    <i class=\"bi bi-speedometer2 me-2\"></i> Admin Dashboard
  </h1>

  <div class=\"row g-4\">

    <!-- ROOMS -->
    <div class=\"col-md-4 col-lg-3\">
      <div class=\"card dashboard-card text-center p-4\">
        <i class=\"bi bi-door-open dashboard-icon\"></i>
        <h5>Properties</h5>
        <div class=\"dashboard-number\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 72, $this->source); })()), "html", null, true);
        yield "</div>
        <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_property_index");
        yield "\" class=\"btn btn-grandoria mt-3\">Manage</a>
      </div>
    </div>

    <!-- SERVICES -->
    <div class=\"col-md-4 col-lg-3\">
      <div class=\"card dashboard-card text-center p-4\">
        <i class=\"bi bi-stars dashboard-icon\"></i>
        <h5>Services</h5>
        <div class=\"dashboard-number\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["services"]) || array_key_exists("services", $context) ? $context["services"] : (function () { throw new RuntimeError('Variable "services" does not exist.', 82, $this->source); })()), "html", null, true);
        yield "</div>
        <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_index");
        yield "\" class=\"btn btn-grandoria mt-3\">Manage</a>
      </div>
    </div>

    <!-- EVENTS -->
    <div class=\"col-md-4 col-lg-3\">
      <div class=\"card dashboard-card text-center p-4\">
        <i class=\"bi bi-calendar-event dashboard-icon\"></i>
        <h5>Events</h5>
        <div class=\"dashboard-number\">";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 92, $this->source); })()), "html", null, true);
        yield "</div>
        <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\" class=\"btn btn-grandoria mt-3\">Manage</a>
      </div>
    </div>

    <!-- STAFF -->
    <div class=\"col-md-4 col-lg-3\">
      <div class=\"card dashboard-card text-center p-4\">
        <i class=\"bi bi-people dashboard-icon\"></i>
        <h5>Staff</h5>
        <div class=\"dashboard-number\">";
        // line 102
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["staff"]) || array_key_exists("staff", $context) ? $context["staff"] : (function () { throw new RuntimeError('Variable "staff" does not exist.', 102, $this->source); })()), "html", null, true);
        yield "</div>
        <a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_index");
        yield "\" class=\"btn btn-grandoria mt-3\">Manage</a>
      </div>
    </div>

    <!-- RESERVATIONS -->
    <div class=\"col-md-6 col-lg-4\">
      <div class=\"card dashboard-card text-center p-4\">
        <i class=\"bi bi-journal-check dashboard-icon\"></i>
        <h5>Reservations</h5>
        <div class=\"dashboard-number\">";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 112, $this->source); })()), "html", null, true);
        yield "</div>
        <a href=\"";
        // line 113
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_index");
        yield "\" class=\"btn btn-grandoria mt-3\">Manage</a>
      </div>
    </div>

    <!-- PAYMENTS -->
    <div class=\"col-md-6 col-lg-4\">
      <div class=\"card dashboard-card text-center p-4\">
        <i class=\"bi bi-credit-card dashboard-icon\"></i>
        <h5>Payments</h5>
        <div class=\"dashboard-number\">";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 122, $this->source); })()), "html", null, true);
        yield "</div>
        <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_index");
        yield "\" class=\"btn btn-grandoria mt-3\">Manage</a>
      </div>
    </div>

  </div>
</div>
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
        return "admin/dashboard.html.twig";
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
        return array (  252 => 123,  248 => 122,  236 => 113,  232 => 112,  220 => 103,  216 => 102,  204 => 93,  200 => 92,  188 => 83,  184 => 82,  172 => 73,  168 => 72,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Dashboard - UrbanStay{% endblock %}

{% block body %}
<style>
  /* ===== GRANDORIA ADMIN DASHBOARD STYLE ===== */

  .dashboard-title {
    font-weight: 700;
    color: #3e2a1d;
  }

  .dashboard-card {
    border: none;
    border-radius: 16px;
    background: linear-gradient(145deg, #ffffff, #f4efe9);
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
  }

  .dashboard-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 16px 40px rgba(0,0,0,0.12);
  }

  .dashboard-card h5 {
    font-weight: 600;
    color: #5c3d2e;
  }

  .dashboard-number {
    font-size: 2.2rem;
    font-weight: 700;
    color: #b68d40; /* doré */
  }

  .btn-grandoria {
    background-color: #b68d40;
    color: white;
    border-radius: 30px;
    padding: 6px 20px;
    font-weight: 500;
    border: none;
  }

  .btn-grandoria:hover {
    background-color: #a07a35;
    color: white;
  }

  .dashboard-icon {
    font-size: 2.4rem;
    color: #b68d40;
    margin-bottom: 10px;
  }
</style>

<div class=\"container mt-5 mb-5\">

  <h1 class=\"dashboard-title mb-4\">
    <i class=\"bi bi-speedometer2 me-2\"></i> Admin Dashboard
  </h1>

  <div class=\"row g-4\">

    <!-- ROOMS -->
    <div class=\"col-md-4 col-lg-3\">
      <div class=\"card dashboard-card text-center p-4\">
        <i class=\"bi bi-door-open dashboard-icon\"></i>
        <h5>Properties</h5>
        <div class=\"dashboard-number\">{{ property }}</div>
        <a href=\"{{ path('app_property_index') }}\" class=\"btn btn-grandoria mt-3\">Manage</a>
      </div>
    </div>

    <!-- SERVICES -->
    <div class=\"col-md-4 col-lg-3\">
      <div class=\"card dashboard-card text-center p-4\">
        <i class=\"bi bi-stars dashboard-icon\"></i>
        <h5>Services</h5>
        <div class=\"dashboard-number\">{{ services }}</div>
        <a href=\"{{ path('app_service_index') }}\" class=\"btn btn-grandoria mt-3\">Manage</a>
      </div>
    </div>

    <!-- EVENTS -->
    <div class=\"col-md-4 col-lg-3\">
      <div class=\"card dashboard-card text-center p-4\">
        <i class=\"bi bi-calendar-event dashboard-icon\"></i>
        <h5>Events</h5>
        <div class=\"dashboard-number\">{{ events }}</div>
        <a href=\"{{ path('app_event_index') }}\" class=\"btn btn-grandoria mt-3\">Manage</a>
      </div>
    </div>

    <!-- STAFF -->
    <div class=\"col-md-4 col-lg-3\">
      <div class=\"card dashboard-card text-center p-4\">
        <i class=\"bi bi-people dashboard-icon\"></i>
        <h5>Staff</h5>
        <div class=\"dashboard-number\">{{ staff }}</div>
        <a href=\"{{ path('app_staff_index') }}\" class=\"btn btn-grandoria mt-3\">Manage</a>
      </div>
    </div>

    <!-- RESERVATIONS -->
    <div class=\"col-md-6 col-lg-4\">
      <div class=\"card dashboard-card text-center p-4\">
        <i class=\"bi bi-journal-check dashboard-icon\"></i>
        <h5>Reservations</h5>
        <div class=\"dashboard-number\">{{ reservations }}</div>
        <a href=\"{{ path('app_reservation_index') }}\" class=\"btn btn-grandoria mt-3\">Manage</a>
      </div>
    </div>

    <!-- PAYMENTS -->
    <div class=\"col-md-6 col-lg-4\">
      <div class=\"card dashboard-card text-center p-4\">
        <i class=\"bi bi-credit-card dashboard-icon\"></i>
        <h5>Payments</h5>
        <div class=\"dashboard-number\">{{ payments }}</div>
        <a href=\"{{ path('app_payment_index') }}\" class=\"btn btn-grandoria mt-3\">Manage</a>
      </div>
    </div>

  </div>
</div>
{% endblock %}
", "admin/dashboard.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\admin\\dashboard.html.twig");
    }
}
