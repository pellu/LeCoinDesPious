<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_9c828786018a61ec8bf510a1e1558517f2e53bf988d67de5490b2089f4dfa96e extends Twig_Template
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
        $__internal_258706a3ffe3c98716b24ad8ccab4c95e38c8c107be6568dce51b5d17f0adb9c = $this->env->getExtension("native_profiler");
        $__internal_258706a3ffe3c98716b24ad8ccab4c95e38c8c107be6568dce51b5d17f0adb9c->enter($__internal_258706a3ffe3c98716b24ad8ccab4c95e38c8c107be6568dce51b5d17f0adb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_258706a3ffe3c98716b24ad8ccab4c95e38c8c107be6568dce51b5d17f0adb9c->leave($__internal_258706a3ffe3c98716b24ad8ccab4c95e38c8c107be6568dce51b5d17f0adb9c_prof);

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
