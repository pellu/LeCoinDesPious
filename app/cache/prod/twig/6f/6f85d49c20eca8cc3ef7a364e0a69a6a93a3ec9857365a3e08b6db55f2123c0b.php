<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f0af9c7cf733978c8fe796ca5783edb03fd51507b8d3eca045a3656c4da526d9 extends Twig_Template
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
        $__internal_6186432f780a72c082efd72e0949598010543bcab5b7d24d8c4a917c872c03af = $this->env->getExtension("native_profiler");
        $__internal_6186432f780a72c082efd72e0949598010543bcab5b7d24d8c4a917c872c03af->enter($__internal_6186432f780a72c082efd72e0949598010543bcab5b7d24d8c4a917c872c03af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_6186432f780a72c082efd72e0949598010543bcab5b7d24d8c4a917c872c03af->leave($__internal_6186432f780a72c082efd72e0949598010543bcab5b7d24d8c4a917c872c03af_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
