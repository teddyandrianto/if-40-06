<div class="container" style="margin-top: 80px;">
    <div class="row">        
       <div class="col-lg-4 col-lg-offset-4">
          <div class="well">
             <h4 align="center"><b>Login Administrator IF-40-06</b></h4><hr>
             <div class="tab-content ">
                <div class="tab-pane active in" id="login">          
                  <form style="margin-top: 30px;" action="<?php echo base_url('index.php/cpanel/login')?>" method= "POST" >
                      <div class="form-group form-group">
                        <label for="exampleInputName">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                      </div>
                         <button type="submit" class="btn btn-default btn-block ">Masuk</button>
                  </form>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>

</body>
</html>

    
     