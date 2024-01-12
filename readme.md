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
<img width="1153" alt="Capture d’écran 2024-01-12 à 15 02 22" src="https://github.com/dani03/the_microservices/assets/25210422/0780da6e-658a-47f3-86d8-49f6d872a9bd">

### dockerhub 
push de 2 images sur le docker hub notament l'image du l'outil artisan de laravel 
![Capture d’écran 2023-10-19 à 20 42 37](https://github.com/dani03/the_microservices/assets/25210422/97b94ffd-b90e-4000-b5cd-098cb190a23c)

les images de mes containers on été builder sans erreur et arrivent a communiquer entre eux

![Capture d’écran 2023-10-19 à 21 25 12](https://github.com/dani03/the_microservices/assets/25210422/931e4c5e-b8d2-4175-86e0-7886dd51f731)
![Capture d’écran 2023-10-19 à 21 20 08](https://github.com/dani03/the_microservices/assets/25210422/f78b87bb-ed0a-4ca4-b192-7738576cd6e3)

la base de données est bien alimentée 
![Capture d’écran 2023-10-19 à 20 57 42](https://github.com/dani03/the_microservices/assets/25210422/75c0beb3-c01c-4136-9737-5fd38a18ff61)
![Capture d’écran 2023-10-19 à 20 57 17](https://github.com/dani03/the_microservices/assets/25210422/e30510b8-9b77-4801-81d9-61cf565d9b9b)
