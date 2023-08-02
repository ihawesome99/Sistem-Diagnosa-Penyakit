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
            <div id="content">
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
                                <div class="card">
                                    <div style="box-shadow:.10rem .10rem .5rem .0rem rgba(22, 160, 133, .2);">
                                        <form action="<?php echo e(route('admin.diagnosa.user')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                    
                                        <?php if(auth()->check() && auth()->user()->hasRole('Admin')): ?>
                                        <label for=""><b><i class="fas fa-user mr-1"></i> Nama</b></label>
                                        <input type="text" class="form-control mb-3 w-50" name="nama">
                                        <?php endif; ?>
                    
                                        <p>Pilih gejala yang sedang dirasakan.</p>
                    
                                        <label for=""><b><i class="fas fa-th mr-1"></i> Gejala-gejala</b></label>
                                        <?php $__currentLoopData = $gejala; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php 
                                            $mod = ($key + 1) % 2;
                                            ?>
                    
                                            <?php if($mod == 1): ?>
                                        <div class="row">
                                            <?php endif; ?>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center justify-content-between border mb-2 p-2">
                                                    <div>
                                                        <span class="ml-2"><?php echo e($value->nama); ?></span>
                                                    </div>
                                                    <div>
                                                        <select name="diagnosa[]" id="" class="form-control form-control-sm red-border">
                                                            <option value="<?php echo e($value->id); ?>+-1">Pasti tidak</option>
                                                            <option value="<?php echo e($value->id); ?>+-0.8">Hampir pasti tidak</option>
                                                            <option value="<?php echo e($value->id); ?>+-0.6">Kemungkinan besar tidak</option>
                                                            <option value="<?php echo e($value->id); ?>+-0.4">Mungkin tidak</option>
                                                            <option value="" selected>Tidak tahu</option>
                                                            <option value="<?php echo e($value->id); ?>+0.4">Mungkin</option>
                                                            <option value="<?php echo e($value->id); ?>+0.6">Sangat mungkin</option>
                                                            <option value="<?php echo e($value->id); ?>+0.8">Hampir pasti</option>
                                                            <option value="<?php echo e($value->id); ?>+1">Pasti</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                    
                                        <?php if($mod == 0): ?>
                                        </div>
                                        <?php endif; ?>
                    
                                        <?php if($key + 1 == \App\Models\Gejala::count() && $mod != 0): ?>
                                        </div>
                                        <?php endif; ?>
                                            
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary">Diagnosa sekarang</button>
                                        </div>
                                    </div>
                                </form>
                                </div>  
                            </div>
                        </section>
                    
                         <?php $__env->slot('script', null, []); ?> 
                            <script>
                                $('button[type="submit"]').click(function() {
                                    $(this).attr('disabled')
                                })
                    
                                $('select[name="diagnosa[]"]').on('change', function() {
                                    if(this.value == "") {
                                        $(this).attr('class', 'form-control form-control-sm red-border')
                                    } else {
                                        $(this).attr('class', 'form-control form-control-sm green-border')
                                    }
                                })
                            </script>
                         <?php $__env->endSlot(); ?>

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
<?php /**PATH C:\KULIAH\KULIAH-SEMESTER 6\FRAMEWORK\UTS\Sistem-Diagnosa-Penyakit\resources\views/diagnosa.blade.php ENDPATH**/ ?>