<div class="modal fade" id="modal-form">
    <div class="modal-dialog">
        <form method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Form Beranda</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="namaketua">Nama Ketua Yayasan</label>
                        <input type="text" name="namaketua" id="namaketua" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="ketua" class="form-label">Kata Sambutan Ketua Yayasan</label>
                        <textarea class="form-control" name="ketua" id="ketua" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="ketua_image">Gambar Ketua Yayasan</label>
                        <input type="file" name="ketua_image" id="ketua_image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="namakepala">Nama Kepala Sekolah</label>
                        <input type="text" name="namakepala" id="namakepala" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="kepala" class="form-label">Kata Sambutan Kepala Sekolah</label>
                        <textarea class="form-control" name="kepala" id="kepala" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="kepala_image">Gambar Kepala Sekolah</label>
                        <input type="file" name="kepala_image" id="kepala_image" class="form-control">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" onclick="submitForm(this.form)" class="btn btn-sm btn-outline-info" id="submitBtn">
                        <span id="spinner-border" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        <i class="fas fa-save mr-1"></i>
                        Save</button>
                    <button type="button" data-dismiss="modal" class="btn btn-sm btn-outline-danger">
                        <i class="fas fa-times"></i>
                        close
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
