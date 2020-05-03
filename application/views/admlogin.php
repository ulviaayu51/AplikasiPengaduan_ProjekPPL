
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PDAM BANGKALAN</title>
    <link href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body style="background: #346698">
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="<?php echo base_url()?>/assets/gambar/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> PDAM BANGKALAN
      </a>
      <form class="form-inline my-2 my-lg-0" methof="POST" action="<?php echo base_url()?>index.php/Welcome/index">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Beranda</button>
      </form>
    </nav>

    <div style="width:60%;margin:60px auto;border-radius: 5px;height: 500px;box-shadow: 10px 10px 50px;">
      <div style="float:right;background: #5d5de2;width:40%;padding:10px;height:100%;padding-top: 70px;color:white;border-radius: 10px;">
        <center><p class="h1" style="margin-bottom:30px">Admin</p></center>
        <form action="<?php echo base_url()?>index.php/Welcome/aksi_login" method="post">
          
          <div class="form-group">
            <label for="exampleInputEmail1">Nama</label>
            <input type="text" class="form-control" name="username">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <button type="submit" class="btn btn-outline-warning">Masuk</button>

        </form> 
      </div>  

      <div style="float:left;background: white;width:60%;padding:10px;height:100%;border-radius: 10px;box-shadow: 5px 0px 50px;">
        <p class="h1">Selamat Datang</p>
        <hr class="mt-5 mb-5">
        <center><img src="<?php echo base_url()?>/assets/gambar/admin.png" width="300" height="250" class="d-inline-block align-top" alt=""></center>
      </div>  
    </div>
  </body>
</html>
  