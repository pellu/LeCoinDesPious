<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0a6602b5b9515bf7cfe709295afa577740681f3c9934f53536d2c996792982b8 extends Twig_Template
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
        $__internal_925c16529b2c0d0b3f1d648bd4932dc24288d961bfbfc35fdbbe97d8192c8e00 = $this->env->getExtension("native_profiler");
        $__internal_925c16529b2c0d0b3f1d648bd4932dc24288d961bfbfc35fdbbe97d8192c8e00->enter($__internal_925c16529b2c0d0b3f1d648bd4932dc24288d961bfbfc35fdbbe97d8192c8e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_925c16529b2c0d0b3f1d648bd4932dc24288d961bfbfc35fdbbe97d8192c8e00->leave($__internal_925c16529b2c0d0b3f1d648bd4932dc24288d961bfbfc35fdbbe97d8192c8e00_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_774b95642b288c9fbfdf1d3a51cdd0bc8c91f3b9241f74d5d3c64bb3164c4105 = $this->env->getExtension("native_profiler");
        $__internal_774b95642b288c9fbfdf1d3a51cdd0bc8c91f3b9241f74d5d3c64bb3164c4105->enter($__internal_774b95642b288c9fbfdf1d3a51cdd0bc8c91f3b9241f74d5d3c64bb3164c4105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_774b95642b288c9fbfdf1d3a51cdd0bc8c91f3b9241f74d5d3c64bb3164c4105->leave($__internal_774b95642b288c9fbfdf1d3a51cdd0bc8c91f3b9241f74d5d3c64bb3164c4105_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_30994f2bc7e45503f0726d9f1cc4fd783bbc23076ae9e518610a08ab77ee1da4 = $this->env->getExtension("native_profiler");
        $__internal_30994f2bc7e45503f0726d9f1cc4fd783bbc23076ae9e518610a08ab77ee1da4->enter($__internal_30994f2bc7e45503f0726d9f1cc4fd783bbc23076ae9e518610a08ab77ee1da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_30994f2bc7e45503f0726d9f1cc4fd783bbc23076ae9e518610a08ab77ee1da4->leave($__internal_30994f2bc7e45503f0726d9f1cc4fd783bbc23076ae9e518610a08ab77ee1da4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_06a0c7cd7a62fbffa538f94d28f636d0215a878925308684919bbc1f46d2ee48 = $this->env->getExtension("native_profiler");
        $__internal_06a0c7cd7a62fbffa538f94d28f636d0215a878925308684919bbc1f46d2ee48->enter($__internal_06a0c7cd7a62fbffa538f94d28f636d0215a878925308684919bbc1f46d2ee48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_06a0c7cd7a62fbffa538f94d28f636d0215a878925308684919bbc1f46d2ee48->leave($__internal_06a0c7cd7a62fbffa538f94d28f636d0215a878925308684919bbc1f46d2ee48_prof);

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
