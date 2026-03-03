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

/* profile/index.html.twig */
class __TwigTemplate_e69808270c21b0fa90bbdd125a57ed76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

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

        yield "My Profile";
        
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
            --dark-blue: #1a252f;
            --light-bg: #f8f9fa;
        }

        .profile-header-card {
            background: white;
            border-radius: 20px;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .avatar-circle {
            width: 80px;
            height: 80px;
            background: var(--accent-beige);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            border-radius: 50%;
            font-weight: bold;
        }

        .section-title {
            font-weight: 700;
            color: var(--dark-blue);
            position: relative;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: var(--accent-beige);
        }

        .reservation-card {
            border: 1px solid #eee;
            border-radius: 15px;
            transition: 0.3s;
            background: white;
        }

        .reservation-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        .badge-status {
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .table-custom {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        }

        .table-custom thead {
            background: var(--dark-blue);
            color: white;
        }

        .table-custom th {
            padding: 1.2rem;
            font-weight: 500;
            border: none;
        }

        .table-custom td {
            padding: 1.2rem;
            vertical-align: middle;
            border-color: #f1f1f1;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
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

        // line 101
        yield "<main class=\"main bg-light pb-5\">
     <!-- Page Title -->
    <div class=\"page-title light-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Profile</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
            <li><a href=\"#\">Profile</a></li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
<br><br>

    <div class=\"container\">
        <div class=\"row g-4\">
            
            ";
        // line 120
        yield "            <div class=\"col-lg-4\">
                <div class=\"profile-header-card p-4 text-center\">
                    <div class=\"d-flex justify-content-center mb-3\">
                        <div class=\"avatar-circle\">
                            ";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 124, $this->source); })()), "email", [], "any", false, false, false, 124))), "html", null, true);
        yield "
                        </div>
                    </div>
                    <h4 class=\"fw-bold mb-1\">";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 127, $this->source); })()), "email", [], "any", false, false, false, 127), "html", null, true);
        yield "</h4>
                    <p class=\"text-muted small mb-4\">Member since ";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "</p>
                    
                    <div class=\"text-start border-top pt-3\">
                        <label class=\"info-label text-muted small text-uppercase fw-bold\">Privileges</label>
                        <div class=\"mt-2\">
                            ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 133, $this->source); })()), "roles", [], "any", false, false, false, 133));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 134
            yield "                                <span class=\"badge bg-light text-dark border me-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["role"], ["ROLE_" => ""]), "html", null, true);
            yield "</span>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "                        </div>
                    </div>
                </div>

                <div class=\"card border-0 shadow-sm p-4\" style=\"border-radius: 20px;\">
                    <h6 class=\"fw-bold mb-3\">Need Assistance?</h6>
                    <p class=\"small text-muted\">If you need to modify your personal data or cancel a reservation, please contact our support team.</p>
                    <a href=\"#\" class=\"btn btn-outline-beige btn-sm w-100\">Contact Support</a>
                </div>
            </div>

            ";
        // line 148
        yield "            <div class=\"col-lg-8\">
                <h3 class=\"section-title\">My Bookings</h3>

                ";
        // line 151
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 151, $this->source); })()))) {
            // line 152
            yield "                    <div class=\"text-center py-5 bg-white rounded-4 shadow-sm\">
                        <i class=\"bi bi-calendar-x text-muted\" style=\"font-size: 3rem;\"></i>
                        <p class=\"mt-3 text-muted\">You haven't made any reservations yet.</p>
                        <a href=\"";
            // line 155
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\" class=\"btn btn-beige px-4\">Browse Properties</a>
                    </div>
                ";
        } else {
            // line 158
            yield "                    <div class=\"table-responsive table-custom\">
                        <table class=\"table mb-0\">
                            <thead>
                                <tr>
                                    ";
            // line 162
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 163
                yield "                                        <th>Guest</th>
                                    ";
            }
            // line 165
            yield "                                    <th>Property</th>
                                    <th>Dates</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 172, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 173
                yield "                                    <tr>
                                        ";
                // line 174
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 175
                    yield "                                            <td><small class=\"fw-bold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 175), "email", [], "any", false, false, false, 175), "html", null, true);
                    yield "</small></td>
                                        ";
                }
                // line 177
                yield "                                        <td>
                                            <span class=\"text-dark fw-bold\">
                                                ";
                // line 179
                yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "property", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("Property " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "property", [], "any", false, false, false, 179), "number", [], "any", false, false, false, 179)), "html", null, true)) : ("N/A"));
                yield "
                                            </span>
                                        </td>
                                        <td>
                                            <div class=\"small\">
                                                <i class=\"bi bi-arrow-right-short text-beige\"></i> 
                                                ";
                // line 185
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateArrivee", [], "any", false, false, false, 185), "d M"), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dateDepart", [], "any", false, false, false, 185), "d M, Y"), "html", null, true);
                yield "
                                            </div>
                                        </td>
                                        <td>
                                            <span class=\"badge badge-status 
                                                ";
                // line 190
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 190) == "paid")) {
                    yield "bg-success-subtle text-success
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 191
$context["reservation"], "statut", [], "any", false, false, false, 191) == "pending_cash")) {
                    yield "bg-warning-subtle text-warning
                                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 192
$context["reservation"], "statut", [], "any", false, false, false, 192) == "cancelled")) {
                    yield "bg-danger-subtle text-danger
                                                ";
                } else {
                    // line 193
                    yield "bg-secondary-subtle text-secondary";
                }
                yield "\">
                                                ";
                // line 194
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statut", [], "any", false, false, false, 194), ["_" => " "])), "html", null, true);
                yield "
                                            </span>
                                        </td>
                                        <td class=\"fw-bold text-dark\">\$";
                // line 197
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "totalPrice", [], "any", false, false, false, 197), "html", null, true);
                yield "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 200
            yield "                            </tbody>
                        </table>
                    </div>
                ";
        }
        // line 204
        yield "            </div>
        </div>
    </div>
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
        return "profile/index.html.twig";
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
        return array (  408 => 204,  402 => 200,  393 => 197,  387 => 194,  382 => 193,  377 => 192,  373 => 191,  369 => 190,  359 => 185,  350 => 179,  346 => 177,  340 => 175,  338 => 174,  335 => 173,  331 => 172,  322 => 165,  318 => 163,  316 => 162,  310 => 158,  304 => 155,  299 => 152,  297 => 151,  292 => 148,  279 => 136,  270 => 134,  266 => 133,  258 => 128,  254 => 127,  248 => 124,  242 => 120,  228 => 108,  219 => 101,  206 => 100,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}My Profile{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --accent-beige: #d2b48c;
            --dark-blue: #1a252f;
            --light-bg: #f8f9fa;
        }

        .profile-header-card {
            background: white;
            border-radius: 20px;
            border: none;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .avatar-circle {
            width: 80px;
            height: 80px;
            background: var(--accent-beige);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            border-radius: 50%;
            font-weight: bold;
        }

        .section-title {
            font-weight: 700;
            color: var(--dark-blue);
            position: relative;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background: var(--accent-beige);
        }

        .reservation-card {
            border: 1px solid #eee;
            border-radius: 15px;
            transition: 0.3s;
            background: white;
        }

        .reservation-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
        }

        .badge-status {
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .table-custom {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.03);
        }

        .table-custom thead {
            background: var(--dark-blue);
            color: white;
        }

        .table-custom th {
            padding: 1.2rem;
            font-weight: 500;
            border: none;
        }

        .table-custom td {
            padding: 1.2rem;
            vertical-align: middle;
            border-color: #f1f1f1;
        }
    </style>
{% endblock %}

{% block body %}
<main class=\"main bg-light pb-5\">
     <!-- Page Title -->
    <div class=\"page-title light-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Profile</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ path('app_home') }}\">Home</a></li>
            <li><a href=\"#\">Profile</a></li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->
<br><br>

    <div class=\"container\">
        <div class=\"row g-4\">
            
            {# --- SIDEBAR: USER INFO --- #}
            <div class=\"col-lg-4\">
                <div class=\"profile-header-card p-4 text-center\">
                    <div class=\"d-flex justify-content-center mb-3\">
                        <div class=\"avatar-circle\">
                            {{ user.email|first|upper }}
                        </div>
                    </div>
                    <h4 class=\"fw-bold mb-1\">{{ user.email }}</h4>
                    <p class=\"text-muted small mb-4\">Member since {{ \"now\"|date(\"Y\") }}</p>
                    
                    <div class=\"text-start border-top pt-3\">
                        <label class=\"info-label text-muted small text-uppercase fw-bold\">Privileges</label>
                        <div class=\"mt-2\">
                            {% for role in user.roles %}
                                <span class=\"badge bg-light text-dark border me-1\">{{ role|replace({'ROLE_': ''}) }}</span>
                            {% endfor %}
                        </div>
                    </div>
                </div>

                <div class=\"card border-0 shadow-sm p-4\" style=\"border-radius: 20px;\">
                    <h6 class=\"fw-bold mb-3\">Need Assistance?</h6>
                    <p class=\"small text-muted\">If you need to modify your personal data or cancel a reservation, please contact our support team.</p>
                    <a href=\"#\" class=\"btn btn-outline-beige btn-sm w-100\">Contact Support</a>
                </div>
            </div>

            {# --- MAIN CONTENT: RESERVATIONS --- #}
            <div class=\"col-lg-8\">
                <h3 class=\"section-title\">My Bookings</h3>

                {% if reservations is empty %}
                    <div class=\"text-center py-5 bg-white rounded-4 shadow-sm\">
                        <i class=\"bi bi-calendar-x text-muted\" style=\"font-size: 3rem;\"></i>
                        <p class=\"mt-3 text-muted\">You haven't made any reservations yet.</p>
                        <a href=\"{{ path('app_home') }}\" class=\"btn btn-beige px-4\">Browse Properties</a>
                    </div>
                {% else %}
                    <div class=\"table-responsive table-custom\">
                        <table class=\"table mb-0\">
                            <thead>
                                <tr>
                                    {% if is_granted('ROLE_ADMIN') %}
                                        <th>Guest</th>
                                    {% endif %}
                                    <th>Property</th>
                                    <th>Dates</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for reservation in reservations %}
                                    <tr>
                                        {% if is_granted('ROLE_ADMIN') %}
                                            <td><small class=\"fw-bold\">{{ reservation.user.email }}</small></td>
                                        {% endif %}
                                        <td>
                                            <span class=\"text-dark fw-bold\">
                                                {{ reservation.property ? 'Property ' ~ reservation.property.number : 'N/A' }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class=\"small\">
                                                <i class=\"bi bi-arrow-right-short text-beige\"></i> 
                                                {{ reservation.dateArrivee|date('d M') }} - {{ reservation.dateDepart|date('d M, Y') }}
                                            </div>
                                        </td>
                                        <td>
                                            <span class=\"badge badge-status 
                                                {% if reservation.statut == 'paid' %}bg-success-subtle text-success
                                                {% elseif reservation.statut == 'pending_cash' %}bg-warning-subtle text-warning
                                                {% elseif reservation.statut == 'cancelled' %}bg-danger-subtle text-danger
                                                {% else %}bg-secondary-subtle text-secondary{% endif %}\">
                                                {{ reservation.statut|replace({'_': ' '})|title }}
                                            </span>
                                        </td>
                                        <td class=\"fw-bold text-dark\">\${{ reservation.totalPrice }}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</main>
{% endblock %}", "profile/index.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\profile\\index.html.twig");
    }
}
