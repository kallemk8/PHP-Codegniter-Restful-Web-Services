<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class postview extends CI_Controller {
	public function index()
	{
		$this->load->model('common');
		$this->load->model('single_contrl');
        $data['topfour'] = $this->common->get_four_matchs();
		$this->load->view('templates/header', $data);
		$data['match'] = $this->single_contrl->get_single_match_id(13);
		
		$this->load->view('single', $data);
		$this->load->view('templates/footer');
	}
}
