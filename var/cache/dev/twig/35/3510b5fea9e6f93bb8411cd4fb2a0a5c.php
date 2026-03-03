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

/* payment/success.html.twig */
class __TwigTemplate_90fcc95eed5e2a95d97f87fa46d27f76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/success.html.twig"));

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

        yield "Reservation Confirmed";
        
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
            --success-green: #2d6a4f;
            --soft-green: #e9f5ee;
            --gold-accent: #c5a059;
        }

        .success-wrapper {
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .success-card {
            background: white;
            padding: 3rem;
            border-radius: 30px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.05);
            text-align: center;
            max-width: 550px;
            width: 100%;
            border: 1px solid rgba(0,0,0,0.03);
            position: relative;
        }

        .confetti-icon {
            font-size: 4rem;
            display: inline-block;
            margin-bottom: 1.5rem;
            background: var(--soft-green);
            width: 100px;
            height: 100px;
            line-height: 100px;
            border-radius: 50%;
            color: var(--success-green);
            animation: pulse-green 2s infinite;
        }

        @keyframes pulse-green {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(45, 106, 79, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 15px rgba(45, 106, 79, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(45, 106, 79, 0); }
        }

        .success-title {
            color: #1a252f;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 1rem;
        }

        .order-number {
            font-family: 'Courier New', Courier, monospace;
            background: #f8f9fa;
            padding: 5px 15px;
            border-radius: 5px;
            color: #6c757d;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 2rem;
        }

        .btn-home {
            background-color: #1a252f;
            color: white;
            border: none;
            padding: 12px 35px;
            border-radius: 50px;
            font-weight: 600;
            transition: 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-home:hover {
            background-color: var(--gold-accent);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(197, 160, 89, 0.3);
        }

        .check-list {
            text-align: left;
            margin: 2rem 0;
            padding: 0;
            list-style: none;
            color: #555;
        }

        .check-list li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .check-list li i {
            color: var(--success-green);
            margin-right: 10px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 110
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

        // line 111
        yield "<main class=\"main\">
    <div class=\"success-wrapper\">
        <div class=\"container d-flex justify-content-center\">
            <div class=\"success-card\" data-aos=\"zoom-in\">
                
                <div class=\"confetti-icon\">
                    <i class=\"bi bi-check-circle-fill\"></i>
                </div>

                <h1 class=\"success-title\">Payment Successful</h1>
                <p class=\"text-muted px-md-4\">
                    Your luxury stay is now officially booked. We've sent a confirmation email with all the details to your inbox.
                </p>

                <ul class=\"check-list d-inline-block\">
                    <li><i class=\"bi bi-check2-all\"></i> Property reserved exclusively for you</li>
                    <li><i class=\"bi bi-check2-all\"></i> Payment processed securely</li>
                    <li><i class=\"bi bi-check2-all\"></i> Check-in instructions sent</li>
                </ul>

                <div class=\"mt-4\">
                    <a href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn-home\">
                        <i class=\"bi bi-house-door me-2\"></i> Back to Homepage
                    </a>
                </div>

                <div class=\"mt-4 pt-3 border-top\">
                    <small class=\"text-muted\">Need help? <a href=\"#\" class=\"text-decoration-none text-beige\">Contact Concierge</a></small>
                </div>
            </div>
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
        return "payment/success.html.twig";
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
        return array (  252 => 132,  229 => 111,  216 => 110,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reservation Confirmed{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --success-green: #2d6a4f;
            --soft-green: #e9f5ee;
            --gold-accent: #c5a059;
        }

        .success-wrapper {
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .success-card {
            background: white;
            padding: 3rem;
            border-radius: 30px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.05);
            text-align: center;
            max-width: 550px;
            width: 100%;
            border: 1px solid rgba(0,0,0,0.03);
            position: relative;
        }

        .confetti-icon {
            font-size: 4rem;
            display: inline-block;
            margin-bottom: 1.5rem;
            background: var(--soft-green);
            width: 100px;
            height: 100px;
            line-height: 100px;
            border-radius: 50%;
            color: var(--success-green);
            animation: pulse-green 2s infinite;
        }

        @keyframes pulse-green {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(45, 106, 79, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 15px rgba(45, 106, 79, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(45, 106, 79, 0); }
        }

        .success-title {
            color: #1a252f;
            font-weight: 800;
            letter-spacing: -1px;
            margin-bottom: 1rem;
        }

        .order-number {
            font-family: 'Courier New', Courier, monospace;
            background: #f8f9fa;
            padding: 5px 15px;
            border-radius: 5px;
            color: #6c757d;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 2rem;
        }

        .btn-home {
            background-color: #1a252f;
            color: white;
            border: none;
            padding: 12px 35px;
            border-radius: 50px;
            font-weight: 600;
            transition: 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-home:hover {
            background-color: var(--gold-accent);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(197, 160, 89, 0.3);
        }

        .check-list {
            text-align: left;
            margin: 2rem 0;
            padding: 0;
            list-style: none;
            color: #555;
        }

        .check-list li {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .check-list li i {
            color: var(--success-green);
            margin-right: 10px;
        }
    </style>
{% endblock %}

{% block body %}
<main class=\"main\">
    <div class=\"success-wrapper\">
        <div class=\"container d-flex justify-content-center\">
            <div class=\"success-card\" data-aos=\"zoom-in\">
                
                <div class=\"confetti-icon\">
                    <i class=\"bi bi-check-circle-fill\"></i>
                </div>

                <h1 class=\"success-title\">Payment Successful</h1>
                <p class=\"text-muted px-md-4\">
                    Your luxury stay is now officially booked. We've sent a confirmation email with all the details to your inbox.
                </p>

                <ul class=\"check-list d-inline-block\">
                    <li><i class=\"bi bi-check2-all\"></i> Property reserved exclusively for you</li>
                    <li><i class=\"bi bi-check2-all\"></i> Payment processed securely</li>
                    <li><i class=\"bi bi-check2-all\"></i> Check-in instructions sent</li>
                </ul>

                <div class=\"mt-4\">
                    <a href=\"{{ path('app_home') }}\" class=\"btn-home\">
                        <i class=\"bi bi-house-door me-2\"></i> Back to Homepage
                    </a>
                </div>

                <div class=\"mt-4 pt-3 border-top\">
                    <small class=\"text-muted\">Need help? <a href=\"#\" class=\"text-decoration-none text-beige\">Contact Concierge</a></small>
                </div>
            </div>
        </div>
    </div>
</main>
{% endblock %}", "payment/success.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\payment\\success.html.twig");
    }
}
