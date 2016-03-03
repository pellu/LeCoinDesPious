<?php

/* ProjetSymfonyBundle/Controller/AdvertController.php */
class __TwigTemplate_dcd5b9467f1d432985b42f11ebbd7bb6d929d04e06cf028cbf0aa42e418166a5 extends Twig_Template
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

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace ProjetSymfonyBundle\\Controller;

use Symfony\\Bundle\\FrameworkBundle\\Controller\\Controller;
use Symfony\\Component\\HttpFoundation\\Response;

class AdvertController extends Controller
{
    // La route fait appel à OCPlatformBundle:Advert:view,
    // on doit donc définir la méthode viewAction.
    // On donne à cette méthode l'argument \$id, pour
    // correspondre au paramètre {id} de la route
    public function viewAction(\$id)
    {
        // \$id vaut 5 si l'on a appelé l'URL /platform/advert/5

        // Ici, on récupèrera depuis la base de données
        // l'annonce correspondant. à l'id \$id.
        // Puis on passera l'annonce à la vue pour
        // qu'elle puisse l'afficher

        return new Response(\"Affichage de l'annonce d'id : \".\$id);
    }

    // ... et la méthode indexAction que nous avons déjà créée

    // On récupère tous les paramètres en arguments de la méthode
    public function viewSlugAction(\$slug, \$year, \$format)
    {
        return new Response(
            \"On pourrait afficher l'annonce correspondant au
            slug '\".\$slug.\"', créée en \".\$year.\" et au format \".\$format.\".\"
        );
    }
}";
    }

    public function getTemplateName()
    {
        return "ProjetSymfonyBundle/Controller/AdvertController.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* */
/* // src/OC/PlatformBundle/Controller/AdvertController.php*/
/* */
/* namespace ProjetSymfonyBundle\Controller;*/
/* */
/* use Symfony\Bundle\FrameworkBundle\Controller\Controller;*/
/* use Symfony\Component\HttpFoundation\Response;*/
/* */
/* class AdvertController extends Controller*/
/* {*/
/*     // La route fait appel à OCPlatformBundle:Advert:view,*/
/*     // on doit donc définir la méthode viewAction.*/
/*     // On donne à cette méthode l'argument $id, pour*/
/*     // correspondre au paramètre {id} de la route*/
/*     public function viewAction($id)*/
/*     {*/
/*         // $id vaut 5 si l'on a appelé l'URL /platform/advert/5*/
/* */
/*         // Ici, on récupèrera depuis la base de données*/
/*         // l'annonce correspondant. à l'id $id.*/
/*         // Puis on passera l'annonce à la vue pour*/
/*         // qu'elle puisse l'afficher*/
/* */
/*         return new Response("Affichage de l'annonce d'id : ".$id);*/
/*     }*/
/* */
/*     // ... et la méthode indexAction que nous avons déjà créée*/
/* */
/*     // On récupère tous les paramètres en arguments de la méthode*/
/*     public function viewSlugAction($slug, $year, $format)*/
/*     {*/
/*         return new Response(*/
/*             "On pourrait afficher l'annonce correspondant au*/
/*             slug '".$slug."', créée en ".$year." et au format ".$format."."*/
/*         );*/
/*     }*/
/* }*/
