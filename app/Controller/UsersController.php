<?php

namespace Controller;

use \W\Controller\Controller;

class UsersController extends Controller
{
    
    protected $db;
    
    public function __construct ()
    {
        $this->db = new \Model\DashboardModel; // Connect to users table
    }
    
    public function usersList ()
    {
        $users = $this->db->findAll(); // On va chercher tous les users
        $this->show('dashboard/tabs/users', ["users" => $users]); // On passe les informations de tous les users à la vue
    }
    
    public function usersEdit ($id)
    {
        if(!empty($_POST))
        {
            /* Si on met à jour les informations via le formulaire */
            $user = $_POST; // On stocke les données soumises du formulaire
            $req = $this->db->update($user, $id); // On met à jour le user avec les données du formulaire => renvoie les données mises à jour si OK
            if($req>0)
            {
                //success
                $this->redirectToRoute('dashboard_users_list'); // On redirige vers la liste des users
            } else {
                //error
                $this->show('dashboard/tabs/users-edit', ["msg" => "User not updated. Please check your informations and try again."]); // On affiche la vue du formulaire Edit avec un message d'erreur
            }
            
        } else {
            /* Si on affiche le formulaire avec les informations du user pour le modifier */
            $user = $this->db->find($id); // On va chercher les infos du user avec l'id
            $this->show('dashboard/tabs/users-edit', ["user" => $user]); // On passe les infos du user à la vue
        }
    }
    
    public function usersDelete ($id)
    {
        if($this->db->find($id)) // Si le user existe
        {
            $this->db->delete($id); // On delete le user
            $this->redirectToRoute('dashboard_users_list');
        } else {
            $this->show('dashboard/tabs/users-delete', ["msg" => "User not found."]);
        }
    }
    
    public function usersAdd ()
    {
        if(!empty($_POST))
        {
            /* Si on créé un nouveau user via le formulaire */
            if($_POST["password"] == $_POST["confirm"]) // Si les deux passwords du formulaire sont identiques
            {
                $auth = new \W\Security\AuthentificationModel; // On créé une instance pour hasher le password
                $pw = $auth->hashPassword($_POST["password"]); // On hash le password
                
                $newUser = [
                    "first_name" => $_POST["first_name"],
                    "last_name" => $_POST["last_name"],
                    "email" => $_POST["email"],
                    "password" => $pw, // On passe le mot de passe crypté
                    "role" => $_POST["role"]
                ];
                
                $req = $this->db->insert($newUser); // On ajoute le nouveau user à la table users
                if($req>0)
                {
                    $this->redirectToRoute('dashboard_users_list'); // On redirige vers la liste des users
                } else {
                    $this->show('dashboard/tabs/users-add', ["msg" => "Error occurred. User not added."]); // On renvoie une erreur à la vue
                }   
            } else {
                $this->show('dashboard/tabs/users-add', ["msg" => "Password fields are not correct."]); // On renvoie une erreur à la vue
            }
        } else {
            /* Si on affiche le formulaire pour ajouter un nouveau user */
            $this->show('dashboard/tabs/users-add');
        }
    }
    
    
}