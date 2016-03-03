<?php

/* ProjetSymfonyBundle/Tests/Controller/DefaultControllerTest.php */
class __TwigTemplate_b5a5d458c507f0454a50214b7f2886041bd5d39954720d4dd71ac63373909937 extends Twig_Template
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
        $__internal_fabe360cad8f7f34166535174025761dbed7086ff98068248e902f9b9272c12e = $this->env->getExtension("native_profiler");
        $__internal_fabe360cad8f7f34166535174025761dbed7086ff98068248e902f9b9272c12e->enter($__internal_fabe360cad8f7f34166535174025761dbed7086ff98068248e902f9b9272c12e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetSymfonyBundle/Tests/Controller/DefaultControllerTest.php"));

        // line 1
        echo "<?php

namespace ProjetSymfonyBundle\\Tests\\Controller;

use Symfony\\Bundle\\FrameworkBundle\\Test\\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        \$client = static::createClient();

        \$crawler = \$client->request('GET', '/');

        \$this->assertContains('Hello World', \$client->getResponse()->getContent());
    }
}
";
        
        $__internal_fabe360cad8f7f34166535174025761dbed7086ff98068248e902f9b9272c12e->leave($__internal_fabe360cad8f7f34166535174025761dbed7086ff98068248e902f9b9272c12e_prof);

    }

    public function getTemplateName()
    {
        return "ProjetSymfonyBundle/Tests/Controller/DefaultControllerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* */
/* namespace ProjetSymfonyBundle\Tests\Controller;*/
/* */
/* use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;*/
/* */
/* class DefaultControllerTest extends WebTestCase*/
/* {*/
/*     public function testIndex()*/
/*     {*/
/*         $client = static::createClient();*/
/* */
/*         $crawler = $client->request('GET', '/');*/
/* */
/*         $this->assertContains('Hello World', $client->getResponse()->getContent());*/
/*     }*/
/* }*/
/* */
