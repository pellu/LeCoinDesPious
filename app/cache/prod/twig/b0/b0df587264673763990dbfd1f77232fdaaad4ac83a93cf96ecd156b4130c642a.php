<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_a50bb7fa0b54ddc77f1eb5a620866cab9f501e8c36b25fa27141672ced9ebcd8 extends Twig_Template
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
        echo "    ";
        $this->loadTemplate("::header.html.twig", "FOSUserBundle:Registration:register.html.twig", 2)->display($context);
        // line 3
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
/* {% block fos_user_content %}*/
/*     {% include "::header.html.twig" %}*/
/*     {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
