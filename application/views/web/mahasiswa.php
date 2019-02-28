 <div class="container" style="margin-top: 10px;">
    <div class="col-md-8 ">
       <div class="well wel-sm">
         <h4>Data Mahasiswa</h4>
         <p >kelas IF-40-06</p>
       </div>
       <div class="col-md-12">
          <div class="news-v3-in-sm no-padding">
            <center>
              <table class="table table-bordered table-striped table-selectable">
                  <thead>
                    <tr>
                       <th>Nama</th>
                       <th>NIM</th>
                       <th>Email</th> 
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data as $d) { ?>
                    <tr>
                        <td><?php echo $d['nim']; ?></td>
                        <td><?php echo $d['nama']; ?></td>
                        <td><?php echo $d['email']; ?></td>
                    </tr>
                    <?php } ?>  
                    </tbody>
              </table>
            </center>  
         </div>
      </div>
  </div>