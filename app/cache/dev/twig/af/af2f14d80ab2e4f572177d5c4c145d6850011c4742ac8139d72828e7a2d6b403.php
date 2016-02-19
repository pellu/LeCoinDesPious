<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_50fca706e23efc667c8f41998832006bba64c472ba8559ef7d44cc82fdf1bbf8 extends Twig_Template
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
        $__internal_1e7c7f9f7e006818dd763908724bc1d3acfae7444b54aa8895be52ff55cdc36b = $this->env->getExtension("native_profiler");
        $__internal_1e7c7f9f7e006818dd763908724bc1d3acfae7444b54aa8895be52ff55cdc36b->enter($__internal_1e7c7f9f7e006818dd763908724bc1d3acfae7444b54aa8895be52ff55cdc36b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_1e7c7f9f7e006818dd763908724bc1d3acfae7444b54aa8895be52ff55cdc36b->leave($__internal_1e7c7f9f7e006818dd763908724bc1d3acfae7444b54aa8895be52ff55cdc36b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
