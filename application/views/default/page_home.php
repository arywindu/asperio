<div>

<!-- SLIDE -->
<div style="padding-top: 250px; padding-bottom: 200px;" class="jumbotron jumbotron-fluid bg-danger">
  <div class="img-desktop">
	  <img style="position: absolute; top: 58px;" class="image-home run-opacity text-right" src="<?php echo base_url(); ?>res/src/Ellipse.png">
  </div>
	  <div class="container">
		  <h1 class="run-animation display-4 font-weight-bold text-white">Technologies for teaching <br>and training top talents</h1>
		  <p class="lead text-white run-animation2">Modern talents are both through technology-assisted learning</p>
		  <button type="button" onclick="window.location.href='#ctu'" class="btn btn-outline-secondary run-animation btn-round bg-light font-weight-bold">Get Started</button>
	  </div>
</div>
 <!-- END SLIDE -->

 <!-- Partner LOGO -->
 <div class="container-fluid mt-1 mb-4 bg-carousel">
   <div class="row text-center p-1">
	  <div class="col"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/partners/LOGO UNIVERSITAS ISLAM INDONESIA.png"></div>
	  <div class="col"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/partners/LOGO UNIVERSITAS TRISAKTI.png"></div>
	  <div class="col"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/partners/LOGO-1024x1016.png"></div>
	  <div class="col"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/partners/Logo-Institut-teknologi-Bandung2.png"></div>
	  <div class="col"><img style="margin-top: -15px; height: 130px; width: 150px;" src="<?php echo base_url(); ?>res/src/partners/logosgu.png"></div>
	  <div class="col"><img style="margin-top: -15px; height: 153px; width: 150px;" src="<?php echo base_url(); ?>res/src/partners/ToyotaIndonesia-removebg-preview.png"></div>
	</div>
  </div>
<!-- Partenr End -->

<!-- OUR PRODUCT -->            
<div style="padding-top: 90px; padding-bottom: 100px;" class="jumbotron jumbotron-fluid bg-danger">
	  <div class="container">
		  <p class="font-title text-center text-white">Our Products</p>
		  <h5 class="text-white text-center">Our products help you teach and train talents across multipe industries using the newest and the best technologies</h5>
	  </div>

	  <div class="jumbotron jumbotron-fluid bg-danger">
		<div class="container">
			<div class="row text-center">
			  <div class="col zoom">
				<img id="1" onclick="ourProduct(id)" src="<?php echo base_url(); ?>res/src/partners/dobot.png" width="77%">
				<p class="text-white ml-4"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ROBOTICS</p>
			  </div>
			  <div class="col zoom">
				<img id="2" onclick="ourProduct(id)" src="<?php echo base_url(); ?>res/src/partners/simulator.png" width="70%">
				<p class="text-white"><br>SIMULATOR</p>
			  </div> 
			  <div class="col zoom">
				<img id="3" onclick="ourProduct(id)" src="<?php echo base_url(); ?>res/src/partners/vet.png" width="100%">
				<p class="text-white"><br>VET</p>
			  </div> 
			  <div class="col zoom">
				<img id="4" onclick="ourProduct(id)" src="<?php echo base_url(); ?>res/src/partners/lms.png" width="100%">
				<p class="text-white"><br>LMS</p>
			  </div>
			</div>    
		</div>
	</div>  

		  <!-- MENU ROBOTICS -->
		  <div id="robotic" style="display: none;">
			  <div class="container">
				  <div class="row text-center bg-round-white">
					  <button id="magician" onclick="clickProduct(id)" type="button" class="btn btn-round btn-light col mobile-btn-font2 text-dark">Magician</button>
					  &nbsp;
					  <button id="magician-lite" onclick="clickProduct(id)" type="button" class="btn btn-round btn-light col mobile-btn-font2 text-dark">Magician Lite</button>
					  &nbsp;
					  <button id="magician-pro" onclick="clickProduct(id)" type="button" class="btn btn-round btn-light col mobile-btn-font2 text-dark">Magician Pro</button>
					  &nbsp;
					  <button id="m1" onclick="clickProduct(id)" type="button" class="btn btn-round btn-light col mobile-btn-font2 text-dark">M1</button>
					  &nbsp;
					  <button id="mooz" onclick="clickProduct(id)" type="button" class="btn btn-round btn-light col mobile-btn-font2 text-dark">Mooz</button>
					  &nbsp;
					  <button id="cr" onclick="clickProduct(id)" type="button" class="btn btn-round btn-light col mobile-btn-font2 text-dark">CR Series</button>
				  </div>    
			  </div> 
		  </div>

		  <!-- MENU Simulator -->
		  <div id="simulator" style="display: none;">
			  <div class="container">
				  <div class="row bg-round-white">
					  <button id="simspray" onclick="clickProduct(id)" type="button" class="btn btn-round btn-light col mobile-btn-font2 text-dark">Simspray</button>&nbsp;   
					  <button id="bulldozer" onclick="clickProduct(id)" type="button" class="btn btn-round btn-light col mobile-btn-font2 text-dark">Bulldozer</button>&nbsp;
					  <button id="forklift" onclick="clickProduct(id)" type="button" class="btn btn-round btn-light col mobile-btn-font2 text-dark">Forklift</button>&nbsp;
					  <button id="hydraulic" onclick="clickProduct(id)" type="button" class="btn btn-round btn-light col mobile-btn-font2 text-dark">Hydraulic Excavator</button>&nbsp;
					  <button id="mining" onclick="clickProduct(id)" type="button" class="btn btn-round btn-light col mobile-btn-font2 text-dark">Mining Truck</button>&nbsp;
					  <button id="mobilecrane" onclick="clickProduct(id)" type="button" class="btn btn-round btn-light col mobile-btn-font2 text-dark">Mobile Crane</button>&nbsp;
					  <button id="tower" onclick="clickProduct(id)" ype="button" class="btn btn-round btn-light col mobile-btn-font2 text-dark">Tower Crane Simulator</button>
				  </div>    
			  </div> 
		  </div>

		  <!-- MENU LMS -->
		  <div id="lms" style="display: none;">
			  <div class="container">
				  <div class="row text-center bg-round-white">
					  <button type="button" class="btn btn-round btn-light mobile-btn-font2 col text-dark">Learning Management System</button>
				  </div>    
			  </div> 
		  </div>

		  <!-- MENU vet -->
		  <div id="vet" style="display: none;">
			  <div class="container">
				  <div class="row text-center bg-round-white">
					  <button type="button" class="btn btn-round btn-light mobile-btn-font2 col text-dark">Mechatronics</button>
					  &nbsp;
					  <button type="button" class="btn btn-round btn-light mobile-btn-font2 col text-dark">Pneumatics</button>
					  &nbsp;
					  <button type="button" class="btn btn-round btn-light mobile-btn-font2 col text-dark">Automitive</button>
					  &nbsp;
					  <button type="button" class="btn btn-round btn-light mobile-btn-font2 col text-dark">PLC Traning</button>
					  &nbsp;
					  <button type="button" class="btn btn-round btn-light mobile-btn-font2 col text-dark">Welding</button>
					  &nbsp;
					  <button type="button" class="btn btn-round btn-light mobile-btn-font2 col text-dark">IoT</button>
				  </div>    
			  </div> 
		  </div>

		  
		<!-- ifrmae  -->

			<iframe id="myProduct" style="display: none;" class="col mt-4" frameBorder="0" src="" height="1250" width="auto" title="description"></iframe>
			<script type="text/javascript">
				function clickProduct(value) {
					document.getElementById("myProduct").style.display = "block"
					document.getElementById("myProduct").src = "<?php echo base_url(); ?>/ourProduct/"+value+".html";
					}
			</script>

		<!-- here the our products -->             
		 
  </div>

<!-- END OUR PRODUCT -->


<!-- Display Artikel -->
<div style="padding-top: 50px; background-color: white;" class="jumbotron jumbotron-fluid">
<div class="container">
	<p class="font-title text-center">Testimoni Produk Kami</p>
</div>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	<ul class="carousel-indicators">
	  <li data-target="#demo" data-slide-to="0" class="bg-danger active"></li>
	  <li data-target="#demo" data-slide-to="1" class="bg-danger"></li>
	  <li data-target="#demo" data-slide-to="2" class="bg-danger"></li>
	  <li data-target="#demo" data-slide-to="3" class="bg-danger"></li>
	  <li data-target="#demo" data-slide-to="4" class="bg-danger"></li>
	</ul>
	<div class="carousel-inner2">
	  <div class="carousel-item active">
		<div class="carousel-caption">
		  <h3 class="text-dark mobile-btn-font">“Saya sangat kagum dengan kemampuan dan kinerja Dobot. 
			Selain bisa diprogram seperti layaknya robot sebenarnya di Industri juga memiliki 
			presisi yang tinggi dan harga yang relatif murah"
		  </h3><br>
		  <p class="text-dark">Tugino, S.T., M.T - Dosen Kuliah Robotik Kampus Institut Teknologi Nasional Yogyakarta</p>
		</div>
	  </div>
	  <div class="carousel-item">
		<div class="carousel-caption">
		  <h3 class="text-dark mobile-btn-font">"Menurut pendapat saya sebagai dosen, Dobot memiliki banyak fitur yg memudahkan 
			peningkatan wawasan mahasiswa dan dosen mulai dari pemrograman block & python , visual inspeksi, dan 3d printing."</h3>
		  <br>
		  <p class="text-dark">Lutfi, ST., MT. - Dosen OSP Politeknik ATI Makassar</p>
		</div>
	  </div>                    
	  <div class="carousel-item">
		<div class="carousel-caption">
		  <h3 class="text-dark mobile-btn-font">“saya senang mengajarkan dobot ke anak2 disamping  kmampuan dan kinerjanya  . 
			dobot ini sangat prktis untuk jadikan sebagai bahan belajar karna mudah di pelajari.”
		  </h3><br>
		  <p class="text-dark">Riza – Automation Manager PT. Techpack Asia</p>
		</div>
	  </div>
	  <div class="carousel-item">
		<div class="carousel-caption">
		  <h3 class="text-dark mobile-btn-font">“Dobot bisa dikatakan small investment, big improvement. Dengan kemampuannya multiple axis
			, Dobot dapat digunakan digunakan sebagai pengganti pekerjaan manual.”
		  </h3><br>
		  <p class="text-dark">Afrizal (Guru Smk Karya Guna 2 Bekasi)</p>
		</div>
	  </div>
	  <div class="carousel-item">
		<div class="carousel-caption">
		  <h3 class="text-dark mobile-btn-font">“Sebagai simulasi pendidikan robotik yang mendekati kondisi dunia industri pada sekolah vokasi sangat bermanfaat, 
			selain harga terjangkau kualitas memadai dan mudah dalam perawatannya.”
		  </h3><br>
		  <p class="text-dark">Muhammad Juliarto (Instruktur IoT dan Robotik Akademi Komunitas Toyota Indonesia)</p>
		</div>
	  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	<span class="text-dark carousel-control-prev-icon bg-danger" aria-hidden="true"></span>
	<span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	<span class="carousel-control-next-icon bg-danger" aria-hidden="true"></span>
	<span class="sr-only">Next</span>
  </a>
</div>
</div>
<!-- END Artikel -->

<!-- 3 menu -->
<div style="margin-top: 200px;" class="jumbotron jumbotron-fluid bg-danger">
  <div class="container">
	  <div class="row text-center">
		<div class="col">
		  <img src="<?php echo base_url(); ?>res/src/saveMoney.png" width="28%">
		  <p class="text-light mt-3 font-weight-bold">Save Money</p>
		</div>
		<div class="col">
		  <img src="<?php echo base_url(); ?>res/src/reduce.png" width="22%">
		  <p class="text-light mt-3 font-weight-bold">Reduce Waste</p>
		</div> 
		<div class="col">
		  <img src="<?php echo base_url(); ?>res/src/trainBetter.png" width="25%">
		  <p class="text-light mt-3 font-weight-bold">Train Better</p>
		</div> 
	  </div>    
  </div>
</div>  

<div style="margin-top: -45px;" class="jumbotron jumbotron bg-cover">
<div class="overlay"></div>
<div class="container-fluid" style="margin-bottom: 150px;">
  <h1 style="margin-top: 250px;" class="text-justify display-5 mb-1 text-center text-white"><b>We believe that reskilling and upskilling human <br>
	capital is the foundation of a sucessful organization</b></h1>
	<div class="text-center mt-4">
	  <button type="button" onclick="window.location.href='#ctu'" class="mt-4 btn btn-lg btn-outline-secondary btn-round bg-danger text-white font-weight-bold">
	   Request Demo
	  </button>
	</div>
</div>
</div>

<!-- 3 Menu END -->

<!-- Partner LOGO -->
<p class="text-center font-title">Our Customers</p>
<div class="bg-carousel">
 <div class="owl-carousel owl-theme mt-4 mb-4 p-4">
	  <div class="item"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/all/1577175973937.png"></div>
	  <div class="item"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/all/25501663YOUTUBESKANJA.png"></div>
	  <div class="item"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/all/D2-HtOCUYAEiF2W.png"></div>
	  <div class="item"><img style="height: 100px; width: 110px;" src="<?php echo base_url(); ?>res/src/all/download (1).png"></div>
	  <div class="item"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/all/logo (1).png"></div>
	  <div class="item"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/all/LOGO UNIVERSITAS ISLAM INDONESIA.png"></div>
	  <div class="item"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/all/LOGO UNIVERSITAS TRISAKTI.png"></div>
	  <div class="item"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/all/Logo-Institut-teknologi-Bandung2.png"></div>
	  <div class="item"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/all/logo-UI.png"></div>
	  <div class="item"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/all/Logo_Kemnaker.png"></div>
	  <div class="item"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/all/Logo_Telkom_University_potrait.png"></div>
	  <div class="item"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/all/logosgu.png"></div>
	  <div class="item"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/all/SMK KARYA GUNA 2 BEKASI.png"></div>
	  <div class="item"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/all/STTNAS_JOGJA.png"></div>
	  <div class="item"><img style="height: 100px; width: 100px;" src="<?php echo base_url(); ?>res/src/all/ToyotaIndonesia-removebg-preview.png"></div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

<script type="text/javascript">
		  $('.owl-carousel').owlCarousel({
			  loop:true,
			  margin:0,
			  nav:false,
			  dots:false,
			  autoplay:true,
			  autoplayTimeout:2000,
			  stagePadding:100,
			  responsive:{
				  0:{
					  items:1
				  },
				  600:{
					  items:3
				  },
				  1000:{
					  items:6
				  }
			  }
		  })
  </script>
<!-- Partenr End -->

<!-- Partner LOGO -->
<p class="text-center font-title bg-white p-4">Our Partners</p>
<div class="container">
<div class="row mt-1 mb-4 p-4 text-center">
  <div class="col zoom"><img src="<?php echo base_url(); ?>res/src/partners/dobot-logo_low_res.png" width="200px"></div>
  <div class="col zoom"><img src="<?php echo base_url(); ?>res/src/partners/Logo Simlog.png" width="200px"></div>
  <div class="col zoom"><img src="<?php echo base_url(); ?>res/src/partners/logo-vortex.png" width="200px"></div>
  <div class="col zoom"><img src="<?php echo base_url(); ?>res/src/partners/Simspray.png" width="200px"></div>
</div>
</div>
</div>

<!-- Partenr End -->

<!-- Display ContactUs -->
<div id="ctu" style="background-color: white;" class="jumbotron jumbotron-fluid">
<div class="container-fluid">
<div class="row">
<div class="col">
<h2 class="px-4 mb-4">Not sure we have the right solution for you? Contact us!</h2>
<p class="text-justify px-4">We’re always open to opportunities. In fact, a lot of our customers 
  find that they need a little bit of customization for their solution. Don’t worry, we got you.</p> 
<img class="img-hand image-mobile-hidden" src="<?php echo base_url(); ?>res/src/imgHand.png">
</div>

<div class="col text-center">
<form class="text-center frm-ctu p-4" action="<?php echo base_url(); ?>mail/contact.php" method="POST">
  <h4>Please help us fill out this form</h4>
	<br>
	<p class="font-weight-bolder">I am Interest in :</p>                
	<div class="row">
	  <div class="col">
		<input class="" type="checkbox" id="robotics" name="interest" value="robotics">
		  <label>Robotics</label>
	  </div>
	  <div class="col">
		<input class="" type="checkbox" id="simulator" name="interest" value="simulator">
		  <label>Simulator</label>
	  </div>
	  <div class="col">
		<input class="" type="checkbox" id="others" name="interest" value="others">
		  <label>Others</label>
	  </div>
	  <br><br>
	</div>  

	<div class="row">
		<input class="col txt-form" type="text" id="fname" name="fname" placeholder="First Name" required>
		<input class="col txt-form ml-3" type="text" id="lname" name="lname" placeholder="Last Name" required>
	</div>
	<br>
	<div class="row">
		<input class="col txt-form" type="text" id="company" name="company" placeholder="Company" required>
		<input class="col txt-form ml-3" type="text" id="phone" name="phone" placeholder="Phone" required>
	</div>
	<br>
	<div class="row">
		<input class="col txt-form" type="email" name="email" id="email" placeholder="Email" size="35%" required>
	</div>
	<br>
	<div class="row">
		<input class="col txt-area" name="message" type="text" id="message" placeholder="Message" size="30%" height="100">
	</div>
	<br>
		  <button type="submit" name="submit" style="background-color: #64B1C5;" class="col-6 mt-4 mr-4 btn btn-outline-secondary btn-round text-white font-weight-bold">
			Submit
		  </button>
</form> 
</div>
</div>
</div>
</div>  
<!-- END ContactUs -->

</div