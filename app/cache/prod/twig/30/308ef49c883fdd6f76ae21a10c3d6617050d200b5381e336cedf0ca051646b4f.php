<?php

/* ProjetSymfonyBundle/Resources/views/Advert/index.html.twig */
class __TwigTemplate_376030b034872cb700850e33cb08f452c5437fc3f9202aa75728884ed7f4b1c9 extends Twig_Template
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
        $__internal_dc89055437683b2b1037386b351b58998a1ffd7767fb65e9882293d74d15b352 = $this->env->getExtension("native_profiler");
        $__internal_dc89055437683b2b1037386b351b58998a1ffd7767fb65e9882293d74d15b352->enter($__internal_dc89055437683b2b1037386b351b58998a1ffd7767fb65e9882293d74d15b352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetSymfonyBundle/Resources/views/Advert/index.html.twig"));

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
        
        $__internal_dc89055437683b2b1037386b351b58998a1ffd7767fb65e9882293d74d15b352->leave($__internal_dc89055437683b2b1037386b351b58998a1ffd7767fb65e9882293d74d15b352_prof);

    }

    public function getTemplateName()
    {
        return "ProjetSymfonyBundle/Resources/views/Advert/index.html.twig";
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
