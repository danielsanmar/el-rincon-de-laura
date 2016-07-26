<?php

/* MyRecipesDosBundle:Recipe:update.html.twig */
class __TwigTemplate_30d37dd48b503a9cafdfce5425f824348328235bce644847da910155b8975144 extends Twig_Template
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
        $__internal_88b39bbc090307681afd369d5c554cb13bebabc386f4769316c8290c19c56b9c = $this->env->getExtension("native_profiler");
        $__internal_88b39bbc090307681afd369d5c554cb13bebabc386f4769316c8290c19c56b9c->enter($__internal_88b39bbc090307681afd369d5c554cb13bebabc386f4769316c8290c19c56b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesDosBundle:Recipe:update.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>Bienvenido.</title>
\t</head>
\t<body>
\t\tModificando la receta: ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["recipe_name"]) ? $context["recipe_name"] : $this->getContext($context, "recipe_name")), "html", null, true);
        echo "

\t\t<br>
\t\t<br>

\t\t<a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getUrl("recipes_list");
        echo "\">volver al listado.</a>


\t</body>
</html>";
        
        $__internal_88b39bbc090307681afd369d5c554cb13bebabc386f4769316c8290c19c56b9c->leave($__internal_88b39bbc090307681afd369d5c554cb13bebabc386f4769316c8290c19c56b9c_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesDosBundle:Recipe:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 7,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<title>Bienvenido.</title>*/
/* 	</head>*/
/* 	<body>*/
/* 		Modificando la receta: {{ recipe_name }}*/
/* */
/* 		<br>*/
/* 		<br>*/
/* */
/* 		<a href="{{ url('recipes_list') }}">volver al listado.</a>*/
/* */
/* */
/* 	</body>*/
/* </html>*/
