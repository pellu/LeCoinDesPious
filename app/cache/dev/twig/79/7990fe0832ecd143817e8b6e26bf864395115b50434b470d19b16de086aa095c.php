<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_226c9a425bfb53a258fbd453a2481e493daa9dc23bf3495e3ea65ec92c4abed1 extends Twig_Template
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
        $__internal_e90ae138a8238d562c5427c263ee56ddd8eaa7dc5ceda9ae60b2f96a07cd5bea = $this->env->getExtension("native_profiler");
        $__internal_e90ae138a8238d562c5427c263ee56ddd8eaa7dc5ceda9ae60b2f96a07cd5bea->enter($__internal_e90ae138a8238d562c5427c263ee56ddd8eaa7dc5ceda9ae60b2f96a07cd5bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_e90ae138a8238d562c5427c263ee56ddd8eaa7dc5ceda9ae60b2f96a07cd5bea->leave($__internal_e90ae138a8238d562c5427c263ee56ddd8eaa7dc5ceda9ae60b2f96a07cd5bea_prof);

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
