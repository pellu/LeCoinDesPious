<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_eea41600c35bc95e09cc797d0be1e08df3f475685e27c0b713f88ecc9a30035b extends Twig_Template
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
        $__internal_bbac2bdf38037e1c7fa9a3e70abe3729f22fb6befd968767dcc35357b4d106a8 = $this->env->getExtension("native_profiler");
        $__internal_bbac2bdf38037e1c7fa9a3e70abe3729f22fb6befd968767dcc35357b4d106a8->enter($__internal_bbac2bdf38037e1c7fa9a3e70abe3729f22fb6befd968767dcc35357b4d106a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bbac2bdf38037e1c7fa9a3e70abe3729f22fb6befd968767dcc35357b4d106a8->leave($__internal_bbac2bdf38037e1c7fa9a3e70abe3729f22fb6befd968767dcc35357b4d106a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
