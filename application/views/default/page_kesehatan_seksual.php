
		<div class="container">
			<center><h1 style="color: white;"><b>KESEHATAN REPRODUKSI</b></h1></center>
		<br><br>
			
			<div class="row">
			<?php 
			if($article == null)
			{
				echo "<div class='alert alert-info w-100 text-center'><p>Artikel kosong.</p></div>";
			}
			else{
				$no = $this->uri->segment('3') + 1;
				foreach($article as $ar)
				{
			?>
				<div class="col-sm-4 mt-5">
					<div class="row col-md-12">
						<div class="space_div">
							<a href="<?php echo site_url('ctrl/artikel/'.$ar->slug); ?>">
							<img class="article_img_home" src="<?php echo base_url('upload/img_article/'.$ar->img); ?>">
							<p class="konten"><?php echo $ar->title; ?></p>
							
						</div>
					</div>												
					<div class="row subtext_art">
						<div class="col-md-12 lead_article" >
							<p><?php echo $ar->lead_article; ?></p>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<button class="btn-size" class="ml-0 btn_home_3"><a href="<?php echo site_url('ctrl/artikel/'.$ar->slug); ?>"><b class="font_btn">READ MORE</b></a></button>
						</div>
					</div>
				</div>		
			<?php 
				}
			}
			?>				
			</div>
			<div class="mt-5 text-center mobile_pag">					
				<span class="pagination justify-content-center"><?php echo $this->pagination->create_links(); ?></span>
			</div>
		</div>
	</div> <br><br>		
	<br><br>
