<?php

/* Recipe/create.html.twig */
class __TwigTemplate_ae738efd0d29144886bd3647188747127ddd0a9b7865b6bb59e1599192f79f92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "Recipe/create.html.twig", 1);
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
        $__internal_ff76b17977d2757d93eb6b3ce4eff029227ed97bfdb99a49de04c509375b159d = $this->env->getExtension("native_profiler");
        $__internal_ff76b17977d2757d93eb6b3ce4eff029227ed97bfdb99a49de04c509375b159d->enter($__internal_ff76b17977d2757d93eb6b3ce4eff029227ed97bfdb99a49de04c509375b159d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Recipe/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff76b17977d2757d93eb6b3ce4eff029227ed97bfdb99a49de04c509375b159d->leave($__internal_ff76b17977d2757d93eb6b3ce4eff029227ed97bfdb99a49de04c509375b159d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fab72d88a237f851f6794b1f4dfea8a97b6bb0a2a7283aba26f0b4e5e52110ef = $this->env->getExtension("native_profiler");
        $__internal_fab72d88a237f851f6794b1f4dfea8a97b6bb0a2a7283aba26f0b4e5e52110ef->enter($__internal_fab72d88a237f851f6794b1f4dfea8a97b6bb0a2a7283aba26f0b4e5e52110ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Create author";
        
        $__internal_fab72d88a237f851f6794b1f4dfea8a97b6bb0a2a7283aba26f0b4e5e52110ef->leave($__internal_fab72d88a237f851f6794b1f4dfea8a97b6bb0a2a7283aba26f0b4e5e52110ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6e8e747578384f09a7ce987ecc01856d388abef9d86b3081c600ed69efd6c7b = $this->env->getExtension("native_profiler");
        $__internal_a6e8e747578384f09a7ce987ecc01856d388abef9d86b3081c600ed69efd6c7b->enter($__internal_a6e8e747578384f09a7ce987ecc01856d388abef9d86b3081c600ed69efd6c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "recipe-create")));
        echo "
\t";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
\t<ul>

\t\t<li>
\t\t\t";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'label');
        echo ":
\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'errors');
        echo "
\t\t\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget');
        echo "
\t\t</li>

\t\t<li>
\t\t\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo ":
\t\t\t";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "
\t\t\t";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
\t\t</li>


\t\t<li>
\t\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "difficulty", array()), 'label');
        echo ":
\t\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "difficulty", array()), 'errors');
        echo "
\t\t\t";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "difficulty", array()), 'widget');
        echo "
\t\t</li>


\t\t<li>
\t\t\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo ":
\t\t\t";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
\t\t\t";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
\t\t</li>

\t\t<li>
\t\t\t";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget');
        echo "
\t\t</li>

\t</ul>

\t";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

\t<br>
\t<br>
\t
\t<a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getUrl("recipes_show");
        echo "\">ver listado.</a>

\t<br>
\t<br>
\t
\t";
        // line 52
        $this->loadTemplate("::footer.html.twig", "Recipe/create.html.twig", 52)->display($context);
        // line 53
        echo "
";
        
        $__internal_a6e8e747578384f09a7ce987ecc01856d388abef9d86b3081c600ed69efd6c7b->leave($__internal_a6e8e747578384f09a7ce987ecc01856d388abef9d86b3081c600ed69efd6c7b_prof);

    }

    public function getTemplateName()
    {
        return "Recipe/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 53,  151 => 52,  143 => 47,  135 => 42,  127 => 37,  120 => 33,  116 => 32,  112 => 31,  104 => 26,  100 => 25,  96 => 24,  88 => 19,  84 => 18,  80 => 17,  73 => 13,  69 => 12,  65 => 11,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}Create author{% endblock %}*/
/* */
/* {% block body %}*/
/* 	{{ form_start(form, {'attr' : { 'id' : 'recipe-create'}}) }}*/
/* 	{{ form_errors(form) }}*/
/* 	<ul>*/
/* */
/* 		<li>*/
/* 			{{ form_label(form.url) }}:*/
/* 			{{ form_errors(form.url) }}*/
/* 			{{ form_widget(form.url) }}*/
/* 		</li>*/
/* */
/* 		<li>*/
/* 			{{ form_label(form.name) }}:*/
/* 			{{ form_errors(form.name) }}*/
/* 			{{ form_widget(form.name) }}*/
/* 		</li>*/
/* */
/* */
/* 		<li>*/
/* 			{{ form_label(form.difficulty) }}:*/
/* 			{{ form_errors(form.difficulty) }}*/
/* 			{{ form_widget(form.difficulty) }}*/
/* 		</li>*/
/* */
/* */
/* 		<li>*/
/* 			{{ form_label(form.description) }}:*/
/* 			{{ form_errors(form.description) }}*/
/* 			{{ form_widget(form.description) }}*/
/* 		</li>*/
/* */
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
/* 	<a href="{{ url('recipes_show') }}">ver listado.</a>*/
/* */
/* 	<br>*/
/* 	<br>*/
/* 	*/
/* 	{% include '::footer.html.twig' %}*/
/* */
/* {% endblock %}*/
