LeCoinDesPious

Bienvenue dans le coin des pious
Un Projet Développé par Pelluard, Boutet et Shan

Template de base html
========================

Pour voir le template de base suivez le lien

http://localhost/LeCoinDesPious/web/DesignKit/index.html

Gestion user
========================
Créer la base de donnée php app/console doctrine:database:create
Mettre à jour php app/console doctrine:schema:update --force

Ajouter un user : php app/console fos:user:create
Mettre un grade : php app/console fos:user:promote {mettre le nom de l'user}, puis ROLE_ADMIN ou ROLE_USER

Désactiver user : php app/console fos:user:desactive {mettre le nom de l'user}
Activer user : php app/console fos:user:activate {mettre le nom de l'user}

Changer mot de passe user : php app/console fos:user:change-password {mettre le nom de l'user}

Grade supérieur : php app/console fos:user:promote {mettre le nom de l'user}
Grade inférieur : php app/console fos:user:demote {mettre le nom de l'user}

Plus de commandes ici en remplaçant bin/console par app/console : http://symfony.com/doc/current/bundles/FOSUserBundle/command_line_tools.html

Modification du template
========================

Header/Menu/footer
--------------
Les trois fichiers se trouvent dans app/Ressources/views

Modifier les pages du template
--------------
Le fichier actuel login se trouvent dans src/UserBundle/Ressources/views/Security/login.html.twig

Contenu page login
--------------
Le contenu de la page login se trouve dans un fichier Twig de test app/Ressources/contenutest.html.twig

Modifier images/fonts/css/js
========================

Toute cette partie se trouve dans le dossier web

Commande Git + Console utiles
========================

~~ Après l'ajout d'un bundle :
php app/console cache:clear
rm -rf app/cache/*

~~ Ajouter des fichiers :
git add {url+nomdufichier ou "." pour tout|| enlever les accolades}
git commit -m "~commentaire facultatif~"
git push (pour envoyé le commit)

~~~suivre les path de symfony :
php app/console router:match /login

php app/console debug:router