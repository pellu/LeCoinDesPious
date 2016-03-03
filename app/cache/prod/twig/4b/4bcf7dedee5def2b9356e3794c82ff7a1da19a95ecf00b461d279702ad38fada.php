<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_f1890e51d689727a7d39d0772d54a9f97e034d59aa7bec162cc86ee240313ff3 extends Twig_Template
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
        $__internal_ab8ec11280273b2ced8a6954372577ec7d1b3888826d29a109c9f6622f3771f3 = $this->env->getExtension("native_profiler");
        $__internal_ab8ec11280273b2ced8a6954372577ec7d1b3888826d29a109c9f6622f3771f3->enter($__internal_ab8ec11280273b2ced8a6954372577ec7d1b3888826d29a109c9f6622f3771f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_ab8ec11280273b2ced8a6954372577ec7d1b3888826d29a109c9f6622f3771f3->leave($__internal_ab8ec11280273b2ced8a6954372577ec7d1b3888826d29a109c9f6622f3771f3_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05f7ea95cfd457a85783e34f6eaa3a44ae8bb71e4c4e445ea2403a87c6f7c9d5 = $this->env->getExtension("native_profiler");
        $__internal_05f7ea95cfd457a85783e34f6eaa3a44ae8bb71e4c4e445ea2403a87c6f7c9d5->enter($__internal_05f7ea95cfd457a85783e34f6eaa3a44ae8bb71e4c4e445ea2403a87c6f7c9d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "    ";
        $this->loadTemplate("::header.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 2)->display($context);
        // line 3
        echo "<p>
";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
    ";
        // line 6
        $this->loadTemplate("::footer.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 6)->display($context);
        
        $__internal_05f7ea95cfd457a85783e34f6eaa3a44ae8bb71e4c4e445ea2403a87c6f7c9d5->leave($__internal_05f7ea95cfd457a85783e34f6eaa3a44ae8bb71e4c4e445ea2403a87c6f7c9d5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  46 => 6,  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/*     {% include "::header.html.twig" %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
