<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a3aa9b0a427bf17e6126f69afb151d7d9b2bbbb4b909dee48148704459b9d05a extends Twig_Template
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
        $__internal_b7d4039cfe0a41e2563db38a487655d6f9232edc9ab4182ea93d0ef1e3fc056b = $this->env->getExtension("native_profiler");
        $__internal_b7d4039cfe0a41e2563db38a487655d6f9232edc9ab4182ea93d0ef1e3fc056b->enter($__internal_b7d4039cfe0a41e2563db38a487655d6f9232edc9ab4182ea93d0ef1e3fc056b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b7d4039cfe0a41e2563db38a487655d6f9232edc9ab4182ea93d0ef1e3fc056b->leave($__internal_b7d4039cfe0a41e2563db38a487655d6f9232edc9ab4182ea93d0ef1e3fc056b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
