<?php

/* AppBundle/Controller/DefaultController.php */
class __TwigTemplate_202ef420231c5bb81e539aff56fdd53213852b4b4ec61129e53612081feeec16 extends Twig_Template
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
        $__internal_1d00d417cf2d79762ed50795d462d41bb5547866fea8811e00e162d7bb23d946 = $this->env->getExtension("native_profiler");
        $__internal_1d00d417cf2d79762ed50795d462d41bb5547866fea8811e00e162d7bb23d946->enter($__internal_1d00d417cf2d79762ed50795d462d41bb5547866fea8811e00e162d7bb23d946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle/Controller/DefaultController.php"));

        // line 1
        echo "<?php

namespace AppBundle\\Controller;

use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\Route;
use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller;
use Symfony\\Component\\HttpFoundation\\Request;

class DefaultController extends Controller
{
    /**
     * @Route(\"/\", name=\"homepage\")
     */
    public function indexAction(Request \$request)
    {
        // replace this example code with whatever you need
        return \$this->render('default/index.html.twig', array(
            'base_dir' => realpath(\$this->getParameter('kernel.root_dir').'/..'),
        ));
    }
}
";
        
        $__internal_1d00d417cf2d79762ed50795d462d41bb5547866fea8811e00e162d7bb23d946->leave($__internal_1d00d417cf2d79762ed50795d462d41bb5547866fea8811e00e162d7bb23d946_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle/Controller/DefaultController.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* */
/* namespace AppBundle\Controller;*/
/* */
/* use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;*/
/* use Symfony\Bundle\FrameworkBundle\Controller\Controller;*/
/* use Symfony\Component\HttpFoundation\Request;*/
/* */
/* class DefaultController extends Controller*/
/* {*/
/*     /***/
/*      * @Route("/", name="homepage")*/
/*      *//* */
/*     public function indexAction(Request $request)*/
/*     {*/
/*         // replace this example code with whatever you need*/
/*         return $this->render('default/index.html.twig', array(*/
/*             'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),*/
/*         ));*/
/*     }*/
/* }*/
/* */
