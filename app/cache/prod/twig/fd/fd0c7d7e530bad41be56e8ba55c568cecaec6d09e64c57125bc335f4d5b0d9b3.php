<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_d8da061c114e0968383ce8fbffb99910fc66b849b4655f8098cd2a38861a953d extends Twig_Template
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
        $__internal_a8dfb9bba579667f180760ba24bdc2cf1232d19ae10c525998f34d38c197ad2c = $this->env->getExtension("native_profiler");
        $__internal_a8dfb9bba579667f180760ba24bdc2cf1232d19ae10c525998f34d38c197ad2c->enter($__internal_a8dfb9bba579667f180760ba24bdc2cf1232d19ae10c525998f34d38c197ad2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a8dfb9bba579667f180760ba24bdc2cf1232d19ae10c525998f34d38c197ad2c->leave($__internal_a8dfb9bba579667f180760ba24bdc2cf1232d19ae10c525998f34d38c197ad2c_prof);

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
