<div class="container" style="margin-top: 10px;">

        <div class="col-md-12">
            <div class="well wel-sm">
                <h4>Ubah Jadwal Mata Kuliah</h4>
                <p >kelas IF-40-06</p>
            </div>
            <div class="col-md-12">
              <div class="news-v3-in-sm no-padding">            
                <section class="content">
                  
                    <div class="col-md-6">
                      <div class="box box-primary ">
                        <form role="form" action="<?php echo base_url();?>index.php/cpanel/update_jadwal" method="post">
                          <div class="box-body">
                            <div class="form-group ">
                              <label for="exampleInputNama">Id</label>
                              <input type="text" class="form-control" id="id" value="<?php echo $id; ?>" name="id">
                            </div>
                            <div class="form-group ">
                              <label for="exampleInputNama">Hari</label>
                              <input type="text" class="form-control" id="hari" value="<?php echo $hari; ?>" name="hari" >
                            </div>
                            <div class="form-group">
                              <label for="exampleInputNama">Jam</label>
                              <input type="text" class="form-control" id="jam" value="<?php echo $jam; ?>" name="jam" placeholder="jj:mm - jj:mm">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputUername">Matakuliah</label>
                              <input type="text" class="form-control" id="mata_kuliah" value="<?php echo $mata_kuliah; ?>" name="mata_kuliah" placeholder="Masukan Mata Kuliah">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Kode</label>
                              <input type="text" class="form-control" id="kode" value="<?php echo $kode; ?>" name="kode" placeholder="Masukan Kode">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Ruangan</label>
                              <input type="text" class="form-control" id="ruang" value="<?php echo $ruang; ?>" name="ruang" placeholder="Masukan Ruangan">
                            </div>
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
