<?php

/* @User/ChangePassword/changePassword.html.twig */
class __TwigTemplate_f10f9fe779d1a7957e6b8c011e29c6171a4cb4e4bb68c2d1793abab8b8c40663 extends Twig_Template
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
        $this->loadTemplate("::header.html.twig", "@User/ChangePassword/changePassword.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@User/ChangePassword/changePassword.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "@User/ChangePassword/changePassword.html.twig", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "@User/ChangePassword/changePassword.html.twig";
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
