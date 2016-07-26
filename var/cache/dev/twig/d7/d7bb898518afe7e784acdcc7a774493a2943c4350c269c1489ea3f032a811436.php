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
        $__internal_5f4f92263ba116a7f0322757e96c67bd1ee2a7cf2ee95a8b66bc234732ed4818 = $this->env->getExtension("native_profiler");
        $__internal_5f4f92263ba116a7f0322757e96c67bd1ee2a7cf2ee95a8b66bc234732ed4818->enter($__internal_5f4f92263ba116a7f0322757e96c67bd1ee2a7cf2ee95a8b66bc234732ed4818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_5f4f92263ba116a7f0322757e96c67bd1ee2a7cf2ee95a8b66bc234732ed4818->leave($__internal_5f4f92263ba116a7f0322757e96c67bd1ee2a7cf2ee95a8b66bc234732ed4818_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_52c0f591e87a6b41ead05a4d907bb3e1e7fbe9921a26d0b8067586133181c793 = $this->env->getExtension("native_profiler");
        $__internal_52c0f591e87a6b41ead05a4d907bb3e1e7fbe9921a26d0b8067586133181c793->enter($__internal_52c0f591e87a6b41ead05a4d907bb3e1e7fbe9921a26d0b8067586133181c793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_52c0f591e87a6b41ead05a4d907bb3e1e7fbe9921a26d0b8067586133181c793->leave($__internal_52c0f591e87a6b41ead05a4d907bb3e1e7fbe9921a26d0b8067586133181c793_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_499a408a5b6c3d927a1a0f5c3a3844e11aeca945addcbf13fc84b2702a48875a = $this->env->getExtension("native_profiler");
        $__internal_499a408a5b6c3d927a1a0f5c3a3844e11aeca945addcbf13fc84b2702a48875a->enter($__internal_499a408a5b6c3d927a1a0f5c3a3844e11aeca945addcbf13fc84b2702a48875a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_499a408a5b6c3d927a1a0f5c3a3844e11aeca945addcbf13fc84b2702a48875a->leave($__internal_499a408a5b6c3d927a1a0f5c3a3844e11aeca945addcbf13fc84b2702a48875a_prof);

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
