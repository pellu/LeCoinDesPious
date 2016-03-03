<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_c9bc0192eff0fcc52350b3863634e1835a26d7688cdba6a65a5a0e25a5f8f4b2 extends Twig_Template
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
        $__internal_4ddad668d9a3929b33f3ca80af5c92163873e1e44a4b58a8497704f0094fca94 = $this->env->getExtension("native_profiler");
        $__internal_4ddad668d9a3929b33f3ca80af5c92163873e1e44a4b58a8497704f0094fca94->enter($__internal_4ddad668d9a3929b33f3ca80af5c92163873e1e44a4b58a8497704f0094fca94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_4ddad668d9a3929b33f3ca80af5c92163873e1e44a4b58a8497704f0094fca94->leave($__internal_4ddad668d9a3929b33f3ca80af5c92163873e1e44a4b58a8497704f0094fca94_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_eb06a05f933aa18d2919cc77d1dd17147513c777ecebc05b77d9e7d61fc7963e = $this->env->getExtension("native_profiler");
        $__internal_eb06a05f933aa18d2919cc77d1dd17147513c777ecebc05b77d9e7d61fc7963e->enter($__internal_eb06a05f933aa18d2919cc77d1dd17147513c777ecebc05b77d9e7d61fc7963e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_eb06a05f933aa18d2919cc77d1dd17147513c777ecebc05b77d9e7d61fc7963e->leave($__internal_eb06a05f933aa18d2919cc77d1dd17147513c777ecebc05b77d9e7d61fc7963e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* */
/*     {% include "::header.html.twig" %}*/
/*     {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
