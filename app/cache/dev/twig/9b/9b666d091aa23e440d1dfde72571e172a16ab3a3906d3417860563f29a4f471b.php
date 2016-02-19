<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_649c5d1a9aec5584d06b50f708833dee117f3a4d56b2783d325613185bbc6e9a extends Twig_Template
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
        $__internal_a2e7313ecbb405424c7a9c082888f6394e23064c2f290588482671ad9e7076c4 = $this->env->getExtension("native_profiler");
        $__internal_a2e7313ecbb405424c7a9c082888f6394e23064c2f290588482671ad9e7076c4->enter($__internal_a2e7313ecbb405424c7a9c082888f6394e23064c2f290588482671ad9e7076c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a2e7313ecbb405424c7a9c082888f6394e23064c2f290588482671ad9e7076c4->leave($__internal_a2e7313ecbb405424c7a9c082888f6394e23064c2f290588482671ad9e7076c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
