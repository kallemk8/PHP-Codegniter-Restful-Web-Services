<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="icon" type="image/png" href="http://livecricketinfo.com/images/favicon.png" />
	    <title>Live Cricket Score & Live Cricket Streaming Video - Livecricketinfo</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
	    <link href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
	    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <meta name="google-site-verification" content="VAEQ1oinBE7YRpSUabTkFe20sVIOy7synw6cfsxfsIk" />
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body><header><div class="container"><div class="header"><div class="col-md-3 col-sm-6"><h1 class="logo"><img src="http://www.livecricketinfo.com/images/logo.png" width="40px"><a href="http://www.livecricketinfo.com/" title="Watch Live cricket score and Live Cricket Streaming">Livecricketinfo</a></h1></div><div class="col-md-9 col-sm-6"><div class="menu"><div class="mobile-menu-icon"><a href="#"><i class="fa fa-align-justify" aria-hidden="true"></i></a></div><ul class="comman-menu"><li><a href="http://www.livecricketinfo.com/match-results">Live Scores</a></li><li><a href="http://www.livecricketinfo.com/schedule">Schedule</a></li><li><a href="http://www.livecricketinfo.com/latest-news">News</a></li><li><a href="http://www.livecricketinfo.com/series">Series</a></li><li><a href="http://www.livecricketinfo.com/teams">Teams</a></li><li><a href="http://www.livecricketinfo.com/videos">Videos</a></li><li><a href="http://www.livecricketinfo.com/photos">Photos</a></li><li><a href="http://www.livecricketinfo.com/rankings">Rankings</a></li></ul></div></div></div>
	<div class="live-match-list ">

			<?php foreach($topfour as $four): ?>
			<div class="col-md-3">
				<a href="<?php echo base_url().$four->url."/".$four->ID; ?>" class="short-score" title="<?php echo $four->match_title; ?>" >
					<?php if($four->match_type==1): ?>
					<div class="team-one">
						<?php $this->load->model('common'); ?>
						<span class="team-name">
							<?php $name = $this->common->team_mini_name($four->team_name_1); ?>
							<?php foreach ($name as $key => $value) {
								echo $value->mini_name;
							} ?>
								
						</span> 
						<span class="team-score ">
						123/1
						</span>
					</div>
					<div class="team-one">
						<span class="team-name"><?php $name = $this->common->team_mini_name($four->team_name_2); ?>
							<?php foreach ($name as $key => $value) {
								echo $value->mini_name;
							} ?></span> <span class="team-score ">
						124/3
						</span>
					</div>
					<?php endif; ?>
					<?php if($four->match_type==2||$four->match_type==3): ?>
					<div class="team-one">
						<?php $this->load->model('homepage'); ?>
						<span class="team-name">
							<?php $name = $this->common->team_mini_name($four->team_name_1); ?>
							<?php foreach ($name as $key => $value) {
								echo $value->mini_name;
							} ?>	
						</span> 
						<?php if($four->match_inning!=0): ?>
						<span class="team-score ">
						<?php $matchscore = $this->common->get_match_total($four->ID, 1); ?> 
							<?php $sum = 0; $wickets = 0; foreach($matchscore as $s){ $sum += $s->runs; $wickets += $s->wickets;  }
							echo $sum."/".$wickets;  ?>

						</span>
						<?php endif; ?>
					</div>
					<div class="team-one">

						<span class="team-name">
							<?php $name = $this->common->team_mini_name($four->team_name_2); ?>
							<?php foreach ($name as $key => $value) {
								echo $value->mini_name;
							} ?></span> 
						<span class="team-score ">
							<?php if($four->match_inning==2): ?>
						<?php $matchscore = $this->common->get_match_total($four->ID, 2); ?> 
							<?php $sum = 0; $wickets = 0; foreach($matchscore as $s){ $sum += $s->runs; $wickets += $s->wickets;  }
							echo $sum."/".$wickets;  ?>
						<?php endif; ?>
						</span>
					</div>
					<?php endif; ?>
					<div class="match-details">
						<?php if($four->match_status==2): ?>
							<?php echo $four->result; ?>
						<?php endif; ?>
					</div>
					<?php if($four->match_status==1): ?>
						<div class="match_running_live_red">Live</div>
					<?php endif; ?>
				</a>
			</div>
			<?php endforeach; ?>
			<div class="col-md-12">
				<a href="<?php echo base_url(); ?>match-results" class="more-live-matches">All Matches</a>
				
			</div>
		</div>
	</div>
</header>

