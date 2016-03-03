<?php

/* AppBundle/Tests/Controller/DefaultControllerTest.php */
class __TwigTemplate_88ad374ac22fcea3c69b7c714214e053fe9a80125ca1a4255980da9667f9690b extends Twig_Template
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
        $__internal_706a427cc6d66af5960e59ec19b51b636eac6a61f5442186f2efa2f657707deb = $this->env->getExtension("native_profiler");
        $__internal_706a427cc6d66af5960e59ec19b51b636eac6a61f5442186f2efa2f657707deb->enter($__internal_706a427cc6d66af5960e59ec19b51b636eac6a61f5442186f2efa2f657707deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle/Tests/Controller/DefaultControllerTest.php"));

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
        
        $__internal_706a427cc6d66af5960e59ec19b51b636eac6a61f5442186f2efa2f657707deb->leave($__internal_706a427cc6d66af5960e59ec19b51b636eac6a61f5442186f2efa2f657707deb_prof);

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
