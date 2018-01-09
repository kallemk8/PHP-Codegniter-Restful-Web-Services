
<?php foreach($playerinfo as $value): ?>
<section id="single-page-conttent" >
	<div class="container">
		<div class="row">
			<div class="col-md-12" >
				
				<div class="row">
					<div class="col-md-12" >
						<h2 style="background: #fff; padding:15px 15px; margin: 15px 0px 0px 0px;"><?php echo $value->fullname; ?></h2>
						<p style="background: #fff;  padding:15px 15px; margin: 0px 0px 15px 0px;"><?php echo $value->aboutus; ?></p>
					</div>
					
				</div>
				
			</div>

		</div>
	</div>
</section>
<?php endforeach; ?>