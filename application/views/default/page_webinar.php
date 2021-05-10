<div>
   
   <!-- Display Artikel -->
   <div style="padding-top: 50px; background-color: white;" class="jumbotron jumbotron-fluid">
	 <div class="container">
		 <h4 class="display-4 text-center font-weight-bold">Webinar</h4>		 
	 </div>

	 	<div class="mt-5 text-center">					
			<span class="pagination justify-content-center">
			<?php $linkpage = $this->pagination->create_links(); echo $linkpage;?>
			</span>
		</div>

	 
	<?php
	foreach ($datawebinar as $key) {?>
	 <div class="container-fluid row p-5">
		 <div class="col">
		   <img width="90%" src="<?php echo base_url()?>/upload/img_article/<?php echo $key->img?>">
		 </div>
		 <div class="col">
		   <h2 class="px-4 mb-4"><?php echo $key->title; ?></h2>
		   <p class="text-justify px-4"><?php echo $key->lead_webinar?></p>
			 <button type="button" onclick="window.location.href='<?php echo site_url('ctrl/article/'.$key->slug); ?>'" style="margin-left: 75%" class="mt-4 btn btn-outline-secondary btn-round bg-danger text-white">
			   Learn More
			 </button>                  
		 </div>
	 </div>
	 <?php } ?>

		<div class="mt-5 text-center">					
				<span class="pagination justify-content-center">
				<?php echo $linkpage ?>
				</span>
		</div>
	 
   </div>  
   <!-- END Artikel -->