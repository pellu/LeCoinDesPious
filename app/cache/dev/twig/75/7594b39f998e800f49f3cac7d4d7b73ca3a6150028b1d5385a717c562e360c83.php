<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_45a3f8779a53107c743922091aef1be74c7ed2e3eecd618be62c0d6f644cb570 extends Twig_Template
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
        $__internal_3676417653edba5027d2ecb6ca1160808a7e4989dfb3cdea0a32608bc719d803 = $this->env->getExtension("native_profiler");
        $__internal_3676417653edba5027d2ecb6ca1160808a7e4989dfb3cdea0a32608bc719d803->enter($__internal_3676417653edba5027d2ecb6ca1160808a7e4989dfb3cdea0a32608bc719d803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3676417653edba5027d2ecb6ca1160808a7e4989dfb3cdea0a32608bc719d803->leave($__internal_3676417653edba5027d2ecb6ca1160808a7e4989dfb3cdea0a32608bc719d803_prof);

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
