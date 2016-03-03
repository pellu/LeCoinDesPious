<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_a642f650179aeb7128dc9be82c06e467f2957cb54102a55030555861fc0fd6d5 extends Twig_Template
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
        $__internal_93fe31955809c446983a309a3e05936855eb6f6b54528a39d5cd3002b998d088 = $this->env->getExtension("native_profiler");
        $__internal_93fe31955809c446983a309a3e05936855eb6f6b54528a39d5cd3002b998d088->enter($__internal_93fe31955809c446983a309a3e05936855eb6f6b54528a39d5cd3002b998d088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_93fe31955809c446983a309a3e05936855eb6f6b54528a39d5cd3002b998d088->leave($__internal_93fe31955809c446983a309a3e05936855eb6f6b54528a39d5cd3002b998d088_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be86229d1e693effd2c271ebb78d041e4a86408db829d6d93f8947a8aecb59cc = $this->env->getExtension("native_profiler");
        $__internal_be86229d1e693effd2c271ebb78d041e4a86408db829d6d93f8947a8aecb59cc->enter($__internal_be86229d1e693effd2c271ebb78d041e4a86408db829d6d93f8947a8aecb59cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "
    ";
        // line 3
        $this->loadTemplate("::header.html.twig", "FOSUserBundle:Profile:show.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "FOSUserBundle:Profile:show.html.twig", 5)->display($context);
        
        $__internal_be86229d1e693effd2c271ebb78d041e4a86408db829d6d93f8947a8aecb59cc->leave($__internal_be86229d1e693effd2c271ebb78d041e4a86408db829d6d93f8947a8aecb59cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* */
/*     {% include "::header.html.twig" %}*/
/*     {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
