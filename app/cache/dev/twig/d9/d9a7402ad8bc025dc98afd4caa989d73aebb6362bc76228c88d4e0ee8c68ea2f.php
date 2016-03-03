<?php

/* ProjetSymfonyBundle/Tests/Controller/DefaultControllerTest.php */
class __TwigTemplate_488ca8e05e838bbd62373badcdf565acc30afa30cc0ea450830ddc6d45e19fdd extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "ProjetSymfonyBundle/Tests/Controller/DefaultControllerTest.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
