<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_45068d30d2954f79f2b6e081b6642827184acc045d2813d3314ff7998e643099 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_b545e1d2bca3835ddc80248fa2ade5d5e5160a6d77658a9dd1fa530d8c59feec = $this->env->getExtension("native_profiler");
        $__internal_b545e1d2bca3835ddc80248fa2ade5d5e5160a6d77658a9dd1fa530d8c59feec->enter($__internal_b545e1d2bca3835ddc80248fa2ade5d5e5160a6d77658a9dd1fa530d8c59feec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b545e1d2bca3835ddc80248fa2ade5d5e5160a6d77658a9dd1fa530d8c59feec->leave($__internal_b545e1d2bca3835ddc80248fa2ade5d5e5160a6d77658a9dd1fa530d8c59feec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cfc622d40fe57eeffc99c55db526aa18f534c69e71be5eeb4930a755410e139 = $this->env->getExtension("native_profiler");
        $__internal_6cfc622d40fe57eeffc99c55db526aa18f534c69e71be5eeb4930a755410e139->enter($__internal_6cfc622d40fe57eeffc99c55db526aa18f534c69e71be5eeb4930a755410e139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6cfc622d40fe57eeffc99c55db526aa18f534c69e71be5eeb4930a755410e139->leave($__internal_6cfc622d40fe57eeffc99c55db526aa18f534c69e71be5eeb4930a755410e139_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8493cd0a38b5630394db64fe17fac7d95f652ccdaf10b6326394b474de1e8f2 = $this->env->getExtension("native_profiler");
        $__internal_d8493cd0a38b5630394db64fe17fac7d95f652ccdaf10b6326394b474de1e8f2->enter($__internal_d8493cd0a38b5630394db64fe17fac7d95f652ccdaf10b6326394b474de1e8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d8493cd0a38b5630394db64fe17fac7d95f652ccdaf10b6326394b474de1e8f2->leave($__internal_d8493cd0a38b5630394db64fe17fac7d95f652ccdaf10b6326394b474de1e8f2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
