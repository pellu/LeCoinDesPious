<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_1f7f565f8f7f2a5e71294259ef4509f43894c58bf5a9428857c69590476cbcac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_e48d999da8e7c35ae51bf1eede181f70dc31ca580a4dcb9987543f67d0c5cdf0 = $this->env->getExtension("native_profiler");
        $__internal_e48d999da8e7c35ae51bf1eede181f70dc31ca580a4dcb9987543f67d0c5cdf0->enter($__internal_e48d999da8e7c35ae51bf1eede181f70dc31ca580a4dcb9987543f67d0c5cdf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e48d999da8e7c35ae51bf1eede181f70dc31ca580a4dcb9987543f67d0c5cdf0->leave($__internal_e48d999da8e7c35ae51bf1eede181f70dc31ca580a4dcb9987543f67d0c5cdf0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ecc99b0bb7c2aa96c919fdc6508b5ed6c6e8f1a35dc0d9c0036de667e1a17b15 = $this->env->getExtension("native_profiler");
        $__internal_ecc99b0bb7c2aa96c919fdc6508b5ed6c6e8f1a35dc0d9c0036de667e1a17b15->enter($__internal_ecc99b0bb7c2aa96c919fdc6508b5ed6c6e8f1a35dc0d9c0036de667e1a17b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ecc99b0bb7c2aa96c919fdc6508b5ed6c6e8f1a35dc0d9c0036de667e1a17b15->leave($__internal_ecc99b0bb7c2aa96c919fdc6508b5ed6c6e8f1a35dc0d9c0036de667e1a17b15_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2d1eaa67ef6976b65bc280796f714868f021bd59bdf54ce96de42f3fcac85da8 = $this->env->getExtension("native_profiler");
        $__internal_2d1eaa67ef6976b65bc280796f714868f021bd59bdf54ce96de42f3fcac85da8->enter($__internal_2d1eaa67ef6976b65bc280796f714868f021bd59bdf54ce96de42f3fcac85da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_2d1eaa67ef6976b65bc280796f714868f021bd59bdf54ce96de42f3fcac85da8->leave($__internal_2d1eaa67ef6976b65bc280796f714868f021bd59bdf54ce96de42f3fcac85da8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_89a072952b065c33ca4d1d04e5973e808bda92323304c9330289fc91f8cec454 = $this->env->getExtension("native_profiler");
        $__internal_89a072952b065c33ca4d1d04e5973e808bda92323304c9330289fc91f8cec454->enter($__internal_89a072952b065c33ca4d1d04e5973e808bda92323304c9330289fc91f8cec454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_89a072952b065c33ca4d1d04e5973e808bda92323304c9330289fc91f8cec454->leave($__internal_89a072952b065c33ca4d1d04e5973e808bda92323304c9330289fc91f8cec454_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
