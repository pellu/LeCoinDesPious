<?php

/* @BloggerBlog/Page/accueil.html.twig */
class __TwigTemplate_91c86adb71797d3beaa33cbe9b9998c4ab79a8445f56f4ad7247e10b562b0ef7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e22aa93f385cb4cb6c7f2f8bd6d66eb17a5baa258123a4d00bef225340142213 = $this->env->getExtension("native_profiler");
        $__internal_e22aa93f385cb4cb6c7f2f8bd6d66eb17a5baa258123a4d00bef225340142213->enter($__internal_e22aa93f385cb4cb6c7f2f8bd6d66eb17a5baa258123a4d00bef225340142213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Page/accueil.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e22aa93f385cb4cb6c7f2f8bd6d66eb17a5baa258123a4d00bef225340142213->leave($__internal_e22aa93f385cb4cb6c7f2f8bd6d66eb17a5baa258123a4d00bef225340142213_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8bae60b84f4fa080675c45e2a1999002b92b87ebecc9144a84c1c9712599f7ca = $this->env->getExtension("native_profiler");
        $__internal_8bae60b84f4fa080675c45e2a1999002b92b87ebecc9144a84c1c9712599f7ca->enter($__internal_8bae60b84f4fa080675c45e2a1999002b92b87ebecc9144a84c1c9712599f7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "    ";
        $this->loadTemplate("::header.html.twig", "@BloggerBlog/Page/accueil.html.twig", 2)->display($context);
        // line 3
        echo "    <style>
        .blog-artical{
            width: 97%;
        }
        .blog-artical-head img {
            position: relative;
            float: left;
        }
        .artical-date {
            width: 28.1%;
        }
        .artical-info {
            padding: 2% 2% 3% 30%;
        }
        .blog-tabs{
            margin-top: -60px;
            margin-bottom: 30px;
        }
        .blog-artical {
            padding-bottom: 0em;
        }
        .blog-section { margin-top: 10px; margin-bottom: 10px; }
    </style>
    ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "@BloggerBlog/Page/accueil.html.twig", 63)->display($context);
        
        $__internal_8bae60b84f4fa080675c45e2a1999002b92b87ebecc9144a84c1c9712599f7ca->leave($__internal_8bae60b84f4fa080675c45e2a1999002b92b87ebecc9144a84c1c9712599f7ca_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa3e07bea01af78a6750e4a0f186af2258508a16c4cb89b6a49c430ee316469a = $this->env->getExtension("native_profiler");
        $__internal_aa3e07bea01af78a6750e4a0f186af2258508a16c4cb89b6a49c430ee316469a->enter($__internal_aa3e07bea01af78a6750e4a0f186af2258508a16c4cb89b6a49c430ee316469a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 29
            echo "            <div class=\"blog-tabs\">
                <ul class=\"blog-section\">
                    <li class=\"blog-artical\">
                        <div class=\"blog-artical-head\">
                            <img src=\"http://localhost";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute($context["blog"], "image", array())))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo " image not found\" class=\"large\">
                            <ul class=\"artical-date\">
                                <li><a href=\"#\"><time datetime=\"";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", array()), "b"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", array()), "l, F j, Y"), "html", null, true);
            echo "</time></a></li>
                                <li><a class=\"text-icon\" href=\"#\"></a>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "author", array()), "html", null, true);
            echo "</li>
                                <div class=\"clear\"> </div>
                            </ul>
                        </div>
                        <div class=\"artical-info\">
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\"><h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo "</h4></a>
                            <p>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "blog", array(0 => 500), "method"), "html", null, true);
            echo "...</p>
                        </div>
                        <div class=\"artical-related-info\">
                            <div class=\"artical-related-info-row\">
                                <ul class=\"artical-related-info-row-left\">
                                    <li><a class=\"view\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\"><span> </span>4,200 vues</a></li>
                                    <li><a class=\"comment-icon\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\"><span> </span><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "comment", array()), "html", null, true);
            echo " commentaires</a></li>
                                </ul>
                                <ul class=\"artical-related-info-row-right\">
                                    <li><a class=\"articl-readmore\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\">Lire la suite</a></li>
                                </ul>
                                <div class=\"clear\"></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "            <p>La base de données contient aucun article</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    ";
        
        $__internal_aa3e07bea01af78a6750e4a0f186af2258508a16c4cb89b6a49c430ee316469a->leave($__internal_aa3e07bea01af78a6750e4a0f186af2258508a16c4cb89b6a49c430ee316469a_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Page/accueil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  164 => 62,  157 => 60,  143 => 51,  133 => 48,  129 => 47,  121 => 42,  115 => 41,  107 => 36,  101 => 35,  94 => 33,  88 => 29,  83 => 28,  80 => 27,  74 => 26,  66 => 63,  64 => 26,  39 => 3,  36 => 2,  24 => 1,);
    }
}
/* {% block fos_user_content %}*/
/*     {% include "::header.html.twig" %}*/
/*     <style>*/
/*         .blog-artical{*/
/*             width: 97%;*/
/*         }*/
/*         .blog-artical-head img {*/
/*             position: relative;*/
/*             float: left;*/
/*         }*/
/*         .artical-date {*/
/*             width: 28.1%;*/
/*         }*/
/*         .artical-info {*/
/*             padding: 2% 2% 3% 30%;*/
/*         }*/
/*         .blog-tabs{*/
/*             margin-top: -60px;*/
/*             margin-bottom: 30px;*/
/*         }*/
/*         .blog-artical {*/
/*             padding-bottom: 0em;*/
/*         }*/
/*         .blog-section { margin-top: 10px; margin-bottom: 10px; }*/
/*     </style>*/
/*     {% block body %}*/
/* */
/*         {% for blog in blogs %}*/
/*             <div class="blog-tabs">*/
/*                 <ul class="blog-section">*/
/*                     <li class="blog-artical">*/
/*                         <div class="blog-artical-head">*/
/*                             <img src="http://localhost{{ asset(['images/', blog.image]|join) }}" alt="{{ blog.title }} image not found" class="large">*/
/*                             <ul class="artical-date">*/
/*                                 <li><a href="#"><time datetime="{{ blog.created|date('b') }}">{{ blog.created|date('l, F j, Y') }}</time></a></li>*/
/*                                 <li><a class="text-icon" href="#"></a>{{blog.author}}</li>*/
/*                                 <div class="clear"> </div>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="artical-info">*/
/*                             <a href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id }) }}"><h4>{{ blog.title }}</h4></a>*/
/*                             <p>{{ blog.blog(500) }}...</p>*/
/*                         </div>*/
/*                         <div class="artical-related-info">*/
/*                             <div class="artical-related-info-row">*/
/*                                 <ul class="artical-related-info-row-left">*/
/*                                     <li><a class="view" href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id }) }}"><span> </span>4,200 vues</a></li>*/
/*                                     <li><a class="comment-icon" href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id }) }}"><span> </span><a href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id }) }}">{{ blog.comment }} commentaires</a></li>*/
/*                                 </ul>*/
/*                                 <ul class="artical-related-info-row-right">*/
/*                                     <li><a class="articl-readmore" href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id }) }}">Lire la suite</a></li>*/
/*                                 </ul>*/
/*                                 <div class="clear"></div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         {% else %}*/
/*             <p>La base de données contient aucun article</p>*/
/*         {% endfor %}*/
/*     {% endblock %}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
