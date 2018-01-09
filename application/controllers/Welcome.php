<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->model('common');
		$this->load->model('homepage');
        $data['topfour'] = $this->common->get_four_matchs();
		$this->load->view('templates/header', $data);
		$data['posts'] = $this->homepage->get_home_news();
		$data['photos'] = $this->homepage->get_home_photos();
		$data['videos'] = $this->homepage->get_home_videos();
		$data['match2'] = $this->homepage->get_single_match_id2(158);
		$this->load->view('home', $data);
		$this->load->view('templates/footer');
	}
	
}
