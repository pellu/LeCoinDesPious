<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_8b5f126a88693cc04e68db416c5cdc69ca850912e9def2ceed822086f2c558e1 extends Twig_Template
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
        $__internal_c96eedee9b747104be06778bb3d0c63efa9d56f19d536ae33262199237e4f5ee = $this->env->getExtension("native_profiler");
        $__internal_c96eedee9b747104be06778bb3d0c63efa9d56f19d536ae33262199237e4f5ee->enter($__internal_c96eedee9b747104be06778bb3d0c63efa9d56f19d536ae33262199237e4f5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c96eedee9b747104be06778bb3d0c63efa9d56f19d536ae33262199237e4f5ee->leave($__internal_c96eedee9b747104be06778bb3d0c63efa9d56f19d536ae33262199237e4f5ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
