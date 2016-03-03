<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_3ebcd67c3f8dae945c303a29f4c61342460211898a013a8a95a4d00cef431e66 extends Twig_Template
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
        $__internal_5629e9c9bdf4bd92504d2d8c7245f90ec0d64e2a09eeb149bc5e2354f9197e71 = $this->env->getExtension("native_profiler");
        $__internal_5629e9c9bdf4bd92504d2d8c7245f90ec0d64e2a09eeb149bc5e2354f9197e71->enter($__internal_5629e9c9bdf4bd92504d2d8c7245f90ec0d64e2a09eeb149bc5e2354f9197e71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_5629e9c9bdf4bd92504d2d8c7245f90ec0d64e2a09eeb149bc5e2354f9197e71->leave($__internal_5629e9c9bdf4bd92504d2d8c7245f90ec0d64e2a09eeb149bc5e2354f9197e71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
