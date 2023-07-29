
<?php $__env->startSection('title', 'Workshop Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Workshop',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="choosing-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="title"> Data Ruangan Workshop</div>
                <div class="dector thm-bg-clr center"></div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $list_fasilitas->where('jenis_fasilitas', 'Workspace'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fasilitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                        <div class="single-choosing-item">
                            <div class="pic" style="height: 100%">
                                <img style="object-fit: cover; position: static;" src="<?php echo e(url("public/$fasilitas->foto")); ?>"">
                            </div>
                            <div class="text-holder">
                                <p style="color: black; font-size: 100%; text-align: center">
                                    <?php echo e($fasilitas->nama_fasilitas); ?>

                                </p>
                                <a class="readmore" href="<?php echo e(url("show-workshop/$fasilitas->id")); ?>">Detail</a>    
                            </div>
                        </div>
                    </div>    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>       
            </div>
            <hr>
            <div class="approach-content-box">
                <div class="sec-title">
                    <h2>Detail Fasilitas</h2>
                    
                </div>
                <div class="row">
                    <?php $__currentLoopData = $list_fasilitas->where('jenis_fasilitas', 'Workspace'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fasilitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-12">
                            <div class="text">

                            </div>
                            <div class="accordion-holder style-one">
                                <article class="accordion">
                                    <div class="acc-btn">
                                        <div class="toggle-icon"><span class="icon-layers"></span></div>
                                        <h3><?php echo e($fasilitas->nama_fasilitas); ?></h3>
                                    </div>
                                    <div class="acc-content">
                                        <div class="inner">
                                            <p>
                                                <?php echo nl2br($fasilitas->detail_fasilitas); ?>

                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>    
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/home/fasilitas/workspace.blade.php ENDPATH**/ ?>