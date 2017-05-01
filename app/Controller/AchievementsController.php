<?php
namespace Controller;

class AchievementsController extends \W\Controller\Controller
{
    protected $db;

    public function __construct()
    {
        $this->db = new \Model\AchievementsModel;
    }

    public function listAchievements()
    {
        $title = 'Application fields';
        $res = $this->db->findAll();
        $publications = $this->listPublications();
        $this->show ('company/achievements', ["achievements" => $res, "publications" => $publications, "title" => $title]);

    }

    public function singleAchievement($id)
    {
        if(!empty($_POST))
        {
            $res = $this->db -> find($id);
            $this->show('company/achievements', ["achievements" => $res]);
        }
        else
        {
            $this->show('company/achievements');
        }
    }

    private function listPublications()
    {
        $publicationTab = new \Model\PublicationsModel;
        return $publicationTab->findAll();


    }
}




?>
