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
    public function addvideocms($post){
      if($this->db->insert('videos',$post)){
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
    public function deletenews($post){
      $this->db->where('id', $post);
      if($this->db->delete('posts')){
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