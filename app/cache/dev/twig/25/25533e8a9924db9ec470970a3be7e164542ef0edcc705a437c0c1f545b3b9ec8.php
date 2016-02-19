<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_3f086417e8f0f2f52a7abdb2be8c502b44e99e30dabd96aa5cb3c412003504d1 extends Twig_Template
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
        $__internal_6cb43b58379a69fbf0e8c3beca5e68ed0d5719208af08d8d5291abe1803eb8ee = $this->env->getExtension("native_profiler");
        $__internal_6cb43b58379a69fbf0e8c3beca5e68ed0d5719208af08d8d5291abe1803eb8ee->enter($__internal_6cb43b58379a69fbf0e8c3beca5e68ed0d5719208af08d8d5291abe1803eb8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6cb43b58379a69fbf0e8c3beca5e68ed0d5719208af08d8d5291abe1803eb8ee->leave($__internal_6cb43b58379a69fbf0e8c3beca5e68ed0d5719208af08d8d5291abe1803eb8ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
