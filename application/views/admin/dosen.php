<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-md-12">
            <div class="well wel-sm">
               <h4>Managemen Data Dosen</h4>
               <p >kelas IF-40-06</p>
            </div>  
        <div class="col-md-12">
            <a href="add_dosen" class="btn btn-primary btn-xs pull-right alert alert-pengumuman"><b>+</b> Add new Dosen </a>     
            <div class="news-v3-in-sm no-padding">
               <center>
                  <table class="table table-bordered table-striped table-selectable">
                    <thead>
                       <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Mata Kuliah</th>
                          <th>Email</th> 
                          <th>Telpon</th>
                          <th>Aksi</th>  
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($data as $d) { ?>
                        <tr>
                          <td><?php echo $d['id']; ?></td>
                          <td><?php echo $d['nama']; ?></td>
                          <td><?php echo $d['mata_kuliah']; ?></td>
                          <td><?php echo $d['email']; ?></td>
                          <td><?php echo $d['tel'];?></td>
                          <td class="text-center">
                              <a class='btn btn-info btn-xs' href="<?php echo base_url("index.php/cpanel/edit_dosen/"); ?>/<?php echo $d['id'];?>" >
                                <span class="glyphicon glyphicon-edit"></span> Edit</a> 
                              <a class="btn btn-danger btn-xs" href="<?php echo base_url("index.php/cpanel/delete_dosen/"); ?><?php echo $d['id'];?>">
                                <span class="glyphicon glyphicon-remove"></span> Del</a>
                           </td>
                        </tr>
                    <?php } ?>  
                    </tbody>
                  </table>
               </center>  
            </div>
        </div>
    </div>
</div>