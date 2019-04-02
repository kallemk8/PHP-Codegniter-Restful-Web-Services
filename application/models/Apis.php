<?php
  class Apis extends CI_Model {
       
    public function __construct(){
      $this->load->database();
    }
    public function getvideos($number){
      $offset = $number;
      $this->db->select("*");
      $this->db->limit(10, $offset);
      $this->db->order_by('ID',"DESC");
      $query = $this->db->get('videos');
      return $result = $query->result();
    }

    public function getplayers($number){
      $offset = $number;
      $this->db->select("*");
      $this->db->limit(10, $offset);
      $this->db->order_by('ID',"DESC");
      $query = $this->db->get('playerinfo');
      return $result = $query->result();
    }
    public function getplayerscount(){
      $this->db->select("*");
      $this->db->order_by('ID',"DESC");
      $query = $this->db->get('playerinfo');
      return $result = $query->result();
    }
    public function getserice(){
      $this->db->select("*");        
      $this->db->where("seriesstatus",1);
      $this->db->order_by('ID',"DESC");
      $query = $this->db->get('series');
      return $result = $query->result();
    }

    public function getteams(){
      $this->db->select("*");        
      $this->db->order_by('team_id',"DESC");
      $query = $this->db->get('teams');
      return $result = $query->result();
    }
    
    public function getmatches($number){
      $offset = $number;
      $this->db->select("*");
      $this->db->limit(10, $offset);
      $this->db->order_by('ID',"DESC");
      $query = $this->db->get('livematchscore');
      return $result = $query->result();
    }

    public function getmatchescount(){
      $this->db->select("*");
      $this->db->order_by('ID',"DESC");
      $query = $this->db->get('livematchscore');
      return $result = $query->result();
    }
    public function login($data){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('username', $data['username']);
        $this->db->where('password', $data['password']);

        $query = $this->db->get();
        $va = $query->row();
        return $query->row();
    }
    public function addsericecms($post){
      if($this->db->insert('series',$post)){
        return true;
      }else{
        return false;
      }
    }
    public function addteamcms($post){
      if($this->db->insert('teams',$post)){
        return true;
      }else{
        return false;
      }
    }

    public function addnewscms($post){
      if($this->db->insert('posts',$post)){
        return true;
      }else{
        return false;
      }
    }
    public function updatesericecms($post){
      $id= $post['ID'];
      $this->db->where('id', $id);
      if($this->db->update('series',$post)){
        return true;
      }else{
        return false;
      }
    }
    public function updateteamcms($post){
      $id= $post['team_id'];
      $this->db->where('team_id', $id);
      if($this->db->update('teams',$post)){
        return true;
      }else{
        return false;
      }
    }

    public function deleteteamcms($post){
      
      $this->db->where('team_id', $post);
      if($this->db->delete('teams')){
        return true;
      }else{
        return false;
      }
    }
    public function deleteserice2($post){

      $this->db->where('ID', $post);
      if($this->db->delete('series')){
        return true;
      }else{
        return false;
      }
    }
    public function getsingleserice($number){
      $this->db->select("*");
      $this->db->where("ID",$number);
      $query = $this->db->get('series');
      return $result = $query->row();
    }
    public function getvideoscount(){
      $this->db->select("*");
      $this->db->order_by('ID',"DESC");
      $query = $this->db->get('videos');
      return $result = $query->result();
    }

    public function getpostscount(){
      $this->db->select("*");
      $this->db->order_by('ID',"DESC");
      $query = $this->db->get('posts');
      return $result = $query->result();
    }

    public function getcountry(){
      $this->db->select("*");
      $this->db->order_by('CountryId',"DESC");
      $query = $this->db->get('country');
      return $result = $query->result();
    }

    public function getnews($number){
      $offset = $number;
      $this->db->limit(10, $offset);
      $this->db->select("*");
      $this->db->order_by('ID',"DESC");
      $query = $this->db->get('posts');
      return $result = $query->result();
    }
    public function getsinglevideo($number){
      $this->db->select("*");
      $this->db->where("ID",$number);
      $query = $this->db->get('videos');
      return $result = $query->row();
    }
    public function getsinglenews($number){
      $this->db->select("*");
      $this->db->where("ID",$number);
      $query = $this->db->get('posts');
      return $result = $query->row();
    }

    public function getsingleteam($number){
      $this->db->select("*");
      $this->db->where("team_id",$number);
      $query = $this->db->get('teams');
      return $result = $query->row();
    }
    public function getsinglematch($number){
      $this->db->select("*");
      $this->db->where("ID",$number);
      $query = $this->db->get('livematchscore');
      return $result = $query->row();
    }
    public function getsinglecountry($number){
      $this->db->select("*");
      $this->db->where("CountryId",$number);
      $query = $this->db->get('country');
      return $result = $query->row();
    }
    public function addvideocms($post){
      if($this->db->insert('videos',$post)){
        return true;
      }else{
        return false;
      }
    }

    public function addmatchescms($post){
      if($this->db->insert('livematchscore',$post)){
        return true;
      }else{
        return false;
      }
    }

    public function addcountrycms($post){
      if($this->db->insert('country',$post)){
        return true;
      }else{
        return false;
      }
    }

    public function updatenewscms($post){
      $id= $post['ID'];
      $this->db->where('id', $id);
      if($this->db->update('posts',$post)){
        return true;
      }else{
        return false;
      }
    }

    public function updatecountry($post){
      $id= $post['CountryId'];
      $this->db->where('CountryId', $id);
      if($this->db->update('country',$post)){
        return true;
      }else{
        return false;
      }
    }

    public function updatematchcms($post){
      $id= $post['ID'];
      $this->db->where('ID', $id);
      if($this->db->update('livematchscore',$post)){
        return true;
      }else{
        return false;
      }
    }
    public function deletenews($post){
      $this->db->where('id', $post);
      if($this->db->delete('posts')){
        return true;
      }else{
        return false;
      }
    }
    public function deletecountry($post){
      $this->db->where('CountryId', $post);
      if($this->db->delete('country')){
        return true;
      }else{
        return false;
      }
    }
    

    public function deletematche($post){
      $this->db->where('ID', $post);
      if($this->db->delete('livematchscore')){
        return true;
      }else{
        return false;
      }
    }

    
    public function updatevideo($post){
      $id= $post['ID'];
      $this->db->where('id', $id);
      if($this->db->update('videos',$post)){
        return true;
      }else{
        return false;
      }
    }
    public function deletevideo($post){
      $this->db->where('id', $post);
      if($this->db->delete('videos')){
        return true;
      }else{
        return false;
      }
    }
    public function getphotos($number){
      
      $offset = $number;
      $this->db->select("*");
      $this->db->limit(10, $offset);
      $this->db->order_by('ID',"DESC");
      $query = $this->db->get('photos');
      return $result = $query->result();
    }

    public function getphotoscount(){
      $this->db->select("*");
      $this->db->order_by('ID',"DESC");
      $query = $this->db->get('photos');
      return $result = $query->result();
    }
    public function getsinglephoto($number){
      $this->db->select("*");
      $this->db->where("ID",$number);
      $query = $this->db->get('photos');
      return $result = $query->row();
    }
    public function addphotocms($post){
      if($this->db->insert('photos',$post)){
        return true;
      }else{
        return false;
      }
    }
    public function updatephoto($post){
      $id= $post['ID'];
      $this->db->where('ID', $id);
      if($this->db->update('photos',$post)){
        return true;
      }else{
        return false;
      }
    }
    public function deletephoto($post){
      $this->db->where('id', $post);
      if($this->db->delete('photos')){
        return true;
      }else{
        return false;
      }
    }
}