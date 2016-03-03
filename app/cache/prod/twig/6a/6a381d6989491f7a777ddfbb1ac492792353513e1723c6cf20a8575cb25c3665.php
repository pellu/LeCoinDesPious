<?php

/* @User/ChangePassword/changePassword.html.twig */
class __TwigTemplate_02869468276882b8a0f902b931abda077e407762df54a55c5d3410e3c835152d extends Twig_Template
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
        $__internal_2e20ae198c8dd6db5cdd0c80c065f41cc4fe2b4feafa17d3036419dc84662c27 = $this->env->getExtension("native_profiler");
        $__internal_2e20ae198c8dd6db5cdd0c80c065f41cc4fe2b4feafa17d3036419dc84662c27->enter($__internal_2e20ae198c8dd6db5cdd0c80c065f41cc4fe2b4feafa17d3036419dc84662c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/ChangePassword/changePassword.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_2e20ae198c8dd6db5cdd0c80c065f41cc4fe2b4feafa17d3036419dc84662c27->leave($__internal_2e20ae198c8dd6db5cdd0c80c065f41cc4fe2b4feafa17d3036419dc84662c27_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9e07f8c944ce9ac612d72da781d68fb583dcb2f2a15650cf01de1a4631fa7c40 = $this->env->getExtension("native_profiler");
        $__internal_9e07f8c944ce9ac612d72da781d68fb583dcb2f2a15650cf01de1a4631fa7c40->enter($__internal_9e07f8c944ce9ac612d72da781d68fb583dcb2f2a15650cf01de1a4631fa7c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_9e07f8c944ce9ac612d72da781d68fb583dcb2f2a15650cf01de1a4631fa7c40->leave($__internal_9e07f8c944ce9ac612d72da781d68fb583dcb2f2a15650cf01de1a4631fa7c40_prof);

    }

    public function getTemplateName()
    {
        return "@User/ChangePassword/changePassword.html.twig";
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
