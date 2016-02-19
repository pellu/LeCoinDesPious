<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_3c6dfb2275cab54d392500660164de9f2bfc3504b5328becf0d6318c80b0a826 extends Twig_Template
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
        $__internal_fbd74d80c03f8bc80f55f2e7c2b58b325b8ec8905289ea69fa98ef15770ea7e6 = $this->env->getExtension("native_profiler");
        $__internal_fbd74d80c03f8bc80f55f2e7c2b58b325b8ec8905289ea69fa98ef15770ea7e6->enter($__internal_fbd74d80c03f8bc80f55f2e7c2b58b325b8ec8905289ea69fa98ef15770ea7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_fbd74d80c03f8bc80f55f2e7c2b58b325b8ec8905289ea69fa98ef15770ea7e6->leave($__internal_fbd74d80c03f8bc80f55f2e7c2b58b325b8ec8905289ea69fa98ef15770ea7e6_prof);

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
