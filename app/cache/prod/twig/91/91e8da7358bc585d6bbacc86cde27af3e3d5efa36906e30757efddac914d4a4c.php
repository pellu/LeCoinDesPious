<?php

/* BloggerBlogBundle:Page:contactEmail.txt.twig */
class __TwigTemplate_3bec1d5d5d86e86a1a0baebfbd1a14832457f70f84ff884e3c61b6ec35b9090e extends Twig_Template
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
        $__internal_d8a7eb7680c8dea12825da49e370360c05ddaea8cedf13e9967a84be5957d873 = $this->env->getExtension("native_profiler");
        $__internal_d8a7eb7680c8dea12825da49e370360c05ddaea8cedf13e9967a84be5957d873->enter($__internal_d8a7eb7680c8dea12825da49e370360c05ddaea8cedf13e9967a84be5957d873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contactEmail.txt.twig"));

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
        
        $__internal_d8a7eb7680c8dea12825da49e370360c05ddaea8cedf13e9967a84be5957d873->leave($__internal_d8a7eb7680c8dea12825da49e370360c05ddaea8cedf13e9967a84be5957d873_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contactEmail.txt.twig";
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
