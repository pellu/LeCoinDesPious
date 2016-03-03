<?php

/* @User/Default/index.html.twig */
class __TwigTemplate_b8e905f085a6145e26907f596158bc0243558d4e6787f1308fee4d4ed9c53952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9fa95a877d42c461c1f52c1f92536ad76aedd0663c7f0d5165d4366d6dc90153 = $this->env->getExtension("native_profiler");
        $__internal_9fa95a877d42c461c1f52c1f92536ad76aedd0663c7f0d5165d4366d6dc90153->enter($__internal_9fa95a877d42c461c1f52c1f92536ad76aedd0663c7f0d5165d4366d6dc90153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Default/index.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_9fa95a877d42c461c1f52c1f92536ad76aedd0663c7f0d5165d4366d6dc90153->leave($__internal_9fa95a877d42c461c1f52c1f92536ad76aedd0663c7f0d5165d4366d6dc90153_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b080ea1cfee902f2b64de45635dff0a0a206d0d70a5f8175aa254bbeae0a88f9 = $this->env->getExtension("native_profiler");
        $__internal_b080ea1cfee902f2b64de45635dff0a0a206d0d70a5f8175aa254bbeae0a88f9->enter($__internal_b080ea1cfee902f2b64de45635dff0a0a206d0d70a5f8175aa254bbeae0a88f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 3
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 5
        echo "    ";
        $this->loadTemplate("::header.html.twig", "@User/Default/index.html.twig", 5)->display($context);
        // line 6
        echo "
<div class=\"blog-tabs\">
    <ul class=\"blog-section\">
        <li class=\"blog-artical\">
            <div class=\"blog-artical-head\">
                <img class=\"artical-img\" src=\"images/slider1.jpg\" alt=\"\">
                <ul class=\"artical-date\">
                    <li><a href=\"#\">23 April,2013</a></li>
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
        <li class=\"blog-artical\">
            <div class=\"blog-artical-head\">
                <img class=\"artical-img\" src=\"images/slider1.jpg\" alt=\"\">
                <ul class=\"artical-date\">
                    <li><a href=\"#\">23 April,2013</a></li>
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
        <li class=\"blog-artical\">
            <div class=\"blog-artical-head\">
                <img class=\"artical-img\" src=\"images/slider1.jpg\" alt=\"\">
                <ul class=\"artical-date\">
                    <li><a href=\"#\">23 April,2013</a></li>
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
";
        // line 89
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 90
            echo "
";
        } else {
            // line 92
            echo "
";
        }
        // line 94
        echo "    ";
        $this->loadTemplate("::contenutest.html.twig", "@User/Default/index.html.twig", 94)->display($context);
        // line 95
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "@User/Default/index.html.twig", 95)->display($context);
        
        $__internal_b080ea1cfee902f2b64de45635dff0a0a206d0d70a5f8175aa254bbeae0a88f9->leave($__internal_b080ea1cfee902f2b64de45635dff0a0a206d0d70a5f8175aa254bbeae0a88f9_prof);

    }

    public function getTemplateName()
    {
        return "@User/Default/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 95,  141 => 94,  137 => 92,  133 => 90,  131 => 89,  46 => 6,  43 => 5,  37 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* {% endif %}*/
/*     {% include "::header.html.twig" %}*/
/* */
/* <div class="blog-tabs">*/
/*     <ul class="blog-section">*/
/*         <li class="blog-artical">*/
/*             <div class="blog-artical-head">*/
/*                 <img class="artical-img" src="images/slider1.jpg" alt="">*/
/*                 <ul class="artical-date">*/
/*                     <li><a href="#">23 April,2013</a></li>*/
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
/*         <li class="blog-artical">*/
/*             <div class="blog-artical-head">*/
/*                 <img class="artical-img" src="images/slider1.jpg" alt="">*/
/*                 <ul class="artical-date">*/
/*                     <li><a href="#">23 April,2013</a></li>*/
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
/* */
/*         </li>*/
/*         <li class="blog-artical">*/
/*             <div class="blog-artical-head">*/
/*                 <img class="artical-img" src="images/slider1.jpg" alt="">*/
/*                 <ul class="artical-date">*/
/*                     <li><a href="#">23 April,2013</a></li>*/
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
/* */
/*         </li>*/
/* {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/* */
/* {% else %}*/
/* */
/* {% endif %}*/
/*     {% include "::contenutest.html.twig" %}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
