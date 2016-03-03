<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_60369c74825cb7d5cea568ed5599855a8958a454455c88c4e333d373fa46aac4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9564b9057268b25ad7158522b6a75553820925854dcb57d96bd9bbd77d3f571a = $this->env->getExtension("native_profiler");
        $__internal_9564b9057268b25ad7158522b6a75553820925854dcb57d96bd9bbd77d3f571a->enter($__internal_9564b9057268b25ad7158522b6a75553820925854dcb57d96bd9bbd77d3f571a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 6
        $this->displayBlock('body_text', $context, $blocks);
        // line 11
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9564b9057268b25ad7158522b6a75553820925854dcb57d96bd9bbd77d3f571a->leave($__internal_9564b9057268b25ad7158522b6a75553820925854dcb57d96bd9bbd77d3f571a_prof);

    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5044b303639f18dc6d34e3b32b9ccedf8b3965eb082a46a8057c7f599296571e = $this->env->getExtension("native_profiler");
        $__internal_5044b303639f18dc6d34e3b32b9ccedf8b3965eb082a46a8057c7f599296571e->enter($__internal_5044b303639f18dc6d34e3b32b9ccedf8b3965eb082a46a8057c7f599296571e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 3
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5044b303639f18dc6d34e3b32b9ccedf8b3965eb082a46a8057c7f599296571e->leave($__internal_5044b303639f18dc6d34e3b32b9ccedf8b3965eb082a46a8057c7f599296571e_prof);

    }

    // line 6
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c635dcfe203b6531a4c295895565c4fa1a7c5040a4190a40e1e4704e51d2da9f = $this->env->getExtension("native_profiler");
        $__internal_c635dcfe203b6531a4c295895565c4fa1a7c5040a4190a40e1e4704e51d2da9f->enter($__internal_c635dcfe203b6531a4c295895565c4fa1a7c5040a4190a40e1e4704e51d2da9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 8
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c635dcfe203b6531a4c295895565c4fa1a7c5040a4190a40e1e4704e51d2da9f->leave($__internal_c635dcfe203b6531a4c295895565c4fa1a7c5040a4190a40e1e4704e51d2da9f_prof);

    }

    // line 11
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_b9155b3125fb459a0b4b7a3505bebe0c06f612b933f7a93ba67afffe2e488a1f = $this->env->getExtension("native_profiler");
        $__internal_b9155b3125fb459a0b4b7a3505bebe0c06f612b933f7a93ba67afffe2e488a1f->enter($__internal_b9155b3125fb459a0b4b7a3505bebe0c06f612b933f7a93ba67afffe2e488a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b9155b3125fb459a0b4b7a3505bebe0c06f612b933f7a93ba67afffe2e488a1f->leave($__internal_b9155b3125fb459a0b4b7a3505bebe0c06f612b933f7a93ba67afffe2e488a1f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  57 => 8,  51 => 6,  42 => 3,  36 => 1,  29 => 11,  27 => 6,  25 => 1,);
    }
}
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}, 'FOSUserBundle') }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
