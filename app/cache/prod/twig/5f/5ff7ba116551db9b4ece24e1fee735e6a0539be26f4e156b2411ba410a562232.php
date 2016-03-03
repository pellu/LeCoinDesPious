<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6f7e59ac354b339ffcc2f7c17133a9d4122f31b69b5364544e518477bd14f35f extends Twig_Template
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
        $__internal_cbe7023e4a3a2df16fd2ee1ce7c867d521c37268ad77e406b7fb8e8db86817b4 = $this->env->getExtension("native_profiler");
        $__internal_cbe7023e4a3a2df16fd2ee1ce7c867d521c37268ad77e406b7fb8e8db86817b4->enter($__internal_cbe7023e4a3a2df16fd2ee1ce7c867d521c37268ad77e406b7fb8e8db86817b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_cbe7023e4a3a2df16fd2ee1ce7c867d521c37268ad77e406b7fb8e8db86817b4->leave($__internal_cbe7023e4a3a2df16fd2ee1ce7c867d521c37268ad77e406b7fb8e8db86817b4_prof);

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
