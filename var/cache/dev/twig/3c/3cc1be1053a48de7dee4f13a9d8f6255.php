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

/* service/edit.html.twig */
class __TwigTemplate_5d2f33ce8644a19fa4571be0781a4882 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service/edit.html.twig"));

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

        yield "Edit Service";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Edit Service: ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>

        ";
        // line 10
        yield "        <div class=\"card mb-4\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h3>Service Images</h3>
                ";
        // line 14
        yield "                <a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_image_upload", ["entityType" => "service", "entityId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-success\">
                    <i class=\"bi bi-plus-circle\"></i> Add New Image
                </a>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["service"]) || array_key_exists("service", $context) ? $context["service"] : (function () { throw new RuntimeError('Variable "service" does not exist.', 20, $this->source); })()), "images", [], "any", false, false, false, 20));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 21
            yield "                        <div class=\"col-md-3 mb-3\">
                            <div class=\"card position-relative shadow-sm\">
                                <img src=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 23))), "html", null, true);
            yield "\" class=\"card-img-top img-fluid\" style=\"height: 150px; object-fit: cover;\">

                                ";
            // line 26
            yield "                                <form method=\"post\" id=\"delete-image-form-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 26), "html", null, true);
            yield "\" 
                                      class=\"position-absolute top-0 end-0 m-1\" style=\"z-index: 10;\">
                                    
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 29))), "html", null, true);
            yield "\">
                                    
                                    <button type=\"button\" 
                                            class=\"btn btn-danger btn-sm p-1 delete-image-btn\" 
                                            title=\"Delete Image\"
                                            data-bs-toggle=\"modal\" 
                                            data-bs-target=\"#confirmDeleteModal\"
                                            data-delete-url=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_image_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" 
                                            data-item-name=\"Image: ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["image"], "filename", [], "any", false, false, false, 37), "html", null, true);
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
        // line 44
        if (!$context['_iterated']) {
            // line 45
            yield "                        <p class=\"text-muted\">No images uploaded for this service yet.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['image'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "                </div>
            </div>
        </div>

        ";
        // line 52
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "service/_form.html.twig", ["button_label" => "Update Service"]);
        yield "

        <div class=\"mt-4 d-flex gap-2\">
            <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_index");
        yield "\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-arrow-left\"></i> Back to List
            </a>
            ";
        // line 59
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "service/_delete_form.html.twig");
        yield "
        </div>
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
                <i class=\"bi bi-arrow-left-circle me-1\"></i> Oops, go back!
            </button>
            <button type=\"button\" class=\"btn btn-danger\" id=\"confirmDeleteButton\" style=\"background-color: #ffb3ba; border-color: #ffb3ba; color: #721c24;\">
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
        return "service/edit.html.twig";
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
        return array (  264 => 98,  251 => 97,  211 => 66,  209 => 65,  207 => 64,  199 => 59,  193 => 55,  186 => 52,  180 => 47,  173 => 45,  171 => 44,  159 => 37,  155 => 36,  145 => 29,  138 => 26,  133 => 23,  129 => 21,  124 => 20,  114 => 14,  109 => 10,  104 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit Service{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"mb-4\">Edit Service: {{ service.nom }}</h1>

        {# --- SERVICE IMAGES SECTION --- #}
        <div class=\"card mb-4\">
            <div class=\"card-header d-flex justify-content-between align-items-center\">
                <h3>Service Images</h3>
                {# Adjust the entityType to 'service' for your upload route #}
                <a href=\"{{ path('app_image_upload', {'entityType': 'service', 'entityId': service.id}) }}\" class=\"btn btn-sm btn-success\">
                    <i class=\"bi bi-plus-circle\"></i> Add New Image
                </a>
            </div>
            <div class=\"card-body\">
                <div class=\"row\">
                    {% for image in service.images %}
                        <div class=\"col-md-3 mb-3\">
                            <div class=\"card position-relative shadow-sm\">
                                <img src=\"{{ asset('uploads/images/' ~ image.filename) }}\" class=\"card-img-top img-fluid\" style=\"height: 150px; object-fit: cover;\">

                                {# DELETE FORM for Images #}
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
                        <p class=\"text-muted\">No images uploaded for this service yet.</p>
                    {% endfor %}
                </div>
            </div>
        </div>

        {# --- SERVICE FORM SECTION --- #}
        {{ include('service/_form.html.twig', {'button_label': 'Update Service'}) }}

        <div class=\"mt-4 d-flex gap-2\">
            <a href=\"{{ path('app_service_index') }}\" class=\"btn btn-outline-secondary\">
                <i class=\"bi bi-arrow-left\"></i> Back to List
            </a>
            {# Main Service Delete Form #}
            {{ include('service/_delete_form.html.twig') }}
        </div>
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
                <i class=\"bi bi-arrow-left-circle me-1\"></i> Oops, go back!
            </button>
            <button type=\"button\" class=\"btn btn-danger\" id=\"confirmDeleteButton\" style=\"background-color: #ffb3ba; border-color: #ffb3ba; color: #721c24;\">
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
", "service/edit.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\service\\edit.html.twig");
    }
}
