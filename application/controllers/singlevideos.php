<?php 
	class Singlevideos extends CI_Controller {
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

		public function singlematch()
		{
			$this->load->model('common');
			$this->load->model('cricketvideos');
	        $data['topfour'] = $this->common->get_four_matchs();
			$this->load->view('templates/header', $data);
			$postid = $this->uri->segment(2);
			$data['matchinfo'] = $this->cricketvideos->single_match($postid);
			$data['matchscore'] = $this->cricketvideos->single_match2($postid);
			$data['playbatsman'] = $this->cricketvideos->play_batsman($postid);
			$data['playbowler'] = $this->cricketvideos->play_bowler($postid);
			$data['matchcomments'] = $this->cricketvideos->match_comments($postid);
			$this->load->view('matchinfo', $data);
			$this->load->view('templates/footer');
		}

	}

?>