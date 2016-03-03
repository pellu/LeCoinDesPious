<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_5c1a962da6a1b1edcefd03f3dfd0edaa0a804fa585fae1a6dc2220b826a3f1f8 extends Twig_Template
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
        $__internal_259842ccb8c375d5ad4ba0ae21c82c301b1636a71b68ce70f2489735dadbf2d5 = $this->env->getExtension("native_profiler");
        $__internal_259842ccb8c375d5ad4ba0ae21c82c301b1636a71b68ce70f2489735dadbf2d5->enter($__internal_259842ccb8c375d5ad4ba0ae21c82c301b1636a71b68ce70f2489735dadbf2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_259842ccb8c375d5ad4ba0ae21c82c301b1636a71b68ce70f2489735dadbf2d5->leave($__internal_259842ccb8c375d5ad4ba0ae21c82c301b1636a71b68ce70f2489735dadbf2d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
