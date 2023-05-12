# création application Web musique

## Auteurs
Schneider Arthur 

## Installation / Configuration
utilisation de PHPStorme 8.2

## Serveur Web local
utiliser la comande dans le répertoire racine :
php -d display_errors -S localhost:8000 -t public/

## Style de codage
php vendor/bin/php-cs-fixer fix --dry-run  
permet de voir ci un ficher est valide ou non

php vendor/bin/php-cs-fixer fix --dry-run --diff
permet de constater la correction qui serait faite

php vendor/bin/php-cs-fixer fix
permet de corriger l'erreur