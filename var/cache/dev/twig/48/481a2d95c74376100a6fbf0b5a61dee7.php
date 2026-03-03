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

/* property/_form.html.twig */
class __TwigTemplate_f5442c1f3874a5d996193b0aeae3609a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "
    <div class=\"row gy-4\">
        
        ";
        // line 5
        yield "        <div class=\"col-md-4\">
            <label for=\"room_number\" class=\"form-label\">Property Number</label>
            ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "number", [], "any", false, false, false, 7), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., 101"]]);
        yield "
            ";
        // line 8
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "number", [], "any", false, false, false, 8), 'errors');
        yield "
        </div>

        <div class=\"col-md-4\">
            <label for=\"room_type\" class=\"form-label\">Property Type</label>
            ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "type", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., Deluxe, Suite"]]);
        yield "
            ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "type", [], "any", false, false, false, 14), 'errors');
        yield "
        </div>

        <div class=\"col-md-4\">
            <label for=\"room_price\" class=\"form-label\">Price per Night</label>
            ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "price", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., 199.99"]]);
        yield "
            ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "price", [], "any", false, false, false, 20), 'errors');
        yield "
        </div>

        ";
        // line 24
        yield "        <div class=\"col-md-4\">
            <label for=\"room_capacity\" class=\"form-label\">Capacity</label>
            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "capacity", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., 2"]]);
        yield "
            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "capacity", [], "any", false, false, false, 27), 'errors');
        yield "
        </div>

        <div class=\"col-md-4\">
            <label for=\"room_size\" class=\"form-label\">Size (e.g., sqm)</label>
            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "size", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "e.g., 35 sqm"]]);
        yield "
            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "size", [], "any", false, false, false, 33), 'errors');
        yield "
        </div>

        <div class=\"col-md-4\">
            <label for=\"room_status\" class=\"form-label\">Status</label>
            ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "status", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "status", [], "any", false, false, false, 39), 'errors');
        yield "
        </div>

        ";
        // line 43
        yield "        <div class=\"col-md-12\">
            <label for=\"room_shortdescription\" class=\"form-label\">Short Description</label>
            ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "shortdescription", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "A brief summary for the property list page"]]);
        yield "
            ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "shortdescription", [], "any", false, false, false, 46), 'errors');
        yield "
        </div>

        ";
        // line 50
        yield "        <div class=\"col-md-12\">
            <label for=\"room_longdescription\" class=\"form-label\">Long Description</label>
            ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "longdescription", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control", "rows" => 6, "placeholder" => "Detailed description for the property details page"]]);
        yield "
            ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "longdescription", [], "any", false, false, false, 53), 'errors');
        yield "
        </div>

        ";
        // line 57
        yield "        <div class=\"col-md-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 58, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
        </div>

    </div>
";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "property/_form.html.twig";
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
        return array (  168 => 62,  161 => 58,  158 => 57,  152 => 53,  148 => 52,  144 => 50,  138 => 46,  134 => 45,  130 => 43,  124 => 39,  120 => 38,  112 => 33,  108 => 32,  100 => 27,  96 => 26,  92 => 24,  86 => 20,  82 => 19,  74 => 14,  70 => 13,  62 => 8,  58 => 7,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form) }}
    <div class=\"row gy-4\">
        
        {# Row 1: Number, Type, Price #}
        <div class=\"col-md-4\">
            <label for=\"room_number\" class=\"form-label\">Property Number</label>
            {{ form_widget(form.number, {'attr': {'class': 'form-control', 'placeholder': 'e.g., 101'}}) }}
            {{ form_errors(form.number) }}
        </div>

        <div class=\"col-md-4\">
            <label for=\"room_type\" class=\"form-label\">Property Type</label>
            {{ form_widget(form.type, {'attr': {'class': 'form-control', 'placeholder': 'e.g., Deluxe, Suite'}}) }}
            {{ form_errors(form.type) }}
        </div>

        <div class=\"col-md-4\">
            <label for=\"room_price\" class=\"form-label\">Price per Night</label>
            {{ form_widget(form.price, {'attr': {'class': 'form-control', 'placeholder': 'e.g., 199.99'}}) }}
            {{ form_errors(form.price) }}
        </div>

        {# Row 2: Capacity, Size, Status #}
        <div class=\"col-md-4\">
            <label for=\"room_capacity\" class=\"form-label\">Capacity</label>
            {{ form_widget(form.capacity, {'attr': {'class': 'form-control', 'placeholder': 'e.g., 2'}}) }}
            {{ form_errors(form.capacity) }}
        </div>

        <div class=\"col-md-4\">
            <label for=\"room_size\" class=\"form-label\">Size (e.g., sqm)</label>
            {{ form_widget(form.size, {'attr': {'class': 'form-control', 'placeholder': 'e.g., 35 sqm'}}) }}
            {{ form_errors(form.size) }}
        </div>

        <div class=\"col-md-4\">
            <label for=\"room_status\" class=\"form-label\">Status</label>
            {{ form_widget(form.status, {'attr': {'class': 'form-control'}}) }}
            {{ form_errors(form.status) }}
        </div>

        {# Row 3: Short Description #}
        <div class=\"col-md-12\">
            <label for=\"room_shortdescription\" class=\"form-label\">Short Description</label>
            {{ form_widget(form.shortdescription, {'attr': {'class': 'form-control', 'placeholder': 'A brief summary for the property list page'}}) }}
            {{ form_errors(form.shortdescription) }}
        </div>

        {# Row 4: Long Description #}
        <div class=\"col-md-12\">
            <label for=\"room_longdescription\" class=\"form-label\">Long Description</label>
            {{ form_widget(form.longdescription, {'attr': {'class': 'form-control', 'rows': 6, 'placeholder': 'Detailed description for the property details page'}}) }}
            {{ form_errors(form.longdescription) }}
        </div>

        {# Submit Button #}
        <div class=\"col-md-12 text-center\">
            <button type=\"submit\" class=\"btn btn-primary\">{{ button_label|default('Save') }}</button>
        </div>

    </div>
{{ form_end(form) }}
", "property/_form.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\property\\_form.html.twig");
    }
}
