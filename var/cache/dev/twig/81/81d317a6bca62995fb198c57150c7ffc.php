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

/* image/upload.html.twig */
class __TwigTemplate_e2962b7819734e3d5ef00e31fc1fe759 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "image/upload.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "image/upload.html.twig"));

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

        yield "Upload";
        
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
            --soft-cream: #fdfaf5;
            --border-beige: #e3d5ca;
            --text-muted-brown: #7f6d5e;
            --accent-latte: #bca38f;
        }

        /* Smaller, more compact card */
        .upload-container {
            max-width: 500px; /* Reduced width */
            margin: 40px auto;
        }

        .mini-upload-card {
            border: 1px solid var(--border-beige);
            border-radius: 12px;
            background-color: white;
            padding: 25px;
        }

        .mini-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .mini-header h4 {
            font-size: 1.2rem;
            color: var(--text-muted-brown);
            font-weight: 600;
            margin-bottom: 5px;
        }

        /* Subtle file input area */
        .compact-drop-zone {
            background-color: var(--soft-cream);
            border: 1px dashed var(--border-beige);
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Small Latte Button */
        .btn-latte {
            background-color: var(--accent-latte);
            color: white;
            border: none;
            padding: 8px 18px;
            font-size: 0.9rem;
            border-radius: 6px;
            transition: 0.2s;
        }

        .btn-latte:hover {
            background-color: var(--text-muted-brown);
            color: white;
        }

        .btn-cancel {
            font-size: 0.85rem;
            color: #999;
            text-decoration: none;
        }
        
        .btn-cancel:hover { color: #666; }

        /* Hide default Symfony labels for a cleaner look */
        .compact-drop-zone label {
            display: none;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
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

        // line 82
        yield "    <main class=\"main\">
        <div class=\"container\">
            ";
        // line 85
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "flashes", ["error"], "method", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 86
            yield "                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 91, $this->source); })()), "flashes", ["success"], "method", false, false, false, 91));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 92
            yield "                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "
            <div class=\"upload-container\">
                <div class=\"mini-upload-card shadow-sm\">
                    
                    <div class=\"mini-header\">
                        <i class=\"bi bi-image text-beige fs-3\"></i>
                        <h4>Add Photo</h4>
                        <p class=\"small text-muted mb-0\">
                            ";
        // line 105
        if (((isset($context["entityType"]) || array_key_exists("entityType", $context) ? $context["entityType"] : (function () { throw new RuntimeError('Variable "entityType" does not exist.', 105, $this->source); })()) == "property")) {
            // line 106
            yield "                                Property: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parentEntity"]) || array_key_exists("parentEntity", $context) ? $context["parentEntity"] : (function () { throw new RuntimeError('Variable "parentEntity" does not exist.', 106, $this->source); })()), "number", [], "any", false, false, false, 106), "html", null, true);
            yield "
                            ";
        } elseif ((        // line 107
(isset($context["entityType"]) || array_key_exists("entityType", $context) ? $context["entityType"] : (function () { throw new RuntimeError('Variable "entityType" does not exist.', 107, $this->source); })()) == "service")) {
            // line 108
            yield "                                Service: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parentEntity"]) || array_key_exists("parentEntity", $context) ? $context["parentEntity"] : (function () { throw new RuntimeError('Variable "parentEntity" does not exist.', 108, $this->source); })()), "nom", [], "any", false, false, false, 108), "html", null, true);
            yield "
                            ";
        } elseif ((        // line 109
(isset($context["entityType"]) || array_key_exists("entityType", $context) ? $context["entityType"] : (function () { throw new RuntimeError('Variable "entityType" does not exist.', 109, $this->source); })()) == "event")) {
            // line 110
            yield "                                Event: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parentEntity"]) || array_key_exists("parentEntity", $context) ? $context["parentEntity"] : (function () { throw new RuntimeError('Variable "parentEntity" does not exist.', 110, $this->source); })()), "name", [], "any", false, false, false, 110), "html", null, true);
            yield "
                            ";
        } else {
            // line 112
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["entityType"]) || array_key_exists("entityType", $context) ? $context["entityType"] : (function () { throw new RuntimeError('Variable "entityType" does not exist.', 112, $this->source); })())), "html", null, true);
            yield ": ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["parentEntity"]) || array_key_exists("parentEntity", $context) ? $context["parentEntity"] : (function () { throw new RuntimeError('Variable "parentEntity" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112), "html", null, true);
            yield "
                            ";
        }
        // line 114
        yield "                        </p>
                    </div>

                    ";
        // line 117
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "
                        
                        <div class=\"compact-drop-zone\">
                            <i class=\"bi bi-plus-lg text-muted\"></i>
                            <div class=\"mt-2\">
                                ";
        // line 123
        yield "                                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "imageFile", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control form-control-sm"]]);
        yield "
                            </div>
                            ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "imageFile", [], "any", false, false, false, 125), 'errors');
        yield "
                        </div>

                        <div class=\"d-flex justify-content-between align-items-center\">
                            ";
        // line 129
        $context["back_route"] = (("app_" . (isset($context["entityType"]) || array_key_exists("entityType", $context) ? $context["entityType"] : (function () { throw new RuntimeError('Variable "entityType" does not exist.', 129, $this->source); })())) . "_show");
        // line 130
        yield "                            <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["back_route"]) || array_key_exists("back_route", $context) ? $context["back_route"] : (function () { throw new RuntimeError('Variable "back_route" does not exist.', 130, $this->source); })()), ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["parentEntity"]) || array_key_exists("parentEntity", $context) ? $context["parentEntity"] : (function () { throw new RuntimeError('Variable "parentEntity" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130)]), "html", null, true);
        yield "\" class=\"btn-cancel\">
                                <i class=\"bi bi-chevron-left\"></i> Cancel
                            </a>
                            
                            <button type=\"submit\" class=\"btn-latte\">
                                <i class=\"bi bi-upload me-1\"></i> Upload
                            </button>
                        </div>
                        
                    ";
        // line 139
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), 'form_end');
        yield "
                </div>
                
                <p class=\"text-center mt-3 small text-muted\" style=\"font-size: 0.75rem;\">
                    Max size: 2MB • Format: JPG, PNG, WebP
                </p>
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
        return "image/upload.html.twig";
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
        return array (  321 => 139,  308 => 130,  306 => 129,  299 => 125,  293 => 123,  285 => 117,  280 => 114,  272 => 112,  266 => 110,  264 => 109,  259 => 108,  257 => 107,  252 => 106,  250 => 105,  240 => 97,  230 => 93,  227 => 92,  222 => 91,  212 => 87,  209 => 86,  204 => 85,  200 => 82,  187 => 81,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Upload{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --soft-cream: #fdfaf5;
            --border-beige: #e3d5ca;
            --text-muted-brown: #7f6d5e;
            --accent-latte: #bca38f;
        }

        /* Smaller, more compact card */
        .upload-container {
            max-width: 500px; /* Reduced width */
            margin: 40px auto;
        }

        .mini-upload-card {
            border: 1px solid var(--border-beige);
            border-radius: 12px;
            background-color: white;
            padding: 25px;
        }

        .mini-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .mini-header h4 {
            font-size: 1.2rem;
            color: var(--text-muted-brown);
            font-weight: 600;
            margin-bottom: 5px;
        }

        /* Subtle file input area */
        .compact-drop-zone {
            background-color: var(--soft-cream);
            border: 1px dashed var(--border-beige);
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            margin-bottom: 20px;
        }

        /* Small Latte Button */
        .btn-latte {
            background-color: var(--accent-latte);
            color: white;
            border: none;
            padding: 8px 18px;
            font-size: 0.9rem;
            border-radius: 6px;
            transition: 0.2s;
        }

        .btn-latte:hover {
            background-color: var(--text-muted-brown);
            color: white;
        }

        .btn-cancel {
            font-size: 0.85rem;
            color: #999;
            text-decoration: none;
        }
        
        .btn-cancel:hover { color: #666; }

        /* Hide default Symfony labels for a cleaner look */
        .compact-drop-zone label {
            display: none;
        }
    </style>
{% endblock %}

{% block body %}
    <main class=\"main\">
        <div class=\"container\">
            {# --- FLASH MESSAGES --- #}
            {% for message in app.flashes('error') %}
                <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            {% endfor %}
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
                    {{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                </div>
            {% endfor %}

            <div class=\"upload-container\">
                <div class=\"mini-upload-card shadow-sm\">
                    
                    <div class=\"mini-header\">
                        <i class=\"bi bi-image text-beige fs-3\"></i>
                        <h4>Add Photo</h4>
                        <p class=\"small text-muted mb-0\">
                            {% if entityType == 'property' %}
                                Property: {{ parentEntity.number }}
                            {% elseif entityType == 'service' %}
                                Service: {{ parentEntity.nom }}
                            {% elseif entityType == 'event' %}
                                Event: {{ parentEntity.name }}
                            {% else %}
                                {{ entityType|capitalize }}: {{ parentEntity.id }}
                            {% endif %}
                        </p>
                    </div>

                    {{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}
                        
                        <div class=\"compact-drop-zone\">
                            <i class=\"bi bi-plus-lg text-muted\"></i>
                            <div class=\"mt-2\">
                                {# Render only the widget for a cleaner UI #}
                                {{ form_widget(form.imageFile, {'attr': {'class': 'form-control form-control-sm'}}) }}
                            </div>
                            {{ form_errors(form.imageFile) }}
                        </div>

                        <div class=\"d-flex justify-content-between align-items-center\">
                            {% set back_route = 'app_' ~ entityType ~ '_show' %}
                            <a href=\"{{ path(back_route, {'id': parentEntity.id}) }}\" class=\"btn-cancel\">
                                <i class=\"bi bi-chevron-left\"></i> Cancel
                            </a>
                            
                            <button type=\"submit\" class=\"btn-latte\">
                                <i class=\"bi bi-upload me-1\"></i> Upload
                            </button>
                        </div>
                        
                    {{ form_end(form) }}
                </div>
                
                <p class=\"text-center mt-3 small text-muted\" style=\"font-size: 0.75rem;\">
                    Max size: 2MB • Format: JPG, PNG, WebP
                </p>
            </div>
        </div>
    </main>
{% endblock %}
", "image/upload.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\image\\upload.html.twig");
    }
}
