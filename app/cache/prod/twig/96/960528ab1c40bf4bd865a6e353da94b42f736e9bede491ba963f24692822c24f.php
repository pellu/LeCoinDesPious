<?php

/* article.html.twig */
class __TwigTemplate_972b30c63eb77fb1e5f76570b6ab911097be8c2cf515b40d312fa1481ba1547b extends Twig_Template
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
        $__internal_388f494bc50985f6bb1539c4542395194d9b44a234d18871745a7e8e9a90fdbf = $this->env->getExtension("native_profiler");
        $__internal_388f494bc50985f6bb1539c4542395194d9b44a234d18871745a7e8e9a90fdbf->enter($__internal_388f494bc50985f6bb1539c4542395194d9b44a234d18871745a7e8e9a90fdbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article.html.twig"));

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
        
        $__internal_388f494bc50985f6bb1539c4542395194d9b44a234d18871745a7e8e9a90fdbf->leave($__internal_388f494bc50985f6bb1539c4542395194d9b44a234d18871745a7e8e9a90fdbf_prof);

    }

    public function getTemplateName()
    {
        return "article.html.twig";
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
