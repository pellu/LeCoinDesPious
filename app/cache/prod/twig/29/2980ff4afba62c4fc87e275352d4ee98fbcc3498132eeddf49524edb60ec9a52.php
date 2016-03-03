<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e06a51cc60d130a8e9b181591551e1d2a7d51b23365d74ce9013907b245e9ab0 extends Twig_Template
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
        $__internal_2cf8a7dbdb1aa51a28c0f1bf17fdfcd079322c11caec0cc3ee42ca9e8edc2857 = $this->env->getExtension("native_profiler");
        $__internal_2cf8a7dbdb1aa51a28c0f1bf17fdfcd079322c11caec0cc3ee42ca9e8edc2857->enter($__internal_2cf8a7dbdb1aa51a28c0f1bf17fdfcd079322c11caec0cc3ee42ca9e8edc2857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2cf8a7dbdb1aa51a28c0f1bf17fdfcd079322c11caec0cc3ee42ca9e8edc2857->leave($__internal_2cf8a7dbdb1aa51a28c0f1bf17fdfcd079322c11caec0cc3ee42ca9e8edc2857_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
