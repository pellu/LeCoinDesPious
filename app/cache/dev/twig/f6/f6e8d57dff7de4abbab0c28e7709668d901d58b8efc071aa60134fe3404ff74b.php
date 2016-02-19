<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_ecaeb2e07450a5fb2c6078faa3a2ef882be23d4f834f7814619fcd36f2ea90b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5bef2024bd993822ab879c4d82ae39b42973d525788da358ec9acedcd77b78c5 = $this->env->getExtension("native_profiler");
        $__internal_5bef2024bd993822ab879c4d82ae39b42973d525788da358ec9acedcd77b78c5->enter($__internal_5bef2024bd993822ab879c4d82ae39b42973d525788da358ec9acedcd77b78c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5bef2024bd993822ab879c4d82ae39b42973d525788da358ec9acedcd77b78c5->leave($__internal_5bef2024bd993822ab879c4d82ae39b42973d525788da358ec9acedcd77b78c5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_695db90c6effa2cd96680b103412cbecc409c0ce7f04383040ca09862be8141f = $this->env->getExtension("native_profiler");
        $__internal_695db90c6effa2cd96680b103412cbecc409c0ce7f04383040ca09862be8141f->enter($__internal_695db90c6effa2cd96680b103412cbecc409c0ce7f04383040ca09862be8141f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_695db90c6effa2cd96680b103412cbecc409c0ce7f04383040ca09862be8141f->leave($__internal_695db90c6effa2cd96680b103412cbecc409c0ce7f04383040ca09862be8141f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
