<?php $__env->startSection('menu'); ?>
    <ul class="sub-menu">
        <?php $__currentLoopData = $list_opd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(url("master-aset/$opd->id")); ?>"  ><?php echo e($opd->singkatan); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>
<?php /**PATH E:\Sistem\sibamida\system\resources\views/menu/menu.blade.php ENDPATH**/ ?>