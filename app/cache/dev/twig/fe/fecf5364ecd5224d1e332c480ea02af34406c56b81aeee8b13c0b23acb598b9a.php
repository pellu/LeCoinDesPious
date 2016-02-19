<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_3da0c1f2498104ae424bfb92d7da271c7d8c49a44c9827b777d3cf3541ec44f0 extends Twig_Template
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
        $__internal_12e1c5519de96dfe1e6cee131e533e85b63828c88a594338145ce2a5e6905aee = $this->env->getExtension("native_profiler");
        $__internal_12e1c5519de96dfe1e6cee131e533e85b63828c88a594338145ce2a5e6905aee->enter($__internal_12e1c5519de96dfe1e6cee131e533e85b63828c88a594338145ce2a5e6905aee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_12e1c5519de96dfe1e6cee131e533e85b63828c88a594338145ce2a5e6905aee->leave($__internal_12e1c5519de96dfe1e6cee131e533e85b63828c88a594338145ce2a5e6905aee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
