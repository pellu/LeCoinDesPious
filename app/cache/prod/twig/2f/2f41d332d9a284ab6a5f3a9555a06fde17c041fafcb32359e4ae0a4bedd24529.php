<?php

/* ::menu.html.twig */
class __TwigTemplate_ecc3651d782ba1403ee564de05a7690427ee4f5877b1c2c7f1e970f1d868426a extends Twig_Template
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
        $__internal_49c3ae8d5f11573b5463d0f7569b7872322609cf30c4d043cca6a485a5c8681c = $this->env->getExtension("native_profiler");
        $__internal_49c3ae8d5f11573b5463d0f7569b7872322609cf30c4d043cca6a485a5c8681c->enter($__internal_49c3ae8d5f11573b5463d0f7569b7872322609cf30c4d043cca6a485a5c8681c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

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
                        <li  class=\"has-sub\"><a href=\"http://localhost/LeCoinDesPious/web/profile/\"><span>Votre compte</span></a>
                            <ul>
                                <li class=\"has-sub\"><a href=\"http://localhost/LeCoinDesPious/web/profile/\"><span>Voir Profil</span></a></li>
                                <li class=\"has-sub\"><a href=\"http://localhost/LeCoinDesPious/web/profile/edit\"><span>Modifier profil</span></a></li>
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
        
        $__internal_49c3ae8d5f11573b5463d0f7569b7872322609cf30c4d043cca6a485a5c8681c->leave($__internal_49c3ae8d5f11573b5463d0f7569b7872322609cf30c4d043cca6a485a5c8681c_prof);

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
        return array (  72 => 44,  61 => 35,  43 => 19,  41 => 18,  22 => 1,);
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
/*                         <li  class="has-sub"><a href="http://localhost/LeCoinDesPious/web/profile/"><span>Votre compte</span></a>*/
/*                             <ul>*/
/*                                 <li class="has-sub"><a href="http://localhost/LeCoinDesPious/web/profile/"><span>Voir Profil</span></a></li>*/
/*                                 <li class="has-sub"><a href="http://localhost/LeCoinDesPious/web/profile/edit"><span>Modifier profil</span></a></li>*/
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
