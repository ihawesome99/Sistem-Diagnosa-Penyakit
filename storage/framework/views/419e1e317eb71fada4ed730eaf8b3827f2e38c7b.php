<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>
    <link href="<?php echo e(asset('dist/img/logo/logo.png')); ?>" rel="shortcut icon" type="image/x-icon">
    <link href="<?php echo e(asset('dist/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('dist/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('dist/css/ruang-admin.css')); ?>" rel="stylesheet">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <?php echo e($head ?? ''); ?>

</head>

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i> medcare. </a>

    <nav class="navbar">

            <a class="nav-link" href="/">
                <i class="fas fa-fw fa-about"></i>
                <span>Home</span>
            </a>

            <a class="nav-link" href="<?php echo e(url('/about')); ?>">
                <i class="fas fa-fw fa-about"></i>
                <span>About</span>
            </a>

        <?php if(Route::has('login')): ?>
        <?php if(auth()->guard()->check()): ?>

            <a class="nav-link" href="<?php echo e(route('admin.diagnosa.user')); ?>">
                <i class="fas fa-fw fa-about"></i>
                <span>Diagnosa</span>
            </a>

            <a class="nav-link" href="<?php echo e(route('admin.riwayat.daftar.user')); ?>">
                <i class="fas fa-fw fa-about"></i>
                <span>Riwayat</span>
            </a>

        <form method="POST" action="<?php echo e(route('logout')); ?>" class="hidden">
            <?php echo csrf_field(); ?>
                <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="fas fa-fw fa-about"></i>
                    <span>Logout</span>
                </a>
        </form>
        <?php else: ?>
            <a class="nav-link" href="<?php echo e(route('login')); ?>">
                <i class="fas fa-fw fa-about"></i>
                <span>Login</span>
            </a>
        <?php endif; ?>
        <?php endif; ?>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src=<?php echo e(asset('assets/images/about-img.svg')); ?> alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>Kami adalah tim profesional yang berdedikasi di bidang kesehatan dan keselamatan, yang berusaha untuk menyediakan sumber informasi terpercaya dan terkini tentang kesehatan. Website Medcare ini, kami menghadirkan konten yang didukung oleh bukti ilmiah, ditulis oleh para ahli kesehatan dan tenaga medis yang berpengalaman.</p>
            <p>Kami berterima kasih atas kunjungan Anda dan harapan kami adalah dapat memberikan manfaat positif bagi perjalanan kesehatan Anda. Jangan ragu untuk menjelajahi seluruh website kami dan mari bergandengan tangan dalam mencapai gaya hidup sehat yang lebih baik !</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<body id="page-top">


    
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script src="<?php echo e(asset('dist/vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/js/ruang-admin.min.js')); ?>"></script>
    <script src="<?php echo e(asset('dist/vendor/chart.js/Chart.min.js')); ?>"></script>
    <?php echo e($script ?? ''); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Sistem-Diagnosa-Penyakit\resources\views/about.blade.php ENDPATH**/ ?>