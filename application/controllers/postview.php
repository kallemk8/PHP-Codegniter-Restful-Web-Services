
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Postview extends CI_Controller {
	public function index()
	{
		$this->load->model('Common');
		$this->load->model('Homepage');
        $data['topfour'] = $this->Common->get_four_matchs();
		$this->load->view('templates/header', $data);
		$data['posts'] = $this->Homepage->get_home_news();
		$data['photos'] = $this->Homepage->get_home_photos();
		$data['videos'] = $this->Homepage->get_home_videos();
		$data['match2'] = $this->Homepage->get_single_match_id2(158);
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}
	
}
