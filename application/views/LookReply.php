
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

    <div style="background:white;margin:20px;padding:10px">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Pengaduan</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Balasan</th>
            <th scope="col">Tanggal</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $no = 0;
            foreach($data as $u){ 
          
                $no++;
                echo'<tr>
                  <th scope="row">'.$no.'</th>
                  <td>'.$u->keluhan.'</td>
                  <td>'.$u->waktu.'</td>
                  <td>'.$u->Balasan.'</td>
                  <td>'.$u->tanggal.'</td>
                </tr>';
            
            }
          ?>
        </tbody>
      </table>

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
  