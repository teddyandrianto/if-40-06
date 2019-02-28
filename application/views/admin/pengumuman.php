<div class="container" style="margin-top: 10px;">
    <div class="col-md-12 ">
       <div class="well wel-sm">
          <h4>Management Data Pengumuman</h4>
          <p >kelas IF-40-06</p>
       </div>
       <div class="col-md-12">
          <a href="add_pengumuman" class="btn btn-primary btn-xs pull-right alert alert-pengumuman"><b>+</b> Add new Pengumuman</a>
          <div class="news-3-in-sm no-padding">
            <center>
              <table class="table table-bordered table-striped table-selectable">
                <thead>
                    <tr>
                       <th>No</th>
                       <th>Judul</th>
                       <th>isi</th>
                       <th>Waktu</th>
                       <th>Aksi</th> 
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $d) { ?>
                    <tr>
                        <td><?php echo $d['id']; ?></td>
                        <td><?php echo $d['judul']; ?></td>
                        <td><?php echo $d['isi']; ?></td>
                        <td><?php echo $d['waktu']; ?></td>
                        <td class="text-center">
                          <a class="btn btn-danger btn-xs" href="<?php echo base_url("index.php/cpanel/delete_pengumuman/"); ?>/<?php echo $d['id'];?>">
                          <span class="glyphicon glyphicon-remove"></span> Del</a></td>
                    </tr>
                    <?php } ?>  
                    </tbody>
                  </table>
                </center>  
              </div>
       </div>
    </div>
</div>