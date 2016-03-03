<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_2369c802c1d5bf1cf9f6c7b25346c98699f494a96690c925c5f029cb2f607682 extends Twig_Template
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
        $__internal_6aeef6ade8c9978de69433ff79c9a217c2717fdc9367da2dc3da820db1028d5d = $this->env->getExtension("native_profiler");
        $__internal_6aeef6ade8c9978de69433ff79c9a217c2717fdc9367da2dc3da820db1028d5d->enter($__internal_6aeef6ade8c9978de69433ff79c9a217c2717fdc9367da2dc3da820db1028d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_6aeef6ade8c9978de69433ff79c9a217c2717fdc9367da2dc3da820db1028d5d->leave($__internal_6aeef6ade8c9978de69433ff79c9a217c2717fdc9367da2dc3da820db1028d5d_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_59e9adf977205b60763df4c6b979f2fbe5b908b7b60ed12652f931cb42936b56 = $this->env->getExtension("native_profiler");
        $__internal_59e9adf977205b60763df4c6b979f2fbe5b908b7b60ed12652f931cb42936b56->enter($__internal_59e9adf977205b60763df4c6b979f2fbe5b908b7b60ed12652f931cb42936b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_59e9adf977205b60763df4c6b979f2fbe5b908b7b60ed12652f931cb42936b56->leave($__internal_59e9adf977205b60763df4c6b979f2fbe5b908b7b60ed12652f931cb42936b56_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  27 => 3,  23 => 1,);
    }
}
/* */
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
