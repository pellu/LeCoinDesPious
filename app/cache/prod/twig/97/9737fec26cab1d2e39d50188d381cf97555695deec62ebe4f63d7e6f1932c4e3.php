<?php

/* UserBundle:Default:index.html.twig */
class __TwigTemplate_12fb3c54a00c10396341a6f2bf638d1a4fa517048d0fe3635120a9dcdbdb444e extends Twig_Template
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
        $__internal_8a78d43678d27046fd38ff8a7f87eaaecdb0263bb6c3944d091a162b2c5cc067 = $this->env->getExtension("native_profiler");
        $__internal_8a78d43678d27046fd38ff8a7f87eaaecdb0263bb6c3944d091a162b2c5cc067->enter($__internal_8a78d43678d27046fd38ff8a7f87eaaecdb0263bb6c3944d091a162b2c5cc067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Default:index.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_8a78d43678d27046fd38ff8a7f87eaaecdb0263bb6c3944d091a162b2c5cc067->leave($__internal_8a78d43678d27046fd38ff8a7f87eaaecdb0263bb6c3944d091a162b2c5cc067_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_89c7aa23b15db765b4e527d9029fd85aadb5ec7998011f2a68b316fe7fbecee9 = $this->env->getExtension("native_profiler");
        $__internal_89c7aa23b15db765b4e527d9029fd85aadb5ec7998011f2a68b316fe7fbecee9->enter($__internal_89c7aa23b15db765b4e527d9029fd85aadb5ec7998011f2a68b316fe7fbecee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        $this->loadTemplate("::header.html.twig", "UserBundle:Default:index.html.twig", 5)->display($context);
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
        $this->loadTemplate("::contenutest.html.twig", "UserBundle:Default:index.html.twig", 94)->display($context);
        // line 95
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "UserBundle:Default:index.html.twig", 95)->display($context);
        
        $__internal_89c7aa23b15db765b4e527d9029fd85aadb5ec7998011f2a68b316fe7fbecee9->leave($__internal_89c7aa23b15db765b4e527d9029fd85aadb5ec7998011f2a68b316fe7fbecee9_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Default:index.html.twig";
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
