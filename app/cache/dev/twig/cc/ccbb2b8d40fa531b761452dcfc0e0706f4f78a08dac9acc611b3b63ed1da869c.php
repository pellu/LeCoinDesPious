<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_064c18bac2d34edd057f095363b664e4d6fbd2d1c6d69c4ddc5b9d0cedc59326 extends Twig_Template
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
        $__internal_925c67ea4fac1d916c39d4d1721b349fd23424d022d1fa33b7b16c2fc2872cfb = $this->env->getExtension("native_profiler");
        $__internal_925c67ea4fac1d916c39d4d1721b349fd23424d022d1fa33b7b16c2fc2872cfb->enter($__internal_925c67ea4fac1d916c39d4d1721b349fd23424d022d1fa33b7b16c2fc2872cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_925c67ea4fac1d916c39d4d1721b349fd23424d022d1fa33b7b16c2fc2872cfb->leave($__internal_925c67ea4fac1d916c39d4d1721b349fd23424d022d1fa33b7b16c2fc2872cfb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_12e5f368a2f2cc8efdc50e04bdb7280c87fdbfb2950c8b8a6c17b23236f6618a = $this->env->getExtension("native_profiler");
        $__internal_12e5f368a2f2cc8efdc50e04bdb7280c87fdbfb2950c8b8a6c17b23236f6618a->enter($__internal_12e5f368a2f2cc8efdc50e04bdb7280c87fdbfb2950c8b8a6c17b23236f6618a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_12e5f368a2f2cc8efdc50e04bdb7280c87fdbfb2950c8b8a6c17b23236f6618a->leave($__internal_12e5f368a2f2cc8efdc50e04bdb7280c87fdbfb2950c8b8a6c17b23236f6618a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0a148fe27a1c1e83a526935c6402fb4119c8f86bf37acba3a43c2a5d73f6587f = $this->env->getExtension("native_profiler");
        $__internal_0a148fe27a1c1e83a526935c6402fb4119c8f86bf37acba3a43c2a5d73f6587f->enter($__internal_0a148fe27a1c1e83a526935c6402fb4119c8f86bf37acba3a43c2a5d73f6587f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0a148fe27a1c1e83a526935c6402fb4119c8f86bf37acba3a43c2a5d73f6587f->leave($__internal_0a148fe27a1c1e83a526935c6402fb4119c8f86bf37acba3a43c2a5d73f6587f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a891899e96cc5a5a9bd7cf9d8796ca678edbe722c554f5d469c48122c0d20560 = $this->env->getExtension("native_profiler");
        $__internal_a891899e96cc5a5a9bd7cf9d8796ca678edbe722c554f5d469c48122c0d20560->enter($__internal_a891899e96cc5a5a9bd7cf9d8796ca678edbe722c554f5d469c48122c0d20560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a891899e96cc5a5a9bd7cf9d8796ca678edbe722c554f5d469c48122c0d20560->leave($__internal_a891899e96cc5a5a9bd7cf9d8796ca678edbe722c554f5d469c48122c0d20560_prof);

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
