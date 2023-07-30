

<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA | MAHASISWA'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('section.mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="widget p-md clearfix" style="height: 500px">
					<div class="pull-left">
						<h3 class="widget-title">Welcome Home </h3>
						<h2 class="text-color"><?php echo e($mahasiswa->nama); ?></h2>
					</div>
					<span class="pull-right fz-lg fw-500 counter" data-plugin="counterUp"></span>
				</div>
			</div>
		</div>
	</section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/mahasiswa/index.blade.php ENDPATH**/ ?>