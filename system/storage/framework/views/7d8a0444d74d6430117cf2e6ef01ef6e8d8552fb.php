<?php

function checkRouteActive($route)
{
    if (Route::current()->uri == $route) {
        return 'active';
    }
}
?>

<div class="col-md-12">

    <div class="widget"><br>
        <div class="m-b-lg nav-tabs-horizontal">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="<?php echo e(checkRouteActive('tracer-study')); ?>"><a href="<?php echo e(url('tracer-study')); ?>" style="text-transform: capitalize"1. >Evaluasi pembelajaran saat kuliah</a></li>

                <li role="presentation" class="<?php echo e(checkRouteActive('tracer-study-form-ii')); ?>"><a href="<?php echo e(url('tracer-study-form-ii')); ?>" style="text-transform: capitalize">2. Informasi tentang pekerjaan Alumni</a></li>

                <li role="presentation" class="<?php echo e(checkRouteActive('tracer-study-form-iii')); ?>"><a href="<?php echo e(url('tracer-study-form-iii')); ?>" style="text-transform: capitalize">3. Perbaikan Proses Pembelajaran</a></li>

                <li role="presentation" class="<?php echo e(checkRouteActive('tracer-study-form-iv')); ?>"><a href="<?php echo e(url('tracer-study-form-iv')); ?>" style="text-transform: capitalize">4. Kompetensi Alumni</a></li>

                <li role="presentation" class="<?php echo e(checkRouteActive('tracer-study-form-v')); ?>"><a href="<?php echo e(url('tracer-study-form-v')); ?>" style="text-transform: capitalize">5. Kontribusi Kompetensi yang diperlukan dalam pekerjaan</a></li>
            </ul>
        </div>
    </div>
</div><?php /**PATH /data/www/teknologiinformasi/system/resources/views/section/form.blade.php ENDPATH**/ ?>