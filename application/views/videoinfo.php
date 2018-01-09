<?php foreach($videoinfo as $value): ?>
<section id="single-page-conttent">
	<div class="container">
		<div class="row">
			<div class="col-md-9 paddingright0">
				
				<div class="score-card">
				<div class="header-section">
					<h1><?php echo $value->videotitle; ?></h1>
					
					<ul class="venue-details">
						<li><b>Date:</b> <?php echo $value->postdate; ?> </li>
						<li><b>Series:</b><a href="http://www.livecricketinfo.com/cricket-series/<?php echo $value->series; ?>"> </a> </li>
					</ul>
				</div>
				<div class="content">
				
				
				<?php if($value->video_type==1): ?>
					<iframe width="100%" height="400" src="https://www.youtube.com/embed/<?php echo $value->videoid; ?>" frameborder="0" allowfullscreen></iframe>
				<?php endif; ?>
				<?php if($value->video_type==2): ?>
					<video id="my-video" class="video-js video_height" controls preload="auto" width="100%"  poster="http://www.livecricketinfo.com/<?php echo $value->videoimage; ?>" data-setup="{}" ><source src="<?php echo $value->videoid; ?>" type='video/mp4'><source src="MY_VIDEO.webm" type='video/webm'></video>
				<?php endif; ?>
				<?php if($value->video_type==3): ?>
					<iframe width="100%" height="400" src="<?php echo $value->videoid; ?>" frameborder="0" allowfullscreen></iframe>
				<?php endif; ?>
				<h2 style="font-size:17px;"><?php echo $value->subtitle; ?></h2>
					<br/>
					<?php echo $value->videocontent; ?>
					
					<?php if($value->videoimage): ?>
						<br/>
						<br/>
					<a href="#" title="<?php echo $value->videotitle; ?>">
					<img src="http://www.livecricketinfo.com/<?php echo $value->videoimage; ?>" class="max-width" title="<?php echo $value->videotitle; ?>" alt="<?php echo $value->videotitle; ?>" ></a>
					<br/>
						<br/>
					<?php endif; ?>
				</div>
				
				</div>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>
</section>
<?php endforeach; ?>