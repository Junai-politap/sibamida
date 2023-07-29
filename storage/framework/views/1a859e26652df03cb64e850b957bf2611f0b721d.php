

<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA | MAHASISWA'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('section.mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="widget"><br>
                    <header class="widget-header"><br>
                        <h4 class="widget-title">
                            <?php $__currentLoopData = $list_bagian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bagian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($loop->first): ?>
                                    <h1><?php echo e($bagian->nama); ?> - <?php echo e($bagian->title); ?></h1>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </h4>
                    </header>
                    <hr class="widget-separator">

                    <div class="container">
                        <form action="<?php echo e(url('store-form-I')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <input name="id_mahasiswa" value="<?php echo e($mahasiswa->id); ?>" type="hidden">

                                <?php $__currentLoopData = $list_soal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                                                    <?php if($soal->id == '96b1a8ff-e758-4273-955e-9fe5fd29b018'): ?>
                                                        <div class="news_post_title text-dark">
                                                            <h4><?php echo e($loop->iteration); ?>. <?php echo e($soal->soal); ?></h4>

                                                        </div>
                                                        <?php $__currentLoopData = $list_jawaban->where('id_soal', $soal->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="form-group" style="margin-left: 2%">
                                                                <div class="radio">
                                                                    <input type="radio"
                                                                        name="jawaban_1"
                                                                        value="<?php echo e($jawaban->id); ?>">
                                                                    <label><?php echo e($jawaban->jawaban); ?></label>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if($soal->id == '96b1aeae-bec8-46ba-a005-a873cc301383'): ?>
                                                        <div class="news_post_title text-dark">
                                                            <h4><?php echo e($loop->iteration); ?>. <?php echo e($soal->soal); ?></h4>

                                                        </div>
                                                        <?php $__currentLoopData = $list_jawaban->where('id_soal', $soal->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="form-group" style="margin-left: 2%">
                                                                <div class="radio">
                                                                    <input type="radio"
                                                                        name="jawaban_2"
                                                                        value="<?php echo e($jawaban->id); ?>">
                                                                    <label><?php echo e($jawaban->jawaban); ?></label>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if($soal->id == '96b1af39-a99d-49d5-9867-6fb2c42cfada'): ?>
                                                        <div class="news_post_title text-dark">
                                                            <h4><?php echo e($loop->iteration); ?>. <?php echo e($soal->soal); ?></h4>

                                                        </div>
                                                        <?php $__currentLoopData = $list_jawaban->where('id_soal', $soal->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="form-group" style="margin-left: 2%">
                                                                <div class="radio">
                                                                    <input type="radio"
                                                                        name="jawaban_3"
                                                                        value="<?php echo e($jawaban->id); ?>">
                                                                    <label><?php echo e($jawaban->jawaban); ?></label>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if($soal->id == '96b1af8c-4014-444f-9c73-0eb31426fa33'): ?>
                                                        <div class="news_post_title text-dark">
                                                            <h4><?php echo e($loop->iteration); ?>. <?php echo e($soal->soal); ?></h4>

                                                        </div>
                                                        <?php $__currentLoopData = $list_jawaban->where('id_soal', $soal->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="form-group" style="margin-left: 2%">
                                                                <div class="radio">
                                                                    <input type="radio"
                                                                        name="jawaban_4"
                                                                        value="<?php echo e($jawaban->id); ?>">
                                                                    <label><?php echo e($jawaban->jawaban); ?></label>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if($soal->id == '96b1af98-88a5-4102-8e6b-7add2d38cc31'): ?>
                                                        <div class="news_post_title text-dark">
                                                            <h4><?php echo e($loop->iteration); ?>. <?php echo e($soal->soal); ?></h4>

                                                        </div>
                                                        <?php $__currentLoopData = $list_jawaban->where('id_soal', $soal->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="form-group" style="margin-left: 2%">
                                                                <div class="radio">
                                                                    <input type="radio"
                                                                        name="jawaban_5"
                                                                        value="<?php echo e($jawaban->id); ?>">
                                                                    <label><?php echo e($jawaban->jawaban); ?></label>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if($soal->id == '96b1afa7-4d5d-4222-aff1-ac99b7c40046'): ?>
                                                        <div class="news_post_title text-dark">
                                                            <h4><?php echo e($loop->iteration); ?>. <?php echo e($soal->soal); ?></h4>

                                                        </div>
                                                        <?php $__currentLoopData = $list_jawaban->where('id_soal', $soal->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="form-group" style="margin-left: 2%">
                                                                <div class="radio">
                                                                    <input type="radio"
                                                                        name="jawaban_6"
                                                                        value="<?php echo e($jawaban->id); ?>">
                                                                    <label><?php echo e($jawaban->jawaban); ?></label>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if($soal->id == '96b1afb7-8de7-451e-8e54-a91e48117e18'): ?>
                                                        <div class="news_post_title text-dark">
                                                            <h4><?php echo e($loop->iteration); ?>. <?php echo e($soal->soal); ?></h4>

                                                        </div>
                                                        <?php $__currentLoopData = $list_jawaban->where('id_soal', $soal->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="form-group" style="margin-left: 2%">
                                                                <div class="radio">
                                                                    <input type="radio"
                                                                        name="jawaban_7"
                                                                        value="<?php echo e($jawaban->id); ?>">
                                                                    <label><?php echo e($jawaban->jawaban); ?></label>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                    <?php if($soal->id == '96b1afc3-838e-4e68-b523-ad1cdf05f6f1'): ?>
                                                        <div class="news_post_title text-dark">
                                                            <h4><?php echo e($loop->iteration); ?>. <?php echo e($soal->soal); ?></h4>

                                                        </div>
                                                        <?php $__currentLoopData = $list_jawaban->where('id_soal', $soal->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="form-group" style="margin-left: 2%">
                                                                <div class="radio">
                                                                    <input type="radio"
                                                                        name="jawaban_8"
                                                                        value="<?php echo e($jawaban->id); ?>">
                                                                    <label><?php echo e($jawaban->jawaban); ?></label>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <div class="form-group"><br>
                                <br>
                                <button class="btn btn-primary text-white btn-center"><i class="fa fa-save"></i>
                                    Hasil</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/mahasiswa/tracer_study.blade.php ENDPATH**/ ?>