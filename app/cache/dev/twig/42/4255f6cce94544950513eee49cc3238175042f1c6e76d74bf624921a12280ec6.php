<?php

/* AppBundle/Tests/Controller/DefaultControllerTest.php */
class __TwigTemplate_0a2a408b689e78d5087345724fc57c8943167b73db149d07b75d12a950cd3090 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "AppBundle/Tests/Controller/DefaultControllerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
