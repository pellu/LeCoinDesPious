<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_e72d8578912cf609e8560e8ec7cf84ccc4e77a5d784a36fbc3d846f54d1e1bbc extends Twig_Template
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
        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 2
        echo "
    ";
        // line 3
        $this->loadTemplate("::header.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* */
/*     {% include "::header.html.twig" %}*/
/*     {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
