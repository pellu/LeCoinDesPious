<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_300d45faa8f3872a0a6da30d59317faa13ee16f20377c29cefdf334c0fddc360 extends Twig_Template
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
        $__internal_b4d7ed4d2832dce5605b4754c749abee80338125641325ffd8978b8e5b781834 = $this->env->getExtension("native_profiler");
        $__internal_b4d7ed4d2832dce5605b4754c749abee80338125641325ffd8978b8e5b781834->enter($__internal_b4d7ed4d2832dce5605b4754c749abee80338125641325ffd8978b8e5b781834_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_b4d7ed4d2832dce5605b4754c749abee80338125641325ffd8978b8e5b781834->leave($__internal_b4d7ed4d2832dce5605b4754c749abee80338125641325ffd8978b8e5b781834_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
