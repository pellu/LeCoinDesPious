<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_deb4116b40d96877f3951733e469a424f0f06d0f171fd7e26e0d576860f4f551 extends Twig_Template
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
        $__internal_c5787e94be585b4de9b3c9811b89f1137f2adb51ffb37939564b0ed41bc51f55 = $this->env->getExtension("native_profiler");
        $__internal_c5787e94be585b4de9b3c9811b89f1137f2adb51ffb37939564b0ed41bc51f55->enter($__internal_c5787e94be585b4de9b3c9811b89f1137f2adb51ffb37939564b0ed41bc51f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_c5787e94be585b4de9b3c9811b89f1137f2adb51ffb37939564b0ed41bc51f55->leave($__internal_c5787e94be585b4de9b3c9811b89f1137f2adb51ffb37939564b0ed41bc51f55_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7be1fb348a41cf508228b3207747a4fda7ff0b466008be7a1ce5af26d559a054 = $this->env->getExtension("native_profiler");
        $__internal_7be1fb348a41cf508228b3207747a4fda7ff0b466008be7a1ce5af26d559a054->enter($__internal_7be1fb348a41cf508228b3207747a4fda7ff0b466008be7a1ce5af26d559a054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "    ";
        $this->loadTemplate("::header.html.twig", "BloggerBlogBundle:Page:about.html.twig", 2)->display($context);
        // line 3
        echo "    <style>
        article.about h1{
            text-align: center;
            font-size: 35px!important;
            color: #3F67C0;
            padding-bottom: 10px;
        }
        article.about p{
            font-size: 18px!important;
            color: black;
            padding-left: 30px;
            margin-right: 30px;
        }
    </style>
    <article class=\"about\">
        <h1>About symblog</h1>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
            amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
            Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
            urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
            tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
            condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
            vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
            lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
            posuere cubilia Curae.</p>
    </article>
    ";
        // line 29
        $this->loadTemplate("::footer.html.twig", "BloggerBlogBundle:Page:about.html.twig", 29)->display($context);
        
        $__internal_7be1fb348a41cf508228b3207747a4fda7ff0b466008be7a1ce5af26d559a054->leave($__internal_7be1fb348a41cf508228b3207747a4fda7ff0b466008be7a1ce5af26d559a054_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 29,  38 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block fos_user_content %}*/
/*     {% include "::header.html.twig" %}*/
/*     <style>*/
/*         article.about h1{*/
/*             text-align: center;*/
/*             font-size: 35px!important;*/
/*             color: #3F67C0;*/
/*             padding-bottom: 10px;*/
/*         }*/
/*         article.about p{*/
/*             font-size: 18px!important;*/
/*             color: black;*/
/*             padding-left: 30px;*/
/*             margin-right: 30px;*/
/*         }*/
/*     </style>*/
/*     <article class="about">*/
/*         <h1>About symblog</h1>*/
/*         <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit*/
/*             amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.*/
/*             Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue*/
/*             urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida*/
/*             tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas*/
/*             condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis*/
/*             vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a*/
/*             lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices*/
/*             posuere cubilia Curae.</p>*/
/*     </article>*/
/*     {% include "::footer.html.twig" %}*/
/* {% endblock fos_user_content %}*/
