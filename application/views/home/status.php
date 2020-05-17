<?php if($hari) :?>
    <?= $hari ?>
    <?php else : ?>
        <p>Tercatat <b><?= $status ?> User</b> telah absen dan <b><?= $user - $status ?> User</b> belum absen hingga saat ini.</p>
<?php endif ?>