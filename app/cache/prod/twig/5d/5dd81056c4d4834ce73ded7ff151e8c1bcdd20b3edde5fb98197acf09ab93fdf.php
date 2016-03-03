<?php

/* @User/Registration/email.txt.twig */
class __TwigTemplate_7d402399d0057b1a4fd6a35732d1022c6fdef972f19d5c14f1eba69fd9a53969 extends Twig_Template
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
        $__internal_2999cfb8c5a0444b71eaa311bb840b1c8f01e0d181fe20ceea4ec63ab93a4400 = $this->env->getExtension("native_profiler");
        $__internal_2999cfb8c5a0444b71eaa311bb840b1c8f01e0d181fe20ceea4ec63ab93a4400->enter($__internal_2999cfb8c5a0444b71eaa311bb840b1c8f01e0d181fe20ceea4ec63ab93a4400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2999cfb8c5a0444b71eaa311bb840b1c8f01e0d181fe20ceea4ec63ab93a4400->leave($__internal_2999cfb8c5a0444b71eaa311bb840b1c8f01e0d181fe20ceea4ec63ab93a4400_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9049993122848fa0bed34cc9216206f7b9a20a154be753740df3761f300dffab = $this->env->getExtension("native_profiler");
        $__internal_9049993122848fa0bed34cc9216206f7b9a20a154be753740df3761f300dffab->enter($__internal_9049993122848fa0bed34cc9216206f7b9a20a154be753740df3761f300dffab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9049993122848fa0bed34cc9216206f7b9a20a154be753740df3761f300dffab->leave($__internal_9049993122848fa0bed34cc9216206f7b9a20a154be753740df3761f300dffab_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_212922a2a0c9e25bf0fc4ebb0b6d8d363a30e7234f1470d0901df0cb44636f31 = $this->env->getExtension("native_profiler");
        $__internal_212922a2a0c9e25bf0fc4ebb0b6d8d363a30e7234f1470d0901df0cb44636f31->enter($__internal_212922a2a0c9e25bf0fc4ebb0b6d8d363a30e7234f1470d0901df0cb44636f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_212922a2a0c9e25bf0fc4ebb0b6d8d363a30e7234f1470d0901df0cb44636f31->leave($__internal_212922a2a0c9e25bf0fc4ebb0b6d8d363a30e7234f1470d0901df0cb44636f31_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8be562f74d532a0f5dc94546b6470f3acc2693b9246fb8f851acab6a63606a53 = $this->env->getExtension("native_profiler");
        $__internal_8be562f74d532a0f5dc94546b6470f3acc2693b9246fb8f851acab6a63606a53->enter($__internal_8be562f74d532a0f5dc94546b6470f3acc2693b9246fb8f851acab6a63606a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8be562f74d532a0f5dc94546b6470f3acc2693b9246fb8f851acab6a63606a53->leave($__internal_8be562f74d532a0f5dc94546b6470f3acc2693b9246fb8f851acab6a63606a53_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
