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

/* home/terms.html.twig */
class __TwigTemplate_981d1b69ccb9e4c54951b03a9c87f6a3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/terms.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/terms.html.twig"));

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
        <h1 class=\"mb-2 mb-lg-0\">Terms</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
            <li class=\"current\">Our Terms</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


    <!-- Terms Of Service Section -->
    <section id=\"terms-of-service\" class=\"terms-of-service section\">

      <div class=\"container\" data-aos=\"fade-up\">
        <!-- Page Header -->
        <div class=\"tos-header text-center\" data-aos=\"fade-up\">
          <span class=\"last-updated\">Last Updated: February 27, 2025</span>
          <h2>Terms of Service</h2>
          <p>Please read these terms of service carefully before using our services</p>
        </div>

        <!-- Content -->
        <div class=\"tos-content\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <!-- Agreement Section -->
          <div id=\"agreement\" class=\"content-section\">
            <h3>1. Agreement to Terms</h3>
            <p>By accessing our website and services, you agree to be bound by these Terms of Service and all applicable laws and regulations. If you do not agree with any of these terms, you are prohibited from using or accessing our services.</p>
            <div class=\"info-box\">
              <i class=\"bi bi-info-circle\"></i>
              <p>These terms apply to all users, visitors, and others who access or use our services.</p>
            </div>
          </div>

          <!-- Intellectual Property -->
          <div id=\"intellectual-property\" class=\"content-section\">
            <h3>2. Intellectual Property Rights</h3>
            <p>Our service and its original content, features, and functionality are owned by us and are protected by international copyright, trademark, patent, trade secret, and other intellectual property laws.</p>
            <ul class=\"list-items\">
              <li>All content is our exclusive property</li>
              <li>You may not copy or modify the content</li>
              <li>Our trademarks may not be used without permission</li>
              <li>Content is for personal, non-commercial use only</li>
            </ul>
          </div>

          <!-- User Accounts -->
          <div id=\"user-accounts\" class=\"content-section\">
            <h3>3. User Accounts</h3>
            <p>When you create an account with us, you must provide accurate, complete, and current information. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account.</p>
            <div class=\"alert-box\">
              <i class=\"bi bi-exclamation-triangle\"></i>
              <div class=\"alert-content\">
                <h5>Important Notice</h5>
                <p>You are responsible for safeguarding the password and for all activities that occur under your account.</p>
              </div>
            </div>
          </div>

          <!-- Prohibited Activities -->
          <div id=\"prohibited\" class=\"content-section\">
            <h3>4. Prohibited Activities</h3>
            <p>You may not access or use the Service for any purpose other than that for which we make it available.</p>
            <div class=\"prohibited-list\">
              <div class=\"prohibited-item\">
                <i class=\"bi bi-x-circle\"></i>
                <span>Systematic retrieval of data or content</span>
              </div>
              <div class=\"prohibited-item\">
                <i class=\"bi bi-x-circle\"></i>
                <span>Publishing malicious content</span>
              </div>
              <div class=\"prohibited-item\">
                <i class=\"bi bi-x-circle\"></i>
                <span>Engaging in unauthorized framing</span>
              </div>
              <div class=\"prohibited-item\">
                <i class=\"bi bi-x-circle\"></i>
                <span>Attempting to gain unauthorized access</span>
              </div>
            </div>
          </div>

          <!-- Disclaimers -->
          <div id=\"disclaimer\" class=\"content-section\">
            <h3>5. Disclaimers</h3>
            <p>Your use of our service is at your sole risk. The service is provided \"AS IS\" and \"AS AVAILABLE\" without warranties of any kind, whether express or implied.</p>
            <div class=\"disclaimer-box\">
              <p>We do not guarantee that:</p>
              <ul>
                <li>The service will meet your requirements</li>
                <li>The service will be uninterrupted or error-free</li>
                <li>Results from using the service will be accurate</li>
                <li>Any errors will be corrected</li>
              </ul>
            </div>
          </div>

          <!-- Limitation of Liability -->
          <div id=\"limitation\" class=\"content-section\">
            <h3>6. Limitation of Liability</h3>
            <p>In no event shall we be liable for any indirect, punitive, incidental, special, consequential, or exemplary damages arising out of or in connection with your use of the service.</p>
          </div>

          <!-- Indemnification -->
          <div id=\"indemnification\" class=\"content-section\">
            <h3>7. Indemnification</h3>
            <p>You agree to defend, indemnify, and hold us harmless from and against any claims, liabilities, damages, losses, and expenses arising out of your use of the service.</p>
          </div>

          <!-- Termination -->
          <div id=\"termination\" class=\"content-section\">
            <h3>8. Termination</h3>
            <p>We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
          </div>

          <!-- Governing Law -->
          <div id=\"governing-law\" class=\"content-section\">
            <h3>9. Governing Law</h3>
            <p>These Terms shall be governed by and construed in accordance with the laws of [Your Country], without regard to its conflict of law provisions.</p>
          </div>

          <!-- Changes -->
          <div id=\"changes\" class=\"content-section\">
            <h3>10. Changes to Terms</h3>
            <p>We reserve the right to modify or replace these Terms at any time. We will provide notice of any changes by posting the new Terms on this page.</p>
            <div class=\"notice-box\">
              <i class=\"bi bi-bell\"></i>
              <p>By continuing to access or use our service after those revisions become effective, you agree to be bound by the revised terms.</p>
            </div>
          </div>
        </div>

        <!-- Contact Section -->
        <div class=\"tos-contact\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <div class=\"contact-box\">
            <div class=\"contact-icon\">
              <i class=\"bi bi-envelope\"></i>
            </div>
            <div class=\"contact-content\">
              <h4>Questions About Terms?</h4>
              <p>If you have any questions about these Terms, please contact us.</p>
              <a href=\"#\" class=\"contact-link\">Contact Support</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Terms Of Service Section -->

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
        return "home/terms.html.twig";
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
        <h1 class=\"mb-2 mb-lg-0\">Terms</h1>
        <nav class=\"breadcrumbs\">
          <ol>
            <li><a href=\"{{ path('app_home') }}\">Home</a></li>
            <li class=\"current\">Our Terms</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->


    <!-- Terms Of Service Section -->
    <section id=\"terms-of-service\" class=\"terms-of-service section\">

      <div class=\"container\" data-aos=\"fade-up\">
        <!-- Page Header -->
        <div class=\"tos-header text-center\" data-aos=\"fade-up\">
          <span class=\"last-updated\">Last Updated: February 27, 2025</span>
          <h2>Terms of Service</h2>
          <p>Please read these terms of service carefully before using our services</p>
        </div>

        <!-- Content -->
        <div class=\"tos-content\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <!-- Agreement Section -->
          <div id=\"agreement\" class=\"content-section\">
            <h3>1. Agreement to Terms</h3>
            <p>By accessing our website and services, you agree to be bound by these Terms of Service and all applicable laws and regulations. If you do not agree with any of these terms, you are prohibited from using or accessing our services.</p>
            <div class=\"info-box\">
              <i class=\"bi bi-info-circle\"></i>
              <p>These terms apply to all users, visitors, and others who access or use our services.</p>
            </div>
          </div>

          <!-- Intellectual Property -->
          <div id=\"intellectual-property\" class=\"content-section\">
            <h3>2. Intellectual Property Rights</h3>
            <p>Our service and its original content, features, and functionality are owned by us and are protected by international copyright, trademark, patent, trade secret, and other intellectual property laws.</p>
            <ul class=\"list-items\">
              <li>All content is our exclusive property</li>
              <li>You may not copy or modify the content</li>
              <li>Our trademarks may not be used without permission</li>
              <li>Content is for personal, non-commercial use only</li>
            </ul>
          </div>

          <!-- User Accounts -->
          <div id=\"user-accounts\" class=\"content-section\">
            <h3>3. User Accounts</h3>
            <p>When you create an account with us, you must provide accurate, complete, and current information. Failure to do so constitutes a breach of the Terms, which may result in immediate termination of your account.</p>
            <div class=\"alert-box\">
              <i class=\"bi bi-exclamation-triangle\"></i>
              <div class=\"alert-content\">
                <h5>Important Notice</h5>
                <p>You are responsible for safeguarding the password and for all activities that occur under your account.</p>
              </div>
            </div>
          </div>

          <!-- Prohibited Activities -->
          <div id=\"prohibited\" class=\"content-section\">
            <h3>4. Prohibited Activities</h3>
            <p>You may not access or use the Service for any purpose other than that for which we make it available.</p>
            <div class=\"prohibited-list\">
              <div class=\"prohibited-item\">
                <i class=\"bi bi-x-circle\"></i>
                <span>Systematic retrieval of data or content</span>
              </div>
              <div class=\"prohibited-item\">
                <i class=\"bi bi-x-circle\"></i>
                <span>Publishing malicious content</span>
              </div>
              <div class=\"prohibited-item\">
                <i class=\"bi bi-x-circle\"></i>
                <span>Engaging in unauthorized framing</span>
              </div>
              <div class=\"prohibited-item\">
                <i class=\"bi bi-x-circle\"></i>
                <span>Attempting to gain unauthorized access</span>
              </div>
            </div>
          </div>

          <!-- Disclaimers -->
          <div id=\"disclaimer\" class=\"content-section\">
            <h3>5. Disclaimers</h3>
            <p>Your use of our service is at your sole risk. The service is provided \"AS IS\" and \"AS AVAILABLE\" without warranties of any kind, whether express or implied.</p>
            <div class=\"disclaimer-box\">
              <p>We do not guarantee that:</p>
              <ul>
                <li>The service will meet your requirements</li>
                <li>The service will be uninterrupted or error-free</li>
                <li>Results from using the service will be accurate</li>
                <li>Any errors will be corrected</li>
              </ul>
            </div>
          </div>

          <!-- Limitation of Liability -->
          <div id=\"limitation\" class=\"content-section\">
            <h3>6. Limitation of Liability</h3>
            <p>In no event shall we be liable for any indirect, punitive, incidental, special, consequential, or exemplary damages arising out of or in connection with your use of the service.</p>
          </div>

          <!-- Indemnification -->
          <div id=\"indemnification\" class=\"content-section\">
            <h3>7. Indemnification</h3>
            <p>You agree to defend, indemnify, and hold us harmless from and against any claims, liabilities, damages, losses, and expenses arising out of your use of the service.</p>
          </div>

          <!-- Termination -->
          <div id=\"termination\" class=\"content-section\">
            <h3>8. Termination</h3>
            <p>We may terminate or suspend your account immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
          </div>

          <!-- Governing Law -->
          <div id=\"governing-law\" class=\"content-section\">
            <h3>9. Governing Law</h3>
            <p>These Terms shall be governed by and construed in accordance with the laws of [Your Country], without regard to its conflict of law provisions.</p>
          </div>

          <!-- Changes -->
          <div id=\"changes\" class=\"content-section\">
            <h3>10. Changes to Terms</h3>
            <p>We reserve the right to modify or replace these Terms at any time. We will provide notice of any changes by posting the new Terms on this page.</p>
            <div class=\"notice-box\">
              <i class=\"bi bi-bell\"></i>
              <p>By continuing to access or use our service after those revisions become effective, you agree to be bound by the revised terms.</p>
            </div>
          </div>
        </div>

        <!-- Contact Section -->
        <div class=\"tos-contact\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <div class=\"contact-box\">
            <div class=\"contact-icon\">
              <i class=\"bi bi-envelope\"></i>
            </div>
            <div class=\"contact-content\">
              <h4>Questions About Terms?</h4>
              <p>If you have any questions about these Terms, please contact us.</p>
              <a href=\"#\" class=\"contact-link\">Contact Support</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Terms Of Service Section -->

  </main>
{% endblock %}
", "home/terms.html.twig", "E:\\XAMPP\\htdocs\\location-projet-final-ajuste\\templates\\home\\terms.html.twig");
    }
}
