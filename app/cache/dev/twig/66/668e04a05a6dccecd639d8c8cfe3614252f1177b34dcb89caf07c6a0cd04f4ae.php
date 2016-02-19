<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d10131e562c72d9b4cbb22437aabbcc86246ee76c6f9f3f49f4bb9f8b7dfd8e0 extends Twig_Template
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
        $__internal_4dd337472030dda2a780ec6b94f222fc2458ff47c4a763ec92d280a70811f421 = $this->env->getExtension("native_profiler");
        $__internal_4dd337472030dda2a780ec6b94f222fc2458ff47c4a763ec92d280a70811f421->enter($__internal_4dd337472030dda2a780ec6b94f222fc2458ff47c4a763ec92d280a70811f421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4dd337472030dda2a780ec6b94f222fc2458ff47c4a763ec92d280a70811f421->leave($__internal_4dd337472030dda2a780ec6b94f222fc2458ff47c4a763ec92d280a70811f421_prof);

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
