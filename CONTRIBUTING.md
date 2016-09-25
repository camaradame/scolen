Guide du contributeur
=====================


- Forker le projet sur github
- Cloner le projet : 
```
git clone https://github.com/adashbob/scolen
```
- Installer les bundles externes: (installer d'abord composer et bower); 
```
cd scolen
composer install
bower install
```
- Créer une nouvelle branche: 
```
git branch branch-name
```
- Pusher sur cette branche
- Faire un pull request


## Configuration de l'application

- Copier le fichier app/config/parameters.yml.dist dans app/config/parameters.yml
- Renseigner les parametres de votre base de données
- Générer les tables
```
php bin/console doctrine:schema:create
```
- Ajouter les datafixures
```
 php bin/console h:d:f:l
```
- Pour avoir les différentes routes de l'application
```
php bin/console debug:router
```


