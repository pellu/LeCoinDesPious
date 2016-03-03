<?php

/* @User/Registration/register.html.twig */
class __TwigTemplate_dee222080fea3115c32e313568524724f6479970829f9f584e0d891aa09f56ce extends Twig_Template
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
        $__internal_76e7fb42716811d8612c0a80b856b45bc4dd6a23b3dc7a2cee4503b6dc4fbb1a = $this->env->getExtension("native_profiler");
        $__internal_76e7fb42716811d8612c0a80b856b45bc4dd6a23b3dc7a2cee4503b6dc4fbb1a->enter($__internal_76e7fb42716811d8612c0a80b856b45bc4dd6a23b3dc7a2cee4503b6dc4fbb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/register.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_76e7fb42716811d8612c0a80b856b45bc4dd6a23b3dc7a2cee4503b6dc4fbb1a->leave($__internal_76e7fb42716811d8612c0a80b856b45bc4dd6a23b3dc7a2cee4503b6dc4fbb1a_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_48a2ab798fa46431359fc84759d1609b6b7026447965d0298fe6a824e30f863d = $this->env->getExtension("native_profiler");
        $__internal_48a2ab798fa46431359fc84759d1609b6b7026447965d0298fe6a824e30f863d->enter($__internal_48a2ab798fa46431359fc84759d1609b6b7026447965d0298fe6a824e30f863d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "    ";
        $this->loadTemplate("::header.html.twig", "@User/Registration/register.html.twig", 2)->display($context);
        // line 3
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@User/Registration/register.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "@User/Registration/register.html.twig", 4)->display($context);
        
        $__internal_48a2ab798fa46431359fc84759d1609b6b7026447965d0298fe6a824e30f863d->leave($__internal_48a2ab798fa46431359fc84759d1609b6b7026447965d0298fe6a824e30f863d_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/*     {% include "::header.html.twig" %}*/
/*     {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
