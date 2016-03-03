<?php

/* @BloggerBlog/Blog/show.html.twig */
class __TwigTemplate_85a1c94be09fb2d22fcca9190d5d37b3971d2476925d95c5bf69151c1fb61253 extends Twig_Template
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
        $__internal_f02fcdd0e6186c99ebac35855d83ac3e706a873d7a43250b67faf678394882e4 = $this->env->getExtension("native_profiler");
        $__internal_f02fcdd0e6186c99ebac35855d83ac3e706a873d7a43250b67faf678394882e4->enter($__internal_f02fcdd0e6186c99ebac35855d83ac3e706a873d7a43250b67faf678394882e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Blog/show.html.twig"));

        // line 2
        $this->loadTemplate("::header.html.twig", "@BloggerBlog/Blog/show.html.twig", 2)->display($context);
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 41
        $this->loadTemplate("::footer.html.twig", "@BloggerBlog/Blog/show.html.twig", 41)->display($context);
        
        $__internal_f02fcdd0e6186c99ebac35855d83ac3e706a873d7a43250b67faf678394882e4->leave($__internal_f02fcdd0e6186c99ebac35855d83ac3e706a873d7a43250b67faf678394882e4_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a065c462bfe5324b0b5533939969b747062b7c0c32a24b2e0115d30c9e869fc = $this->env->getExtension("native_profiler");
        $__internal_2a065c462bfe5324b0b5533939969b747062b7c0c32a24b2e0115d30c9e869fc->enter($__internal_2a065c462bfe5324b0b5533939969b747062b7c0c32a24b2e0115d30c9e869fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_2a065c462bfe5324b0b5533939969b747062b7c0c32a24b2e0115d30c9e869fc->leave($__internal_2a065c462bfe5324b0b5533939969b747062b7c0c32a24b2e0115d30c9e869fc_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1b0b118955bcbfc2646c4ad8a9f0a7fe1e32d1a09b030a34e9b142d664569d3 = $this->env->getExtension("native_profiler");
        $__internal_c1b0b118955bcbfc2646c4ad8a9f0a7fe1e32d1a09b030a34e9b142d664569d3->enter($__internal_c1b0b118955bcbfc2646c4ad8a9f0a7fe1e32d1a09b030a34e9b142d664569d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $this->loadTemplate("BloggerBlogBundle:Comment:index.html.twig", "@BloggerBlog/Blog/show.html.twig", 34)->display(array_merge($context, array("comments" => (isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")))));
        // line 35
        echo "                    </section>
                </section>
            </li>
        </ul>
    </div>
";
        
        $__internal_c1b0b118955bcbfc2646c4ad8a9f0a7fe1e32d1a09b030a34e9b142d664569d3->leave($__internal_c1b0b118955bcbfc2646c4ad8a9f0a7fe1e32d1a09b030a34e9b142d664569d3_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Blog/show.html.twig";
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
