<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5bb7f53a0be3efb21ac5f33a96b24b88c953587703aa41289a33cd6bb5c8e2e9 extends Twig_Template
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
        $__internal_6f990475dceff2a2dd35af4228091a6793b8dc951f846026c941af67989b3610 = $this->env->getExtension("native_profiler");
        $__internal_6f990475dceff2a2dd35af4228091a6793b8dc951f846026c941af67989b3610->enter($__internal_6f990475dceff2a2dd35af4228091a6793b8dc951f846026c941af67989b3610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6f990475dceff2a2dd35af4228091a6793b8dc951f846026c941af67989b3610->leave($__internal_6f990475dceff2a2dd35af4228091a6793b8dc951f846026c941af67989b3610_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
