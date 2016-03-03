<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_7b30b5b95a5aff872272a755e4afa8f308d0f00355af79cb7ff9c7560c3230ed extends Twig_Template
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
        $__internal_98c90ea9eccdc886ada188161ce21c7f283599954073022c613941bb7dda421d = $this->env->getExtension("native_profiler");
        $__internal_98c90ea9eccdc886ada188161ce21c7f283599954073022c613941bb7dda421d->enter($__internal_98c90ea9eccdc886ada188161ce21c7f283599954073022c613941bb7dda421d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_98c90ea9eccdc886ada188161ce21c7f283599954073022c613941bb7dda421d->leave($__internal_98c90ea9eccdc886ada188161ce21c7f283599954073022c613941bb7dda421d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
