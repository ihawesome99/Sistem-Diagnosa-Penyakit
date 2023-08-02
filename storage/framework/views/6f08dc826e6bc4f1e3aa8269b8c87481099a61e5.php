<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hasil Diagnosa</title>
    <link href="<?php echo e(public_path('dist/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
	$riwayat = App\Models\Riwayat::find($id);
	?>
	
	<p class="mb-4"> 
		<b>Nama :</b> <?php echo e($riwayat->nama); ?>

	</p>

	<p class="mb-4"> 
		<b>Tanggal :</b> <?php echo e($riwayat->created_at->format('d M Y, H:m:s A')); ?>

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
	<div class="card card-body shadow-none p-0 mt-5 border">
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
	</div>
</body>
</html><?php /**PATH C:\KULIAH\KULIAH-SEMESTER 6\FRAMEWORK\UAS\Sistem-Diagnosa-Penyakit\resources\views/pdf/riwayat.blade.php ENDPATH**/ ?>