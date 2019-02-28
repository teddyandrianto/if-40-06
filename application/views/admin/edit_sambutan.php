<script src="<?php echo base_url();?>asset/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script>
   $(function () {
     CKEDITOR.replace('editor1');
     $(".textarea").wysihtml5();
     });
</script>

<div class="container" style="margin-top: 10px;">
  <div class="row">
    <div class="col-md-12">
      <div class="well wel-sm">
        <h4>Update Sambutan</h4>
        <p >kelas IF-40-06</p>
      </div>       
      <div class="col-md-12">         
        <hr>
        <div class="news-v3-in-sm no-padding">         
        <div class="content">
            <div class="row">
              <div class="col-md-6">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Update Sambutan Dosen Wali</h3>
                  </div>
                  <form role="form" action="<?php echo base_url();?>index.php/cpanel/update_sambutan" method="post" enctype="multipart/form-data" >
                    <div class="box-body">
                      <div class="form-group ">
                        <label for="exampleInputNama">Id</label>
                        <input type="text" class="form-control" id="id" value="<?php echo $id; ?>" name="id" placeholder="">
                      </div>
                      <div class="form-group ">
                        <label for="exampleInputNama">Nama Dosen Wali</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" placeholder="Masukan Nama">
                      </div>
                    </div>
                    <div class="form-group ">
                      <div class="box-body pad">
                        <textarea id="editor1" name="isi_sambutan" rows="10" cols="80">
                          <?php echo $isi_sambutan; ?>
                        </textarea>
                      </div>
                    </div>
                   <div class="box-body">
                    <div class="form-group ">
                      <label for="exampleInputNama">URL GAMBAR <SMALL>UKURAN 1368 x 406 px</SMALL></label>
                      <input type="file" name="gambar" class="form-control">
                    </div>
                    </div>
                    <div class="box-footer">
                      <button type="Submit" name="btnSubmite" class="btn btn-primary">Edit</button>
                    </div>
                  </form>
                </div>
                <hr>
              </div>
            </div>
          </section> 
        </div>
      </div>
    </div>
  </div>
</div>    