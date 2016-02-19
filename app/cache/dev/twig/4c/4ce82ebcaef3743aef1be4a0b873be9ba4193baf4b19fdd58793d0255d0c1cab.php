<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_5906fd5d7dd43f0cc50945c767f446a3643d73c647917b197ca68d5662b8f4a2 extends Twig_Template
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
        $__internal_6e5477ca2737a50e6112a9dd509bb8a621d350363415e291022ba5d944668c57 = $this->env->getExtension("native_profiler");
        $__internal_6e5477ca2737a50e6112a9dd509bb8a621d350363415e291022ba5d944668c57->enter($__internal_6e5477ca2737a50e6112a9dd509bb8a621d350363415e291022ba5d944668c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6e5477ca2737a50e6112a9dd509bb8a621d350363415e291022ba5d944668c57->leave($__internal_6e5477ca2737a50e6112a9dd509bb8a621d350363415e291022ba5d944668c57_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f4ba91ad3b3ac0f728a007e5ce0213481a81a8eda1e0d09cfab6d7e859d980dd = $this->env->getExtension("native_profiler");
        $__internal_f4ba91ad3b3ac0f728a007e5ce0213481a81a8eda1e0d09cfab6d7e859d980dd->enter($__internal_f4ba91ad3b3ac0f728a007e5ce0213481a81a8eda1e0d09cfab6d7e859d980dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f4ba91ad3b3ac0f728a007e5ce0213481a81a8eda1e0d09cfab6d7e859d980dd->leave($__internal_f4ba91ad3b3ac0f728a007e5ce0213481a81a8eda1e0d09cfab6d7e859d980dd_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
