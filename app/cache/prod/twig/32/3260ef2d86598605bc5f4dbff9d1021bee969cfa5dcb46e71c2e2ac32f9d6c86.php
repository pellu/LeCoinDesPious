<?php

/* @User/Resetting/checkEmail.html.twig */
class __TwigTemplate_7889881950ec240068b938d1235a2f4eacdac7b0d660506c66227c79feae8e08 extends Twig_Template
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
        $__internal_553faca563f585cec5155822d70e04894f5abf8c1f9d073154493f45994a59c1 = $this->env->getExtension("native_profiler");
        $__internal_553faca563f585cec5155822d70e04894f5abf8c1f9d073154493f45994a59c1->enter($__internal_553faca563f585cec5155822d70e04894f5abf8c1f9d073154493f45994a59c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/checkEmail.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_553faca563f585cec5155822d70e04894f5abf8c1f9d073154493f45994a59c1->leave($__internal_553faca563f585cec5155822d70e04894f5abf8c1f9d073154493f45994a59c1_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_615f10362e142a67def1d05080ed5116ad7d8f192fc2d8f657e24feeefbd90d3 = $this->env->getExtension("native_profiler");
        $__internal_615f10362e142a67def1d05080ed5116ad7d8f192fc2d8f657e24feeefbd90d3->enter($__internal_615f10362e142a67def1d05080ed5116ad7d8f192fc2d8f657e24feeefbd90d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "    ";
        $this->loadTemplate("::header.html.twig", "@User/Resetting/checkEmail.html.twig", 2)->display($context);
        // line 3
        echo "<p>
";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
    ";
        // line 6
        $this->loadTemplate("::footer.html.twig", "@User/Resetting/checkEmail.html.twig", 6)->display($context);
        
        $__internal_615f10362e142a67def1d05080ed5116ad7d8f192fc2d8f657e24feeefbd90d3->leave($__internal_615f10362e142a67def1d05080ed5116ad7d8f192fc2d8f657e24feeefbd90d3_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/checkEmail.html.twig";
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
