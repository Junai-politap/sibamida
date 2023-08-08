<?php $__env->startSection('menu'); ?>
    <ul class="sub-menu">
        <?php $__currentLoopData = $list_opd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $opd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(url("assets/$opd->id")); ?>"  ><?php echo e($opd->singkatan); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>
<?php /**PATH D:\Github\sibamida\system\resources\views/menu/menu.blade.php ENDPATH**/ ?>