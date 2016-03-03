<?php

/* @User/Resetting/email.txt.twig */
class __TwigTemplate_a04764c68d5ebfeaeb7679a2e64fc44cb1a4f7ecbac63313949477785849a55b extends Twig_Template
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
        $__internal_829025d785085fef3724266264d7753326a2fe416734f8d765a2508473b4e781 = $this->env->getExtension("native_profiler");
        $__internal_829025d785085fef3724266264d7753326a2fe416734f8d765a2508473b4e781->enter($__internal_829025d785085fef3724266264d7753326a2fe416734f8d765a2508473b4e781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_829025d785085fef3724266264d7753326a2fe416734f8d765a2508473b4e781->leave($__internal_829025d785085fef3724266264d7753326a2fe416734f8d765a2508473b4e781_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_d07cc616cf1cfffa0b295b1f294f638baa30f63d63802404dfeabe2c739bdfd1 = $this->env->getExtension("native_profiler");
        $__internal_d07cc616cf1cfffa0b295b1f294f638baa30f63d63802404dfeabe2c739bdfd1->enter($__internal_d07cc616cf1cfffa0b295b1f294f638baa30f63d63802404dfeabe2c739bdfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d07cc616cf1cfffa0b295b1f294f638baa30f63d63802404dfeabe2c739bdfd1->leave($__internal_d07cc616cf1cfffa0b295b1f294f638baa30f63d63802404dfeabe2c739bdfd1_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9ca611f73c7df1816757f24fb7c1797a0b2eb0a2d7742343b9f5241ec47e0313 = $this->env->getExtension("native_profiler");
        $__internal_9ca611f73c7df1816757f24fb7c1797a0b2eb0a2d7742343b9f5241ec47e0313->enter($__internal_9ca611f73c7df1816757f24fb7c1797a0b2eb0a2d7742343b9f5241ec47e0313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9ca611f73c7df1816757f24fb7c1797a0b2eb0a2d7742343b9f5241ec47e0313->leave($__internal_9ca611f73c7df1816757f24fb7c1797a0b2eb0a2d7742343b9f5241ec47e0313_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b639d6296928f7bcab7c8fc09c07529cbd5d5d6908b3adf5285906361efbed9f = $this->env->getExtension("native_profiler");
        $__internal_b639d6296928f7bcab7c8fc09c07529cbd5d5d6908b3adf5285906361efbed9f->enter($__internal_b639d6296928f7bcab7c8fc09c07529cbd5d5d6908b3adf5285906361efbed9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b639d6296928f7bcab7c8fc09c07529cbd5d5d6908b3adf5285906361efbed9f->leave($__internal_b639d6296928f7bcab7c8fc09c07529cbd5d5d6908b3adf5285906361efbed9f_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/email.txt.twig";
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
