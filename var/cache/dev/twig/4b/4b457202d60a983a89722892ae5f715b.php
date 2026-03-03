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

/* payment/new.html.twig */
class __TwigTemplate_6273297c97f6efd96483df9fa8775e4c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/new.html.twig"));

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

        yield "Checkout: Property ";
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
            --royal-blue: #1a252f;
            --gold-accent: #c5a059;
            --soft-gray: #f8f9fa;
        }

        .checkout-container {
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            border: 1px solid #eee;
        }

        .summary-header {
            background-color: var(--royal-blue);
            color: white;
            padding: 1.5rem;
            border-bottom: 4px solid var(--gold-accent);
        }

        .property-img-preview {
            width: 100%;
            height: 100%;
            object-fit: cover;
            min-height: 200px;
        }

        .payment-method-card {
            border: 2px solid #eee;
            border-radius: 10px;
            padding: 1.2rem;
            transition: all 0.3s ease;
            cursor: pointer;
            margin-bottom: 1rem;
            display: block;
        }

        .form-check-input:checked + .payment-method-card {
            border-color: var(--gold-accent);
            background-color: #fcf9f2;
        }

        .price-badge {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--royal-blue);
        }

        .btn-checkout {
            background-color: var(--royal-blue);
            color: white;
            border: none;
            padding: 1rem;
            font-weight: 600;
            letter-spacing: 1px;
            transition: 0.3s;
        }

        .btn-checkout:hover {
            background-color: var(--gold-accent);
            color: white;
        }

        .info-label {
            text-transform: uppercase;
            font-size: 0.75rem;
            font-weight: 700;
            color: #888;
            letter-spacing: 0.5px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 82
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

        // line 83
        yield "<main class=\"main\">
    ";
        // line 85
        yield "    <div class=\"page-title dark-background\">
        <div class=\"container\">
            <h1>Finalize Booking</h1>
            <nav class=\"breadcrumbs\">
                <ol>
                    <li><a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
                    <li class=\"current\">Secure Payment</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class=\"section py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                
                ";
        // line 102
        yield "                <div class=\"col-lg-7\">
                    <h4 class=\"fw-bold mb-4 text-dark\">Booking Summary</h4>
                    <div class=\"checkout-container\">
                        <div class=\"row g-0\">
                            <div class=\"col-md-5\">
                                ";
        // line 107
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 107, $this->source); })()), "images", [], "any", false, false, false, 107))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 108
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 108, $this->source); })()), "images", [], "any", false, false, false, 108), "first", [], "any", false, false, false, 108), "filename", [], "any", false, false, false, 108))), "html", null, true);
            yield "\" class=\"property-img-preview\" alt=\"Property\">
                                ";
        } else {
            // line 110
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/placeholder-property.webp"), "html", null, true);
            yield "\" class=\"property-img-preview\" alt=\"Placeholder\">
                                ";
        }
        // line 112
        yield "                            </div>
                            <div class=\"col-md-7 p-4\">
                                <span class=\"badge bg-dark mb-2\">Property ";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 114, $this->source); })()), "number", [], "any", false, false, false, 114), "html", null, true);
        yield "</span>
                                <h3 class=\"fw-bold text-dark\">Luxury Suite</h3>
                                <hr>
                                <div class=\"row\">
                                    <div class=\"col-6 mb-3\">
                                        <p class=\"info-label mb-0\">Check-In</p>
                                        <p class=\"fw-bold\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 120, $this->source); })()), "dateArrivee", [], "any", false, false, false, 120), "M d, Y"), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-6 mb-3\">
                                        <p class=\"info-label mb-0\">Check-Out</p>
                                        <p class=\"fw-bold\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 124, $this->source); })()), "dateDepart", [], "any", false, false, false, 124), "M d, Y"), "html", null, true);
        yield "</p>
                                    </div>
                                    <div class=\"col-12\">
                                        <p class=\"info-label mb-0\">Rate per night</p>
                                        <p class=\"fw-bold text-success\">\$";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 128, $this->source); })()), "price", [], "any", false, false, false, 128), "html", null, true);
        yield "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"bg-light p-4 d-flex justify-content-between align-items-center border-top\">
                            <h5 class=\"mb-0 fw-bold\">Total Amount Due</h5>
                            <span class=\"price-badge text-primary\">\$";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 135, $this->source); })()), "html", null, true);
        yield "</span>
                        </div>
                    </div>
                </div>

                ";
        // line 141
        yield "                <div class=\"col-lg-5\">
                    <div class=\"card border-0 shadow-sm p-4\" style=\"border-radius: 15px;\">
                        <h4 class=\"fw-bold mb-4 text-dark\">Payment Details</h4>
                        <form method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("payment"), "html", null, true);
        yield "\">
                            <p class=\"text-muted small mb-3\">Please select your preferred payment method:</p>

                            <label class=\"w-100\">
                                <input type=\"radio\" name=\"method\" id=\"pay_cash\" value=\"cash\" class=\"form-check-input d-none\" required>
                                <div class=\"payment-method-card\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bi bi-wallet2 fs-3 me-3 text-secondary\"></i>
                                        <div>
                                            <h6 class=\"mb-0 fw-bold\">Pay at Apartment Rental</h6>
                                            <small class=\"text-muted\">Cash or Card on arrival</small>
                                        </div>
                                    </div>
                                </div>
                            </label>

                            <label class=\"w-100\">
                                <input type=\"radio\" name=\"method\" id=\"pay_card\" value=\"card\" class=\"form-check-input d-none\">
                                <div class=\"payment-method-card\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bi bi-credit-card-2-front fs-3 me-3 text-secondary\"></i>
                                        <div>
                                            <h6 class=\"mb-0 fw-bold\">Credit / Debit Card</h6>
                                            <small class=\"text-muted\">Secure online payment</small>
                                        </div>
                                    </div>
                                </div>
                            </label>

                            ";
        // line 175
        yield "                            <div id=\"cash-warning\" class=\"alert alert-warning border-0 mt-3\" style=\"display: none; border-left: 4px solid #ffc107; border-radius: 8px;\">
                                <div class=\"d-flex\">
                                    <i class=\"bi bi-clock-history me-2\"></i>
                                    <small><strong>Policy:</strong> Reservation held for 2 hours past check-in time if unpaid.</small>
                                </div>
                            </div>

                            <button class=\"btn btn-checkout w-100 mt-4 rounded-pill shadow\">
                                CONFIRM & BOOK NOW
                            </button>
                            
                            <p class=\"text-center mt-3 small text-muted\">
                                <i class=\"bi bi-shield-lock-fill me-1\"></i> 256-bit SSL Encrypted
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cashRadio = document.getElementById('pay_cash');
        const cardRadio = document.getElementById('pay_card');
        const warning   = document.getElementById('cash-warning');

        function toggleWarning() {
            warning.style.display = cashRadio.checked ? 'block' : 'none';
        }

        cashRadio.addEventListener('change', toggleWarning);
        cardRadio.addEventListener('change', toggleWarning);
    });
</script>
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
        return "payment/new.html.twig";
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
        return array (  330 => 175,  298 => 145,  292 => 141,  284 => 135,  274 => 128,  267 => 124,  260 => 120,  251 => 114,  247 => 112,  241 => 110,  235 => 108,  233 => 107,  226 => 102,  212 => 90,  205 => 85,  202 => 83,  189 => 82,  102 => 6,  89 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Checkout: Property {{ property.number }}{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --royal-blue: #1a252f;
            --gold-accent: #c5a059;
            --soft-gray: #f8f9fa;
        }

        .checkout-container {
            background-color: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            border: 1px solid #eee;
        }

        .summary-header {
            background-color: var(--royal-blue);
            color: white;
            padding: 1.5rem;
            border-bottom: 4px solid var(--gold-accent);
        }

        .property-img-preview {
            width: 100%;
            height: 100%;
            object-fit: cover;
            min-height: 200px;
        }

        .payment-method-card {
            border: 2px solid #eee;
            border-radius: 10px;
            padding: 1.2rem;
            transition: all 0.3s ease;
            cursor: pointer;
            margin-bottom: 1rem;
            display: block;
        }

        .form-check-input:checked + .payment-method-card {
            border-color: var(--gold-accent);
            background-color: #fcf9f2;
        }

        .price-badge {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--royal-blue);
        }

        .btn-checkout {
            background-color: var(--royal-blue);
            color: white;
            border: none;
            padding: 1rem;
            font-weight: 600;
            letter-spacing: 1px;
            transition: 0.3s;
        }

        .btn-checkout:hover {
            background-color: var(--gold-accent);
            color: white;
        }

        .info-label {
            text-transform: uppercase;
            font-size: 0.75rem;
            font-weight: 700;
            color: #888;
            letter-spacing: 0.5px;
        }
    </style>
{% endblock %}

{% block body %}
<main class=\"main\">
    {# --- TOP HEADER --- #}
    <div class=\"page-title dark-background\">
        <div class=\"container\">
            <h1>Finalize Booking</h1>
            <nav class=\"breadcrumbs\">
                <ol>
                    <li><a href=\"{{ path('app_home') }}\">Home</a></li>
                    <li class=\"current\">Secure Payment</li>
                </ol>
            </nav>
        </div>
    </div>

    <section class=\"section py-5\">
        <div class=\"container\">
            <div class=\"row g-5\">
                
                {# --- LEFT SIDE: ROOM SUMMARY --- #}
                <div class=\"col-lg-7\">
                    <h4 class=\"fw-bold mb-4 text-dark\">Booking Summary</h4>
                    <div class=\"checkout-container\">
                        <div class=\"row g-0\">
                            <div class=\"col-md-5\">
                                {% if property.images is not empty %}
                                    <img src=\"{{ asset('uploads/images/' ~ property.images.first.filename) }}\" class=\"property-img-preview\" alt=\"Property\">
                                {% else %}
                                    <img src=\"{{ asset('assets/img/apartment rental/placeholder-property.webp') }}\" class=\"property-img-preview\" alt=\"Placeholder\">
                                {% endif %}
                            </div>
                            <div class=\"col-md-7 p-4\">
                                <span class=\"badge bg-dark mb-2\">Property {{ property.number }}</span>
                                <h3 class=\"fw-bold text-dark\">Luxury Suite</h3>
                                <hr>
                                <div class=\"row\">
                                    <div class=\"col-6 mb-3\">
                                        <p class=\"info-label mb-0\">Check-In</p>
                                        <p class=\"fw-bold\">{{ reservation.dateArrivee|date('M d, Y') }}</p>
                                    </div>
                                    <div class=\"col-6 mb-3\">
                                        <p class=\"info-label mb-0\">Check-Out</p>
                                        <p class=\"fw-bold\">{{ reservation.dateDepart|date('M d, Y') }}</p>
                                    </div>
                                    <div class=\"col-12\">
                                        <p class=\"info-label mb-0\">Rate per night</p>
                                        <p class=\"fw-bold text-success\">\${{ property.price }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"bg-light p-4 d-flex justify-content-between align-items-center border-top\">
                            <h5 class=\"mb-0 fw-bold\">Total Amount Due</h5>
                            <span class=\"price-badge text-primary\">\${{ total }}</span>
                        </div>
                    </div>
                </div>

                {# --- RIGHT SIDE: PAYMENT METHOD --- #}
                <div class=\"col-lg-5\">
                    <div class=\"card border-0 shadow-sm p-4\" style=\"border-radius: 15px;\">
                        <h4 class=\"fw-bold mb-4 text-dark\">Payment Details</h4>
                        <form method=\"post\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('payment') }}\">
                            <p class=\"text-muted small mb-3\">Please select your preferred payment method:</p>

                            <label class=\"w-100\">
                                <input type=\"radio\" name=\"method\" id=\"pay_cash\" value=\"cash\" class=\"form-check-input d-none\" required>
                                <div class=\"payment-method-card\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bi bi-wallet2 fs-3 me-3 text-secondary\"></i>
                                        <div>
                                            <h6 class=\"mb-0 fw-bold\">Pay at Apartment Rental</h6>
                                            <small class=\"text-muted\">Cash or Card on arrival</small>
                                        </div>
                                    </div>
                                </div>
                            </label>

                            <label class=\"w-100\">
                                <input type=\"radio\" name=\"method\" id=\"pay_card\" value=\"card\" class=\"form-check-input d-none\">
                                <div class=\"payment-method-card\">
                                    <div class=\"d-flex align-items-center\">
                                        <i class=\"bi bi-credit-card-2-front fs-3 me-3 text-secondary\"></i>
                                        <div>
                                            <h6 class=\"mb-0 fw-bold\">Credit / Debit Card</h6>
                                            <small class=\"text-muted\">Secure online payment</small>
                                        </div>
                                    </div>
                                </div>
                            </label>

                            {# --- WARNINGS --- #}
                            <div id=\"cash-warning\" class=\"alert alert-warning border-0 mt-3\" style=\"display: none; border-left: 4px solid #ffc107; border-radius: 8px;\">
                                <div class=\"d-flex\">
                                    <i class=\"bi bi-clock-history me-2\"></i>
                                    <small><strong>Policy:</strong> Reservation held for 2 hours past check-in time if unpaid.</small>
                                </div>
                            </div>

                            <button class=\"btn btn-checkout w-100 mt-4 rounded-pill shadow\">
                                CONFIRM & BOOK NOW
                            </button>
                            
                            <p class=\"text-center mt-3 small text-muted\">
                                <i class=\"bi bi-shield-lock-fill me-1\"></i> 256-bit SSL Encrypted
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cashRadio = document.getElementById('pay_cash');
        const cardRadio = document.getElementById('pay_card');
        const warning   = document.getElementById('cash-warning');

        function toggleWarning() {
            warning.style.display = cashRadio.checked ? 'block' : 'none';
        }

        cashRadio.addEventListener('change', toggleWarning);
        cardRadio.addEventListener('change', toggleWarning);
    });
</script>
{% endblock %}", "payment/new.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\payment\\new.html.twig");
    }
}
