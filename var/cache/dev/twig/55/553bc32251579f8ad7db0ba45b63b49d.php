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

/* event/index.html.twig */
class __TwigTemplate_a4f0511d3d876d28a2f1ee21c8e0ee87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

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

        yield "Liste des Événements";
        
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
        yield "<div class=\"container py-5\">
    <div class=\"row g-4\">
        ";
        // line 9
        yield "        ";
        if ((array_key_exists("events", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 9, $this->source); })())) > 0))) {
            // line 10
            yield "            
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 12
                yield "                <div class=\"col-lg-6\">
                    <div class=\"amenity-card shadow-sm h-100 border-0 bg-white\">
                        
                        ";
                // line 16
                yield "                        <div class=\"amenity-image\">
                            ";
                // line 17
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "images", [], "any", true, true, false, 17) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "images", [], "any", false, false, false, 17)) > 0))) {
                    // line 18
                    yield "                                ";
                    // line 19
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "images", [], "any", false, false, false, 19)), "filename", [], "any", false, false, false, 19))), "html", null, true);
                    yield "\" 
                                     alt=\"";
                    // line 20
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "name", [], "any", true, true, false, 20)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 20), "Événement")) : ("Événement")), "html", null, true);
                    yield "\" 
                                     class=\"img-fluid w-100\" 
                                     style=\"height: 280px; object-fit: cover;\">
                            ";
                } else {
                    // line 24
                    yield "                                ";
                    // line 25
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apartment rental/default-event.webp"), "html", null, true);
                    yield "\" 
                                     alt=\"Image par défaut\" 
                                     class=\"img-fluid w-100\" 
                                     style=\"height: 280px; object-fit: cover;\">
                            ";
                }
                // line 30
                yield "                        </div>

                        ";
                // line 33
                yield "                        <div class=\"p-4\">
                            <h3 class=\"h5 mb-2\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "name", [], "any", false, false, false, 34), "html", null, true);
                yield "</h3>
                            
                            ";
                // line 37
                yield "                            ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", true, true, false, 37)) {
                    // line 38
                    yield "                                <p class=\"text-muted small\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 38), 0, 100) . "..."), "html", null, true);
                    yield "</p>
                            ";
                }
                // line 40
                yield "
                            <div class=\"mt-3\">
                                <a href=\"";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 42)]), "html", null, true);
                yield "\" class=\"btn btn-primary btn-sm\">
                                    Voir les détails
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "
        ";
        } else {
            // line 53
            yield "            ";
            // line 54
            yield "            <div class=\"col-12 text-center py-5\">
                <div class=\"alert alert-light shadow-sm\">
                    <p class=\"mb-0\">Aucun événement n'est disponible pour le moment.</p>
                </div>
            </div>
        ";
        }
        // line 60
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
        return "event/index.html.twig";
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
        return array (  203 => 60,  195 => 54,  193 => 53,  189 => 51,  174 => 42,  170 => 40,  164 => 38,  161 => 37,  156 => 34,  153 => 33,  149 => 30,  140 => 25,  138 => 24,  131 => 20,  126 => 19,  124 => 18,  122 => 17,  119 => 16,  114 => 12,  110 => 11,  107 => 10,  104 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Événements{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row g-4\">
        {# On vérifie si la variable 'events' existe et contient des éléments #}
        {% if events is defined and events|length > 0 %}
            
            {% for event in events %}
                <div class=\"col-lg-6\">
                    <div class=\"amenity-card shadow-sm h-100 border-0 bg-white\">
                        
                        {# Section Image #}
                        <div class=\"amenity-image\">
                            {% if event.images is defined and event.images|length > 0 %}
                                {# On récupère le premier élément de la collection d'images #}
                                <img src=\"{{ asset('uploads/images/' ~ event.images|first.filename) }}\" 
                                     alt=\"{{ event.name|default('Événement') }}\" 
                                     class=\"img-fluid w-100\" 
                                     style=\"height: 280px; object-fit: cover;\">
                            {% else %}
                                {# Image par défaut si aucune image n'est liée #}
                                <img src=\"{{ asset('assets/img/apartment rental/default-event.webp') }}\" 
                                     alt=\"Image par défaut\" 
                                     class=\"img-fluid w-100\" 
                                     style=\"height: 280px; object-fit: cover;\">
                            {% endif %}
                        </div>

                        {# Section Contenu #}
                        <div class=\"p-4\">
                            <h3 class=\"h5 mb-2\">{{ event.name }}</h3>
                            
                            {# Exemple d'ajout de description ou date si disponible #}
                            {% if event.description is defined %}
                                <p class=\"text-muted small\">{{ event.description|slice(0, 100) ~ '...' }}</p>
                            {% endif %}

                            <div class=\"mt-3\">
                                <a href=\"{{ path('app_event_show', {'id': event.id}) }}\" class=\"btn btn-primary btn-sm\">
                                    Voir les détails
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            {% endfor %}

        {% else %}
            {# Cas où la liste est vide #}
            <div class=\"col-12 text-center py-5\">
                <div class=\"alert alert-light shadow-sm\">
                    <p class=\"mb-0\">Aucun événement n'est disponible pour le moment.</p>
                </div>
            </div>
        {% endif %}
    </div>
</div>
{% endblock %}
", "event/index.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\event\\index.html.twig");
    }
}
