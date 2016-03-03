<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6ba858fbf666fa07459d768a7b95b247d08c51de4da12d586862c16e9ebd6e7f extends Twig_Template
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
        $__internal_a2c4700706e06d156cb80e7efad97d12f9b93568d7fddd6c59d74395d1dbac9d = $this->env->getExtension("native_profiler");
        $__internal_a2c4700706e06d156cb80e7efad97d12f9b93568d7fddd6c59d74395d1dbac9d->enter($__internal_a2c4700706e06d156cb80e7efad97d12f9b93568d7fddd6c59d74395d1dbac9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2c4700706e06d156cb80e7efad97d12f9b93568d7fddd6c59d74395d1dbac9d->leave($__internal_a2c4700706e06d156cb80e7efad97d12f9b93568d7fddd6c59d74395d1dbac9d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ea5dc598022c638ced7d7186b7b329c6630ef220616b74254f49636aa4b3f53 = $this->env->getExtension("native_profiler");
        $__internal_2ea5dc598022c638ced7d7186b7b329c6630ef220616b74254f49636aa4b3f53->enter($__internal_2ea5dc598022c638ced7d7186b7b329c6630ef220616b74254f49636aa4b3f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2ea5dc598022c638ced7d7186b7b329c6630ef220616b74254f49636aa4b3f53->leave($__internal_2ea5dc598022c638ced7d7186b7b329c6630ef220616b74254f49636aa4b3f53_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2687a2e05e3af8f934301819cd809979382e504959d21751e6bc497bec74e191 = $this->env->getExtension("native_profiler");
        $__internal_2687a2e05e3af8f934301819cd809979382e504959d21751e6bc497bec74e191->enter($__internal_2687a2e05e3af8f934301819cd809979382e504959d21751e6bc497bec74e191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2687a2e05e3af8f934301819cd809979382e504959d21751e6bc497bec74e191->leave($__internal_2687a2e05e3af8f934301819cd809979382e504959d21751e6bc497bec74e191_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_264b0622651b7c155babb4a930a577252563393954d392a99211adb76ce4534c = $this->env->getExtension("native_profiler");
        $__internal_264b0622651b7c155babb4a930a577252563393954d392a99211adb76ce4534c->enter($__internal_264b0622651b7c155babb4a930a577252563393954d392a99211adb76ce4534c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_264b0622651b7c155babb4a930a577252563393954d392a99211adb76ce4534c->leave($__internal_264b0622651b7c155babb4a930a577252563393954d392a99211adb76ce4534c_prof);

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
