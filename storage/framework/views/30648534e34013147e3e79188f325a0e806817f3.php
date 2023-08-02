<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="img/logo/logo.png" rel="icon">
        <title><?php echo e($title); ?></title>
        <link href="<?php echo e(asset('dist/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('dist/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('dist/css/ruang-admin.min.css')); ?>" rel="stylesheet">
    </head>
    <body class="bg-gradient-login">
        
        <div class="container-login">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <?php echo e($slot); ?>

                </div>
            </div>
        </div>

        
        <script src="<?php echo e(asset('dist/vendor/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dist/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dist/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
        <script src="<?php echo e(asset('dist/js/ruang-admin.min.js')); ?>"></script>
    </body>
</html><?php /**PATH C:\xampp\htdocs\Sistem-Diagnosa-Penyakit\resources\views/layouts/guest.blade.php ENDPATH**/ ?>