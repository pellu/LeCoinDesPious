<?php

/* @User/Profile/show.html.twig */
class __TwigTemplate_b377b33b2300c86090cc3a499de24acf74f2a6109af9d05de99c8019323dff37 extends Twig_Template
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
        $this->loadTemplate("::header.html.twig", "@User/Profile/show.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@User/Profile/show.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "@User/Profile/show.html.twig", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "@User/Profile/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* */
/*     {% include "::header.html.twig" %}*/
/*     {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
