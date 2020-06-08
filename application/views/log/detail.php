<h1 class="mt-4">Tanggal <?= $tanggal ?></h1>
<br />

<table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Id</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Nama</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($log as $lg) : ?>
            <tr>
                <td><?= $lg['id_data'] ?></td>
                <td><?= $lg['tanggal'] ?></td>
                <td><?= $lg['waktu'] ?></td>
                <td><?= $lg['nama'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>