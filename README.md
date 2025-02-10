# Nom du Projet

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

3. **Construire le projet :**
    ```bash
    php bin/console cache:clear
    ```


4. **Charger les fixtures pour la base de données :**
    ```bash
    php bin/console make:migration
    php bin/console doctrine:migrations:migrate
    php bin/console doctrine:fixtures:load
    ```

5. **Lancer l'application :**
    ```bash
    symfony server:start
    ```

## Utilisation
Ouvrez votre navigateur web et naviguez vers `http://localhost:8000/api` pour accéder à l'application.
