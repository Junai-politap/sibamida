

<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA | MAHASISWA'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('section.mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <br>
                <?php echo $__env->make('section.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-md-12">
                    <?php echo $__env->make('section.notif', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php if($mahasiswa->status_tracing == 0): ?>
                        <div class="widget"><br>
                            
                                <header class="widget-header"><br>
                                    <h4 class="widget-title">
                                        <?php $__currentLoopData = $list_bagian->where('id', '96ae217a-7d04-4bdc-84f4-8c91a51adde5'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bagian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <h1><?php echo e($bagian->nama); ?> - <?php echo e($bagian->title); ?></h1>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </h4>
                                </header>
                                <hr class="widget-separator">
                                <div class="container">
                                    <form action="<?php echo e(url('store-form-I')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input name="id_mahasiswa" value="<?php echo e($mahasiswa->id); ?>" type="hidden">
                                        

                                        <?php $__currentLoopData = $list_soal->whereIn('id_bagian', '96ae217a-7d04-4bdc-84f4-8c91a51adde5'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="form-group">
                                                <input name="jawaban[<?php echo e($soal->id); ?>]" value="<?php echo e($soal->id); ?>" class="form-control" type="hidden">
                                                <input name="id_bagian" value="<?php echo e($soal->bagian->id); ?>" class="form-control" type="hidden">

                                                <div class="col-lg-12 news_posts news_post_top d-flex flex-column ">
                                                    <div class="news_posts"> <br>
                                                        <div class="news_post_top d-flex flex-column flex-sm-row">
                                                            <div class="news_post_date_container">
                                                                <div
                                                                    class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                                                    <div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="news_post_title_container">

                                                                <div class="news_post_title text-dark">
                                                                    <h4><?php echo e($loop->iteration); ?>. <?php echo e($soal->soal); ?></h4>

                                                                </div>
                                                                <?php $__currentLoopData = $list_jawaban->where('id_soal', $soal->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div class="form-group" style="margin-left: 2%">
                                                                        <div class="radio">
                                                                            <input type="radio"
                                                                                name="jawaban[<?php echo e($soal->id); ?>]"
                                                                                value="<?php echo e($jawaban->id); ?>"
                                                                                class="form-check-input" required>
                                                                            <label><?php echo e($jawaban->jawaban); ?></label>
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <div class="form-group">
                                            <button class="btn btn-primary text-white btn-center" onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini? Pengisian Hanya Bisa di Lakukan Sekali')">
                                                <i class="fa fa-save"></i>
                                                Simpan
                                            </button>
                                        </div>
                                        
                                    </form>
                                </div>
                            
                        </div>
                    <?php endif; ?>

                    <?php if($mahasiswa->status_tracing == 1): ?>
                        <div class="alert alert-success alert-block text-center">
                            <p style="font-family: roboto; font-size: 40px;">Terima Kasih Anda Telah Melakukan Survei</p>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
    </section>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/mahasiswa/tracer-study.blade.php ENDPATH**/ ?>