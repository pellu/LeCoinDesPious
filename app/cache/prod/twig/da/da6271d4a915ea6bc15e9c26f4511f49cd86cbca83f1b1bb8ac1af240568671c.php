<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_8d95ab0cd19e45058595ef64593d63490c6ba7cc47c0fa3414d15bca771d51ec extends Twig_Template
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
        $__internal_6756b6313a676c30f66a938674ece9f6034fa13fb26a9fc815978121fbeb6bdb = $this->env->getExtension("native_profiler");
        $__internal_6756b6313a676c30f66a938674ece9f6034fa13fb26a9fc815978121fbeb6bdb->enter($__internal_6756b6313a676c30f66a938674ece9f6034fa13fb26a9fc815978121fbeb6bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_6756b6313a676c30f66a938674ece9f6034fa13fb26a9fc815978121fbeb6bdb->leave($__internal_6756b6313a676c30f66a938674ece9f6034fa13fb26a9fc815978121fbeb6bdb_prof);

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
