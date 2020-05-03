<!-- Modal -->

  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data</h4>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url()?>index.php/Welcome/addTableData">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">No. Sambungan</span>
            </div>
            <input name="ns" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
            </div>
            <input name="nama" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroup-sizing-default">Alamat</span>
            </div>
            <input name="alamat" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <button type="submit" class="btn btn-primary btn-lg btn-block">Simpan</button>
        </form>
      </div>
      <div class="modal-footer">
      <a class="btn btn-danger" href="<?php echo base_url()?>index.php/Welcome/lihatdata">
                Kembali
            </a>
      </div>
    </div>



