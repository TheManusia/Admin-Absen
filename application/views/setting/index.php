<h1 class="mt-4">Edit Profile</h1>
<br />

<form action="<?= base_url() ?>setting">
    <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" id="nama" value="Username">
        </div>
    </div>
    <div class="form-group row">
        <label for="izin" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="izin" value="Nama">
        </div>
    </div>
    <div class="form-group row">
        <label for="alpa" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="alpa" value="Password">
        </div>
    </div>
    <div class="form-group row">
        <label for="alpa" class="col-sm-2 col-form-label">New Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="alpa" value="Password">
        </div>
    </div>
    <div class="form-group row">
        <label for="alpa" class="col-sm-2 col-form-label">Confirm New Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="alpa" value="Password">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>