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

/* payment/index.html.twig */
class __TwigTemplate_a206089425403da469edbfce5b8e65c8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

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

        yield "Payments";
        
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
        yield "<div class=\"container mt-5\">

    <h1 class=\"mb-4\">Payments</h1>

    <table class=\"table table-striped table-hover align-middle\">
        <thead class=\"table-dark\">
            <tr>
                <th>ID</th>
                <th>Amount</th>
                <th>Method</th>
                <th>Status</th>
                ";
        // line 17
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "                    <th>Actions</th>
                ";
        }
        // line 20
        yield "            </tr>
        </thead>
        <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 23, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 24
            yield "            <tr>
                <td>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "</td>
                <td>";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "montant", [], "any", false, false, false, 26), "html", null, true);
            yield " \$</td>
                <td>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "methode", [], "any", false, false, false, 27)), "html", null, true);
            yield "</td>
                <td>
                    <span class=\"badge 
                        ";
            // line 30
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "statut", [], "any", false, false, false, 30) == "paid")) {
                yield "bg-success
                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 31
$context["payment"], "statut", [], "any", false, false, false, 31) == "pending")) {
                yield "bg-warning
                        ";
            } else {
                // line 32
                yield "bg-secondary";
            }
            // line 33
            yield "                    \">
                        ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "statut", [], "any", false, false, false, 34), "html", null, true);
            yield "
                    </span>
                </td>

                ";
            // line 38
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 39
                yield "                <td>
                    <a href=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                yield "\"
                       class=\"btn btn-sm btn-outline-primary\">
                        View
                    </a>

                    <a href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_payment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["payment"], "id", [], "any", false, false, false, 45)]), "html", null, true);
                yield "\"
                       class=\"btn btn-sm btn-outline-secondary\">
                        Edit
                    </a>
                </td>
                ";
            }
            // line 51
            yield "            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 52
        if (!$context['_iterated']) {
            // line 53
            yield "            <tr>
                <td colspan=\"5\" class=\"text-center text-muted\">
                    No payments found.
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['payment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "        </tbody>
    </table>

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
        return "payment/index.html.twig";
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
        return array (  208 => 59,  197 => 53,  195 => 52,  190 => 51,  181 => 45,  173 => 40,  170 => 39,  168 => 38,  161 => 34,  158 => 33,  155 => 32,  150 => 31,  146 => 30,  140 => 27,  136 => 26,  132 => 25,  129 => 24,  124 => 23,  119 => 20,  115 => 18,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Payments{% endblock %}

{% block body %}
<div class=\"container mt-5\">

    <h1 class=\"mb-4\">Payments</h1>

    <table class=\"table table-striped table-hover align-middle\">
        <thead class=\"table-dark\">
            <tr>
                <th>ID</th>
                <th>Amount</th>
                <th>Method</th>
                <th>Status</th>
                {% if is_granted('ROLE_ADMIN') %}
                    <th>Actions</th>
                {% endif %}
            </tr>
        </thead>
        <tbody>
        {% for payment in payments %}
            <tr>
                <td>{{ payment.id }}</td>
                <td>{{ payment.montant }} \$</td>
                <td>{{ payment.methode|capitalize }}</td>
                <td>
                    <span class=\"badge 
                        {% if payment.statut == 'paid' %}bg-success
                        {% elseif payment.statut == 'pending' %}bg-warning
                        {% else %}bg-secondary{% endif %}
                    \">
                        {{ payment.statut }}
                    </span>
                </td>

                {% if is_granted('ROLE_ADMIN') %}
                <td>
                    <a href=\"{{ path('app_payment_show', {'id': payment.id}) }}\"
                       class=\"btn btn-sm btn-outline-primary\">
                        View
                    </a>

                    <a href=\"{{ path('app_payment_edit', {'id': payment.id}) }}\"
                       class=\"btn btn-sm btn-outline-secondary\">
                        Edit
                    </a>
                </td>
                {% endif %}
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\" class=\"text-center text-muted\">
                    No payments found.
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

</div>
{% endblock %}
", "payment/index.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\payment\\index.html.twig");
    }
}
