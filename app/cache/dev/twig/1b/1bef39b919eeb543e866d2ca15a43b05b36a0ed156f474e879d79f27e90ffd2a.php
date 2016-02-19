<?php

/* AppBundle/Tests/Controller/DefaultControllerTest.php */
class __TwigTemplate_5106f47433689585dfcfdcb194e1678ee7a24864e4431e8845e8836f903c8068 extends Twig_Template
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
        $__internal_0f34aa28a982baa20bc4c211fb3537973596ed0a590836ecbab345da6414069b = $this->env->getExtension("native_profiler");
        $__internal_0f34aa28a982baa20bc4c211fb3537973596ed0a590836ecbab345da6414069b->enter($__internal_0f34aa28a982baa20bc4c211fb3537973596ed0a590836ecbab345da6414069b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle/Tests/Controller/DefaultControllerTest.php"));

        // line 1
        echo "<?php

namespace AppBundle\\Tests\\Controller;

use Symfony\\Bundle\\FrameworkBundle\\Test\\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        \$client = static::createClient();

        \$crawler = \$client->request('GET', '/');

        \$this->assertEquals(200, \$client->getResponse()->getStatusCode());
        \$this->assertContains('Welcome to Symfony', \$crawler->filter('#container h1')->text());
    }
}
";
        
        $__internal_0f34aa28a982baa20bc4c211fb3537973596ed0a590836ecbab345da6414069b->leave($__internal_0f34aa28a982baa20bc4c211fb3537973596ed0a590836ecbab345da6414069b_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle/Tests/Controller/DefaultControllerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* */
/* namespace AppBundle\Tests\Controller;*/
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
/*         $this->assertEquals(200, $client->getResponse()->getStatusCode());*/
/*         $this->assertContains('Welcome to Symfony', $crawler->filter('#container h1')->text());*/
/*     }*/
/* }*/
/* */
