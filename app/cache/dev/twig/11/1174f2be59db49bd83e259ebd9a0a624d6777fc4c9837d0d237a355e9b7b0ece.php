<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_1f712c55f9f6a2b1e1c1b7d7d962681ac260b261f4dc0bf91969b0e54d9d6fd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f7e656fc86849cc3ec948105b63e72ad9ee3310efdf348840b720f65eb2621a0 = $this->env->getExtension("native_profiler");
        $__internal_f7e656fc86849cc3ec948105b63e72ad9ee3310efdf348840b720f65eb2621a0->enter($__internal_f7e656fc86849cc3ec948105b63e72ad9ee3310efdf348840b720f65eb2621a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7e656fc86849cc3ec948105b63e72ad9ee3310efdf348840b720f65eb2621a0->leave($__internal_f7e656fc86849cc3ec948105b63e72ad9ee3310efdf348840b720f65eb2621a0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e217c8116ae39de2d163de8d388057ee8884221c5e4d1ede616fff4f673d917b = $this->env->getExtension("native_profiler");
        $__internal_e217c8116ae39de2d163de8d388057ee8884221c5e4d1ede616fff4f673d917b->enter($__internal_e217c8116ae39de2d163de8d388057ee8884221c5e4d1ede616fff4f673d917b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_e217c8116ae39de2d163de8d388057ee8884221c5e4d1ede616fff4f673d917b->leave($__internal_e217c8116ae39de2d163de8d388057ee8884221c5e4d1ede616fff4f673d917b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_95b28c650fa94abb066efeb5ce3a1c27535d8f6adde1d46621502a2b264b40e3 = $this->env->getExtension("native_profiler");
        $__internal_95b28c650fa94abb066efeb5ce3a1c27535d8f6adde1d46621502a2b264b40e3->enter($__internal_95b28c650fa94abb066efeb5ce3a1c27535d8f6adde1d46621502a2b264b40e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_95b28c650fa94abb066efeb5ce3a1c27535d8f6adde1d46621502a2b264b40e3->leave($__internal_95b28c650fa94abb066efeb5ce3a1c27535d8f6adde1d46621502a2b264b40e3_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84bb857a01a1eb7903379b3f62799027a2ad78ed7bbac4d05c4b09f5483d028c = $this->env->getExtension("native_profiler");
        $__internal_84bb857a01a1eb7903379b3f62799027a2ad78ed7bbac4d05c4b09f5483d028c->enter($__internal_84bb857a01a1eb7903379b3f62799027a2ad78ed7bbac4d05c4b09f5483d028c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_84bb857a01a1eb7903379b3f62799027a2ad78ed7bbac4d05c4b09f5483d028c->leave($__internal_84bb857a01a1eb7903379b3f62799027a2ad78ed7bbac4d05c4b09f5483d028c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
