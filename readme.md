# L'architecture du projet

Dans ce projet j'ai choisi de travailler avec laravel  qui est un framework PHP pour la 
partie backend de mon apllication et vue js pour la partie frontend.

## Service PHP
Ma machine va contenir le code source de mon application laravel, ce code source sera 
expose a un container (service) dans lequel j'ai installé PHP.

## Service Nginx

Mon container nginx qui est mon server web ici, sera chargé de récupérer les requete envoyer par un service tier, pour l'envoyer au container PHP.

## Service de BDD

pour ma base de données j'ai utilisé mysql parce qu'il est le plus souvent couplé avec laravel et de ce fait plus simple a mettre en place 

## le service Vue


le service vue ici represente la partie frontend de mon application qui est chargé d'envoyer des requetes emisent par l'utilisateur à mon server


### les services utilitaires
j'ai separé les outils comme COMPOSER ou encore NPM dans des containers qui sont des gestionnaires de dependances de PHP et Javascript afin de pouvoir lancer les commandes plus facilement, ainsi que l'outil Artisan de laravel pour tout ce qui est execution de mande en ligne

## Image 
![Capture d’écran 2023-10-18 à 11 29 20](https://github.com/dani03/the_microservices/assets/25210422/93cd8286-26a7-4ede-99b8-3442f59ea63d)

