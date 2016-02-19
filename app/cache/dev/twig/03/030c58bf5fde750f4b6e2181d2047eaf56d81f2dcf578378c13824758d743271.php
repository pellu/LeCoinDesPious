<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_92e1d55fb450490a601d7d6b6eee4ee2498d6e1747c716ee0449ac4ce792fe27 extends Twig_Template
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
        $__internal_af18269435c3784a0aab24f6747743a668df8c5397096471cbda9ebea32050a3 = $this->env->getExtension("native_profiler");
        $__internal_af18269435c3784a0aab24f6747743a668df8c5397096471cbda9ebea32050a3->enter($__internal_af18269435c3784a0aab24f6747743a668df8c5397096471cbda9ebea32050a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_af18269435c3784a0aab24f6747743a668df8c5397096471cbda9ebea32050a3->leave($__internal_af18269435c3784a0aab24f6747743a668df8c5397096471cbda9ebea32050a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
