<div class="modal modal-warning fade" id="modalLogout">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Apakah Anda Yakin Ingin Keluar ?</h4>
      </div>
      <div class="modal-body">
        <p>Tekan <b>"Keluar"</b> Jika Anda Telah Selesai</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Batal</button>
        <a class="btn btn-primary" href="<?php echo base_url('auth/logout'); ?>">Keluar</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal modal-danger fade" id="deleteModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Apakah Anda Yakin Ingin Menghapus ?</h4>
      </div>
      <div class="modal-body">
        <p>Tekan <b>"Hapus"</b> Jika Anda Yakin</p>
        <i><b>Data yang terhapus tidak dapat dikembalikan</b></i>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Batal</button>
        <a id="btn-delete" class="btn btn-primary" href="#">Hapus</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
    <!-- /.modal-dialog -->
</div>
