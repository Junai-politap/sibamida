
<?php $__env->startSection('title', 'Fasilitas Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Detail Fasilitas',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="choosing-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="title"> Ruangan <?php echo e($fasilitas->nama_fasilitas); ?></div>
                <div class="dector thm-bg-clr center"></div>
            </div>
            <div class="car">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <?php $__currentLoopData = $list_video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($video->id_fasilitas == $fasilitas->id): ?>
                                <?php echo nl2br($video->link); ?>

                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                   
                </div>

                <div class="row">
                    <div class="col-md-6 mb-4">
                        <p>
                            <img src="<?php echo e(url("public/$fasilitas->foto")); ?>" alt="Image" class="img-fluid"
                                id="img-container">
                        </p>

                    </div>
                    <div class="col-lg-5 ml-auto">
                        <div class="row">
                            <?php $__currentLoopData = $list_galery_fasilitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galery_fasilitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($galery_fasilitas->id_fasilitas == $fasilitas->id): ?>
                                    <div class="col-4 mb-5 product-image-thumb">
                                        <img src="<?php echo e(url("public/$galery_fasilitas->foto")); ?>" alt=""
                                            class="img-fluid"
                                            onclick="changePicture('<?php echo e(url("public/$galery_fasilitas->foto")); ?>')" style="object-fit: cover; position: static; width: 100%; height: 100%;">
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 ml-auto">
                        <h2 class="section-title-underline mb-2">
                            <span><?php echo e($fasilitas->nama_fasilitas); ?></span>
                        </h2>
                        <p><strong class="text-black d-block">

                                <?php echo nl2br($fasilitas->detail_fasilitas); ?>

                            </strong>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function changePicture(url) {
            $("#img-container").attr("src", url);
        }
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/home/fasilitas/show.blade.php ENDPATH**/ ?>