<!-- Modal -->
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url()?>index.php/Welcome/aksi_login_user">
        <div class="form-group">
            <label for="exampleInputEmail1">No. Sambungan Pengguna (10xxxxxxxx)</label>
            <input type="text" class="form-control" name="ns">
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Masuk</button>
      </form>
      </div>
      <div class="modal-footer">
      <a class="btn btn-danger" href="<?php echo base_url()?>index.php/Welcome/index">
                Kembali
            </a>
      </div>
    </div>



