<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_4f626e070f48845b6c952e58bfb319ac24d1297821c2069b3fd7878a8deeaea4 extends Twig_Template
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
        $__internal_e7323ee1d366e6cad96152b0ee8f029f33cc01acc9c813e9eeb3bf42bfb5ac83 = $this->env->getExtension("native_profiler");
        $__internal_e7323ee1d366e6cad96152b0ee8f029f33cc01acc9c813e9eeb3bf42bfb5ac83->enter($__internal_e7323ee1d366e6cad96152b0ee8f029f33cc01acc9c813e9eeb3bf42bfb5ac83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e7323ee1d366e6cad96152b0ee8f029f33cc01acc9c813e9eeb3bf42bfb5ac83->leave($__internal_e7323ee1d366e6cad96152b0ee8f029f33cc01acc9c813e9eeb3bf42bfb5ac83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
