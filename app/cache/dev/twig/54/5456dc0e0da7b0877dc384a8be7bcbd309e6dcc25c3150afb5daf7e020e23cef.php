<?php

/* @BloggerBlog/Page/contactEmail.txt.twig */
class __TwigTemplate_5c2e2f78c73f6036a89c2cacf30cb744632e208926d50bdb34737d2a947cc89c extends Twig_Template
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
        // line 2
        echo "A contact enquiry was made by ";
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "name", array());
        echo " at ";
        echo twig_date_format_filter($this->env, "now", "Y-m-d H:i");
        echo ".

Reply-To: ";
        // line 4
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "email", array());
        echo "
Subject: ";
        // line 5
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "subject", array());
        echo "
Body:
";
        // line 7
        echo $this->getAttribute((isset($context["enquiry"]) ? $context["enquiry"] : null), "body", array());
        echo "
";
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
        return array (  36 => 7,  31 => 5,  27 => 4,  19 => 2,);
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
