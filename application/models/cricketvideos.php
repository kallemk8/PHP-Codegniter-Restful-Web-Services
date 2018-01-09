<?php
class cricketvideos extends CI_Model {
    public function index(){
        parent::__construct();
    }
    public function single_video($videoid){
        $this->db->select("*");
        $this->db->order_by('ID',"DESC");
        $this->db->where('ID', $videoid);
        $query = $this->db->get('videos');
        return $videosingle = $query->result();
    }
    public function single_post($postid){
        $this->db->select("*");
        $this->db->order_by('ID',"DESC");
        $this->db->where('ID', $postid);
        $query = $this->db->get('posts');
        return $videosingle = $query->result();
    }

    public function single_photos($postid){
        $this->db->select("*");
        $this->db->order_by('ID',"DESC");
        $this->db->where('ID', $postid);
        $query = $this->db->get('photos');
        return $videosingle = $query->result();
    }
    public function single_player($postid){
        $this->db->select("*");
        $this->db->order_by('ID',"DESC");
        $this->db->where('ID', $postid);
        $query = $this->db->get('playerinfo');
        return $videosingle = $query->result();
    }
}
?>