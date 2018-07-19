<?php
class Homepage extends CI_Model {
    public function index(){
        parent::__construct();
    }
    public function get_home_videos(){
        $this->db->select("*");
        $this->db->limit(4);
        $this->db->order_by('ID',"DESC");
        $query = $this->db->get('videos');
        return $data['videos'] = $query->result();
    }
    public function get_home_photos(){
        $this->db->select("*");
        $this->db->limit(4);
        $this->db->order_by('ID',"DESC");
        $query = $this->db->get('photos');
        return $data['photos'] = $query->result();
    }
    public function get_home_news(){
        $this->db->select("*");
        $this->db->limit(4);
        $this->db->order_by('ID',"DESC");
        $query = $this->db->get('posts');
        return $data['posts'] = $query->result();
    }
   public function get_single_match_id($matchid){
        $this->db->select("*");
        $this->db->order_by('ID',"DESC");
        $this->db->where('ID', $matchid);
        $query = $this->db->get('livematchscore');
        return $data['match'] = $query->result();
    }
    public function get_single_match_id2($matchid){
        $this->db->select("matchrecent.runs");
        $this->db->order_by('ID',"DESC");
        $this->db->where('ID', $matchid);
        $this->db->where('innings', 2);
        
        $this->db->from('livematchscore');
        $this->db->join('matchrecent', 'matchrecent.match_id = livematchscore.ID');
        $query = $this->db->get();
        return $data['match2'] = $query->result();
    }


}

?>