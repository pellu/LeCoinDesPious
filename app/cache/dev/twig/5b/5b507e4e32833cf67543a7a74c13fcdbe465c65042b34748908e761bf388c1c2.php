<?php

/* ProjetSymfonyBundle:Advert:index.html.twig */
class __TwigTemplate_6e48f7931f71032b1cf125c53bf90a2db37cb09fb880d9e57fd6b1f5e4613527 extends Twig_Template
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
        $__internal_ab38d5d9eea9c53c6d69afe5a808269c86b33d216bed84aaa78c50d64d86bced = $this->env->getExtension("native_profiler");
        $__internal_ab38d5d9eea9c53c6d69afe5a808269c86b33d216bed84aaa78c50d64d86bced->enter($__internal_ab38d5d9eea9c53c6d69afe5a808269c86b33d216bed84aaa78c50d64d86bced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetSymfonyBundle:Advert:index.html.twig"));

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
        
        $__internal_ab38d5d9eea9c53c6d69afe5a808269c86b33d216bed84aaa78c50d64d86bced->leave($__internal_ab38d5d9eea9c53c6d69afe5a808269c86b33d216bed84aaa78c50d64d86bced_prof);

    }

    public function getTemplateName()
    {
        return "ProjetSymfonyBundle:Advert:index.html.twig";
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
