<?php

/* @BloggerBlog/Page/index.html.twig */
class __TwigTemplate_ea9d8807725907fc7c5d0e81d7ed1eb1923ba5975f4930514820a897cd9702a6 extends Twig_Template
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
        $__internal_96e61730ae2a7a8819deef7e357bbe97a8e444f85e3e581cbc261c6487b545d9 = $this->env->getExtension("native_profiler");
        $__internal_96e61730ae2a7a8819deef7e357bbe97a8e444f85e3e581cbc261c6487b545d9->enter($__internal_96e61730ae2a7a8819deef7e357bbe97a8e444f85e3e581cbc261c6487b545d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Page/index.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_96e61730ae2a7a8819deef7e357bbe97a8e444f85e3e581cbc261c6487b545d9->leave($__internal_96e61730ae2a7a8819deef7e357bbe97a8e444f85e3e581cbc261c6487b545d9_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75c9952925a3d61777ebef3dcd276e42acce176fb15088524543610e5806dab9 = $this->env->getExtension("native_profiler");
        $__internal_75c9952925a3d61777ebef3dcd276e42acce176fb15088524543610e5806dab9->enter($__internal_75c9952925a3d61777ebef3dcd276e42acce176fb15088524543610e5806dab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "\t";
        $this->loadTemplate("::header.html.twig", "@BloggerBlog/Page/index.html.twig", 2)->display($context);
        // line 3
        echo "\t<style>
\t\t.blog-artical{
\t\t\twidth: 97%;
\t\t}
\t\t.blog-artical-head img {
\t\t\tposition: relative;
\t\t\tfloat: left;
\t\t}
\t\t.artical-date {
\t\t\twidth: 28.1%;
\t\t}
\t\t.artical-info {
\t\t\tpadding: 2% 2% 3% 30%;
\t\t}
\t\t.blog-tabs{
\t\t\tmargin-top: -60px;
\t\t\tmargin-bottom: 30px;
\t\t}
\t\t.blog-artical {
\t\t\tpadding-bottom: 0em;
\t\t}
\t\t.blog-section { margin-top: 10px; margin-bottom: 10px; }
\t</style>
\t";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 62
        echo "\t";
        $this->loadTemplate("::footer.html.twig", "@BloggerBlog/Page/index.html.twig", 62)->display($context);
        
        $__internal_75c9952925a3d61777ebef3dcd276e42acce176fb15088524543610e5806dab9->leave($__internal_75c9952925a3d61777ebef3dcd276e42acce176fb15088524543610e5806dab9_prof);

    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
        $__internal_b87eb8a30742f2f9283bdcc7689a99710da586ca050600efeec3a6597095ccc4 = $this->env->getExtension("native_profiler");
        $__internal_b87eb8a30742f2f9283bdcc7689a99710da586ca050600efeec3a6597095ccc4->enter($__internal_b87eb8a30742f2f9283bdcc7689a99710da586ca050600efeec3a6597095ccc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 27
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 28
            echo "\t\t\t<div class=\"blog-tabs\">
\t\t\t\t<ul class=\"blog-section\">
\t\t\t\t\t<li class=\"blog-artical\">
\t\t\t\t\t\t<div class=\"blog-artical-head\">
\t\t\t\t\t\t\t<img src=\"http://localhost";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(twig_join_filter(array(0 => "images/", 1 => $this->getAttribute($context["blog"], "image", array())))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo " image not found\" class=\"large\">
\t\t\t\t\t\t\t<ul class=\"artical-date\">
\t\t\t\t\t\t\t\t<li><a href=\"#\"><time datetime=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", array()), "b"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", array()), "l, F j, Y"), "html", null, true);
            echo "</time></a></li>
\t\t\t\t\t\t\t\t<li><a class=\"text-icon\" href=\"#\"></a>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "author", array()), "html", null, true);
            echo "</li>
\t\t\t\t\t\t\t\t<div class=\"clear\"> </div>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"artical-info\">
\t\t\t\t\t\t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\"><h4>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo "</h4></a>
\t\t\t\t\t\t\t<p>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "blog", array(0 => 500), "method"), "html", null, true);
            echo "...</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"artical-related-info\">
\t\t\t\t\t\t\t<div class=\"artical-related-info-row\">
\t\t\t\t\t\t\t\t<ul class=\"artical-related-info-row-left\">
\t\t\t\t\t\t\t\t\t<li><a class=\"view\" href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\"><span> </span>4,200 vues</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"comment-icon\" href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\"><span> </span><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "comment", array()), "html", null, true);
            echo " commentaires</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<ul class=\"artical-related-info-row-right\">
\t\t\t\t\t\t\t\t\t<li><a class=\"articl-readmore\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("BloggerBlogBundle_blog_show", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\">Lire la suite</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "\t\t\t<p>La base de données contient aucun article</p>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t";
        
        $__internal_b87eb8a30742f2f9283bdcc7689a99710da586ca050600efeec3a6597095ccc4->leave($__internal_b87eb8a30742f2f9283bdcc7689a99710da586ca050600efeec3a6597095ccc4_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Page/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  162 => 61,  155 => 59,  141 => 50,  131 => 47,  127 => 46,  119 => 41,  113 => 40,  105 => 35,  99 => 34,  92 => 32,  86 => 28,  80 => 27,  74 => 26,  66 => 62,  64 => 26,  39 => 3,  36 => 2,  24 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* 	{% include "::header.html.twig" %}*/
/* 	<style>*/
/* 		.blog-artical{*/
/* 			width: 97%;*/
/* 		}*/
/* 		.blog-artical-head img {*/
/* 			position: relative;*/
/* 			float: left;*/
/* 		}*/
/* 		.artical-date {*/
/* 			width: 28.1%;*/
/* 		}*/
/* 		.artical-info {*/
/* 			padding: 2% 2% 3% 30%;*/
/* 		}*/
/* 		.blog-tabs{*/
/* 			margin-top: -60px;*/
/* 			margin-bottom: 30px;*/
/* 		}*/
/* 		.blog-artical {*/
/* 			padding-bottom: 0em;*/
/* 		}*/
/* 		.blog-section { margin-top: 10px; margin-bottom: 10px; }*/
/* 	</style>*/
/* 	{% block body %}*/
/* 		{% for blog in blogs %}*/
/* 			<div class="blog-tabs">*/
/* 				<ul class="blog-section">*/
/* 					<li class="blog-artical">*/
/* 						<div class="blog-artical-head">*/
/* 							<img src="http://localhost{{ asset(['images/', blog.image]|join) }}" alt="{{ blog.title }} image not found" class="large">*/
/* 							<ul class="artical-date">*/
/* 								<li><a href="#"><time datetime="{{ blog.created|date('b') }}">{{ blog.created|date('l, F j, Y') }}</time></a></li>*/
/* 								<li><a class="text-icon" href="#"></a>{{blog.author}}</li>*/
/* 								<div class="clear"> </div>*/
/* 							</ul>*/
/* 						</div>*/
/* 						<div class="artical-info">*/
/* 							<a href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id }) }}"><h4>{{ blog.title }}</h4></a>*/
/* 							<p>{{ blog.blog(500) }}...</p>*/
/* 						</div>*/
/* 						<div class="artical-related-info">*/
/* 							<div class="artical-related-info-row">*/
/* 								<ul class="artical-related-info-row-left">*/
/* 									<li><a class="view" href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id }) }}"><span> </span>4,200 vues</a></li>*/
/* 									<li><a class="comment-icon" href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id }) }}"><span> </span><a href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id }) }}">{{ blog.comment }} commentaires</a></li>*/
/* 								</ul>*/
/* 								<ul class="artical-related-info-row-right">*/
/* 									<li><a class="articl-readmore" href="{{ path('BloggerBlogBundle_blog_show', { 'id': blog.id }) }}">Lire la suite</a></li>*/
/* 								</ul>*/
/* 								<div class="clear"></div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</li>*/
/* 				</ul>*/
/* 			</div>*/
/* 		{% else %}*/
/* 			<p>La base de données contient aucun article</p>*/
/* 		{% endfor %}*/
/* 	{% endblock %}*/
/* 	{% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
