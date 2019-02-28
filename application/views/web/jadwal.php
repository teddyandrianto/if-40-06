 <div class="container" style="margin-top: 10px;">
    <div class="col-md-8 ">
      <div class="well wel-sm">
        <h4>Jadwal Mata Kuliah</h4>
        <p >kelas IF-40-06</p>
      </div>
      <div class="col-md-12">
        <div class="news-v3-in-sm no-padding">
          <center>
            <table class="table table-bordered table-striped table-selectable">
              <thead>
                <tr>
                    <th>Hari</th>
                   <th>Jam</th>
                   <th>Ruagan</th> 
                   <th>Mata Kuliah</th>
                   <th>Kode</th> 
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $d) { ?>
                <tr>
                    <td><?php echo $d['hari']; ?></td>
                    <td><?php echo $d['jam']; ?></td>
                    <td><?php echo $d['ruang']; ?></td>
                    <td><?php echo $d['mata_kuliah'];?></td>
                    <td><?php echo $d['kode']; ?></td>
                </tr>
                <?php } ?>  
              </tbody>
            </table>
          </center>  
        </div>
      </div>
    </div>
