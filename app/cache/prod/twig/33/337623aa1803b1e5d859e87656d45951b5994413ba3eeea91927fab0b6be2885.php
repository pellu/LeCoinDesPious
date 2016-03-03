<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_37dab8d1db041cc187eab34124c4f6082d064cb745a69351d6da0ef4513c783b extends Twig_Template
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
        $__internal_515604ff7534e6f2f937b10f93bbd1c46bdeba0d128322b8fa7214f47b8d5ade = $this->env->getExtension("native_profiler");
        $__internal_515604ff7534e6f2f937b10f93bbd1c46bdeba0d128322b8fa7214f47b8d5ade->enter($__internal_515604ff7534e6f2f937b10f93bbd1c46bdeba0d128322b8fa7214f47b8d5ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_515604ff7534e6f2f937b10f93bbd1c46bdeba0d128322b8fa7214f47b8d5ade->leave($__internal_515604ff7534e6f2f937b10f93bbd1c46bdeba0d128322b8fa7214f47b8d5ade_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
