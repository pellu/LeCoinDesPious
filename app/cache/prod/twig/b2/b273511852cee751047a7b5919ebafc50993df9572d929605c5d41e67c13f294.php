<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_abb223f004562aa1a5bcd4645c9226dbe23ae7af57197fb478f2998f4358a7a9 extends Twig_Template
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
        $__internal_403dcfcea1e0dd9b28d7c4b8a5801dea1bbf109f840fd612f331603ba442abb6 = $this->env->getExtension("native_profiler");
        $__internal_403dcfcea1e0dd9b28d7c4b8a5801dea1bbf109f840fd612f331603ba442abb6->enter($__internal_403dcfcea1e0dd9b28d7c4b8a5801dea1bbf109f840fd612f331603ba442abb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_403dcfcea1e0dd9b28d7c4b8a5801dea1bbf109f840fd612f331603ba442abb6->leave($__internal_403dcfcea1e0dd9b28d7c4b8a5801dea1bbf109f840fd612f331603ba442abb6_prof);

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
