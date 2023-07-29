

<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA | MAHASISWA'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('section.mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <br>
                <?php echo $__env->make('section.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="col-md-12">
                   
                    <div class="widget"><br>

                        <?php if($mahasiswa->status_tracing_2 == 0): ?>
                            <header class="widget-header"><br>
                                <h4 class="widget-title">
                                    <?php $__currentLoopData = $list_bagian->where('id', '96ae23fb-bb9c-4e75-81ac-6c5816ea0db5'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bagian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <h1><?php echo e($bagian->nama); ?> - <?php echo e($bagian->title); ?></h1>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </h4>
                            </header>
                            <hr class="widget-separator">
                            
                                <div class="container">
                                    <form action="<?php echo e(url('store-form-II')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <input name="id_mahasiswa" value="<?php echo e($mahasiswa->id); ?>" type="hidden">

                                    <?php $__currentLoopData = $list_soal->where('id_bagian', '96ae23fb-bb9c-4e75-81ac-6c5816ea0db5')->whereNotNull('tipe'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div
                                            class="form-group <?php if($soal->tipe != 0): ?> tipe-<?php echo e($soal->tipe); ?> <?php endif; ?>">

                                            <input name="id_soal" value="<?php echo e($soal->id); ?>" class="form-control"
                                                type="hidden">
                                            <input name="id_bagian" value="<?php echo e($soal->bagian->id); ?>" class="form-control"
                                                type="hidden">

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
                                                            <?php if($loop->first): ?>
                                                            <?php $i = 0 ?>
                                                            <?php $__currentLoopData = $list_jawaban->where('id_soal', $soal->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <?php if($jawaban->soal->text == 0): ?>
                                                                            <input type="radio"
                                                                                onchange="ganti_tipe('<?php echo e($i = $i + 1); ?>')"
                                                                                name="jawaban[<?php echo e($soal->id); ?>]"
                                                                                value="<?php echo e($jawaban->id); ?>"
                                                                                class="form-check-input">
                                                                            <label><?php echo e($jawaban->jawaban); ?></label>
                                                                        <?php endif; ?>

                                                                        <?php $__currentLoopData = range(1,11); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($jawaban->soal->text == $item_jawaban): ?>
                                                                            <input type="input" name="jawaban_<?php echo e($item_jawaban); ?>"
                                                                                class="form-control item-jawaban">
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        

                                                                    </div>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php else: ?>
                                                            <?php $__currentLoopData = $list_jawaban->where('id_soal', $soal->id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <?php if($jawaban->soal->text == 0): ?>
                                                                            <input type="radio"
                                                                                name="jawaban[<?php echo e($soal->id); ?>]"
                                                                                value="<?php echo e($jawaban->id); ?>"
                                                                                class="form-check-input input-radio-type">
                                                                            <label><?php echo e($jawaban->jawaban); ?></label>
                                                                        <?php endif; ?>

                                                                        <?php $__currentLoopData = range(1,11); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_jawaban): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php if($jawaban->soal->text == $item_jawaban): ?>
                                                                                <input type="input" name="jawaban_<?php echo e($item_jawaban); ?>"
                                                                                    class="form-control item-jawaban">
                                                                            <?php endif; ?>
                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                        
                                                                    </div>
                                                                </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>

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
                        <?php endif; ?>
                    </div>

                    

                    <?php if($mahasiswa->status_tracing_2 == 1): ?>
                        <div class="alert alert-success alert-block text-center">
                            <p style="font-family: roboto; font-size: 40px;">Terima Kasih Anda Telah Melakukan Survei</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php $__env->startPush('script'); ?>
        <script>
            function ganti_tipe(tipe) {
                $(".tipe-1").addClass('hide')
                $(".tipe-2").addClass('hide')
                $(".tipe-3").addClass('hide')
                $(".tipe-4").addClass('hide')
                if (tipe) $(".tipe-" + tipe).removeClass("hide")

                $(".item-jawaban").val("")
                $(".input-radio-type").prop("checked", false)
            }

            ganti_tipe();
        </script>
    <?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/mahasiswa/tracer-study-form-ii.blade.php ENDPATH**/ ?>