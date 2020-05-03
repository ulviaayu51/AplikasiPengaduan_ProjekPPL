<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>PDAM BANGKALAN</title>
    <link href="<?php echo base_url()?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <script src="<?php echo base_url()?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>/assets/popper/umd/popper.min.js"></script>
    <script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
  </head>
  <body style="background: #346698">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="navbar-brand" href="#">
        <img src="<?php echo base_url()?>/assets/gambar/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> PDAM BANGKALAN
      </a>
   

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>index.php/Welcome/user">Pengaduan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>index.php/Welcome/LihatBalasan/<?php echo $_SESSION['nama']?>">Balasan</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" methof="POST" action="<?php echo base_url()?>index.php/Welcome/index">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Keluar</button>
        </form>
      </div>

    </nav>

    <center><h1 style="color:white">"Adukan Segala Permasalahan Anda"</h1></center>
    <div style="width:60%;margin:40px auto;border-radius: 5px;height: 450px;box-shadow: 10px 10px 50px;padding:10px;padding-top: 15px">

      <form style="color:white" method="POST" action="<?php echo base_url()?>index.php/Welcome/addTablePengaduan">
        <div class="form-group">
            <label class="h5" for="exampleInputEmail1">No. Sambungan Pengguna</label>
            <input type="text" class="form-control" name="ns" value="<?php echo $_SESSION['nama']?>" readonly>
        </div>
        <div class="form-group">
            <label class="h5" for="exampleInputEmail1">No. Telepon</label>
            <input type="number" class="form-control" name="hp">
        </div>
        <div class="form-group">
          <p class="h5">Form Pengaduan</p>
          <textarea name="keluhan" class="form-control" rows="3"></textarea>
        </div>
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Bagian</label>
            </div>
            <select class="custom-select" name="level" id="inputGroupSelect01">
              <?php
                foreach($data as $datae){
                  echo'<option value='.$datae->no_bagian.'>'.$datae->Ket_bagian.'</option>';
                }
              ?>
            </select>
          </div>
        <center><button type="submit" class="btn btn-outline-warning my-2 my-sm-0">KIRIM PENGADUAN ANDA</button></center>
      </form>
    </div>

     <script type="text/javascript">
     $(document).ready(function(){
 
         load_data();

 
         function load_data(query)
         {
             $.ajax({
                 url:"<?php echo base_url();?>/index.php/Welcome/fetchdata",
                 method:"POST",
                 data:{query:query},
                 success:function(data){
                     $('#result').html(data);
                 }
             })
         }
 
         $('#search_text').keyup(function(){
             var search = $(this).val();
             if(search != '')
             {
                 load_data(search);
             }
             else
             {
                 load_data();
             }
         });
     });
     </script>

  </body>
</html>
  