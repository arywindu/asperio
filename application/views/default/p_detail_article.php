		<div class="container">
			<center><p class="text_p"><?php echo $detail_article[0]->title; ?></p></center>
			<br>
				<div class="col-md-12">
					<img src="<?php echo base_url('upload/img_article/'.$detail_article[0]->img); ?>" class="mx-auto d-block" alt="Kunyit" width="50%" height="50%">
					<br>
					<div class="text_p_sub text-white">
						<p><?php echo $detail_article[0]->article; ?></p>
					</font>
				</div>
			</div>	
		</div>
	
		<div>
			<center>
		  <a class=" mb-4 fab fa-facebook" href="https://www.facebook.com/sharer.php?<?php echo $url_share; ?>" target="blank"></a>
		  <a class="fab fa-line" href="https://social-plugins.line.me/lineit/share?url=<?php echo $url_share; ?>" target="blank"></a>
		  <a class="fab fa-whatsapp" href="whatsapp://send?text=<?php echo $url_share; ?>" target="blank"></a></li>
		  </li>
		  	</center>
		</div>

		<div class="container comment_bg" id="resultstable_noborder">
	<fieldset>		
		<h3 class="text-center" id="comment_section" style="background-color: #fbef8c; color: #35c6c4;"><b><i class="fas fa-comment"> KOMENTAR </b></i></h3><hr>
		<?php 
			foreach ($data_comment as $comment) {
		?>
			<div class="kotak">
				<p style="font-size: 18px;" class="font-weight-bold komen_text"><?php echo $comment->username; ?> , <?php echo $comment->comment_date; ?>
				<p class="komen_text"><?php echo $comment->comment; ?></p>
				<a class="text-white" style="font-size:14px"><i class="fa fa-comment"></i> Reply</a>
				<hr>
			</div>	
		<?php 
		}
		?>
	</fieldset>
</div>			<br><br>

			<!-- Form Komen -->
		<div class="komen_form container mb-5">
		<?php
        $success_msg= $this->session->flashdata('success_msg');
        $error_msg= $this->session->flashdata('error_msg');
        
        if($success_msg){
        ?>
	        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
	        	<?php echo $success_msg; ?>
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	            	<span aria-hidden="true">&times;</span>
	        	</button>
	        </div>
        <?php
        }
        
        if($error_msg){
        ?>                    
        	<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
            	<?php echo $error_msg; ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
        }
        ?>
		<?php echo form_open('ctrl/create_comment/'.$slug) ?>	
			<input type="hidden" name="article_id" value="<?php echo $detail_article[0]->id;?>">
			<?php 
			if($this->session->is_visitor_online == '1'){
			?>
			<textarea name="comment" required placeholder="Ketik Komentar"></textarea>
			<input type="submit" value="Send" />
			<?php 
			}
			else{
			?>
				<textarea disabled name="comment" required placeholder="Ketik Komentar"></textarea>
				<input onclick="modal" data-toggle="modal" data-target="#myModal" type="submit" disabled="disabled" value="Login untuk Komentar"/>
			<?php 
			}	
			?>
		<?php echo form_close() ?>
		</div>

		<!-- Form Admin Komen -->
		
		<?php echo form_open('ctrl/create_comment') ?>	
			<?php 
			if($this->session->is_online == '1'){
			?>
			<div class="komen_form container mb-5">	
			<textarea name="comment" required placeholder="Admin Komentar"></textarea>
			<input type="submit" value="Admin Send" />
			<?php 
			}
			else{
			?>
				
			<?php 
			}	
			?>
		</div>
		<?php echo form_close() ?>
		


		<!-- Related article begin -->
		<div class="container">
			<h3 class="mb-5 text-center"><b class="artikel">RELATED ARTICLE</b></h3>			
			<div class="row">
			<?php 
			if($related_article == null)
			{
				echo "<div class='alert alert-info w-100 text-center'><p>Tidak ada artikel terkait.</p></div>";
			}
			else
			{
				foreach($related_article as $ra){
			?>	
					<div class="col-sm-4 mt-5">
						<div class="row col-md-12 ">
							<div class="space_div">
								<a href="<?php echo site_url('ctrl/artikel/'.$ra->slug); ?>">
								<img class="article_img_home" src="<?php echo base_url('upload/img_article/'.$ra->img); ?>">
								<p class="konten"><?php echo $ra->title; ?></p>
								
							</div>
						</div>												
						<div class="row subtext_art">
							<div class="col-md-12 lead_article" >
								<?php echo $ra->lead_article; ?>
							</div>
						</div>
						<div class="row mt-3">
							<div class="col-md-12">
								<button class="btn-size" class="ml-0 btn_home_3" class="mt-2"><a href="<?php echo site_url('ctrl/artikel/'.$ra->slug); ?>"><b class="font_btn">READ MORE</b></a></button>
							</div>
						</div>
					</div>	
			<?php 
				}
			}
			?>				
			</div>
			<h3 class="text-center mt-5"><b class="artikel">#TakeCTRL with Berani Berencana</b></h3>
			</div>
			<br><br>