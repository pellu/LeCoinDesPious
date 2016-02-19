<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7f786011806e9c50ae6101868b7f91cc38bc0c31379d522aac3e17f6edea2119 extends Twig_Template
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
        $__internal_7e3b815e53d1234e806e84a3aed9695cff41f58e2b52eda3a4adaf01d98a9c67 = $this->env->getExtension("native_profiler");
        $__internal_7e3b815e53d1234e806e84a3aed9695cff41f58e2b52eda3a4adaf01d98a9c67->enter($__internal_7e3b815e53d1234e806e84a3aed9695cff41f58e2b52eda3a4adaf01d98a9c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7e3b815e53d1234e806e84a3aed9695cff41f58e2b52eda3a4adaf01d98a9c67->leave($__internal_7e3b815e53d1234e806e84a3aed9695cff41f58e2b52eda3a4adaf01d98a9c67_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
