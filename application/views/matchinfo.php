<?php foreach($matchinfo as $value): ?>

<section id="single-page-conttent">
	<div class="container">
		<div class="row">
			<div class="col-md-9 paddingright0">
				<div class="score-card">
					<div class="header-section">
						<h1 ><?php echo $value->match_title; ?></h1>
						<ul class="venue-details">
							<li><b>Series:</b> <?php echo $value->match_series; ?></li>
							<li><b>Venue:</b> <?php echo $value->match_venue; ?> </li>
							<li><b>Date & Time:</b> <?php echo $value->matchdate; ?> </li>
						</ul>
						 <a href="http://www.livecricketinfo.com/videos/" target="_blank" style="color:red; font-size:20px;"> Live Video</a>
						<div class="only-desktop">
							<ul class="mini-links">
								<li><a href="">Live Commentary</a></li><li><a href="">Full Scorecard</a></li><li><a href="#">Highlights</a></li>
								<li><a href="">Full Commentary</a></li>
								<li><a href="http://www.livecricketinfo.com/latest-news">Match News</a></li>
							</ul>
						</div>
					</div>
						<div class="live-match-score">
							
							<?php if($value->match_type==2 || $value->match_type==3): ?>
							<?php if($value->match_inning!=0): ?>
							<div class="second-innings <?php if($value->match_inning==2){echo "completed";} ?>" >
								<span><?php echo $name = $this->common->team_mini_name($value->team_name_1);  ?></span>
								<span><?php $matchscore2 = $this->common->get_match_total($value->ID, 1); echo $matchscore2['total'].'/'.$matchscore2['wickets'];  ?> </span>
							</div>
							<?php endif; ?>
							<?php if($value->match_inning==2): ?>
							<div class="second-innings " >
								<span><?php echo $name = $this->common->team_mini_name($value->team_name_2);  ?></span> 
								<span><?php $matchscore2= $this->common->get_match_total($value->ID, 2); echo $matchscore2['total'].'/'.$matchscore2['wickets'];  ?> </span>
							</div>
							<?php endif; ?>
							<?php endif; ?>
							
						</div>

						<div class="match_status" style="padding:0px 15px;">
							<?php if($value->match_type==2||$value->match_type==3||$value->match_status==2): ?>
							<div class="match-result-completed" >
							<?php if($value->match_status==2): ?>
							<?php echo $value->result;?>
							<?php endif; ?>
							</div>
							<?php endif; ?>
							<?php if($value->match_status==1): ?>
							<?php if($value->match_type==1): ?>
								<?php if($value->match_inning==1): ?>
								<div class="match-result-completed" >
								<?php echo $value->session_text; ?> 
								</div>
								<?php endif; ?>
							<?php if($value->match_inning==2): ?>
							<div class="match-result-completed" >
								 
							</div>
							<?php endif; ?>
							
							<?php endif; ?>
							<?php endif; ?>
							<?php if($value->man_of_the_match): ?>
							<div class="man-of-the-match">
								PLAYER OF THE MATCH
								<br/>
								<span><?php echo $value->man_of_the_match; ?></span>
							</div>
							<?php endif; ?>
							<?php if($value->man_of_the_series): ?>
							<div class="man-of-the-match">
								PLAYER OF THE SERIES 
								<br/>
								<span><?php echo $value->man_of_the_series; ?></span>
							</div>
							<?php endif; ?>
						</div>
						<?php if($value->match_inning!=0): ?>
						<div class="batsman-on-pitch">
							<div class="row">
							<div class="col-md-8">
							<?php if($playbatsman): ?>
							<table class="table  table-batsmanonly">
							<thead><tr><th ><b>Batsman</b></th><th class="width50"><b>R</b></th><th class="width50"><b>B</b></th><th class="width50"><b>4s</b></th><th class="width50"><b>6s</b></th><th class="width50"><b>SR</b></th></tr></thead>
							<tbody>
								<?php foreach($playbatsman as $batsman): ?>
									<?php if($value->match_inning == $batsman->innings): ?>
								<tr>
									<td><?php echo $batsman->batsmanid; ?></td>
									
									<?php $runs=0; $ball=0;  foreach($matchscore as $scorerun): ?>
										<?php if($batsman->batsmanid == $scorerun->batsman): ?>
									<?php $runs += $scorerun->runs;  ?>
									<?php $ball += $scorerun->ball;  ?>
									
										<?php endif; ?>
									<?php endforeach; ?>
									<td><?php echo $runs; ?></td>
									<td><?php echo $ball; ?></td>
									<td><?php echo $batsman->batsmanid; ?></td>
									<td><?php echo $batsman->batsmanid; ?></td>
									<td><?php echo $batsman->batsmanid; ?></td>
								</tr>
							<?php endif; ?>
								<?php endforeach; ?>
								
							</tbody>
							</table>
							<?php endif; ?>
							<?php if($playbowler): ?>
							<table class="table  table-bowleronly"><thead><tr><th><b>Bowler</b></th><th class="width50"><b>O</b></th><th class="width50"><b>R</b></th><th class="width50"><b>W</b></th><th class="width50"><b>M</b></th><th class="width50"><b>NB</b></th></tr></thead>
							<tbody>
								<?php foreach($playbowler as $bowler): ?>
									<?php if($value->match_inning == $bowler->inning): ?>
								<tr>
									<td><?php echo $bowler->bowlerid; ?></td>
									<td><?php echo $bowler->bowlerid; ?></td>
									<td><?php echo $bowler->bowlerid; ?></td>
									<td><?php echo $bowler->bowlerid; ?></td>
									<td><?php echo $bowler->bowlerid; ?></td>
									<td><?php echo $bowler->bowlerid; ?></td>
								</tr>
								<?php endif; ?>
								<?php endforeach; ?>
								
							</tbody>
							</table>
							<?php endif; ?>
							</div>
							<div class="col-md-4">
								<table class="table table-bordered table-lastwicketsetion">
									<thead>
										<tr>
											<th>Key Stars</th>
										</tr>
									</thead>
									<tbody>
										
									</tbody>
								</table>
							</div>
							<div class="only-mobile">
								<ul class="mini-links">
									<li><a href="">Full Scorecard</a></li>
									<li><a href="">Full Commentary</a></li>
									<li><a href="">Refresh</a></li>
								</ul>
							</div>
							
							</div>

							<div class="recent-balls">
								<b>Recent: </b> 
								<span>
								<?php $count =1; foreach($matchscore as $scorerun): ?>
										<?php if($count<24): ?>
									<?php echo $scorerun->runs;  ?>
										<?php endif; ?>
									<?php $count++; endforeach; ?>
								</span>
							</div>
						</div>
						<?php endif; ?>
						<?php if($value->match_inning==0): ?>
							<div class="col-md-12" style="background:#fff;">
								<span class="match-before-content">
								
								<?php echo $content; ?>
								</span>
							</div>
						<?php endif; ?>
						<div class="commentry">
							<ul class="livecommentry_ajax">
								<?php foreach($matchcomments as $comment): ?>
								<?php if($value->match_inning == $comment->innings): ?>	
								<li><div class='col-md-1 col-sm-1 col-xs-1'><b><?php echo $comment->overs; ?></b></div><div class='col-md-10 col-sm-10 col-xs-10'><?php echo $comment->commentry_text; ?></div></li>
								<?php endif; ?>
								<?php endforeach; ?>
							</ul>
						</div>
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- mturk -->
							<ins class="adsbygoogle"
							     style="display:block"
							     data-ad-client="ca-pub-1518250080154239"
							     data-ad-slot="9404697537"
							     data-ad-format="auto"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
						</div>
					</div>
					<div class="col-md-3">
						
					</div>
				</div>
			</div>
		</section>
<?php endforeach; ?>