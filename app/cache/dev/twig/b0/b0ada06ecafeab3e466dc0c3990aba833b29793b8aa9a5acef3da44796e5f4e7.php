<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0be0387998cc42189dbdfee278013117b3a55558488595f82399467384e8291f extends Twig_Template
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
        $__internal_5dc08277339820179b851244407fca1045a05f81c9f475765f66b70fe74cc151 = $this->env->getExtension("native_profiler");
        $__internal_5dc08277339820179b851244407fca1045a05f81c9f475765f66b70fe74cc151->enter($__internal_5dc08277339820179b851244407fca1045a05f81c9f475765f66b70fe74cc151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5dc08277339820179b851244407fca1045a05f81c9f475765f66b70fe74cc151->leave($__internal_5dc08277339820179b851244407fca1045a05f81c9f475765f66b70fe74cc151_prof);

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
