<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_ea38db710a5ec5b0a89c5fc53df1853fdcf65fca9e71d8ad6963952403ad826c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_81cec7fee769d3ecefd1ce9b9269f0bced494aacbf97869be5446d94628d7083 = $this->env->getExtension("native_profiler");
        $__internal_81cec7fee769d3ecefd1ce9b9269f0bced494aacbf97869be5446d94628d7083->enter($__internal_81cec7fee769d3ecefd1ce9b9269f0bced494aacbf97869be5446d94628d7083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81cec7fee769d3ecefd1ce9b9269f0bced494aacbf97869be5446d94628d7083->leave($__internal_81cec7fee769d3ecefd1ce9b9269f0bced494aacbf97869be5446d94628d7083_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_05a6d9b1c72ba2719eefc33f1c5c69d956b4eb8f5ee2d94778ff8821ff00888f = $this->env->getExtension("native_profiler");
        $__internal_05a6d9b1c72ba2719eefc33f1c5c69d956b4eb8f5ee2d94778ff8821ff00888f->enter($__internal_05a6d9b1c72ba2719eefc33f1c5c69d956b4eb8f5ee2d94778ff8821ff00888f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "<p>
";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_05a6d9b1c72ba2719eefc33f1c5c69d956b4eb8f5ee2d94778ff8821ff00888f->leave($__internal_05a6d9b1c72ba2719eefc33f1c5c69d956b4eb8f5ee2d94778ff8821ff00888f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}, 'FOSUserBundle') }}*/
/* </p>*/
/* {% endblock %}*/
/* */
