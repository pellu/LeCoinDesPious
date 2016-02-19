<?php

/* ProjetSymfonyBundle/Resources/views/Advert/index.html.twig */
class __TwigTemplate_7e7509b16cd9dd7012e6e5eff09adf6cc5283a4671c7a14b7b0f329a23182bf7 extends Twig_Template
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
        $__internal_14ac5ff1a0900acc51a7ae30dda370ccb3ab23ca796b004d5706bd4de43b9ef4 = $this->env->getExtension("native_profiler");
        $__internal_14ac5ff1a0900acc51a7ae30dda370ccb3ab23ca796b004d5706bd4de43b9ef4->enter($__internal_14ac5ff1a0900acc51a7ae30dda370ccb3ab23ca796b004d5706bd4de43b9ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ProjetSymfonyBundle/Resources/views/Advert/index.html.twig"));

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
        
        $__internal_14ac5ff1a0900acc51a7ae30dda370ccb3ab23ca796b004d5706bd4de43b9ef4->leave($__internal_14ac5ff1a0900acc51a7ae30dda370ccb3ab23ca796b004d5706bd4de43b9ef4_prof);

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
