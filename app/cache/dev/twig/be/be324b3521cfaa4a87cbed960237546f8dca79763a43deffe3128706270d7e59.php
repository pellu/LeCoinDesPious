<?php

/* @ProjetSymfony/Advert/index.html.twig */
class __TwigTemplate_fba5ebfb7a1a48124990d0126b51522ef7d034be13a1d661b508fd49ca4dc527 extends Twig_Template
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
        $__internal_f1d9c75d2cb2200f978bbdacf10f6c06a8a3da5d88340e9d22e6468952d58510 = $this->env->getExtension("native_profiler");
        $__internal_f1d9c75d2cb2200f978bbdacf10f6c06a8a3da5d88340e9d22e6468952d58510->enter($__internal_f1d9c75d2cb2200f978bbdacf10f6c06a8a3da5d88340e9d22e6468952d58510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ProjetSymfony/Advert/index.html.twig"));

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
        
        $__internal_f1d9c75d2cb2200f978bbdacf10f6c06a8a3da5d88340e9d22e6468952d58510->leave($__internal_f1d9c75d2cb2200f978bbdacf10f6c06a8a3da5d88340e9d22e6468952d58510_prof);

    }

    public function getTemplateName()
    {
        return "@ProjetSymfony/Advert/index.html.twig";
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
