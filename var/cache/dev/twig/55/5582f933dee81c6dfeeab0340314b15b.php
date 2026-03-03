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

/* security/login.html.twig */
class __TwigTemplate_0283ddef80284164846d8d9f59f89953 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Sign In | Welcome Back";
        
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
            --dark-blue: #1a252f;
        }

        .auth-section {
            min-height: 80vh;
            display: flex;
            align-items: center;
            background-color: #fcfaf7;
        }

        .auth-card {
            background: white;
            border-radius: 20px;
            border: none;
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
            overflow: hidden;
            width: 100%;
            max-width: 420px;
            margin: auto;
        }

        .auth-header {
            background-color: var(--dark-blue);
            color: white;
            padding: 2.5rem 2rem;
            text-align: center;
        }

        .auth-header h1 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--soft-beige);
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

        .form-label {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            color: var(--dark-blue);
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #e0e0e0;
        }

        .form-control:focus {
            border-color: var(--accent-beige);
            box-shadow: 0 0 0 0.2rem rgba(210, 180, 140, 0.15);
        }

        .auth-footer {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.9rem;
        }

        .text-beige { color: var(--dark-beige); }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 92
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

        // line 93
        yield "<main class=\"main\">
    <section class=\"auth-section py-5\">
        <div class=\"container\">
            <div class=\"auth-card\">
                <div class=\"auth-header\">
                    <h1>Welcome Back</h1>
                    <p class=\"mb-0 opacity-75\">Please enter your details</p>
                </div>

                <div class=\"p-4 p-md-5\">
                    ";
        // line 104
        yield "                    ";
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 104, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "                        <div class=\"alert alert-danger border-0 small mb-4 shadow-sm\">
                            <i class=\"bi bi-exclamation-circle me-2\"></i> 
                            ";
            // line 107
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 107, $this->source); })()), "messageKey", [], "any", false, false, false, 107), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 107, $this->source); })()), "messageData", [], "any", false, false, false, 107), "security"), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 110
        yield "
                    <form method=\"post\">
                        <div class=\"mb-3\">
                            <label for=\"email\" class=\"form-label\">Email Address</label>
                            <input
                                type=\"email\"
                                id=\"email\"
                                name=\"email\"
                                class=\"form-control\"
                                value=\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 119, $this->source); })()), "html", null, true);
        yield "\"
                                placeholder=\"name@example.com\"
                                required
                                autofocus
                            >
                        </div>

                        <div class=\"mb-4\">
                            <div class=\"d-flex justify-content-between\">
                                <label for=\"password\" class=\"form-label\">Password</label>
                            </div>
                            <input
                                type=\"password\"
                                id=\"password\"
                                name=\"password\"
                                class=\"form-control\"
                                placeholder=\"••••••••\"
                                required
                            >
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                        <button type=\"submit\" class=\"btn btn-beige w-100 shadow-sm\">
                            Sign In
                        </button>
                    </form>

                    <div class=\"auth-footer\">
                        <p class=\"text-muted\">New to our apartment rental? 
                            <a href=\"";
        // line 149
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-beige fw-bold text-decoration-none\">Create an account</a>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class=\"text-center mt-4\">
                <a href=\"";
        // line 156
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-muted small text-decoration-none\">
                    <i class=\"bi bi-arrow-left me-1\"></i> Back to Homepage
                </a>
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
        return "security/login.html.twig";
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
        return array (  293 => 156,  283 => 149,  271 => 140,  247 => 119,  236 => 110,  230 => 107,  226 => 105,  223 => 104,  211 => 93,  198 => 92,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sign In | Welcome Back{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --accent-beige: #d2b48c;
            --soft-beige: #f5f5dc;
            --dark-beige: #8b7355;
            --dark-blue: #1a252f;
        }

        .auth-section {
            min-height: 80vh;
            display: flex;
            align-items: center;
            background-color: #fcfaf7;
        }

        .auth-card {
            background: white;
            border-radius: 20px;
            border: none;
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
            overflow: hidden;
            width: 100%;
            max-width: 420px;
            margin: auto;
        }

        .auth-header {
            background-color: var(--dark-blue);
            color: white;
            padding: 2.5rem 2rem;
            text-align: center;
        }

        .auth-header h1 {
            font-size: 1.75rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--soft-beige);
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

        .form-label {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            color: var(--dark-blue);
        }

        .form-control {
            border-radius: 8px;
            padding: 12px;
            border: 1px solid #e0e0e0;
        }

        .form-control:focus {
            border-color: var(--accent-beige);
            box-shadow: 0 0 0 0.2rem rgba(210, 180, 140, 0.15);
        }

        .auth-footer {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.9rem;
        }

        .text-beige { color: var(--dark-beige); }
    </style>
{% endblock %}

{% block body %}
<main class=\"main\">
    <section class=\"auth-section py-5\">
        <div class=\"container\">
            <div class=\"auth-card\">
                <div class=\"auth-header\">
                    <h1>Welcome Back</h1>
                    <p class=\"mb-0 opacity-75\">Please enter your details</p>
                </div>

                <div class=\"p-4 p-md-5\">
                    {# --- ERROR MESSAGES --- #}
                    {% if error %}
                        <div class=\"alert alert-danger border-0 small mb-4 shadow-sm\">
                            <i class=\"bi bi-exclamation-circle me-2\"></i> 
                            {{ error.messageKey|trans(error.messageData, 'security') }}
                        </div>
                    {% endif %}

                    <form method=\"post\">
                        <div class=\"mb-3\">
                            <label for=\"email\" class=\"form-label\">Email Address</label>
                            <input
                                type=\"email\"
                                id=\"email\"
                                name=\"email\"
                                class=\"form-control\"
                                value=\"{{ last_username }}\"
                                placeholder=\"name@example.com\"
                                required
                                autofocus
                            >
                        </div>

                        <div class=\"mb-4\">
                            <div class=\"d-flex justify-content-between\">
                                <label for=\"password\" class=\"form-label\">Password</label>
                            </div>
                            <input
                                type=\"password\"
                                id=\"password\"
                                name=\"password\"
                                class=\"form-control\"
                                placeholder=\"••••••••\"
                                required
                            >
                        </div>

                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                        <button type=\"submit\" class=\"btn btn-beige w-100 shadow-sm\">
                            Sign In
                        </button>
                    </form>

                    <div class=\"auth-footer\">
                        <p class=\"text-muted\">New to our apartment rental? 
                            <a href=\"{{ path('app_register') }}\" class=\"text-beige fw-bold text-decoration-none\">Create an account</a>
                        </p>
                    </div>
                </div>
            </div>
            
            <div class=\"text-center mt-4\">
                <a href=\"{{ path('app_home') }}\" class=\"text-muted small text-decoration-none\">
                    <i class=\"bi bi-arrow-left me-1\"></i> Back to Homepage
                </a>
            </div>
        </div>
    </section>
</main>
{% endblock %}", "security/login.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\security\\login.html.twig");
    }
}
