<?php foreach($postinfo as $value): ?>
<section id="single-page-conttent">
	<div class="container">
		<div class="row">
			<div class="col-md-8 paddingright0">
				
				<div class="score-card">
				<div class="header-section">
					<h1><?php echo $value->post_title; ?></h1>
					<ul class="venue-details">
						<li><b>Date:</b> <?php echo $value->post_date; ?> </li>
					</ul>
				</div>
				<div class="content">
				<img src="http://www.livecricketinfo.com/<?php echo $value->postimage; ?>" width="100%"  class="" />
				<br/>
				<br/>
				
				<?php echo $value->post_content; ?>
				</div>
				
				</div>
			</div>
			<div class="col-md-4">
				
			</div>
		</div>
	</div>
</section>

<?php endforeach; ?>