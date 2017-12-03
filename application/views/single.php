<?php foreach($match as $m): ?>
<section id="single-page-conttent">
	<div class="container">
		<div class="row">
			<div class="col-md-9 paddingright0">
				<div class="score-card">
					<div class="header-section">
						<h1 ><?php echo $m->match_title; ?></h1>
						<ul class="venue-details">
							<li><b>Series:</b> <?php echo $m->match_series; ?></li>
							<li><b>Venue:</b> <?php echo $m->match_venue; ?> </li>
							<li><b>Date & Time:</b> <?php echo date("dS F Y", strtotime($m->postdate)); ?> </li>
						</ul>
						 <a href="http://www.livecricketinfo.com/videos/" target="_blank" style="color:red; font-size:20px;"> Live Video</a>
						
					</div>

						</div>
					</div>
					<div class="col-md-3">
						
					</div>
				</div>
			</div>
		</section>

	<?php endforeach; ?>