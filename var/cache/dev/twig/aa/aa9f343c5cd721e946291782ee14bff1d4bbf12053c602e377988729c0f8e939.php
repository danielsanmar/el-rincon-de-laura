<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_bb28726abaf2abf6812b37e98006e0efc40309b7e71b87fb0319d886d9eaaa01 extends Twig_Template
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
        $__internal_a72681e2a0f89f7b2875bcb33f20b64a361fdfe4f9c93b26a558a13c710bbfac = $this->env->getExtension("native_profiler");
        $__internal_a72681e2a0f89f7b2875bcb33f20b64a361fdfe4f9c93b26a558a13c710bbfac->enter($__internal_a72681e2a0f89f7b2875bcb33f20b64a361fdfe4f9c93b26a558a13c710bbfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_a72681e2a0f89f7b2875bcb33f20b64a361fdfe4f9c93b26a558a13c710bbfac->leave($__internal_a72681e2a0f89f7b2875bcb33f20b64a361fdfe4f9c93b26a558a13c710bbfac_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
