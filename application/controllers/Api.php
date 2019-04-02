<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    require APPPATH . '/libraries/REST_Controller.php';
    class Api extends REST_Controller{
    
    public function __construct()
    {
        header('Access-Control-Allow-Origin: *');
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        parent::__construct();
        $this->load->model('Apis');
    }

    

    function serices_get(){
        $result = $this->Apis->getserice();
        if($result){
             $result1 = array('data'=>array('userdata'=>$result),'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>array('userdata'=>$result),'status'=> false);
             $this->response($result1, 200); 
        }
    }

    function teams_get(){
        $result = $this->Apis->getteams();
        if($result){
             $result1 = array('data'=>array('userdata'=>$result),'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>array('userdata'=>$result),'status'=> false);
             $this->response($result1, 200); 
        }
    }
    function serices_post(){
        $_POST['url'] = str_replace(" ", "-", $_POST['seriesname']);
        
        $result = $this->Apis->addsericecms($_POST);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
        }
    }

    function teams_post(){
        
        $result = $this->Apis->addteamcms($_POST);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
        }
    }

    function updateserices_post(){
       
        $_POST['url'] = str_replace(" ", "-", $_POST['seriesname']);
        $result = $this->Apis->updatesericecms($_POST);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
        }
    }

    function deleteserice_post(){
        $jsonArray = json_decode(file_get_contents('php://input'),true); 
         $number = $jsonArray['number'];
        $result = $this->Apis->deleteserice2($number);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
            
        }
     }
    function news_get(){
        $number = $this->get('number');
        $result = $this->Apis->getnews($number);
        $count = $this->Apis->getpostscount();
        $count = count($count);
        if($result){
             $result1 = array('data'=>array('userdata'=>$result),'status'=> true,  "count"=>$count);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>array('userdata'=>$result),'status'=> false);
             $this->response($result1, 200); 
            
        }
    }

    function news_post(){
        $_POST['post_url'] = str_replace(" ", "-", $_POST['post_title']);
        $result = $this->Apis->addnewscms($_POST);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
        }
    }
    
    function updatenews_post(){
       
        $_POST['post_url'] = str_replace(" ", "-", $_POST['post_title']);
        $result = $this->Apis->updatenewscms($_POST);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
        }
    }

    function deletenews_post(){
        $jsonArray = json_decode(file_get_contents('php://input'),true); 
         $number = $jsonArray['number'];
        $result = $this->Apis->deletenews($number);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
            
        }
     }
    function getplayers_post(){
        $jsonArray = json_decode(file_get_contents('php://input'),true); 
        $number = $jsonArray['number'];
        $result = $this->Apis->getplayers($number);
        $count = $this->Apis->getplayerscount();
        $count = count($count);
        if($result){
             $result1 = array('data'=>array('userdata'=>$result),'status'=> true, "count"=>$count);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>array('userdata'=>$result),'status'=> false);
             $this->response($result1, 200); 
            
        }
    }
    
    
    function videos_get(){
        $number = $this->get('number');
        $result = $this->Apis->getvideos($number);
        $count = $this->Apis->getvideoscount();
        $count = count($count);
        if($result){
             $result1 = array('data'=>array('userdata'=>$result),'status'=> true, "count"=>$count);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>array('userdata'=>$result),'status'=> false);
             $this->response($result1, 200); 
            
        }
    }

    function matches_get(){
        $number = $this->get('number');
        $result = $this->Apis->getmatches($number);
        $count = $this->Apis->getmatchescount();
        $count = count($count);
        if($result){
             $result1 = array('data'=>array('userdata'=>$result),'status'=> true, "count"=>$count);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>array('userdata'=>$result),'status'=> false);
             $this->response($result1, 200); 
            
        }
    }
    function videos_post(){

        $_POST['url'] = str_replace(" ", "-", $_POST['videotitle']);
        $result = $this->Apis->addvideocms($_POST);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
        }
    }

    function country_get(){
        
        $result = $this->Apis->getcountry();
        
        if($result){
             $result1 = array('data'=>array('userdata'=>$result),'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>array('userdata'=>$result),'status'=> false);
             $this->response($result1, 200); 
            
        }
    }
    function country_post(){
        $result = $this->Apis->addcountrycms($_POST);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
        }
    }

    function matches_post(){

        $_POST['url'] = str_replace(" ", "-", $_POST['match_title']);
        $result = $this->Apis->addmatchescms($_POST);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
        }
    }
    function updatevideos_post(){
        
        $result = $this->Apis->updatevideo($_POST);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
            
        }
    }
    function updateteams_post(){
        
        $result = $this->Apis->updateteamcms($_POST);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
            
        }
    }
    function updatematche_post(){
        
        $result = $this->Apis->updatematchcms($_POST);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
            
        }
    }
    function getsingleserice_get(){
        $number = $this->get('number');
        $result = $this->Apis->getsingleserice($number);
        
        if($result){
             $result1 = array('data'=>array('userdata'=>$result),'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>array('userdata'=>$result),'status'=> false);
             $this->response($result1, 200); 
            
        }
    }
    function getsinglecountry_get(){
        $number = $this->get('number');
        $result = $this->Apis->getsinglecountry($number);
        
        if($result){
             $result1 = array('data'=>array('userdata'=>$result),'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>array('userdata'=>$result),'status'=> false);
             $this->response($result1, 200); 
            
        }
    }

    
    function getsinglematch_get(){
        $number = $this->get('number');
        $result = $this->Apis->getsinglematch($number);
        
        if($result){
             $result1 = array('data'=>array('userdata'=>$result),'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>array('userdata'=>$result),'status'=> false);
             $this->response($result1, 200); 
            
        }
    }

    function getsingleteam_get(){
        $number = $this->get('number');
        $result = $this->Apis->getsingleteam($number);
        
        if($result){
             $result1 = array('data'=>array('userdata'=>$result),'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>array('userdata'=>$result),'status'=> false);
             $this->response($result1, 200); 
            
        }
    }
   

    function getsinglevideo_get(){
        $number = $this->get('number');
        $result = $this->Apis->getsinglevideo($number);
        
        if($result){
             $result1 = array('data'=>array('userdata'=>$result),'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>array('userdata'=>$result),'status'=> false);
             $this->response($result1, 200); 
            
        }
    }
    function getsinglenews_get(){
        $number = $this->get('number');
        $result = $this->Apis->getsinglenews($number);
        if($result){
             $result1 = array('data'=>array('userdata'=>$result),'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>array('userdata'=>$result),'status'=> false);
             $this->response($result1, 200); 
            
        }
    }
     
     function deletevideo_post(){
        $jsonArray = json_decode(file_get_contents('php://input'),true); 
        $number = $jsonArray['number'];
        $result = $this->Apis->deletevideo($number);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
            
        }
     }

     function deletematche_post(){
        $jsonArray = json_decode(file_get_contents('php://input'),true); 
        $number = $jsonArray['number'];
        $result = $this->Apis->deletematche($number);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
            
        }
     }
     
     function deleteteam_post(){
        $jsonArray = json_decode(file_get_contents('php://input'),true); 
        $number = $jsonArray['number'];
        $result = $this->Apis->deleteteamcms($number);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
            
        }
     }

     function deletecountry_post(){
        $jsonArray = json_decode(file_get_contents('php://input'),true); 
        $number = $jsonArray['number'];
        $result = $this->Apis->deletecountry($number);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
            
        }
     }

     function photos_get(){
        $jsonArray = json_decode(file_get_contents('php://input'),true); 
        $number = $jsonArray['number'];
        $result = $this->Apis->getphotos($number);
        $count = $this->Apis->getphotoscount();
        $count = count($count);
        if($result){
             $result1 = array('data'=>array('userdata'=>$result),'status'=> true, "count"=>$count);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>array('userdata'=>$result),'status'=> false);
             $this->response($result1, 200); 
            
        }
    }
    function updatephoto_post(){
        $result = $this->Apis->updatephoto($_POST);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
            
        }
    }

    function updatecountry_post(){
        $result = $this->Apis->updatecountry($_POST);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
            
        }
    }
    function getsinglephoto_get(){
        $number = $this->get('number');
        $result = $this->Apis->getsinglephoto($number);
        
        if($result){
             $result1 = array('data'=>array('userdata'=>$result),'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>array('userdata'=>$result),'status'=> false);
             $this->response($result1, 200); 
            
        }
    }
     function addphotos_post(){
        $_POST['url'] = str_replace(" ", "-", $_POST['videotitle']);
        $result = $this->Apis->addphotocms($_POST);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
        }
     }
     function deletephoto_post(){
        $jsonArray = json_decode(file_get_contents('php://input'),true); 
        $number = $jsonArray['number'];
        $result = $this->Apis->deletephoto($number);
        if($result){
             $result1 = array('data'=>$result,'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>$result,'status'=> false);
             $this->response($result1, 400); 
            
        }
     }
    function login_post(){
        $jsonArray = json_decode(file_get_contents('php://input'),true); 
        $username = $jsonArray['username'];
        $password = $jsonArray['password'];
        $result = $this->Apis->login(array("username"=>$username, "password"=>$password));
        $count = count($result);
        if($count != 0){
             $result1 = array('data'=>array('userdata'=>$result),'status'=> true);
            $this->response($result1, 200);  
        }else{
            $result1 = array('data'=>array('userdata'=>$result),'status'=> false);
             $this->response($result1, 200); 
            
        }
    }
    function uploadfile_post(){
        header('Content-Type: multipart/form-data');
        $config['upload_path'] ="./uploads";
        $config['allowed_types'] = '*';
        $this->load->library('upload');
        $this->upload->initialize($config);
        if ( ! $this->upload->do_upload('image'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->response($error, 400); 
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
            $this->response($data, 200); 
        }
    }
    
}

