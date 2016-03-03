<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0fcd9a95391b995185ffb12bfcccd243c333380abf4fb7f99bb36ec19c8ce8b9 extends Twig_Template
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
        $__internal_4f3d164a594d147f0f13254e12b9bb7f96146fede6054fd499963e0cf6c8d4bd = $this->env->getExtension("native_profiler");
        $__internal_4f3d164a594d147f0f13254e12b9bb7f96146fede6054fd499963e0cf6c8d4bd->enter($__internal_4f3d164a594d147f0f13254e12b9bb7f96146fede6054fd499963e0cf6c8d4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_4f3d164a594d147f0f13254e12b9bb7f96146fede6054fd499963e0cf6c8d4bd->leave($__internal_4f3d164a594d147f0f13254e12b9bb7f96146fede6054fd499963e0cf6c8d4bd_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5d19d78b360f211b052fe616a8d83f528289f3fd9a51a798d0d2f4042ecd29a = $this->env->getExtension("native_profiler");
        $__internal_c5d19d78b360f211b052fe616a8d83f528289f3fd9a51a798d0d2f4042ecd29a->enter($__internal_c5d19d78b360f211b052fe616a8d83f528289f3fd9a51a798d0d2f4042ecd29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "    ";
        $this->loadTemplate("::header.html.twig", "FOSUserBundle:Registration:register.html.twig", 2)->display($context);
        // line 3
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c5d19d78b360f211b052fe616a8d83f528289f3fd9a51a798d0d2f4042ecd29a->leave($__internal_c5d19d78b360f211b052fe616a8d83f528289f3fd9a51a798d0d2f4042ecd29a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/*     {% include "::header.html.twig" %}*/
/*     {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
