<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_fa2de2a23c89c065fb674002510be8bd5d9bdb4a92f87d160687b8480ffb76c7 extends Twig_Template
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
        $__internal_c76631997e37b4896631e70c6caed3094049882d0a957098a2eb249537002566 = $this->env->getExtension("native_profiler");
        $__internal_c76631997e37b4896631e70c6caed3094049882d0a957098a2eb249537002566->enter($__internal_c76631997e37b4896631e70c6caed3094049882d0a957098a2eb249537002566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c76631997e37b4896631e70c6caed3094049882d0a957098a2eb249537002566->leave($__internal_c76631997e37b4896631e70c6caed3094049882d0a957098a2eb249537002566_prof);

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
