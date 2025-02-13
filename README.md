# Api

## Description
Ce projet est une application web construite en utilisant PHP et JavaScript. Il inclut l'authentification des utilisateurs, l'inscription et d'autres fonctionnalités. Le projet est stylisé avec du CSS pour fournir une interface moderne et visuellement attrayante.

## Auteurs
- Léo GINER
- Maxime TAMARIN
- Clément MARIE

## Installation

### Prérequis
- PHP (version 7.4 ou supérieure)
- Composer
- Git

### Étapes

1. **Cloner le dépôt de l'application :**
    ```bash
    git clone https://github.com/MARIE-Clement-2225058b/api.git
    cd api
    ```

2. **Installer les dépendances :**
    ```bash
    composer install
    ```

3. **Télécharger le fichier `cacert.pem` (pour éviter les erreurs SSL) :**
   - Rendez-vous sur le site officiel de cURL pour télécharger le fichier `cacert.pem` :  
     [https://curl.se/ca/cacert.pem](https://curl.se/ca/cacert.pem)
   - Enregistrez le fichier
   - Ouvrez votre fichier `php.ini` et ajoutez ou modifiez cette ligne :
     ```ini
     curl.cainfo = "C:\chemin\vers\votre\fichier\cacert.pem"
     ```

4. **Construire le projet :**
    ```bash
    php bin/console cache:clear
    ```

5. **Charger les fixtures pour la base de données :**
    ```bash
    php bin/console doctrine:database:create
    php bin/console make:migration
    php bin/console doctrine:migrations:migrate
    php bin/console doctrine:fixtures:load
    ```

6. **Lancer l'application :**
    ```bash
    symfony server:start
    ```

## Utilisation
Ouvrez votre navigateur web et naviguez vers `http://localhost:8000/api` pour accéder à l'application.
