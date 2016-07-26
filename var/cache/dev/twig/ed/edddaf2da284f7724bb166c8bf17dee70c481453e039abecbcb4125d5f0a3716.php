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
        $__internal_04d81ee1e55d27dd37eacbdf5e53434ae64240faf9b854eb6b624d686073d0a4 = $this->env->getExtension("native_profiler");
        $__internal_04d81ee1e55d27dd37eacbdf5e53434ae64240faf9b854eb6b624d686073d0a4->enter($__internal_04d81ee1e55d27dd37eacbdf5e53434ae64240faf9b854eb6b624d686073d0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04d81ee1e55d27dd37eacbdf5e53434ae64240faf9b854eb6b624d686073d0a4->leave($__internal_04d81ee1e55d27dd37eacbdf5e53434ae64240faf9b854eb6b624d686073d0a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2f823a40fe86a5a0a8a38873b2031f1f1f6a788e3426aa9bbc6f70e32338778f = $this->env->getExtension("native_profiler");
        $__internal_2f823a40fe86a5a0a8a38873b2031f1f1f6a788e3426aa9bbc6f70e32338778f->enter($__internal_2f823a40fe86a5a0a8a38873b2031f1f1f6a788e3426aa9bbc6f70e32338778f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2f823a40fe86a5a0a8a38873b2031f1f1f6a788e3426aa9bbc6f70e32338778f->leave($__internal_2f823a40fe86a5a0a8a38873b2031f1f1f6a788e3426aa9bbc6f70e32338778f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dbd183c40740b8287ab9ce010efa7939d13066219176b5f6732d38618989910 = $this->env->getExtension("native_profiler");
        $__internal_3dbd183c40740b8287ab9ce010efa7939d13066219176b5f6732d38618989910->enter($__internal_3dbd183c40740b8287ab9ce010efa7939d13066219176b5f6732d38618989910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3dbd183c40740b8287ab9ce010efa7939d13066219176b5f6732d38618989910->leave($__internal_3dbd183c40740b8287ab9ce010efa7939d13066219176b5f6732d38618989910_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_054bd2ec1ef2c86c249e122027b53f9ac0bb6de2451d193430a206c5b282293c = $this->env->getExtension("native_profiler");
        $__internal_054bd2ec1ef2c86c249e122027b53f9ac0bb6de2451d193430a206c5b282293c->enter($__internal_054bd2ec1ef2c86c249e122027b53f9ac0bb6de2451d193430a206c5b282293c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_054bd2ec1ef2c86c249e122027b53f9ac0bb6de2451d193430a206c5b282293c->leave($__internal_054bd2ec1ef2c86c249e122027b53f9ac0bb6de2451d193430a206c5b282293c_prof);

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
