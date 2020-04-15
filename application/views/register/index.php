<h1 class="mt-4">Register</h1>
<br />

<form>
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="small mb-1" for="nama">Nama</label>
                <input class="form-control py-4" id="nama" type="text" placeholder="Masukkan nama" />
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="small mb-1" for="username">Username</label>
                <input class="form-control py-4" id="username" type="text" placeholder="Masukkan Username" />
            </div>
        </div>
    </div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Create Account
    </button>
</form>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Berhasil Mendaftarkan Akun
            </div>
            <div class="modal-footer">
                <a href="<?= base_url() ?>register" class="btn btn-primary" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>