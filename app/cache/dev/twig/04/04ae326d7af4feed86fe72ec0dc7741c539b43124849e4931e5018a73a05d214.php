<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_5e6f7b51e4802cf43e70ca5d657d1cac0556cfb106d76d26a7af30c5b290ab06 extends Twig_Template
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
        $__internal_5dafd8968d9db088130dbe2175f761aebb6b869d7bdd29b70a37329e60e268ae = $this->env->getExtension("native_profiler");
        $__internal_5dafd8968d9db088130dbe2175f761aebb6b869d7bdd29b70a37329e60e268ae->enter($__internal_5dafd8968d9db088130dbe2175f761aebb6b869d7bdd29b70a37329e60e268ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_5dafd8968d9db088130dbe2175f761aebb6b869d7bdd29b70a37329e60e268ae->leave($__internal_5dafd8968d9db088130dbe2175f761aebb6b869d7bdd29b70a37329e60e268ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
