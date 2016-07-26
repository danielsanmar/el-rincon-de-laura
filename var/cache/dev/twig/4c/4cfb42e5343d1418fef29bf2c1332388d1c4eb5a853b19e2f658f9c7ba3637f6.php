<?php

/* Author/create.html.twig */
class __TwigTemplate_b43c6b259e6fae65ae0bf862a33a4b1776f7e59a95f58519a837d36ca6f2f400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "Author/create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67f5a776ca53adbf8a1c1c70e3d808040ec93a8f8a5a3f84afc74f52ce65ad53 = $this->env->getExtension("native_profiler");
        $__internal_67f5a776ca53adbf8a1c1c70e3d808040ec93a8f8a5a3f84afc74f52ce65ad53->enter($__internal_67f5a776ca53adbf8a1c1c70e3d808040ec93a8f8a5a3f84afc74f52ce65ad53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Author/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67f5a776ca53adbf8a1c1c70e3d808040ec93a8f8a5a3f84afc74f52ce65ad53->leave($__internal_67f5a776ca53adbf8a1c1c70e3d808040ec93a8f8a5a3f84afc74f52ce65ad53_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f6f2a4473540c8141cd8147900e373bd589e61b5a5c2c7f161c1fd571deccfb = $this->env->getExtension("native_profiler");
        $__internal_0f6f2a4473540c8141cd8147900e373bd589e61b5a5c2c7f161c1fd571deccfb->enter($__internal_0f6f2a4473540c8141cd8147900e373bd589e61b5a5c2c7f161c1fd571deccfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Create author";
        
        $__internal_0f6f2a4473540c8141cd8147900e373bd589e61b5a5c2c7f161c1fd571deccfb->leave($__internal_0f6f2a4473540c8141cd8147900e373bd589e61b5a5c2c7f161c1fd571deccfb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b12412958f0013ff698c2769343f3efca587124f2207e53a17d2fe01d8b75bcd = $this->env->getExtension("native_profiler");
        $__internal_b12412958f0013ff698c2769343f3efca587124f2207e53a17d2fe01d8b75bcd->enter($__internal_b12412958f0013ff698c2769343f3efca587124f2207e53a17d2fe01d8b75bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "author-create")));
        echo "
\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t<ul>

\t\t<li>
\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo ":
\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
\t\t</li>
\t\t
\t\t<li>
\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surname", array()), 'label');
        echo ":\t
\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surname", array()), 'errors');
        echo "
\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "surname", array()), 'widget');
        echo "
\t\t</li>
\t\t
\t\t<li>
\t\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
\t\t</li>

\t</ul>

\t";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t<br>
\t<br>
\t
\t<a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("authors_list");
        echo "\">ver listado.</a>
\t
\t<br>
\t<br>
\t
\t";
        // line 38
        $this->loadTemplate("::footer.html.twig", "Author/create.html.twig", 38)->display($context);
        // line 39
        echo "
";
        
        $__internal_b12412958f0013ff698c2769343f3efca587124f2207e53a17d2fe01d8b75bcd->leave($__internal_b12412958f0013ff698c2769343f3efca587124f2207e53a17d2fe01d8b75bcd_prof);

    }

    public function getTemplateName()
    {
        return "Author/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 39,  119 => 38,  111 => 33,  103 => 28,  95 => 23,  88 => 19,  84 => 18,  80 => 17,  73 => 13,  69 => 12,  65 => 11,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}Create author{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ form_start(form, {'attr' : { 'id' : 'author-create'}}) }}*/
/* 	{{ form_errors(form) }}*/
/* 	<ul>*/
/* */
/* 		<li>*/
/* 			{{ form_label(form.name) }}:*/
/* 			{{ form_errors(form.name) }}*/
/* 			{{ form_widget(form.name) }}*/
/* 		</li>*/
/* 		*/
/* 		<li>*/
/* 			{{ form_label(form.surname) }}:	*/
/* 			{{ form_errors(form.surname) }}*/
/* 			{{ form_widget(form.surname) }}*/
/* 		</li>*/
/* 		*/
/* 		<li>*/
/* 			{{ form_widget(form.save) }}*/
/* 		</li>*/
/* */
/* 	</ul>*/
/* */
/* 	{{ form_end(form)}}*/
/* */
/* 	<br>*/
/* 	<br>*/
/* 	*/
/* 	<a href="{{ url('authors_list') }}">ver listado.</a>*/
/* 	*/
/* 	<br>*/
/* 	<br>*/
/* 	*/
/* 	{% include '::footer.html.twig' %}*/
/* */
/* {% endblock %}*/
