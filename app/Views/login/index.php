<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url();?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
	<link rel="icon" href="<?= base_url('images/iconplus no bg.png') ?>"/>
    <!-- Custom styles for this template-->
    <link href="<?= base_url();?>/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-secondary">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-4">
                                    <div class="text-center">
										<img src="<?php echo base_url('images/iconplus no bg.png'); ?>" alt="" width="150px" height="150px" />
                                    </div>
                                    <form class="user" action="/login/cekUser" method="POST">
                                    <?= csrf_field(); ?>
                                        <div class="form-group">
                                            <?php
                                            if (session()->getFlashdata('errIdUser')){
                                                $isInvalidUser = 'is-invalid';
                                            } else {
                                                $isInvalidUser = '';
                                            }
                                            ?>
                                            <input type="text" name="iduser" class="form-control form-control-user" <?= $isInvalidUser ?> placeholder="Username" required autofocus>
                                        <?php
                                        if (session()->getFlashdata('errIdUser')){
                                            echo '<div id="validationServer03Feedback" class="invalid-feedback">
                                            ' . session()->getFlashdata('errIdUser') .'
                                            </div>';
                                        }
                                        ?>
                                        </div>
                                        <div class="form-group">
                                            <?php
                                            $isInvalidPassword = (session()->getFlashdata('errPassword')) ? 'is-invalid' : '';
                                            ?>
                                            <input type="password" class="form-control form-control-user" <?= $isInvalidPassword ?> name="user_password" placeholder="Password" required>
                                            <?php
                                            if (session()->getFlashdata('errIdUser')){
                                                echo '<div id="validationServer03Feedback" class="invalid-feedback">
                                                ' . session()->getFlashdata('errPassword') .'
                                                </div>';
                                            }
                                            ?>
                                        </div>
                                        <input type="submit" name="login" class="btn btn-primary btn-user btn-block" value="Login"/>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url();?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url();?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url();?>/js/sb-admin-2.min.js"></script>

</body>

</html>