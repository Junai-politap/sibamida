<?php $__env->startSection('content'); ?>
<?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!--Start rev slider wrapper-->
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider" data-version="5.0">
        <ul style="height: 50%;">
            <?php $__currentLoopData = $list_slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li data-transition="fade">
                <img src="<?php echo e(url("public/$slide->gambar")); ?>" data-bgfit="cover" class=".bg-image">
                <div class="tp-caption" data-x="center" data-y="top" data-voffset="550" data-start="1000">
                    <div class="slide-content left-slide">
                        <div class="card">
                            <div class="card box" style="background-color: #000000">
                                <strong>
                                    <h4 style="color: white; font-size: 200%"><?php echo e($slide->title); ?></h4>
                                </strong>
                            </div>
                        </div>

                    </div>
                </div>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</section>

<section class="call-toaction-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <ul>
                    <li>
                        <div class="left-content float-left">
                            <div class="icon-holder">
                                <span class="icon-computer thm-clr"></span>
                            </div>
                            <div class="title-holder">
                                <h3>Junior Programmer</h3>
                                <span class="thm-clr">Junior Programmer</span>
                            </div>
                        </div>
                        <div class="right-content float-right">
                            <div class="read-more-button">
                                <div class="inner">
                                    <a href="#"><span class="icon-arrows"></span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="left-content float-left">
                            <div class="icon-holder">
                                <span class="icon-transport thm-clr"></span>
                            </div>
                            <div class="title-holder">
                                <h3>Network Administrator</h3>
                                <span class="thm-clr">Network Administrator</span>
                            </div>
                        </div>
                        <div class="right-content float-right">
                            <div class="read-more-button">
                                <div class="inner">
                                    <a href="#"><span class="icon-arrows"></span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="left-content float-left">
                            <div class="icon-holder">
                                <span class="icon-layers thm-clr"></span>
                            </div>
                            <div class="title-holder">
                                <h3>System Analyst</h3>
                                <span class="thm-clr">System Analyst</span>
                            </div>
                        </div>
                        <div class="right-content float-right">
                            <div class="read-more-button">
                                <div class="inner">
                                    <a href="#"><span class="icon-arrows"></span></a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="blog-area" class="blog-large-area">
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $list_berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($berita->status == 1): ?>
            <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12">
                <div class="blog-post">
                    <div class="single-blog-post">
                        <a href="<?php echo e(url("berita-show/$berita->id")); ?>">
                            <div class="img-holder">
                                <img src="<?php echo e(url("public/$berita->gambar")); ?>" style="object-fit: cover; position: static; width: 100%; height: 400px;">
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
                                        <li><a href="<?php echo e(url("berita-show/$berita->id")); ?>"><span class="icon-time thm-clr"></span>
                                                <?php echo e(date('d-M-Y', strtotime($berita->tanggal_kegiatan))); ?>

                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<section class="testimonial-area parallax-bg-one" style="background-image: url(public/home/images/bg_1.jpg);">
    <div id="particles-js"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-outer">
                    <div class="client-testimonial-carousel owl-carousel owl-theme">

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Sistem\teknologiinformasi\system\resources\views/home/index.blade.php ENDPATH**/ ?>