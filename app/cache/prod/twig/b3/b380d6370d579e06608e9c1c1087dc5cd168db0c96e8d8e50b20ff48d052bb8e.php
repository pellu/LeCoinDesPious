<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_7552d909ec6eb0cd81873a6befa1a1d253304214dd5e363a3f6af47c0f317ef5 extends Twig_Template
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
        $__internal_ff030f502b7fb1f04b6acf2e60a60bf371358512440c3c1b31b9f53416c6e304 = $this->env->getExtension("native_profiler");
        $__internal_ff030f502b7fb1f04b6acf2e60a60bf371358512440c3c1b31b9f53416c6e304->enter($__internal_ff030f502b7fb1f04b6acf2e60a60bf371358512440c3c1b31b9f53416c6e304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_ff030f502b7fb1f04b6acf2e60a60bf371358512440c3c1b31b9f53416c6e304->leave($__internal_ff030f502b7fb1f04b6acf2e60a60bf371358512440c3c1b31b9f53416c6e304_prof);

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
