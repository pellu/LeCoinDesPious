<?php

/* ::menu.html.twig */
class __TwigTemplate_f8d2d35eaa8149c93af22f9ad826c1c13423f005176f4dd2017a9b876812892d extends Twig_Template
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
        // line 1
        echo "<!---strat-wrap---->
<div class=\"wrap\">
    <!---start-top-nav---->
    <div class=\"top-nav\">
            <div class=\"menu\">
                <!-- start top-nav-->
                <div class=\"cssmenu\">
                    <ul>
                        <li><a href=\"http://localhost/LeCoinDesPious/web/\"><span>Accueil</span></a></li>
                        <li><a href=\"http://localhost/LeCoinDesPious/web/blog\"><span>Blog</span></a></li>
                        <li><a href=\"http://localhost/LeCoinDesPious/web/about\"><span>About</span></a></li>
                        <li class=\"last\"><a href=\"http://localhost/LeCoinDesPious/web/contact\"><span>Contact</span></a></li>
                    </ul>
                </div>
                <div class=\"clear\"></div>
            </div>

        ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 19
            echo "
            <div style=\"float:right\" class=\"soc_right\">
                <div class=\"cssmenu\">
                    <ul>
                        <li  class=\"has-sub\"><a href=\"http://localhost/LeCoinDesPious/web/profile/\"><span>Bonjour, ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array()), "html", null, true);
            echo "</span></a>
                            <ul>
                                <li class=\"has-sub\"><a href=\"http://localhost/LeCoinDesPious/web/profile/\"><span>Voir Profile</span></a></li>
                                <li class=\"has-sub\"><a href=\"http://localhost/LeCoinDesPious/web/profile/edit\"><span>Modifier profile</span></a></li>
                                <li class=\"has-sub\"><a href=\"http://localhost/LeCoinDesPious/web/profile/change-password\"><span>Modifier mot de passe</span></a></li>
                            </ul>
                        </li>
                        <li class=\"last\"><a href=\"http://localhost/LeCoinDesPious/web/logout\"><span>Déconnexion</span></a></li>
                    </ul>
                </div>
            </div>
        ";
        } else {
            // line 35
            echo "            <div style=\"float:right\" class=\"soc_right\">
                <div class=\"cssmenu\">
                    <ul>
                        <li><a href=\"http://localhost/LeCoinDesPious/web/login\"><span>Connexion</span></a></li>
                        <li class=\"last\"><a href=\"http://localhost/LeCoinDesPious/web/register/\"><span>Créer un compte</span></a></li>
                    </ul>
                </div>
            </div>
        ";
        }
        // line 44
        echo "        <div class=\"clear\"></div>
    </div>
    <div class=\"content\">";
    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 44,  61 => 35,  46 => 23,  40 => 19,  38 => 18,  19 => 1,);
    }
}
/* <!---strat-wrap---->*/
/* <div class="wrap">*/
/*     <!---start-top-nav---->*/
/*     <div class="top-nav">*/
/*             <div class="menu">*/
/*                 <!-- start top-nav-->*/
/*                 <div class="cssmenu">*/
/*                     <ul>*/
/*                         <li><a href="http://localhost/LeCoinDesPious/web/"><span>Accueil</span></a></li>*/
/*                         <li><a href="http://localhost/LeCoinDesPious/web/blog"><span>Blog</span></a></li>*/
/*                         <li><a href="http://localhost/LeCoinDesPious/web/about"><span>About</span></a></li>*/
/*                         <li class="last"><a href="http://localhost/LeCoinDesPious/web/contact"><span>Contact</span></a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="clear"></div>*/
/*             </div>*/
/* */
/*         {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/* */
/*             <div style="float:right" class="soc_right">*/
/*                 <div class="cssmenu">*/
/*                     <ul>*/
/*                         <li  class="has-sub"><a href="http://localhost/LeCoinDesPious/web/profile/"><span>Bonjour, {{ user.username }}</span></a>*/
/*                             <ul>*/
/*                                 <li class="has-sub"><a href="http://localhost/LeCoinDesPious/web/profile/"><span>Voir Profile</span></a></li>*/
/*                                 <li class="has-sub"><a href="http://localhost/LeCoinDesPious/web/profile/edit"><span>Modifier profile</span></a></li>*/
/*                                 <li class="has-sub"><a href="http://localhost/LeCoinDesPious/web/profile/change-password"><span>Modifier mot de passe</span></a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="last"><a href="http://localhost/LeCoinDesPious/web/logout"><span>Déconnexion</span></a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         {% else %}*/
/*             <div style="float:right" class="soc_right">*/
/*                 <div class="cssmenu">*/
/*                     <ul>*/
/*                         <li><a href="http://localhost/LeCoinDesPious/web/login"><span>Connexion</span></a></li>*/
/*                         <li class="last"><a href="http://localhost/LeCoinDesPious/web/register/"><span>Créer un compte</span></a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         {% endif %}*/
/*         <div class="clear"></div>*/
/*     </div>*/
/*     <div class="content">*/
