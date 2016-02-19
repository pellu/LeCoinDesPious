<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_75bb0d5a6d14ee4e1e414ec1e9ff33e9a3c087d0f69dc6f387f93227ae11a5dd extends Twig_Template
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
        $__internal_3186081f5141bb0b85e3bc10d8f5ce71edb86d4ecec20c490be59792247247e1 = $this->env->getExtension("native_profiler");
        $__internal_3186081f5141bb0b85e3bc10d8f5ce71edb86d4ecec20c490be59792247247e1->enter($__internal_3186081f5141bb0b85e3bc10d8f5ce71edb86d4ecec20c490be59792247247e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3186081f5141bb0b85e3bc10d8f5ce71edb86d4ecec20c490be59792247247e1->leave($__internal_3186081f5141bb0b85e3bc10d8f5ce71edb86d4ecec20c490be59792247247e1_prof);

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
