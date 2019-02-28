<div class="col-md-5">
    <div class="well wel-sm">
        <h4>Managemen Carousel</h4>
        <p >kelas IF-40-06</p>
    </div>
          
        
    <div class="col-md-12">
        <table class="table table-bordered table-striped table-selectable">
          <thead>
            <tr>
              <th>No</th>
              <th>URL Gambar</th>
              <th>Hapus</th> 
            </tr>
          </thead>                
          <tbody>
          <?php foreach ($carousel as $d) { ?>
            <tr>
              <td><?php echo $d['id']; ?></td>
              <td><?php echo $d['gambar']; ?></td>
              <td class="text-center">
                <a class="btn btn-danger btn-xs" href="<?php echo base_url("index.php/cpanel/delete_carousel/"); ?>/<?php echo $d['id']; ?>">
                <span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
          <?php } ?> 
          </tbody>
        </table>
    </div>
    <div class="col-md-12">
        <form role="form" action="<?php echo base_url();?>index.php/cpanel/proses_add_carousel" method="post" enctype="multipart/form-data">
          <div class="box-body">
              <div class="form-group ">
                  <label for="exampleInputNama">URL GAMBAR <SMALL>UKURAN 1368 x 406 px</SMALL></label>
                  <input type="file" name="filefoto" class="form-control">
              </div>
          </div>
          <div class="box-footer">
              <button type="Submit" name="btnSubmite" class="btn btn-primary">Submit</button>
          </div>
       </form>
    </div>
</div>
</div>