 <div class="container" style="margin-top: 10px;">

        <div class="col-md-12">
            <div class="well wel-sm">
               <h4>Tambah Dosen</h4>
               <p >kelas IF-40-06</p>
            </div>
        <div class="col-md-12">
            <div class="news-v3-in-sm no-padding">            
               <section class="content">

                     <div class="col-md-6">
                        <div class="box box-primary">
                           <form role="form" action="<?php echo base_url();?>index.php/cpanel/update_dosen" method="post">
                             <div class="box-body">
                                <div class="form-group ">
                                   <label for="exampleInputNama">No</label>
                                   <input type="text" class="form-control" value="<?php echo $id; ?>" id="id"  name="id">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputNama">Nama</label>
                                  <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama; ?>" placeholder="Masukan Nama">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputNama">Mata Kuliah</label>
                                  <input type="text" class="form-control" id="mata_kuliah" name="mata_kuliah" value="<?php echo $mata_kuliah; ?>" placeholder="Masukan Mata Kuliah">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputUername">Email</label>
                                  <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="Masukan Email">
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputUername">Telpon</label>
                                  <input type="text" class="form-control" id="tel" name="tel" value="<?php echo $tel; ?>" placeholder="Masukan telepon">
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