<div class="container" style="margin-top: 10px;">
    <div class="col-md-12 ">
        <div class="well wel-sm">
            <h4>Management Data Mahasiswa</h4>
            <p >kelas IF-40-06</p>
        </div>
        <div class="col-md-12">
            <a href="add_mahasiswa" class="btn btn-primary btn-xs pull-right alert alert-pengumuman"><b>+</b> Add new Mahasiswa</a>
            <div class="news-v3-in-sm no-padding">
                <center>
                        <table class="table table-bordered table-striped table-selectable">
                          <thead>
                              <tr>
                                 <th>Nama</th>
                                 <th>NIM</th>
                                 <th>Email</th>
                                 <th>Aksi</th> 
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach ($data as $d) { ?>
                              <tr>
                                  <td><?php echo $d['nama']; ?></td>
                                  <td><?php echo $d['nim']; ?></td>
                                  <td><?php echo $d['email']; ?></td>
                                  <td class="text-center">
                                    <a class='btn btn-info btn-xs' href="<?php echo base_url("index.php/cpanel/edit_mahasiswa/"); ?>/<?php echo $d['nim'];?>">
                                    <span class="glyphicon glyphicon-edit"></span> Edit</a> 
                                    <a class="btn btn-danger btn-xs" href="<?php echo base_url("index.php/cpanel/delete_mahasiswa/"); ?>/<?php echo $d['nim'];?>">
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