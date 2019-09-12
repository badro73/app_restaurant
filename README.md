dev test project 
===============

Projet a été realiser avec  **Symfony 4** 

Cette micro app permet de créer/lister des restaurant et les horaires de chaque restaurant

Une fois le projet installé, les differentes entités sont accessibles par les urls (routes) suivantes (ip/host et port à changer suivant votre configuration)

pour lancer le servuer excuter cette commande dans le terminal 

php bin/console server:run

acces aux différents page :

- http://127.0.0.1:8000/restaurant // afficher tout les restaurant
- http://127.0.0.1:8000/restaurant/1 // affichier les horaire d'un restaurant
- http://127.0.0.1:8000/horaire/1    // ajouter les horaire à un restaurant


j'ai ajouté quelques fonctionalités pour la micro app

le bootstrap (pour le formulaire/tableau)
fonction JS pour chercher sur un restauant via son nom (vous pouvez la tester ) 

##### Api/Json(BONUS) 
return  les restauants et les horaires d'un restaurant en format Json
http://127.0.0.1:8000/restaurant/api return tout les restauant en format Json
http://127.0.0.1:8000/restaurant/api/1  return les horaire d'un restauant en format Json

NB : vous trouvez aussi la base de données pour le projet