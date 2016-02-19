<?php

/* :Advert:advert.html.twig */
class __TwigTemplate_4b07e66fb47cb02b818fdbdfe66417e0abae27dd9bdac38190d6a14f0bb5c929 extends Twig_Template
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
        $__internal_e70740e9dfe46240d12cce4171c22d4f4e745ab2f94a1bf08ae09ad45468e360 = $this->env->getExtension("native_profiler");
        $__internal_e70740e9dfe46240d12cce4171c22d4f4e745ab2f94a1bf08ae09ad45468e360->enter($__internal_e70740e9dfe46240d12cce4171c22d4f4e745ab2f94a1bf08ae09ad45468e360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Advert:advert.html.twig"));

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
        
        $__internal_e70740e9dfe46240d12cce4171c22d4f4e745ab2f94a1bf08ae09ad45468e360->leave($__internal_e70740e9dfe46240d12cce4171c22d4f4e745ab2f94a1bf08ae09ad45468e360_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0b9cd3d6e63fb715bdbf3967ad4a8d598586079ab5c9f90751042947635d331 = $this->env->getExtension("native_profiler");
        $__internal_a0b9cd3d6e63fb715bdbf3967ad4a8d598586079ab5c9f90751042947635d331->enter($__internal_a0b9cd3d6e63fb715bdbf3967ad4a8d598586079ab5c9f90751042947635d331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a0b9cd3d6e63fb715bdbf3967ad4a8d598586079ab5c9f90751042947635d331->leave($__internal_a0b9cd3d6e63fb715bdbf3967ad4a8d598586079ab5c9f90751042947635d331_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e5c1993c9b4b260cbb9e447923736150cf8043d8f7f565d1fab77e5a29897eef = $this->env->getExtension("native_profiler");
        $__internal_e5c1993c9b4b260cbb9e447923736150cf8043d8f7f565d1fab77e5a29897eef->enter($__internal_e5c1993c9b4b260cbb9e447923736150cf8043d8f7f565d1fab77e5a29897eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e5c1993c9b4b260cbb9e447923736150cf8043d8f7f565d1fab77e5a29897eef->leave($__internal_e5c1993c9b4b260cbb9e447923736150cf8043d8f7f565d1fab77e5a29897eef_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2ffa6b5110d93227fc5d91236fb5e98b3f6a48b9024e1fb9f7fcc3b0e66dedb = $this->env->getExtension("native_profiler");
        $__internal_b2ffa6b5110d93227fc5d91236fb5e98b3f6a48b9024e1fb9f7fcc3b0e66dedb->enter($__internal_b2ffa6b5110d93227fc5d91236fb5e98b3f6a48b9024e1fb9f7fcc3b0e66dedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b2ffa6b5110d93227fc5d91236fb5e98b3f6a48b9024e1fb9f7fcc3b0e66dedb->leave($__internal_b2ffa6b5110d93227fc5d91236fb5e98b3f6a48b9024e1fb9f7fcc3b0e66dedb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24999cb95d96fa831b9093a0914e0e0ffcd552ecc04acad96b230b46e3e7a89d = $this->env->getExtension("native_profiler");
        $__internal_24999cb95d96fa831b9093a0914e0e0ffcd552ecc04acad96b230b46e3e7a89d->enter($__internal_24999cb95d96fa831b9093a0914e0e0ffcd552ecc04acad96b230b46e3e7a89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_24999cb95d96fa831b9093a0914e0e0ffcd552ecc04acad96b230b46e3e7a89d->leave($__internal_24999cb95d96fa831b9093a0914e0e0ffcd552ecc04acad96b230b46e3e7a89d_prof);

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
