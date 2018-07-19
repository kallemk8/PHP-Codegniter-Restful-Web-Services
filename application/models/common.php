<?php
class Common extends CI_Model {
    public function index(){
        parent::__construct();
    }
    public function get_four_matchs(){
        $this->db->select("teams.mini_name, livematchscore.match_title, livematchscore.result, livematchscore.ID, livematchscore.url, livematchscore.match_type,livematchscore.team_name_2, livematchscore.team_name_1, livematchscore.match_inning, livematchscore.match_status");
        $this->db->from('teams');
        
        $this->db->join('livematchscore', 'teams.team_id = livematchscore.team_name_1','teams.team_id = livematchscore.team_name_2');
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
        $mini_name = $query->result();
        foreach ($mini_name as $row)
        {
            $mini_name = $row->mini_name;
                
        }
        return $mini_name;
    }



    function get_match_total($matchid, $innings)
    {
        $this->db->select('runs, wickets, wide, nbs, legbs, ball');
        $this->db->where('match_id', $matchid);
        $this->db->where("innings", $innings);
        $query = $this->db->get('matchrecent');
        $value = $query->result();
        $runs =0; $wide =0; $nbs =0;  $wickets =0; $legbs =0; $ball =0;
        foreach($value as $v){
            $runs += $v->runs;
            $wide += $v->wide;
            $nbs += $v->nbs;
            $wickets += $v->wickets;
            $legbs += $v->legbs;
            $ball += $v->ball;
        }
        $data['runs'] = $runs;
        $data['wide'] = $wide;
        $data['nbs'] = $nbs;
        $data['wickets'] = $wickets;
        $data['legbs'] = $legbs;
        $data['ball'] = $ball;
        $data['total'] = $runs+$wide+$nbs+$legbs;
        return $data;
        
    }
}

?>