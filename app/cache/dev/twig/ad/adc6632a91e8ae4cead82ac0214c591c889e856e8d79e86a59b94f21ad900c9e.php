<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9f4306cf24319c29b1d76481268d84708e795a3421666968c9b4ceb3e0015bae extends Twig_Template
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
        $__internal_02a36a853087374014127b0b727b8067c2c94763f2d4080413c501f2637e3e50 = $this->env->getExtension("native_profiler");
        $__internal_02a36a853087374014127b0b727b8067c2c94763f2d4080413c501f2637e3e50->enter($__internal_02a36a853087374014127b0b727b8067c2c94763f2d4080413c501f2637e3e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_02a36a853087374014127b0b727b8067c2c94763f2d4080413c501f2637e3e50->leave($__internal_02a36a853087374014127b0b727b8067c2c94763f2d4080413c501f2637e3e50_prof);

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
