<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_cbb15e8b9a98d8d9f7181d70863212ca635bdb510d6289db3e67cce6dea2fcde extends Twig_Template
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
        $__internal_0f51769ec1e605aaa62c6009e7d0fdc3774bc910b17ace40d7413530a7a69c82 = $this->env->getExtension("native_profiler");
        $__internal_0f51769ec1e605aaa62c6009e7d0fdc3774bc910b17ace40d7413530a7a69c82->enter($__internal_0f51769ec1e605aaa62c6009e7d0fdc3774bc910b17ace40d7413530a7a69c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0f51769ec1e605aaa62c6009e7d0fdc3774bc910b17ace40d7413530a7a69c82->leave($__internal_0f51769ec1e605aaa62c6009e7d0fdc3774bc910b17ace40d7413530a7a69c82_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
