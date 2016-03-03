<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_bd2372ee7388810498910a9c1ead0c4cc278f204ae7710e50bd69fb9c7a9b559 extends Twig_Template
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
        $__internal_555297448b53e821e618bcd8d78361127db818eb68fb7773d5dd2f7ee234ef05 = $this->env->getExtension("native_profiler");
        $__internal_555297448b53e821e618bcd8d78361127db818eb68fb7773d5dd2f7ee234ef05->enter($__internal_555297448b53e821e618bcd8d78361127db818eb68fb7773d5dd2f7ee234ef05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_555297448b53e821e618bcd8d78361127db818eb68fb7773d5dd2f7ee234ef05->leave($__internal_555297448b53e821e618bcd8d78361127db818eb68fb7773d5dd2f7ee234ef05_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
