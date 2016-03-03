<?php

/* @BloggerBlog/Comment/create.html.twig */
class __TwigTemplate_d7b0e3e6b8f51ecefb4cc29c9619aae741a80217fdd9799483eb26363e1f87c5 extends Twig_Template
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
        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        echo "Add Comment";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Add comment for blog post \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "blog", array()), "title", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 5
        $this->loadTemplate("BloggerBlogBundle:Comment:form.html.twig", "@BloggerBlog/Comment/create.html.twig", 5)->display(array_merge($context, array("form" => (isset($context["form"]) ? $context["form"] : null))));
    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Comment/create.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  39 => 4,  36 => 3,  30 => 1,  26 => 3,  23 => 2,  21 => 1,);
    }
}
/* {% block title %}Add Comment{% endblock%}*/
/* */
/* {% block body %}*/
/*     <h1>Add comment for blog post "{{ comment.blog.title }}"</h1>*/
/*     {% include 'BloggerBlogBundle:Comment:form.html.twig' with { 'form': form } %}*/
/* {% endblock %}*/
