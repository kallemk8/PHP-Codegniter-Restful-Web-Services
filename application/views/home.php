<section class="page-content">
	<div class="container">
		<div class="row">
		<div class="col-md-3">
			<div class="right-sidebar">
				<h2 class="sidebar-title">LATEST VIDEOS</h2>
				<ul class="latest-news-sidebar">
					<?php foreach($videos as $video):?>
					<li><a href="<?php echo base_url()."cricket-videos/".$video->url."/".$video->ID; ?>">
					<img src="<?php echo base_url().$video->videoimage."/".$video->ID; ?>" class="max-width" width="100%" >
					<?php echo $video->videotitle; ?></a>
					<div class="time-remaing"><?php echo $video->postdate; ?></div>
					</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="col-md-6">
			<div class="content">
				<?php foreach($posts as $post): ?>
				<div class="post">
					<div class="post-image">
						<a href="<?php echo base_url()."cricket-news/".$post->post_url."/".$post->ID; ?>">
							<img src="<?php echo base_url().$post->postimage; ?>" class="post-image">
							</a>
					</div>
					<div class="post-title">
						<a href="<?php echo base_url()."cricket-news/".$post->post_url."/".$post->ID; ?>"><?php echo $post->post_title; ?></a>
					</div>
					<div class="post-description">
					<?php if($post->post_excerpt){ 										
					echo $post->post_excerpt;
					}else{
						echo substr($post->post_content, 0,390);
					} 
					?>
					</div>
					<div class="read-more">
						<a href="<?php echo base_url()."cricket-news/".$post->post_url."/".$post->ID; ?>" class="post-readmore">Read more</a>
					</div>
				</div>
				<?php endforeach; ?>


			</div>
			<div class="read-more-posts-ajax">
				<a href="#" class="read-more-ajax">Read More</a>
			</div>
		</div>
		<div class="col-md-3">
			<div class="left-sidebar">
				<h2 class="sidebar-title">Player Search</h2>
				<div class="player-search">
					<div class="search-input">
						<input type="text" name="search-player" placeholder="Search Player" />
					</div>
					<div class="search-button">
						<input type="submit" value="GO" class="search-button-text">
					</div>
				</div>
			</div>
			<div class="left-sidebar">
			<h2 class="sidebar-title">LATEST PHOTOS</h2>
			
			<ul class="latest-news-sidebar">
				<?php 
				foreach($photos as $photo):?>
				<li><a href="<?php echo base_url()."cricket-photos/".$photo->url.$photo->ID; ?>">
				<?php echo $photo->photoname; ?>
				</a>
				<div class="time-remaing"><?php echo $photo->postdate; ?></div>
				</li>
				<?php endforeach; ?>

			</ul>
			</div>
			
		</div>
		</div>
	</div>
</section>
