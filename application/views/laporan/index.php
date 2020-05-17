<h1 class="mt-4">Laporan</h1>
<br />

<table id="table_id" class="table table-sm">
    <thead>
        <tr>
            <th>Tanggal</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tanggal as $dta) : ?>
            <?php $a = explode('-', $dta['tanggal']);
            $tgl = $a[0] . $a[1] . $a[2];
            ?>
            <tr>
                <td><?= $dta['tanggal'] ?>
                    <a href="<?= base_url() ?>laporan/view/<?= $dta['tanggal'] ?>" class="badge badge-danger">
                        Lihat
                    </a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>