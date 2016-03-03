<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_4297ac7dedfc086b83db22007962b59e17afbc0b185267315b7494a3f139680b extends Twig_Template
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
        $__internal_a518764ee193c00f5e1e8e9260b2850a8b3fc0e468da5558fe65b39dbc057b32 = $this->env->getExtension("native_profiler");
        $__internal_a518764ee193c00f5e1e8e9260b2850a8b3fc0e468da5558fe65b39dbc057b32->enter($__internal_a518764ee193c00f5e1e8e9260b2850a8b3fc0e468da5558fe65b39dbc057b32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a518764ee193c00f5e1e8e9260b2850a8b3fc0e468da5558fe65b39dbc057b32->leave($__internal_a518764ee193c00f5e1e8e9260b2850a8b3fc0e468da5558fe65b39dbc057b32_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
