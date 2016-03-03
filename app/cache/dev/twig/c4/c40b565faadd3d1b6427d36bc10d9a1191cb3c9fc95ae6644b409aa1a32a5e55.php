<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_892ef987c76299ada821baddeef1003d03f300fbc4b03387a42f0cb41562e6a3 extends Twig_Template
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
        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 29,  29 => 3,  26 => 2,  20 => 1,);
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
