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

/* home/contact.html.twig */
class __TwigTemplate_0802f46a7f4bc343cef74f0536e64c6e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/contact.html.twig"));

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

        yield "Our Properties - UrbanStay Luxury Apartment Rental";
        
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
        yield "
  <main class=\"main\">

     <!-- Page Title -->
    <div class=\"page-title light-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Contact</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
            <li class=\"current\">Contact Us Now</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


     <!-- Contact Section -->
    <section id=\"contact\" class=\"contact section\">

      <!-- Map Section -->
      <div class=\"map-container mb-5\">
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus\" width=\"100%\" height=\"500\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
      </div>

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <!-- Contact Info -->
        <div class=\"row g-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <div class=\"col-md-6\">
            <div class=\"contact-info-card\">
              <div class=\"icon-box\">
                <i class=\"bi bi-geo-alt\"></i>
              </div>
              <div class=\"info-content\">
                <h4>Location</h4>
                <p>482 Pine Street, Seattle, Washington 98101</p>
              </div>
            </div>
          </div>

          <div class=\"col-md-6\">
            <div class=\"contact-info-card\">
              <div class=\"icon-box\">
                <i class=\"bi bi-telephone\"></i>
              </div>
              <div class=\"info-content\">
                <h4>Phone &amp; Email</h4>
                <p>+1 (206) 555-0192</p>
                <p>connect@example.com</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class=\"row justify-content-center mb-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <div class=\"col-lg-10\">
            <div class=\"contact-form-wrapper\">
              <h2 class=\"text-center mb-4\">Send a Message</h2>

              <form action=\"forms/contact.php\" method=\"post\" class=\"php-email-form\">
                <div class=\"row g-3\">
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Your Name\" required=\"\">
                    </div>
                  </div>

                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email Address\" required=\"\">
                    </div>
                  </div>

                  <div class=\"col-12\">
                    <div class=\"form-group\">
                      <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\" required=\"\">
                    </div>
                  </div>

                  <div class=\"col-12\">
                    <div class=\"form-group\">
                      <textarea class=\"form-control\" name=\"message\" placeholder=\"Your Message\" rows=\"6\" required=\"\"></textarea>
                    </div>
                  </div>

                  <div class=\"col-12\">
                    <div class=\"loading\">Loading</div>
                    <div class=\"error-message\"></div>
                    <div class=\"sent-message\">Your message has been sent. Thank you!</div>
                  </div>

                  <div class=\"col-12 text-center\">
                    <button type=\"submit\" class=\"btn-submit\">SEND MESSAGE</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>
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
        return "home/contact.html.twig";
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
        return array (  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Our Properties - UrbanStay Luxury Apartment Rental{% endblock %}

{% block body %}

  <main class=\"main\">

     <!-- Page Title -->
    <div class=\"page-title light-background\">
      <div class=\"container d-lg-flex justify-content-between align-items-center\">
        <h1 class=\"mb-2 mb-lg-0\">Contact</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ path('app_home') }}\">Home</a></li>
            <li class=\"current\">Contact Us Now</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


     <!-- Contact Section -->
    <section id=\"contact\" class=\"contact section\">

      <!-- Map Section -->
      <div class=\"map-container mb-5\">
        <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus\" width=\"100%\" height=\"500\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
      </div>

      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

        <!-- Contact Info -->
        <div class=\"row g-4 mb-5\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <div class=\"col-md-6\">
            <div class=\"contact-info-card\">
              <div class=\"icon-box\">
                <i class=\"bi bi-geo-alt\"></i>
              </div>
              <div class=\"info-content\">
                <h4>Location</h4>
                <p>482 Pine Street, Seattle, Washington 98101</p>
              </div>
            </div>
          </div>

          <div class=\"col-md-6\">
            <div class=\"contact-info-card\">
              <div class=\"icon-box\">
                <i class=\"bi bi-telephone\"></i>
              </div>
              <div class=\"info-content\">
                <h4>Phone &amp; Email</h4>
                <p>+1 (206) 555-0192</p>
                <p>connect@example.com</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class=\"row justify-content-center mb-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <div class=\"col-lg-10\">
            <div class=\"contact-form-wrapper\">
              <h2 class=\"text-center mb-4\">Send a Message</h2>

              <form action=\"forms/contact.php\" method=\"post\" class=\"php-email-form\">
                <div class=\"row g-3\">
                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Your Name\" required=\"\">
                    </div>
                  </div>

                  <div class=\"col-md-6\">
                    <div class=\"form-group\">
                      <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email Address\" required=\"\">
                    </div>
                  </div>

                  <div class=\"col-12\">
                    <div class=\"form-group\">
                      <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\" required=\"\">
                    </div>
                  </div>

                  <div class=\"col-12\">
                    <div class=\"form-group\">
                      <textarea class=\"form-control\" name=\"message\" placeholder=\"Your Message\" rows=\"6\" required=\"\"></textarea>
                    </div>
                  </div>

                  <div class=\"col-12\">
                    <div class=\"loading\">Loading</div>
                    <div class=\"error-message\"></div>
                    <div class=\"sent-message\">Your message has been sent. Thank you!</div>
                  </div>

                  <div class=\"col-12 text-center\">
                    <button type=\"submit\" class=\"btn-submit\">SEND MESSAGE</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>
{% endblock %}
", "home/contact.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\home\\contact.html.twig");
    }
}
