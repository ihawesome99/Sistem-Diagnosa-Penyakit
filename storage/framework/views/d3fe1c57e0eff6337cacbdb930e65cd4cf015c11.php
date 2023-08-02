<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
	 <?php $__env->slot('head', null, []); ?> 
		<link href="<?php echo e(asset('dist/vendor/datatables/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
	 <?php $__env->endSlot(); ?>

	 <?php $__env->slot('title', null, []); ?> Data Rules <?php $__env->endSlot(); ?>

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
		<div class="row">
			<div class="col-md-8">
					<form action="<?php echo e(route('admin.rules.update', $data_penyakit->id)); ?>" method="POST" id="update_rules">
						<?php echo csrf_field(); ?>
				<div class="table-responsive">
						<table class="table align-items-center table-flush table-hover border" id="dataTableHover">
						<thead class="thead-light">
							<tr>
								<th style="width: 10%;">No.</th>
								<th style="width: 60%;">Gejala</th>
								<th style="width: 20%;">Nilai</th>
								<th style="width: 10%;"></th>
							</tr>
						</thead>
						<tbody>
							<?php $rows = 1; ?>

							<?php $__currentLoopData = $gejala_penyakit->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($rows); ?></td>
								<td><?php echo e($row->nama); ?></td>
								<td>
									<input type="number" step="0.2" class="form-control form-control-sm" value="<?php echo e($row->pivot->value_cf); ?>" name="gejala-<?php echo e($row->id); ?>">
								</td>
								<td>
									<div class="custom-control custom-switch">
						                <input type="checkbox" class="custom-control-input check" data-id="<?php echo e($row->id); ?>" id="gejala-<?php echo e($row->id); ?>" checked>
						                <label class="custom-control-label" for="gejala-<?php echo e($row->id); ?>"></label>
						             </div>
								</td>
							</tr>
							<?php $rows++; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

							<?php $__currentLoopData = $gejala; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<?php if(!in_array($row->id, $gejala_id)): ?>
							<tr>
								<td><?php echo e($rows); ?></td>
								<td><?php echo e($row->nama); ?></td>
								<td>
						            <input type="number" step="0.2" class="form-control form-control-sm" name="gejala-<?php echo e($row->id); ?>" disabled>
								</td>
								<td>
									<div class="custom-control custom-switch">
						                <input type="checkbox" class="custom-control-input check" data-id="<?php echo e($row->id); ?>" id="gejala-<?php echo e($row->id); ?>">
						                <label class="custom-control-label" for="gejala-<?php echo e($row->id); ?>"></label>
						              </div>
								</td>
							</tr>
							<?php $rows++; ?>
							<?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>
				</div>
					</form>
			</div>

			<div class="col-md-4">
				<div class="list-group">
					<?php $__currentLoopData = $penyakit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<a href="<?php echo e(route('admin.rules', $row->id)); ?>" class="list-group-item list-group-item-action <?php echo e(($data_penyakit->nama == $row->nama) ? 'active' : ''); ?>">
					<?php echo e($row->nama); ?>

					</a>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>
				<div class="mt-3">
					<button class="btn-primary btn save">Simpan</button>
					<a href="" class="btn-warning btn">Reset</a> 
				</div>
			</div>
		</div>
	 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

	 <?php $__env->slot('script', null, []); ?> 
		<!-- Page level plugins -->
		<script src="<?php echo e(asset('dist/vendor/datatables/jquery.dataTables.min.js')); ?>"></script>
		<script src="<?php echo e(asset('dist/vendor/datatables/dataTables.bootstrap4.min.js')); ?>"></script>
		<script>
			$('.save').click(function() {
				$('#update_rules').submit()
			})

			$('.check').change(function() {
				const id = $(this).data('id')

				if(this.checked) {
					$(`input[name="gejala-${id}"]`).removeAttr('disabled')
				} else {
					$(`input[name="gejala-${id}"]`).attr('disabled', '')
					$(`input[name="gejala-${id}"]`).val('')
				}
			})
		</script>
	 <?php $__env->endSlot(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\KULIAH\KULIAH-SEMESTER 6\FRAMEWORK\UTS\Sistem-Diagnosa-Penyakit\resources\views/admin/rules/index.blade.php ENDPATH**/ ?>