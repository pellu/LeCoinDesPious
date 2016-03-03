<?php

/* ProjetSymfonyBundle/Resources/config/routing.yml */
class __TwigTemplate_40d392727f2a84767896031df4909c39686dac7eb3185be16f871ad3cf25a666 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "ProjetSymfonyBundle/Resources/config/routing.yml";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
