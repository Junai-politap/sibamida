<form action="<?php echo e(url($url, $id)); ?>" method="post" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
    <?php echo csrf_field(); ?>
    <?php echo method_field('delete'); ?>
    <button class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
</form><?php /**PATH E:\Sistem\sibamida\system\resources\views/components/button/delete-button.blade.php ENDPATH**/ ?>