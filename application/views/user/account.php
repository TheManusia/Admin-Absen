<h1 class="mt-4">Account</h1>
<br />

<form action="<?= base_url() ?>user" method="post">
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text"  class="form-control" id="nama" value="User">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" value="Username">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                Reset
            </button>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda Yakin Ingin Reset Password?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?= base_url() ?>user/account" class="btn btn-danger">Reset</a>
            </div>
        </div>
    </div>
</div>