<?php

/* :ProjetSymfonyBundle/Resources/views/Advert:index.html.twig */
class __TwigTemplate_e61f93e90494682faee0794acaa1b7c5da682251be540ac8298697ad947c3a73 extends Twig_Template
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
        $__internal_13cffcd84f9b01b8b04813baf5b117df0f572e550db4ff138fc588942f4fe5aa = $this->env->getExtension("native_profiler");
        $__internal_13cffcd84f9b01b8b04813baf5b117df0f572e550db4ff138fc588942f4fe5aa->enter($__internal_13cffcd84f9b01b8b04813baf5b117df0f572e550db4ff138fc588942f4fe5aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":ProjetSymfonyBundle/Resources/views/Advert:index.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
</head>
<body>
<h1>Hello ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " !</h1>

<p>
    Le Hello World est un grand classique en programmation.
    Il signifie énormément, car cela veut dire que vous avez
    réussi à exécuter le programme pour accomplir une tâche simple :
    afficher ce hello world !
</p>
</body>
</html>";
        
        $__internal_13cffcd84f9b01b8b04813baf5b117df0f572e550db4ff138fc588942f4fe5aa->leave($__internal_13cffcd84f9b01b8b04813baf5b117df0f572e550db4ff138fc588942f4fe5aa_prof);

    }

    public function getTemplateName()
    {
        return ":ProjetSymfonyBundle/Resources/views/Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 9,  22 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>Bienvenue sur ma première page avec OpenClassrooms !</title>*/
/* </head>*/
/* <body>*/
/* <h1>Hello {{ nom }} !</h1>*/
/* */
/* <p>*/
/*     Le Hello World est un grand classique en programmation.*/
/*     Il signifie énormément, car cela veut dire que vous avez*/
/*     réussi à exécuter le programme pour accomplir une tâche simple :*/
/*     afficher ce hello world !*/
/* </p>*/
/* </body>*/
/* </html>*/
