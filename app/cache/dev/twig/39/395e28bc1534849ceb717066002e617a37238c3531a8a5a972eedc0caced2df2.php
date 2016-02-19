<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c6e6cd8bfc68681a9203047a55853dab18baa57f381f8575d741704125b17a57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_d3f79a6aadd2bcaab1ed9b0f863dcd3072d86918a26212f9b845f51ccf9cbf72 = $this->env->getExtension("native_profiler");
        $__internal_d3f79a6aadd2bcaab1ed9b0f863dcd3072d86918a26212f9b845f51ccf9cbf72->enter($__internal_d3f79a6aadd2bcaab1ed9b0f863dcd3072d86918a26212f9b845f51ccf9cbf72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3f79a6aadd2bcaab1ed9b0f863dcd3072d86918a26212f9b845f51ccf9cbf72->leave($__internal_d3f79a6aadd2bcaab1ed9b0f863dcd3072d86918a26212f9b845f51ccf9cbf72_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e33919df2e33fc6c8f58928c55380291c0fca96ff9b86ac8247141bb0b012d93 = $this->env->getExtension("native_profiler");
        $__internal_e33919df2e33fc6c8f58928c55380291c0fca96ff9b86ac8247141bb0b012d93->enter($__internal_e33919df2e33fc6c8f58928c55380291c0fca96ff9b86ac8247141bb0b012d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e33919df2e33fc6c8f58928c55380291c0fca96ff9b86ac8247141bb0b012d93->leave($__internal_e33919df2e33fc6c8f58928c55380291c0fca96ff9b86ac8247141bb0b012d93_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_88773cd3f1dc98dfe193bf221cc97b5c9a653e99f0e5477a6d865d83b7b5a196 = $this->env->getExtension("native_profiler");
        $__internal_88773cd3f1dc98dfe193bf221cc97b5c9a653e99f0e5477a6d865d83b7b5a196->enter($__internal_88773cd3f1dc98dfe193bf221cc97b5c9a653e99f0e5477a6d865d83b7b5a196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_88773cd3f1dc98dfe193bf221cc97b5c9a653e99f0e5477a6d865d83b7b5a196->leave($__internal_88773cd3f1dc98dfe193bf221cc97b5c9a653e99f0e5477a6d865d83b7b5a196_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
