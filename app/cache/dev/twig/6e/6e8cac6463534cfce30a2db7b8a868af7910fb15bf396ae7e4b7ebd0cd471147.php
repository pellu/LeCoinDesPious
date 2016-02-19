<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_03ec7ee679a7ab04424bf6798f8b55b0642fb53440ef4bb3afc30c72fca53801 extends Twig_Template
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
        $__internal_d0590b0a0dbedeea018020e728dc7782c1c93300334fb5d2c106d9a252825263 = $this->env->getExtension("native_profiler");
        $__internal_d0590b0a0dbedeea018020e728dc7782c1c93300334fb5d2c106d9a252825263->enter($__internal_d0590b0a0dbedeea018020e728dc7782c1c93300334fb5d2c106d9a252825263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d0590b0a0dbedeea018020e728dc7782c1c93300334fb5d2c106d9a252825263->leave($__internal_d0590b0a0dbedeea018020e728dc7782c1c93300334fb5d2c106d9a252825263_prof);

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
