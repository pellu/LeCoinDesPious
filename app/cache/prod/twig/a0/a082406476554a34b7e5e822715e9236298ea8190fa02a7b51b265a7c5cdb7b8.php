<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_847c3a3132910f37171a15c73a189a4ce460f78ed285d4f84bfe04b235c253e2 extends Twig_Template
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
        $__internal_a9722a63063ae127534c9ecfa59cb81000a100738e3455f0bdb9f5f94ece5a83 = $this->env->getExtension("native_profiler");
        $__internal_a9722a63063ae127534c9ecfa59cb81000a100738e3455f0bdb9f5f94ece5a83->enter($__internal_a9722a63063ae127534c9ecfa59cb81000a100738e3455f0bdb9f5f94ece5a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9722a63063ae127534c9ecfa59cb81000a100738e3455f0bdb9f5f94ece5a83->leave($__internal_a9722a63063ae127534c9ecfa59cb81000a100738e3455f0bdb9f5f94ece5a83_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4df030ed4c6afc6cbf1ae9578b69c530b363ca26c18f2d61f960f53d16afda69 = $this->env->getExtension("native_profiler");
        $__internal_4df030ed4c6afc6cbf1ae9578b69c530b363ca26c18f2d61f960f53d16afda69->enter($__internal_4df030ed4c6afc6cbf1ae9578b69c530b363ca26c18f2d61f960f53d16afda69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4df030ed4c6afc6cbf1ae9578b69c530b363ca26c18f2d61f960f53d16afda69->leave($__internal_4df030ed4c6afc6cbf1ae9578b69c530b363ca26c18f2d61f960f53d16afda69_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff25479f45b54cfdf806c45f6740b5f00fe3a28390f94ce0b1640dba441b6409 = $this->env->getExtension("native_profiler");
        $__internal_ff25479f45b54cfdf806c45f6740b5f00fe3a28390f94ce0b1640dba441b6409->enter($__internal_ff25479f45b54cfdf806c45f6740b5f00fe3a28390f94ce0b1640dba441b6409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ff25479f45b54cfdf806c45f6740b5f00fe3a28390f94ce0b1640dba441b6409->leave($__internal_ff25479f45b54cfdf806c45f6740b5f00fe3a28390f94ce0b1640dba441b6409_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_56d12cf1dc17c88e7570a9464e351c16dedcddbb4b9343031c538f9032abcd06 = $this->env->getExtension("native_profiler");
        $__internal_56d12cf1dc17c88e7570a9464e351c16dedcddbb4b9343031c538f9032abcd06->enter($__internal_56d12cf1dc17c88e7570a9464e351c16dedcddbb4b9343031c538f9032abcd06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_56d12cf1dc17c88e7570a9464e351c16dedcddbb4b9343031c538f9032abcd06->leave($__internal_56d12cf1dc17c88e7570a9464e351c16dedcddbb4b9343031c538f9032abcd06_prof);

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
