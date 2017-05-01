<?php

namespace Controller;

use \W\Controller\Controller;

class EventsController extends Controller
{
    protected $db;
    
    public function __construct()
    {
        $this->db = new \Model\EventsModel;
    }
    
    public function eventsList()
    {
        $res = $this->db->findAll();
        $this->show ('dashboard/tabs/events', ["events" => $res]);
    }
    
    public function eventEdit($id)
    {
        if(!empty($_POST))
        {
            $event = $this->db->find($id);
            $this->show('dashboard/tabs/events-edit', ["event" => $event]);
        }
        else
        {
            $event = $this->db->find($id);
            $this->show('dashboard/tabs/events-edit', ["event" => $event]);
        }
    }
    
    public function eventDelete ($id)
    {
        if($this->db->find($id)) // Si l'event existe
        {
            $this->db->delete($id); // On delete l'event
            $this->redirectToRoute('dashboard_events_list');
        } else {
            $this->show('dashboard/tabs/events-delete', ["msg" => "Event not found."]);
        }
    }
    
    public function eventAdd ()
    {
        if(!empty($_POST))
        {
            $event = $_POST;
            $req = $this->db->insert($event);
            if ($req>0)
            {
               $this->redirectToRoute('dashboard_events_list'); 
            }
            else
            {
                $this->show('dashboard/tabs/events-add', ['msg' => 'No event to add']);
            }
            
        }
        else
        {
            $this->show('dashboard/tabs/events-add');
        }
            
    }
}

?>