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
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.alert-error','data' => []]); ?>
<?php $component->withName('alert-error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                 <?php $__env->slot('title', null, []); ?> Riwayat diagnosa <?php $__env->endSlot(); ?>

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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card','data' => []]); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
                                    <div style="box-shadow:.10rem .10rem .5rem .0rem rgba(22, 160, 133, .2);">
                                        <table class="table table-hover border">
                                            <thead>
                                                <th>ID</th>
                                                <?php if(auth()->check() && auth()->user()->hasRole('Admin')): ?>
                                                    <th>Nama</th>
                                                <?php endif; ?>
                                                <th>Penyakit terdiagnosa</th>
                                                <th>Tanggal</th>
                                                <th></th>
                                            </thead>
                                            <tbody>
                                                <?php $__empty_1 = true; $__currentLoopData = $riwayat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                    <tr>
                                                        <td><?php echo e($row->id); ?></td>
                                                        <?php if(auth()->check() && auth()->user()->hasRole('Admin')): ?>
                                                            <td><?php echo e($row->nama); ?></td>
                                                        <?php endif; ?>
                                                        <td><?php echo e(unserialize($row->cf_max)[1]); ?> <b>(<span
                                                                    class="text-danger"><?php echo e(number_format(unserialize($row->cf_max)[0] * 100, 2)); ?>%</span>)</b>
                                                        </td>
                                                        <td><?php echo e($row->created_at->format('d M Y, H:m:s')); ?></td>
                                                        <td>
                                                            <a href="<?php echo e(asset("storage/downloads/$row->file_pdf")); ?>"
                                                                target="_blank" class="btn btn-primary btn-sm mr-1"><i
                                                                    class="fas fa-print mr-1"></i></a>
                                                            <a href="<?php echo e(route('admin.riwayat.user', $row->id)); ?>"
                                                                class="btn btn-info btn-sm"><i
                                                                    class="fas fa-eye mr-1"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                    <tr>
                                                        <td colspan="5" class="text-center">No Data</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                        <div class="mt-3">
                                            <?php echo e($riwayat->links()); ?>

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
<?php /**PATH C:\KULIAH\KULIAH-SEMESTER 6\FRAMEWORK\UTS\Sistem-Diagnosa-Penyakit\resources\views/riwayat.blade.php ENDPATH**/ ?>