
<?php $__env->startSection('title', 'Profil Prodi - '); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('layout.home.page-title', [
        'page_title' => 'Profil Prodi',
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('section.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="choosing-area">
        <div class="container">
           
            <div class="sec-title text-center">
                <div class="">
                    Lulusan program studi Teknik Informatika Politeknik Negeri Ketapang dibekali dengan pengetahuan
                    teoritis dan pengalaman praktek sehingga siap masuk ke dunia kerja. Lulusan dikategorikan sebagai
                    Informatic-workers yaitu profesional yang bekerja dibidang informatika atau bidang lain yang
                    berbasis teknologi informatika sebagai operator, programmer, atau analis dan designer. Profil
                    lulusan prodi Teknik Informatika adalah sebagai berikut:
                </div>
                <div class="dector thm-bg-clr center"></div>
            </div>
            <div class="approach-content-box">
                <div class="row">
                    <?php $__currentLoopData = $list_lulusan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lulusan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-12">
                            <div class="text">
                                
                            </div>
                            <div class="accordion-holder style-one">
                                <article class="accordion">
                                    <div class="acc-btn active">
                                        <div class="toggle-icon"><span class="icon-layers"></span></div>
                                        <h3><?php echo e($lulusan->label); ?></h3>
                                    </div>
                                    <div class="acc-content">
                                        <?php echo nl2br($lulusan->isi); ?>

                                    </div>
                                </article>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div><br>
            <p>
                Berdasarkan Profil Lulusan di atas maka lulusan Program Studi Teknik Informatika akan mampu bekerja
                pada bidang, misalnya seperti :
            <ol>
                <li>Pengembangan Perangkat Lunak dan aplikasinya</li>
                <li>Konsultan Industri Teknologi Informasi</li>
                <li>Pemeliharaan Teknologi Jaringan</li>
                <li>Menciptakan lapangan pekerjaan di bidang Teknik Informatika</li>
            </ol>
            </p>
        </div>
    </section>
    <hr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/home/profil/profil-lulusan.blade.php ENDPATH**/ ?>