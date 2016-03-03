<?php

/* @User/Group/show_content.html.twig */
class __TwigTemplate_5aab4aba672cac4016cb282c19371bae926f5e929c1ff7de6043b5d0bfd1ba0f extends Twig_Template
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
        $__internal_2086cac89df80e205492df8ab6c4268dc5d8ca2e5e03cd6c572851379a61fc72 = $this->env->getExtension("native_profiler");
        $__internal_2086cac89df80e205492df8ab6c4268dc5d8ca2e5e03cd6c572851379a61fc72->enter($__internal_2086cac89df80e205492df8ab6c4268dc5d8ca2e5e03cd6c572851379a61fc72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/show_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_show\">
    <p>";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_2086cac89df80e205492df8ab6c4268dc5d8ca2e5e03cd6c572851379a61fc72->leave($__internal_2086cac89df80e205492df8ab6c4268dc5d8ca2e5e03cd6c572851379a61fc72_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans([], 'FOSUserBundle') }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
