		
		<br><br><br><br>
		<div class="container">
			<h1 class=".text-secondary text-center"><?php echo $detail_webinar[0]->title; ?></h1>
			<br>
				<div class="col-md-12">
					<img src="<?php echo base_url('upload/img_webinar/'.$detail_webinar[0]->img); ?>" class="mx-auto d-block" alt="" width="75%" height="75%">
					<br>
					<div class="text-secondary">
						<p class="text-dark"><?php echo $detail_webinar[0]->webinar; ?></p>
				</div>
			</div>	
		</div>
	
		<!-- <div>
			<center>
			<a class=" mb-4 fab fa-facebook" href="https://www.facebook.com/sharer/sharer.php?<?php echo $url_share; ?>" target="blank">fb</a>
			<a class="fab fa-line" href="https://social-plugins.line.me/lineit/share?url=<?php echo $url_share; ?>" target="blank">line</a>
			<a class="fab fa-whatsapp" href="whatsapp://send?text=<?php echo $url_share; ?>" target="blank">wa</a></li>
			</li>
		  	</center>
		</div> -->

		<br><br>
		<!-- Related webinar begin -->
		<div class="container">
			<h3 class="mb-5 text-center"><b class="artikel">RELATED webinar</b></h3>			
			<div class="row">
			<?php 
			if($related_webinar == null)
			{
				echo "<div class='alert alert-info w-100 text-center'><p>Tidak ada artikel terkait.</p></div>";
			}
			else
			{
				foreach($related_webinar as $ra){
			?>	
					<div class="col-sm-4 mt-5">
						<div class="row col-md-12 ">
							<div>
								<a href="<?php echo site_url('ctrl/webinar/'.$ra->slug); ?>">
								<img class="webinar_img_home" src="<?php echo base_url('upload/img_webinar/'.$ra->img); ?>" width="75%">
								<p class="text-dark"><?php echo $ra->title; ?></p>
								
							</div>
						</div>												
						<div class="row mt-3">
							<div class="col-md-12">
								<button class="mt-4 btn btn-outline-secondary btn-round bg-danger text-white" class="mt-2">
									<a href="<?php echo site_url('ctrl/webinar/'.$ra->slug); ?>">
										<b class="text-white">READ MORE</b>
									</a></button>
							</div>
						</div>
					</div>	
			<?php 
				}
			}
			?>				
			</div>
			<h3 class="text-center mt-5"><b class="artikel"></b></h3>
			</div>
			<br><br>