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

/* event/_form.html.twig */
class __TwigTemplate_35d3e82942e019396f4ae9f16a292f6f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
    <div class=\"row gy-4\">
        
        ";
        // line 5
        yield "        <div class=\"col-md-6\">
            <label for=\"event_name\" class=\"form-label\">Event Name</label>
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., Summer Gala"]]);
        yield "
            ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), 'errors');
        yield "
        </div>

        <div class=\"col-md-6\">
            <label for=\"event_price\" class=\"form-label\">Price</label>
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "price", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., 49.99"]]);
        yield "
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "price", [], "any", false, false, false, 14), 'errors');
        yield "
        </div>

        ";
        // line 18
        yield "        <div class=\"col-md-6\">
            <label for=\"event_date\" class=\"form-label\">Event Date</label>
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "date", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "date", [], "any", false, false, false, 21), 'errors');
        yield "
        </div>

        <div class=\"col-md-6\">
            <label for=\"event_location\" class=\"form-label\">Location</label>
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "location", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., Grand Ballroom"]]);
        yield "
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "location", [], "any", false, false, false, 27), 'errors');
        yield "
        </div>

        ";
        // line 31
        yield "        <div class=\"col-md-12\">
            <label for=\"event_description\" class=\"form-label\">Description</label>
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "description", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control", "rows" => 6, "placeholder" => "Tell us more about the event..."]]);
        yield "
            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'errors');
        yield "
        </div>

        ";
        // line 38
        yield "        <div class=\"col-md-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 39, $this->source); })()), "Save Event")) : ("Save Event")), "html", null, true);
        yield "</button>
        </div>

    </div>
";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "event/_form.html.twig";
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
        return array (  130 => 43,  123 => 39,  120 => 38,  114 => 34,  110 => 33,  106 => 31,  100 => 27,  96 => 26,  88 => 21,  84 => 20,  80 => 18,  74 => 14,  70 => 13,  62 => 8,  58 => 7,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form) }}
    <div class=\"row gy-4\">
        
        {# Row 1: Event Name and Price #}
        <div class=\"col-md-6\">
            <label for=\"event_name\" class=\"form-label\">Event Name</label>
            {{ form_widget(form.name, {'attr': {'class': 'form-control', 'placeholder': 'e.g., Summer Gala'}}) }}
            {{ form_errors(form.name) }}
        </div>

        <div class=\"col-md-6\">
            <label for=\"event_price\" class=\"form-label\">Price</label>
            {{ form_widget(form.price, {'attr': {'class': 'form-control', 'placeholder': 'e.g., 49.99'}}) }}
            {{ form_errors(form.price) }}
        </div>

        {# Row 2: Date and Location #}
        <div class=\"col-md-6\">
            <label for=\"event_date\" class=\"form-label\">Event Date</label>
            {{ form_widget(form.date, {'attr': {'class': 'form-control'}}) }}
            {{ form_errors(form.date) }}
        </div>

        <div class=\"col-md-6\">
            <label for=\"event_location\" class=\"form-label\">Location</label>
            {{ form_widget(form.location, {'attr': {'class': 'form-control', 'placeholder': 'e.g., Grand Ballroom'}}) }}
            {{ form_errors(form.location) }}
        </div>

        {# Row 3: Description (Full Width) #}
        <div class=\"col-md-12\">
            <label for=\"event_description\" class=\"form-label\">Description</label>
            {{ form_widget(form.description, {'attr': {'class': 'form-control', 'rows': 6, 'placeholder': 'Tell us more about the event...'}}) }}
            {{ form_errors(form.description) }}
        </div>

        {# Submit Button #}
        <div class=\"col-md-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Save Event') }}</button>
        </div>

    </div>
{{ form_end(form) }}", "event/_form.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\event\\_form.html.twig");
    }
}
