<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b775c355ad477b469263b89121ecf35343f580ede5f40a84be1e769ca99fa3bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1440b910206c4b950a888319f475f34f36efa625f6c7ac59ae6468e2e9f8ae0d = $this->env->getExtension("native_profiler");
        $__internal_1440b910206c4b950a888319f475f34f36efa625f6c7ac59ae6468e2e9f8ae0d->enter($__internal_1440b910206c4b950a888319f475f34f36efa625f6c7ac59ae6468e2e9f8ae0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1440b910206c4b950a888319f475f34f36efa625f6c7ac59ae6468e2e9f8ae0d->leave($__internal_1440b910206c4b950a888319f475f34f36efa625f6c7ac59ae6468e2e9f8ae0d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e16de1c56e3075c1274b943272a995187baed59795a277c1266a77e831b70467 = $this->env->getExtension("native_profiler");
        $__internal_e16de1c56e3075c1274b943272a995187baed59795a277c1266a77e831b70467->enter($__internal_e16de1c56e3075c1274b943272a995187baed59795a277c1266a77e831b70467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e16de1c56e3075c1274b943272a995187baed59795a277c1266a77e831b70467->leave($__internal_e16de1c56e3075c1274b943272a995187baed59795a277c1266a77e831b70467_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f5d80c3dbb4d652ad558ae0635effa961ed94de2636047f4768cfc727c56004 = $this->env->getExtension("native_profiler");
        $__internal_6f5d80c3dbb4d652ad558ae0635effa961ed94de2636047f4768cfc727c56004->enter($__internal_6f5d80c3dbb4d652ad558ae0635effa961ed94de2636047f4768cfc727c56004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6f5d80c3dbb4d652ad558ae0635effa961ed94de2636047f4768cfc727c56004->leave($__internal_6f5d80c3dbb4d652ad558ae0635effa961ed94de2636047f4768cfc727c56004_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_59602711205b1d745e454a67a2a4e9ab9f4bfc37ff91aa2b816c69ed9b546e15 = $this->env->getExtension("native_profiler");
        $__internal_59602711205b1d745e454a67a2a4e9ab9f4bfc37ff91aa2b816c69ed9b546e15->enter($__internal_59602711205b1d745e454a67a2a4e9ab9f4bfc37ff91aa2b816c69ed9b546e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_59602711205b1d745e454a67a2a4e9ab9f4bfc37ff91aa2b816c69ed9b546e15->leave($__internal_59602711205b1d745e454a67a2a4e9ab9f4bfc37ff91aa2b816c69ed9b546e15_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
