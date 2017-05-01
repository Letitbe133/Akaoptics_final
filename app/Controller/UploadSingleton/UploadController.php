<?php

namespace Controller\UploadSingleton;

use \W\Controller\Controller;

class UploadController extends Controller
{
    protected $dir;
    protected $errors;
    protected $uploadPaths;
    protected $types;
    protected $inputNames;
    
    private $files;
    private $fileStatus;
    private $uploadStatus;
    
    /* 
    *   @Param => (String) Upload directory
    *   @Param => (Array) upload files types
    */
    public function __construct ($uploadDir, $uploadTypes)
    {
        $this->dir = $uploadDir;
        $this->types = $uploadTypes;
        $this->fileStatus = false;
        $this->uploadStatus = false;
    }
    
    /* 
    *   METHOD TO CALL FROM CONTROLLER
    *   @Param => (Array) Files to upload
    *   Note: Best way is to send to it the $_FILES array of your form
    */
    public function uploadThis ($files)
    {
        $this->getInputName();
        $this->checkDir(); // Check if directory exists else try to create it
        $this->setFiles(); // Prepare files to be uploaded
        $this->checkFiles(); // Check files before upload
        
        if($this->fileStatus !== false) // If no error
        {
         return $this->uploadFiles(); // Upload files
        } else {
            return $this->returnErrors(); // Else return errors
        }
    }
    
    public function getJSON ()
    {
        $array = [
            "paths" => $this->uploadPaths,
            "errors" => $this->errors
        ];
        
        return json_encode($array);
    }
    
    private function getInputName ()
    {
        foreach($_FILES as $key => $file)
        {
            $this->inputNames [] = $key;   
        }
    }
    
    private function checkDir ()
    {
        if( !is_dir($this->dir) ) {
            if( !mkdir($this->dir, 0755) ) {
                die('Error: Directory ' .$this->dir. ' cannot be created. Check your admin rights or create the directory manually.');
                return false;
            }
        }
    }
    
    private function setFiles ()
    {
        foreach($_FILES as $file)
        {
            if($file[error] !== 4)
            {
                $this->files [] = $file;
            }
        }
    }
    
    private function checkFiles ()
    {
        foreach($this->files as $file)
        {
            $this->checkImage($file); // Check if file is a picture
        }
    }
    
    private function checkImage ($file)
    {
        $imageFileType = pathinfo($this->dir . basename($file["name"]), PATHINFO_EXTENSION); // Get file extension
        
        if(in_array(strtolower($imageFileType), $this->types)) // Compare image extension with authorized file types
        {
            if(getimagesize($file["tmp_name"])) //Check image file size
            {
                $this->fileStatus = true;
            } else {
                $this->fileStatus = false;
                $this->errors [] = $file["name"] . " picture cannot be uploaded.";
            }
        } else {
            $this->fileStatus = false;
            $this->errors [] = $file["name"] . " is not a picture.";
        }
    }
    
    private function uploadFiles ()
    {
        foreach($this->files as $key => $file)
        {
            $filePath = $this->dir.$file['name'];
            
            if(move_uploaded_file($file["tmp_name"], $filePath))
            {
                $this->uploadStatus = true;
                $this->uploadPaths [] = [
                    "inputName" => $this->inputNames[$key],
                    "file_name" => $file["name"],
                    "file_upload_path" => $filePath
                ];
            }
            else
            {
                $this->uploadStatus = false;
                $this->errors [] = "Error uploading " .$file['name']. ". Please try again...";
            }
        }
        
        if($this->uploadStatus !== false)
        {
            return $this->uploadPaths;
        } else {
            return $this->returnErrors();
        }
    }
    
    private function returnErrors ()
    {
        if($this->errors)
        {
             return $this->errors;
        }
    }
    
}