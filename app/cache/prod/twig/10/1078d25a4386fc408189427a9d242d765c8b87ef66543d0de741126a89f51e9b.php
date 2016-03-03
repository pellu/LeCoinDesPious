<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_88add22826071b3078454a647320d6501e3e619dd4e815090e1dc093aab6d229 extends Twig_Template
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
        $__internal_fc20a94d34e82fac95da2209190a1b8bf72a1fe991b11f8b3b5cc407f512c1be = $this->env->getExtension("native_profiler");
        $__internal_fc20a94d34e82fac95da2209190a1b8bf72a1fe991b11f8b3b5cc407f512c1be->enter($__internal_fc20a94d34e82fac95da2209190a1b8bf72a1fe991b11f8b3b5cc407f512c1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_fc20a94d34e82fac95da2209190a1b8bf72a1fe991b11f8b3b5cc407f512c1be->leave($__internal_fc20a94d34e82fac95da2209190a1b8bf72a1fe991b11f8b3b5cc407f512c1be_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
