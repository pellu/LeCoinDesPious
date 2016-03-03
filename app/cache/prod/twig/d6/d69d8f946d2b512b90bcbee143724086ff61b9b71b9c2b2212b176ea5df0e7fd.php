<?php

/* BloggerBlogBundle:Blog:show.html.twig */
class __TwigTemplate_736380ad69a70213ef3299dba2a1d40f24c519196c41dbc7fc0965bebdcc1714 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fcfb15e7282cafde23aac62ed8f217f96f322c8eb36cb2a342dda2ef1317f75a = $this->env->getExtension("native_profiler");
        $__internal_fcfb15e7282cafde23aac62ed8f217f96f322c8eb36cb2a342dda2ef1317f75a->enter($__internal_fcfb15e7282cafde23aac62ed8f217f96f322c8eb36cb2a342dda2ef1317f75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:show.html.twig"));

        // line 2
        $this->loadTemplate("::header.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 2)->display($context);
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 41
        $this->loadTemplate("::footer.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 41)->display($context);
        
        $__internal_fcfb15e7282cafde23aac62ed8f217f96f322c8eb36cb2a342dda2ef1317f75a->leave($__internal_fcfb15e7282cafde23aac62ed8f217f96f322c8eb36cb2a342dda2ef1317f75a_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_97d5a972b2197a17b262f6dadd925320af828252ca39c7e1a0d885ced94c028f = $this->env->getExtension("native_profiler");
        $__internal_97d5a972b2197a17b262f6dadd925320af828252ca39c7e1a0d885ced94c028f->enter($__internal_97d5a972b2197a17b262f6dadd925320af828252ca39c7e1a0d885ced94c028f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("http://localhost/LeCoinDesPious/web/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    <style>.blog-artical{  width: 97%;}
        img{width: 100%}
        .previous-comments{margin-left: 20px;}
        .previous-comments h3{font-size: 35px;}
        .blog-tabs{
            margin-top: -50px;
            margin-bottom: 50px;
        }
    </style>
";
        
        $__internal_97d5a972b2197a17b262f6dadd925320af828252ca39c7e1a0d885ced94c028f->leave($__internal_97d5a972b2197a17b262f6dadd925320af828252ca39c7e1a0d885ced94c028f_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b5703b09d1ca2ceb073acd19528f40f220e1cb3c5c7ef8fc9a17cc8b505926e = $this->env->getExtension("native_profiler");
        $__internal_8b5703b09d1ca2ceb073acd19528f40f220e1cb3c5c7ef8fc9a17cc8b505926e->enter($__internal_8b5703b09d1ca2ceb073acd19528f40f220e1cb3c5c7ef8fc9a17cc8b505926e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "    <div class=\"blog-tabs\">
        <ul class=\"blog-section\">
            <li class=\"blog-artical\">
                <div class=\"blog-artical-head\">
                    <img class=\"artical-img\" src=\"http://localhost";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "image2", array())))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo " image not found\" class=\"large\">
                    <ul class=\"artical-date\">
                        <li><a href=\"#\"><time datetime=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "b"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "l, F j, Y"), "html", null, true);
        echo "</time></a></li>
                        <li><a class=\"text-icon\" href=\"#\"> </a>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "author", array()), "html", null, true);
        echo "</li>
                        <div class=\"clear\"> </div>
                    </ul>
                </div>
                <div class=\"artical-info\">
                    <a href=\"#\"><h4>What is lorem ipsum ?</h4></a>
                    <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "blog", array()), "html", null, true);
        echo "</p>
                </div>
                <section class=\"comments\" id=\"comments\">
                    <section class=\"previous-comments\">
                        <h3>Commentaires</h3>
                        ";
        // line 34
        $this->loadTemplate("BloggerBlogBundle:Comment:index.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 34)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 35
        echo "                    </section>
                </section>
            </li>
        </ul>
    </div>
";
        
        $__internal_8b5703b09d1ca2ceb073acd19528f40f220e1cb3c5c7ef8fc9a17cc8b505926e->leave($__internal_8b5703b09d1ca2ceb073acd19528f40f220e1cb3c5c7ef8fc9a17cc8b505926e_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  104 => 34,  96 => 29,  87 => 23,  81 => 22,  74 => 20,  68 => 16,  62 => 15,  43 => 4,  37 => 3,  30 => 41,  28 => 15,  26 => 3,  24 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Blog/show.html.twig #}*/
/* {% include "::header.html.twig" %}*/
/* {% block stylesheets %}*/
/*     <link href="{{ asset('http://localhost/LeCoinDesPious/web/css/style.css') }}" type="text/css" rel="stylesheet" />*/
/*     <style>.blog-artical{  width: 97%;}*/
/*         img{width: 100%}*/
/*         .previous-comments{margin-left: 20px;}*/
/*         .previous-comments h3{font-size: 35px;}*/
/*         .blog-tabs{*/
/*             margin-top: -50px;*/
/*             margin-bottom: 50px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="blog-tabs">*/
/*         <ul class="blog-section">*/
/*             <li class="blog-artical">*/
/*                 <div class="blog-artical-head">*/
/*                     <img class="artical-img" src="http://localhost{{ asset(['images/', blog.image2]|join) }}" alt="{{ blog.title }} image not found" class="large">*/
/*                     <ul class="artical-date">*/
/*                         <li><a href="#"><time datetime="{{ blog.created|date('b') }}">{{ blog.created|date('l, F j, Y') }}</time></a></li>*/
/*                         <li><a class="text-icon" href="#"> </a>{{blog.author}}</li>*/
/*                         <div class="clear"> </div>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="artical-info">*/
/*                     <a href="#"><h4>What is lorem ipsum ?</h4></a>*/
/*                     <p>{{ blog.blog }}</p>*/
/*                 </div>*/
/*                 <section class="comments" id="comments">*/
/*                     <section class="previous-comments">*/
/*                         <h3>Commentaires</h3>*/
/*                         {% include 'BloggerBlogBundle:Comment:index.html.twig' with { 'comments': comments } %}*/
/*                     </section>*/
/*                 </section>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* {% include "::footer.html.twig" %}*/
