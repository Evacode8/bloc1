# Questions 1:

1) Différences entre méthode https GET et POST 

### La methode Get (obtenir/avoir) :

> Est une requête pour obtenir des informations/ des données adressées directement au serveur. 
> 
> Exemple: Requête pour obtenir un fichier html au serveur web utilisé pour affichier un site web (html) 

Récupérer des donées publiques et faire des recherches:

     Inconvénients

> 1. Les requêtes GET entrainenent des problèmes de securité (car données accessible par d'autres utilisateurs ou logiciels mailveillants) 
> 
> (Source : digital IONOS; developper.mozilla)
> 
> 2. Capacité limitée: l'URL peut contenir qu'un certains nb de caractères (env 2000)

Avec cette methode, les données  transférées sont directement dans L'URL

### La methode POST (Poster)

Permet de soumettre des données au serveur afin d'être traitées, le type de corps est indiqué par l'en-tête "content-type"

Les paramètres sont inclus dans le corps de la requête HTTP, ce qui les rend invisibles dans l'URL.

Envoie des données sensibles (Formulaire d'inscription PhP) avec une action effecutuer qui modifie l'état du serveur (enregistrement des donées dans une BDD)

Les requêtes posts ne sont pas mis en cache et ne sont pas visibles dans la barre d'adresse du navigateur

Avantages: 

  1. Confidentialité et flexibilité 

Inconvenients

> 
> 
> 1) Si une page web a une maj, les données du formulaire doivent être de nouveau soumises 
>    
> 
> 2) les données ne peuvent pas être sauvegardées sous forme de marque-page avec l'URL.
