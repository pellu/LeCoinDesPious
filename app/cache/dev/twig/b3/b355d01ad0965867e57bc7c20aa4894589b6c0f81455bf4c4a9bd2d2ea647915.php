<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6958d29b820a4669c86f7d2527a90d117574f051c35fffaf0e62ee9b6f871ea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ce9e21df64ccae0fd56da77e1aba91bbab5322a005f73b65dc09cd55bb8c1b7 = $this->env->getExtension("native_profiler");
        $__internal_9ce9e21df64ccae0fd56da77e1aba91bbab5322a005f73b65dc09cd55bb8c1b7->enter($__internal_9ce9e21df64ccae0fd56da77e1aba91bbab5322a005f73b65dc09cd55bb8c1b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ce9e21df64ccae0fd56da77e1aba91bbab5322a005f73b65dc09cd55bb8c1b7->leave($__internal_9ce9e21df64ccae0fd56da77e1aba91bbab5322a005f73b65dc09cd55bb8c1b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c6ef818826a8a7d9dbf5d4d706f4676128367f79b92b8ac3f1d965eb70fde55 = $this->env->getExtension("native_profiler");
        $__internal_0c6ef818826a8a7d9dbf5d4d706f4676128367f79b92b8ac3f1d965eb70fde55->enter($__internal_0c6ef818826a8a7d9dbf5d4d706f4676128367f79b92b8ac3f1d965eb70fde55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0c6ef818826a8a7d9dbf5d4d706f4676128367f79b92b8ac3f1d965eb70fde55->leave($__internal_0c6ef818826a8a7d9dbf5d4d706f4676128367f79b92b8ac3f1d965eb70fde55_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0e962a3f451a514e52dfc687f28ae59ba737106017ebd0de2a9482f759f9be9 = $this->env->getExtension("native_profiler");
        $__internal_e0e962a3f451a514e52dfc687f28ae59ba737106017ebd0de2a9482f759f9be9->enter($__internal_e0e962a3f451a514e52dfc687f28ae59ba737106017ebd0de2a9482f759f9be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e0e962a3f451a514e52dfc687f28ae59ba737106017ebd0de2a9482f759f9be9->leave($__internal_e0e962a3f451a514e52dfc687f28ae59ba737106017ebd0de2a9482f759f9be9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_472bfb10a104fcbdba536707c02f0d147eb319cdfacdffdb3fa205fb8b7cbbc0 = $this->env->getExtension("native_profiler");
        $__internal_472bfb10a104fcbdba536707c02f0d147eb319cdfacdffdb3fa205fb8b7cbbc0->enter($__internal_472bfb10a104fcbdba536707c02f0d147eb319cdfacdffdb3fa205fb8b7cbbc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_472bfb10a104fcbdba536707c02f0d147eb319cdfacdffdb3fa205fb8b7cbbc0->leave($__internal_472bfb10a104fcbdba536707c02f0d147eb319cdfacdffdb3fa205fb8b7cbbc0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
