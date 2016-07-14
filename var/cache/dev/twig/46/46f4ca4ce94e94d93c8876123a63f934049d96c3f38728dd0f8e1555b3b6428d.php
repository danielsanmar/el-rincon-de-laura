<?php

/* ::footer.html.twig */
class __TwigTemplate_608358261152d1a8d1caeea251cc939aa271bc3b72ed31154076490ec4dfb2da extends Twig_Template
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
        $__internal_f83bdb8d76caad94471cc6c50832b6788dc5ba2bd88841943c88151b5abb1131 = $this->env->getExtension("native_profiler");
        $__internal_f83bdb8d76caad94471cc6c50832b6788dc5ba2bd88841943c88151b5abb1131->enter($__internal_f83bdb8d76caad94471cc6c50832b6788dc5ba2bd88841943c88151b5abb1131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::footer.html.twig"));

        // line 1
        echo "<footer>
\tContacto: ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["contact_email"]) ? $context["contact_email"] : $this->getContext($context, "contact_email")), "html", null, true);
        echo "
</footer>";
        
        $__internal_f83bdb8d76caad94471cc6c50832b6788dc5ba2bd88841943c88151b5abb1131->leave($__internal_f83bdb8d76caad94471cc6c50832b6788dc5ba2bd88841943c88151b5abb1131_prof);

    }

    public function getTemplateName()
    {
        return "::footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <footer>*/
/* 	Contacto: {{ contact_email }}*/
/* </footer>*/
