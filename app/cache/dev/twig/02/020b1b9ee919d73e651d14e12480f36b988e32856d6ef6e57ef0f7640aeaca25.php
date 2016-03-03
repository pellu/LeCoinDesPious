<?php

/* ProjetSymfonyBundle/Resources/config/services.yml */
class __TwigTemplate_d02c475a918affe1fcac0e7e59f04d2feb8c86b5b2095c5188d95e5435ba9156 extends Twig_Template
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
        // line 1
        echo "services:
#    projet_symfony.example:
#        class: ProjetSymfonyBundle\\Example
#        arguments: [\"@service_id\", \"plain_value\", %parameter%]
";
    }

    public function getTemplateName()
    {
        return "ProjetSymfonyBundle/Resources/config/services.yml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* services:*/
/* #    projet_symfony.example:*/
/* #        class: ProjetSymfonyBundle\Example*/
/* #        arguments: ["@service_id", "plain_value", %parameter%]*/
/* */
