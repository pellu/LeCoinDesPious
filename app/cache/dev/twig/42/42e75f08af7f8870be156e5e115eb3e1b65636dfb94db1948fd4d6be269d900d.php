<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_cde55bf45fa8c638c4b83db5d0ae5d337a9aca913889e73fd6950dad56d4b6ab extends Twig_Template
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
        $__internal_b7b5f1ab1a6d923f01ca1ab006dfb93f699828da54ac639ab472c241c7c7d57d = $this->env->getExtension("native_profiler");
        $__internal_b7b5f1ab1a6d923f01ca1ab006dfb93f699828da54ac639ab472c241c7c7d57d->enter($__internal_b7b5f1ab1a6d923f01ca1ab006dfb93f699828da54ac639ab472c241c7c7d57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b7b5f1ab1a6d923f01ca1ab006dfb93f699828da54ac639ab472c241c7c7d57d->leave($__internal_b7b5f1ab1a6d923f01ca1ab006dfb93f699828da54ac639ab472c241c7c7d57d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
