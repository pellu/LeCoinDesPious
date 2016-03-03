<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_3f61f7d332e440725552b14a89cb58a326eeb6dae86273baa01cb6aef9763796 extends Twig_Template
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
        $__internal_9baddf93ecee9dc37b6b70d6647de3c25e110823e7b511a0a662b9ad3eeb963c = $this->env->getExtension("native_profiler");
        $__internal_9baddf93ecee9dc37b6b70d6647de3c25e110823e7b511a0a662b9ad3eeb963c->enter($__internal_9baddf93ecee9dc37b6b70d6647de3c25e110823e7b511a0a662b9ad3eeb963c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9baddf93ecee9dc37b6b70d6647de3c25e110823e7b511a0a662b9ad3eeb963c->leave($__internal_9baddf93ecee9dc37b6b70d6647de3c25e110823e7b511a0a662b9ad3eeb963c_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_6ba1dff21abaa51149f4a1ffce1dc8e02e29e844bbe10bc5506f4423a2c8327b = $this->env->getExtension("native_profiler");
        $__internal_6ba1dff21abaa51149f4a1ffce1dc8e02e29e844bbe10bc5506f4423a2c8327b->enter($__internal_6ba1dff21abaa51149f4a1ffce1dc8e02e29e844bbe10bc5506f4423a2c8327b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_6ba1dff21abaa51149f4a1ffce1dc8e02e29e844bbe10bc5506f4423a2c8327b->leave($__internal_6ba1dff21abaa51149f4a1ffce1dc8e02e29e844bbe10bc5506f4423a2c8327b_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_884bbaa9371e32e39b31152fd23e03bb59c07ddc163e088365159dbdd55fe372 = $this->env->getExtension("native_profiler");
        $__internal_884bbaa9371e32e39b31152fd23e03bb59c07ddc163e088365159dbdd55fe372->enter($__internal_884bbaa9371e32e39b31152fd23e03bb59c07ddc163e088365159dbdd55fe372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_884bbaa9371e32e39b31152fd23e03bb59c07ddc163e088365159dbdd55fe372->leave($__internal_884bbaa9371e32e39b31152fd23e03bb59c07ddc163e088365159dbdd55fe372_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_faff680ac9cb76543f212019b724d7b851bfa33cf1cb4f1a52020e670d3f3baa = $this->env->getExtension("native_profiler");
        $__internal_faff680ac9cb76543f212019b724d7b851bfa33cf1cb4f1a52020e670d3f3baa->enter($__internal_faff680ac9cb76543f212019b724d7b851bfa33cf1cb4f1a52020e670d3f3baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_faff680ac9cb76543f212019b724d7b851bfa33cf1cb4f1a52020e670d3f3baa->leave($__internal_faff680ac9cb76543f212019b724d7b851bfa33cf1cb4f1a52020e670d3f3baa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
