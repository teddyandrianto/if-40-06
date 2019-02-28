<div class="container" style="margin-top: 10px;">
  <div class="col-md-12">
    <div class="well wel-sm">
      <h4>Edit Mahasiswa</h4>
      <p >kelas IF-40-06</p>
    </div>
    <div class="col-md-12">
      <div class="news-v3-in-sm no-padding">              
        <section class="content">
          <div class="col-md-6">
            <div class="box box-primary">
              <form role="form" action="<?php echo base_url();?>index.php/cpanel/update_mahasiswa" method="post">
                <div class="box-body">
                  <div class="form-group">
                    <label for="exampleInputNama">Nama</label>
                    <input type="text" class="form-control" id="nama" value="<?php echo $nama; ?>" name="nama" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputNama">NIM</label>
                    <input type="text" class="form-control" id="nim" value="<?php echo $nim; ?>" name="nim" placeholder="Masukan NIM">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUername">Email</label>
                    <input type="email" class="form-control" id="email" value="<?php echo $email; ?>" name="email" placeholder="Masukan Email">
                  </div>
                  <div class="box-footer">
                    <button type="Submit" name="btnSubmite" class="btn btn-primary">Edit</button>
                  </div>
              </form>
            </div>
          </div>
        </section> 
      </div>
    </div>
  </div>
</div>