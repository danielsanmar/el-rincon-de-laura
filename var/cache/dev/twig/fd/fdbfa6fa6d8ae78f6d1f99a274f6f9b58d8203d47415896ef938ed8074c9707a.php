<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2bdc3f0020a466c855882c888227455f709660328ec95a7b0af1052bf2f103bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_527a75a262c96bab36b85b5e973887d8694f84b0e6a848e7f808f1c04a67f33c = $this->env->getExtension("native_profiler");
        $__internal_527a75a262c96bab36b85b5e973887d8694f84b0e6a848e7f808f1c04a67f33c->enter($__internal_527a75a262c96bab36b85b5e973887d8694f84b0e6a848e7f808f1c04a67f33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_527a75a262c96bab36b85b5e973887d8694f84b0e6a848e7f808f1c04a67f33c->leave($__internal_527a75a262c96bab36b85b5e973887d8694f84b0e6a848e7f808f1c04a67f33c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8706e6b705c380f0182cc55f03c877ee60803e8c8535b13eae9d6394a839f7fe = $this->env->getExtension("native_profiler");
        $__internal_8706e6b705c380f0182cc55f03c877ee60803e8c8535b13eae9d6394a839f7fe->enter($__internal_8706e6b705c380f0182cc55f03c877ee60803e8c8535b13eae9d6394a839f7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_8706e6b705c380f0182cc55f03c877ee60803e8c8535b13eae9d6394a839f7fe->leave($__internal_8706e6b705c380f0182cc55f03c877ee60803e8c8535b13eae9d6394a839f7fe_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c906de099249d4dfa17f25585ded8da152a3376f6f610a1c9e0223f609c7f69 = $this->env->getExtension("native_profiler");
        $__internal_3c906de099249d4dfa17f25585ded8da152a3376f6f610a1c9e0223f609c7f69->enter($__internal_3c906de099249d4dfa17f25585ded8da152a3376f6f610a1c9e0223f609c7f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_3c906de099249d4dfa17f25585ded8da152a3376f6f610a1c9e0223f609c7f69->leave($__internal_3c906de099249d4dfa17f25585ded8da152a3376f6f610a1c9e0223f609c7f69_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b457bd358c7643c0223541c6c4b55df8d3aad19260040c71588ac5a299d0b466 = $this->env->getExtension("native_profiler");
        $__internal_b457bd358c7643c0223541c6c4b55df8d3aad19260040c71588ac5a299d0b466->enter($__internal_b457bd358c7643c0223541c6c4b55df8d3aad19260040c71588ac5a299d0b466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_b457bd358c7643c0223541c6c4b55df8d3aad19260040c71588ac5a299d0b466->leave($__internal_b457bd358c7643c0223541c6c4b55df8d3aad19260040c71588ac5a299d0b466_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
