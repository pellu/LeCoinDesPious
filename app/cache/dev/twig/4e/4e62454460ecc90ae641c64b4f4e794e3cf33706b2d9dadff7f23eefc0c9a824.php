<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_32aa117775f60d2127d979283e781ef0e09c0825b4bc137cc7029ddd8e618908 extends Twig_Template
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
        $__internal_e5bf092fcdd38d3df54729824a0156c709183e218e86e62145bd3dad48d681b5 = $this->env->getExtension("native_profiler");
        $__internal_e5bf092fcdd38d3df54729824a0156c709183e218e86e62145bd3dad48d681b5->enter($__internal_e5bf092fcdd38d3df54729824a0156c709183e218e86e62145bd3dad48d681b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_e5bf092fcdd38d3df54729824a0156c709183e218e86e62145bd3dad48d681b5->leave($__internal_e5bf092fcdd38d3df54729824a0156c709183e218e86e62145bd3dad48d681b5_prof);

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
