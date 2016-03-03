<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_08bd8ec37b0076f56e5056447ed5400e2ddba0af82dcaff4930ee5baee801b3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_f76aab4020db4016fa974dd3339f25377673834b2204fa3423f30e44d5362c22 = $this->env->getExtension("native_profiler");
        $__internal_f76aab4020db4016fa974dd3339f25377673834b2204fa3423f30e44d5362c22->enter($__internal_f76aab4020db4016fa974dd3339f25377673834b2204fa3423f30e44d5362c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f76aab4020db4016fa974dd3339f25377673834b2204fa3423f30e44d5362c22->leave($__internal_f76aab4020db4016fa974dd3339f25377673834b2204fa3423f30e44d5362c22_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_602537f2f0e67fd1114c31a8a904438f8dc6a7013cfb57e4ad97dce3054d3881 = $this->env->getExtension("native_profiler");
        $__internal_602537f2f0e67fd1114c31a8a904438f8dc6a7013cfb57e4ad97dce3054d3881->enter($__internal_602537f2f0e67fd1114c31a8a904438f8dc6a7013cfb57e4ad97dce3054d3881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_602537f2f0e67fd1114c31a8a904438f8dc6a7013cfb57e4ad97dce3054d3881->leave($__internal_602537f2f0e67fd1114c31a8a904438f8dc6a7013cfb57e4ad97dce3054d3881_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}, 'FOSUserBundle') }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
