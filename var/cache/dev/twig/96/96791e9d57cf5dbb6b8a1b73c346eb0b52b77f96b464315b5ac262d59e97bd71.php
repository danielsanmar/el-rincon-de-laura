<?php

/* MyRecipesDosBundle:Recipe:show.html.twig */
class __TwigTemplate_16d2d651231ee445fc0d6a4599073dee7ea351e61340d0566829303451baf046 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyRecipesDosBundle:Recipe:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af268c570e96496ea336a1867671a58c4dc020c5cdb4c51bfedc3cc8949eac4a = $this->env->getExtension("native_profiler");
        $__internal_af268c570e96496ea336a1867671a58c4dc020c5cdb4c51bfedc3cc8949eac4a->enter($__internal_af268c570e96496ea336a1867671a58c4dc020c5cdb4c51bfedc3cc8949eac4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesDosBundle:Recipe:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af268c570e96496ea336a1867671a58c4dc020c5cdb4c51bfedc3cc8949eac4a->leave($__internal_af268c570e96496ea336a1867671a58c4dc020c5cdb4c51bfedc3cc8949eac4a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b6fdce125e57e50b29f69a7c1a48496b7fcc9e1f3526bb19620f3b15fd8627f = $this->env->getExtension("native_profiler");
        $__internal_0b6fdce125e57e50b29f69a7c1a48496b7fcc9e1f3526bb19620f3b15fd8627f->enter($__internal_0b6fdce125e57e50b29f69a7c1a48496b7fcc9e1f3526bb19620f3b15fd8627f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "url", array()), "html", null, true);
        
        $__internal_0b6fdce125e57e50b29f69a7c1a48496b7fcc9e1f3526bb19620f3b15fd8627f->leave($__internal_0b6fdce125e57e50b29f69a7c1a48496b7fcc9e1f3526bb19620f3b15fd8627f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bda24a96417ca9e36733c6e8bdab6ba66019e9bf45b2e1e08cc6d1acb63f28e = $this->env->getExtension("native_profiler");
        $__internal_0bda24a96417ca9e36733c6e8bdab6ba66019e9bf45b2e1e08cc6d1acb63f28e->enter($__internal_0bda24a96417ca9e36733c6e8bdab6ba66019e9bf45b2e1e08cc6d1acb63f28e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
\t\t<h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "name", array()), "html", null, true);
        echo "</h1>
\t\t<h2>Por ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "name", array()), "html", null, true);
        echo "</h2>

\t\t<p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "difficulty", array()), "html", null, true);
        echo " (";
        if (($this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "difficulty", array()) == "Fácil")) {
            echo " recomendada para usuarios inexpertos ";
        } elseif (($this->getAttribute((isset($context["recipe"]) ? $context["recipe"] : $this->getContext($context, "recipe")), "difficulty", array()) == "Media")) {
            echo " recomendada para usuarios con algo de experiencia ";
        } else {
            echo " recomendada para usuarios expertos ";
        }
        echo ")</p>
\t\t
\t\t";
        // line 19
        echo "
\t\t<h3>Ingredientes</h3>
\t\t
\t\t<br>
\t\t<br>

\t\t<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getUrl("recipes_list");
        echo "\">volver al listado.</a>

\t\t<br>
\t\t<br>


\t";
        // line 31
        $this->loadTemplate("::footer.html.twig", "MyRecipesDosBundle:Recipe:show.html.twig", 31)->display($context);
        
        $__internal_0bda24a96417ca9e36733c6e8bdab6ba66019e9bf45b2e1e08cc6d1acb63f28e->leave($__internal_0bda24a96417ca9e36733c6e8bdab6ba66019e9bf45b2e1e08cc6d1acb63f28e_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesDosBundle:Recipe:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 31,  86 => 25,  78 => 19,  65 => 10,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}{{ recipe.url }}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* 		<h1>{{ recipe.name }}</h1>*/
/* 		<h2>Por {{ recipe.name }}</h2>*/
/* */
/* 		<p>{{ recipe.difficulty }} ({% if recipe.difficulty == 'Fácil' %} recomendada para usuarios inexpertos {% elseif recipe.difficulty == 'Media' %} recomendada para usuarios con algo de experiencia {% else %} recomendada para usuarios expertos {% endif %})</p>*/
/* 		*/
/* 		{#*/
/* 		<p>{{ recipe.author }}</p>*/
/* */
/* 		{% for ingredient in recipe.ingredients %}*/
/* 			<li>{{ ingredient }}*/
/* 		{% endfor %}*/
/* 		#}*/
/* */
/* 		<h3>Ingredientes</h3>*/
/* 		*/
/* 		<br>*/
/* 		<br>*/
/* */
/* 		<a href="{{ url('recipes_list') }}">volver al listado.</a>*/
/* */
/* 		<br>*/
/* 		<br>*/
/* */
/* */
/* 	{% include '::footer.html.twig' %}*/
/* {% endblock %}*/
