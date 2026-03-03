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

/* service/_form.html.twig */
class __TwigTemplate_aaae12b12a2268eb40816bfb6d3f9b3d extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/_form.html.twig"));

        // line 1
        yield "
";
        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        yield "
    <div class=\"row gy-4\">
        
        ";
        // line 6
        yield "        <div class=\"col-md-4\">
            <label for=\"service_nom\" class=\"form-label\">Service Name</label>
            ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "nom", [], "any", false, false, false, 8), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., Luxury Spa"]]);
        yield "
            ";
        // line 9
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "nom", [], "any", false, false, false, 9), 'errors');
        yield "
        </div>

        <div class=\"col-md-4\">
            <label for=\"service_category\" class=\"form-label\">Category</label>
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "category", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "category", [], "any", false, false, false, 15), 'errors');
        yield "
        </div>

        <div class=\"col-md-4\">
            <label for=\"service_price\" class=\"form-label\">Price</label>
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "price", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "0.00"]]);
        yield "
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "price", [], "any", false, false, false, 21), 'errors');
        yield "
        </div>

        ";
        // line 25
        yield "        <div class=\"col-md-3\">
            <label class=\"form-label\">Location</label>
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "location", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>

        <div class=\"col-md-3\">
            <label class=\"form-label\">Available Day</label>
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "day_of_week", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>

        <div class=\"col-md-3\">
            <label class=\"form-label\">Start Time</label>
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "start_time", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>

        <div class=\"col-md-3\">
            <label class=\"form-label\">End Time</label>
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "end_time", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        </div>

        ";
        // line 46
        yield "        <div class=\"col-md-12\">
            <label for=\"service_description\" class=\"form-label\">Description</label>
            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "description", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "form-control", "rows" => 4, "placeholder" => "Describe the service details..."]]);
        yield "
            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "description", [], "any", false, false, false, 49), 'errors');
        yield "
        </div>


        ";
        // line 54
        yield "        <div class=\"col-md-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-save\"></i> ";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 56, $this->source); })()), "Save Service")) : ("Save Service")), "html", null, true);
        yield "
            </button>
        </div>

    </div>
";
        // line 61
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "service/_form.html.twig";
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
        return array (  156 => 61,  148 => 56,  144 => 54,  137 => 49,  133 => 48,  129 => 46,  123 => 42,  115 => 37,  107 => 32,  99 => 27,  95 => 25,  89 => 21,  85 => 20,  77 => 15,  73 => 14,  65 => 9,  61 => 8,  57 => 6,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{{ form_start(form) }}
    <div class=\"row gy-4\">
        
        {# Row 1: Name, Category, Price #}
        <div class=\"col-md-4\">
            <label for=\"service_nom\" class=\"form-label\">Service Name</label>
            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'e.g., Luxury Spa'}}) }}
            {{ form_errors(form.nom) }}
        </div>

        <div class=\"col-md-4\">
            <label for=\"service_category\" class=\"form-label\">Category</label>
            {{ form_widget(form.category, {'attr': {'class': 'form-control'}}) }}
            {{ form_errors(form.category) }}
        </div>

        <div class=\"col-md-4\">
            <label for=\"service_price\" class=\"form-label\">Price</label>
            {{ form_widget(form.price, {'attr': {'class': 'form-control', 'placeholder': '0.00'}}) }}
            {{ form_errors(form.price) }}
        </div>

        {# Row 2: Location and Service Timing #}
        <div class=\"col-md-3\">
            <label class=\"form-label\">Location</label>
            {{ form_widget(form.location, {'attr': {'class': 'form-control'}}) }}
        </div>

        <div class=\"col-md-3\">
            <label class=\"form-label\">Available Day</label>
            {{ form_widget(form.day_of_week, {'attr': {'class': 'form-control'}}) }}
        </div>

        <div class=\"col-md-3\">
            <label class=\"form-label\">Start Time</label>
            {{ form_widget(form.start_time, {'attr': {'class': 'form-control'}}) }}
        </div>

        <div class=\"col-md-3\">
            <label class=\"form-label\">End Time</label>
            {{ form_widget(form.end_time, {'attr': {'class': 'form-control'}}) }}
        </div>

        {# Row 3: Description #}
        <div class=\"col-md-12\">
            <label for=\"service_description\" class=\"form-label\">Description</label>
            {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': 4, 'placeholder': 'Describe the service details...'}}) }}
            {{ form_errors(form.description) }}
        </div>


        {# Submit Button #}
        <div class=\"col-md-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary\">
                <i class=\"fas fa-save\"></i> {{ button_label|default('Save Service') }}
            </button>
        </div>

    </div>
{{ form_end(form) }}", "service/_form.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\service\\_form.html.twig");
    }
}
