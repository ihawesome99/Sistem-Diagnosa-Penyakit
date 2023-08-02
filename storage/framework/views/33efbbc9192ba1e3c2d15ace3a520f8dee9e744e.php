<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo e($title); ?></title>
        <link href="<?php echo e(asset('dist/img/logo/logo.png')); ?>" rel="shortcut icon" type="image/x-icon">
        <link href="<?php echo e(asset('dist/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('dist/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('dist/css/ruang-admin.min.css')); ?>" rel="stylesheet">
        <?php echo e(($head) ?? ''); ?>

    </head>

    <body id="page-top">
        <div id="wrapper">

            
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.sidebar','data' => []]); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content" class="pb-5">
                    
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.topbar','data' => []]); ?>
<?php $component->withName('topbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    
                    <div class="container-fluid" id="container-wrapper">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800"><?php echo e($title); ?></h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo e($title); ?></li>
                            </ol>
                        </div>

                        
                        <?php echo e($slot); ?>


                        
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.modal-logout','data' => []]); ?>
<?php $component->withName('modal-logout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
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
        <?php echo e(($script) ?? ''); ?>

    </body>
</html><?php /**PATH C:\KULIAH\KULIAH-SEMESTER 6\FRAMEWORK\UTS\Sistem-Diagnosa-Penyakit\resources\views/layouts/app.blade.php ENDPATH**/ ?>