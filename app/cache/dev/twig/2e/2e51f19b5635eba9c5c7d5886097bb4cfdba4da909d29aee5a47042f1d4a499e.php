<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_30e662c140e79a0c06e2ecfc2426dc4c2100184cc17ab405c716cd3810ac3e0b extends Twig_Template
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
        $__internal_23c94d2c3377a05b931fffc7736145a9eede7e4668a040f79fbd85ac5056b53f = $this->env->getExtension("native_profiler");
        $__internal_23c94d2c3377a05b931fffc7736145a9eede7e4668a040f79fbd85ac5056b53f->enter($__internal_23c94d2c3377a05b931fffc7736145a9eede7e4668a040f79fbd85ac5056b53f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_23c94d2c3377a05b931fffc7736145a9eede7e4668a040f79fbd85ac5056b53f->leave($__internal_23c94d2c3377a05b931fffc7736145a9eede7e4668a040f79fbd85ac5056b53f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
