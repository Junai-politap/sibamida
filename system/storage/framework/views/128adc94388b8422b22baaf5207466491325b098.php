<?php $__env->startSection('menu'); ?>
    <?php $__currentLoopData = $list_jenis_pelayanan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis_pelayanan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <li><a href="<?php echo e(url("show-pelayanan/$jenis_pelayanan->id")); ?>"><?php echo e($jenis_pelayanan->nama_jenis_pelayanan); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('pedoman'); ?>
    <?php $__currentLoopData = $list_jenis_pedoman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis_pedoman): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><a href="<?php echo e(url("show-pedoman/$jenis_pedoman->id")); ?>"><?php echo e($jenis_pedoman->nama_jenis_pedoman); ?></a></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/section/menu.blade.php ENDPATH**/ ?>