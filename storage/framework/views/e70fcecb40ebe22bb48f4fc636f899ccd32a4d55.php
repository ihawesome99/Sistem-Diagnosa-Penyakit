<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
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
		<div class="table-responsive">
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
					<td><?php echo e(unserialize($row->cf_max)[1]); ?> <b>(<span class="text-danger"><?php echo e(number_format(unserialize($row->cf_max)[0] * 100, 2)); ?>%</span>)</b></td>
					<td><?php echo e($row->created_at->format('d M Y, H:m:s')); ?></td>
					<td>
						<a href="<?php echo e(asset("storage/downloads/$row->file_pdf")); ?>" target="_blank" class="btn btn-primary btn-sm mr-1"><i class="fas fa-print mr-1"></i></a>
						<a href="<?php echo e(route('admin.riwayat', $row->id)); ?>" class="btn btn-info btn-sm"><i class="fas fa-eye mr-1"></i></a>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\KULIAH\KULIAH-SEMESTER 6\FRAMEWORK\UAS\Sistem-Diagnosa-Penyakit\resources\views/admin/riwayat/index.blade.php ENDPATH**/ ?>