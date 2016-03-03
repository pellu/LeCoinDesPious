<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_610e77f9a297c17dca4ce6fbef1b03c2a0ee1f4b010ebbf3ff5f6742cd1964d1 extends Twig_Template
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
        $__internal_8b2707b493e98a4a0202e3a8b57e596facf14f3be2d282af63e68ddf4ad38dd9 = $this->env->getExtension("native_profiler");
        $__internal_8b2707b493e98a4a0202e3a8b57e596facf14f3be2d282af63e68ddf4ad38dd9->enter($__internal_8b2707b493e98a4a0202e3a8b57e596facf14f3be2d282af63e68ddf4ad38dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_8b2707b493e98a4a0202e3a8b57e596facf14f3be2d282af63e68ddf4ad38dd9->leave($__internal_8b2707b493e98a4a0202e3a8b57e596facf14f3be2d282af63e68ddf4ad38dd9_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b54edfbf2bd9f63481986732d7b38b6e9b6a252ccfad7bdffff6251779a40024 = $this->env->getExtension("native_profiler");
        $__internal_b54edfbf2bd9f63481986732d7b38b6e9b6a252ccfad7bdffff6251779a40024->enter($__internal_b54edfbf2bd9f63481986732d7b38b6e9b6a252ccfad7bdffff6251779a40024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "    ";
        $this->loadTemplate("::header.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 2)->display($context);
        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "
    ";
        // line 4
        $this->loadTemplate("::footer.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 4)->display($context);
        
        $__internal_b54edfbf2bd9f63481986732d7b38b6e9b6a252ccfad7bdffff6251779a40024->leave($__internal_b54edfbf2bd9f63481986732d7b38b6e9b6a252ccfad7bdffff6251779a40024_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/*     {% include "::header.html.twig" %}*/
/*     {{ 'resetting.password_already_requested'|trans({}, 'FOSUserBundle') }}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
