<?php

/* ::menu.html.twig */
class __TwigTemplate_d1fbcb33d2da565bc8f128472626b8956cf56fccbd01a55fc5b7e614eaa3df1e extends Twig_Template
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
        $__internal_e1c3d29ede2f79350f7188e28c8f6a84d2d85497b0c338f25d9ebec2f3aaf011 = $this->env->getExtension("native_profiler");
        $__internal_e1c3d29ede2f79350f7188e28c8f6a84d2d85497b0c338f25d9ebec2f3aaf011->enter($__internal_e1c3d29ede2f79350f7188e28c8f6a84d2d85497b0c338f25d9ebec2f3aaf011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menu.html.twig"));

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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
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
        
        $__internal_e1c3d29ede2f79350f7188e28c8f6a84d2d85497b0c338f25d9ebec2f3aaf011->leave($__internal_e1c3d29ede2f79350f7188e28c8f6a84d2d85497b0c338f25d9ebec2f3aaf011_prof);

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
        return array (  75 => 44,  64 => 35,  49 => 23,  43 => 19,  41 => 18,  22 => 1,);
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
