<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_3a4b8b4f05d909894714a935522c9137b62fa95d9d428feeeb5fdb7e8b91e83e extends Twig_Template
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
        $__internal_830de69ad877af3d5f41c6996f3be0f5712b8b0925668413b317c57e01fcc250 = $this->env->getExtension("native_profiler");
        $__internal_830de69ad877af3d5f41c6996f3be0f5712b8b0925668413b317c57e01fcc250->enter($__internal_830de69ad877af3d5f41c6996f3be0f5712b8b0925668413b317c57e01fcc250_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_830de69ad877af3d5f41c6996f3be0f5712b8b0925668413b317c57e01fcc250->leave($__internal_830de69ad877af3d5f41c6996f3be0f5712b8b0925668413b317c57e01fcc250_prof);

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
