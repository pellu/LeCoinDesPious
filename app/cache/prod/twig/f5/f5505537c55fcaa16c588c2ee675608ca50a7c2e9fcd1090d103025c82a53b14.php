<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_f84d5827e63749ce4e67f0125bd9e76b8a90ecc256cb528c5eec76d905652339 extends Twig_Template
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
        $__internal_3b27ace51bc66052c586ca89ecd340290259b51215f25e0d52188035e646c118 = $this->env->getExtension("native_profiler");
        $__internal_3b27ace51bc66052c586ca89ecd340290259b51215f25e0d52188035e646c118->enter($__internal_3b27ace51bc66052c586ca89ecd340290259b51215f25e0d52188035e646c118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_3b27ace51bc66052c586ca89ecd340290259b51215f25e0d52188035e646c118->leave($__internal_3b27ace51bc66052c586ca89ecd340290259b51215f25e0d52188035e646c118_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
