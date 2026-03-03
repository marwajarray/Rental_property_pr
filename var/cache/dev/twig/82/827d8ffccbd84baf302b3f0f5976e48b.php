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

/* staff/show.html.twig */
class __TwigTemplate_c4c0520b611f0f7898233e8562aa58b7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "staff/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "staff/show.html.twig"));

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

        yield "Profil Personnel - UrbanStay";
        
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
    /* Section marron identique à \"Create New Property\" */
    .page-header-staff {
        background-color: #5c3d2e; 
        color: white;
        padding: 40px 0 60px 0;
    }
    .page-header-staff h1 {
        font-weight: bold;
        padding-left: 2rem;
    }

    /* Carte de profil centrée et surélevée */
    .profile-card {
        max-width: 650px;
        /* Marge négative de -30px pour ne pas cacher le titre marron */
        margin: -30px auto 50px auto; 
        background: white;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        border: none;
        overflow: hidden;
    }

    .profile-banner {
        background-color: #f4f1de; /* Beige clair */
        height: 100px;
        border-bottom: 2px solid #b68d40;
    }

    .profile-avatar-wrapper {
        margin-top: -50px;
        text-align: center;
    }

    .profile-avatar-circle {
        width: 100px;
        height: 100px;
        background: white;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        color: #5c3d2e;
        border: 4px solid white;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .info-group {
        margin-bottom: 1.5rem;
    }

    .info-label {
        font-size: 0.85rem;
        text-transform: uppercase;
        color: #b68d40; /* Couleur dorée */
        font-weight: bold;
        letter-spacing: 1px;
    }

    .info-data {
        font-size: 1.2rem;
        color: #5c3d2e; /* Marron au lieu de noir */
        font-weight: 500;
    }

    .btn-grandoria {
        background-color: #b68d40;
        color: white !important;
        border: none;
        padding: 10px 30px;
        border-radius: 5px;
        font-weight: bold;
        transition: 0.3s;
        text-decoration: none;
    }

    .btn-grandoria:hover {
        background-color: #a07a35;
    }

    .text-grandoria {
        color: #5c3d2e !important;
    }
</style>

<div class=\"page-header-staff\">
    <div class=\"container\">
        <h1>Staff Profile</h1>
    </div>
</div>

<div class=\"container\">
    <div class=\"card profile-card\">
        <div class=\"profile-banner\"></div>
        <div class=\"profile-avatar-wrapper\">
            <div class=\"profile-avatar-circle\">
                <i class=\"bi bi-person-circle\"></i>
            </div>
        </div>

        <div class=\"card-body p-5 text-center\">
            <h2 class=\"fw-bold mb-1 text-grandoria\">";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["staff"]) || array_key_exists("staff", $context) ? $context["staff"] : (function () { throw new RuntimeError('Variable "staff" does not exist.', 109, $this->source); })()), "nom", [], "any", false, false, false, 109), "html", null, true);
        yield "</h2>
            
            ";
        // line 112
        yield "            <p class=\"badge px-3 py-2 mb-4\" style=\"background-color: #5c3d2e; color: #f4f1de; border: 1px solid #b68d40;\">
                <i class=\"bi bi-briefcase me-1\"></i> ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["staff"]) || array_key_exists("staff", $context) ? $context["staff"] : (function () { throw new RuntimeError('Variable "staff" does not exist.', 113, $this->source); })()), "poste", [], "any", false, false, false, 113), "html", null, true);
        yield "
            </p>

            <div class=\"row g-4 text-start mt-2\">
                <div class=\"col-md-6 border-end\">
                    <div class=\"info-group text-center text-md-start ps-md-4\">
                        <div class=\"info-label\">ID PERSONNEL</div>
                        <div class=\"info-data\">#";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["staff"]) || array_key_exists("staff", $context) ? $context["staff"] : (function () { throw new RuntimeError('Variable "staff" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120), "html", null, true);
        yield "</div>
                    </div>
                </div>
                <div class=\"col-md-6 ps-md-4\">
                    <div class=\"info-group text-center text-md-start\">
                        <div class=\"info-label\">CONTACT</div>
                        <div class=\"info-data\">
                            <i class=\"bi bi-telephone-fill text-grandoria me-2\"></i>";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["staff"]) || array_key_exists("staff", $context) ? $context["staff"] : (function () { throw new RuntimeError('Variable "staff" does not exist.', 127, $this->source); })()), "numtel", [], "any", false, false, false, 127), "html", null, true);
        yield "
                        </div>
                    </div>
                </div>
            </div>

            <hr class=\"my-4\" style=\"opacity: 0.1; color: #b68d40;\">

            <div class=\"d-flex justify-content-center gap-3\">
                <a href=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["staff"]) || array_key_exists("staff", $context) ? $context["staff"] : (function () { throw new RuntimeError('Variable "staff" does not exist.', 136, $this->source); })()), "id", [], "any", false, false, false, 136)]), "html", null, true);
        yield "\" class=\"btn btn-grandoria shadow-sm\">
                    <i class=\"bi bi-pencil-square me-2\"></i>Edit Profile
                </a>
            </div>
        </div>
    </div>

    ";
        // line 144
        yield "    <div class=\"d-flex justify-content-center align-items-center gap-4 mb-5\">
        <a href=\"";
        // line 145
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_index");
        yield "\" class=\"text-decoration-none text-muted\">
            <i class=\"bi bi-arrow-left me-1\"></i>Back to list
        </a>
        <div class=\"vr\" style=\"height: 20px; color: #b68d40;\"></div>
        ";
        // line 149
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
        return "staff/show.html.twig";
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
        return array (  265 => 149,  258 => 145,  255 => 144,  245 => 136,  233 => 127,  223 => 120,  213 => 113,  210 => 112,  205 => 109,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil Personnel - UrbanStay{% endblock %}

{% block body %}
<style>
    /* Section marron identique à \"Create New Property\" */
    .page-header-staff {
        background-color: #5c3d2e; 
        color: white;
        padding: 40px 0 60px 0;
    }
    .page-header-staff h1 {
        font-weight: bold;
        padding-left: 2rem;
    }

    /* Carte de profil centrée et surélevée */
    .profile-card {
        max-width: 650px;
        /* Marge négative de -30px pour ne pas cacher le titre marron */
        margin: -30px auto 50px auto; 
        background: white;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        border: none;
        overflow: hidden;
    }

    .profile-banner {
        background-color: #f4f1de; /* Beige clair */
        height: 100px;
        border-bottom: 2px solid #b68d40;
    }

    .profile-avatar-wrapper {
        margin-top: -50px;
        text-align: center;
    }

    .profile-avatar-circle {
        width: 100px;
        height: 100px;
        background: white;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        color: #5c3d2e;
        border: 4px solid white;
        box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .info-group {
        margin-bottom: 1.5rem;
    }

    .info-label {
        font-size: 0.85rem;
        text-transform: uppercase;
        color: #b68d40; /* Couleur dorée */
        font-weight: bold;
        letter-spacing: 1px;
    }

    .info-data {
        font-size: 1.2rem;
        color: #5c3d2e; /* Marron au lieu de noir */
        font-weight: 500;
    }

    .btn-grandoria {
        background-color: #b68d40;
        color: white !important;
        border: none;
        padding: 10px 30px;
        border-radius: 5px;
        font-weight: bold;
        transition: 0.3s;
        text-decoration: none;
    }

    .btn-grandoria:hover {
        background-color: #a07a35;
    }

    .text-grandoria {
        color: #5c3d2e !important;
    }
</style>

<div class=\"page-header-staff\">
    <div class=\"container\">
        <h1>Staff Profile</h1>
    </div>
</div>

<div class=\"container\">
    <div class=\"card profile-card\">
        <div class=\"profile-banner\"></div>
        <div class=\"profile-avatar-wrapper\">
            <div class=\"profile-avatar-circle\">
                <i class=\"bi bi-person-circle\"></i>
            </div>
        </div>

        <div class=\"card-body p-5 text-center\">
            <h2 class=\"fw-bold mb-1 text-grandoria\">{{ staff.nom }}</h2>
            
            {# Badge Poste : Marron avec bordure dorée (remplace le noir) #}
            <p class=\"badge px-3 py-2 mb-4\" style=\"background-color: #5c3d2e; color: #f4f1de; border: 1px solid #b68d40;\">
                <i class=\"bi bi-briefcase me-1\"></i> {{ staff.poste }}
            </p>

            <div class=\"row g-4 text-start mt-2\">
                <div class=\"col-md-6 border-end\">
                    <div class=\"info-group text-center text-md-start ps-md-4\">
                        <div class=\"info-label\">ID PERSONNEL</div>
                        <div class=\"info-data\">#{{ staff.id }}</div>
                    </div>
                </div>
                <div class=\"col-md-6 ps-md-4\">
                    <div class=\"info-group text-center text-md-start\">
                        <div class=\"info-label\">CONTACT</div>
                        <div class=\"info-data\">
                            <i class=\"bi bi-telephone-fill text-grandoria me-2\"></i>{{ staff.numtel }}
                        </div>
                    </div>
                </div>
            </div>

            <hr class=\"my-4\" style=\"opacity: 0.1; color: #b68d40;\">

            <div class=\"d-flex justify-content-center gap-3\">
                <a href=\"{{ path('app_staff_edit', {'id': staff.id}) }}\" class=\"btn btn-grandoria shadow-sm\">
                    <i class=\"bi bi-pencil-square me-2\"></i>Edit Profile
                </a>
            </div>
        </div>
    </div>

    {# Navigation de retour et suppression centrées #}
    <div class=\"d-flex justify-content-center align-items-center gap-4 mb-5\">
        <a href=\"{{ path('app_staff_index') }}\" class=\"text-decoration-none text-muted\">
            <i class=\"bi bi-arrow-left me-1\"></i>Back to list
        </a>
        <div class=\"vr\" style=\"height: 20px; color: #b68d40;\"></div>
        {{ include('staff/_delete_form.html.twig') }}
    </div>
</div>
{% endblock %}
", "staff/show.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\staff\\show.html.twig");
    }
}
