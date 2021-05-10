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
                        <h3 class="text-themecolor m-b-0 m-t-0">Artikel</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Tambah Artikel</li>
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
                        <?php echo form_open_multipart('ctrladmin_article/add_article', ['class' => 'form-horizontal', 'method' => 'post']); ?>                
                          <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="title_article" class="form-control" id="title-article" placeholder="Masukkan judul artikel disini" required>
                          </div>
                          <div class="form-group">
                            <label>Lead artikel</label>
                            <textarea name="lead_article" class="form-control lead-article" id="lead-article"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Artikel</label>
                            <textarea name="article" class="form-control" id="article" placeholder="" height="600"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Keywords</label>
                            <textarea name="keywords" class="form-control keywords" id="keywords"></textarea>
                          </div>
                          <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control w-25" name="category" required>
                        <?php 
                        if($article_category != null)
                        {
                            foreach($article_category as $ac){
                        ?>
                                <option value="<?php echo $ac->id; ?>"><?php echo $ac->category_name; ?></option>
                        <?php 
                            }
                        }
                        ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Gambar Artikel</label>
                            <input class="form-control w-25" type="file" accept="image/*" name="userfile">
                          </div>
                          <div class="form-group">
                            <label>Status Artikel</label>
                            <select class="form-control w-25" name="status_article"required>
                                <option value="0">Draft</option>
                                <option value="1">Publish</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <center>
                                <input type="submit" class="btn btn-lg btn-info w-100" value="Tambah artikel">
                            </center>
                          </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
            <script type="text/javascript" src="<?php echo base_url(); ?>/res/admin/js/tinymce/tinymce.min.js"></script>
            
            <script>
                tinymce.init({
                    selector: "#article",
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