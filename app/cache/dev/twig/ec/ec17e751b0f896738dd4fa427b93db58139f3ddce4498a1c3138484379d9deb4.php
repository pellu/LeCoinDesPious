<?php

/* Advert/advert.html.twig */
class __TwigTemplate_509279f783c46d7701d9010d3121c11d0ebc779cacf3f0f4fcffec54cfd5cf33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_21ce4a6d3249f89a5965dcf483741a5c8978f65b8f990f891890c4e7c34f136d = $this->env->getExtension("native_profiler");
        $__internal_21ce4a6d3249f89a5965dcf483741a5c8978f65b8f990f891890c4e7c34f136d->enter($__internal_21ce4a6d3249f89a5965dcf483741a5c8978f65b8f990f891890c4e7c34f136d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Advert/advert.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" tyspe=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_21ce4a6d3249f89a5965dcf483741a5c8978f65b8f990f891890c4e7c34f136d->leave($__internal_21ce4a6d3249f89a5965dcf483741a5c8978f65b8f990f891890c4e7c34f136d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1674e1d79b3fb2fa4a169631553409909aa67fe9f14d325789e55892a3fcf191 = $this->env->getExtension("native_profiler");
        $__internal_1674e1d79b3fb2fa4a169631553409909aa67fe9f14d325789e55892a3fcf191->enter($__internal_1674e1d79b3fb2fa4a169631553409909aa67fe9f14d325789e55892a3fcf191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1674e1d79b3fb2fa4a169631553409909aa67fe9f14d325789e55892a3fcf191->leave($__internal_1674e1d79b3fb2fa4a169631553409909aa67fe9f14d325789e55892a3fcf191_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_754ab8f5e23c0a75e69b980a890980b14f5ee47984f570858cf86a31fa502e55 = $this->env->getExtension("native_profiler");
        $__internal_754ab8f5e23c0a75e69b980a890980b14f5ee47984f570858cf86a31fa502e55->enter($__internal_754ab8f5e23c0a75e69b980a890980b14f5ee47984f570858cf86a31fa502e55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_754ab8f5e23c0a75e69b980a890980b14f5ee47984f570858cf86a31fa502e55->leave($__internal_754ab8f5e23c0a75e69b980a890980b14f5ee47984f570858cf86a31fa502e55_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e2a47728bdd5fb900c9c47b86fd1704fcc3d2425abe20563449f337662b577f = $this->env->getExtension("native_profiler");
        $__internal_0e2a47728bdd5fb900c9c47b86fd1704fcc3d2425abe20563449f337662b577f->enter($__internal_0e2a47728bdd5fb900c9c47b86fd1704fcc3d2425abe20563449f337662b577f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0e2a47728bdd5fb900c9c47b86fd1704fcc3d2425abe20563449f337662b577f->leave($__internal_0e2a47728bdd5fb900c9c47b86fd1704fcc3d2425abe20563449f337662b577f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5351205eee569f3b056405b7bfe06236f94e540f72a1a9b91bc50141ddbe086a = $this->env->getExtension("native_profiler");
        $__internal_5351205eee569f3b056405b7bfe06236f94e540f72a1a9b91bc50141ddbe086a->enter($__internal_5351205eee569f3b056405b7bfe06236f94e540f72a1a9b91bc50141ddbe086a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_5351205eee569f3b056405b7bfe06236f94e540f72a1a9b91bc50141ddbe086a->leave($__internal_5351205eee569f3b056405b7bfe06236f94e540f72a1a9b91bc50141ddbe086a_prof);

    }

    public function getTemplateName()
    {
        return "Advert/advert.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" tyspe="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
