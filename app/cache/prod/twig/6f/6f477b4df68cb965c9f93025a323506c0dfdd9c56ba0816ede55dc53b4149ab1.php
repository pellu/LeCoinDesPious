<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bf03a586cb44aa53002dbec7ea51222c4ebe643180bd1fa786e1f4f9cd739141 extends Twig_Template
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
        $__internal_cc0d6da297107333f6238eeaaf181562662600faa7a9854036040ae4676f8ed1 = $this->env->getExtension("native_profiler");
        $__internal_cc0d6da297107333f6238eeaaf181562662600faa7a9854036040ae4676f8ed1->enter($__internal_cc0d6da297107333f6238eeaaf181562662600faa7a9854036040ae4676f8ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_cc0d6da297107333f6238eeaaf181562662600faa7a9854036040ae4676f8ed1->leave($__internal_cc0d6da297107333f6238eeaaf181562662600faa7a9854036040ae4676f8ed1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
