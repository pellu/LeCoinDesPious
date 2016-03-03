<?php

/* @User/Resetting/request.html.twig */
class __TwigTemplate_eb559787453ada6898593b028e6b925558710916a5facd0fa001be3f09c702ad extends Twig_Template
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
        $__internal_2e5c001cb4c385a28899d4eebf7aaa6112f47116ec43b48c27322a6372ddb96f = $this->env->getExtension("native_profiler");
        $__internal_2e5c001cb4c385a28899d4eebf7aaa6112f47116ec43b48c27322a6372ddb96f->enter($__internal_2e5c001cb4c385a28899d4eebf7aaa6112f47116ec43b48c27322a6372ddb96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Resetting/request.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_2e5c001cb4c385a28899d4eebf7aaa6112f47116ec43b48c27322a6372ddb96f->leave($__internal_2e5c001cb4c385a28899d4eebf7aaa6112f47116ec43b48c27322a6372ddb96f_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cf71e1c208e5ac5b26ec5a245fea4a3171abba105fb199f3fad2e5d5176832d5 = $this->env->getExtension("native_profiler");
        $__internal_cf71e1c208e5ac5b26ec5a245fea4a3171abba105fb199f3fad2e5d5176832d5->enter($__internal_cf71e1c208e5ac5b26ec5a245fea4a3171abba105fb199f3fad2e5d5176832d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "    ";
        $this->loadTemplate("::header.html.twig", "@User/Resetting/request.html.twig", 2)->display($context);
        // line 3
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@User/Resetting/request.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("::footer.html.twig", "@User/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_cf71e1c208e5ac5b26ec5a245fea4a3171abba105fb199f3fad2e5d5176832d5->leave($__internal_cf71e1c208e5ac5b26ec5a245fea4a3171abba105fb199f3fad2e5d5176832d5_prof);

    }

    public function getTemplateName()
    {
        return "@User/Resetting/request.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/*     {% include "::header.html.twig" %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
