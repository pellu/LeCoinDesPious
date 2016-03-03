<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_2babc565f0d2528593b56ba0da611b89e4990871ed97df032db4efa45af8ee84 extends Twig_Template
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
        $__internal_ac9a3a390f6d831ed9470e3ec23ae05df5c30bb676d13afd5054b10ffb94f449 = $this->env->getExtension("native_profiler");
        $__internal_ac9a3a390f6d831ed9470e3ec23ae05df5c30bb676d13afd5054b10ffb94f449->enter($__internal_ac9a3a390f6d831ed9470e3ec23ae05df5c30bb676d13afd5054b10ffb94f449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_ac9a3a390f6d831ed9470e3ec23ae05df5c30bb676d13afd5054b10ffb94f449->leave($__internal_ac9a3a390f6d831ed9470e3ec23ae05df5c30bb676d13afd5054b10ffb94f449_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11bd0a13fb47a05bf1fc519e196df87b3bef885636367fc6ff2555c215b09f58 = $this->env->getExtension("native_profiler");
        $__internal_11bd0a13fb47a05bf1fc519e196df87b3bef885636367fc6ff2555c215b09f58->enter($__internal_11bd0a13fb47a05bf1fc519e196df87b3bef885636367fc6ff2555c215b09f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "    ";
        $this->loadTemplate("::header.html.twig", "FOSUserBundle:Resetting:request.html.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_11bd0a13fb47a05bf1fc519e196df87b3bef885636367fc6ff2555c215b09f58->leave($__internal_11bd0a13fb47a05bf1fc519e196df87b3bef885636367fc6ff2555c215b09f58_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/*     {% include "::header.html.twig" %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
