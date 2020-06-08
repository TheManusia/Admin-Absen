<h1 class="mt-4">Admin</h1>
<br>

<div class="collapse mb-5" id="register">
    <div class="ml-5">
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
    </div>
</div>

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

<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <div class="float-right mr-5">
        <a class="btn btn-primary" data-toggle="collapse" href="#register" role="button" aria-expanded="true" aria-controls="register">
            <i class="fas fa-plus"></i>
        </a>
    </div>
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php foreach ($data as $dta) : ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $dta['username'] ?></td>
                <td><?= $dta['nama'] ?></td>
                <td>
                    <a href="<?= base_url() ?>admin/detail/<?= $dta['username'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-cog"></i></a>
                </td>
            </tr>
        <?php $i++;endforeach ?>
    </tbody>
</table>