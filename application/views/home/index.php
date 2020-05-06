<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Hai <?= $this->session->userdata('nama') ?></li>
</ol>
<p>Tercatat <b><?= $status ?> User</b> telah absen dan <b><?= $user - $status ?> User</b> belum absen hingga saat ini.</p>