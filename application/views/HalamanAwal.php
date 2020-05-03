
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
  <body style="background-image:url('http://localhost/feedback_pdam/assets/gambar/background.jpg'); background-repeat: no-repeat;background-size: cover;">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <a class="navbar-brand" href="#">
        <img src="<?php echo base_url()?>/assets/gambar/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> PDAM BANGKALAN
      </a>
   

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
              
        </ul>
         <a class="btn btn-outline-success my-2 my-sm-0" href="<?php echo base_url()?>index.php/Welcome/masuk" id="ms" class="btn btn-primary" data-toggle="modal" data-target="#modal_ms">Sistem Pengaduan</a>
        <form style="margin-left: 10px" class="form-inline my-2 my-lg-0" methof="POST" action="<?php echo base_url()?>index.php/Welcome/masukAdmin">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Admin</button>
        </form>
      </div>

    </nav>

    
   <div class="modal fade" id="modal_ms" tabindex="-1" role="dialog" aria-hidden="true"></div>
    <script type="text/javascript">
      $(document).ready(function(){
       $('a#ms').click(function(){
      var url = $(this).attr('href');
      $.ajax({
       url : url,
       success:function(response){
        $('#modal_ms').html(response);
       }
      });
       });
       
      });
    </script>
  </body>
</html>
  