<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_07a286e47fddfb22770d716be111394f345be07cb0502d4ce58c3a69e1650639 extends Twig_Template
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
        $__internal_fcbf440cfce6d1179358c9909357c3f49226881a62068467d76bda00f6419662 = $this->env->getExtension("native_profiler");
        $__internal_fcbf440cfce6d1179358c9909357c3f49226881a62068467d76bda00f6419662->enter($__internal_fcbf440cfce6d1179358c9909357c3f49226881a62068467d76bda00f6419662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fcbf440cfce6d1179358c9909357c3f49226881a62068467d76bda00f6419662->leave($__internal_fcbf440cfce6d1179358c9909357c3f49226881a62068467d76bda00f6419662_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
