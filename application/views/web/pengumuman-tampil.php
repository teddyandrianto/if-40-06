<div class="container" style="margin-top: 10px;">
    <div class="col-md-12 ">
        <div class="well wel-sm">
          <h4>Pengumuman</h4>
          <p >Kelas IF-40-06</p>
        </div>
        <div  class="col-md-12">
        <?php foreach ($data as $d) { ?>
          <div class="alert alert-pengumuman">      
            <h3><?php echo $d['judul']; ?> <small><i class="fa fa-clock-o"></i> <?php echo $d['waktu']; ?></small></h3>             
            <?php echo $d['isi']; ?>
          </div>
        <?php } ?> 
        </div>
    </div>

