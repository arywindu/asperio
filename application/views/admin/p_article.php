        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-6 col-sm-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Artikel</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Artikel</li>
                        </ol>
                    </div>                    
                    <div class="col-md-6 col-sm-4 mt-3">
                        <a href="<?php echo site_url('ctrladmin/add_article'); ?>" class="btn btn-info float-right"><i class="fa fa-plus-circle"></i> Tambah artikel</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Jumlah Artikel</h4>
                                <div class="text-center">
                                <?php 
                                if(empty($article)){
                                ?>
                                    <h2 class="font-light m-b-0"><i class="fa fa-file-text-o text-info"></i> 0</h2>
                                    <span class="text-muted">Artikel yang tersimpan</span>
                                <?php 
                                }
                                else
                                {                                
                                ?>
                                    <h2 class="font-light m-b-0"><i class="fa fa-file-text-o text-info"></i> <?php echo COUNT($article); ?></h2>
                                    <span class="text-muted">Artikel yang tersimpan</span>
                                <?php 
                                }
                                ?>
                                </div>
                                <!--
                                <span class="text-success">80%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
	                            -->
                            </div>
                        </div>
                    </div>                    
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- Articles table Content -->
                <!-- ============================================================== -->
                <?php
                  $success_msg= $this->session->flashdata('success_msg');
                  $error_msg= $this->session->flashdata('error_msg');
                  if($success_msg){
                ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <?php echo $success_msg; ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <?php
                  }
                  if($error_msg){
                ?>                    
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <?php echo $error_msg; ?>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                <?php
                  }
                ?>
                <div class="table-responsive">
                <?php
                if($article != null)
                {
                    // echo COUNT($article);
                ?>                   
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Author</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $i = 1;
                        foreach($article as $ar){
                        ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><a href="<?php echo site_url('ctrladmin/edit_article/'.$ar->id); ?>"><?php echo $ar->title; ?></a></td>
                            <td><?php echo $ar->category; ?></td>
                            <td><?php echo $ar->author; ?></td>
                            <?php 
                            $timestamp = strtotime($ar->created_date);                        
                            $date = date('d-M-Y', $timestamp);
                            ?>
                            <td><?php echo $date; ?></td>
                            <?php 
                            if($ar->is_published == '1')
                            {
                                $status = "Published";
                            }
                            else
                            {
                                $status = "Draft";
                            }
                            ?>
                            <td><?php echo $status; ?></td>
                            <td><a href="#" data-toggle="modal" data-target="#popUpDelete<?php echo $ar->id; ?>"><i class="fa fa-trash-o text-danger"></i>  </a><a href="<?php echo site_url('ctrladmin/edit_article/'.$ar->id); ?>" class=""><i class="fa fa-pencil-square-o"></i></a></td>
                          </tr>
                        <?php 
                        $i++;
                        }

                        ?>                    
                        </tbody>
                    </table>
                <?php 
                }
                else{
                ?>
                     <div class="alert alert-info">
                        <p>Artikel kosong.</p>
                    </div>
                <?php 
                }
                ?>

                <!--  Looping script pop up modal delete article -->
                <?php 
                foreach($article as $ar)
                {
                ?>
                <div class="modal fade" id="popUpDelete<?php echo $ar->id; ?>" role="dialog">
                    <div class="modal-dialog">   
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Konfirmasi hapus artikel</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>                          
                        </div>
                        <div class="modal-body text-center">
                            <p class="text-center">Apakah anda yakin ingin menghapus artikel <b>"<?php echo $ar->title; ?>"</b>?</p>
                            <p class="text-center">Aksi ini tidak dapat dibatalkan.</p>                 

                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <a href="<?php echo site_url('ctrladmin_article/delete_article/'.$ar->id); ?>" class="btn btn-danger">Hapus</a>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <a href="#" class="btn btn-info" data-dismiss="modal">Batal</a>
                                </div>                                
                            </div>
                        </div>                       
                      </div>              
                    </div>
                </div>
                <?php
                }
                ?>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->