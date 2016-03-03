<?php

/* @BloggerBlog/Page/about.html.twig */
class __TwigTemplate_f1c5cb3f5886526531c28f503ebd99212d3705fde392257cbbea81f52dff645c extends Twig_Template
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
        $__internal_05d7d921e49379502375330f3f765e743363cc21515ae8f5a4ce07eab2cf18c8 = $this->env->getExtension("native_profiler");
        $__internal_05d7d921e49379502375330f3f765e743363cc21515ae8f5a4ce07eab2cf18c8->enter($__internal_05d7d921e49379502375330f3f765e743363cc21515ae8f5a4ce07eab2cf18c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Page/about.html.twig"));

        // line 1
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_05d7d921e49379502375330f3f765e743363cc21515ae8f5a4ce07eab2cf18c8->leave($__internal_05d7d921e49379502375330f3f765e743363cc21515ae8f5a4ce07eab2cf18c8_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f865f5c24c2d262ecbe7dc3f11ad08154d351e1a09ba1422bba35a5386a7991 = $this->env->getExtension("native_profiler");
        $__internal_1f865f5c24c2d262ecbe7dc3f11ad08154d351e1a09ba1422bba35a5386a7991->enter($__internal_1f865f5c24c2d262ecbe7dc3f11ad08154d351e1a09ba1422bba35a5386a7991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 2
        echo "    ";
        $this->loadTemplate("::header.html.twig", "@BloggerBlog/Page/about.html.twig", 2)->display($context);
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
        $this->loadTemplate("::footer.html.twig", "@BloggerBlog/Page/about.html.twig", 29)->display($context);
        
        $__internal_1f865f5c24c2d262ecbe7dc3f11ad08154d351e1a09ba1422bba35a5386a7991->leave($__internal_1f865f5c24c2d262ecbe7dc3f11ad08154d351e1a09ba1422bba35a5386a7991_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Page/about.html.twig";
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
