<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_d1b77f32e160b0386b78a934986aad5838d074d1d752ea27cf08330ea4dd885c extends Twig_Template
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
        $__internal_43c3a17f3f88e80ad383e132d3b4f81243fba818e5d989776afed1b9bc3a5afc = $this->env->getExtension("native_profiler");
        $__internal_43c3a17f3f88e80ad383e132d3b4f81243fba818e5d989776afed1b9bc3a5afc->enter($__internal_43c3a17f3f88e80ad383e132d3b4f81243fba818e5d989776afed1b9bc3a5afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_43c3a17f3f88e80ad383e132d3b4f81243fba818e5d989776afed1b9bc3a5afc->leave($__internal_43c3a17f3f88e80ad383e132d3b4f81243fba818e5d989776afed1b9bc3a5afc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
