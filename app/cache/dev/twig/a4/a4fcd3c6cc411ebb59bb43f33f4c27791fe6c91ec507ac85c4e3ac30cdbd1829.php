<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3d9464ff70c288a37e4112a4179c3c558b4ebece162cf1eae4cc6bd0d42c95c7 extends Twig_Template
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
        $__internal_64c3f6d59301a8d1e16966d487ba7c64b99e541c85022cd776cde2698011f07f = $this->env->getExtension("native_profiler");
        $__internal_64c3f6d59301a8d1e16966d487ba7c64b99e541c85022cd776cde2698011f07f->enter($__internal_64c3f6d59301a8d1e16966d487ba7c64b99e541c85022cd776cde2698011f07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_64c3f6d59301a8d1e16966d487ba7c64b99e541c85022cd776cde2698011f07f->leave($__internal_64c3f6d59301a8d1e16966d487ba7c64b99e541c85022cd776cde2698011f07f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
