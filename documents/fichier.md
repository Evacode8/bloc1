

Questions 



1) Diff�rences entre m�thode https GET et POST 



La methode Get (obtenir/avoir) : 
> est une requ�te pour obtenir des informations/ des donn�es adress�e directement au serveur
Exemple: Requ�te pour obtenir un fichier html au serveur web

> utilis�e pour affichier un site web (html) 
> r�cup�rer des dobb�es publiques et faire des recherches Inconv�nients
 1) les requ�tes GET entrainenent des probl�mes de securit� (car donn�es accessible � d'autres utilisateurs ou logiciels mailveillants) 
(Source : digital IONOS; developper.mozilla)

2) capacit� limit�e: l'URL peut contenir qu'un certains nb de caract�res (env 2000)
Avec cette methode, les donn�es � transf�rer sont directement dans L'URL

La methode POST (Poster)

Permet de soumettre des donn�es au serveur afin d'�tre trait�es, le type de corps est indiqu� par l'en-t�te "content-type"
Les param�tres sont inclus dans le corps de la requ�te HTTP, ce qui les rend invisibles dans l'URL.

Envoie des donn�es sensibles (Formulaire d'inscription PhP) avec une action � effecutuer qui modifie l'�tat du serveur (enregistrement des don�es dans une BDD)

Les requ�tes posts ne sont pas mis en cache et ne sont pas visibles dans la barre d'adresse du navigateur

avantages: 
> Confidentialit� et flexibilit�  
inconvenient:
> si une page web a une maj, les donn�es du formulaire doivent �tre de nouveau soumises 
> les donn�es ne peuvent pas �tre sauvegard�es sous forme de marque-page avec l'URL.
