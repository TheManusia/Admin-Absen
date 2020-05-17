<h1 class="mt-4">Laporan</h1>
<br />
<div class="accordion">

    <p>
        <a class="btn btn-danger" data-toggle="collapse" href="#alpa" role="button" aria-expanded="true" aria-controls="alpa">
            Siswa Alpa
        </a>
        <a class="btn btn-success" data-toggle="collapse" href="#izin" role="button" aria-expanded="true" aria-controls="izin">
            Siswa Izin
        </a>
        <a class="btn btn-primary" data-toggle="collapse" href="#hadir" role="button" aria-expanded="true" aria-controls="hadir">
            Siswa Hadir
        </a>
    </p>

    <div class="collapse" id="alpa">
        <div class="card card-body">
            <h3>Siswa Alpa</h3>
            <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alpa as $data) : ?>
                        <tr>
                            <td><?= $data['id_laporan'] ?></td>
                            <td><?= $data['id_user'] ?></td>
                            <td><?= $data['tanggal'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="collapse" id="izin">
        <div class="card card-body">
            <h3>Siswa Izin</h3>
            <table id="table_id2" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($izin as $data) : ?>
                        <tr>
                            <td><?= $data['id_laporan'] ?></td>
                            <td><?= $data['id_user'] ?></td>
                            <td><?= $data['tanggal'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="collapse" id="hadir">
        <div class="card card-body">
            <h3>Siswa Hadir</h3>
            <table id="table_id3" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hadir as $data) : ?>
                        <tr>
                            <td><?= $data['id_laporan'] ?></td>
                            <td><?= $data['id_user'] ?></td>
                            <td><?= $data['tanggal'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>