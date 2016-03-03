<?php

/* AppBundle/Controller/DefaultController.php */
class __TwigTemplate_35b50f4c0f28cc0d02764699e95c7f1f5d5d98c84100d77f7710bef52997e016 extends Twig_Template
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
        $__internal_a368cdf8a5282db7b14f05f021adf97324449af71f19299f528844b041a045bf = $this->env->getExtension("native_profiler");
        $__internal_a368cdf8a5282db7b14f05f021adf97324449af71f19299f528844b041a045bf->enter($__internal_a368cdf8a5282db7b14f05f021adf97324449af71f19299f528844b041a045bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle/Controller/DefaultController.php"));

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
        
        $__internal_a368cdf8a5282db7b14f05f021adf97324449af71f19299f528844b041a045bf->leave($__internal_a368cdf8a5282db7b14f05f021adf97324449af71f19299f528844b041a045bf_prof);

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
