<?php

/* @BloggerBlog/Page/contactEmail.txt.twig */
class __TwigTemplate_077828cfaad937bda9462e8c79d272c7484effbe23801026e6fdb03468aa0abe extends Twig_Template
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
        $__internal_eec502c22c7f6d9c96ce2d2da10ea0aa298ee0d6f293754a2ad4644c71e2c459 = $this->env->getExtension("native_profiler");
        $__internal_eec502c22c7f6d9c96ce2d2da10ea0aa298ee0d6f293754a2ad4644c71e2c459->enter($__internal_eec502c22c7f6d9c96ce2d2da10ea0aa298ee0d6f293754a2ad4644c71e2c459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Page/contactEmail.txt.twig"));

        // line 2
        echo "A contact enquiry was made by ";
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "name", array());
        echo " at ";
        echo twig_date_format_filter($this->env, "now", "Y-m-d H:i");
        echo ".

Reply-To: ";
        // line 4
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "email", array());
        echo "
Subject: ";
        // line 5
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "subject", array());
        echo "
Body:
";
        // line 7
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : $this->getContext($context, "enquiry")), "body", array());
        echo "
";
        
        $__internal_eec502c22c7f6d9c96ce2d2da10ea0aa298ee0d6f293754a2ad4644c71e2c459->leave($__internal_eec502c22c7f6d9c96ce2d2da10ea0aa298ee0d6f293754a2ad4644c71e2c459_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Page/contactEmail.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  34 => 5,  30 => 4,  22 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Page/contactEmail.txt.twig #}*/
/* A contact enquiry was made by {{ enquiry.name }} at {{ "now" | date("Y-m-d H:i") }}.*/
/* */
/* Reply-To: {{ enquiry.email }}*/
/* Subject: {{ enquiry.subject }}*/
/* Body:*/
/* {{ enquiry.body }}*/
/* */
