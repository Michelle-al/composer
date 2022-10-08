# PHP POO

## Composer
Composer est un outil permettant de gérer les dépendances en PHP, d'installer et mettre à jour les bibliothèques utilisées pour un projet.

Equivalent en Node : npm
Equivalent en Python : pip
Equivalent en Ruby : bundler
Equivalent en Java : gradle

* A quoi sert le fichier composer.json ?
C'est un fichier JSON placé à la racine du dossier du projet PHP. Il décrit les dépendances présentes dans le projet.

* A quoi servent les caractères ^ et * du fichier .json ?
- `*` : ex (2.0.*) permet d'obtenir les versions supérieures à 2.0.0 et inférieures à 2.1. 
- `^` : ex (^2.4.5) permet d'obtenir toutes les versions supérieures et inférieures à 3.0.

* A quoi sert le fichier "composer.lock" ? Quelle est la différence avec le fichier ".json" ?
- `composer.lock` permet de garder verrouiller les versions des dépendances utilisées dans un projet. Il contient plus de code que le fichier ".json".
