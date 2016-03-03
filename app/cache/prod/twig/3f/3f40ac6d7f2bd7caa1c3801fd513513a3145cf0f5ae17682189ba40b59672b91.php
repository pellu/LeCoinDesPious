<?php

/* menu.html.twig~ */
class __TwigTemplate_bddf697902bf7e7fed9693b103a639d16875369d3095e77ddfe562941b20f23b extends Twig_Template
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
        $__internal_f2fe27821dbc6fd802ce810d149c263a37cb632d64e58f625aa7f49976f0ead1 = $this->env->getExtension("native_profiler");
        $__internal_f2fe27821dbc6fd802ce810d149c263a37cb632d64e58f625aa7f49976f0ead1->enter($__internal_f2fe27821dbc6fd802ce810d149c263a37cb632d64e58f625aa7f49976f0ead1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig~"));

        // line 1
        echo "<!---strat-wrap---->
<div class=\"wrap\">
    <!---start-top-nav---->
    <div class=\"top-nav\">
        <div class=\"menu1\">
            <ul class=\"menu2\">
                <li>
                    <a  class=\"nav-icon\" href=\"\"> </a>
                    <ul>
                        <li>
                            <a class=\"root-nav1\" href=\"\">Business</a>
                            <ul>
                                <li><a href=\"\">Item 11</a></li>

                                <li><a href=\"\">Item 12</a></li>
                                <li><a href=\"\">Item 13</a></li>
                                <li><a href=\"\">Item 14</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class=\"root-nav2\" href=\"\">Technology</a>
                            <ul>
                                <li><a href=\"\">Item 21</a></li>
                                <li><a href=\"\">Item 22</a></li>
                                <li><a href=\"\">Item 23</a></li>
                                <li><a href=\"\">Item 24</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class=\"root-nav3\" href=\"\">Travel</a>
                            <ul>
                                <li><a href=\"\">Item 31</a></li>
                                <li><a href=\"\">Item 32</a></li>
                                <li><a href=\"\">Item 33</a></li>
                                <li><a href=\"\">Item 34</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class=\"root-nav4\" href=\"\">Entertainment</a>
                            <ul>
                                <li><a href=\"\">Item 41</a></li>
                                <li><a href=\"\">Item 42</a></li>
                                <li><a href=\"\">Item 43</a></li>
                                <li><a href=\"\">Item 44</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class=\"top-nav_right\">
            <div class=\"menu\">
                <!-- start top-nav-->
                <div class=\"cssmenu\">
                    <ul>
                        <li><a href=\"#\"><span>Home</span></a></li>
                        <li><a href=\"#\"><span>About</span></a></li>
                        <li  class=\"has-sub\"><a href=\"#\"><span>Shope</span></a>
                            <ul>
                                <li class=\"has-sub\"><a href=\"#\"><span>Lorem Ipsum</span></a></li>
                                <li class=\"has-sub\"><a href=\"#\"><span>Lorem Ipsum</span></a></li>
                                <li class=\"has-sub\"><a href=\"#\"><span>Lorem Ipsum</span></a></li>
                                <li class=\"has-sub\"><a href=\"#\"><span>Lorem Ipsum</span></a></li>
                                <li class=\"has-sub\"><a href=\"#\"><span>Lorem Ipsum</span></a></li>
                            </ul>
                        </li>
                        <li class=\"last active\"><a href=\"#\"><span>Blog</span></a></li>
                        <li class=\"last\"><a href=\"#\"><span>Contact</span></a></li>
                    </ul>
                </div>
                <div class=\"clear\"></div>
            </div>
            <!-- start search-->
            <!-- start social icons -->
            <div class=\"soc_right\">

            </div>
        </div>
        <div class=\"web_search\">
            <form>
                <input type=\"text\" value=\"Search..\" onfocus=\"this.value = '';\" onblur=\"if (this.value == '') {this.value = 'Search..';}\"><input type=\"submit\" value=\" \" />
            </form>
        </div>
        <!-- start login_box -->
        <div class=\"login_box\">
            <div id=\"loginContainer\">
                <a id=\"loginButton\" class=\"\"><span></span></a>
                <div id=\"loginBox\" style=\"display: none;\">
                    <form id=\"loginForm\" action=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        <fieldset id=\"body\">
                            <style>
                                input#remember_me{
                                    margin-top: -18px;
                                    margin-left: 50px;
                                }
                            </style>
                            <fieldset>
                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

                                <label for=\"username\">";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 101
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

                                <label for=\"password\">";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                                <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

                                <label id=\"checkbox\" for=\"remember_me\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/></label>

                                <input type=\"submit\" id=\"login\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">
                                <label for=\"checkbox\"><i><a href=\"\">Mot de passe perdu ?</a></i></label>
                            </fieldset>
                        </fieldset>
                    </form>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
        <div class=\"clear\"></div>
    </div>
    <!---start-top-nav2---->
    <!---->
    <!--<div class=\"top-nav2\">
        <ul class=\"menu3\">
            <li class=\"active\">
                <a href=\"\">
                    <span> </span>
                    <span class=\"arrow\"> </span>
                </a>
            </li>
            <li>
                <a href=\"\">
                    <span>Level 2</span>
                    <span class=\"arrow\"> </span>
                </a>
            </li>
            <li>
                <a href=\"\">
                    <span>Level 3</span>
                    <span class=\"arrow\"> </span>
                </a>
            </li>
            <li>
                <a href=\"\">
                    <span>Level 4</span>
                    <span class=\"arrow\"> </span>
                </a>
            </li>
            <li>
                <a href=\"\">
                    <span>Level 5</span>
                    <span class=\"arrow\"> </span>
                </a>
            </li>
            <li>
                <a href=\"\">
                    <span>Level 6</span>
                </a>
            </li>
            <div class=\"clear\"> </div>

        </ul>
    </div>
        <!---//End-top-nav2---->";
        
        $__internal_f2fe27821dbc6fd802ce810d149c263a37cb632d64e58f625aa7f49976f0ead1->leave($__internal_f2fe27821dbc6fd802ce810d149c263a37cb632d64e58f625aa7f49976f0ead1_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig~";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 108,  144 => 106,  138 => 103,  133 => 101,  129 => 100,  124 => 98,  112 => 89,  22 => 1,);
    }
}
/* <!---strat-wrap---->*/
/* <div class="wrap">*/
/*     <!---start-top-nav---->*/
/*     <div class="top-nav">*/
/*         <div class="menu1">*/
/*             <ul class="menu2">*/
/*                 <li>*/
/*                     <a  class="nav-icon" href=""> </a>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a class="root-nav1" href="">Business</a>*/
/*                             <ul>*/
/*                                 <li><a href="">Item 11</a></li>*/
/* */
/*                                 <li><a href="">Item 12</a></li>*/
/*                                 <li><a href="">Item 13</a></li>*/
/*                                 <li><a href="">Item 14</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a class="root-nav2" href="">Technology</a>*/
/*                             <ul>*/
/*                                 <li><a href="">Item 21</a></li>*/
/*                                 <li><a href="">Item 22</a></li>*/
/*                                 <li><a href="">Item 23</a></li>*/
/*                                 <li><a href="">Item 24</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a class="root-nav3" href="">Travel</a>*/
/*                             <ul>*/
/*                                 <li><a href="">Item 31</a></li>*/
/*                                 <li><a href="">Item 32</a></li>*/
/*                                 <li><a href="">Item 33</a></li>*/
/*                                 <li><a href="">Item 34</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a class="root-nav4" href="">Entertainment</a>*/
/*                             <ul>*/
/*                                 <li><a href="">Item 41</a></li>*/
/*                                 <li><a href="">Item 42</a></li>*/
/*                                 <li><a href="">Item 43</a></li>*/
/*                                 <li><a href="">Item 44</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*         <div class="top-nav_right">*/
/*             <div class="menu">*/
/*                 <!-- start top-nav-->*/
/*                 <div class="cssmenu">*/
/*                     <ul>*/
/*                         <li><a href="#"><span>Home</span></a></li>*/
/*                         <li><a href="#"><span>About</span></a></li>*/
/*                         <li  class="has-sub"><a href="#"><span>Shope</span></a>*/
/*                             <ul>*/
/*                                 <li class="has-sub"><a href="#"><span>Lorem Ipsum</span></a></li>*/
/*                                 <li class="has-sub"><a href="#"><span>Lorem Ipsum</span></a></li>*/
/*                                 <li class="has-sub"><a href="#"><span>Lorem Ipsum</span></a></li>*/
/*                                 <li class="has-sub"><a href="#"><span>Lorem Ipsum</span></a></li>*/
/*                                 <li class="has-sub"><a href="#"><span>Lorem Ipsum</span></a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li class="last active"><a href="#"><span>Blog</span></a></li>*/
/*                         <li class="last"><a href="#"><span>Contact</span></a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div class="clear"></div>*/
/*             </div>*/
/*             <!-- start search-->*/
/*             <!-- start social icons -->*/
/*             <div class="soc_right">*/
/* */
/*             </div>*/
/*         </div>*/
/*         <div class="web_search">*/
/*             <form>*/
/*                 <input type="text" value="Search.." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}"><input type="submit" value=" " />*/
/*             </form>*/
/*         </div>*/
/*         <!-- start login_box -->*/
/*         <div class="login_box">*/
/*             <div id="loginContainer">*/
/*                 <a id="loginButton" class=""><span></span></a>*/
/*                 <div id="loginBox" style="display: none;">*/
/*                     <form id="loginForm" action="{{ path("fos_user_security_check") }}" method="post">*/
/*                         <fieldset id="body">*/
/*                             <style>*/
/*                                 input#remember_me{*/
/*                                     margin-top: -18px;*/
/*                                     margin-left: 50px;*/
/*                                 }*/
/*                             </style>*/
/*                             <fieldset>*/
/*                                 <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*                                 <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*                                 <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*                                 <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/*                                 <input type="password" id="password" name="_password" required="required" />*/
/* */
/*                                 <label id="checkbox" for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}<input type="checkbox" id="remember_me" name="_remember_me" value="on"/></label>*/
/* */
/*                                 <input type="submit" id="login" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}">*/
/*                                 <label for="checkbox"><i><a href="">Mot de passe perdu ?</a></i></label>*/
/*                             </fieldset>*/
/*                         </fieldset>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*         <div class="clear"></div>*/
/*     </div>*/
/*     <!---start-top-nav2---->*/
/*     <!---->*/
/*     <!--<div class="top-nav2">*/
/*         <ul class="menu3">*/
/*             <li class="active">*/
/*                 <a href="">*/
/*                     <span> </span>*/
/*                     <span class="arrow"> </span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="">*/
/*                     <span>Level 2</span>*/
/*                     <span class="arrow"> </span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="">*/
/*                     <span>Level 3</span>*/
/*                     <span class="arrow"> </span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="">*/
/*                     <span>Level 4</span>*/
/*                     <span class="arrow"> </span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="">*/
/*                     <span>Level 5</span>*/
/*                     <span class="arrow"> </span>*/
/*                 </a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="">*/
/*                     <span>Level 6</span>*/
/*                 </a>*/
/*             </li>*/
/*             <div class="clear"> </div>*/
/* */
/*         </ul>*/
/*     </div>*/
/*         <!---//End-top-nav2---->*/
