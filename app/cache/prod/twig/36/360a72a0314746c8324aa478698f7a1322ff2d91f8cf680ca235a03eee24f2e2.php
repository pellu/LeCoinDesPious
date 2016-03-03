<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_fcaf160d316e46de205640da24a72d7b8733eb419ba8f82d69554f7d0775a9fc extends Twig_Template
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
        $__internal_53e5e3a74976898b2a7a0c636598a2e1203c98cba29808242634194a61a5473e = $this->env->getExtension("native_profiler");
        $__internal_53e5e3a74976898b2a7a0c636598a2e1203c98cba29808242634194a61a5473e->enter($__internal_53e5e3a74976898b2a7a0c636598a2e1203c98cba29808242634194a61a5473e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_53e5e3a74976898b2a7a0c636598a2e1203c98cba29808242634194a61a5473e->leave($__internal_53e5e3a74976898b2a7a0c636598a2e1203c98cba29808242634194a61a5473e_prof);

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
