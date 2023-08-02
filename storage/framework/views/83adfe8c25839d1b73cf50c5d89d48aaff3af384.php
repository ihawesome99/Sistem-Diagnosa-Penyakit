<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> 
        Diagnosa penyakit
     <?php $__env->endSlot(); ?>

     <?php $__env->slot('head', null, []); ?> 
        <style>
            .red-border {
                border: 1px solid rgba(227, 39, 79, .8);
            }

            .green-border {
                border: 1px solid rgba(50, 179, 104, .8);
            }
        </style>
     <?php $__env->endSlot(); ?>

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
                <div class="card-body">
                    <form action="<?php echo e(route('admin.diagnosa')); ?>" method="post">
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\KULIAH\KULIAH-SEMESTER 6\FRAMEWORK\UTS\Sistem-Diagnosa-Penyakit\resources\views/admin/diagnosa.blade.php ENDPATH**/ ?>