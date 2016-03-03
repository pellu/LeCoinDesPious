<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_457ce35411f42da0202979d260ec2a22b79915d99bd775aaa834eacc8c07059c extends Twig_Template
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
        $__internal_aeb551fab4076560fbeea6a6efc9f682dc6ea54c53c7ec9bde115749b47135ed = $this->env->getExtension("native_profiler");
        $__internal_aeb551fab4076560fbeea6a6efc9f682dc6ea54c53c7ec9bde115749b47135ed->enter($__internal_aeb551fab4076560fbeea6a6efc9f682dc6ea54c53c7ec9bde115749b47135ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_aeb551fab4076560fbeea6a6efc9f682dc6ea54c53c7ec9bde115749b47135ed->leave($__internal_aeb551fab4076560fbeea6a6efc9f682dc6ea54c53c7ec9bde115749b47135ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
