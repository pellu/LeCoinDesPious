<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_5a6b9db2014f43e182e39099f71914e890bbba1b087b42a8d83226aeed2824d6 extends Twig_Template
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
        $__internal_812e1b1b2277f2ddaff3b2a2c9cfa5d4cae80335dd7175b0d0f0814df4703e45 = $this->env->getExtension("native_profiler");
        $__internal_812e1b1b2277f2ddaff3b2a2c9cfa5d4cae80335dd7175b0d0f0814df4703e45->enter($__internal_812e1b1b2277f2ddaff3b2a2c9cfa5d4cae80335dd7175b0d0f0814df4703e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_812e1b1b2277f2ddaff3b2a2c9cfa5d4cae80335dd7175b0d0f0814df4703e45->leave($__internal_812e1b1b2277f2ddaff3b2a2c9cfa5d4cae80335dd7175b0d0f0814df4703e45_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8a43f2db46937f4eb78c7229d11846caab821cd5a18b179cea085dff2aad1dca = $this->env->getExtension("native_profiler");
        $__internal_8a43f2db46937f4eb78c7229d11846caab821cd5a18b179cea085dff2aad1dca->enter($__internal_8a43f2db46937f4eb78c7229d11846caab821cd5a18b179cea085dff2aad1dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_8a43f2db46937f4eb78c7229d11846caab821cd5a18b179cea085dff2aad1dca->leave($__internal_8a43f2db46937f4eb78c7229d11846caab821cd5a18b179cea085dff2aad1dca_prof);

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
