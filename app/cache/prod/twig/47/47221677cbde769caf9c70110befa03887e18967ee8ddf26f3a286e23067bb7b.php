<?php

/* Advert/advert.html.twig */
class __TwigTemplate_568ef042ccbd04274f99e71e567113a87b4a20d0d8439d380bb6d30502ed67ae extends Twig_Template
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
        $__internal_f96e32c2acffb73c703fad4db4bf99b490f2895d64c189cae0dc55a1d8188bbe = $this->env->getExtension("native_profiler");
        $__internal_f96e32c2acffb73c703fad4db4bf99b490f2895d64c189cae0dc55a1d8188bbe->enter($__internal_f96e32c2acffb73c703fad4db4bf99b490f2895d64c189cae0dc55a1d8188bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Advert/advert.html.twig"));

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
        
        $__internal_f96e32c2acffb73c703fad4db4bf99b490f2895d64c189cae0dc55a1d8188bbe->leave($__internal_f96e32c2acffb73c703fad4db4bf99b490f2895d64c189cae0dc55a1d8188bbe_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_89618ce2990ac285760b3b30015587b0750b85ca975f5f4bff6aaee234229266 = $this->env->getExtension("native_profiler");
        $__internal_89618ce2990ac285760b3b30015587b0750b85ca975f5f4bff6aaee234229266->enter($__internal_89618ce2990ac285760b3b30015587b0750b85ca975f5f4bff6aaee234229266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_89618ce2990ac285760b3b30015587b0750b85ca975f5f4bff6aaee234229266->leave($__internal_89618ce2990ac285760b3b30015587b0750b85ca975f5f4bff6aaee234229266_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cf1c12fa127e280249b9115b75a77341d6647274036f4d48a675e79845b4d39b = $this->env->getExtension("native_profiler");
        $__internal_cf1c12fa127e280249b9115b75a77341d6647274036f4d48a675e79845b4d39b->enter($__internal_cf1c12fa127e280249b9115b75a77341d6647274036f4d48a675e79845b4d39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_cf1c12fa127e280249b9115b75a77341d6647274036f4d48a675e79845b4d39b->leave($__internal_cf1c12fa127e280249b9115b75a77341d6647274036f4d48a675e79845b4d39b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_472d28f0858dede174fe135ac1674a6115a43658f24c88b1c0d798a3ae8c5b97 = $this->env->getExtension("native_profiler");
        $__internal_472d28f0858dede174fe135ac1674a6115a43658f24c88b1c0d798a3ae8c5b97->enter($__internal_472d28f0858dede174fe135ac1674a6115a43658f24c88b1c0d798a3ae8c5b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_472d28f0858dede174fe135ac1674a6115a43658f24c88b1c0d798a3ae8c5b97->leave($__internal_472d28f0858dede174fe135ac1674a6115a43658f24c88b1c0d798a3ae8c5b97_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_13e69ffe86834c31e1e806369e07f9fb5037ce204bf944c6e4c28577f4c5d2cf = $this->env->getExtension("native_profiler");
        $__internal_13e69ffe86834c31e1e806369e07f9fb5037ce204bf944c6e4c28577f4c5d2cf->enter($__internal_13e69ffe86834c31e1e806369e07f9fb5037ce204bf944c6e4c28577f4c5d2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_13e69ffe86834c31e1e806369e07f9fb5037ce204bf944c6e4c28577f4c5d2cf->leave($__internal_13e69ffe86834c31e1e806369e07f9fb5037ce204bf944c6e4c28577f4c5d2cf_prof);

    }

    public function getTemplateName()
    {
        return "Advert/advert.html.twig";
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
