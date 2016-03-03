<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_303820ffbdada7051b521e390f7586555d40dbeed282c4f2d4c10f508050d760 extends Twig_Template
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
        $__internal_9afdedea9932dbb5af15c52454d8a1ae1c46a29cf056deccfe6ca7f049d264ea = $this->env->getExtension("native_profiler");
        $__internal_9afdedea9932dbb5af15c52454d8a1ae1c46a29cf056deccfe6ca7f049d264ea->enter($__internal_9afdedea9932dbb5af15c52454d8a1ae1c46a29cf056deccfe6ca7f049d264ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_9afdedea9932dbb5af15c52454d8a1ae1c46a29cf056deccfe6ca7f049d264ea->leave($__internal_9afdedea9932dbb5af15c52454d8a1ae1c46a29cf056deccfe6ca7f049d264ea_prof);

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
