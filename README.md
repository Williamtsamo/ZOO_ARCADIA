# Creation site web du Zoo Arcadia


## Table des matières

- [À propos](#à-propos)
- [Installation](#installation)
- [Utilisation](#utilisation)
- [Tests](#tests)
- [Contribuer](#contribuer)
- [Crédits](#crédits)
- [Licence](#licence)

## À propos

Arcadia est un zoo situé en France près de la forêt de Brocéliande, en bretagne depuis 1960. 
Ils possèdent tout un panel d’animaux, réparti par habitat (savane, jungle, marais) et font 
extrêmement attention à leurs santés. Chaque jour, plusieurs vétérinaires viennent afin 
d’effectuer les contrôles sur chaque animal avant l’ouverture du zoo afin de s’assurer que tout 
se passe bien, de même, toute la nourriture donnée est calculée afin d’avoir le bon grammage 
(le bon grammage est précisé dans le rapport du vétérinaire).
Le zoo, se porte très bien financièrement, les animaux sont heureux. Cela fait la fierté de son 
directeur, José, qui a de grandes ambitions.
A ce jour, l’informatique et lui ça fait deux, mais, il a envie d’une application web qui 
permettrai aux visiteurs de visualiser les animaux, leurs états et visualiser les services ainsi que 
les horaires du zoo

## Installation

Instructions pour installer le projet. Par exemple :

1. **Cloner le dépôt :**

    ```bash
    git clone https://github.com/Williamtsamo/ZOO_ARCADIA.git
    ```

2. **Aller dans le répertoire du projet :**

    ```bash
    cd zoo_arcadia
    ```

3. **Configurer la base de données :**

    - Créer une base de données MySQL.
    - Importer le fichier `arcadia.sql`
    - pour créer les tables nécessaires.

4. **Configurer les paramètres de la base de données :**

    Modifier le fichier `config.php` avec vos informations de base de données :

    ```php
    <?php
    define('DB_NAME', 'arcadia');
    define('DB_HOST', 'localhost:3307');
   define('DB_USER', 'root');
   define('DB_PASSWORD', '');
    ?>
    ```

5. **Installer les dépendances avec Composer (si nécessaire) :**

    ```bash
    composer install
    ```

## Utilisation

Instructions et exemples sur comment utiliser votre projet après l'installation. Par exemple :

1. **Démarrer le serveur web local :**

    Si vous utilisez PHP intégré, lancez :

    ```bash
    php -S localhost:8000
    ```




    ```

## Contribuer



## Crédits

Mentionnez les personnes ou les projets qui vous ont aidé dans le développement de ce projet.

## Licence

Indiquer la licence sous laquelle le projet est distribué. Par exemple :

