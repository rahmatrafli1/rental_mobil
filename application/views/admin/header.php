<!DOCTYPE html>
<html>

<head>
    <title><?php echo $judul; ?> - Aplikasi Rental Mobil</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap.min.css">
    <link rel="shortcut icon" href="<?= base_url('assets/img/istockphoto-1290071290-612x612.png') ?>" type="image/x-icon">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header"> <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="<?php echo base_url() . 'admin'; ?>">Rental Mobil</a> </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="
                    <?php if ($judul === 'Dashboard') :  ?>
                        <?php echo 'active'; ?>
                    <?php endif; ?>
                    ">
                        <a href="<?php echo base_url() . 'admin'; ?>"><span class="glyphicon glyphicon-home"></span> Dashboard <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="
                    <?php if ($judul === 'Data Mobil') : ?>
                        <?php echo 'active'; ?>
                    <?php endif; ?>
                    ">
                        <a href="<?php echo base_url() . 'admin/mobil'; ?>"><span class="glyphicon glyphicon-folder-open"></span> Data Mobil</a>
                    </li>
                    <li class="
                    <?php if ($judul === 'Data Kostumer') : ?>
                        <?php echo 'active'; ?>
                    <?php endif; ?>
                        ">
                        <a href="<?php echo base_url() . 'admin/kostumer'; ?>"><span class="glyphicon glyphicon-user"></span> Data Kostumer</a>
                    </li>
                    <li class="
                    <?php if ($judul === 'Transaksi Rental') : ?>
                        <?php echo 'active'; ?>
                    <?php endif; ?>
                    ">
                        <a href="<?php echo base_url() . 'admin/transaksi'; ?>"><span class="glyphicon glyphicon-sort"></span> Transaksi Rental</a>
                    </li>
                    <li class="
                    <?php if ($judul === 'Laporan') : ?>
                        <?php echo 'active'; ?>
                    <?php endif; ?>
                    "><a href="<?php echo base_url() . 'admin/laporan'; ?>"><span class="glyphicon glyphicon-list-alt"></span> Laporan</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url() . 'admin/logout'; ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo "Halo, <b>" . $this->session->userdata('nama'); ?></b> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="
                            <?php if ($judul === 'Ganti Password') : ?>
                                <?php echo 'active'; ?>
                            <?php endif; ?>
                            ">
                                <a href="<?php echo base_url() . 'admin/ganti_password' ?>">
                                    <i class="glyphicon glyphicon-lock"></i> Ganti Password
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">