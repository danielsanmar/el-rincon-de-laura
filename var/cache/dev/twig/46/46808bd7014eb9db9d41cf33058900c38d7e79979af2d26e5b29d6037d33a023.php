<?php

/* MyRecipesDosBundle:Author:list.html.twig */
class __TwigTemplate_529e11d785e05cd7b9fbc204abecff9174dcd6cf5367c6a8ffc276a7860d2817 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "MyRecipesDosBundle:Author:list.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3958aad3f3405180a3711821af0eed233f8c9df9c95d086e19669ce2cccb75ca = $this->env->getExtension("native_profiler");
        $__internal_3958aad3f3405180a3711821af0eed233f8c9df9c95d086e19669ce2cccb75ca->enter($__internal_3958aad3f3405180a3711821af0eed233f8c9df9c95d086e19669ce2cccb75ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MyRecipesDosBundle:Author:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3958aad3f3405180a3711821af0eed233f8c9df9c95d086e19669ce2cccb75ca->leave($__internal_3958aad3f3405180a3711821af0eed233f8c9df9c95d086e19669ce2cccb75ca_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8847c1cfbcc5404d42da213a157bbf08c8628a4ba1db381692c11a7fd6f4a28 = $this->env->getExtension("native_profiler");
        $__internal_d8847c1cfbcc5404d42da213a157bbf08c8628a4ba1db381692c11a7fd6f4a28->enter($__internal_d8847c1cfbcc5404d42da213a157bbf08c8628a4ba1db381692c11a7fd6f4a28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t<h1>Autores</h1>
\t<h2>Listado</h2>

\t<ul>
\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors")));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 9
            echo "\t\t\t<li class=\"author\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "surname", array()), "html", null, true);
            echo ". <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("authors_delete", array("author_id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\"><small>(eliminar)</small></a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t</ul>

\t\t<br>
\t\t<br>

\t\t<a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getUrl("author_create");
        echo "\">crear autor.</a>

\t\t<br>
\t\t<br>

\t";
        // line 21
        $this->loadTemplate("::footer.html.twig", "MyRecipesDosBundle:Author:list.html.twig", 21)->display($context);
        
        $__internal_d8847c1cfbcc5404d42da213a157bbf08c8628a4ba1db381692c11a7fd6f4a28->leave($__internal_d8847c1cfbcc5404d42da213a157bbf08c8628a4ba1db381692c11a7fd6f4a28_prof);

    }

    public function getTemplateName()
    {
        return "MyRecipesDosBundle:Author:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 21,  70 => 16,  63 => 11,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	<h1>Autores</h1>*/
/* 	<h2>Listado</h2>*/
/* */
/* 	<ul>*/
/* 		{% for author in authors %}*/
/* 			<li class="author">{{ author.name }} {{ author.surname }}. <a href="{{ url('authors_delete', {author_id: author.id}) }}"><small>(eliminar)</small></a></li>*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* */
/* 		<br>*/
/* 		<br>*/
/* */
/* 		<a href="{{ url('author_create') }}">crear autor.</a>*/
/* */
/* 		<br>*/
/* 		<br>*/
/* */
/* 	{% include '::footer.html.twig' %}*/
/* {% endblock %}*/
