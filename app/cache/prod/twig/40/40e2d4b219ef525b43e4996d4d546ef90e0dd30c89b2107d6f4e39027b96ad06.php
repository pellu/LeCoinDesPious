<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d17a79319b0297e1566c5ab8e78ca8a6f7865036701fda342798de8449247385 extends Twig_Template
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
        $__internal_0f19049a7c7b92106cf4c941c13f73e208a76d417b68e16b84d692e942c3ed04 = $this->env->getExtension("native_profiler");
        $__internal_0f19049a7c7b92106cf4c941c13f73e208a76d417b68e16b84d692e942c3ed04->enter($__internal_0f19049a7c7b92106cf4c941c13f73e208a76d417b68e16b84d692e942c3ed04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0f19049a7c7b92106cf4c941c13f73e208a76d417b68e16b84d692e942c3ed04->leave($__internal_0f19049a7c7b92106cf4c941c13f73e208a76d417b68e16b84d692e942c3ed04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
