<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="img/logo/logo.png" rel="icon">
        <title>Login</title>
        <link href="<?php echo e(asset('dist/img/logo/logo.png')); ?>" rel="shortcut icon" type="image/x-icon">
        <link href="<?php echo e(asset('dist/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('dist/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('dist/css/ruang-admin.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('dist/css/style2.css')); ?>" rel="stylesheet">

        <style>
        
        .bg {

     position: absolute ;
     bottom: 0;
     width: 100%;
     height: 280px;
     animation: animateBg 25s linear infinite;
     background-size: 1500px;
     background-repeat: repeat-x;
}
    </style>

    </head>
    <body>
    <section class="scene">
        <div class="sun"></div>
        <div class="bg-gradient-login">
        
        <div class="container-login">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card shadow-sm my-5">
        <div class="card-body p-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login-form">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Login</h1>
                        </div>
                        <form action="<?php echo e(route('login')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <!-- Email field -->
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" value="">
                            </div>
                            <!-- Password field -->
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" value="">
                            </div>            
                            <button class="btn btn-primary btn-block mt-3" type="submit">Login</button>        
                        </form>
                        <div class="mt-4 text-center">
                            <hr>
                            <a href="<?php echo e(route('register')); ?>" class="text-primary">Create new account?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
            </div>
        </div>
</div>
        <div class="bg">
        <img src=<?php echo e(asset('assets/images/bg.png')); ?> class="bg">
        <img src=<?php echo e(asset('assets/images/1.png')); ?> class="car1">
        <img src=<?php echo e(asset('assets/images/1.png')); ?> class="car2">
    </div>
        
    </section>


    
        
    <script src="<?php echo e(asset('dist/vendor/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dist/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dist/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dist/js/ruang-admin.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dist/vendor/chart.js/Chart.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/script/script.js')); ?>"></script>
        <?php echo e(($script) ?? ''); ?>

    </body>
</html><?php /**PATH C:\xampp\htdocs\Sistem-Diagnosa-Penyakit\resources\views/auth/login.blade.php ENDPATH**/ ?>