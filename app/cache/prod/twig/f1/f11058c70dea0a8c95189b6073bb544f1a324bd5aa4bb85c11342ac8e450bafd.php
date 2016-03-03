<?php

/* @User/Profile/show.html.twig */
class __TwigTemplate_d9c55c97482561bd934d25fdda7337c8725dbe92dd929d51112c32aed2888267 extends Twig_Template
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
        $__internal_9e5a095c79b7b58a832bc927c106dbeb8f4f82351e9aa6cdae99ec27a226adc8 = $this->env->getExtension("native_profiler");
        $__internal_9e5a095c79b7b58a832bc927c106dbeb8f4f82351e9aa6cdae99ec27a226adc8->enter($__internal_9e5a095c79b7b58a832bc927c106dbeb8f4f82351e9aa6cdae99ec27a226adc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Profile/show.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_9e5a095c79b7b58a832bc927c106dbeb8f4f82351e9aa6cdae99ec27a226adc8->leave($__internal_9e5a095c79b7b58a832bc927c106dbeb8f4f82351e9aa6cdae99ec27a226adc8_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_96339b097b780cf0fc30952e123abd1590118d42e81c28e7eadefea3048084ac = $this->env->getExtension("native_profiler");
        $__internal_96339b097b780cf0fc30952e123abd1590118d42e81c28e7eadefea3048084ac->enter($__internal_96339b097b780cf0fc30952e123abd1590118d42e81c28e7eadefea3048084ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "
    ";
        // line 3
        $this->loadTemplate("::header.html.twig", "@User/Profile/show.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@User/Profile/show.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "@User/Profile/show.html.twig", 5)->display($context);
        
        $__internal_96339b097b780cf0fc30952e123abd1590118d42e81c28e7eadefea3048084ac->leave($__internal_96339b097b780cf0fc30952e123abd1590118d42e81c28e7eadefea3048084ac_prof);

    }

    public function getTemplateName()
    {
        return "@User/Profile/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 5,  40 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/* */
/*     {% include "::header.html.twig" %}*/
/*     {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
