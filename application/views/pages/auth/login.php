<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/images/logorhanobg.png') ?>">
    <title><?= $title ?></title>
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/css/style.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/new-style.css') ?>" rel="stylesheet">
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper shadow-lg d-flex no-block justify-content-center align-items-center position-relative"
            style="background:url(<?= base_url('assets/images/big/auth-bg.jpg') ?>) no-repeat center center;">
            <div class="auth-box row">
                <div class="col-lg-7 col-md-6 bg-white text-center d-flex flex-column py-3 justify-content-between">
                    <img src="<?= base_url('assets/images/login-logo.png'); ?>" alt="" class="w-100 mb-lg-3 mb-2">
                    <h1 style="font-size: 22px; font-weight: 500;" class="mb-lg-4 mb-1 text-dark">SISTEM INFORMASI PENANGGULANGAN KRISIS KESEHATAN</h1>
                    <div class="d-none d-md-block">
                        <div class="w-100 d-flex gap-2 align-items-center justify-content-between mt-auto p-3">
                            <img src="<?= base_url('assets/images/Logo-kemenkes-icon.png'); ?>" alt="" width="55">
                            <img src="<?= base_url('assets/images/logo-poltekkes-aceh.png'); ?>" alt="" width="55">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 bg-gray-custom">
                    <div class="p-3">
                        <h2 class="mt-3 text-center">Login</h2>
                        <p class="text-center">Enter your email address and password to access the main panel</p>
                        <div class="row">
                            <div class="col-lg-12">
                                <?php $this->load->view('layouts/_alert') ?>
                            </div>
                        </div>
                        <form action="<?= base_url('login') ?>" class="mt-2" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="">Email</label>
                                        <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Masukan email anda', 'required' => true, 'autofocus' => true]) ?>
                                        <?= form_error('email') ?>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text-dark" for="">Password</label>
                                        <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password', 'required' => true]) ?>
                                        <?= form_error('password') ?>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <button type="submit" class="btn btn-block btn-dark">Login</button>
                                </div>
                                <div class="col-lg-12 text-center mt-5">
                                    Forgot your email/password? Please contact the administrator.
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="<?= base_url('assets/libs/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url('assets/libs/popper.js/umd/popper.min.js') ?>"></script>
    <script src="<?= base_url('assets/libs/bootstrap/js/bootstrap.min.js') ?>"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
        
        $(window).on('load', function(){
            $(".preloader ").fadeOut();
        });
    </script>
</body>

</html>
