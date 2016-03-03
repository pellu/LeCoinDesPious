<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_fad44d91ddcb9c8ee9c7f39b05b7565c9644c2a1d78ac1386b2fe6bf0aa4ba7e extends Twig_Template
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
        $__internal_3f938ccf7d5a90048e0f93a5449f7c463e1046ee368af197c84d8ab924c40524 = $this->env->getExtension("native_profiler");
        $__internal_3f938ccf7d5a90048e0f93a5449f7c463e1046ee368af197c84d8ab924c40524->enter($__internal_3f938ccf7d5a90048e0f93a5449f7c463e1046ee368af197c84d8ab924c40524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_3f938ccf7d5a90048e0f93a5449f7c463e1046ee368af197c84d8ab924c40524->leave($__internal_3f938ccf7d5a90048e0f93a5449f7c463e1046ee368af197c84d8ab924c40524_prof);

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
