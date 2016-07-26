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
        $__internal_18e5e5260f1c4ec5f4ff5a5ed67828cc6d1a3b02ead71416c897245ac1ced059 = $this->env->getExtension("native_profiler");
        $__internal_18e5e5260f1c4ec5f4ff5a5ed67828cc6d1a3b02ead71416c897245ac1ced059->enter($__internal_18e5e5260f1c4ec5f4ff5a5ed67828cc6d1a3b02ead71416c897245ac1ced059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_18e5e5260f1c4ec5f4ff5a5ed67828cc6d1a3b02ead71416c897245ac1ced059->leave($__internal_18e5e5260f1c4ec5f4ff5a5ed67828cc6d1a3b02ead71416c897245ac1ced059_prof);

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
