<?php
class common extends CI_Model {
    public function index(){
        parent::__construct();
    }
    public function get_four_matchs(){
        $this->db->select("*");
        $this->db->from('teams');
        
        $this->db->join('livematchscore', 'teams.team_id = livematchscore.team_name_1');
        $this->db->limit(4);
        $this->db->order_by('ID',"DESC");
        $query = $this->db->get();
        return $data['topfour'] = $query->result();
     }
     function team_mini_name($teamid)
    {
        $this->db->select('mini_name');
        $this->db->where('team_id', $teamid);
        $query = $this->db->get('teams');
        return $query->result();
    }
    function get_match_total($matchid, $innings)
    {
        $this->db->select('runs, wickets');
        $this->db->where('match_id', $matchid);
        $this->db->where("innings", $innings);
        $query = $this->db->get('matchrecent');
        $value = $query->result();
        return $value;
    }
}

?>