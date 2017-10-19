tandemLinguistique
==================

Pré-requis

    composer ==> https://getcomposer.org/doc/00-intro.md

Use
    Symfony 2.8

Initialisation du projet

    SSH git@github.com:mariellelau/tandemLinguistique.git
    HTTPS https://github.com/mariellelau/tandemLinguistique.git
    cd tandemLinguistique
    composer install
    php app/console doctrine:database:create
    php app/console doctrine:schema:update --force
    php app/console asset:install