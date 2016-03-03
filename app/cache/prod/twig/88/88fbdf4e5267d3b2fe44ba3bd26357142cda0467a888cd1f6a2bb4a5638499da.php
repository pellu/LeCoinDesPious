<?php

/* @BloggerBlog/Comment/create.html.twig */
class __TwigTemplate_611e0fc73dd857a4f50d2c1f85422f2c26dbf06f797917d5f90070e6b3a8f7e4 extends Twig_Template
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
        $__internal_1074d4f51a04d3c03c72045ec76db60c89715e19b52144d9888b8b8c2cf35335 = $this->env->getExtension("native_profiler");
        $__internal_1074d4f51a04d3c03c72045ec76db60c89715e19b52144d9888b8b8c2cf35335->enter($__internal_1074d4f51a04d3c03c72045ec76db60c89715e19b52144d9888b8b8c2cf35335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Comment/create.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_1074d4f51a04d3c03c72045ec76db60c89715e19b52144d9888b8b8c2cf35335->leave($__internal_1074d4f51a04d3c03c72045ec76db60c89715e19b52144d9888b8b8c2cf35335_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f801c7171f2a39f808dfc4b46ef66a3a04cad77a6fd9580bcddfcc49a9f9cfc = $this->env->getExtension("native_profiler");
        $__internal_6f801c7171f2a39f808dfc4b46ef66a3a04cad77a6fd9580bcddfcc49a9f9cfc->enter($__internal_6f801c7171f2a39f808dfc4b46ef66a3a04cad77a6fd9580bcddfcc49a9f9cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Add Comment";
        
        $__internal_6f801c7171f2a39f808dfc4b46ef66a3a04cad77a6fd9580bcddfcc49a9f9cfc->leave($__internal_6f801c7171f2a39f808dfc4b46ef66a3a04cad77a6fd9580bcddfcc49a9f9cfc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f20f74b5ec76df19264fbd990378ef40729defe6113bfa4685b6ec2a9434581 = $this->env->getExtension("native_profiler");
        $__internal_9f20f74b5ec76df19264fbd990378ef40729defe6113bfa4685b6ec2a9434581->enter($__internal_9f20f74b5ec76df19264fbd990378ef40729defe6113bfa4685b6ec2a9434581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Add comment for blog post \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", array()), "title", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 5
        $this->loadTemplate("BloggerBlogBundle:Comment:form.html.twig", "@BloggerBlog/Comment/create.html.twig", 5)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))));
        
        $__internal_9f20f74b5ec76df19264fbd990378ef40729defe6113bfa4685b6ec2a9434581->leave($__internal_9f20f74b5ec76df19264fbd990378ef40729defe6113bfa4685b6ec2a9434581_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Comment/create.html.twig";
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
