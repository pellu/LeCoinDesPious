<?php

/* @User/Resetting/reset.html.twig */
class __TwigTemplate_a7566645d8f15b35b4ea3236015e00255770f46ffc20650eab09fda65a16577a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9951a438f252aefa0b2b3dc4a1faec1fc4938d91333b4cb64b8b0bfbb9c6648 = $this->env->getExtension("native_profiler");
        $__internal_d9951a438f252aefa0b2b3dc4a1faec1fc4938d91333b4cb64b8b0bfbb9c6648->enter($__internal_d9951a438f252aefa0b2b3dc4a1faec1fc4938d91333b4cb64b8b0bfbb9c6648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/reset.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_d9951a438f252aefa0b2b3dc4a1faec1fc4938d91333b4cb64b8b0bfbb9c6648->leave($__internal_d9951a438f252aefa0b2b3dc4a1faec1fc4938d91333b4cb64b8b0bfbb9c6648_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_29b86e638ab4e843668b10662f8969139e0f7fa303605b90d8c0349e0e93491b = $this->env->getExtension("native_profiler");
        $__internal_29b86e638ab4e843668b10662f8969139e0f7fa303605b90d8c0349e0e93491b->enter($__internal_29b86e638ab4e843668b10662f8969139e0f7fa303605b90d8c0349e0e93491b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@User/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_29b86e638ab4e843668b10662f8969139e0f7fa303605b90d8c0349e0e93491b->leave($__internal_29b86e638ab4e843668b10662f8969139e0f7fa303605b90d8c0349e0e93491b_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/reset.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  27 => 3,  23 => 1,);
    }
}
/* */
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
