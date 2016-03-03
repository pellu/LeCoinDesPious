<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_de5aa1dd3ed2a302eb842b653e96535a6d55e5e47f74b388ee07b8c276dc1e9d extends Twig_Template
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
        $__internal_7551a81222031234997fd45973cc087f04579d00c1f0d07395051639565a8fdc = $this->env->getExtension("native_profiler");
        $__internal_7551a81222031234997fd45973cc087f04579d00c1f0d07395051639565a8fdc->enter($__internal_7551a81222031234997fd45973cc087f04579d00c1f0d07395051639565a8fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7551a81222031234997fd45973cc087f04579d00c1f0d07395051639565a8fdc->leave($__internal_7551a81222031234997fd45973cc087f04579d00c1f0d07395051639565a8fdc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
