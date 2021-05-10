<div class="container">
	<?php echo form_open('ctrl/search'); ?>
		<input type="text" name="keyword" required placeholder="<?php echo $title_web; ?>" id="keyword">
		<button onclick="myFunction()" style="color: white;background-color: #29C6C5; border: none; padding: 10px;" class="btn-block btn_search" type="submit" name="search_submit" value="Cari">Submit</button>
	<?php echo form_close() ?>
 </div>

<br><br>
 	
				<h3 id="keyword" class="text-center text-white mb-3">"<?php echo $title_web; ?>"</h3>


	<table class="table table-borderless text-center table-hover table-striped">
		
 		<thead>
			<?php foreach($bb_articles as $bb_article) { ?>
				<tbody>
				<tr>
					<div class="td text-center container">
						<br>
						<a href="<?php echo base_url('ctrl/artikel/'.$bb_article->slug); ?>">
						<img class="w-50" src="<?php echo base_url('upload/img_article/'.$bb_article->img); ?>">
						<h5 class="text-center" style="font-weight: bold;"><?php echo $bb_article->title; ?></h5>
						<p class="search_text"><?php echo $bb_article->lead_article; ?></p></a>
						<br>
					</div>
				</tr>
				</tbody>
			<?php } ?>
 		</thead>
	</table>

</body>