<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_792af80dd02d1f1134e2a9b710824980a8ab8f308045b6e3da7eb4c30cac178b extends Twig_Template
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
        $__internal_298a4b503ef8aa584ea8c1a348f0d4557b74a778f8c1cb9a799024841f256bbf = $this->env->getExtension("native_profiler");
        $__internal_298a4b503ef8aa584ea8c1a348f0d4557b74a778f8c1cb9a799024841f256bbf->enter($__internal_298a4b503ef8aa584ea8c1a348f0d4557b74a778f8c1cb9a799024841f256bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_298a4b503ef8aa584ea8c1a348f0d4557b74a778f8c1cb9a799024841f256bbf->leave($__internal_298a4b503ef8aa584ea8c1a348f0d4557b74a778f8c1cb9a799024841f256bbf_prof);

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
