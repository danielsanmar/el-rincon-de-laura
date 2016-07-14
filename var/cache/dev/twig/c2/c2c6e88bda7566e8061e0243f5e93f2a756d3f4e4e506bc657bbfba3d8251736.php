<?php

/* MyRecipesDosBundle:Recipe:list.html.twig */
class __TwigTemplate_8eb9a06edb719b7bba2d97410b669709da9cfe5d5d4d47db41c49142f238c824 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyRecipesDosBundle:Recipe:list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_75efa9e55c7d65a9d6f5e48d299ac6702687854acb044b063971f233e9419e84 = $this->env->getExtension("native_profiler");
        $__internal_75efa9e55c7d65a9d6f5e48d299ac6702687854acb044b063971f233e9419e84->enter($__internal_75efa9e55c7d65a9d6f5e48d299ac6702687854acb044b063971f233e9419e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesDosBundle:Recipe:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_75efa9e55c7d65a9d6f5e48d299ac6702687854acb044b063971f233e9419e84->leave($__internal_75efa9e55c7d65a9d6f5e48d299ac6702687854acb044b063971f233e9419e84_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c09fd6ec8643e2f880117eeb69c1c61ff34b7e40767214f80012e52dacdf640 = $this->env->getExtension("native_profiler");
        $__internal_3c09fd6ec8643e2f880117eeb69c1c61ff34b7e40767214f80012e52dacdf640->enter($__internal_3c09fd6ec8643e2f880117eeb69c1c61ff34b7e40767214f80012e52dacdf640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h1>Recetas</h1>
\t<h2>Listado</h2>

\t<ul>
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) ? $context["recipes"] : $this->getContext($context, "recipes")));
        foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
            // line 9
            echo "\t\t\t<li class=\"recipe\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("recipes_show", array("recipe_url" => $this->getAttribute($context["recipe"], "url", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["recipe"], "name", array()), "html", null, true);
            echo ".</a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t</ul>

\t";
        // line 13
        $this->loadTemplate("::footer.html.twig", "MyRecipesDosBundle:Recipe:list.html.twig", 13)->display($context);
        
        $__internal_3c09fd6ec8643e2f880117eeb69c1c61ff34b7e40767214f80012e52dacdf640->leave($__internal_3c09fd6ec8643e2f880117eeb69c1c61ff34b7e40767214f80012e52dacdf640_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesDosBundle:Recipe:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  61 => 11,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<h1>Recetas</h1>*/
/* 	<h2>Listado</h2>*/
/* */
/* 	<ul>*/
/* 		{% for recipe in recipes %}*/
/* 			<li class="recipe"><a href="{{ url('recipes_show', {recipe_url: recipe.url}) }}">{{ recipe.name }}.</a></li>*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* */
/* 	{% include '::footer.html.twig' %}*/
/* {% endblock %}*/
