<?php

/* MyRecipesDosBundle:Recipe:delete.html.twig */
class __TwigTemplate_c8bc258da88272e7c751ceb7dd1f89a707288cdbf3f7cfeca9d6a6682ee512a1 extends Twig_Template
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
        $__internal_7a26fe4f06e7fd6c67509169cb61c5033cd97123044b5d66581949bac4a19efa = $this->env->getExtension("native_profiler");
        $__internal_7a26fe4f06e7fd6c67509169cb61c5033cd97123044b5d66581949bac4a19efa->enter($__internal_7a26fe4f06e7fd6c67509169cb61c5033cd97123044b5d66581949bac4a19efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesDosBundle:Recipe:delete.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<title>Bienvenido.</title>
\t</head>
\t<body>
\t\tEliminando la receta: ";
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
        
        $__internal_7a26fe4f06e7fd6c67509169cb61c5033cd97123044b5d66581949bac4a19efa->leave($__internal_7a26fe4f06e7fd6c67509169cb61c5033cd97123044b5d66581949bac4a19efa_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesDosBundle:Recipe:delete.html.twig";
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
/* 		Eliminando la receta: {{ recipe_name }}*/
/* */
/* 		<br>*/
/* 		<br>*/
/* */
/* 		<a href="{{ url('recipes_list') }}">volver al listado.</a>*/
/* 	</body>*/
/* </html>*/
