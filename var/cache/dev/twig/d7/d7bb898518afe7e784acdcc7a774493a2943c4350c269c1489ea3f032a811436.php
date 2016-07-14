<?php

/* ::base.html.twig */
class __TwigTemplate_5a6d5ad0cc4db86c2a5e06663df6a643f9f3f2135b98d762a0423993034b15c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d506d0915842406f90c9f64ac08224a1f71dad73ae1331a604469e7e29ffe03e = $this->env->getExtension("native_profiler");
        $__internal_d506d0915842406f90c9f64ac08224a1f71dad73ae1331a604469e7e29ffe03e->enter($__internal_d506d0915842406f90c9f64ac08224a1f71dad73ae1331a604469e7e29ffe03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->loadTemplate("::header.html.twig", "::base.html.twig", 4)->display($context);
        // line 5
        echo "    </head>
    <body>
        ";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 8
        echo "        
        ";
        // line 9
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("MyRecipesDosBundle:Recipe:lastRecipes"));
        echo "

        ";
        // line 11
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>";
        
        $__internal_d506d0915842406f90c9f64ac08224a1f71dad73ae1331a604469e7e29ffe03e->leave($__internal_d506d0915842406f90c9f64ac08224a1f71dad73ae1331a604469e7e29ffe03e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_e9a45befe60e2c1dcbca57544a019ed3f41dc745beace7cb220cf5894a4ab4a1 = $this->env->getExtension("native_profiler");
        $__internal_e9a45befe60e2c1dcbca57544a019ed3f41dc745beace7cb220cf5894a4ab4a1->enter($__internal_e9a45befe60e2c1dcbca57544a019ed3f41dc745beace7cb220cf5894a4ab4a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e9a45befe60e2c1dcbca57544a019ed3f41dc745beace7cb220cf5894a4ab4a1->leave($__internal_e9a45befe60e2c1dcbca57544a019ed3f41dc745beace7cb220cf5894a4ab4a1_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0c1589548fe3bdf1f099403d6c0a50aa91d82e19514dc8cee06713645038637 = $this->env->getExtension("native_profiler");
        $__internal_a0c1589548fe3bdf1f099403d6c0a50aa91d82e19514dc8cee06713645038637->enter($__internal_a0c1589548fe3bdf1f099403d6c0a50aa91d82e19514dc8cee06713645038637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a0c1589548fe3bdf1f099403d6c0a50aa91d82e19514dc8cee06713645038637->leave($__internal_a0c1589548fe3bdf1f099403d6c0a50aa91d82e19514dc8cee06713645038637_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  55 => 7,  47 => 12,  45 => 11,  40 => 9,  37 => 8,  35 => 7,  31 => 5,  29 => 4,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         {% include '::header.html.twig' %}*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         */
/*         {{ render(controller('MyRecipesDosBundle:Recipe:lastRecipes')) }}*/
/* */
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
