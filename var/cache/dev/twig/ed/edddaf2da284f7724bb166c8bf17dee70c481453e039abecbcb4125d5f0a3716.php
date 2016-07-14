<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_637c661c1a0b035da2ebe833c07d9a3953d39e40572904f185ec28d4869a3029 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9058e92e91d5ff2ec2390e675ec5341d2b1b48ca3e1cb4924428e38691fdcb2 = $this->env->getExtension("native_profiler");
        $__internal_d9058e92e91d5ff2ec2390e675ec5341d2b1b48ca3e1cb4924428e38691fdcb2->enter($__internal_d9058e92e91d5ff2ec2390e675ec5341d2b1b48ca3e1cb4924428e38691fdcb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9058e92e91d5ff2ec2390e675ec5341d2b1b48ca3e1cb4924428e38691fdcb2->leave($__internal_d9058e92e91d5ff2ec2390e675ec5341d2b1b48ca3e1cb4924428e38691fdcb2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0080cd2820d38168163befa11ff5ca6a28efe45c156ee59cacda6e10a8cf0922 = $this->env->getExtension("native_profiler");
        $__internal_0080cd2820d38168163befa11ff5ca6a28efe45c156ee59cacda6e10a8cf0922->enter($__internal_0080cd2820d38168163befa11ff5ca6a28efe45c156ee59cacda6e10a8cf0922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0080cd2820d38168163befa11ff5ca6a28efe45c156ee59cacda6e10a8cf0922->leave($__internal_0080cd2820d38168163befa11ff5ca6a28efe45c156ee59cacda6e10a8cf0922_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a02c9f016837fc083947000bc5153cc84c39e475f23fec777e8888559c6e294a = $this->env->getExtension("native_profiler");
        $__internal_a02c9f016837fc083947000bc5153cc84c39e475f23fec777e8888559c6e294a->enter($__internal_a02c9f016837fc083947000bc5153cc84c39e475f23fec777e8888559c6e294a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a02c9f016837fc083947000bc5153cc84c39e475f23fec777e8888559c6e294a->leave($__internal_a02c9f016837fc083947000bc5153cc84c39e475f23fec777e8888559c6e294a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6f99b2b9864094159b0d00711c7c6398f083b59f03096c810aafc1e7af2dae8 = $this->env->getExtension("native_profiler");
        $__internal_e6f99b2b9864094159b0d00711c7c6398f083b59f03096c810aafc1e7af2dae8->enter($__internal_e6f99b2b9864094159b0d00711c7c6398f083b59f03096c810aafc1e7af2dae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e6f99b2b9864094159b0d00711c7c6398f083b59f03096c810aafc1e7af2dae8->leave($__internal_e6f99b2b9864094159b0d00711c7c6398f083b59f03096c810aafc1e7af2dae8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
