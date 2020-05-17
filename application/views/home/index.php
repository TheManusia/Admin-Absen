<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Hai <?= $this->session->userdata('nama') ?></li>
</ol>
<div id="absen">
    <?php if ($hari) : ?>
        <?= $hari ?>
    <?php else : ?>
        <p>Tercatat <b><?= $status ?> User</b> telah absen dan <b><?= $user - $status ?> User</b> belum absen hingga saat ini.</p>
    <?php endif ?>  
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
    setInterval(function() {
        auto_refresh_function();
    }, 1000);

    function auto_refresh_function() {
        $('#absen').load('<?= base_url() ?>home/refresh');
    }
</script>