# UPLOADS with W Framework
Singleton permettant de mettre en place un système d'upload dans le framework W de Webforce 3.


## USAGE
- Initialiser une instance de l'objet Upload
- La fonction uploadThis() sert à uploader un tableau de fichiers. Elle retourne un tableau des chemins si l'upload a bien été effectué, ou un tableau d'erreurs dans l'autre cas
- La fonction getJSON() permet de recupérer les chemins et les erreurs en JSON. Elle ne s'utilise qu'après avoir uploadé des fichiers


## EXEMPLE D'UTILISATION
> Upload de fichiers image

    $upload = new \Controller\UploadSingleton\UploadController("uploads/", ['png', 'gif', 'jpg', 'jpeg']);
            
    $files = $upload->uploadThis($_FILES);
    $json = $upload->getJSON();
            
    debug($files);
    debug($json);
    
    
## AUTEUR
Leonardo BALLAND - balland.leonardo@outlook.fr
[Website](https://leonardoballand.com)