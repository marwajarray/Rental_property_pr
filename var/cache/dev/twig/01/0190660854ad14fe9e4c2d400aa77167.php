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

/* admin/reservation/index.html.twig */
class __TwigTemplate_467eb4653e2603b1ba4eb3ac6d36608a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/reservation/index.html.twig"));

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

        yield "Manage Reservations - UrbanStay";
        
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
    /* UrbanStay Theme Colors */
    .text-grandoria { color: #5c3d2e !important; }
    .bg-grandoria { background-color: #5c3d2e !important; color: white !important; }
    .border-grandoria { border-color: #e0d9b5 !important; }
    
    /* Table Styling */
    .table-container {
        background-color: #faf9f6;
        border-radius: 15px;
        padding: 20px;
        border: 1px solid #e0d9b5;
    }
    .custom-table thead {
        background-color: #5c3d2e;
        color: #ffffff;
    }
    .custom-table thead th {
        border: none;
        padding: 15px;
    }
    .custom-table tbody tr {
        border-bottom: 1px solid #e0d9b5;
        transition: 0.3s;
    }
    .custom-table tbody tr:hover {
        background-color: #f4f1de;
    }

    /* Status Badges */
    .status-confirmed { background-color: #b68d40; color: white; }
    .status-pending { background-color: #d1c7a7; color: #5c3d2e; }
    .status-cancelled { background-color: #a34e4e; color: white; }
    
    .price-tag {
        font-weight: bold;
        color: #5c3d2e;
        background: #e0d9b5;
        padding: 4px 10px;
        border-radius: 8px;
    }
</style>

<div class=\"container mt-5\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"fw-bold text-grandoria\">
            <i class=\"bi bi-calendar-check-fill me-2\"></i>Manage Reservations
        </h1>
        <span class=\"badge bg-grandoria px-3 py-2 rounded-pill\">
            ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 55, $this->source); })())), "html", null, true);
        yield " Total
        </span>
    </div>

    <div class=\"table-container shadow-sm\">
        <div class=\"table-responsive\">
            <table class=\"table custom-table align-middle mb-0\">
                <thead>
                    <tr>
                        <th class=\"rounded-start\">#ID</th>
                        <th>Client</th>
                        <th>Property Details</th>
                        <th>Stay Period</th>
                        <th>Status</th>
                        <th class=\"text-end rounded-end\">Total Amount</th>
                    </tr>
                </thead>

                <tbody>
                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 74, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 75
            yield "                    <tr>
                        <td class=\"fw-bold text-muted\">";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 76), "html", null, true);
            yield "</td>

                        <td>
                            <div class=\"d-flex align-items-center\">
                                <i class=\"bi bi-person-circle fs-4 text-grandoria me-2\"></i>
                                <span>";
            // line 81
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "user", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "user", [], "any", false, false, false, 81), "email", [], "any", false, false, false, 81), "html", null, true)) : ("Guest"));
            yield "</span>
                            </div>
                        </td>

                        <td>
                            ";
            // line 86
            if ((( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["r"], "property", [], "any", false, false, false, 86)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "property", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86))) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "property", [], "any", false, false, false, 86), "id", [], "any", false, false, false, 86) > 0))) {
                // line 87
                yield "                                <span class=\"badge badge-poste border text-grandoria\" style=\"background-color: #f4f1de;\">
                                    <i class=\"bi bi-door-closed me-1\"></i> Property #";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["r"], "property", [], "any", false, false, false, 88), "number", [], "any", false, false, false, 88), "html", null, true);
                yield "
                                </span>
                            ";
            } else {
                // line 91
                yield "                                <span class=\"text-muted fst-italic\">Not assigned</span>
                            ";
            }
            // line 93
            yield "                        </td>

                        <td>
                            <small class=\"text-muted d-block\">
                                <i class=\"bi bi-calendar3 me-1\"></i> ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "dateArrivee", [], "any", false, false, false, 97), "d M Y"), "html", null, true);
            yield "
                            </small>
                            <small class=\"text-muted d-block\">
                                <i class=\"bi bi-arrow-right me-1\"></i> ";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "dateDepart", [], "any", false, false, false, 100), "d M Y"), "html", null, true);
            yield "
                            </small>
                        </td>

                        <td>
                            ";
            // line 105
            $context["statusClass"] = "bg-secondary";
            // line 106
            yield "                            ";
            if (((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statut", [], "any", false, false, false, 106)) == "confirmed") || (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statut", [], "any", false, false, false, 106)) == "confirmé"))) {
                // line 107
                yield "                                ";
                $context["statusClass"] = "status-confirmed";
                // line 108
                yield "                            ";
            } elseif (((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statut", [], "any", false, false, false, 108)) == "pending") || (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statut", [], "any", false, false, false, 108)) == "en attente"))) {
                // line 109
                yield "                                ";
                $context["statusClass"] = "status-pending";
                // line 110
                yield "                            ";
            }
            // line 111
            yield "                            
                            <span class=\"badge ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 112, $this->source); })()), "html", null, true);
            yield " text-uppercase px-3\">
                                ";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["r"], "statut", [], "any", false, false, false, 113), "html", null, true);
            yield "
                            </span>
                        </td>

                        <td class=\"text-end\">
                            <span class=\"price-tag\">
                                ";
            // line 119
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["r"], "totalPrice", [], "any", false, false, false, 119)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["r"], "totalPrice", [], "any", false, false, false, 119) . " €"), "html", null, true)) : ("—"));
            yield "
                            </span>
                        </td>
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 123
        if (!$context['_iterated']) {
            // line 124
            yield "                    <tr>
                        <td colspan=\"6\" class=\"text-center py-5\">
                            <i class=\"bi bi-inbox fs-1 text-muted d-block mb-2\"></i>
                            <p class=\"text-muted\">No reservations found in the system.</p>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['r'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "                </tbody>
            </table>
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
        return "admin/reservation/index.html.twig";
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
        return array (  288 => 131,  276 => 124,  274 => 123,  265 => 119,  256 => 113,  252 => 112,  249 => 111,  246 => 110,  243 => 109,  240 => 108,  237 => 107,  234 => 106,  232 => 105,  224 => 100,  218 => 97,  212 => 93,  208 => 91,  202 => 88,  199 => 87,  197 => 86,  189 => 81,  181 => 76,  178 => 75,  173 => 74,  151 => 55,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Manage Reservations - UrbanStay{% endblock %}

{% block body %}
<style>
    /* UrbanStay Theme Colors */
    .text-grandoria { color: #5c3d2e !important; }
    .bg-grandoria { background-color: #5c3d2e !important; color: white !important; }
    .border-grandoria { border-color: #e0d9b5 !important; }
    
    /* Table Styling */
    .table-container {
        background-color: #faf9f6;
        border-radius: 15px;
        padding: 20px;
        border: 1px solid #e0d9b5;
    }
    .custom-table thead {
        background-color: #5c3d2e;
        color: #ffffff;
    }
    .custom-table thead th {
        border: none;
        padding: 15px;
    }
    .custom-table tbody tr {
        border-bottom: 1px solid #e0d9b5;
        transition: 0.3s;
    }
    .custom-table tbody tr:hover {
        background-color: #f4f1de;
    }

    /* Status Badges */
    .status-confirmed { background-color: #b68d40; color: white; }
    .status-pending { background-color: #d1c7a7; color: #5c3d2e; }
    .status-cancelled { background-color: #a34e4e; color: white; }
    
    .price-tag {
        font-weight: bold;
        color: #5c3d2e;
        background: #e0d9b5;
        padding: 4px 10px;
        border-radius: 8px;
    }
</style>

<div class=\"container mt-5\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"fw-bold text-grandoria\">
            <i class=\"bi bi-calendar-check-fill me-2\"></i>Manage Reservations
        </h1>
        <span class=\"badge bg-grandoria px-3 py-2 rounded-pill\">
            {{ reservations|length }} Total
        </span>
    </div>

    <div class=\"table-container shadow-sm\">
        <div class=\"table-responsive\">
            <table class=\"table custom-table align-middle mb-0\">
                <thead>
                    <tr>
                        <th class=\"rounded-start\">#ID</th>
                        <th>Client</th>
                        <th>Property Details</th>
                        <th>Stay Period</th>
                        <th>Status</th>
                        <th class=\"text-end rounded-end\">Total Amount</th>
                    </tr>
                </thead>

                <tbody>
                {% for r in reservations %}
                    <tr>
                        <td class=\"fw-bold text-muted\">{{ r.id }}</td>

                        <td>
                            <div class=\"d-flex align-items-center\">
                                <i class=\"bi bi-person-circle fs-4 text-grandoria me-2\"></i>
                                <span>{{ r.user ? r.user.email : 'Guest' }}</span>
                            </div>
                        </td>

                        <td>
                            {% if r.property is not null and r.property.id is not null and r.property.id > 0 %}
                                <span class=\"badge badge-poste border text-grandoria\" style=\"background-color: #f4f1de;\">
                                    <i class=\"bi bi-door-closed me-1\"></i> Property #{{ r.property.number }}
                                </span>
                            {% else %}
                                <span class=\"text-muted fst-italic\">Not assigned</span>
                            {% endif %}
                        </td>

                        <td>
                            <small class=\"text-muted d-block\">
                                <i class=\"bi bi-calendar3 me-1\"></i> {{ r.dateArrivee|date('d M Y') }}
                            </small>
                            <small class=\"text-muted d-block\">
                                <i class=\"bi bi-arrow-right me-1\"></i> {{ r.dateDepart|date('d M Y') }}
                            </small>
                        </td>

                        <td>
                            {% set statusClass = 'bg-secondary' %}
                            {% if r.statut|lower == 'confirmed' or r.statut|lower == 'confirmé' %}
                                {% set statusClass = 'status-confirmed' %}
                            {% elseif r.statut|lower == 'pending' or r.statut|lower == 'en attente' %}
                                {% set statusClass = 'status-pending' %}
                            {% endif %}
                            
                            <span class=\"badge {{ statusClass }} text-uppercase px-3\">
                                {{ r.statut }}
                            </span>
                        </td>

                        <td class=\"text-end\">
                            <span class=\"price-tag\">
                                {{ r.totalPrice ? r.totalPrice ~ ' €' : '—' }}
                            </span>
                        </td>
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"6\" class=\"text-center py-5\">
                            <i class=\"bi bi-inbox fs-1 text-muted d-block mb-2\"></i>
                            <p class=\"text-muted\">No reservations found in the system.</p>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}
", "admin/reservation/index.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\admin\\reservation\\index.html.twig");
    }
}
