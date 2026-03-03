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

/* registration/register.html.twig */
class __TwigTemplate_7da6c6b4caa0e090e822d5467a498728 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

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

        yield "Join Us | Register";
        
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
            max-width: 450px;
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
                    <h1>Create Account</h1>
                    <p class=\"mb-0 opacity-75\">Join our exclusive community</p>
                </div>

                <div class=\"p-4 p-md-5\">
                    ";
        // line 104
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 104, $this->source); })()), "flashes", ["error"], "method", false, false, false, 104));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 105
            yield "                        <div class=\"alert alert-danger border-0 small mb-4 shadow-sm\">
                            <i class=\"bi bi-exclamation-circle me-2\"></i> ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "
                    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "flashes", ["success"], "method", false, false, false, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 111
            yield "                        <div class=\"alert alert-success border-0 small mb-4 shadow-sm\">
                            <i class=\"bi bi-check-circle me-2\"></i> ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        yield "
                    ";
        // line 116
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 116, $this->source); })()), 'form_start');
        yield "
                        <div class=\"mb-3\">
                            ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 118, $this->source); })()), "email", [], "any", false, false, false, 118), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email Address"]);
        yield "
                            ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 119, $this->source); })()), "email", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "name@example.com"]]);
        yield "
                            <div class=\"text-danger small mt-1\">";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 120, $this->source); })()), "email", [], "any", false, false, false, 120), 'errors');
        yield "</div>
                        </div>

                        <div class=\"mb-3\">
                            ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 124, $this->source); })()), "plainPassword", [], "any", false, false, false, 124), "first", [], "any", false, false, false, 124), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Password"]);
        yield "
                            ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 125, $this->source); })()), "plainPassword", [], "any", false, false, false, 125), "first", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "••••••••"]]);
        yield "
                            <div class=\"text-danger small mt-1\">";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 126, $this->source); })()), "plainPassword", [], "any", false, false, false, 126), "first", [], "any", false, false, false, 126), 'errors');
        yield "</div>
                        </div>

                        <div class=\"mb-4\">
                            ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 130, $this->source); })()), "plainPassword", [], "any", false, false, false, 130), "second", [], "any", false, false, false, 130), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Confirm Password"]);
        yield "
                            ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 131, $this->source); })()), "plainPassword", [], "any", false, false, false, 131), "second", [], "any", false, false, false, 131), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "••••••••"]]);
        yield "
                            <div class=\"text-danger small mt-1\">";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 132, $this->source); })()), "plainPassword", [], "any", false, false, false, 132), "second", [], "any", false, false, false, 132), 'errors');
        yield "</div>
                        </div>

                        <button type=\"submit\" class=\"btn btn-beige w-100 shadow-sm\">
                            Register Now
                        </button>
                    ";
        // line 138
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 138, $this->source); })()), 'form_end');
        yield "

                    <div class=\"auth-footer\">
                        <p class=\"text-muted\">Already have an account? 
                            <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-beige fw-bold text-decoration-none\">Sign In</a>
                        </p>
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
        return "registration/register.html.twig";
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
        return array (  321 => 142,  314 => 138,  305 => 132,  301 => 131,  297 => 130,  290 => 126,  286 => 125,  282 => 124,  275 => 120,  271 => 119,  267 => 118,  262 => 116,  259 => 115,  250 => 112,  247 => 111,  243 => 110,  240 => 109,  231 => 106,  228 => 105,  223 => 104,  211 => 93,  198 => 92,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Join Us | Register{% endblock %}

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
            max-width: 450px;
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
                    <h1>Create Account</h1>
                    <p class=\"mb-0 opacity-75\">Join our exclusive community</p>
                </div>

                <div class=\"p-4 p-md-5\">
                    {# --- FLASH MESSAGES --- #}
                    {% for message in app.flashes('error') %}
                        <div class=\"alert alert-danger border-0 small mb-4 shadow-sm\">
                            <i class=\"bi bi-exclamation-circle me-2\"></i> {{ message }}
                        </div>
                    {% endfor %}

                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success border-0 small mb-4 shadow-sm\">
                            <i class=\"bi bi-check-circle me-2\"></i> {{ message }}
                        </div>
                    {% endfor %}

                    {{ form_start(registrationForm) }}
                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.email, 'Email Address', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control', 'placeholder': 'name@example.com'}}) }}
                            <div class=\"text-danger small mt-1\">{{ form_errors(registrationForm.email) }}</div>
                        </div>

                        <div class=\"mb-3\">
                            {{ form_label(registrationForm.plainPassword.first, 'Password', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.plainPassword.first, {'attr': {'class': 'form-control', 'placeholder': '••••••••'}}) }}
                            <div class=\"text-danger small mt-1\">{{ form_errors(registrationForm.plainPassword.first) }}</div>
                        </div>

                        <div class=\"mb-4\">
                            {{ form_label(registrationForm.plainPassword.second, 'Confirm Password', {'label_attr': {'class': 'form-label'}}) }}
                            {{ form_widget(registrationForm.plainPassword.second, {'attr': {'class': 'form-control', 'placeholder': '••••••••'}}) }}
                            <div class=\"text-danger small mt-1\">{{ form_errors(registrationForm.plainPassword.second) }}</div>
                        </div>

                        <button type=\"submit\" class=\"btn btn-beige w-100 shadow-sm\">
                            Register Now
                        </button>
                    {{ form_end(registrationForm) }}

                    <div class=\"auth-footer\">
                        <p class=\"text-muted\">Already have an account? 
                            <a href=\"{{ path('app_login') }}\" class=\"text-beige fw-bold text-decoration-none\">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
{% endblock %}
", "registration/register.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\registration\\register.html.twig");
    }
}
