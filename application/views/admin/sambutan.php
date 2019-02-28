<div class="container" style="margin-top: 10px;">
    <div class="row">
        <?php foreach ($data as $d) { ?>
        <div class="col-md-7">
          <div class="well wel-sm">
             <h4>Sambutan Dosen Wali</h4>
             <p ><?php echo $d['nama']; ?></p>
          </div>
          <div class="col-md-3">
              <a href="#">
                <img class="img-responsive" src="<?php echo base_url('asset/gambar/sambutan');?>/<?php echo $d['gambar']; ?>" width=170 height=200 alt="">
              </a>
            </div>
            <div  class="col-md-8">
              <?php echo $d['isi_sambutan']; ?>       
            </div>
            <a class='btn btn-info btn-xs' href="<?php echo base_url("index.php/cpanel/edit_sambutan/"); ?>/<?php echo $d['id'];?>" >
            <span class="glyphicon glyphicon-edit"></span> Edit</a> 
            <?php } ?>
        </div>
 

             