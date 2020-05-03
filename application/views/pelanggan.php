
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
            <th scope="col">Isi Keluhan</th>
            <th scope="col">No. Telpon</th>
            <th scope="col">Alamat</th>
            <th scope="col">Waktu</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $no = 0;
            foreach($data as $u){ 
                if($u->Bagian_Pengaduan=="1"){
                $no++;
                echo'<tr>
                  <th scope="row">'.$no.'</th>
                  <td>'.$u->No_Sambungan.'</td>
                  <td>'.$u->Keluhan.'</td>
                  <td>'.$u->NO_HP.'</td>
                  <td>'.$u->Alamat.'</td>
                  <td>'.$u->Waktu.'</td>
                  <td><a class="btn btn-warning" href=" '.base_url().'index.php/Welcome/balas/'.$u->No_R.' " id="bp" data-toggle="modal" data-target="#modal_bp">Balas Pesan</a></td>
                </tr>';
              }
              
            }
          ?>
        </tbody>
      </table>

    </div>


  </body>
</html>