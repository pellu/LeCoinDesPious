<?php

/* ProjetSymfonyBundle/Resources/config/routing.yml */
class __TwigTemplate_01b8eb415cd927bbd8926eaf6b85851e23112bc3f816f954bd0fac6056f33d5c extends Twig_Template
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
        $__internal_782531bf53f63f9dff13c0135c7f7a0b9f42773423413bcbf3915071fd2f4e73 = $this->env->getExtension("native_profiler");
        $__internal_782531bf53f63f9dff13c0135c7f7a0b9f42773423413bcbf3915071fd2f4e73->enter($__internal_782531bf53f63f9dff13c0135c7f7a0b9f42773423413bcbf3915071fd2f4e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetSymfonyBundle/Resources/config/routing.yml"));

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
        
        $__internal_782531bf53f63f9dff13c0135c7f7a0b9f42773423413bcbf3915071fd2f4e73->leave($__internal_782531bf53f63f9dff13c0135c7f7a0b9f42773423413bcbf3915071fd2f4e73_prof);

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
