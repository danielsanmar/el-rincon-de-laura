<?php

/* ::header.html.twig */
class __TwigTemplate_cdcd0276925c3291d5dd19a1674d0727b9cfe5fdfb86ee4ad9585f5dacdd4e6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e45cb6143ed4d2483a1fe2c0cd528d7751024983a64694371232547f166fbb7a = $this->env->getExtension("native_profiler");
        $__internal_e45cb6143ed4d2483a1fe2c0cd528d7751024983a64694371232547f166fbb7a->enter($__internal_e45cb6143ed4d2483a1fe2c0cd528d7751024983a64694371232547f166fbb7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

        // line 1
        echo "<meta charset=\"UTF-8\" />
<title>";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />";
        
        $__internal_e45cb6143ed4d2483a1fe2c0cd528d7751024983a64694371232547f166fbb7a->leave($__internal_e45cb6143ed4d2483a1fe2c0cd528d7751024983a64694371232547f166fbb7a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b89710fb6d565100c6c5953eeeec71867cfabc6660310cad2f5e2cd0d69b9d6 = $this->env->getExtension("native_profiler");
        $__internal_1b89710fb6d565100c6c5953eeeec71867cfabc6660310cad2f5e2cd0d69b9d6->enter($__internal_1b89710fb6d565100c6c5953eeeec71867cfabc6660310cad2f5e2cd0d69b9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "El rincón de Laura | Tienda de mujer ";
        
        $__internal_1b89710fb6d565100c6c5953eeeec71867cfabc6660310cad2f5e2cd0d69b9d6->leave($__internal_1b89710fb6d565100c6c5953eeeec71867cfabc6660310cad2f5e2cd0d69b9d6_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_45a9563e9a4de73a32d42d721cdfddfc3840d89228d213ce0c8f09267ddefc3a = $this->env->getExtension("native_profiler");
        $__internal_45a9563e9a4de73a32d42d721cdfddfc3840d89228d213ce0c8f09267ddefc3a->enter($__internal_45a9563e9a4de73a32d42d721cdfddfc3840d89228d213ce0c8f09267ddefc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_45a9563e9a4de73a32d42d721cdfddfc3840d89228d213ce0c8f09267ddefc3a->leave($__internal_45a9563e9a4de73a32d42d721cdfddfc3840d89228d213ce0c8f09267ddefc3a_prof);

    }

    public function getTemplateName()
    {
        return "::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 3,  42 => 2,  33 => 4,  31 => 3,  27 => 2,  24 => 1,);
    }
}
/* <meta charset="UTF-8" />*/
/* <title>{% block title %}El rincón de Laura | Tienda de mujer {% endblock %}</title>*/
/* {% block stylesheets %}{% endblock %}*/
/* <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
