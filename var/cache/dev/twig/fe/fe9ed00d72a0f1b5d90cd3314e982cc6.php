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

/* staff/index.html.twig */
class __TwigTemplate_19fe7246d1212d8bc34953bf103c2fbc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "staff/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "staff/index.html.twig"));

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

        yield "Notre Équipe - UrbanStay";
        
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
    /* Couleurs personnalisées pour assortir au template UrbanStay */
    .text-grandoria { color: #5c3d2e !important; } /* Marron foncé */
    .bg-grandoria { background-color: #5c3d2e !important; color: white !important; }
    .btn-grandoria { background-color: #b68d40 !important; color: white !important; border: none; } /* Doré/Beige foncé */
    .btn-grandoria:hover { background-color: #a07a35 !important; color: white; }
    .badge-poste { background-color: #f4f1de !important; color: #5c3d2e !important; border: 1px solid #e0d9b5; }
</style>

<div class=\"container mt-5\">
    ";
        // line 17
        yield "    <div class=\"d-flex justify-content-between align-items-center mb-5\">
        <h1 class=\"fw-bold text-grandoria\"><i class=\"bi bi-people-fill\"></i> Notre Équipe</h1>
        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_new");
        yield "\" class=\"btn btn-grandoria shadow-sm\">
            <i class=\"bi bi-plus-circle\"></i> Ajouter un membre
        </a>
    </div>

    <div class=\"row gy-4\">
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["staff"]) || array_key_exists("staff", $context) ? $context["staff"] : (function () { throw new RuntimeError('Variable "staff" does not exist.', 25, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 26
            yield "            <div class=\"col-md-4 col-sm-6\">
                <div class=\"card h-100 border-0 shadow-sm text-center p-3\" style=\"background-color: #faf9f6;\">
                    ";
            // line 29
            yield "                    <div class=\"card-img-top mt-3\">
                        <i class=\"bi bi-person-badge text-grandoria\" style=\"font-size: 4rem;\"></i>
                    </div>

                    <div class=\"card-body\">
                        <h5 class=\"card-title fw-bold text-grandoria\">";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "nom", [], "any", false, false, false, 34), "html", null, true);
            yield "</h5>
                        ";
            // line 36
            yield "                        <p class=\"badge badge-poste mb-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "poste", [], "any", false, false, false, 36), "html", null, true);
            yield "</p>
                        
                        <hr class=\"w-25 mx-auto\" style=\"color: #b68d40;\">

                        <p class=\"card-text mt-3\">
                            <i class=\"bi bi-telephone-fill text-grandoria me-2\"></i>
                            <strong class=\"text-grandoria\">Contact :</strong> ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["s"], "numtel", [], "any", false, false, false, 42), "html", null, true);
            yield "
                        </p>

                        ";
            // line 46
            yield "                        <div class=\"d-flex justify-content-center gap-2 mt-4\">
                            <a href=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary btn-sm\">
                                <i class=\"bi bi-eye\"></i> Voir
                            </a>
                            <a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\" class=\"btn btn-grandoria btn-sm\">
                                <i class=\"bi bi-pencil-square\"></i> Modifier
                            </a>

                            ";
            // line 55
            yield "                            <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_staff_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Supprimer ce membre ?');\" style=\"display:inline-block;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["s"], "id", [], "any", false, false, false, 56))), "html", null, true);
            yield "\">
                                <button class=\"btn btn-outline-danger btn-sm\">
                                    <i class=\"bi bi-trash\"></i> Supprimer
                                </button>
                            </form>
                            ";
            // line 62
            yield "
                        </div>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        // line 67
        if (!$context['_iterated']) {
            // line 68
            yield "            <div class=\"col-12 text-center py-5\">
                <div class=\"alert alert-light border shadow-sm\">
                    <i class=\"bi bi-exclamation-circle fs-1 text-muted\"></i>
                    <p class=\"mt-3 fs-5 text-grandoria\">Aucun membre du personnel enregistré.</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['s'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        yield "    </div>
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
        return "staff/index.html.twig";
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
        return array (  213 => 75,  201 => 68,  199 => 67,  190 => 62,  182 => 56,  177 => 55,  170 => 50,  164 => 47,  161 => 46,  155 => 42,  145 => 36,  141 => 34,  134 => 29,  130 => 26,  125 => 25,  116 => 19,  112 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Notre Équipe - UrbanStay{% endblock %}

{% block body %}
<style>
    /* Couleurs personnalisées pour assortir au template UrbanStay */
    .text-grandoria { color: #5c3d2e !important; } /* Marron foncé */
    .bg-grandoria { background-color: #5c3d2e !important; color: white !important; }
    .btn-grandoria { background-color: #b68d40 !important; color: white !important; border: none; } /* Doré/Beige foncé */
    .btn-grandoria:hover { background-color: #a07a35 !important; color: white; }
    .badge-poste { background-color: #f4f1de !important; color: #5c3d2e !important; border: 1px solid #e0d9b5; }
</style>

<div class=\"container mt-5\">
    {# En-tête avec bouton d'ajout assorti #}
    <div class=\"d-flex justify-content-between align-items-center mb-5\">
        <h1 class=\"fw-bold text-grandoria\"><i class=\"bi bi-people-fill\"></i> Notre Équipe</h1>
        <a href=\"{{ path('app_staff_new') }}\" class=\"btn btn-grandoria shadow-sm\">
            <i class=\"bi bi-plus-circle\"></i> Ajouter un membre
        </a>
    </div>

    <div class=\"row gy-4\">
        {% for s in staff %}
            <div class=\"col-md-4 col-sm-6\">
                <div class=\"card h-100 border-0 shadow-sm text-center p-3\" style=\"background-color: #faf9f6;\">
                    {# Icône de profil en marron #}
                    <div class=\"card-img-top mt-3\">
                        <i class=\"bi bi-person-badge text-grandoria\" style=\"font-size: 4rem;\"></i>
                    </div>

                    <div class=\"card-body\">
                        <h5 class=\"card-title fw-bold text-grandoria\">{{ s.nom }}</h5>
                        {# Badge beige clair #}
                        <p class=\"badge badge-poste mb-3\">{{ s.poste }}</p>
                        
                        <hr class=\"w-25 mx-auto\" style=\"color: #b68d40;\">

                        <p class=\"card-text mt-3\">
                            <i class=\"bi bi-telephone-fill text-grandoria me-2\"></i>
                            <strong class=\"text-grandoria\">Contact :</strong> {{ s.numtel }}
                        </p>

                        {# Boutons d'action assortis #}
                        <div class=\"d-flex justify-content-center gap-2 mt-4\">
                            <a href=\"{{ path('app_staff_show', {'id': s.id}) }}\" class=\"btn btn-outline-secondary btn-sm\">
                                <i class=\"bi bi-eye\"></i> Voir
                            </a>
                            <a href=\"{{ path('app_staff_edit', {'id': s.id}) }}\" class=\"btn btn-grandoria btn-sm\">
                                <i class=\"bi bi-pencil-square\"></i> Modifier
                            </a>

                            {# --- NEW DELETE BUTTON ADDED HERE --- #}
                            <form method=\"post\" action=\"{{ path('app_staff_delete', {'id': s.id}) }}\" onsubmit=\"return confirm('Supprimer ce membre ?');\" style=\"display:inline-block;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ s.id) }}\">
                                <button class=\"btn btn-outline-danger btn-sm\">
                                    <i class=\"bi bi-trash\"></i> Supprimer
                                </button>
                            </form>
                            {# ------------------------------------ #}

                        </div>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12 text-center py-5\">
                <div class=\"alert alert-light border shadow-sm\">
                    <i class=\"bi bi-exclamation-circle fs-1 text-muted\"></i>
                    <p class=\"mt-3 fs-5 text-grandoria\">Aucun membre du personnel enregistré.</p>
                </div>
            </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "staff/index.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\staff\\index.html.twig");
    }
}
