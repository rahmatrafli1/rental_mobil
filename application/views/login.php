<!DOCTYPE html>
<html>

<head>
    <title>Login - Aplikasi Rental Mobil Berbasis WEB</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="<?= base_url('assets/img/istockphoto-1290071290-612x612.png') ?>" type="image/x-icon">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="col-md-4 col-md-offset-4" style="margin-top: 50px; position:fixed">
        <center>
            <h2>APLIKASI RENTAL MOBIL</h2>
            <h3>LOGIN</h3>
        </center>
        <br />
        <?php
        if (isset($_GET['pesan'])) {
            if ($_GET['pesan'] == "gagal") {
                echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Login gagal! Username dan password salah.</div>";
            } else if ($_GET['pesan'] == "logout") {
                echo "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Anda telah logout.</div>";
            } else if ($_GET['pesan'] == "belumlogin") {
                echo "<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>Silahkan login dulu.</div>";
            }
        } ?> <br />
        <div class="panel panel-default">
            <div class="panel-body"> <br /> <br />
                <form method="post" action="<?php echo base_url() . 'welcome/login' ?>">
                    <div class="form-group"> <input type="text" name="username" placeholder="username" class="form-control"> <?php echo form_error('username'); ?> </div>
                    <div class="form-group"> <input type="password" name="password" placeholder="password" class="form-control"> <?php echo form_error('password'); ?> </div>
                    <center>
                        <div class="form-group"> <input type="submit" value="Login" class="btn btn-primary"> </div>
                    </center>
                </form> <br /> <br />
            </div>
        </div>
    </div>
</body>

</html>