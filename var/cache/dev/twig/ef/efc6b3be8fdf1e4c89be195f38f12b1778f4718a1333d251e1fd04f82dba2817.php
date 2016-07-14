<?php

/* MyRecipesDosBundle:Recipe:lastRecipes.html.twig */
class __TwigTemplate_fbb97de21b11c1d19aad887c7b3bacd6221542f7feb4b28590a907aa88954652 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac1350606c3f4b86d2facba8f79c9291f42d07e1bcc6665be7568905741c1a67 = $this->env->getExtension("native_profiler");
        $__internal_ac1350606c3f4b86d2facba8f79c9291f42d07e1bcc6665be7568905741c1a67->enter($__internal_ac1350606c3f4b86d2facba8f79c9291f42d07e1bcc6665be7568905741c1a67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesDosBundle:Recipe:lastRecipes.html.twig"));

        // line 1
        echo "<h3>Últimas recetas añadidas</h3>
<ul>
\t";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) ? $context["recipes"] : $this->getContext($context, "recipes")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 4
            echo "\t\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "name", array()), "html", null, true);
            echo "</li>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>";
        
        $__internal_ac1350606c3f4b86d2facba8f79c9291f42d07e1bcc6665be7568905741c1a67->leave($__internal_ac1350606c3f4b86d2facba8f79c9291f42d07e1bcc6665be7568905741c1a67_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesDosBundle:Recipe:lastRecipes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  30 => 4,  26 => 3,  22 => 1,);
    }
}
/* <h3>Últimas recetas añadidas</h3>*/
/* <ul>*/
/* 	{% for recipe in recipes %}*/
/* 		<li>{{ recipe.name }}</li>*/
/* 	{% endfor %}*/
/* </ul>*/
