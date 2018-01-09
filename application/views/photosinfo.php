<?php foreach($photosinfo as $value): ?>
<section id="single-page-conttent">
	<div class="container">
		<div class="row">
			<div class="col-md-8 paddingright0">
				<div class="score-card">
				
				<div class="header-section">
					<h1><?php echo $value->photoname; ?></h1>
					<ul class="venue-details">
						<li><b>Date:</b> <?php echo $value->postdate; ?> </li>
						
						<li><b>Series:</b><a href="http://www.livecricketinfo.com/cricket-series/<?php echo $value->series; ?>"> </a> </li>
					</ul>
				</div>
				<div class="content" style="overflow:hidden;">
				
					<div class="col-md-12">
					<?php echo $value->photocontent; ?>
					</div>
					
				</div>
				
				</div>
			</div>
			<div class="col-md-4 margintop15" >
			
			</div>
		</div>
	</div>
</section>

<?php endforeach; ?>