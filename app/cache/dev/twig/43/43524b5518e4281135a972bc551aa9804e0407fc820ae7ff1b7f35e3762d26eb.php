<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5a1d925b05cf6a4250ebb67cbe263a31a7c85a25f04b295b36359d3498519406 extends Twig_Template
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
        $__internal_83001dfd5c172720c1acc3dfa9143e78cb0b2dd5770100f9caa4843c0abbc42f = $this->env->getExtension("native_profiler");
        $__internal_83001dfd5c172720c1acc3dfa9143e78cb0b2dd5770100f9caa4843c0abbc42f->enter($__internal_83001dfd5c172720c1acc3dfa9143e78cb0b2dd5770100f9caa4843c0abbc42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_83001dfd5c172720c1acc3dfa9143e78cb0b2dd5770100f9caa4843c0abbc42f->leave($__internal_83001dfd5c172720c1acc3dfa9143e78cb0b2dd5770100f9caa4843c0abbc42f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
