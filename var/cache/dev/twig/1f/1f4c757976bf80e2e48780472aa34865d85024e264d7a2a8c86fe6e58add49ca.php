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
        $__internal_c8d00ddce53472c7a669b87a9b877039ecf2980052bc886744b0310364430ae5 = $this->env->getExtension("native_profiler");
        $__internal_c8d00ddce53472c7a669b87a9b877039ecf2980052bc886744b0310364430ae5->enter($__internal_c8d00ddce53472c7a669b87a9b877039ecf2980052bc886744b0310364430ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesDosBundle:Recipe:update.html.twig"));

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
\t</body>
</html>";
        
        $__internal_c8d00ddce53472c7a669b87a9b877039ecf2980052bc886744b0310364430ae5->leave($__internal_c8d00ddce53472c7a669b87a9b877039ecf2980052bc886744b0310364430ae5_prof);

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
        return array (  30 => 7,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<title>Bienvenido.</title>*/
/* 	</head>*/
/* 	<body>*/
/* 		Modificando la receta: {{ recipe_name }}*/
/* 	</body>*/
/* </html>*/
