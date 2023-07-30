<?php $__env->startSection('title', 'Berita Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Berita',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section id="blog-area" class="blog-large-area">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $list_berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="blog-post">
                        <div class="single-blog-post">
                            
                            <div class="img-holder">
                                <img src="<?php echo e(url("public/$berita->gambar")); ?>" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <p>
                                                 
                                                 <?php echo e($berita->nama_berita); ?>

                                            </p>
                                            <a href="<?php echo e(url("berita-show/$berita->id")); ?>">Read More<span class="icon-arrows"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3 class="blog-title">
                                   
                                </h3> 
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li><a href="#"><span class="icon-time thm-clr"></span> <?php echo e($berita->created_at->format('d F Y')); ?></a></li>
                                        
                                    </ul>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/home/berita/index.blade.php ENDPATH**/ ?>