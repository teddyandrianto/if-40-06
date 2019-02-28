<div class="container" style="margin-top: 10px;">
    <div class="col-md-12">
        <div class="well wel-sm">
          <h4>Input Jadwal Kuliah Baru</h4>
          <p >kelas IF-40-06</p>
        </div>
        <div class="col-md-12">
          <div class="news-v3-in-sm no-padding">
            <section class="content">
              <div class="col-md-6">
                <div class="box box-primary"> 
                  <form role="form" action="<?php echo base_url();?>index.php/cpanel/proses_add_jadwal" method="post">
                    <div class="box-body">
                      <div class="form-group">
                        <label for="hari">Hari</label>
                        <select class="form-control" id="hari" name="hari">
                            <option>Senin</option>
                            <option>Selasa</option>
                            <option>Rabu</option>
                            <option>Kamis</option>
                            <option>Jumat</option>
                            <option>Sabtu</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputNama">Jam</label>
                        <input type="text" class="form-control" id="jam" name="jam" placeholder="hh:mm - hh:mm">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputUername">Matakuliah</label>
                        <input type="text" class="form-control" id="mata_kuliah" name="mata_kuliah" placeholder="Masukan Mata Kuliah">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kode</label>
                        <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukan Kode">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Ruangan</label>
                        <input type="text" class="form-control" id="ruang" name="ruang" placeholder="Masukan Ruangan">
                      </div>
                    </div>
                    <div class="box-footer">
                      <button type="Submit" name="btnSubmite" class="btn btn-primary">Tambah</button>
                    </div>
                  </form>
                </div>
              </div>
            </section> 
          </div>
        </div>
    </div>
</div>