<h1 class="mt-4">Edit Kehadiran</h1>
<br />

<form action="<?= base_url() ?>user">
    <div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="nama" value="User">
        </div>
    </div>
    <div class="form-group row">
        <label for="izin" class="col-sm-2 col-form-label">Izin</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="izin" value="12">
        </div>
    </div>
    <div class="form-group row">
        <label for="alpa" class="col-sm-2 col-form-label">alpa</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="alpa" value="10">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>