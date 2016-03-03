<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_4e5bf368abb36e3f817386eddfe9d1b0385bb81a62163e0600e0f26bc35ac742 extends Twig_Template
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
        $__internal_c04b662537800064d46d21299bd1b1b0a38d0b44cbe16b1e3a2c6fb649f476f7 = $this->env->getExtension("native_profiler");
        $__internal_c04b662537800064d46d21299bd1b1b0a38d0b44cbe16b1e3a2c6fb649f476f7->enter($__internal_c04b662537800064d46d21299bd1b1b0a38d0b44cbe16b1e3a2c6fb649f476f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_c04b662537800064d46d21299bd1b1b0a38d0b44cbe16b1e3a2c6fb649f476f7->leave($__internal_c04b662537800064d46d21299bd1b1b0a38d0b44cbe16b1e3a2c6fb649f476f7_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0a3e645a4a4dc933a14154348a8398492dfaf105f13ff789993b2ba7d6ee78a = $this->env->getExtension("native_profiler");
        $__internal_d0a3e645a4a4dc933a14154348a8398492dfaf105f13ff789993b2ba7d6ee78a->enter($__internal_d0a3e645a4a4dc933a14154348a8398492dfaf105f13ff789993b2ba7d6ee78a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "
    ";
        // line 3
        $this->loadTemplate("::header.html.twig", "FOSUserBundle:Registration:register.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "FOSUserBundle:Registration:register.html.twig", 5)->display($context);
        
        $__internal_d0a3e645a4a4dc933a14154348a8398492dfaf105f13ff789993b2ba7d6ee78a->leave($__internal_d0a3e645a4a4dc933a14154348a8398492dfaf105f13ff789993b2ba7d6ee78a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* */
/*     {% include "::header.html.twig" %}*/
/*     {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
