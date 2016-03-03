<?php

/* @User/Group/edit.html.twig */
class __TwigTemplate_f735c6333e842df498be788b5e9200afeaaf2a0cb7b3355f9fc2cb074697ba5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Group/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d7bbc72b5dda6e695d8909cd0d44332443572d9d832764640603fda9013dfae = $this->env->getExtension("native_profiler");
        $__internal_4d7bbc72b5dda6e695d8909cd0d44332443572d9d832764640603fda9013dfae->enter($__internal_4d7bbc72b5dda6e695d8909cd0d44332443572d9d832764640603fda9013dfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d7bbc72b5dda6e695d8909cd0d44332443572d9d832764640603fda9013dfae->leave($__internal_4d7bbc72b5dda6e695d8909cd0d44332443572d9d832764640603fda9013dfae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d206d53de429bd10e015c547335514a7dff6959cad21b1442378379e0797cf3 = $this->env->getExtension("native_profiler");
        $__internal_8d206d53de429bd10e015c547335514a7dff6959cad21b1442378379e0797cf3->enter($__internal_8d206d53de429bd10e015c547335514a7dff6959cad21b1442378379e0797cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@User/Group/edit.html.twig", 4)->display($context);
        
        $__internal_8d206d53de429bd10e015c547335514a7dff6959cad21b1442378379e0797cf3->leave($__internal_8d206d53de429bd10e015c547335514a7dff6959cad21b1442378379e0797cf3_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
