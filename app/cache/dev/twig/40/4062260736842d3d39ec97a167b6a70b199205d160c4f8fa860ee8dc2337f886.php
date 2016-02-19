<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_fe35a9738c37fd8fa77187563a0d69d470cda9ffcbcb79e179ee1ed6408b140e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_a0d522bfe389b24eb5b214a795e55ca87ac4e2009d1d34248afc5e9da1b39ec4 = $this->env->getExtension("native_profiler");
        $__internal_a0d522bfe389b24eb5b214a795e55ca87ac4e2009d1d34248afc5e9da1b39ec4->enter($__internal_a0d522bfe389b24eb5b214a795e55ca87ac4e2009d1d34248afc5e9da1b39ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d522bfe389b24eb5b214a795e55ca87ac4e2009d1d34248afc5e9da1b39ec4->leave($__internal_a0d522bfe389b24eb5b214a795e55ca87ac4e2009d1d34248afc5e9da1b39ec4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a5d6438083e3c8c214f8690f3160739416564a2d137c2cf31558b2cfded867b6 = $this->env->getExtension("native_profiler");
        $__internal_a5d6438083e3c8c214f8690f3160739416564a2d137c2cf31558b2cfded867b6->enter($__internal_a5d6438083e3c8c214f8690f3160739416564a2d137c2cf31558b2cfded867b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a5d6438083e3c8c214f8690f3160739416564a2d137c2cf31558b2cfded867b6->leave($__internal_a5d6438083e3c8c214f8690f3160739416564a2d137c2cf31558b2cfded867b6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_466a85dbe1b6ff8c014c5ea633c810d03414dc62be7ecce24fb736f93b986d7e = $this->env->getExtension("native_profiler");
        $__internal_466a85dbe1b6ff8c014c5ea633c810d03414dc62be7ecce24fb736f93b986d7e->enter($__internal_466a85dbe1b6ff8c014c5ea633c810d03414dc62be7ecce24fb736f93b986d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_466a85dbe1b6ff8c014c5ea633c810d03414dc62be7ecce24fb736f93b986d7e->leave($__internal_466a85dbe1b6ff8c014c5ea633c810d03414dc62be7ecce24fb736f93b986d7e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_90c4358795e157e02c713dadcf12cb2cadba5442e574b18b46cb203172c46389 = $this->env->getExtension("native_profiler");
        $__internal_90c4358795e157e02c713dadcf12cb2cadba5442e574b18b46cb203172c46389->enter($__internal_90c4358795e157e02c713dadcf12cb2cadba5442e574b18b46cb203172c46389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_90c4358795e157e02c713dadcf12cb2cadba5442e574b18b46cb203172c46389->leave($__internal_90c4358795e157e02c713dadcf12cb2cadba5442e574b18b46cb203172c46389_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
