<div class="container" style="margin-top: 10px;">
        <div class="col-md-8 ">
          <?php foreach ($data as $d) { ?>
            <div class="well wel-sm">
              <h4>Sambutan Dosen Wali</h4>
              <p ><?php echo $d['nama']; ?></p>
            </div>
            <div class="col-md-3">
                <a href="#">
                  <img class="img-responsive" src="<?php echo base_url("asset/gambar/sambutan");?>/<?php echo $d['gambar']; ?>" width=170 height=200 alt="">
                </a>
            </div>
            <div  class="col-md-8">
                <?php echo $d['isi_sambutan']; ?>
            </div>
            <?php } ?>
        </div>
      

