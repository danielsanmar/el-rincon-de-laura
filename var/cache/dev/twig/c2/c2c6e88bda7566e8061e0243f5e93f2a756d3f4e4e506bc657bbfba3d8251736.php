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
        $__internal_23a1eca5f32146ac8343b369216eac7d63c281b3b4c36261abc15bc5df937ebe = $this->env->getExtension("native_profiler");
        $__internal_23a1eca5f32146ac8343b369216eac7d63c281b3b4c36261abc15bc5df937ebe->enter($__internal_23a1eca5f32146ac8343b369216eac7d63c281b3b4c36261abc15bc5df937ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesDosBundle:Recipe:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23a1eca5f32146ac8343b369216eac7d63c281b3b4c36261abc15bc5df937ebe->leave($__internal_23a1eca5f32146ac8343b369216eac7d63c281b3b4c36261abc15bc5df937ebe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_960019d4fee2cad00f48d1619de88ed55eb29ba2deacef12c456e18be331c92d = $this->env->getExtension("native_profiler");
        $__internal_960019d4fee2cad00f48d1619de88ed55eb29ba2deacef12c456e18be331c92d->enter($__internal_960019d4fee2cad00f48d1619de88ed55eb29ba2deacef12c456e18be331c92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo ".</a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("recipes_update", array("recipe_id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\"><small>(editar)</small></a> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("recipes_delete", array("recipe_id" => $this->getAttribute($context["recipe"], "id", array()))), "html", null, true);
            echo "\"><small>(eliminar)</small></a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t</ul>

\t<br>
\t<br>

\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("recipes_create");
        echo "\">crear receta.</a>

\t<br>
\t<br>

\t";
        // line 21
        $this->loadTemplate("::footer.html.twig", "MyRecipesDosBundle:Recipe:list.html.twig", 21)->display($context);
        
        $__internal_960019d4fee2cad00f48d1619de88ed55eb29ba2deacef12c456e18be331c92d->leave($__internal_960019d4fee2cad00f48d1619de88ed55eb29ba2deacef12c456e18be331c92d_prof);

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
        return array (  80 => 21,  72 => 16,  65 => 11,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
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
/* 			<li class="recipe"><a href="{{ url('recipes_show', {recipe_url: recipe.url}) }}">{{ recipe.name }}.</a> <a href="{{ url('recipes_update', {recipe_id: recipe.id}) }}"><small>(editar)</small></a> <a href="{{ url('recipes_delete', {recipe_id: recipe.id}) }}"><small>(eliminar)</small></a></li>*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* */
/* 	<br>*/
/* 	<br>*/
/* */
/* 	<a href="{{ url('recipes_create') }}">crear receta.</a>*/
/* */
/* 	<br>*/
/* 	<br>*/
/* */
/* 	{% include '::footer.html.twig' %}*/
/* {% endblock %}*/
