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

/* event/edit.html.twig */
class __TwigTemplate_1234bf96a29281636f7d0183c84fdc86 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Edit Event";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Edit Event</h1>

        ";
        // line 9
        yield "        <div class=\"card mb-4\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h3>Event Images</h3>
                ";
        // line 13
        yield "                <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_image_upload", ["entityType" => "event", "entityId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-success\">
                    <i class=\"bi bi-plus-circle\"></i> Add New Image
                </a>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 19, $this->source); })()), "images", [], "any", false, false, false, 19));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 20
            yield "                        <div class=\"col-md-3 mb-3\">
                            <div class=\"card position-relative shadow-sm\">
                                <img src=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 22))), "html", null, true);
            yield "\" class=\"card-img-top img-fluid\" style=\"height: 150px; object-fit: cover;\">

                                ";
            // line 25
            yield "                                <form method=\"post\" id=\"delete-image-form-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "\" 
                                      class=\"position-absolute top-0 end-0 m-1\" style=\"z-index: 10;\">
                                    
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 28))), "html", null, true);
            yield "\">
                                    
                                    <button type=\"button\" 
                                            class=\"btn btn-danger btn-sm p-1 delete-image-btn\" 
                                            title=\"Delete Image\"
                                            data-bs-toggle=\"modal\" 
                                            data-bs-target=\"#confirmDeleteModal\"
                                            data-delete-url=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_image_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" 
                                            data-item-name=\"Image: ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 36), "html", null, true);
            yield "\" 
                                            style=\"--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .4rem; --bs-btn-font-size: .75rem;\">
                                        <i class=\"bi bi-x-lg\"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        // line 43
        if (!$context['_iterated']) {
            // line 44
            yield "                        <p class=\"text-muted\">No images uploaded for this event yet.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "                </div>
            </div>
        </div>

        ";
        // line 51
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "event/_form.html.twig", ["button_label" => "Update"]);
        yield "
        
        <div class=\"mt-4\">
            <a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-arrow-left\"></i> Back to List
            </a>
        </div>
        
        ";
        // line 60
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "event/_delete_form.html.twig");
        yield "
    </div>

    ";
        // line 64
        yield "    ";
        // line 65
        yield "    ";
        // line 66
        yield "    <div class=\"modal fade\" id=\"confirmDeleteModal\" tabindex=\"-1\" aria-labelledby=\"confirmDeleteModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-pastel shadow-lg\">
          
          <div class=\"modal-header bg-pastel-pink border-0\">
            <h5 class=\"modal-title text-pastel-red\" id=\"confirmDeleteModalLabel\">
                <i class=\"bi bi-heart-fill me-2\"></i> Are you sure, sweetie?
            </h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          
          <div class=\"modal-body py-4\">
            <p class=\"lead text-muted\">Do you really want to remove the item: <br><strong class=\"text-pastel-red\" id=\"modal-item-name\"></strong>?</p>
            <div class=\"p-3 mt-3 bg-light rounded border-danger border-start border-5\">
                 <p class=\"mb-0 text-danger small fst-italic\">This cannot be magically undone! Be thoughtful!</p>
            </div>
          </div>
          
          <div class=\"modal-footer justify-content-between border-top-0\">
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                <i class=\"bi bi-arrow-left-circle me-1\"></i> Oops, stay here!
            </button>
            <button type=\"button\" class=\"btn btn-soft-red\" id=\"confirmDeleteButton\">
                <i class=\"bi bi-trash-fill me-1\"></i> Yes, delete it!
            </button>
          </div>
        </div>
      </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 97
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    
    <script>
        const confirmDeleteModal = document.getElementById('confirmDeleteModal');
        const confirmDeleteButton = document.getElementById('confirmDeleteButton');
        const modalItemName = document.getElementById('modal-item-name');
        
        confirmDeleteModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget; 
            const deleteUrl = button.getAttribute('data-delete-url');
            const itemName = button.getAttribute('data-item-name');
            const parentForm = button.closest('form');
            
            modalItemName.textContent = itemName;
            
            confirmDeleteButton.onclick = function() {
                parentForm.action = deleteUrl;
                parentForm.submit();
                const modal = bootstrap.Modal.getInstance(confirmDeleteModal);
                modal.hide();
            };
        });
    </script>
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
        return "event/edit.html.twig";
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
        return array (  262 => 98,  249 => 97,  209 => 66,  207 => 65,  205 => 64,  198 => 60,  190 => 54,  183 => 51,  177 => 46,  170 => 44,  168 => 43,  156 => 36,  152 => 35,  142 => 28,  135 => 25,  130 => 22,  126 => 20,  121 => 19,  111 => 13,  106 => 9,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Edit Event{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Edit Event</h1>

        {# --- EVENT IMAGES SECTION (CLASS NAMES PRESERVED) --- #}
        <div class=\"card mb-4\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h3>Event Images</h3>
                {# Updated entityType to 'event' #}
                <a href=\"{{ path('app_image_upload', {'entityType': 'event', 'entityId': event.id}) }}\" class=\"btn btn-sm btn-success\">
                    <i class=\"bi bi-plus-circle\"></i> Add New Image
                </a>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    {% for image in event.images %}
                        <div class=\"col-md-3 mb-3\">
                            <div class=\"card position-relative shadow-sm\">
                                <img src=\"{{ asset('uploads/images/' ~ image.filename) }}\" class=\"card-img-top img-fluid\" style=\"height: 150px; object-fit: cover;\">

                                {# DELETE FORM - Logic preserved #}
                                <form method=\"post\" id=\"delete-image-form-{{ image.id }}\" 
                                      class=\"position-absolute top-0 end-0 m-1\" style=\"z-index: 10;\">
                                    
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ image.id) }}\">
                                    
                                    <button type=\"button\" 
                                            class=\"btn btn-danger btn-sm p-1 delete-image-btn\" 
                                            title=\"Delete Image\"
                                            data-bs-toggle=\"modal\" 
                                            data-bs-target=\"#confirmDeleteModal\"
                                            data-delete-url=\"{{ path('app_image_delete', {'id': image.id}) }}\" 
                                            data-item-name=\"Image: {{ image.filename }}\" 
                                            style=\"--bs-btn-padding-y: .1rem; --bs-btn-padding-x: .4rem; --bs-btn-font-size: .75rem;\">
                                        <i class=\"bi bi-x-lg\"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    {% else %}
                        <p class=\"text-muted\">No images uploaded for this event yet.</p>
                    {% endfor %}
                </div>
            </div>
        </div>

        {# --- FORM SECTION (Mapped to Event) --- #}
        {{ include('event/_form.html.twig', {'button_label': 'Update'}) }}
        
        <div class=\"mt-4\">
            <a href=\"{{ path('app_event_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-arrow-left\"></i> Back to List
            </a>
        </div>
        
        {# Ensure you have an event/_delete_form.html.twig created #}
        {{ include('event/_delete_form.html.twig') }}
    </div>

    {# ---------------------------------------------------------------- #}
    {# 🌸 CUTE & SOFT BOOTSTRAP CONFIRMATION MODAL STRUCTURE 🌸 #}
    {# ---------------------------------------------------------------- #}
    <div class=\"modal fade\" id=\"confirmDeleteModal\" tabindex=\"-1\" aria-labelledby=\"confirmDeleteModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-pastel shadow-lg\">
          
          <div class=\"modal-header bg-pastel-pink border-0\">
            <h5 class=\"modal-title text-pastel-red\" id=\"confirmDeleteModalLabel\">
                <i class=\"bi bi-heart-fill me-2\"></i> Are you sure, sweetie?
            </h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          
          <div class=\"modal-body py-4\">
            <p class=\"lead text-muted\">Do you really want to remove the item: <br><strong class=\"text-pastel-red\" id=\"modal-item-name\"></strong>?</p>
            <div class=\"p-3 mt-3 bg-light rounded border-danger border-start border-5\">
                 <p class=\"mb-0 text-danger small fst-italic\">This cannot be magically undone! Be thoughtful!</p>
            </div>
          </div>
          
          <div class=\"modal-footer justify-content-between border-top-0\">
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                <i class=\"bi bi-arrow-left-circle me-1\"></i> Oops, stay here!
            </button>
            <button type=\"button\" class=\"btn btn-soft-red\" id=\"confirmDeleteButton\">
                <i class=\"bi bi-trash-fill me-1\"></i> Yes, delete it!
            </button>
          </div>
        </div>
      </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script>
        const confirmDeleteModal = document.getElementById('confirmDeleteModal');
        const confirmDeleteButton = document.getElementById('confirmDeleteButton');
        const modalItemName = document.getElementById('modal-item-name');
        
        confirmDeleteModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget; 
            const deleteUrl = button.getAttribute('data-delete-url');
            const itemName = button.getAttribute('data-item-name');
            const parentForm = button.closest('form');
            
            modalItemName.textContent = itemName;
            
            confirmDeleteButton.onclick = function() {
                parentForm.action = deleteUrl;
                parentForm.submit();
                const modal = bootstrap.Modal.getInstance(confirmDeleteModal);
                modal.hide();
            };
        });
    </script>
{% endblock %}
", "event/edit.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\event\\edit.html.twig");
    }
}
