<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_b1ff9a6e429000b1ac936338d77d2a59a673478e1de16b3a2153c7b5c66cacef extends Twig_Template
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
        $__internal_9e44e1c515860ec5f53d8ac2c816005e994c6eec3ca3751dc37f56eb1cf5a1e1 = $this->env->getExtension("native_profiler");
        $__internal_9e44e1c515860ec5f53d8ac2c816005e994c6eec3ca3751dc37f56eb1cf5a1e1->enter($__internal_9e44e1c515860ec5f53d8ac2c816005e994c6eec3ca3751dc37f56eb1cf5a1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_9e44e1c515860ec5f53d8ac2c816005e994c6eec3ca3751dc37f56eb1cf5a1e1->leave($__internal_9e44e1c515860ec5f53d8ac2c816005e994c6eec3ca3751dc37f56eb1cf5a1e1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
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
