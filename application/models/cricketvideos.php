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

    public function single_match($postid){
        $this->db->select("*");
        $this->db->order_by('ID',"DESC");
        $this->db->where('ID', $postid);
        $this->db->from('livematchscore');
        $query = $this->db->get();
        return $videosingle = $query->result();
    }
    public function single_match2($postid){
        $this->db->select("*");
        $this->db->order_by('recent_id',"DESC");
        $this->db->where('match_id', $postid);
        $this->db->from('matchrecent');
        $query = $this->db->get();
        return $videosingle = $query->result();
    }
    public function play_batsman($postid){
        $this->db->select("*");
        $this->db->order_by('ID',"DESC");
        $this->db->where('match_id', $postid);
        $this->db->where('Playstatus', 1);
        $this->db->from('matchbatsman');
        $query = $this->db->get();
        return $videosingle = $query->result();
    }
    public function play_bowler($postid){
        $this->db->select("*");
        $this->db->order_by('ID',"DESC");
        $this->db->where('match_id', $postid);
        $this->db->where('playstatus', 1);
        $this->db->from('matchbowlers');
        $query = $this->db->get();
        return $videosingle = $query->result();
    }
    public function match_comments($postid){
        $this->db->select("*");
        $this->db->limit(15);
        $this->db->order_by('Commentry_id',"DESC");
        $this->db->where('match_id', $postid);
        $this->db->from('commentry');
        $query = $this->db->get();
        return $videosingle = $query->result();
    }
}
?>