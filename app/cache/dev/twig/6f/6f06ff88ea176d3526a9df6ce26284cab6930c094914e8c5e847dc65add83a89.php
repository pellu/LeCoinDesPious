<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_8b4a2361d33b7e31714652d1e8763d01ea5b5b117677abbd76201c9fb27b8470 extends Twig_Template
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
        $__internal_47afa113fbb660ae12979b3ae0908a70f13ce19f8f2f4d82dd47a7b91368c5ee = $this->env->getExtension("native_profiler");
        $__internal_47afa113fbb660ae12979b3ae0908a70f13ce19f8f2f4d82dd47a7b91368c5ee->enter($__internal_47afa113fbb660ae12979b3ae0908a70f13ce19f8f2f4d82dd47a7b91368c5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_47afa113fbb660ae12979b3ae0908a70f13ce19f8f2f4d82dd47a7b91368c5ee->leave($__internal_47afa113fbb660ae12979b3ae0908a70f13ce19f8f2f4d82dd47a7b91368c5ee_prof);

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
