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
                        <h3 class="text-themecolor m-b-0 m-t-0">Data Administrator</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Administrator</li>
                        </ol>
                    </div>                    
                    <div class="col-md-6 col-sm-4 mt-3">
                        <button class="btn btn-info float-right"><i class="fa fa-plus-circle"></i> Tambah admin</button>
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
                                <h4 class="card-title">Total administrator</h4>
                                <div class="text-center">
                                    <h2 class="font-light m-b-0"><i class="fa fa-mortar-board m-r-10 text-info"></i>1402</h2>
                                    <span class="text-muted">Akun administrator yang terdaftar</span>
                                </div>
                                <!--
                                <span class="text-info">30%</span>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" style="width: 30%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
                            <th>Username</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>No. Telepon</th>
                            <th>Opsi</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        for($i=1;$i<10;$i++){
                        ?>
                          <tr>
                            <td><?php echo $i; ?></td>
                            <td><a href="<?php echo site_url('ctrladmin/edit_registrant/'); ?>">joniii_123</a></td>
                            <td>Joni Balaring</td>                            
                            <td>john@example.com</td>
                            <th>081292929</th>
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