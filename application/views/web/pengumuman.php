<div class="col-md-4">            
    <div class="well wel-sm">    
        <h4>Pengumuman Terbaru</h4>
        <p >Kelas IF-40-06</p>
    </div>
    <?php foreach ($data_pengumuman as $d) { ?>
    <div class="alert alert-pengumuman">
        <h3><?php echo $d['judul']; ?></h3>
        <?php echo $d['isi']; ?>
    </div>
    <?php } ?>  
</div>
</div>
