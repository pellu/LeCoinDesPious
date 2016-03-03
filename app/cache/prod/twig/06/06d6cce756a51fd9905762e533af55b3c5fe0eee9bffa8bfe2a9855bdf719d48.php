<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_2b2bf448445b25790d82f8469390f0b542a66d3149395524d1560067fe4356a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1f26bf10cdc4881142bc8fd4364bea59df4b78b459d2fee3b839574f96365a7 = $this->env->getExtension("native_profiler");
        $__internal_e1f26bf10cdc4881142bc8fd4364bea59df4b78b459d2fee3b839574f96365a7->enter($__internal_e1f26bf10cdc4881142bc8fd4364bea59df4b78b459d2fee3b839574f96365a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_e1f26bf10cdc4881142bc8fd4364bea59df4b78b459d2fee3b839574f96365a7->leave($__internal_e1f26bf10cdc4881142bc8fd4364bea59df4b78b459d2fee3b839574f96365a7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
