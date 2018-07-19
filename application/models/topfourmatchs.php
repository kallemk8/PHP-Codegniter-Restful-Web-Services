<?php
class Topfourmatchs extends CI_Model {


    public function index(){
        parent::__construct();

        
    }
    public function get_users(){

        $this->db->select("*");
        $this->db->limit(4);
        $this->db->order_by('ID',"DESC");
        $query = $this->db->get('livematchscore');
        return $data['topfour'] = $query->result();

     }
    function team_mini_name($teamid)
    {
        $this->db->select('mini_name');
        $this->db->where('team_id', $teamid);
        $query = $this->db->get('teams');
        return $query->result();
    }
}

?>