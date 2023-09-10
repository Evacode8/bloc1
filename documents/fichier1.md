# Question 2:

| Caractéristiques                | Methode GET                                                              | Methode POST                                                 |
|:-------------------------------:| ------------------------------------------------------------------------ | ------------------------------------------------------------ |
| Type de requête                 | Demande de données au serveur                                            | Soumission des données au serveur                            |
| Données dans l'url              | Oui, Les paramètres sont inclus dans l’URL                               | Non, les paramètres, sont inclus dans le corps de la requête |
| Visibilité des données          | Visibile  pour l’utilisateur dans le champs d’adresse (URL)              | Invisible pour l’utilisateur                                 |
| Sécurité des données            | Non. Données sensibles moins sécurisées, visibles dans l’URL             | Oui, données sécurisées cachées dans le corps de la requête  |
| Mise en cache par le navigateur | Oui les réponses peuvent être mises en cache (stockées sans chiffrement) | Non, réponses pas mises en cache                             |
| Longueur des données            | Limitée par la longueur maximale de l’url (env 2000 caractères)          | Illimitées                                                   |
