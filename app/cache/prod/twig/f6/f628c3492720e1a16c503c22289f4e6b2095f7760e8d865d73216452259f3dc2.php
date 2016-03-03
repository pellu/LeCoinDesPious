<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_a48a38c7f420e04d186c861a2b89c0d60b9976f21fd68964b0919b8f0a687206 extends Twig_Template
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
        $__internal_8055e2a896bf04c7e08dba0b5b594b4d2490d46fee56a06c95f26718cafef00b = $this->env->getExtension("native_profiler");
        $__internal_8055e2a896bf04c7e08dba0b5b594b4d2490d46fee56a06c95f26718cafef00b->enter($__internal_8055e2a896bf04c7e08dba0b5b594b4d2490d46fee56a06c95f26718cafef00b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_8055e2a896bf04c7e08dba0b5b594b4d2490d46fee56a06c95f26718cafef00b->leave($__internal_8055e2a896bf04c7e08dba0b5b594b4d2490d46fee56a06c95f26718cafef00b_prof);

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
