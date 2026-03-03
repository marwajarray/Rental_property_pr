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

/* staff/edit.html.twig */
class __TwigTemplate_e5c4f0ed084ca6c68613f7eac1b026fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "staff/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "staff/edit.html.twig"));

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

        yield "Modifier Personnel - UrbanStay";
        
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
        yield "<style>
    .page-header-staff {
        background-color: #5c3d2e; /* Marron UrbanStay */
        color: white;
        padding: 40px 0 60px 0; /* Padding ajusté */
    }
    .page-header-staff h1 {
        font-weight: bold;
        padding-left: 2rem;
        margin-bottom: 0;
    }
    .form-container-overlap {
        max-width: 900px;
        /* On réduit la marge négative ici pour ne pas masquer le marron */
        margin: -30px auto 50px auto; 
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        position: relative;
        z-index: 10;
    }
</style>

<div class=\"page-header-staff\">
    <div class=\"container\">
        <h1>Edit Staff</h1>
    </div>
</div>

<div class=\"container\">
    <div class=\"form-container-overlap\">
        ";
        // line 39
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "staff/_form.html.twig", ["button_label" => "Update"]);
        yield "
    </div>

    <div class=\"d-flex justify-content-center gap-4 mt-4 mb-5\">
        <a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_index");
        yield "\" class=\"text-muted text-decoration-none pt-2\">
            <i class=\"bi bi-arrow-left\"></i> Back to list
        </a>
        ";
        // line 46
        yield Twig\Extension\CoreExtension::include($this->env, $context, "staff/_delete_form.html.twig");
        yield "
    </div>
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
        return "staff/edit.html.twig";
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
        return array (  148 => 46,  142 => 43,  134 => 39,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Personnel - UrbanStay{% endblock %}

{% block body %}
<style>
    .page-header-staff {
        background-color: #5c3d2e; /* Marron UrbanStay */
        color: white;
        padding: 40px 0 60px 0; /* Padding ajusté */
    }
    .page-header-staff h1 {
        font-weight: bold;
        padding-left: 2rem;
        margin-bottom: 0;
    }
    .form-container-overlap {
        max-width: 900px;
        /* On réduit la marge négative ici pour ne pas masquer le marron */
        margin: -30px auto 50px auto; 
        background: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        position: relative;
        z-index: 10;
    }
</style>

<div class=\"page-header-staff\">
    <div class=\"container\">
        <h1>Edit Staff</h1>
    </div>
</div>

<div class=\"container\">
    <div class=\"form-container-overlap\">
        {# On appelle le formulaire ici #}
        {{ include('staff/_form.html.twig', {'button_label': 'Update'}) }}
    </div>

    <div class=\"d-flex justify-content-center gap-4 mt-4 mb-5\">
        <a href=\"{{ path('app_staff_index') }}\" class=\"text-muted text-decoration-none pt-2\">
            <i class=\"bi bi-arrow-left\"></i> Back to list
        </a>
        {{ include('staff/_delete_form.html.twig') }}
    </div>
</div>
{% endblock %}
", "staff/edit.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\staff\\edit.html.twig");
    }
}
