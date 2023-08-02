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

<body id="page-top">
    <div id="wrapper">

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content" class="pb-5">
                <div class="container-fluid" id="container-wrapper">

                    <div class="container-fluid" id="container-wrapper">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-4">
                            <h1 class="h3 mb-0 text-gray-800">Diagnosa</h1>
                        </div>

                        <section class="row">

                            
                            <div class="col-md-12">
                                 <?php $__env->slot('title', null, []); ?> Hasil diagnosa <?php $__env->endSlot(); ?>

                                <?php if(session()->has('success')): ?>
                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.alert','data' => ['type' => 'success','message' => ''.e(session()->get('success')).'']]); ?>
<?php $component->withName('alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['type' => 'success','message' => ''.e(session()->get('success')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                <?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card','data' => ['title' => 'Berikut hasil diagnosa penyakit']]); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['title' => 'Berikut hasil diagnosa penyakit']); ?>
                                    <p class="mb-4">
                                        <i class="fas fa-user mr-1"></i> <?php echo e($riwayat->nama); ?> <i
                                            class="fas fa-calendar ml-4 mr-1"></i>
                                        <?php echo e($riwayat->created_at->format('d M Y, H:m:s')); ?>

                                    </p>

                                    <table class="table table-hover border">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Gejala yang kamu alami saat ini</th>
                                                <th>Tingkat keyakinan</th>
                                                <th>CF User</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = unserialize($riwayat->gejala_terpilih); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gejala): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($gejala['kode']); ?> - <?php echo e($gejala['nama']); ?></td>
                                                    <td><?php echo e($gejala['keyakinan']); ?></td>
                                                    <td><?php echo e($gejala['cf_user']); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>

                                    <?php $__currentLoopData = unserialize($riwayat->hasil_diagnosa); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diagnosa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="card card-body p-0 mt-5 border"
                                            style="box-shadow: none !important;">
                                            <div class="card-header bg-primary text-white p-2">
                                                <h6 class="font-weight-bold">Tabel perhitungan penyakit:
                                                    <?php echo e($diagnosa['nama_penyakit']); ?>

                                                    (<?php echo e($diagnosa['kode_penyakit']); ?>)</h6>
                                            </div>
                                            <table class="table table-hover">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>Gejala</th>
                                                        <th>CF User</th>
                                                        <th>CF Expert</th>
                                                        <th>CF (H, E)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $__currentLoopData = $diagnosa['gejala']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gejala): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($gejala['kode']); ?> - <?php echo e($gejala['nama']); ?></td>
                                                            <td><?php echo e($gejala['cf_user']); ?></td>
                                                            <td><?php echo e($gejala['cf_role']); ?></td>
                                                            <td><?php echo e($gejala['hasil_perkalian']); ?></td>
                                                        </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                                <tfoot class="font-weight-bold">
                                                    <tr>
                                                        <td scope="row">Nilai CF</td>
                                                        <td><span
                                                                class="text-danger"><?php echo e(number_format($diagnosa['hasil_cf'], 3)); ?></span>
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <div class="mt-5">
                                        <div class="alert alert-success">
                                            <h5 class="font-weight-bold">Kesimpulan</h5>
                                            <p>Berdasarkan dari gejala yang kamu pilih atau alami juga berdasarkan
                                                Role/Basis aturan yang sudah ditentukan oleh seorang pakar penyakit maka
                                                perhitungan Algoritma Certainty Factor mengambil nilai CF yang paling
                                                pinggi yakni
                                                <b><?php echo e(number_format(unserialize($riwayat->cf_max)[0], 3)); ?>

                                                    (<?php echo e(number_format(unserialize($riwayat->cf_max)[0], 3) * 100); ?>%)</b>
                                                yaitu <b><?php echo e(unserialize($riwayat->cf_max)[1]); ?></b></p>
                                        </div>
                                        <div class="mt-3 text-center">
                                            <a href="<?php echo e(asset("storage/downloads/$riwayat->file_pdf")); ?>"
                                                target="_blank" class="btn btn-primary mr-1"><i
                                                    class="fas fa-print mr-1"></i> Print</a>
                                            <a href="<?php echo e(route('admin.diagnosa')); ?>" class="btn btn-warning mr-1"><i
                                                    class="fas fa-redo mr-1"></i> Diagnosa ulang</a>
                                        </div>
                                    </div>
                                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            </div>
                        </section>

                    </div>

                </div>
            </div>

        </div>
    </div>

    
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
<?php /**PATH C:\xampp\htdocs\Sistem-Diagnosa-Penyakit\resources\views/riwayat-detail.blade.php ENDPATH**/ ?>