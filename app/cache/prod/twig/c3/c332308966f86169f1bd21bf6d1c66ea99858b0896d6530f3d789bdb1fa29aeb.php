<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_a2bf45947c543ca74705193a36a98c2dfad49edf69e2d59c30c349d928a9eaf6 extends Twig_Template
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
        $__internal_ee2ec986db890dff591d56515087ab32eb1b4ef0aba8db5c1eb12c0b6460bb4e = $this->env->getExtension("native_profiler");
        $__internal_ee2ec986db890dff591d56515087ab32eb1b4ef0aba8db5c1eb12c0b6460bb4e->enter($__internal_ee2ec986db890dff591d56515087ab32eb1b4ef0aba8db5c1eb12c0b6460bb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_ee2ec986db890dff591d56515087ab32eb1b4ef0aba8db5c1eb12c0b6460bb4e->leave($__internal_ee2ec986db890dff591d56515087ab32eb1b4ef0aba8db5c1eb12c0b6460bb4e_prof);

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
