<?php
namespace Controller;

class DashboardController extends \W\Controller\Controller
{
    public function dashboard () {
        $this->allowTo('admin');
        
        $eventsTab = new \Model\EventsModel;
        $productsTab = new \Model\ProductsModel;
        $usersTab = new \Model\DashboardModel;
        
        $events = $eventsTab->findAll();
        $products = $productsTab->findAll();
        $users = $usersTab->findAll();
        
        $stats = [
            "events" => count($events),
            "products" => count($products),
            "users" => count($users)
        ];
        
        $this->show ("dashboard/dashboard", ["stats" => $stats]);
    }
    
    public function login(){
        $this->show ("dashboard/login");
    }  
    
    public function lostPassword(){
        $this->show ("dashboard/lostPassword");
    }   
    public function newAccount(){
        $this->show ("dashboard/newAccount");
    }   
}

?>