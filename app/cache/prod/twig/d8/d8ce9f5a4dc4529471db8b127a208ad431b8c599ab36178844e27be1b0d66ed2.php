<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8c6241c52db6b400025427102c34b1092500e7b0c78cd70f680d64b04cdfc535 extends Twig_Template
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
        $__internal_1e58b5e0e8975788f1c331947b75519033a29d5a79ef839b56f7f015b2e9fcd6 = $this->env->getExtension("native_profiler");
        $__internal_1e58b5e0e8975788f1c331947b75519033a29d5a79ef839b56f7f015b2e9fcd6->enter($__internal_1e58b5e0e8975788f1c331947b75519033a29d5a79ef839b56f7f015b2e9fcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_1e58b5e0e8975788f1c331947b75519033a29d5a79ef839b56f7f015b2e9fcd6->leave($__internal_1e58b5e0e8975788f1c331947b75519033a29d5a79ef839b56f7f015b2e9fcd6_prof);

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
