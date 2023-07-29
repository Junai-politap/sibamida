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
                <div class="col-xl-8 col-lg-7 col-md-12 col-sm-12">
                    <div class="blog-post">
                        <div class="single-blog-post">
                            <div class="img-holder">
                                <img src="images/blog/v2-1.jpg" alt="Awesome Image">
                                <div class="overlay-style-one">
                                    <div class="box">
                                        <div class="content">
                                            <p>Idea of denouncing pleasure & praising pain was born and we will give you complete account of the system how all this mistaken idea of denouncing pleasure & praising  was born and I will give you a complete account...</p>
                                            <a href="blog-single.html">Read More<span class="icon-arrows"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-holder">
                                <h3 class="blog-title"><a href="blog-single.html">Transform Customer Experience with an Intelligent Client Management.</a></h3> 
                                <div class="meta-box">
                                    <ul class="meta-info">
                                        <li><a href="#"><span class="icon-shape thm-clr"></span> Van Roger</a></li>
                                        <li><a href="#"><span class="icon-time thm-clr"></span> 14th May, 2017</a></li>
                                        <li><a href="#"><span class="icon-interface thm-clr"></span> 2 Comments</a></li>
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

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\resources\views/home/berita/index.blade.php ENDPATH**/ ?>