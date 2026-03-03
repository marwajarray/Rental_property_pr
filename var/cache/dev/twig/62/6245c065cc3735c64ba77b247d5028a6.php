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

/* admin/payment/index.html.twig */
class __TwigTemplate_23d2f99591421e5494a9bdfccce8bb01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/payment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/payment/index.html.twig"));

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

        yield "Manage Payments - UrbanStay";
        
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
    /* UrbanStay Financial Theme */
    .text-grandoria { color: #5c3d2e !important; }
    .bg-grandoria { background-color: #5c3d2e !important; color: white !important; }
    
    .payment-card {
        background-color: #faf9f6;
        border-radius: 12px;
        border: 1px solid #e0d9b5;
        overflow: hidden;
    }

    .table-grandoria thead {
        background-color: #5c3d2e;
        color: #ffffff;
    }

    .amount-badge {
        font-family: 'Courier New', Courier, monospace;
        font-weight: bold;
        color: #2d4628; 
        background: #e8f5e9;
        padding: 5px 12px;
        border-radius: 6px;
        border: 1px solid #c8e6c9;
    }

    .status-paid { color: #2d4628; background-color: #c8e6c9; }
    .status-pending { color: #5c3d2e; background-color: #f4f1de; border: 1px solid #e0d9b5; }
    .status-failed { color: #721c24; background-color: #f8d7da; }

    .method-icon {
        width: 32px;
        text-align: center;
        color: #b68d40;
    }
</style>

<div class=\"container mt-5\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"fw-bold text-grandoria\">
            <i class=\"bi bi-credit-card-2-back-fill me-2\"></i>Payments History
        </h1>
        <div class=\"text-muted\">
            <i class=\"bi bi-shield-lock-fill\"></i> Secure Transactions
        </div>
    </div>

    <div class=\"payment-card shadow-sm\">
        <div class=\"table-responsive\">
            <table class=\"table table-grandoria align-middle mb-0\">
                <thead>
                    <tr>
                        <th class=\"ps-4\">Transaction ID</th>
                        <th>Client</th>
                        <th>Reservation</th>
                        <th>Method</th>
                        <th>Status</th>
                        <th class=\"text-end pe-4\">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 68, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 69
            yield "                        <tr style=\"border-bottom: 1px solid #e0d9b5;\">
                            <td class=\"ps-4 text-muted small\">#";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 70), "html", null, true);
            yield "</td>
                            
                            <td>
                                <div class=\"fw-bold text-grandoria\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "reservation", [], "any", false, false, false, 73), "user", [], "any", false, false, false, 73), "email", [], "any", false, false, false, 73), "html", null, true);
            yield "</div>
                            </td>

                            <td>
                                ";
            // line 78
            yield "                                <span style=\"color: #b68d40;\">
                                    <i class=\"bi bi-receipt me-1\"></i>Res #";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["p"], "reservation", [], "any", false, false, false, 79), "id", [], "any", false, false, false, 79), "html", null, true);
            yield "
                                </span>
                            </td>

                            <td>
                                <span class=\"method-icon\">
                                    ";
            // line 85
            if (((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "methode", [], "any", false, false, false, 85)) == "carte") || (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "methode", [], "any", false, false, false, 85)) == "credit card"))) {
                // line 86
                yield "                                        <i class=\"bi bi-credit-card\"></i>
                                    ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 87
$context["p"], "methode", [], "any", false, false, false, 87)) == "paypal")) {
                // line 88
                yield "                                        <i class=\"bi bi-paypal\"></i>
                                    ";
            } else {
                // line 90
                yield "                                        <i class=\"bi bi-cash-stack\"></i>
                                    ";
            }
            // line 92
            yield "                                </span>
                                <span class=\"text-capitalize small\">";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "methode", [], "any", false, false, false, 93), "html", null, true);
            yield "</span>
                            </td>

                            <td>
                                ";
            // line 97
            $context["statusClass"] = "status-pending";
            // line 98
            yield "                                ";
            if (CoreExtension::inFilter(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "statut", [], "any", false, false, false, 98)), ["payé", "paid", "completed"])) {
                // line 99
                yield "                                    ";
                $context["statusClass"] = "status-paid";
                // line 100
                yield "                                ";
            } elseif (CoreExtension::inFilter(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "statut", [], "any", false, false, false, 100)), ["failed", "échoué"])) {
                // line 101
                yield "                                    ";
                $context["statusClass"] = "status-failed";
                // line 102
                yield "                                ";
            }
            // line 103
            yield "                                
                                <span class=\"badge ";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["statusClass"]) || array_key_exists("statusClass", $context) ? $context["statusClass"] : (function () { throw new RuntimeError('Variable "statusClass" does not exist.', 104, $this->source); })()), "html", null, true);
            yield " px-3 py-2 rounded-pill text-uppercase\" style=\"font-size: 0.7rem;\">
                                    ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "statut", [], "any", false, false, false, 105), "html", null, true);
            yield "
                                </span>
                            </td>

                            <td class=\"text-end pe-4\">
                                <span class=\"amount-badge\">
                                    ";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "montant", [], "any", false, false, false, 111), 2, ".", ","), "html", null, true);
            yield " €
                                </span>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 115
        if (!$context['_iterated']) {
            // line 116
            yield "                        <tr>
                            <td colspan=\"6\" class=\"text-center py-5\">
                                <i class=\"bi bi-wallet2 fs-1 text-muted d-block mb-2\"></i>
                                <p class=\"text-muted\">No transaction records found.</p>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
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
        return "admin/payment/index.html.twig";
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
        return array (  278 => 123,  266 => 116,  264 => 115,  255 => 111,  246 => 105,  242 => 104,  239 => 103,  236 => 102,  233 => 101,  230 => 100,  227 => 99,  224 => 98,  222 => 97,  215 => 93,  212 => 92,  208 => 90,  204 => 88,  202 => 87,  199 => 86,  197 => 85,  188 => 79,  185 => 78,  178 => 73,  172 => 70,  169 => 69,  164 => 68,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Manage Payments - UrbanStay{% endblock %}

{% block body %}
<style>
    /* UrbanStay Financial Theme */
    .text-grandoria { color: #5c3d2e !important; }
    .bg-grandoria { background-color: #5c3d2e !important; color: white !important; }
    
    .payment-card {
        background-color: #faf9f6;
        border-radius: 12px;
        border: 1px solid #e0d9b5;
        overflow: hidden;
    }

    .table-grandoria thead {
        background-color: #5c3d2e;
        color: #ffffff;
    }

    .amount-badge {
        font-family: 'Courier New', Courier, monospace;
        font-weight: bold;
        color: #2d4628; 
        background: #e8f5e9;
        padding: 5px 12px;
        border-radius: 6px;
        border: 1px solid #c8e6c9;
    }

    .status-paid { color: #2d4628; background-color: #c8e6c9; }
    .status-pending { color: #5c3d2e; background-color: #f4f1de; border: 1px solid #e0d9b5; }
    .status-failed { color: #721c24; background-color: #f8d7da; }

    .method-icon {
        width: 32px;
        text-align: center;
        color: #b68d40;
    }
</style>

<div class=\"container mt-5\">
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
        <h1 class=\"fw-bold text-grandoria\">
            <i class=\"bi bi-credit-card-2-back-fill me-2\"></i>Payments History
        </h1>
        <div class=\"text-muted\">
            <i class=\"bi bi-shield-lock-fill\"></i> Secure Transactions
        </div>
    </div>

    <div class=\"payment-card shadow-sm\">
        <div class=\"table-responsive\">
            <table class=\"table table-grandoria align-middle mb-0\">
                <thead>
                    <tr>
                        <th class=\"ps-4\">Transaction ID</th>
                        <th>Client</th>
                        <th>Reservation</th>
                        <th>Method</th>
                        <th>Status</th>
                        <th class=\"text-end pe-4\">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    {% for p in payments %}
                        <tr style=\"border-bottom: 1px solid #e0d9b5;\">
                            <td class=\"ps-4 text-muted small\">#{{ p.id }}</td>
                            
                            <td>
                                <div class=\"fw-bold text-grandoria\">{{ p.reservation.user.email }}</div>
                            </td>

                            <td>
                                {# FIXED: Link removed to prevent RouteNotFoundException #}
                                <span style=\"color: #b68d40;\">
                                    <i class=\"bi bi-receipt me-1\"></i>Res #{{ p.reservation.id }}
                                </span>
                            </td>

                            <td>
                                <span class=\"method-icon\">
                                    {% if p.methode|lower == 'carte' or p.methode|lower == 'credit card' %}
                                        <i class=\"bi bi-credit-card\"></i>
                                    {% elseif p.methode|lower == 'paypal' %}
                                        <i class=\"bi bi-paypal\"></i>
                                    {% else %}
                                        <i class=\"bi bi-cash-stack\"></i>
                                    {% endif %}
                                </span>
                                <span class=\"text-capitalize small\">{{ p.methode }}</span>
                            </td>

                            <td>
                                {% set statusClass = 'status-pending' %}
                                {% if p.statut|lower in ['payé', 'paid', 'completed'] %}
                                    {% set statusClass = 'status-paid' %}
                                {% elseif p.statut|lower in ['failed', 'échoué'] %}
                                    {% set statusClass = 'status-failed' %}
                                {% endif %}
                                
                                <span class=\"badge {{ statusClass }} px-3 py-2 rounded-pill text-uppercase\" style=\"font-size: 0.7rem;\">
                                    {{ p.statut }}
                                </span>
                            </td>

                            <td class=\"text-end pe-4\">
                                <span class=\"amount-badge\">
                                    {{ p.montant|number_format(2, '.', ',') }} €
                                </span>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\" class=\"text-center py-5\">
                                <i class=\"bi bi-wallet2 fs-1 text-muted d-block mb-2\"></i>
                                <p class=\"text-muted\">No transaction records found.</p>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>
{% endblock %}", "admin/payment/index.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\admin\\payment\\index.html.twig");
    }
}
