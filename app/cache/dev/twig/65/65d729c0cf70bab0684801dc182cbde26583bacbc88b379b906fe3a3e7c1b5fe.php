<?php

/* ProjetSymfonyBundle/Resources/config/services.yml */
class __TwigTemplate_fdcb31bf9baccc53e7e72f8ac854a102f9c53f6e8269db38da537a9e1f104d71 extends Twig_Template
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
        $__internal_de27256e473fc2519f7ff4c00a4d49734e43f8743a975021eb8e9dcbb6bc8499 = $this->env->getExtension("native_profiler");
        $__internal_de27256e473fc2519f7ff4c00a4d49734e43f8743a975021eb8e9dcbb6bc8499->enter($__internal_de27256e473fc2519f7ff4c00a4d49734e43f8743a975021eb8e9dcbb6bc8499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetSymfonyBundle/Resources/config/services.yml"));

        // line 1
        echo "services:
#    projet_symfony.example:
#        class: ProjetSymfonyBundle\\Example
#        arguments: [\"@service_id\", \"plain_value\", %parameter%]
";
        
        $__internal_de27256e473fc2519f7ff4c00a4d49734e43f8743a975021eb8e9dcbb6bc8499->leave($__internal_de27256e473fc2519f7ff4c00a4d49734e43f8743a975021eb8e9dcbb6bc8499_prof);

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
