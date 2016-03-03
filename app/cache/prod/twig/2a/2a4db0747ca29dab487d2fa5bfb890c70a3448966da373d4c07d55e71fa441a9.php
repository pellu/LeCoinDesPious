<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_a98de36a7d7e436336a0f71df5a51a1f4e63f8f228569e8c8c5c475d1f9f7b36 extends Twig_Template
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
        $__internal_d37e0cbc564eac346fa7fe033e1f38da57144bff3da1dd1bf30ef9c985cb4b6f = $this->env->getExtension("native_profiler");
        $__internal_d37e0cbc564eac346fa7fe033e1f38da57144bff3da1dd1bf30ef9c985cb4b6f->enter($__internal_d37e0cbc564eac346fa7fe033e1f38da57144bff3da1dd1bf30ef9c985cb4b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d37e0cbc564eac346fa7fe033e1f38da57144bff3da1dd1bf30ef9c985cb4b6f->leave($__internal_d37e0cbc564eac346fa7fe033e1f38da57144bff3da1dd1bf30ef9c985cb4b6f_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e8bead1607964309c20af67e97fcf2dda04a42d1cb83331303345138c9ff5f27 = $this->env->getExtension("native_profiler");
        $__internal_e8bead1607964309c20af67e97fcf2dda04a42d1cb83331303345138c9ff5f27->enter($__internal_e8bead1607964309c20af67e97fcf2dda04a42d1cb83331303345138c9ff5f27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e8bead1607964309c20af67e97fcf2dda04a42d1cb83331303345138c9ff5f27->leave($__internal_e8bead1607964309c20af67e97fcf2dda04a42d1cb83331303345138c9ff5f27_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_be312871317dc40db17b8b8b2b4be06de24f0cf981b157b410812b92bca238f6 = $this->env->getExtension("native_profiler");
        $__internal_be312871317dc40db17b8b8b2b4be06de24f0cf981b157b410812b92bca238f6->enter($__internal_be312871317dc40db17b8b8b2b4be06de24f0cf981b157b410812b92bca238f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_be312871317dc40db17b8b8b2b4be06de24f0cf981b157b410812b92bca238f6->leave($__internal_be312871317dc40db17b8b8b2b4be06de24f0cf981b157b410812b92bca238f6_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_d066c98a2b251032e502c6878cc9a9db77b46813b9b9503046e0ce7480d2e65d = $this->env->getExtension("native_profiler");
        $__internal_d066c98a2b251032e502c6878cc9a9db77b46813b9b9503046e0ce7480d2e65d->enter($__internal_d066c98a2b251032e502c6878cc9a9db77b46813b9b9503046e0ce7480d2e65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d066c98a2b251032e502c6878cc9a9db77b46813b9b9503046e0ce7480d2e65d->leave($__internal_d066c98a2b251032e502c6878cc9a9db77b46813b9b9503046e0ce7480d2e65d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
