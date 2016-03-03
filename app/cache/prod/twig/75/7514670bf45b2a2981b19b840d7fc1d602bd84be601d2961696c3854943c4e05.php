<?php

/* @User/Group/new_content.html.twig */
class __TwigTemplate_ab7d265d43fd3e8d612cfd7bbc773063e07c0a2031ce48f14c9096d29f0587d6 extends Twig_Template
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
        $__internal_983d9ed2a27cc0b0f9dd633aa55ac7c6feb220add1e51c33fc7a043df7d5c320 = $this->env->getExtension("native_profiler");
        $__internal_983d9ed2a27cc0b0f9dd633aa55ac7c6feb220add1e51c33fc7a043df7d5c320->enter($__internal_983d9ed2a27cc0b0f9dd633aa55ac7c6feb220add1e51c33fc7a043df7d5c320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/new_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_group_new");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_new\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_983d9ed2a27cc0b0f9dd633aa55ac7c6feb220add1e51c33fc7a043df7d5c320->leave($__internal_983d9ed2a27cc0b0f9dd633aa55ac7c6feb220add1e51c33fc7a043df7d5c320_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  29 => 2,  22 => 1,);
    }
}
/* <form action="{{ path('fos_user_group_new') }}" {{ form_enctype(form) }} method="POST" class="fos_user_group_new">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.new.submit'|trans([], 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
