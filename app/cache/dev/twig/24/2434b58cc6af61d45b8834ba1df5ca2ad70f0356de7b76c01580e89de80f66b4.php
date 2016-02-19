<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_a176ad6c0971f19dde9dda2ceb51411dd298eeb3375ee1ee2bd60df2f5c8aefb extends Twig_Template
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
        $__internal_b215bbf452eae46d60fca308ffe6ffd4a93bdec759c3ce53a7eacbb81e2f3df6 = $this->env->getExtension("native_profiler");
        $__internal_b215bbf452eae46d60fca308ffe6ffd4a93bdec759c3ce53a7eacbb81e2f3df6->enter($__internal_b215bbf452eae46d60fca308ffe6ffd4a93bdec759c3ce53a7eacbb81e2f3df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b215bbf452eae46d60fca308ffe6ffd4a93bdec759c3ce53a7eacbb81e2f3df6->leave($__internal_b215bbf452eae46d60fca308ffe6ffd4a93bdec759c3ce53a7eacbb81e2f3df6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
