<?php

/* AppBundle/Controller/DefaultController.php */
class __TwigTemplate_77d0ae09b68a80cd0e778f73b59b5af30f3a2af20640af9d799b1dece4d15ef8 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "AppBundle/Controller/DefaultController.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
