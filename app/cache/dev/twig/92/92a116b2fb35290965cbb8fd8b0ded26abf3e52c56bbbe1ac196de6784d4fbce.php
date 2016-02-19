<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fc9f4c598ac801ed347b25b066b214a7641dffe1bd805a8f614a046c8294b1b4 extends Twig_Template
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
        $__internal_d9d3120a66e24dc576800e536a8113e20fae903ec328aa12830e0cb44e9b7154 = $this->env->getExtension("native_profiler");
        $__internal_d9d3120a66e24dc576800e536a8113e20fae903ec328aa12830e0cb44e9b7154->enter($__internal_d9d3120a66e24dc576800e536a8113e20fae903ec328aa12830e0cb44e9b7154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d9d3120a66e24dc576800e536a8113e20fae903ec328aa12830e0cb44e9b7154->leave($__internal_d9d3120a66e24dc576800e536a8113e20fae903ec328aa12830e0cb44e9b7154_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
