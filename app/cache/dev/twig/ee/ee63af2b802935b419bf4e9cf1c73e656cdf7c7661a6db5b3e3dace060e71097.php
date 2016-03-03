<?php

/* @User/Registration/confirmed.html.twig */
class __TwigTemplate_d63212fdc869a8372f411620fb08dd27efca19e27b93601e528022421cff8584 extends Twig_Template
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
        // line 1
        $this->loadTemplate("::header.html.twig", "@User/Registration/confirmed.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 9
        $this->loadTemplate("::footer.html.twig", "@User/Registration/confirmed.html.twig", 9)->display($context);
    }

    // line 2
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 3
        echo "    <center><p style=\"color:#3F67C0;font-size: 30px;margin-top: 50px;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p></center>
    ";
        // line 4
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()))) {
            // line 5
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security", array()), "token", array()), "providerKey", array())) . ".target_path")), "method");
            // line 6
            echo "        ";
            if ( !twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : null))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 7
            echo "    ";
        }
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
        return array (  50 => 7,  41 => 6,  38 => 5,  36 => 4,  31 => 3,  28 => 2,  24 => 9,  22 => 2,  20 => 1,);
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
