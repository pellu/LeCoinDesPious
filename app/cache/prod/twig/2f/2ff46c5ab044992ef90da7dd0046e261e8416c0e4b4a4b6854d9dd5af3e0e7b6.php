<?php

/* @BloggerBlog/Blog/article.html.twig */
class __TwigTemplate_5beaf1a942069c22ab9873333683c011cd45353e382fc5f9d1ba29f2103fd98a extends Twig_Template
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
        $__internal_01b55e154d116c2de9b4bd4dbda3b5473bb81a9122ff998ee0ea6439a47e5a94 = $this->env->getExtension("native_profiler");
        $__internal_01b55e154d116c2de9b4bd4dbda3b5473bb81a9122ff998ee0ea6439a47e5a94->enter($__internal_01b55e154d116c2de9b4bd4dbda3b5473bb81a9122ff998ee0ea6439a47e5a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Blog/article.html.twig"));

        // line 1
        echo "<div class=\"blog-tabs\">
    <ul class=\"blog-section\">
        <li class=\"blog-artical\">
            <div class=\"blog-artical-head\">
                <img class=\"artical-img\" src=\"images/slider1.jpg\" alt=\"\">
                <ul class=\"artical-date\">
                    <li><a href=\"#\"><time datetime=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "b"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "l, F j, Y"), "html", null, true);
        echo "</time></a></li>
                    <li><a class=\"text-icon\" href=\"#\"> </a></li>
                    <div class=\"clear\"> </div>
                </ul>
            </div>
            <div class=\"artical-info\">
                <a href=\"#\"><h4>What is lorem ipsum ?</h4></a>
                <p>making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
            </div>
            <div class=\"artical-related-info\">
                <div class=\"artical-related-info-row\">
                    <ul class=\"artical-related-info-row-left\">
                        <li><a class=\"view\" href=\"#\"><span> </span>3,152</a></li>
                        <li><a class=\"comment-icon\" href=\"#\"><span> </span>21 comments</a></li>
                    </ul>
                    <ul class=\"artical-related-info-row-right\">
                        <li><a class=\"articl-readmore\" href=\"#\">Read More</a></li>
                    </ul>
                    <div class=\"clear\"> </div>
                </div>
            </div>
        </li>
    </ul>
</div>";
        
        $__internal_01b55e154d116c2de9b4bd4dbda3b5473bb81a9122ff998ee0ea6439a47e5a94->leave($__internal_01b55e154d116c2de9b4bd4dbda3b5473bb81a9122ff998ee0ea6439a47e5a94_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Blog/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  22 => 1,);
    }
}
/* <div class="blog-tabs">*/
/*     <ul class="blog-section">*/
/*         <li class="blog-artical">*/
/*             <div class="blog-artical-head">*/
/*                 <img class="artical-img" src="images/slider1.jpg" alt="">*/
/*                 <ul class="artical-date">*/
/*                     <li><a href="#"><time datetime="{{ blog.created|date('b') }}">{{ blog.created|date('l, F j, Y') }}</time></a></li>*/
/*                     <li><a class="text-icon" href="#"> </a></li>*/
/*                     <div class="clear"> </div>*/
/*                 </ul>*/
/*             </div>*/
/*             <div class="artical-info">*/
/*                 <a href="#"><h4>What is lorem ipsum ?</h4></a>*/
/*                 <p>making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>*/
/*             </div>*/
/*             <div class="artical-related-info">*/
/*                 <div class="artical-related-info-row">*/
/*                     <ul class="artical-related-info-row-left">*/
/*                         <li><a class="view" href="#"><span> </span>3,152</a></li>*/
/*                         <li><a class="comment-icon" href="#"><span> </span>21 comments</a></li>*/
/*                     </ul>*/
/*                     <ul class="artical-related-info-row-right">*/
/*                         <li><a class="articl-readmore" href="#">Read More</a></li>*/
/*                     </ul>*/
/*                     <div class="clear"> </div>*/
/*                 </div>*/
/*             </div>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
