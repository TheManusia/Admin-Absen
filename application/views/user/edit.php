<h1 class="mt-4">Edit Kehadiran</h1>
<br />

<?php if (validation_errors()) : ?>
    <div class="alert alert-danger" role="alert">
        <?= validation_errors() ?>
    </div>
<?php endif ?>
<form action="" method="post">
    <input type="hidden" name="id_detail" id="id_detail" value="<?= $absen['id_detail'] ?>">
    <input type="hidden" name="username" id="username" value="<?= $user['username'] ?>">
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="nama" name="nama" value="<?= $user['nama'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="izin" class="col-sm-2 col-form-label">Izin</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="izin" name="izin" value="<?= $absen['izin'] ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="alpa" class="col-sm-2 col-form-label">alpa</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="alpa" name="alpa" value="<?= $absen['alpa'] ?>">
        </div>
    </div>
    <button type="submit" name="updateAbsen" id="updateAbsen" class="btn btn-primary">Submit</button>
</form>