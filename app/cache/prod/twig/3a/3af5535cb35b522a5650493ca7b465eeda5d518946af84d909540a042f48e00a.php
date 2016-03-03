<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_31a16bc4b28af198e0395d796770b7844829cc030fe75c3ef5eaf7376c7ecb23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcd1683af012c6480b98c94d8d38921ebc6fca33c5eb07054bca4253b7be5075 = $this->env->getExtension("native_profiler");
        $__internal_fcd1683af012c6480b98c94d8d38921ebc6fca33c5eb07054bca4253b7be5075->enter($__internal_fcd1683af012c6480b98c94d8d38921ebc6fca33c5eb07054bca4253b7be5075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fcd1683af012c6480b98c94d8d38921ebc6fca33c5eb07054bca4253b7be5075->leave($__internal_fcd1683af012c6480b98c94d8d38921ebc6fca33c5eb07054bca4253b7be5075_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4c46d1ef9be1386aa7924e97000b4eb3b7418edae8653f94d25e3ba216d0d4e0 = $this->env->getExtension("native_profiler");
        $__internal_4c46d1ef9be1386aa7924e97000b4eb3b7418edae8653f94d25e3ba216d0d4e0->enter($__internal_4c46d1ef9be1386aa7924e97000b4eb3b7418edae8653f94d25e3ba216d0d4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_4c46d1ef9be1386aa7924e97000b4eb3b7418edae8653f94d25e3ba216d0d4e0->leave($__internal_4c46d1ef9be1386aa7924e97000b4eb3b7418edae8653f94d25e3ba216d0d4e0_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0bb31bd1e18e87693ae57f9942e3c3dd4ef79f0f3e6c2cbdfac7307a41dd738b = $this->env->getExtension("native_profiler");
        $__internal_0bb31bd1e18e87693ae57f9942e3c3dd4ef79f0f3e6c2cbdfac7307a41dd738b->enter($__internal_0bb31bd1e18e87693ae57f9942e3c3dd4ef79f0f3e6c2cbdfac7307a41dd738b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0bb31bd1e18e87693ae57f9942e3c3dd4ef79f0f3e6c2cbdfac7307a41dd738b->leave($__internal_0bb31bd1e18e87693ae57f9942e3c3dd4ef79f0f3e6c2cbdfac7307a41dd738b_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4d4b70e4202ab102bf40b6ecd249036fa447a3d79686c5cd9c9e42f9c97fe8fc = $this->env->getExtension("native_profiler");
        $__internal_4d4b70e4202ab102bf40b6ecd249036fa447a3d79686c5cd9c9e42f9c97fe8fc->enter($__internal_4d4b70e4202ab102bf40b6ecd249036fa447a3d79686c5cd9c9e42f9c97fe8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_4d4b70e4202ab102bf40b6ecd249036fa447a3d79686c5cd9c9e42f9c97fe8fc->leave($__internal_4d4b70e4202ab102bf40b6ecd249036fa447a3d79686c5cd9c9e42f9c97fe8fc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
