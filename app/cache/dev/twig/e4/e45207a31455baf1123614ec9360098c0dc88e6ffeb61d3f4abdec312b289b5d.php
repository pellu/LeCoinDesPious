<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_cafc42045af9bee51b4a059049a7cdd218c34458459156c0ac2dfca9cf25ecf7 extends Twig_Template
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
        $__internal_10453f4dd1f62c2e5167d010e56df5a83720debf81ce4a5ac214a22aaeef8d4f = $this->env->getExtension("native_profiler");
        $__internal_10453f4dd1f62c2e5167d010e56df5a83720debf81ce4a5ac214a22aaeef8d4f->enter($__internal_10453f4dd1f62c2e5167d010e56df5a83720debf81ce4a5ac214a22aaeef8d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_10453f4dd1f62c2e5167d010e56df5a83720debf81ce4a5ac214a22aaeef8d4f->leave($__internal_10453f4dd1f62c2e5167d010e56df5a83720debf81ce4a5ac214a22aaeef8d4f_prof);

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
