### DASHBOARD EVENTS
- Créer un DashboardEventsController
-   ok
- Créer un view template dans le dossier Dashboard dashboard-events
-   ok

#####Lister les events
- Créer une route vers /dashboard/events qui appelle le controlleur et la vue créés ci-dessus en GET
-   ok
- Stocker les events avec la function findAll() dans une variable et la passer à la vue
    ok
- Dans la vue, faire une boucle pour récupérer tous les events dans une liste avec pour chacun un lien editer et supprimer
-   ok

#####Editer un event
- Créer une route vers /dashboard/events/[:id] en GET|POST
-   ok
- Créer un template dashboard-editEvent
-   ok
- Dans le controlleur, créer une méthode editEvent($id)
-   ok
- Créer une condition if(!empty($_POST))
- Récupérer dans celle-ci les infos de l'event avec la function find(id),
-   ok
- Les stocker dans une variable
-   ok
- Les envoyer à la vue comme précédemment
-   ok
- Terminer par un else (si la vue est appelée en GET)
- Y afficher la vue avec show()
-   ???

#####Supprimer un eventgit 
- Créer une route vers /dashboard/events/delete/[:id] en GET
- Créer dans le controller une méthode deleteEvent($id)
- Verifier que l'event existe avec la function find($id)
- Si OK, avec la méthode delete($id) on supprime l'event
- Rediriger vers la liste d'event