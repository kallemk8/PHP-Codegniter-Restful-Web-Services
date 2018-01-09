<?php 
	class singlevideos extends CI_Controller {
		public function index()
		{
			$this->load->model('common');
			$this->load->model('cricketvideos');
	        $data['topfour'] = $this->common->get_four_matchs();
			$this->load->view('templates/header', $data);

			$videoid = $this->uri->segment(3);
			$data['videoinfo'] = $this->cricketvideos->single_video($videoid);
			$this->load->view('videoinfo', $data);
			$this->load->view('templates/footer');
		}

		public function singlepost()
		{
			$this->load->model('common');
			$this->load->model('cricketvideos');
	        $data['topfour'] = $this->common->get_four_matchs();
			$this->load->view('templates/header', $data);

			$postid = $this->uri->segment(3);
			$data['postinfo'] = $this->cricketvideos->single_post($postid);
			$this->load->view('postinfo', $data);
			$this->load->view('templates/footer');
		}

		public function singlephotos()
		{
			$this->load->model('common');
			$this->load->model('cricketvideos');
	        $data['topfour'] = $this->common->get_four_matchs();
			$this->load->view('templates/header', $data);

			$postid = $this->uri->segment(3);
			$data['photosinfo'] = $this->cricketvideos->single_photos($postid);
			$this->load->view('photosinfo', $data);
			$this->load->view('templates/footer');
		}
		public function singleplayer()
		{
			$this->load->model('common');
			$this->load->model('cricketvideos');
	        $data['topfour'] = $this->common->get_four_matchs();
			$this->load->view('templates/header', $data);

			$postid = $this->uri->segment(3);
			$data['playerinfo'] = $this->cricketvideos->single_player($postid);
			$this->load->view('playerinfo', $data);
			$this->load->view('templates/footer');
		}
	}

?>