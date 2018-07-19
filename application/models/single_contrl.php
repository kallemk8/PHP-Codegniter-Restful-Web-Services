<?php
class Single_contrl extends CI_Model {
    public function index(){
        parent::__construct();
    }
    public function get_single_match_id($matchid){
        $this->db->select("*");
        $this->db->order_by('ID',"DESC");
        $this->db->where('ID', $matchid);
        $query = $this->db->get('livematchscore');
        return $data['match'] = $query->result();
    }
}

?>