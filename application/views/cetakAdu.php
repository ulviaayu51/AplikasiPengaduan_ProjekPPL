
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
 

    <div style="background:white;margin:20px;padding:10px">
      <h1>Daftar Pengaduan</h1><br>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">No. Sambungan</th>
            <th scope="col">Isi Keluhan</th>
            <th scope="col">No. Telpon</th>
            <th scope="col">Alamat</th>
             <th scope="col">Waktu</th>
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
              <td>'.$u->Keluhan.'</td>
              <td>'.$u->NO_HP.'</td>
              <td>'.$u->Alamat.'</td>
              <td>'.$u->Waktu.'</td>
            </tr>';
            }
          ?>
        </tbody>
      </table>

    </div>

     <script type="text/javascript">
     $(document).ready(function(){
       window.print();
     });
    </script>
  </body>
</html>
  