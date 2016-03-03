<?php

/* @User/Registration/confirmed.html.twig */
class __TwigTemplate_b2479bb3699dc40b013f6bd6bd94570e3e19fdf1d850bf183f23dc64046a4a1a extends Twig_Template
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
        $__internal_d283ffb7a9387efa8b9cf37eb276374593f64953e1263f2b9da88e60890a5fa9 = $this->env->getExtension("native_profiler");
        $__internal_d283ffb7a9387efa8b9cf37eb276374593f64953e1263f2b9da88e60890a5fa9->enter($__internal_d283ffb7a9387efa8b9cf37eb276374593f64953e1263f2b9da88e60890a5fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Registration/confirmed.html.twig"));

        // line 1
        $this->loadTemplate("::header.html.twig", "@User/Registration/confirmed.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        $this->loadTemplate("::footer.html.twig", "@User/Registration/confirmed.html.twig", 9)->display($context);
        
        $__internal_d283ffb7a9387efa8b9cf37eb276374593f64953e1263f2b9da88e60890a5fa9->leave($__internal_d283ffb7a9387efa8b9cf37eb276374593f64953e1263f2b9da88e60890a5fa9_prof);

    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_796dc79ae840602ad0e4bd109b9b8337f6810fc7341da9a77db13b147313032e = $this->env->getExtension("native_profiler");
        $__internal_796dc79ae840602ad0e4bd109b9b8337f6810fc7341da9a77db13b147313032e->enter($__internal_796dc79ae840602ad0e4bd109b9b8337f6810fc7341da9a77db13b147313032e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 3
        echo "    <center><p style=\"color:#3F67C0;font-size: 30px;margin-top: 50px;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p></center>
    ";
        // line 4
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()))) {
            // line 5
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 6
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 7
            echo "    ";
        }
        
        $__internal_796dc79ae840602ad0e4bd109b9b8337f6810fc7341da9a77db13b147313032e->leave($__internal_796dc79ae840602ad0e4bd109b9b8337f6810fc7341da9a77db13b147313032e_prof);

    }

    public function getTemplateName()
    {
        return "@User/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 7,  50 => 6,  47 => 5,  45 => 4,  40 => 3,  34 => 2,  27 => 9,  25 => 2,  23 => 1,);
    }
}
/* {% include "::header.html.twig" %}*/
/* {% block fos_user_content %}*/
/*     <center><p style="color:#3F67C0;font-size: 30px;margin-top: 50px;">{{ 'registration.confirmed'|trans({'%username%': user.username}, 'FOSUserBundle') }}</p></center>*/
/*     {% if app.session is not empty %}*/
/*         {% set targetUrl = app.session.get('_security.' ~ app.security.token.providerKey ~ '.target_path') %}*/
/*         {% if targetUrl is not empty %}<p><a href="{{ targetUrl }}">{{ 'registration.back'|trans({}, 'FOSUserBundle') }}</a></p>{% endif %}*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* {% include "::footer.html.twig" %}*/
