<?php $__currentLoopData = ['success', 'warning', 'danger', 'primary', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(session($status)): ?>
        <div class="alert alert-<?php echo e($status); ?> alert-dismissable custom-<?php echo e($status); ?>-box" style="height: 80%">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <p style="text-align: center; font-size: 220%">
                <strong> <?php echo e(session($status)); ?> </strong>
            </p>
        </div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH D:\GitHub\sibamida\system\resources\views/components/utils/notif.blade.php ENDPATH**/ ?>