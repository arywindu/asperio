<div class="container">
	<?php echo form_open('ctrl/search');?>
		<input type="text" name="keyword" required placeholder="Cari Artikel..." value="">
		<button onclick="myFunction()" style="color: white;background-color: #29C6C5; border: none; padding: 10px;" class="btn-block btn_search" type="submit" name="search_submit" value="Cari">Submit</button>
	<?php echo form_close() ?>
 </div>


<br><br>
