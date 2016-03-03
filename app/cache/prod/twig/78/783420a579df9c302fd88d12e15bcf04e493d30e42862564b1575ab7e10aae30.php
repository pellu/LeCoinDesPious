<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_8588f1805363654de2450f23147c482bd034f9067e7e0dd7ec4de2b45e280fb3 extends Twig_Template
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
        $__internal_8c4161b3b0673f10416b7b086e37a18b264cffd5c224dd520e121e91db04c513 = $this->env->getExtension("native_profiler");
        $__internal_8c4161b3b0673f10416b7b086e37a18b264cffd5c224dd520e121e91db04c513->enter($__internal_8c4161b3b0673f10416b7b086e37a18b264cffd5c224dd520e121e91db04c513_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_8c4161b3b0673f10416b7b086e37a18b264cffd5c224dd520e121e91db04c513->leave($__internal_8c4161b3b0673f10416b7b086e37a18b264cffd5c224dd520e121e91db04c513_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
