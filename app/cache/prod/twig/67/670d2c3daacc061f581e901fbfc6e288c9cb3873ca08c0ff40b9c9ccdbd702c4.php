<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_99e8005ac85d18a8f64756a2ebff489ba9816de6cd3231593ea03189ceeb3903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_158185f453a5efe87928e021bd8178ba345bd54b6d885487f1af825bd3980ab5 = $this->env->getExtension("native_profiler");
        $__internal_158185f453a5efe87928e021bd8178ba345bd54b6d885487f1af825bd3980ab5->enter($__internal_158185f453a5efe87928e021bd8178ba345bd54b6d885487f1af825bd3980ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_158185f453a5efe87928e021bd8178ba345bd54b6d885487f1af825bd3980ab5->leave($__internal_158185f453a5efe87928e021bd8178ba345bd54b6d885487f1af825bd3980ab5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_44ab5ef7cde1aca66826cb090a59d36b086ef1a75c4146033feaefc2d5233db5 = $this->env->getExtension("native_profiler");
        $__internal_44ab5ef7cde1aca66826cb090a59d36b086ef1a75c4146033feaefc2d5233db5->enter($__internal_44ab5ef7cde1aca66826cb090a59d36b086ef1a75c4146033feaefc2d5233db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_44ab5ef7cde1aca66826cb090a59d36b086ef1a75c4146033feaefc2d5233db5->leave($__internal_44ab5ef7cde1aca66826cb090a59d36b086ef1a75c4146033feaefc2d5233db5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
