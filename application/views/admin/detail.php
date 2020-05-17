<h1 class="mt-4">Detail</h1>
<br />

<?php if ($this->session->flashdata('flash')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> Password berhasil <?= $this->session->flashdata('flash'); ?>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif ?>

<?php if (validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
        <?= validation_errors() ?>
    </div>
<?php endif ?>
<form action="" method="post">
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="text" class="form-control-plaintext" id="username" name="username" value="<?= $data['username'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Modal">
                Reset
            </button>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">Warning</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah Anda Yakin Ingin Reset Password?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="<?= base_url() ?>admin/resetPass/<?= $data['username'] ?>" class="btn btn-danger">Reset</a>
            </div>
        </div>
    </div>
</div>