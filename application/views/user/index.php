        <h1 class="mt-4">User</h1>
        <br />

        <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Izin</th>
                    <th>Alpa</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($data as $dta) :  ?>
                <tr>

                    <td><?= $dta['id_detail'] ?></td>
                    <td><?= $dta['username'] ?></td>
                    <td><?= $dta['izin'] ?></td>
                    <td><?= $dta['alpa'] ?></td>
                    <td style="text-align: center;">
                        <a href="<?= base_url() ?>user/edit" class="btn btn-sm btn-primary"><i class="fas fa-pen"></i></a>
                        <a href="<?= base_url() ?>user/account" class="btn btn-sm btn-danger"><i class="fas fa-cog"></i></a>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>