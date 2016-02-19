<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b3ec4f007715166255ba885c1d6ef93f771c759e010c8ab26515da7eb74cb2e6 extends Twig_Template
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
        $__internal_ba5ff3075d440a6e7f02c4f5e5b15a8d70b85b11240292664b40da3c8d71e7ad = $this->env->getExtension("native_profiler");
        $__internal_ba5ff3075d440a6e7f02c4f5e5b15a8d70b85b11240292664b40da3c8d71e7ad->enter($__internal_ba5ff3075d440a6e7f02c4f5e5b15a8d70b85b11240292664b40da3c8d71e7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ba5ff3075d440a6e7f02c4f5e5b15a8d70b85b11240292664b40da3c8d71e7ad->leave($__internal_ba5ff3075d440a6e7f02c4f5e5b15a8d70b85b11240292664b40da3c8d71e7ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
