<div class="form-group">
	<label for="<?php echo e($name); ?>"><?php echo e($text); ?></label>
	<select name="<?php echo e($name); ?>" id="<?php echo e(Str::slug($text)); ?>" class="form-control" multiple>
		<?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<option value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</select>
</div><?php /**PATH C:\KULIAH\KULIAH-SEMESTER 6\FRAMEWORK\UAS\Sistem-Diagnosa-Penyakit\resources\views/components/select.blade.php ENDPATH**/ ?>