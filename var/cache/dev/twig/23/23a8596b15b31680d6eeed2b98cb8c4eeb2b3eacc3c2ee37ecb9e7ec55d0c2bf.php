<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1463b212071970c68d4a793120c87d971df3c4da3ad3a37ba0b93b0409487352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bc1603bb6b8df63e76baa4d71312f6a1ae57b18ea435ecce05399af3e26c7683 = $this->env->getExtension("native_profiler");
        $__internal_bc1603bb6b8df63e76baa4d71312f6a1ae57b18ea435ecce05399af3e26c7683->enter($__internal_bc1603bb6b8df63e76baa4d71312f6a1ae57b18ea435ecce05399af3e26c7683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc1603bb6b8df63e76baa4d71312f6a1ae57b18ea435ecce05399af3e26c7683->leave($__internal_bc1603bb6b8df63e76baa4d71312f6a1ae57b18ea435ecce05399af3e26c7683_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b5393c60580f816ba7cedc145a962f9c15483a8bc83311a15be8e025707eb8ba = $this->env->getExtension("native_profiler");
        $__internal_b5393c60580f816ba7cedc145a962f9c15483a8bc83311a15be8e025707eb8ba->enter($__internal_b5393c60580f816ba7cedc145a962f9c15483a8bc83311a15be8e025707eb8ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b5393c60580f816ba7cedc145a962f9c15483a8bc83311a15be8e025707eb8ba->leave($__internal_b5393c60580f816ba7cedc145a962f9c15483a8bc83311a15be8e025707eb8ba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f7140647c4e7b740787c16601e831074bc06cd43a2b1a7404f068532f2f56389 = $this->env->getExtension("native_profiler");
        $__internal_f7140647c4e7b740787c16601e831074bc06cd43a2b1a7404f068532f2f56389->enter($__internal_f7140647c4e7b740787c16601e831074bc06cd43a2b1a7404f068532f2f56389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f7140647c4e7b740787c16601e831074bc06cd43a2b1a7404f068532f2f56389->leave($__internal_f7140647c4e7b740787c16601e831074bc06cd43a2b1a7404f068532f2f56389_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_275d08e88b512d251b8aac36ab5fff05533e5850a21be810b379f786426c0e60 = $this->env->getExtension("native_profiler");
        $__internal_275d08e88b512d251b8aac36ab5fff05533e5850a21be810b379f786426c0e60->enter($__internal_275d08e88b512d251b8aac36ab5fff05533e5850a21be810b379f786426c0e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_275d08e88b512d251b8aac36ab5fff05533e5850a21be810b379f786426c0e60->leave($__internal_275d08e88b512d251b8aac36ab5fff05533e5850a21be810b379f786426c0e60_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
