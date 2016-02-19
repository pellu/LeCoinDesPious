<?php

/* ProjetSymfonyBundle/Resources/config/routing.yml */
class __TwigTemplate_464ef2c1b0fd89149b5e6c30a9a8caf66242ad8f3354934073781f864fb4376c extends Twig_Template
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
        $__internal_4ae2cf1551177ef48713c2b65095e817c98b353a74d8b7f7befb027071e2930c = $this->env->getExtension("native_profiler");
        $__internal_4ae2cf1551177ef48713c2b65095e817c98b353a74d8b7f7befb027071e2930c->enter($__internal_4ae2cf1551177ef48713c2b65095e817c98b353a74d8b7f7befb027071e2930c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetSymfonyBundle/Resources/config/routing.yml"));

        // line 1
        echo "oc_ProjetSymfony_home:
    path:      /platform
    defaults:  { _controller: ProjetSymfonyBundle:User:index }

oc_ProjetSymfony_view:
    path:      /platform/advert/{id}
    defaults:  { _controller: ProjetSymfonyBundle:Advert:view }

oc_ProjetSymfony_add:
    path:      /platform/add
    defaults:  { _controller: ProjetSymfonyBundle:Advert:add }

oc_ProjetSymfony_slug:
    path:      /platform/{year}/{slug}.{format}
    defaults:  { _controller: ProjetSymfonyBundle:Advert:viewSlug }";
        
        $__internal_4ae2cf1551177ef48713c2b65095e817c98b353a74d8b7f7befb027071e2930c->leave($__internal_4ae2cf1551177ef48713c2b65095e817c98b353a74d8b7f7befb027071e2930c_prof);

    }

    public function getTemplateName()
    {
        return "ProjetSymfonyBundle/Resources/config/routing.yml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* oc_ProjetSymfony_home:*/
/*     path:      /platform*/
/*     defaults:  { _controller: ProjetSymfonyBundle:User:index }*/
/* */
/* oc_ProjetSymfony_view:*/
/*     path:      /platform/advert/{id}*/
/*     defaults:  { _controller: ProjetSymfonyBundle:Advert:view }*/
/* */
/* oc_ProjetSymfony_add:*/
/*     path:      /platform/add*/
/*     defaults:  { _controller: ProjetSymfonyBundle:Advert:add }*/
/* */
/* oc_ProjetSymfony_slug:*/
/*     path:      /platform/{year}/{slug}.{format}*/
/*     defaults:  { _controller: ProjetSymfonyBundle:Advert:viewSlug }*/
