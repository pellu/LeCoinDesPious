<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2f46877fca8123c050b727467cb59c9b5c32553da634a9ed48190b41a9e3cf97 extends Twig_Template
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
        $__internal_9a136072efd9f218186cdb32147ea8b4bc293bcec470c6ec1c4727f0c6a55450 = $this->env->getExtension("native_profiler");
        $__internal_9a136072efd9f218186cdb32147ea8b4bc293bcec470c6ec1c4727f0c6a55450->enter($__internal_9a136072efd9f218186cdb32147ea8b4bc293bcec470c6ec1c4727f0c6a55450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_9a136072efd9f218186cdb32147ea8b4bc293bcec470c6ec1c4727f0c6a55450->leave($__internal_9a136072efd9f218186cdb32147ea8b4bc293bcec470c6ec1c4727f0c6a55450_prof);

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
