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

/* property/edit.html.twig */
class __TwigTemplate_714feb7b54b05cbbd1386df15ce734ed extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "property/edit.html.twig"));

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

        yield "Edit Property";
        
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
        <h1 class=\"mb-4\">Edit Property</h1>

        ";
        // line 9
        yield "        <div class=\"card mb-4\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h3>Property Images</h3>
                <a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_image_upload", ["entityType" => "property", "entityId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-success\">
                    <i class=\"bi bi-plus-circle\"></i> Add New Image
                </a>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["property"]) || array_key_exists("property", $context) ? $context["property"] : (function () { throw new RuntimeError('Variable "property" does not exist.', 18, $this->source); })()), "images", [], "any", false, false, false, 18));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 19
            yield "                        <div class=\"col-md-3 mb-3\">
                            <div class=\"card position-relative shadow-sm\">
                                <img src=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 21))), "html", null, true);
            yield "\" class=\"card-img-top img-fluid\" style=\"height: 150px; object-fit: cover;\">

                                ";
            // line 24
            yield "                                <form method=\"post\" id=\"delete-image-form-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 24), "html", null, true);
            yield "\" 
                                      class=\"position-absolute top-0 end-0 m-1\" style=\"z-index: 10;\">
                                    
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 27))), "html", null, true);
            yield "\">
                                    
                                    <button type=\"button\" 
                                            class=\"btn btn-danger btn-sm p-1 delete-image-btn\" 
                                            title=\"Delete Image\"
                                            data-bs-toggle=\"modal\" 
                                            data-bs-target=\"#confirmDeleteModal\"
                                            data-delete-url=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_image_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            yield "\" 
                                            data-item-name=\"Image: ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 35), "html", null, true);
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
        // line 42
        if (!$context['_iterated']) {
            // line 43
            yield "                        <p class=\"text-muted\">No images uploaded for this property yet.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                </div>
            </div>
        </div>

        ";
        // line 50
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "property/_form.html.twig", ["button_label" => "Update"]);
        yield "
        <div class=\"mt-4\">
            <a href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_property_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-arrow-left\"></i> Back to List
            </a>
        </div>
        ";
        // line 56
        yield Twig\Extension\CoreExtension::include($this->env, $context, "property/_delete_form.html.twig");
        yield "
    </div>

    ";
        // line 60
        yield "    ";
        // line 61
        yield "    ";
        // line 62
        yield "    <div class=\"modal fade\" id=\"confirmDeleteModal\" tabindex=\"-1\" aria-labelledby=\"confirmDeleteModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-pastel shadow-lg\">
          
          ";
        // line 67
        yield "          <div class=\"modal-header bg-pastel-pink border-0\">
            <h5 class=\"modal-title text-pastel-red\" id=\"confirmDeleteModalLabel\">
                <i class=\"bi bi-heart-fill me-2\"></i> Are you sure, sweetie?
            </h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          
          ";
        // line 75
        yield "          <div class=\"modal-body py-4\">
            <p class=\"lead text-muted\">Do you really want to remove the item: <br><strong class=\"text-pastel-red\" id=\"modal-item-name\"></strong>?</p>
            <div class=\"p-3 mt-3 bg-light rounded border-danger border-start border-5\">
                 <p class=\"mb-0 text-danger small fst-italic\">This cannot be magically undone! Be thoughtful!</p>
            </div>
          </div>
          
          ";
        // line 83
        yield "          <div class=\"modal-footer justify-content-between border-top-0\">
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                <i class=\"bi bi-arrow-left-circle me-1\"></i> Oops, outline-secondary!
            </button>
            <button type=\"button\" class=\"btn btn-soft-red\" id=\"confirmDeleteButton\">
                <i class=\"bi bi-trash-fill me-1\"></i> Yes, delete it me!
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

    // line 100
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

        // line 101
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    
    <script>
        // Get the Bootstrap Modal element
        const confirmDeleteModal = document.getElementById('confirmDeleteModal');
        // Get the main confirmation button inside the modal
        const confirmDeleteButton = document.getElementById('confirmDeleteButton');
        // Get the strong tag where the item name is displayed
        const modalItemName = document.getElementById('modal-item-name');
        
        // This is triggered when the modal is about to be shown
        confirmDeleteModal.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            const button = event.relatedTarget; 
            
            // Extract info from data-bs- attributes
            const deleteUrl = button.getAttribute('data-delete-url');
            const itemName = button.getAttribute('data-item-name');
            
            // Get the parent form of the button
            const parentForm = button.closest('form');
            
            // Update the modal content
            modalItemName.textContent = itemName;
            
            // Set up the click handler for the red \"Delete\" button inside the modal
            confirmDeleteButton.onclick = function() {
                // IMPORTANT: Change the form action to the correct delete URL
                parentForm.action = deleteUrl;
                
                // Submit the form
                parentForm.submit();
                
                // Hide the modal (optional, as the page will reload)
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
        return "property/edit.html.twig";
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
        return array (  264 => 101,  251 => 100,  229 => 83,  220 => 75,  211 => 67,  205 => 62,  203 => 61,  201 => 60,  195 => 56,  188 => 52,  182 => 50,  176 => 45,  169 => 43,  167 => 42,  155 => 35,  151 => 34,  141 => 27,  134 => 24,  129 => 21,  125 => 19,  120 => 18,  111 => 12,  106 => 9,  101 => 5,  88 => 4,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Edit Property{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Edit Property</h1>

        {# --- ROOM IMAGES SECTION (NO CHANGE HERE) --- #}
        <div class=\"card mb-4\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h3>Property Images</h3>
                <a href=\"{{ path('app_image_upload', {'entityType': 'property', 'entityId': property.id}) }}\" class=\"btn btn-sm btn-success\">
                    <i class=\"bi bi-plus-circle\"></i> Add New Image
                </a>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    {% for image in property.images %}
                        <div class=\"col-md-3 mb-3\">
                            <div class=\"card position-relative shadow-sm\">
                                <img src=\"{{ asset('uploads/images/' ~ image.filename) }}\" class=\"card-img-top img-fluid\" style=\"height: 150px; object-fit: cover;\">

                                {# DELETE FORM - USING data-bs- attributes to trigger the modal (NO CHANGE TO BUTTON FUNCTIONALITY) #}
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
                        <p class=\"text-muted\">No images uploaded for this property yet.</p>
                    {% endfor %}
                </div>
            </div>
        </div>

        {# --- REST OF THE PAGE CONTENT (NO CHANGE) --- #}
        {{ include('property/_form.html.twig', {'button_label': 'Update'}) }}
        <div class=\"mt-4\">
            <a href=\"{{ path('app_property_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-arrow-left\"></i> Back to List
            </a>
        </div>
        {{ include('property/_delete_form.html.twig') }}
    </div>

    {# ---------------------------------------------------------------- #}
    {# 🌸 CUTE & SOFT BOOTSTRAP CONFIRMATION MODAL STRUCTURE 🌸 #}
    {# ---------------------------------------------------------------- #}
    <div class=\"modal fade\" id=\"confirmDeleteModal\" tabindex=\"-1\" aria-labelledby=\"confirmDeleteModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content border-pastel shadow-lg\">
          
          {# MODAL HEADER: Pastel Pink Background, Soft Red Text #}
          <div class=\"modal-header bg-pastel-pink border-0\">
            <h5 class=\"modal-title text-pastel-red\" id=\"confirmDeleteModalLabel\">
                <i class=\"bi bi-heart-fill me-2\"></i> Are you sure, sweetie?
            </h5>
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
          </div>
          
          {# MODAL BODY: Gentle Warning #}
          <div class=\"modal-body py-4\">
            <p class=\"lead text-muted\">Do you really want to remove the item: <br><strong class=\"text-pastel-red\" id=\"modal-item-name\"></strong>?</p>
            <div class=\"p-3 mt-3 bg-light rounded border-danger border-start border-5\">
                 <p class=\"mb-0 text-danger small fst-italic\">This cannot be magically undone! Be thoughtful!</p>
            </div>
          </div>
          
          {# MODAL FOOTER: Soft Buttons #}
          <div class=\"modal-footer justify-content-between border-top-0\">
            <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                <i class=\"bi bi-arrow-left-circle me-1\"></i> Oops, outline-secondary!
            </button>
            <button type=\"button\" class=\"btn btn-soft-red\" id=\"confirmDeleteButton\">
                <i class=\"bi bi-trash-fill me-1\"></i> Yes, delete it me!
            </button>
          </div>
        </div>
      </div>
    </div>
    {# ---------------------------------------------------------------- #}
{% endblock %}

{# ---------------------------------------------------------------- #}
{# JAVASCRIPT BLOCK (NO CHANGE NEEDED) #}
{# ---------------------------------------------------------------- #}
{% block javascripts %}
    {{ parent() }}
    
    <script>
        // Get the Bootstrap Modal element
        const confirmDeleteModal = document.getElementById('confirmDeleteModal');
        // Get the main confirmation button inside the modal
        const confirmDeleteButton = document.getElementById('confirmDeleteButton');
        // Get the strong tag where the item name is displayed
        const modalItemName = document.getElementById('modal-item-name');
        
        // This is triggered when the modal is about to be shown
        confirmDeleteModal.addEventListener('show.bs.modal', function (event) {
            // Button that triggered the modal
            const button = event.relatedTarget; 
            
            // Extract info from data-bs- attributes
            const deleteUrl = button.getAttribute('data-delete-url');
            const itemName = button.getAttribute('data-item-name');
            
            // Get the parent form of the button
            const parentForm = button.closest('form');
            
            // Update the modal content
            modalItemName.textContent = itemName;
            
            // Set up the click handler for the red \"Delete\" button inside the modal
            confirmDeleteButton.onclick = function() {
                // IMPORTANT: Change the form action to the correct delete URL
                parentForm.action = deleteUrl;
                
                // Submit the form
                parentForm.submit();
                
                // Hide the modal (optional, as the page will reload)
                const modal = bootstrap.Modal.getInstance(confirmDeleteModal);
                modal.hide();
            };
        });
    </script>
{% endblock %}", "property/edit.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\property\\edit.html.twig");
    }
}
