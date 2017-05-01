<?php
namespace Controller;

class WebsiteController extends \W\Controller\Controller
{
    protected $db;
    
    public function __construct()
    {
        $this->db = new \Model\WebsiteModel;
    }
    
    public function websiteData()
    {
        if (!empty($_POST))
        {
            if ($_FILES["website_logo"]["error"] !== 4)
            {
                $upload = new \Controller\UploadSingleton\UploadController("uploads/", ['png', 'gif', 'jpg', 'jpeg']);
                $file = $upload->uploadThis($_FILES);
                
                if($file[0]["file_upload_path"])
                {
                    $_POST["website_logo"] = $file[0]["file_upload_path"];
                } else {
                    $this->show('dashboard/tabs/settings', ["msg" => "An error occurred: not updated. Please try again."]);
                    return;
                }
            }
            
            $settingsToUpdate = $_POST;
            $req = $this->db->update($settingsToUpdate, 1);
            if ($req>0)
            {
                $res = $this->db->findAll();
                $this->redirectToRoute('dashboard_settings');
            } else {
                $this->show('dashboard/tabs/settings', ["msg" => "An error occurred: not updated. Please try again."]);
            }
            
        } else {
            $res = $this->db->findAll();
            $this->show ('dashboard/tabs/settings', ["settings" => $res[0]]);   
        }
    }
}

?>