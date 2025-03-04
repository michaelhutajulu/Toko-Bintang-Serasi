<div class="modal fade" id="modal-form">
    <div class="modal-dialog">
        <form method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="_method" value="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Form Data Alumni</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama">Nama Alumni</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tahun">Tahun Lulus</label>
                        <input type="text" name="tahun" id="tahun" class="form-control">
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" onclick="submitForm(this.form)" class="btn btn-sm btn-outline-info" id="submitBtn">
                        <span id="spinner-border" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        <i class="fas fa-save mr-1"></i>
                        Save</button>
                    <button type="button" data-dismiss="modal" class="btn btn-sm btn-outline-danger">
                        <i class="fas fa-times"></i>
                        Kembali
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
