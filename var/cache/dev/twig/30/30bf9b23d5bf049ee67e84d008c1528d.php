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

/* staff/_form.html.twig */
class __TwigTemplate_4994d3c389c4ee7c8a31d1433c07be50 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "staff/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "staff/_form.html.twig"));

        // line 2
        yield "
<style>
    /* Couleurs personnalisées UrbanStay */
    .text-grandoria { color: #5c3d2e !important; }
    .btn-grandoria { background-color: #b68d40 !important; color: white !important; border: none; transition: 0.3s; }
    .btn-grandoria:hover { background-color: #a07a35 !important; }
    .form-control:focus { border-color: #b68d40; box-shadow: 0 0 0 0.25 margin-left: rgba(182, 141, 64, 0.25); }
    .input-group-text { background-color: #f4f1de; color: #5c3d2e; border-color: #dee2e6; }
</style>

";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        yield "
    <div class=\"row gy-4 p-4 shadow-sm border rounded bg-white\">
        
        <div class=\"col-12 text-center mb-2\">
            <div class=\"display-4 text-grandoria\">
                <i class=\"bi bi-person-bounding-box\"></i>
            </div>
            <h3 class=\"fw-bold text-grandoria\">Informations du Personnel</h3>
            <p class=\"text-muted\">Gérez les détails du membre de l'équipe UrbanStay.</p>
        </div>

        <hr style=\"color: #b68d40; opacity: 0.5;\">

        <div class=\"col-md-6\">
            <label class=\"form-label fw-semibold text-grandoria\">
                <i class=\"bi bi-person-fill me-1\"></i> Nom Complet
            </label>
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Sarah Johnson"]]);
        yield "
            <div class=\"text-danger small\">";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "nom", [], "any", false, false, false, 30), 'errors');
        yield "</div>
        </div>

        <div class=\"col-md-6\">
            <label class=\"form-label fw-semibold text-grandoria\">
                <i class=\"bi bi-briefcase-fill me-1\"></i> Poste / Fonction
            </label>
            ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "poste", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Ex: Manager"]]);
        yield "
            <div class=\"text-danger small\">";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "poste", [], "any", false, false, false, 38), 'errors');
        yield "</div>
        </div>

        <div class=\"col-12\">
            <label class=\"form-label fw-semibold text-grandoria\">
                <i class=\"bi bi-telephone-fill me-1\"></i> Numéro de Téléphone
            </label>
            <div class=\"input-group\">
                <span class=\"input-group-text\"><i class=\"bi bi-plus\"></i></span>
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "numtel", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "216 -- --- ---"]]);
        yield "
            </div>
            <div class=\"text-danger small\">";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "numtel", [], "any", false, false, false, 49), 'errors');
        yield "</div>
        </div>

        <div class=\"col-12 text-center mt-4\">
            <button type=\"submit\" class=\"btn btn-grandoria btn-lg px-5 shadow-sm\">
                <i class=\"bi bi-check2-circle me-2\"></i> ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 54, $this->source); })()), "Enregistrer le profil")) : ("Enregistrer le profil")), "html", null, true);
        yield "
            </button>
        </div>

    </div>
";
        // line 59
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
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
        return "staff/_form.html.twig";
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
        return array (  131 => 59,  123 => 54,  115 => 49,  110 => 47,  98 => 38,  94 => 37,  84 => 30,  80 => 29,  60 => 12,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/staff/_form.html.twig #}

<style>
    /* Couleurs personnalisées UrbanStay */
    .text-grandoria { color: #5c3d2e !important; }
    .btn-grandoria { background-color: #b68d40 !important; color: white !important; border: none; transition: 0.3s; }
    .btn-grandoria:hover { background-color: #a07a35 !important; }
    .form-control:focus { border-color: #b68d40; box-shadow: 0 0 0 0.25 margin-left: rgba(182, 141, 64, 0.25); }
    .input-group-text { background-color: #f4f1de; color: #5c3d2e; border-color: #dee2e6; }
</style>

{{ form_start(form) }}
    <div class=\"row gy-4 p-4 shadow-sm border rounded bg-white\">
        
        <div class=\"col-12 text-center mb-2\">
            <div class=\"display-4 text-grandoria\">
                <i class=\"bi bi-person-bounding-box\"></i>
            </div>
            <h3 class=\"fw-bold text-grandoria\">Informations du Personnel</h3>
            <p class=\"text-muted\">Gérez les détails du membre de l'équipe UrbanStay.</p>
        </div>

        <hr style=\"color: #b68d40; opacity: 0.5;\">

        <div class=\"col-md-6\">
            <label class=\"form-label fw-semibold text-grandoria\">
                <i class=\"bi bi-person-fill me-1\"></i> Nom Complet
            </label>
            {{ form_widget(form.nom, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Sarah Johnson'}}) }}
            <div class=\"text-danger small\">{{ form_errors(form.nom) }}</div>
        </div>

        <div class=\"col-md-6\">
            <label class=\"form-label fw-semibold text-grandoria\">
                <i class=\"bi bi-briefcase-fill me-1\"></i> Poste / Fonction
            </label>
            {{ form_widget(form.poste, {'attr': {'class': 'form-control', 'placeholder': 'Ex: Manager'}}) }}
            <div class=\"text-danger small\">{{ form_errors(form.poste) }}</div>
        </div>

        <div class=\"col-12\">
            <label class=\"form-label fw-semibold text-grandoria\">
                <i class=\"bi bi-telephone-fill me-1\"></i> Numéro de Téléphone
            </label>
            <div class=\"input-group\">
                <span class=\"input-group-text\"><i class=\"bi bi-plus\"></i></span>
                {{ form_widget(form.numtel, {'attr': {'class': 'form-control', 'placeholder': '216 -- --- ---'}}) }}
            </div>
            <div class=\"text-danger small\">{{ form_errors(form.numtel) }}</div>
        </div>

        <div class=\"col-12 text-center mt-4\">
            <button type=\"submit\" class=\"btn btn-grandoria btn-lg px-5 shadow-sm\">
                <i class=\"bi bi-check2-circle me-2\"></i> {{ button_label|default('Enregistrer le profil') }}
            </button>
        </div>

    </div>
{{ form_end(form) }}

", "staff/_form.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\staff\\_form.html.twig");
    }
}
