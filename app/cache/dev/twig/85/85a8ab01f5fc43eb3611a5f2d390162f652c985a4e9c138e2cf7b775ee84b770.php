<?php

/* ProjetSymfonyBundle/Tests/Controller/DefaultControllerTest.php */
class __TwigTemplate_185df921d73111f475bc211256bee6943cb526260927e5044f9c0ceeed61f805 extends Twig_Template
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
        $__internal_9b82d5a9e79faba4c19580e9da7ab53bbf0a574ee73a5e98fb173a67430ea6f6 = $this->env->getExtension("native_profiler");
        $__internal_9b82d5a9e79faba4c19580e9da7ab53bbf0a574ee73a5e98fb173a67430ea6f6->enter($__internal_9b82d5a9e79faba4c19580e9da7ab53bbf0a574ee73a5e98fb173a67430ea6f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetSymfonyBundle/Tests/Controller/DefaultControllerTest.php"));

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
        
        $__internal_9b82d5a9e79faba4c19580e9da7ab53bbf0a574ee73a5e98fb173a67430ea6f6->leave($__internal_9b82d5a9e79faba4c19580e9da7ab53bbf0a574ee73a5e98fb173a67430ea6f6_prof);

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
