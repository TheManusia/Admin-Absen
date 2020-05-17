<h1 class="mt-4">Admin</h1>
<br>

<?php if ($this->session->flashdata('flash')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> Data berhasil <?= $this->session->flashdata('flash'); ?>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif ?>

<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $dta) : ?>
            <?php $i = 1; ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $dta['username'] ?></td>
                <td><?= $dta['nama'] ?></td>
                <td>
                    <a href="<?= base_url() ?>admin/detail/<?= $dta['username'] ?>" class="btn btn-sm btn-danger"><i class="fas fa-cog"></i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>