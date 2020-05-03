
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
            <a class="nav-link" href="<?php echo base_url()?>index.php/Welcome/admin">Lihat Semua Pengaduan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>index.php/Welcome/Pelanggan">Pengaduan Pelanggan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>index.php/Welcome/Teknis">Pengaduan Teknis</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>index.php/Welcome/Keuangan">Pengaduan Keuangan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>index.php/Welcome/lihatdata">Lihat Data</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>index.php/Welcome/arsip">Arsip Pengaduan</a>
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
            <th scope="col">No. Sambungan</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
          </tr>
        </thead>
        <tbody>

        <?php 
            $no = 0;
            foreach($data as $u){ 
            $no++;
            echo'<tr>
              <th scope="row">'.$no.'</th>
              <td>'.$u->No_Sambungan.'</td>
              <td>'.$u->Nama.'</td>
              <td>'.$u->Alamat.'</td>
            </tr>';
          }
        ?>
        </tbody>
      </table>


      <a class="btn btn-outline-info my-2 my-sm-0" href="<?php echo base_url()?>index.php/Welcome/addData" id="tambah_data" class="btn btn-primary" data-toggle="modal" data-target="#modal_td">Tambah Data</a>
    </div>

  <div class="modal fade" id="modal_td" tabindex="-1" role="dialog" aria-hidden="true"></div>
  <script type="text/javascript">
    $(document).ready(function(){
     $('a#tambah_data').click(function(){
    var url = $(this).attr('href');
    $.ajax({
     url : url,
     success:function(response){
      $('#modal_td').html(response);
     }
    });
     });
     
    });
  </script>

  </body>
</html>
  