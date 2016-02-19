<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6fcaf47dc20796c3c649d02556997993069615a1cc645ebf2dc2acbeb9ea24fd extends Twig_Template
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
        $__internal_8d37cf93a6a97e96af5a2087a1ad9130e6a2ee2703ccce89244d865916252b51 = $this->env->getExtension("native_profiler");
        $__internal_8d37cf93a6a97e96af5a2087a1ad9130e6a2ee2703ccce89244d865916252b51->enter($__internal_8d37cf93a6a97e96af5a2087a1ad9130e6a2ee2703ccce89244d865916252b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8d37cf93a6a97e96af5a2087a1ad9130e6a2ee2703ccce89244d865916252b51->leave($__internal_8d37cf93a6a97e96af5a2087a1ad9130e6a2ee2703ccce89244d865916252b51_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
