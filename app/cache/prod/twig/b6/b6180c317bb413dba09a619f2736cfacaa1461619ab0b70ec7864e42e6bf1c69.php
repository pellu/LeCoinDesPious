<?php

/* @User/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_42c556bd456338ec6a3896d1eebe9414bbb20513519eb5ea2770f80e556a77dd extends Twig_Template
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
        $__internal_32eb2c22307d1674c736adbb06c8a88f15993b2f93fe2ae7c89f86f8e156f611 = $this->env->getExtension("native_profiler");
        $__internal_32eb2c22307d1674c736adbb06c8a88f15993b2f93fe2ae7c89f86f8e156f611->enter($__internal_32eb2c22307d1674c736adbb06c8a88f15993b2f93fe2ae7c89f86f8e156f611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/passwordAlreadyRequested.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_32eb2c22307d1674c736adbb06c8a88f15993b2f93fe2ae7c89f86f8e156f611->leave($__internal_32eb2c22307d1674c736adbb06c8a88f15993b2f93fe2ae7c89f86f8e156f611_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe778d4354764caa40d4135fd02aeb51b59f1258f590f38afb94c702c1db8348 = $this->env->getExtension("native_profiler");
        $__internal_fe778d4354764caa40d4135fd02aeb51b59f1258f590f38afb94c702c1db8348->enter($__internal_fe778d4354764caa40d4135fd02aeb51b59f1258f590f38afb94c702c1db8348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "    ";
        $this->loadTemplate("::header.html.twig", "@User/Resetting/passwordAlreadyRequested.html.twig", 2)->display($context);
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "
    ";
        // line 4
        $this->loadTemplate("::footer.html.twig", "@User/Resetting/passwordAlreadyRequested.html.twig", 4)->display($context);
        
        $__internal_fe778d4354764caa40d4135fd02aeb51b59f1258f590f38afb94c702c1db8348->leave($__internal_fe778d4354764caa40d4135fd02aeb51b59f1258f590f38afb94c702c1db8348_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/*     {% include "::header.html.twig" %}*/
/*     {{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
