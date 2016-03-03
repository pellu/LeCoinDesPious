<?php

/* ProjetSymfonyBundle/Resources/config/services.yml */
class __TwigTemplate_15d783a231be831a67d26c72dc204252688937f4aed9556a023774f41f830b52 extends Twig_Template
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
        $__internal_6a6768774922c22cec13e29f3a486b8e5ff3c2d02c9e5bfe70e9f737939511f7 = $this->env->getExtension("native_profiler");
        $__internal_6a6768774922c22cec13e29f3a486b8e5ff3c2d02c9e5bfe70e9f737939511f7->enter($__internal_6a6768774922c22cec13e29f3a486b8e5ff3c2d02c9e5bfe70e9f737939511f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetSymfonyBundle/Resources/config/services.yml"));

        // line 1
        echo "services:
#    projet_symfony.example:
#        class: ProjetSymfonyBundle\\Example
#        arguments: [\"@service_id\", \"plain_value\", %parameter%]
";
        
        $__internal_6a6768774922c22cec13e29f3a486b8e5ff3c2d02c9e5bfe70e9f737939511f7->leave($__internal_6a6768774922c22cec13e29f3a486b8e5ff3c2d02c9e5bfe70e9f737939511f7_prof);

    }

    public function getTemplateName()
    {
        return "ProjetSymfonyBundle/Resources/config/services.yml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* services:*/
/* #    projet_symfony.example:*/
/* #        class: ProjetSymfonyBundle\Example*/
/* #        arguments: ["@service_id", "plain_value", %parameter%]*/
/* */
