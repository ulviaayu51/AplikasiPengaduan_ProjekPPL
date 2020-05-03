<!-- Modal -->
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Balas Pesan</h4>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url()?>index.php/Welcome/addTableBalasan">
        <div class="input-group mb-3"hidden>
            
            <input name="ns" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"value="<?php echo $no?>" readonly>
        </div>
        <div class="form-group">
          <textarea name="rb" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Kirim</button>
        </form>
      </div>
      <div class="modal-footer">
      <a class="btn btn-danger" href="<?php echo base_url()?>index.php/Welcome/admin">
                Kembali
            </a>
      </div>
    </div>



