<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_f810fb6fe5efc937af709e099dd734ce567806dfca45f47cb00ee9741d5e12ef extends Twig_Template
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
        $__internal_4f8ce8573bab76c988c70336ec82a803692cd983a85d273a8a7d7033a5996d2f = $this->env->getExtension("native_profiler");
        $__internal_4f8ce8573bab76c988c70336ec82a803692cd983a85d273a8a7d7033a5996d2f->enter($__internal_4f8ce8573bab76c988c70336ec82a803692cd983a85d273a8a7d7033a5996d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_4f8ce8573bab76c988c70336ec82a803692cd983a85d273a8a7d7033a5996d2f->leave($__internal_4f8ce8573bab76c988c70336ec82a803692cd983a85d273a8a7d7033a5996d2f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
