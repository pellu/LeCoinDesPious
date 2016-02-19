<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_591b81192b6a283702d2e68ef3d65c6b47520d87787b86ab28c99b236070f6ec extends Twig_Template
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
        $__internal_4e973595c652be854f5dd7d33d6bd006809e7e2eb468f78a0dbd023c23fcc76e = $this->env->getExtension("native_profiler");
        $__internal_4e973595c652be854f5dd7d33d6bd006809e7e2eb468f78a0dbd023c23fcc76e->enter($__internal_4e973595c652be854f5dd7d33d6bd006809e7e2eb468f78a0dbd023c23fcc76e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4e973595c652be854f5dd7d33d6bd006809e7e2eb468f78a0dbd023c23fcc76e->leave($__internal_4e973595c652be854f5dd7d33d6bd006809e7e2eb468f78a0dbd023c23fcc76e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
