<h1 class="mt-4">Register</h1>
<br />

<?php if ($this->session->flashdata('flash')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> Data berhasil <?= $this->session->flashdata('flash'); ?>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php elseif ($this->session->flashdata('gagal')) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Gagal!</strong> <?= $this->session->flashdata('gagal'); ?>.
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

<form method="post">
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="small mb-1" for="nama">Nama</label>
                <input class="form-control py-4" id="nama" name="nama" type="text" placeholder="Masukkan nama" />
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="small mb-1" for="username">Username</label>
                <input class="form-control py-4" id="username" name="username" type="text" placeholder="Masukkan Username" />
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">
        Create Account
    </button>
</form>