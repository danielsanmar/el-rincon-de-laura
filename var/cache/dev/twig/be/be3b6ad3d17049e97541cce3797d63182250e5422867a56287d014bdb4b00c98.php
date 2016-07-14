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
        $__internal_84360ece0de3e93fa61c92231596d78c8b03ad053e0283e27e499c55f5dd06ed = $this->env->getExtension("native_profiler");
        $__internal_84360ece0de3e93fa61c92231596d78c8b03ad053e0283e27e499c55f5dd06ed->enter($__internal_84360ece0de3e93fa61c92231596d78c8b03ad053e0283e27e499c55f5dd06ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::header.html.twig"));

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
        
        $__internal_84360ece0de3e93fa61c92231596d78c8b03ad053e0283e27e499c55f5dd06ed->leave($__internal_84360ece0de3e93fa61c92231596d78c8b03ad053e0283e27e499c55f5dd06ed_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa2eb0a475e4575f16e061a8cc1208066eab99b1f3b3aca93c1fe2959fabf319 = $this->env->getExtension("native_profiler");
        $__internal_aa2eb0a475e4575f16e061a8cc1208066eab99b1f3b3aca93c1fe2959fabf319->enter($__internal_aa2eb0a475e4575f16e061a8cc1208066eab99b1f3b3aca93c1fe2959fabf319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "El rincón de Laura | Tienda de mujer ";
        
        $__internal_aa2eb0a475e4575f16e061a8cc1208066eab99b1f3b3aca93c1fe2959fabf319->leave($__internal_aa2eb0a475e4575f16e061a8cc1208066eab99b1f3b3aca93c1fe2959fabf319_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a575f7fbf06fa72576d2af18bb3bcdcbaa162d025779c5e092e218032a8952a9 = $this->env->getExtension("native_profiler");
        $__internal_a575f7fbf06fa72576d2af18bb3bcdcbaa162d025779c5e092e218032a8952a9->enter($__internal_a575f7fbf06fa72576d2af18bb3bcdcbaa162d025779c5e092e218032a8952a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a575f7fbf06fa72576d2af18bb3bcdcbaa162d025779c5e092e218032a8952a9->leave($__internal_a575f7fbf06fa72576d2af18bb3bcdcbaa162d025779c5e092e218032a8952a9_prof);

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
