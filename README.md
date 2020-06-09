#Website Projet - D

... EXPLICATION DU PROJET A FAIRE ...

SOMMAIRE
----------
1. [Introduction](#introduction)
2. [Installation en local](#installation-en-local)
3. [Commandes de bases avec Lando](#commandes-de-bases-avec-lando)
4. [Commandes de bases avec Lando + Laravel](#commandes-de-bases-avec-lando--laravel)


INTRODUCTION
------------

💾 __Technologies__ :

- Framework Laravel ^7
- Framework Vue.js ^2
- Framework Bootstrap ^4
- API REST
- Laravel Passport
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
$ lando composer install
$ lando npm install
$ lando dump-autoload
$ lando artisan migrate:fresh --seed
$ lando php artisan passport:install
$ lando php artisan passport:keys
$ cp .env.example .env

Fournir les clés sur le fichier d\'environnement

$ lando build
$ lando artisan key:generate
$ lando artisan migrate
```

```bash
$ sudo cp -r ~/.lando/certs/lndo.site.pem /usr/local/share/ca-certificates/lndo.site.pem
$ sudo update-ca-certificates
```

Le site est à présent fonctionnels 💪


COMMANDES DE BASES AVEC LANDO
------------

⚠️ Il faut toujours se situer dans le répertoire du projet, ici **~/Developpement/clients/**

| Commande                | Description |
| -------------- | ------------- |
| lando composer          | Exécuter des commandes composer |
| lando config            | Afficher la configuration lando |
| lando destroy           | Détruit l'application (Pas les données) |
| lando info              | Informations propres à l'application |
| lando logs              | Afficher les logs de l'application |
| lando npm               | Exécuter des commandes npm
| lando php               | Exécuter des commandes php |
| lando restart           | Redémarrer l'application |
| lando ssh               | Accès SSH à l'application principale |
| lando start             | Démarrer l'application |
| lando stop              | Arrêter l'application |
| lando version           | Affiche la version de lando |


COMMANDES DE BASES AVEC LANDO + LARAVEL
------------

| Commande                | Description |
| -------------- | ------------- |
| lando artisan | Afficher la liste des commandes d'artisan |
| lando npm run watch | Lance la compilation du Sass et du JS en direct |
| lando phpunit | Lancer les tests unitaires
```
