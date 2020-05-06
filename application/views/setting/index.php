<h1 class="mt-4">Edit Profile</h1>
<br />

<?php if ($this->session->flashdata('flash')) : ?>
    <div class="alert alert-success" role="alert">
        <strong>Berhasil!</strong> Data berhasil <?= $this->session->flashdata('flash'); ?>.
    </div>
<?php elseif ($this->session->flashdata('gagal')) : ?>
    <div class="alert alert-danger" role="alert">
        <strong>Gagal!</strong> <?= $this->session->flashdata('gagal'); ?>.
    </div>
<?php endif ?>

<form action="" method="post">
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="username" name="username" value="<?= $this->session->userdata('username') ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="izin" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $this->session->userdata('nama') ?>">
            <?= form_error('nama', '<p class="text-danger small">', '</p>'); ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="alpa" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="password" name="password" value="Password">
            <?= form_error('password', '<p class="text-danger small">', '</p>'); ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="alpa" class="col-sm-2 col-form-label">New Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="newpass" name="newpass" value="Password">
            <?= form_error('newpass', '<p class="text-danger small">', '</p>'); ?>
        </div>
    </div>
    <div class="form-group row">
        <label for="alpa" class="col-sm-2 col-form-label">Confirm New Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="confirmnewpass" name="confirmnewpass" value="Password">
            <?= form_error('confirmnewpass', '<p class="text-danger small">', '</p>'); ?>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>