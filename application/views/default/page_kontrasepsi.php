
		<div class="container" id="KONTRASEPSI">
			<h1><center><b style="color: white;">KONTRASEPSI</b></center></h1>
			<br>
			<div class="row	">
				<div class="col-6 col-md-4 mt-4">
						<a href="<?php echo site_url('ctrl/kontrasepsi_pilkb/'); ?>">					
						<img class="img_kontrasepsi" src="<?php echo base_url(); ?>res/img/asset3.png" alt="kontrasepsi" ></a>					
				</div>
				<div class="col-6 col-md-4 mt-4">
				<a href="<?php echo site_url('ctrl/kontrasepsi_kondom/'); ?>">					
						<img class="img_kontrasepsi" src="<?php echo base_url(); ?>res/img/asset2.png" alt="kondom" >	</a>					
				</div>
				<div class=" col-6 col-md-4 mt-4">	
				<a href="<?php echo site_url('ctrl/kontrasepsi_kontra/'); ?>">				
						<img class="img_kontrasepsi" src="<?php echo base_url(); ?>res/img/asset1.png" alt="pilkb" ></a>				
				</div>			
				
			
				<div class="col-6 col-md-4 mt-4">
				<a href="<?php echo site_url('ctrl/kontrasepsi_suntikankb/'); ?>">					
						<img class="img_kontrasepsi" src="<?php echo base_url(); ?>res/img/asset4.png" alt="kontrasepsidarurat" ></a>					
				</div>
				<div class="col-6 col-md-4 mt-4">
				<a href="<?php echo site_url('ctrl/kontrasepsi_implan/'); ?>">					
						<img class="img_kontrasepsi" src="<?php echo base_url(); ?>res/img/asset5.png" alt="kondom" ></a>					
				</div>
				<div class="col-6 col-md-4 mt-4">					
						<a href="<?php echo site_url('ctrl/kontrasepsi_iud/'); ?>"><img class="img_kontrasepsi" src="<?php echo base_url(); ?>res/img/asset6.png" alt="iud" ></a>										
				</div>
			</div>
		</div>
		<br><br>


		<div class="container">
			<h3><center><b style="color: white;">ARTIKEL KONTRASEPSI</b></center></h3>
			<br>
			<div class="row">
			<?php 	
			if($article == null)
			{
				echo "<div class='alert alert-info w-100 text-center'><p>Artikel kosong.</p></div>";
			}
			else{
				foreach($article as $ar)
				{
			?>
					<div class="col-sm-4 mt-5">
						<div class="row col-md-12 ">
							<div class="space_div">
								<a href="<?php echo site_url('ctrl/artikel/'.$ar->slug); ?>">
								<img class="article_img_home" src="<?php echo base_url('upload/img_article/'.$ar->img); ?>">
								<p class="konten"><?php echo $ar->title; ?></p>
								
							</div>
						</div>												
						<div class="row subtext_art">
							<div class="col-md-12 lead_article" >
								<?php echo $ar->lead_article; ?>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-12">
								<button class="btn-size" class="ml-0 btn_home_3" class="mt-2"><a href="<?php echo site_url('ctrl/artikel/'.$ar->slug); ?>"><b class="font_btn">READ MORE</b></a></button>
							</div>
						</div>
					</div>	
			<?php 
				}
			}
			?>
			</div>
			<div class="mt-5 text-center">					
				<span class="pagination justify-content-center"><?php echo $this->pagination->create_links(); ?></span>
			</div>
		</div>
		<br><br>
			