<?php

/* BloggerBlogBundle:Comment:create.html.twig */
class __TwigTemplate_d6be0d2f36d3708473b3d418cff6ffecb8cb4643c76181e301b6b264991ace25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1d5ce4909047046e9a9f386f81adcd1051bd22a60be8505284b2e6be5ea6d56 = $this->env->getExtension("native_profiler");
        $__internal_b1d5ce4909047046e9a9f386f81adcd1051bd22a60be8505284b2e6be5ea6d56->enter($__internal_b1d5ce4909047046e9a9f386f81adcd1051bd22a60be8505284b2e6be5ea6d56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:create.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_b1d5ce4909047046e9a9f386f81adcd1051bd22a60be8505284b2e6be5ea6d56->leave($__internal_b1d5ce4909047046e9a9f386f81adcd1051bd22a60be8505284b2e6be5ea6d56_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecd41576f6abd346268141d36310b26d053b3e897b1e469b5c37926076f95e0a = $this->env->getExtension("native_profiler");
        $__internal_ecd41576f6abd346268141d36310b26d053b3e897b1e469b5c37926076f95e0a->enter($__internal_ecd41576f6abd346268141d36310b26d053b3e897b1e469b5c37926076f95e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add Comment";
        
        $__internal_ecd41576f6abd346268141d36310b26d053b3e897b1e469b5c37926076f95e0a->leave($__internal_ecd41576f6abd346268141d36310b26d053b3e897b1e469b5c37926076f95e0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd230ad194917d1ce5c0a04cd8e993996add1ead3d2677603e835d2ed624ab76 = $this->env->getExtension("native_profiler");
        $__internal_fd230ad194917d1ce5c0a04cd8e993996add1ead3d2677603e835d2ed624ab76->enter($__internal_fd230ad194917d1ce5c0a04cd8e993996add1ead3d2677603e835d2ed624ab76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Add comment for blog post \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", array()), "title", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 5
        $this->loadTemplate("BloggerBlogBundle:Comment:form.html.twig", "BloggerBlogBundle:Comment:create.html.twig", 5)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        
        $__internal_fd230ad194917d1ce5c0a04cd8e993996add1ead3d2677603e835d2ed624ab76->leave($__internal_fd230ad194917d1ce5c0a04cd8e993996add1ead3d2677603e835d2ed624ab76_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:create.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 5,  54 => 4,  48 => 3,  36 => 1,  29 => 3,  26 => 2,  24 => 1,);
    }
}
/* {% block title %}Add Comment{% endblock%}*/
/* */
/* {% block body %}*/
/*     <h1>Add comment for blog post "{{ comment.blog.title }}"</h1>*/
/*     {% include 'BloggerBlogBundle:Comment:form.html.twig' with { 'form': form } %}*/
/* {% endblock %}*/
