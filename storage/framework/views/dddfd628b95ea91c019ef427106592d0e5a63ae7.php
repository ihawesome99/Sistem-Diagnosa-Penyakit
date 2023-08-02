<div class="form-group">
    <label><?php echo e($text); ?></label>
    <input type="<?php echo e($type); ?>" class="form-control" id="<?php echo e(Str::slug($text)); ?>" name="<?php echo e($name); ?>" placeholder="Enter <?php echo e($text); ?>" value="<?php echo e(($value) ?? ''); ?>">
</div><?php /**PATH C:\KULIAH\KULIAH-SEMESTER 6\FRAMEWORK\UAS\Sistem-Diagnosa-Penyakit\resources\views/components/input.blade.php ENDPATH**/ ?>