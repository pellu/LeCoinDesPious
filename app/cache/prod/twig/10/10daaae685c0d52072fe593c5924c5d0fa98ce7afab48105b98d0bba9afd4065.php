<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_bb54bfb85d7ba1fafff2fc6a2af50e365ba32bac66446392e1a818a204d9cccf extends Twig_Template
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
        $__internal_3b632ac51823eef9fe236f1167130863bd2ce794066c2e3676177f5db4bc2e05 = $this->env->getExtension("native_profiler");
        $__internal_3b632ac51823eef9fe236f1167130863bd2ce794066c2e3676177f5db4bc2e05->enter($__internal_3b632ac51823eef9fe236f1167130863bd2ce794066c2e3676177f5db4bc2e05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_3b632ac51823eef9fe236f1167130863bd2ce794066c2e3676177f5db4bc2e05->leave($__internal_3b632ac51823eef9fe236f1167130863bd2ce794066c2e3676177f5db4bc2e05_prof);

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
