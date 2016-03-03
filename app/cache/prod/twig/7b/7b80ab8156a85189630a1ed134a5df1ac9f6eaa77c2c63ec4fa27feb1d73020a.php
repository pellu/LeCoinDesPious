<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_74c451306b24b8f70d6575fd626a84556b6d9d3af7137cc383e3cf55b219a301 extends Twig_Template
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
        $__internal_eb74be5bbb154474fed7093f342b7745d585d35764bbfcdd8b9bcad2aa8d56ea = $this->env->getExtension("native_profiler");
        $__internal_eb74be5bbb154474fed7093f342b7745d585d35764bbfcdd8b9bcad2aa8d56ea->enter($__internal_eb74be5bbb154474fed7093f342b7745d585d35764bbfcdd8b9bcad2aa8d56ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_eb74be5bbb154474fed7093f342b7745d585d35764bbfcdd8b9bcad2aa8d56ea->leave($__internal_eb74be5bbb154474fed7093f342b7745d585d35764bbfcdd8b9bcad2aa8d56ea_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_43a59957e17aeffc824adfe08941c6593eedc177e7804ce789e0ca6396341a63 = $this->env->getExtension("native_profiler");
        $__internal_43a59957e17aeffc824adfe08941c6593eedc177e7804ce789e0ca6396341a63->enter($__internal_43a59957e17aeffc824adfe08941c6593eedc177e7804ce789e0ca6396341a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "
    ";
        // line 3
        $this->loadTemplate("::header.html.twig", "FOSUserBundle:Profile:edit.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "FOSUserBundle:Profile:edit.html.twig", 5)->display($context);
        
        $__internal_43a59957e17aeffc824adfe08941c6593eedc177e7804ce789e0ca6396341a63->leave($__internal_43a59957e17aeffc824adfe08941c6593eedc177e7804ce789e0ca6396341a63_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* */
/*     {% include "::header.html.twig" %}*/
/*     {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
