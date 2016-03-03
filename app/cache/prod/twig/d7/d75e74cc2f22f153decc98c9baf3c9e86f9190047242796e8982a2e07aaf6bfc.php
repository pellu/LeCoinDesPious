<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_3f12334b2adf63c644c8d50e74608f9eef54bfecb8cad4412eb3b8b9f94bb58c extends Twig_Template
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
        $__internal_6d338f4805645c3d5c0f912429e8650a75afd945b724e4eeedacf584cdab7676 = $this->env->getExtension("native_profiler");
        $__internal_6d338f4805645c3d5c0f912429e8650a75afd945b724e4eeedacf584cdab7676->enter($__internal_6d338f4805645c3d5c0f912429e8650a75afd945b724e4eeedacf584cdab7676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6d338f4805645c3d5c0f912429e8650a75afd945b724e4eeedacf584cdab7676->leave($__internal_6d338f4805645c3d5c0f912429e8650a75afd945b724e4eeedacf584cdab7676_prof);

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
