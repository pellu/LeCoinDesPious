<?php

/* @BloggerBlog/Comment/form.html.twig */
class __TwigTemplate_9ebc46ed5d89be91f18f8555b98063b32e121576b88675f854f9ea09f0f1cb0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e4346d2b5ae0d406ed9953b6b03e73150190b941606f935b844384097c10e93 = $this->env->getExtension("native_profiler");
        $__internal_1e4346d2b5ae0d406ed9953b6b03e73150190b941606f935b844384097c10e93->enter($__internal_1e4346d2b5ae0d406ed9953b6b03e73150190b941606f935b844384097c10e93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Comment/form.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_comment_create", array("blog_id" => $this->getAttribute($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "blog", array()), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
</form>";
        
        $__internal_1e4346d2b5ae0d406ed9953b6b03e73150190b941606f935b844384097c10e93->leave($__internal_1e4346d2b5ae0d406ed9953b6b03e73150190b941606f935b844384097c10e93_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Comment/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('BloggerBlogBundle_comment_create', { 'blog_id' : comment.blog.id } ) }}" method="post" {{ form_enctype(form) }} class="blogger">*/
/*     {{ form_widget(form) }}*/
/*     <p>*/
/*         <input type="submit" value="Submit">*/
/*     </p>*/
/* </form>*/
