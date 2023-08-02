<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <img src="<?php echo e(asset((setting('logo')) ? '/storage/'.setting('logo') : 'dist/img/logo/logo2.png')); ?>">
        </div>
        <div class="sidebar-brand-text mx-3">SIDAPM</div>
    </a>
    <hr class="sidebar-divider my-0">

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('dashboard')): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav-link','data' => ['text' => 'Dashboard','icon' => 'th','url' => ''.e(route('admin.dashboard')).'','active' => ''.e(request()->routeIs('admin.dashboard') ? ' active' : '').'']]); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['text' => 'Dashboard','icon' => 'th','url' => ''.e(route('admin.dashboard')).'','active' => ''.e(request()->routeIs('admin.dashboard') ? ' active' : '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <hr class="sidebar-divider mt-3 mb-0">
    <?php endif; ?>
    
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('diagnosa')): ?>    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav-link','data' => ['text' => 'Diagnosa','icon' => 'stethoscope','url' => ''.e(route('admin.diagnosa')).'','active' => ''.e(request()->routeIs('admin.diagnosa') ? ' active' : '').'']]); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['text' => 'Diagnosa','icon' => 'stethoscope','url' => ''.e(route('admin.diagnosa')).'','active' => ''.e(request()->routeIs('admin.diagnosa') ? ' active' : '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>
    
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('riwayat-list')): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav-link','data' => ['text' => 'Riwayat Diagnosa','icon' => 'notes-medical','url' => ''.e(route('admin.riwayat.daftar')).'','active' => ''.e(request()->routeIs('admin.riwayat.daftar') ? ' active' : '').'']]); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['text' => 'Riwayat Diagnosa','icon' => 'notes-medical','url' => ''.e(route('admin.riwayat.daftar')).'','active' => ''.e(request()->routeIs('admin.riwayat.daftar') ? ' active' : '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('member-list')): ?>
    <hr class="sidebar-divider mt-3 mb-0">
    
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav-link','data' => ['text' => 'Daftar User','icon' => 'users','url' => ''.e(route('admin.member')).'','active' => ''.e(request()->routeIs('admin.member') ? ' active' : '').'']]); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['text' => 'Daftar User','icon' => 'users','url' => ''.e(route('admin.member')).'','active' => ''.e(request()->routeIs('admin.member') ? ' active' : '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('penyakit-list')): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav-link','data' => ['text' => 'Daftar Penyakit','icon' => 'th-list','url' => ''.e(route('admin.penyakit')).'','active' => ''.e(request()->routeIs('admin.penyakit') ? ' active' : '').'']]); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['text' => 'Daftar Penyakit','icon' => 'th-list','url' => ''.e(route('admin.penyakit')).'','active' => ''.e(request()->routeIs('admin.penyakit') ? ' active' : '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('gejala-list')): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav-link','data' => ['text' => 'Daftar Gejala','icon' => 'th-list','url' => ''.e(route('admin.gejala')).'','active' => ''.e(request()->routeIs('admin.gejala') ? ' active' : '').'']]); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['text' => 'Daftar Gejala','icon' => 'th-list','url' => ''.e(route('admin.gejala')).'','active' => ''.e(request()->routeIs('admin.gejala') ? ' active' : '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>

    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('rules-list')): ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.nav-link','data' => ['text' => 'Basis Rules','icon' => 'briefcase-medical','url' => ''.e(route('admin.rules', 1)).'','active' => ''.e(request()->routeIs('admin.rules') ? ' active' : '').'']]); ?>
<?php $component->withName('nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['text' => 'Basis Rules','icon' => 'briefcase-medical','url' => ''.e(route('admin.rules', 1)).'','active' => ''.e(request()->routeIs('admin.rules') ? ' active' : '').'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <?php endif; ?>
    
    <hr class="sidebar-divider mb-0">

</ul><?php /**PATH C:\KULIAH\KULIAH-SEMESTER 6\FRAMEWORK\UTS\Sistem-Diagnosa-Penyakit\resources\views/components/sidebar.blade.php ENDPATH**/ ?>