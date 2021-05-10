<div>
   
      <!-- Display Artikel -->
      <div style="padding-top: 50px; background-color: white;" class="jumbotron jumbotron-fluid">
        <div class="container">
          <br><br>
            <h4 class="display-4 text-center font-weight-bold">Katalog</h4>
        </div>

      <div class="container row">

        <div class="container col-md-3 col-sm-12 mt-5">
          <div class="card" style="width:350px">
            <img class="card-img-top" src="<?php echo base_url(); ?>res/src/k1.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">KATALOG INDUSTRIAL</h4>
              <a href="#" data-toggle="modal" data-target="#exampleModal1" class="btn stretched-link text-white" style="background-color: #64B1C5">Download</a>
            </div>
          </div>
        </div>

        <div class="container col-md-3 col-sm-12 mt-5">
          <div class="card" style="width:350px">
            <img class="card-img-top" src="<?php echo base_url(); ?>res/src/k2.png" alt="Card image" style="width:100%">
            <div class="card-body">
              <h4 class="card-title">KATALOG EDUKASI</h4>
              <a href="#" data-toggle="modal" data-target="#exampleModal2" class="btn stretched-link text-white" style="background-color: #64B1C5">Download</a>
            </div>
          </div>
        </div>

        <div class="container col-md-3 col-sm-12 mt-5">
          <div class="card" style="width:350px">
            <img class="card-img-top mx-auto" src="<?php echo base_url(); ?>res/src/k3.png" alt="Card image" style="width:50%">
            <div class="card-body">
              <h4 class="card-title">KATALOG SIMULATOR</h4>
              <a href="#" data-toggle="modal" data-target="#exampleModal3" class="btn stretched-link text-white" style="background-color: #64B1C5">Download</a>
            </div>
          </div>
        </div>
       
      </div>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Download Katalog</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      
                      <div class="col text-center">
                        <form class="text-center p-4" action="<?php echo base_url(); ?>mail/contact2.php" method="POST">
                          <h4>Silakan isi form dibawah berikut untuk melanjutkan download</h4>
                            <br>        
                            <div class="row">
                                <input class="col txt-form" type="text" id="fname" name="fname" placeholder="First Name" required>
                                <input class="col txt-form ml-3" type="text" id="lname" name="lname" placeholder="Last Name" required>
                            </div>
                            <br>
                            <div class="row">
                                <input class="col txt-form" type="text" id="company" name="company" placeholder="Company" required>
                                <input class="col txt-form ml-3" type="number" id="phone" name="phone" placeholder="Phone" required>
                            </div>
                            <br>
                            <div class="row">
                                <input class="col txt-form" type="email" name="email" id="email" placeholder="Email" size="35%" required>
                            </div>
                            <br>
                            <div class="row">
                                <input class="col txt-area" type="text" name="message" id="message" placeholder="Message" size="30%" height="100" required>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" name="submit" class="btn btn-primary">Download</button>
                            </div>
                        </form> 
                      </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>

              <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Download Katalog</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      
                      <div class="col text-center">
                        <form class="text-center p-4" action="<?php echo base_url(); ?>mail/contact3.php" method="POST">
                          <h4>Silakan isi form dibawah berikut untuk melanjutkan download</h4>
                            <br>        
                            <div class="row">
                                <input class="col txt-form" type="text" id="fname" name="fname" placeholder="First Name" required>
                                <input class="col txt-form ml-3" type="text" id="lname" name="lname" placeholder="Last Name" required>
                            </div>
                            <br>
                            <div class="row">
                                <input class="col txt-form" type="text" id="company" name="company" placeholder="Company" required>
                                <input class="col txt-form ml-3" type="number" id="phone" name="phone" placeholder="Phone" required>
                            </div>
                            <br>
                            <div class="row">
                                <input class="col txt-form" type="email" id="email" name="email" placeholder="Email" size="35%" required>
                            </div>
                            <br>
                            <div class="row">
                                <input class="col txt-area" type="text" name="message" id="message" placeholder="Message" size="30%" height="100" required>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" name="submit" class="btn btn-primary">Download</button>
                            </div>
                        </form> 
                      </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>

              <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Download Katalog</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      
                      <div class="col text-center">
                        <form class="text-center p-4" action="<?php echo base_url(); ?>mail/contact4.php" method="POST">
                          <h4>Silakan isi form dibawah berikut untuk melanjutkan download</h4>
                            <br>        
                            <div class="row">
                                <input class="col txt-form" type="text" id="fname" name="fname" placeholder="First Name" required>
                                <input class="col txt-form ml-3" type="text" id="lname" name="lname" placeholder="Last Name" required>
                            </div>
                            <br>
                            <div class="row">
                                <input class="col txt-form" type="text" id="company" name="company" placeholder="Company" required>
                                <input class="col txt-form ml-3" type="number" id="phone" name="phone" placeholder="Phone" required>
                            </div>
                            <br>
                            <div class="row">
                                <input class="col txt-form" type="email" name="email" id="email" placeholder="Email" size="35%" required>
                            </div>
                            <br>
                            <div class="row">
                                <input class="col txt-area" type="text" name="message" id="message" placeholder="Message" size="30%" height="100" required>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" name="submit" class="btn btn-primary">Download</button>
                            </div>
                        </form> 
                      </div>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <!-- end modal -->