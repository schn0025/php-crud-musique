# création application Web musique

## Auteurs
Schneider Arthur 

## Installation / Configuration
Utilisation de PHPStorm 8.2

## Serveur Web local
Utiliser la command dans le répertoire racine :
php -d display_errors -S localhost:8000 -t public/
ou: composer start:linux

## Style de codage
php vendor/bin/php-cs-fixer fix --dry-run  
permet de voir si un fichier est valide ou non

php vendor/bin/php-cs-fixer fix --dry-run --diff
permet de constater la correction qui serait faite

php vendor/bin/php-cs-fixer fix
permet de corriger l'erreur

## tests
  test:cs permet de verifier s'il y a des erreurs dans le code
  fix:cs permet de fixer les erreurs dans le code
  test:crud permet de lancer les test de crud
  test:codecept permet de lancer tous les tests de Codeception
  test permet de lancer "test:cs" et "test:codecept"