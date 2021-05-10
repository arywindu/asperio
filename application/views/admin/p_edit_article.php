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
                            <li class="breadcrumb-item active">Edit Artikel "<?php echo $selected_article[0]->title; ?>"</li>
                        </ol>
                    </div>                    
                </div>

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
                        
                        <?php echo form_open_multipart('ctrladmin_article/update_article/'.$selected_article[0]->id, ['class' => 'form-horizontal', 'method' => 'post']); ?>                
                          <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="title_article" class="form-control" id="title-article" placeholder="Masukkan judul artikel disini" required value="<?php echo $selected_article[0]->title; ?>">
                          </div>
                          <div class="form-group">
                            <label>Lead artikel</label>
                            <textarea name="lead_article" class="form-control lead-article" id="lead-article"><?php echo $selected_article[0]->lead_article; ?></textarea>
                          </div>
                          <div class="form-group">
                            <label>Artikel</label>
                            <textarea name="article" class="form-control" id="article" placeholder="" height="600">
                                <?php echo $selected_article[0]->article; ?>
                            </textarea>
                          </div>
                          <div class="form-group">
                            <label>Keywords</label>
                            <textarea name="keywords" class="form-control" id="keywords">
                                <?php echo $selected_article[0]->keywords; ?>
                            </textarea>
                          </div>
                          <div class="form-group">
                            <label>Kategori</label>
                            <select class="form-control w-25" name="category" required>
                        <?php 
                        if($article_category != null)
                        {

                            foreach($article_category as $ac){
                        ?>
                                <option value="<?php echo $ac->id; ?>" <?php if($selected_article[0]->category == $ac->category_name){ echo "selected"; } ?>><?php echo $ac->category_name; ?>
                                    
                                </option>
                        <?php 
                            }
                        }
                        ?>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Gambar Artikel</label>
                            <img src="<?php echo base_url('upload/img_article/'.$selected_article[0]->img); ?>" style="width: 110px;">
                            <a class="btn btn-warning" href="#" data-toggle="modal" data-target="#popUpChangeImage"><i class="fa fa-edit"></i> Ganti foto</a>
                          </div>
                          <div class="form-group">
                            <?php 
                            if($selected_article[0]->is_published == '1'){
                            ?>
                            <label>Status Artikel (Published)</label>
                            <?php 
                            }
                            else{
                            ?>
                            <label>Status Artikel (Draft)</label>
                            <?php 
                            }
                            ?>
                            <select class="form-control w-25" name="status_article"required>
                                <option value="0" <?php if($selected_article[0]->is_published == '0') { echo "selected"; }?>>Draft</option>
                                <option value="1" <?php if($selected_article[0]->is_published == '1') { echo "selected"; }?>>Publish</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <center>
                                <input type="submit" class="btn btn-lg btn-info w-100" value="Ubah artikel">
                            </center>
                          </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>

            <!-- Pop up dialog for change image article -->
            <div class="modal fade" id="popUpChangeImage" role="dialog">
                <div class="modal-dialog">   
                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Ganti foto rtikel</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>                          
                    </div>
                    <div class="modal-body text-center">
                        <p class="text-center">Pilih gambar untuk menggantikan foto artikel</p>
                        <?php echo form_open_multipart('ctrladmin_article/update_image_article/'.$selected_article[0]->id, ['class' => 'form-horizontal', 'method' => 'post']);?>
                            <input type="file" name="userfile" accept="image/*" required>
                            <div class="row mt-5">
                                <div class="col-md-6 col-xs-12">
                                    <input type="submit" class="btn btn-warning" value="Ganti gambar">
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <a href="#" class="btn btn-info" data-dismiss="modal">Batal</a>
                                </div>                                
                            </div>
                        </form>
                    </div>                       
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