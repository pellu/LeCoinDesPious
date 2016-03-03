<?php

/* @BloggerBlog/Page/contact.html.twig */
class __TwigTemplate_407ec7d85c96ef74490b0ac5d1da9812df5ba0c60dbf6f00e9892f4ca66f35df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e20815aeff433116e551b3c3171b315ffcad984237439afaca638cb6eb3251f = $this->env->getExtension("native_profiler");
        $__internal_7e20815aeff433116e551b3c3171b315ffcad984237439afaca638cb6eb3251f->enter($__internal_7e20815aeff433116e551b3c3171b315ffcad984237439afaca638cb6eb3251f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Page/contact.html.twig"));

        // line 2
        echo "

";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_7e20815aeff433116e551b3c3171b315ffcad984237439afaca638cb6eb3251f->leave($__internal_7e20815aeff433116e551b3c3171b315ffcad984237439afaca638cb6eb3251f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_3262556e0207f8b508306a2be93f8c7245ce63482f4eba97a78fef7cda539b4d = $this->env->getExtension("native_profiler");
        $__internal_3262556e0207f8b508306a2be93f8c7245ce63482f4eba97a78fef7cda539b4d->enter($__internal_3262556e0207f8b508306a2be93f8c7245ce63482f4eba97a78fef7cda539b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_3262556e0207f8b508306a2be93f8c7245ce63482f4eba97a78fef7cda539b4d->leave($__internal_3262556e0207f8b508306a2be93f8c7245ce63482f4eba97a78fef7cda539b4d_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7551253dcfc96d684572b0ba1dc8d5e09b7a2b25128f8cb5057273f94c30d4c = $this->env->getExtension("native_profiler");
        $__internal_d7551253dcfc96d684572b0ba1dc8d5e09b7a2b25128f8cb5057273f94c30d4c->enter($__internal_d7551253dcfc96d684572b0ba1dc8d5e09b7a2b25128f8cb5057273f94c30d4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<header>
\t\t<h1>Contact symblog</h1>
\t</header>

\t";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "hasFlash", array(0 => "blogger-notice"), "method")) {
            // line 12
            echo "\t\t<div class=\"blogger-notice\">
\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flash", array(0 => "blogger-notice"), "method"), "html", null, true);
            echo "
\t\t</div>
\t";
        }
        // line 16
        echo "
\t<p>Want to contact symblog?</p>

\t<form action=\"\" method=\"post\" class=\"blogger\">
\t\t";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row');
        echo "

\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

\t\t<input type=\"submit\" value=\"Submit\" />
\t</form>
";
        
        $__internal_d7551253dcfc96d684572b0ba1dc8d5e09b7a2b25128f8cb5057273f94c30d4c->leave($__internal_d7551253dcfc96d684572b0ba1dc8d5e09b7a2b25128f8cb5057273f94c30d4c_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Page/contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 27,  98 => 25,  94 => 24,  90 => 23,  86 => 22,  81 => 20,  75 => 16,  69 => 13,  66 => 12,  64 => 11,  58 => 7,  52 => 6,  40 => 4,  33 => 6,  30 => 5,  28 => 4,  24 => 2,);
    }
}
/* {# src/Blogger/BlogBundle/Resources/views/Page/contact.html.twig #}*/
/* */
/* */
/* {% block title %}Contact{% endblock %}*/
/* */
/* {% block body %}*/
/* 	<header>*/
/* 		<h1>Contact symblog</h1>*/
/* 	</header>*/
/* */
/* 	{% if app.session.hasFlash('blogger-notice') %}*/
/* 		<div class="blogger-notice">*/
/* 			{{ app.session.flash('blogger-notice') }}*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	<p>Want to contact symblog?</p>*/
/* */
/* 	<form action="" method="post" class="blogger">*/
/* 		{{ form_errors(form) }}*/
/* */
/* 		{{ form_row(form.name) }}*/
/* 		{{ form_row(form.email) }}*/
/* 		{{ form_row(form.subject) }}*/
/* 		{{ form_row(form.body) }}*/
/* */
/* 		{{ form_rest(form) }}*/
/* */
/* 		<input type="submit" value="Submit" />*/
/* 	</form>*/
/* {% endblock%}*/
/* */
