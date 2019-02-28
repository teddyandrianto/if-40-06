    <div class="col-lg-12">
    <div class="row" style="margin-top: -20px">
                           
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <?php foreach ($carousel as $d) { ?>

                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <?php }?>
                               
                            </ol>
                             
                            <div class="carousel-inner">

                                <div class="item active">
                                    <img class="slide-image" src="<?php echo base_url();?>asset/gambar/carousel/file_1478350486.png" width=1368 height=406 alt="">
                                </div>
                                 <?php foreach ($carousel as $d) { ?>
                                <div class="item ">
                                    <img class="slide-image" src="<?php echo base_url('asset/gambar/carousel');?>/<?php echo $d['gambar']; ?>" width=1368 height=406 alt="">
                                </div>
                                 <?php }?>
                              
                            </div>
                            
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        
                    
        </div>
    </div>