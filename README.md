#Website Projet - D

SOMMAIRE
----------
1. [Introduction](#introduction)
2. [Installation en local](#installation-en-local)
3. [Commandes de bases avec Lando](#commandes-de-bases-avec-lando)
4. [Commandes de bases avec Lando + Laravel](#commandes-de-bases-avec-lando--laravel)
5. [Deploiement to Heroku](#deploiement)

INTRODUCTION
------------

💾 __Technologies__ :

- Framework Laravel ^8
- Framework Vue.js ^2
- Framework Bootstrap ^4
- API REST
- Laravel Nova
- Lando
- Php 7.3
- Nginx 1.14
- Mariadb 10.3
- Redis 5
- Phpmyadmin 4.7
- Mailhog 1.0.0

🔗 __Liens utiles pour Lando__ :

- https://projetd.lndo.site/
- https://pma-projetd.lndo.site/
- https://mailhog-projetd.lndo.site


INSTALLATION EN LOCAL
------------


Ce dépôt se déploie facilement en local par l'utilisation de Docker.


##### 0) Pré-requis

Mettre à jour votre distribution **Linux**.

```bash
$ sudo apt-get update
$ sudo apt-get upgrade
```

##### 1) Installation de Docker CE
##### 2) Installation de Lando
##### 3) Mise en place du projet
clonez le projet

```bash
$ git clone git@github.com:bilel99/proj-d.git
```

```bash
$ cd ./clients
$ lando start

$ cp .env.example .env
Fournir les clés sur le fichier d\'environnement

$ lando composer install
$ lando npm install
$ lando dump-autoload
$ lando artisan migrate:fresh --seed
$ lando artisan key:generate
$ lando artisan migrate
$ lando artisan storage:link
$ lando npm run dev | watch
$ lando build
```

Le site est à présent fonctionnels 💪


COMMANDES DE BASES AVEC LANDO
------------

⚠️ Il faut toujours se situer dans le répertoire du projet, ici **~/Developpement/clients/**

| Commande                | Description |
| ------------------------ | --------------------------------------- |
| lando composer           | Exécuter des commandes composer         |
| lando config             | Afficher la configuration lando         |
| lando destroy            | Détruit l'application (Pas les données) |
| lando info               | Informations propres à l'application    |
| lando logs               | Afficher les logs de l'application      |
| lando npm                | Exécuter des commandes npm              |
| lando php                | Exécuter des commandes php              |
| lando restart            | Redémarrer l'application                |
| lando ssh                | Accès SSH à l'application principale    |
| lando start              | Démarrer l'application                  |
| lando stop               | Arrêter l'application                   |
| lando version            | Affiche la version de lando             |
| lando db-import file.sql | Import du backup sur la base de donnée  |


Deploiement to Heroku (PRODUCTION)
------------
- Procfile fichier JSON for Heroku

```bash
web: vendor/bin/heroku-php-apache2 public/
```

- ajout en variable d'environnement des information pour Laravel Nova

```bash
{
    "http-basic": {
        "nova.laravel.com": {
            "username": "XXX",
            "password": "YYY"
        }
    }
}
```

- Ajout de toutes les variables d'environnement du projet sous Heroku
