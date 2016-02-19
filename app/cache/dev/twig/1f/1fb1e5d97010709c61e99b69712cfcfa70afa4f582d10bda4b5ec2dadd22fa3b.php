<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_797e8c57b0dae76101131cf2a183563200b1c656e70469c041c17b0cbc2cdbc4 extends Twig_Template
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
        $__internal_03caf3adf9386a4af3494554df748b7c7a0194aa1d615bafe94895c6f9717ad0 = $this->env->getExtension("native_profiler");
        $__internal_03caf3adf9386a4af3494554df748b7c7a0194aa1d615bafe94895c6f9717ad0->enter($__internal_03caf3adf9386a4af3494554df748b7c7a0194aa1d615bafe94895c6f9717ad0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_03caf3adf9386a4af3494554df748b7c7a0194aa1d615bafe94895c6f9717ad0->leave($__internal_03caf3adf9386a4af3494554df748b7c7a0194aa1d615bafe94895c6f9717ad0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
