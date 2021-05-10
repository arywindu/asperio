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
                        <h3 class="text-themecolor m-b-0 m-t-0">Komentar</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Komentar</li>
                        </ol>
                    </div>                    
                    <div class="col-md-6 col-sm-4 mt-3">
                        <button class="btn btn-info float-right"><i class="fa fa-plus-circle"></i> Balas Komentar</button>
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
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title">Komentar</h4>
                                <div class="text-center">
                                <?php 
                                if(empty($comment)){
                                ?>
                                    <h2 class="font-light m-b-0"><i class="fa fa-file-text-o text-info"></i> 0</h2>
                                    <span class="text-muted">Komentar yang tersimpan</span>
                                <?php 
                                }
                                else
                                {                                
                                ?>
                                    <h2 class="font-light m-b-0"><i class="fa fa-file-text-o text-info"></i> <?php echo COUNT($comment); ?></h2>
                                    <span class="text-muted">Komentar yang tersimpan</span>
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
                
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Komentar</th>
                            <th>Tanggal & Jam</th>
                            <th>Artikel</th>
                            <th>Balasan Admin</th>
                            <th>Balas / Hapus</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $i = 1;
                        foreach($list_comment as $comment){
                        ?>
                          <tr>
                            <td><?php echo $i++; ?></td>
                            <td><a><?php echo $comment->username;?></a></td>
                            <td><?php echo $comment->comment; ?></td>
                            <td><?php echo $comment->comment_date; ?></td>
                            <td><?php echo $comment->id_article; ?></td>
                            <td></td>
                            <td><a href="#"><i class="fa fa-reply"></i> Balas</a>&nbsp;
                                <a href="#"><i class="fa fa-trash-o"></i> Hapus</a>
                            </td>
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