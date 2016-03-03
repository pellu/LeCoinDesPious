<?php

/* :Advert:advert.html.twig */
class __TwigTemplate_10325aca3fdc0c9eaa19011705130c976dbe71eb0db21e58886da14f11b74cb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_259320e407752bd4bf164bd09f14478d5c83486065aac2b94c4012c0e8612ce9 = $this->env->getExtension("native_profiler");
        $__internal_259320e407752bd4bf164bd09f14478d5c83486065aac2b94c4012c0e8612ce9->enter($__internal_259320e407752bd4bf164bd09f14478d5c83486065aac2b94c4012c0e8612ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Advert:advert.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" tyspe=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_259320e407752bd4bf164bd09f14478d5c83486065aac2b94c4012c0e8612ce9->leave($__internal_259320e407752bd4bf164bd09f14478d5c83486065aac2b94c4012c0e8612ce9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1370b984bf9c71ccc6b2f244ab1e5a9c19f639bf490eee2e7c40de7a168a8d5 = $this->env->getExtension("native_profiler");
        $__internal_a1370b984bf9c71ccc6b2f244ab1e5a9c19f639bf490eee2e7c40de7a168a8d5->enter($__internal_a1370b984bf9c71ccc6b2f244ab1e5a9c19f639bf490eee2e7c40de7a168a8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a1370b984bf9c71ccc6b2f244ab1e5a9c19f639bf490eee2e7c40de7a168a8d5->leave($__internal_a1370b984bf9c71ccc6b2f244ab1e5a9c19f639bf490eee2e7c40de7a168a8d5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_274373036e39aeb4e9c345d2151eb1deaddbab739776dc2a006921349365bea6 = $this->env->getExtension("native_profiler");
        $__internal_274373036e39aeb4e9c345d2151eb1deaddbab739776dc2a006921349365bea6->enter($__internal_274373036e39aeb4e9c345d2151eb1deaddbab739776dc2a006921349365bea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_274373036e39aeb4e9c345d2151eb1deaddbab739776dc2a006921349365bea6->leave($__internal_274373036e39aeb4e9c345d2151eb1deaddbab739776dc2a006921349365bea6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7df92a8b7df42c8e0f725befd6ec9f40b0b795f3e26ffd34627983b82b37ab9 = $this->env->getExtension("native_profiler");
        $__internal_d7df92a8b7df42c8e0f725befd6ec9f40b0b795f3e26ffd34627983b82b37ab9->enter($__internal_d7df92a8b7df42c8e0f725befd6ec9f40b0b795f3e26ffd34627983b82b37ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d7df92a8b7df42c8e0f725befd6ec9f40b0b795f3e26ffd34627983b82b37ab9->leave($__internal_d7df92a8b7df42c8e0f725befd6ec9f40b0b795f3e26ffd34627983b82b37ab9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9217c9deeee989e1183b0ee4709522788be5fdfc1d98d332df66f3f69e992d5c = $this->env->getExtension("native_profiler");
        $__internal_9217c9deeee989e1183b0ee4709522788be5fdfc1d98d332df66f3f69e992d5c->enter($__internal_9217c9deeee989e1183b0ee4709522788be5fdfc1d98d332df66f3f69e992d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9217c9deeee989e1183b0ee4709522788be5fdfc1d98d332df66f3f69e992d5c->leave($__internal_9217c9deeee989e1183b0ee4709522788be5fdfc1d98d332df66f3f69e992d5c_prof);

    }

    public function getTemplateName()
    {
        return ":Advert:advert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" tyspe="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
