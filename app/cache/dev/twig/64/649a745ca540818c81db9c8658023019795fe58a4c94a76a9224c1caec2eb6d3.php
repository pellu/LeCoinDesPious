<?php

/* @BloggerBlog/Page/contact.html.twig */
class __TwigTemplate_73011382d77924ffdad459bfec883f89ccb7dfa75adc14222b59a87f6c75cf1d extends Twig_Template
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
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Contact";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<header>
\t\t<h1>Contact symblog</h1>
\t</header>

\t";
        // line 11
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "hasFlash", array(0 => "blogger-notice"), "method")) {
            // line 12
            echo "\t\t<div class=\"blogger-notice\">
\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flash", array(0 => "blogger-notice"), "method"), "html", null, true);
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

\t\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row');
        echo "
\t\t";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'row');
        echo "
\t\t";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'row');
        echo "
\t\t";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "body", array()), 'row');
        echo "

\t\t";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "

\t\t<input type=\"submit\" value=\"Submit\" />
\t</form>
";
    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Page/contact.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  88 => 27,  83 => 25,  79 => 24,  75 => 23,  71 => 22,  66 => 20,  60 => 16,  54 => 13,  51 => 12,  49 => 11,  43 => 7,  40 => 6,  34 => 4,  30 => 6,  27 => 5,  25 => 4,  21 => 2,);
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
