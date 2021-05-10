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
                        <h3 class="text-themecolor m-b-0 m-t-0">Image Slider</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Image slider utama</li>
                        </ol>
                    </div>                    
                    <div class="col-md-6 col-sm-4 mt-3">
                        <button class="btn btn-info float-right"><i class="fa fa-plus-circle"></i> Tambah image</button>
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
                                <h4 class="card-title">Jumlah Gambar</h4>
                                <div class="text-center">
                                    <h2 class="font-light m-b-0"><i class="fa fa-image text-info"></i> 12</h2>
                                    <span class="text-muted">Gambar yang tersimpan</span>
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
                
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th class="tr-thumb-img-table">Image</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        for($i=1;$i<10;$i++){
                        ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><a href="<?php echo site_url('ctrladmin/edit_article/'); ?>"><img src="<?php echo base_url(); ?>/res/img/BAN2.png" class="thumb-img-slider"/></a></td>
                            <td>22-03-2019</td>
                            <td>Aktif</td>
                            <td><a href="#"><i class="fa fa-trash-o"></i>  </a><a href="#" class=""><i class="fa fa-pencil-square-o"></i></a></td>
                          </tr>
                        <?php 
                        }
                        ?>                    
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->