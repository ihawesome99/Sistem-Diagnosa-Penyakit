<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
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
			<i class="fas fa-user mr-1"></i> <?php echo e($riwayat->nama); ?> <i class="fas fa-calendar ml-4 mr-1"></i> <?php echo e($riwayat->created_at->format('d M Y, H:m:s')); ?>

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
		<div class="card card-body p-0 mt-5 border" style="box-shadow: none !important;">
			<div class="card-header bg-primary text-white p-2">
				<h6 class="font-weight-bold">Tabel perhitungan penyakit: <?php echo e($diagnosa['nama_penyakit']); ?> (<?php echo e($diagnosa['kode_penyakit']); ?>)</h6>
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
						<td><span class="text-danger"><?php echo e(number_format($diagnosa['hasil_cf'], 3)); ?></span></td>
					</tr>
				</tfoot>	
			</table>
		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<div class="mt-5">
			<div class="alert alert-success">
				<h5 class="font-weight-bold">Kesimpulan</h5>
				<p>Berdasarkan dari gejala yang kamu pilih atau alami juga berdasarkan Role/Basis aturan yang sudah ditentukan oleh seorang pakar penyakit maka perhitungan Algoritma Certainty Factor mengambil nilai CF yang paling pinggi yakni <b><?php echo e(number_format(unserialize($riwayat->cf_max)[0], 3)); ?> (<?php echo e(number_format(unserialize($riwayat->cf_max)[0], 3) * 100); ?>%)</b> yaitu <b><?php echo e(unserialize($riwayat->cf_max)[1]); ?></b></p>
			</div>
			<div class="mt-3 text-center">
				<a href="<?php echo e(asset("storage/downloads/$riwayat->file_pdf")); ?>" target="_blank" class="btn btn-primary mr-1"><i class="fas fa-print mr-1"></i> Print</a>
				<a href="<?php echo e(route('admin.diagnosa')); ?>" class="btn btn-warning mr-1"><i class="fas fa-redo mr-1"></i> Diagnosa ulang</a>
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
<?php endif; ?><?php /**PATH C:\KULIAH\KULIAH-SEMESTER 6\FRAMEWORK\UTS\Sistem-Diagnosa-Penyakit\resources\views/admin/riwayat/show.blade.php ENDPATH**/ ?>