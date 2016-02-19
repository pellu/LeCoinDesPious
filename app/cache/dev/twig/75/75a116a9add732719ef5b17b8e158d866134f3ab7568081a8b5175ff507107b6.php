<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e37699e9f72d15cc4b62dcbc3794d702d7c5559b60bd75b415477ca8ad538466 extends Twig_Template
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
        $__internal_3b508e07d37b95f817b55511910747f3846c0132ec122e030bddc7a636290f89 = $this->env->getExtension("native_profiler");
        $__internal_3b508e07d37b95f817b55511910747f3846c0132ec122e030bddc7a636290f89->enter($__internal_3b508e07d37b95f817b55511910747f3846c0132ec122e030bddc7a636290f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3b508e07d37b95f817b55511910747f3846c0132ec122e030bddc7a636290f89->leave($__internal_3b508e07d37b95f817b55511910747f3846c0132ec122e030bddc7a636290f89_prof);

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
