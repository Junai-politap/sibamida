<?php $__env->startSection('title', 'Survei Kepuasan Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Survei Kepuasan',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="choosing-area">
        <div class="container">
            
            <div class="row">

                <div class="col-md-4 col-sm-12">
                    <div class="single-choosing-item">
                        <div class="top">
                            <div class="title-holder float-left">
                                <h3>Survei Kepuasan <br> Tenaga Pendidik/Dosen</h3>
                            </div>
                            <div class="icon-holder float-right">
                                <span class="icon-business2"></span>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>

                            </p>
                            <a class="readmore" href="<?php echo e(url('pelayanan/survei-kepuasan-dosen')); ?>"> Detail Survei
                                Kepuasan</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="single-choosing-item">
                        <div class="top">
                            <div class="title-holder float-left">
                                <h3>Survei Kepuasan <br> Tenaga Pendidik/Teknisi</h3>
                            </div>
                            <div class="icon-holder float-right">
                                <span class="icon-business2"></span>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>

                            </p>
                            <a class="readmore" href="<?php echo e(url('pelayanan/survei-kepuasan-teknisi')); ?>"> Detail Survei
                                Kepuasan</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="single-choosing-item">
                        <div class="top">
                            <div class="title-holder float-left">
                                <h3>Survei Kepuasan <br> Mahasiswa</h3>
                            </div>
                            <div class="icon-holder float-right">
                                <span class="icon-business2"></span>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>

                            </p>
                            <a class="readmore" href="<?php echo e(url('pelayanan/survei-kepuasan-mahasiswa')); ?>"> Detail Survei
                                Kepuasan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/home/pelayanan/survei.blade.php ENDPATH**/ ?>