<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_509db78d4cce862721af5d7c908289d5b3cf7b8f449c3b66f0d907c77ee7a9d2 extends Twig_Template
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
        $__internal_573630fdb0a29646bce9d4d0cbb5dbd334f83739e14cd711147bd8340c16658c = $this->env->getExtension("native_profiler");
        $__internal_573630fdb0a29646bce9d4d0cbb5dbd334f83739e14cd711147bd8340c16658c->enter($__internal_573630fdb0a29646bce9d4d0cbb5dbd334f83739e14cd711147bd8340c16658c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_573630fdb0a29646bce9d4d0cbb5dbd334f83739e14cd711147bd8340c16658c->leave($__internal_573630fdb0a29646bce9d4d0cbb5dbd334f83739e14cd711147bd8340c16658c_prof);

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
