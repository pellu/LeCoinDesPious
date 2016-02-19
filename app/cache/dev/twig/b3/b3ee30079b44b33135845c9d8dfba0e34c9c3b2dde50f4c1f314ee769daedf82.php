<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_88fa4e861781718ac71ce46f1968fb4c8a3d82a5ed92b80109347c47bb627cef extends Twig_Template
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
        $__internal_9c0c16c0c6d04464a9b1473d520dc9953940b9c8b8aaf574d15480b7426df896 = $this->env->getExtension("native_profiler");
        $__internal_9c0c16c0c6d04464a9b1473d520dc9953940b9c8b8aaf574d15480b7426df896->enter($__internal_9c0c16c0c6d04464a9b1473d520dc9953940b9c8b8aaf574d15480b7426df896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_9c0c16c0c6d04464a9b1473d520dc9953940b9c8b8aaf574d15480b7426df896->leave($__internal_9c0c16c0c6d04464a9b1473d520dc9953940b9c8b8aaf574d15480b7426df896_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
