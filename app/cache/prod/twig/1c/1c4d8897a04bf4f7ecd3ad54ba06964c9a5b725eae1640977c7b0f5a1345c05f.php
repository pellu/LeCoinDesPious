<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_c983a463ffe60e45ca290e9a05680a98cf4113f24695f7506469674b12683220 extends Twig_Template
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
        $__internal_4babd70a8059f0039c016563d76841e9f3f1d3d2a756481e30e32185e12ee849 = $this->env->getExtension("native_profiler");
        $__internal_4babd70a8059f0039c016563d76841e9f3f1d3d2a756481e30e32185e12ee849->enter($__internal_4babd70a8059f0039c016563d76841e9f3f1d3d2a756481e30e32185e12ee849_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_4babd70a8059f0039c016563d76841e9f3f1d3d2a756481e30e32185e12ee849->leave($__internal_4babd70a8059f0039c016563d76841e9f3f1d3d2a756481e30e32185e12ee849_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
