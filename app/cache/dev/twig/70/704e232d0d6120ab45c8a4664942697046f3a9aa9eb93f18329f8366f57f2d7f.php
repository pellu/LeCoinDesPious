<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_e8a9ee2bb1d2075e90423f9388c71af5924e1ee040a27f1224e922002746cff5 extends Twig_Template
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
        $__internal_ec27e3a367868328bb4c910c5d4d73169a8ae4238427eee324f61330d5e9a3b7 = $this->env->getExtension("native_profiler");
        $__internal_ec27e3a367868328bb4c910c5d4d73169a8ae4238427eee324f61330d5e9a3b7->enter($__internal_ec27e3a367868328bb4c910c5d4d73169a8ae4238427eee324f61330d5e9a3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ec27e3a367868328bb4c910c5d4d73169a8ae4238427eee324f61330d5e9a3b7->leave($__internal_ec27e3a367868328bb4c910c5d4d73169a8ae4238427eee324f61330d5e9a3b7_prof);

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
