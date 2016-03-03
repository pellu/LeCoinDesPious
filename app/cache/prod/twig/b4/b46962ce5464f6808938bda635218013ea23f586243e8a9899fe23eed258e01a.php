<?php

/* @User/Registration/checkEmail.html.twig */
class __TwigTemplate_ad6bc4ae633fdc194b93b344784dbb7c5e6d57f44e9673aaa87f7f96ca247827 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@User/Registration/checkEmail.html.twig", 1);
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
        $__internal_9b44fee2c10b2b0e128797a8faec9102973dfbcd9af86deb7c89382b582277f5 = $this->env->getExtension("native_profiler");
        $__internal_9b44fee2c10b2b0e128797a8faec9102973dfbcd9af86deb7c89382b582277f5->enter($__internal_9b44fee2c10b2b0e128797a8faec9102973dfbcd9af86deb7c89382b582277f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b44fee2c10b2b0e128797a8faec9102973dfbcd9af86deb7c89382b582277f5->leave($__internal_9b44fee2c10b2b0e128797a8faec9102973dfbcd9af86deb7c89382b582277f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a2f5c5e3b6681129656e187e92182fe8d5c9e8710ecf6dc2d0342c79c559f542 = $this->env->getExtension("native_profiler");
        $__internal_a2f5c5e3b6681129656e187e92182fe8d5c9e8710ecf6dc2d0342c79c559f542->enter($__internal_a2f5c5e3b6681129656e187e92182fe8d5c9e8710ecf6dc2d0342c79c559f542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a2f5c5e3b6681129656e187e92182fe8d5c9e8710ecf6dc2d0342c79c559f542->leave($__internal_a2f5c5e3b6681129656e187e92182fe8d5c9e8710ecf6dc2d0342c79c559f542_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/checkEmail.html.twig";
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
