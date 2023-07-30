<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   
   <!--Start rev slider wrapper-->     
<section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
        <ul style="height: 50%;">
            <?php $__currentLoopData = $list_slide; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li data-transition="fade">
                    <img src="<?php echo e(url("public/$slide->gambar")); ?>" alt="" width="1920" height="700" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
                    
                    
                    <div class="tp-caption  tp-resizeme" 
                        data-x="left" data-hoffset="0" 
                        data-y="top" data-voffset="240" 
                        data-transform_idle="o:1;"         
                        data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-mask_in="x:[100%];y:0;s:inherit;e:inherit;" 
                        data-splitin="none" 
                        data-splitout="none"
                        data-responsive_offset="on"
                        data-start="1500">
                        <div class="slide-content left-slide">
                            <div class="big-title bold" style="color: black"><?php echo e($slide->title); ?></div>
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
                                <span class="flaticon-school-material text-white"></span>   
                            </div>
                            <div class="title-holder">
                                <h3>Technopreneur</h3>
                                <span class="thm-clr">Technopreneur</span>
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

<section class="choosing-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="title"> Berita Terkini</div>
            <div class="dector thm-bg-clr center"></div>
        </div>
        <div class="row">
            <?php $__currentLoopData = $list_berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                    <div class="single-choosing-item">
                        <div class="pic" style="height: 50%">
                            <img style="object-fit: cover; position: static;" src="<?php echo e(url("public/$berita->gambar")); ?>" alt="Image" class="img-fluid">
                        </div>
                        <div class="text-holder">
                            <p>
                                <?php echo e($berita->nama_berita); ?>

                            </p>
                            <a class="readmore" href="#">Read More</a>    
                        </div>
                    </div>
                </div>    
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

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/teknologiinformasi/system/resources/views/home/index.blade.php ENDPATH**/ ?>