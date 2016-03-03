<?php

/* @User/Profile/edit.html.twig */
class __TwigTemplate_1e2b0910cd2c8e0ba44d1dcb7360efa95d73688cea076b0f7b4778bb6681ba3a extends Twig_Template
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
        $__internal_949de47f671216cddb79e33250f982e65ad7d4c005b5b10aa6c1c4baf59f6c6e = $this->env->getExtension("native_profiler");
        $__internal_949de47f671216cddb79e33250f982e65ad7d4c005b5b10aa6c1c4baf59f6c6e->enter($__internal_949de47f671216cddb79e33250f982e65ad7d4c005b5b10aa6c1c4baf59f6c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/edit.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_949de47f671216cddb79e33250f982e65ad7d4c005b5b10aa6c1c4baf59f6c6e->leave($__internal_949de47f671216cddb79e33250f982e65ad7d4c005b5b10aa6c1c4baf59f6c6e_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d9a4d77c57070ee0fbeea6e7778a701f1282f9a9a65206ebf4d1a0d13f1a5de4 = $this->env->getExtension("native_profiler");
        $__internal_d9a4d77c57070ee0fbeea6e7778a701f1282f9a9a65206ebf4d1a0d13f1a5de4->enter($__internal_d9a4d77c57070ee0fbeea6e7778a701f1282f9a9a65206ebf4d1a0d13f1a5de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "
    ";
        // line 3
        $this->loadTemplate("::header.html.twig", "@User/Profile/edit.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@User/Profile/edit.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "@User/Profile/edit.html.twig", 5)->display($context);
        
        $__internal_d9a4d77c57070ee0fbeea6e7778a701f1282f9a9a65206ebf4d1a0d13f1a5de4->leave($__internal_d9a4d77c57070ee0fbeea6e7778a701f1282f9a9a65206ebf4d1a0d13f1a5de4_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/edit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* */
/*     {% include "::header.html.twig" %}*/
/*     {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
