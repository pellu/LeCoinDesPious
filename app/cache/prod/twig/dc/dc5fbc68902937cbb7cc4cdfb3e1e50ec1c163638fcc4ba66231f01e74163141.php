<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_f27233a16feb020bd60c04ae4d34f16649c8256d20ce8987a4f3df4e72239a1b extends Twig_Template
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
        $__internal_2f1e68ce30d3c4a61f2e775cd9e6c151d5b93c74c55b8a796ab9440fd8d45788 = $this->env->getExtension("native_profiler");
        $__internal_2f1e68ce30d3c4a61f2e775cd9e6c151d5b93c74c55b8a796ab9440fd8d45788->enter($__internal_2f1e68ce30d3c4a61f2e775cd9e6c151d5b93c74c55b8a796ab9440fd8d45788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2f1e68ce30d3c4a61f2e775cd9e6c151d5b93c74c55b8a796ab9440fd8d45788->leave($__internal_2f1e68ce30d3c4a61f2e775cd9e6c151d5b93c74c55b8a796ab9440fd8d45788_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
