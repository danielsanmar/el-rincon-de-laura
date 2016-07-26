<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_1463b212071970c68d4a793120c87d971df3c4da3ad3a37ba0b93b0409487352 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecbe8404646a5bc2ddbe7712e841f3d54ad750f9cb1fa83b68f58191d07c3de8 = $this->env->getExtension("native_profiler");
        $__internal_ecbe8404646a5bc2ddbe7712e841f3d54ad750f9cb1fa83b68f58191d07c3de8->enter($__internal_ecbe8404646a5bc2ddbe7712e841f3d54ad750f9cb1fa83b68f58191d07c3de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecbe8404646a5bc2ddbe7712e841f3d54ad750f9cb1fa83b68f58191d07c3de8->leave($__internal_ecbe8404646a5bc2ddbe7712e841f3d54ad750f9cb1fa83b68f58191d07c3de8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7936173b7fa22a4a17e51b5aab9ab31ead8abc0f0c9d199d0e7156c6512726e3 = $this->env->getExtension("native_profiler");
        $__internal_7936173b7fa22a4a17e51b5aab9ab31ead8abc0f0c9d199d0e7156c6512726e3->enter($__internal_7936173b7fa22a4a17e51b5aab9ab31ead8abc0f0c9d199d0e7156c6512726e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7936173b7fa22a4a17e51b5aab9ab31ead8abc0f0c9d199d0e7156c6512726e3->leave($__internal_7936173b7fa22a4a17e51b5aab9ab31ead8abc0f0c9d199d0e7156c6512726e3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8acbeb9a72482cb5700c1d7349223572f8fe5896fe0931baf5191b4ac21538bc = $this->env->getExtension("native_profiler");
        $__internal_8acbeb9a72482cb5700c1d7349223572f8fe5896fe0931baf5191b4ac21538bc->enter($__internal_8acbeb9a72482cb5700c1d7349223572f8fe5896fe0931baf5191b4ac21538bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8acbeb9a72482cb5700c1d7349223572f8fe5896fe0931baf5191b4ac21538bc->leave($__internal_8acbeb9a72482cb5700c1d7349223572f8fe5896fe0931baf5191b4ac21538bc_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae87b0e9723de3fc291388df42dcceda6bb80516a8ac4095679cb6ae5631e2bf = $this->env->getExtension("native_profiler");
        $__internal_ae87b0e9723de3fc291388df42dcceda6bb80516a8ac4095679cb6ae5631e2bf->enter($__internal_ae87b0e9723de3fc291388df42dcceda6bb80516a8ac4095679cb6ae5631e2bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ae87b0e9723de3fc291388df42dcceda6bb80516a8ac4095679cb6ae5631e2bf->leave($__internal_ae87b0e9723de3fc291388df42dcceda6bb80516a8ac4095679cb6ae5631e2bf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
