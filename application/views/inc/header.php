<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="TheManusia" />
    <title><?= $judul ?> - Control Panel</title>
    <link href="<?php echo base_url('css/styles.css') ?>" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
    <link rel="icon" href="<?= base_url()?>img/hh.png">
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="<?= base_url() ?>"><img src="<?= base_url() ?>img/hh.png" width="25" alt=""> Control Panel</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        
        <!-- It Was Navbar Search-->
        <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

        </div>

        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?= base_url() ?>setting">Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= base_url() ?>login/logout">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Dashboard</div>
                        <a class="nav-link" href="<?= base_url() ?>">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>

                        <div class="sb-sidenav-menu-heading">Data</div>

                        <a class="nav-link" href="<?= base_url() ?>user">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            User
                        </a>

                        <a class="nav-link" href="<?= base_url() ?>register">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                            Register
                        </a>
                        <a class="nav-link" href="<?= base_url() ?>log">
                            <div class="sb-nav-link-icon"><i class="fas fa-align-left"></i></div>
                            Kehadiran Siswa
                        </a>
                        <a class="nav-link" href="<?= base_url() ?>laporan">
                            <div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                            Laporan
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?= $this->session->userdata('nama') ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">