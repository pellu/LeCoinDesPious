<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_6fa2996d9c0ef880666b057940f96b6bf11307ae963c28a747b2d145b885aec5 extends Twig_Template
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
        $__internal_f4b9e5fb910c7d4ba757f6853d47d387ae2c2a14115750234be9f25f45e36b88 = $this->env->getExtension("native_profiler");
        $__internal_f4b9e5fb910c7d4ba757f6853d47d387ae2c2a14115750234be9f25f45e36b88->enter($__internal_f4b9e5fb910c7d4ba757f6853d47d387ae2c2a14115750234be9f25f45e36b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_f4b9e5fb910c7d4ba757f6853d47d387ae2c2a14115750234be9f25f45e36b88->leave($__internal_f4b9e5fb910c7d4ba757f6853d47d387ae2c2a14115750234be9f25f45e36b88_prof);

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
