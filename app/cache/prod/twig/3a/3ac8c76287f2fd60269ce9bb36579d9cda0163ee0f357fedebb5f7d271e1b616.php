<?php

/* @User/Group/edit_content.html.twig */
class __TwigTemplate_d229d79a4c7b718345eed8f1aa9307e618b767906dd23d7c4a376d03680f0497 extends Twig_Template
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
        $__internal_4fe1e7c9d492d1fd22ed642527e160fcaeadff9181e139aefd171eb9d85c8aa1 = $this->env->getExtension("native_profiler");
        $__internal_4fe1e7c9d492d1fd22ed642527e160fcaeadff9181e139aefd171eb9d85c8aa1->enter($__internal_4fe1e7c9d492d1fd22ed642527e160fcaeadff9181e139aefd171eb9d85c8aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@User/Group/edit_content.html.twig"));

        // line 1
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_edit", array("groupname" => (isset($context["groupname"]) ? $context["groupname"] : $this->getContext($context, "groupname")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_group_edit\">
    ";
        // line 2
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_4fe1e7c9d492d1fd22ed642527e160fcaeadff9181e139aefd171eb9d85c8aa1->leave($__internal_4fe1e7c9d492d1fd22ed642527e160fcaeadff9181e139aefd171eb9d85c8aa1_prof);

    }

    public function getTemplateName()
    {
        return "@User/Group/edit_content.html.twig";
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
/* <form action="{{ path('fos_user_group_edit', {'groupname': groupname} ) }}" {{ form_enctype(form) }} method="POST" class="fos_user_group_edit">*/
/*     {{ form_widget(form) }}*/
/*     <div>*/
/*         <input type="submit" value="{{ 'group.edit.submit'|trans([], 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>*/
/* */
