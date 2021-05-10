        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-12 col-sm-12 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Webinar</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Tambah Webinar</li>
                        </ol>
                    </div>                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- Articles table Content -->
                <!-- ============================================================== -->

                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <?php echo form_open_multipart('webinar/save', ['class' => 'form-horizontal', 'method' => 'post']); ?>                
                          <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="title_webinar" class="form-control" id="title-webinar" placeholder="Masukkan judul webinar disini" required>
                          </div>
                          <div class="form-group">
                            <label>Lead Webinar</label>
                            <textarea name="lead_webinar" class="form-control lead-webinar" id="lead-webinar"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Webinar</label>
                            <textarea name="webinar" class="form-control" id="webinar-area" placeholder="" height="600"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Keywords</label>
                            <textarea name="keywords" class="form-control keywords" id="keywords"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control w-25" name="category" required>
                            <option value="" selected>Pilih Kategori</option>

                        <?php 
                        if($webinarkategori != null)
                        {
                            foreach($webinarkategori as $ac){
                        ?>
                                <option value="<?php echo $ac->id; ?>"><?php echo $ac->category_name; ?></option>
                        <?php 
                            }
                        }
                        ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Gambar Webinar</label>
                            <input class="form-control w-25" type="file" accept="image/*" name="userfile">
                          </div>
                          <div class="form-group">
                            <label>Status Webinar</label>
                            <select class="form-control w-25" name="status_webinar"required>
                                <option value="0">Draft</option>
                                <option value="1">Publish</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <center>
                                <input type="submit" class="btn btn-lg btn-info w-100" value="Tambah Webinar">
                            </center>
                          </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="<?php echo base_url(); ?>/res/admin/js/tinymce/tinymce.min.js"></script>
            
            <script>
                tinymce.init({
                    selector: "#webinar-area",
                    height:650,                
                    plugins: [
                        'wordcount'
                    ],
                    toolbar: 'insert | undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
                    setup: function(ed){
                        ed.on('submit', function(e){
                            ed.save(); 
                        });
                    }
                });
            </script>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->