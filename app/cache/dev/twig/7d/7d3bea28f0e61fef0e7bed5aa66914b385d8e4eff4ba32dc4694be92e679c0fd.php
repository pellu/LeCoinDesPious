<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0e523121dd9475b236dd2a76c6f976fa6c9fa5817340b51753e05d2bd700295a extends Twig_Template
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
        $__internal_9190ed7d8443f5ce809c6439cc7aea418563af3fe4869701d2c4fd09a89fb64b = $this->env->getExtension("native_profiler");
        $__internal_9190ed7d8443f5ce809c6439cc7aea418563af3fe4869701d2c4fd09a89fb64b->enter($__internal_9190ed7d8443f5ce809c6439cc7aea418563af3fe4869701d2c4fd09a89fb64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_9190ed7d8443f5ce809c6439cc7aea418563af3fe4869701d2c4fd09a89fb64b->leave($__internal_9190ed7d8443f5ce809c6439cc7aea418563af3fe4869701d2c4fd09a89fb64b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
