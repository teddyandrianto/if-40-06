<script src="<?php echo base_url();?>asset/plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<script>
    $(function () { 
    CKEDITOR.replace('editor1');
    $(".textarea").wysihtml5();
    });
</script>

<div class="container" style="margin-top: 10px;">
    <div class="col-md-12">
        <div class="well wel-sm">
          <h4>Tambah Pengumuman</h4>
          <p >kelas IF-40-06</p>
        </div>
        <div class="col-md-12 ">     
          <div class="news-v3-in-sm no-padding">          
            <section class="content">
              <div class="col-md-6">
                <div class="box box-primary"> 
                  <form role="form" action="<?php echo base_url();?>index.php/cpanel/proses_add_pengumuman" method="post">
                    <div class="box-body">
                      <div class="form-group ">
                        <label for="exampleInputNama">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukan Judul">
                      </div>
                    </div>
                    <div class="form-group ">
                      <div class="box-body pad">
                        <textarea id="editor1" name="isi" rows="50" cols="80">
                        </textarea>
                      </div>
                    </div> 
                    <div class="box-footer">
                      <button type="Submit" name="btnSubmite" class="btn btn-primary">Post</button>
                    </div>
                  </form>
                </div>
              </div>
            </section>  
          </div>
        </div>
    </div>
</div>