<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_cb9214cf64ade1cbe247bf74850a499473a6d38922ead6c03818355f6028d24d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_9cca3c81d80a54be4ab26f9585b4364dc07c15042741a5b9de1176976e670092 = $this->env->getExtension("native_profiler");
        $__internal_9cca3c81d80a54be4ab26f9585b4364dc07c15042741a5b9de1176976e670092->enter($__internal_9cca3c81d80a54be4ab26f9585b4364dc07c15042741a5b9de1176976e670092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cca3c81d80a54be4ab26f9585b4364dc07c15042741a5b9de1176976e670092->leave($__internal_9cca3c81d80a54be4ab26f9585b4364dc07c15042741a5b9de1176976e670092_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2874bea9e3434a1e270f6c78d3a782f44741506478377edd8ba1c150ee1e1116 = $this->env->getExtension("native_profiler");
        $__internal_2874bea9e3434a1e270f6c78d3a782f44741506478377edd8ba1c150ee1e1116->enter($__internal_2874bea9e3434a1e270f6c78d3a782f44741506478377edd8ba1c150ee1e1116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2874bea9e3434a1e270f6c78d3a782f44741506478377edd8ba1c150ee1e1116->leave($__internal_2874bea9e3434a1e270f6c78d3a782f44741506478377edd8ba1c150ee1e1116_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3eb82bf99382dc74c36f381b11d8ad76acfa30518cde7acdf5ceb3fbeadfb680 = $this->env->getExtension("native_profiler");
        $__internal_3eb82bf99382dc74c36f381b11d8ad76acfa30518cde7acdf5ceb3fbeadfb680->enter($__internal_3eb82bf99382dc74c36f381b11d8ad76acfa30518cde7acdf5ceb3fbeadfb680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3eb82bf99382dc74c36f381b11d8ad76acfa30518cde7acdf5ceb3fbeadfb680->leave($__internal_3eb82bf99382dc74c36f381b11d8ad76acfa30518cde7acdf5ceb3fbeadfb680_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e084459519426ce9388cecfb38e726adcab10e72202148b6396da94ab04190e = $this->env->getExtension("native_profiler");
        $__internal_4e084459519426ce9388cecfb38e726adcab10e72202148b6396da94ab04190e->enter($__internal_4e084459519426ce9388cecfb38e726adcab10e72202148b6396da94ab04190e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e084459519426ce9388cecfb38e726adcab10e72202148b6396da94ab04190e->leave($__internal_4e084459519426ce9388cecfb38e726adcab10e72202148b6396da94ab04190e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
