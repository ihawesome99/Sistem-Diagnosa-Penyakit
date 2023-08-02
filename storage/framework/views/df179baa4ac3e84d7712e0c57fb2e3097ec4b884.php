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

<section class="home" id="home">

    <div class="image">
            <img src=<?php echo e(asset('assets/images/home-img.svg')); ?> alt="">
    </div>

    <div class="content">
        <h3>stay safe, stay healthy</h3>
        <p>" Selamat datang di Website Medcare merupakan website kesehatan terpercaya untuk hidup sehat dan bahagia ! "</p>
        <br>
        <p>Temukan diagnosa dan solusi kesehatan yang tepat untuk kebutuhan yang Anda inginkan, serta mulai lah dengan kehidupan sehat yang lebih baik bersama kami.</p>
        <a href="#" class="btn"> contact us <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>10+</h3>
        <p>Dokter Ahli</p>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>120+</h3>
        <p>Total Pasien</p>
    </div>

    <div class="icons">
        <i class="fas fa-procedures"></i>
        <h3>30+</h3>
        <p>Diagnosa Penyakit yang Terdeteksi</p>
    </div>

    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>80+</h3>
        <p>available hospitals</p>
    </div>

</section>

<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>teams</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/doc-1.jpg" alt="">
            <h3>Irfan Hidayat</h3>
            <span>1204200198</span>
            <div class="share">
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>Moch.Amin</h3>
            <span>1204200105 </span>
            <div class="share">
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>Ahmad Difa S.</h3>
            <span>expert doctor</span>
            <div class="share">
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>Feby Metya A.R</h3>
            <span>1204200118</span>
            <div class="share">
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>Anggraini Putri U.</h3>
            <span>1204200194</span>
            <div class="share">
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

    </div>

</section>

<section class="review" id="review">
    
    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/pic-1.png" alt="">
            <h3>Farel Dimas A.</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

        <div class="box">
            <img src="image/pic-2.png" alt="">
            <h3>Wanda Nadhifa A.</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

        <div class="box">
            <img src="image/pic-3.png" alt="">
            <h3>Fery Ramadhani</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>

    </div>

</section>

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> book </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> blogs </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> FebEng@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> IrMin@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Jl. Difa Aselole </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by <span>mr. web designer</span> | all rights reserved </div>

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
<?php /**PATH C:\KULIAH\KULIAH-SEMESTER 6\FRAMEWORK\UAS\Sistem-Diagnosa-Penyakit\resources\views/welcome.blade.php ENDPATH**/ ?>