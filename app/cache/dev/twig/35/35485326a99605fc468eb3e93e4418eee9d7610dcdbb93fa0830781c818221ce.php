<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_279ea7af9e9885f5608d7eb283efd0094e5f969ee5bfb46a753324af6391d08a extends Twig_Template
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
        $__internal_818baf6adac9486aaa8c9618783364a7dfe57f1becf144e4e7181a78aed43bff = $this->env->getExtension("native_profiler");
        $__internal_818baf6adac9486aaa8c9618783364a7dfe57f1becf144e4e7181a78aed43bff->enter($__internal_818baf6adac9486aaa8c9618783364a7dfe57f1becf144e4e7181a78aed43bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_818baf6adac9486aaa8c9618783364a7dfe57f1becf144e4e7181a78aed43bff->leave($__internal_818baf6adac9486aaa8c9618783364a7dfe57f1becf144e4e7181a78aed43bff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
