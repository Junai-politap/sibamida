

<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA | MAHASISWA'); ?>

<?php $__env->startSection('content'); ?>
<?php echo $__env->make('section.mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="wrap">
	<section class="app-content">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="widget p-md clearfix">
                    <div class="container">
                        <div class="row">
                            <form action="<?php echo e(url('update-profil', $mahasiswa->id)); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field("PUT"); ?>
                            
                                <div class="col-md-4 border-right">
                                    <div class="d-flex flex-column align-items-center text-center p-3 py-5" style="margin-top: 20%">
                                        <img class="rounded-circle" style="border-radius: 4%" src="<?php echo e(url("public/$mahasiswa->foto")); ?>" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';">                                        
                                        <input type="file" class="form-control" name="foto" accept=".jpg, .png, .jpeg" value="<?php echo e($mahasiswa->foto); ?>">
                                    </div>
                                </div>
                                <div class="col-md-8 border-right">
                                    <div class="p-3">
                                        <div class="d-flex justify-content-between align-items-center mb-3">
                                            <h4 class="text-left">Edit Profil</h4>
                                        </div>
                                        <br>
                                        <div class="row mt-5">
                                            <div class="col-md-5">
                                                <label class="labels">NIM</label>
                                                <input type="text" class="form-control" name="nim" value="<?php echo e($mahasiswa->nim); ?>">
                                            </div>
                                            <div class="col-md-5">
                                                <label class="labels">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="nama" value="<?php echo e($mahasiswa->nama); ?>">
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-5">
                                                <label class="labels">Username</label>
                                                <input type="text" class="form-control" name="username" value="<?php echo e($mahasiswa->username); ?>">
                                            </div>
                                            <div class="col-md-5">
                                                <label class="labels">Password</label>
                                                <input type="password" class="form-control" name="confirmasi_pass" value="<?php echo e($mahasiswa->confirmasi_pass); ?>">
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-5">
                                                <label class="labels">NIK</label>
                                                <input type="text" class="form-control" name="nik" value="<?php echo e($mahasiswa->nik); ?>">
                                            </div>
                                            <div class="col-md-5">
                                                <label class="labels">Alamat</label>
                                                <input type="text" class="form-control" name="alamat" value="<?php echo e($mahasiswa->alamat); ?>">
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-5">
                                                <label class="labels">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" class="form-control">
                                                    <option value="Laki-laki"
                                                        <?php if($mahasiswa->jenis_kelamin == "Laki-laki"): ?> selected <?php endif; ?>>Laki-laki</option>
                                                    
                                                    <option value="Perempuan"
                                                        <?php if($mahasiswa->jenis_kelamin == "Perempuan"): ?> selected <?php endif; ?>>Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="labels">Agama</label>
                                                <select name="agama" class="form-control">
                                                    <option value="Islam"
                                                        <?php if($mahasiswa->agama == "Islam"): ?> selected <?php endif; ?>>Islam</option>
                                                    
                                                    <option value="Kristen"
                                                        <?php if($mahasiswa->agama == "Kristen"): ?> selected <?php endif; ?>>Kristen</option>
                                                    
                                                    <option value="Khatolik"
                                                        <?php if($mahasiswa->agama == "Khatolik"): ?> selected <?php endif; ?>>Khatolik</option>

                                                    <option value="Hindhu"
                                                        <?php if($mahasiswa->agama == "Hindhu"): ?> selected <?php endif; ?>>Hindhu</option>

                                                    <option value="Budha"
                                                        <?php if($mahasiswa->agama == "Budha"): ?> selected <?php endif; ?>>Budha</option>

                                                    <option value="Kong Hu Chu"
                                                        <?php if($mahasiswa->agama == "Kong Hu Chu"): ?> selected <?php endif; ?>>Kong Hu Chu</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-5">
                                                <label class="labels">Tempat Lahir</label>
                                                <input type="text" class="form-control" name="tempat_lahir" value="<?php echo e($mahasiswa->tempat_lahir); ?>">
                                            </div>
                                            <div class="col-md-5">
                                                <label class="labels">Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo e($mahasiswa->tanggal_lahir); ?>">
                                            </div>
                                        </div>

                                        <div class="row mt-5">
                                            <div class="col-md-5">
                                                <label class="labels">No Hp</label>
                                                <input type="text" class="form-control" name="hp" value="<?php echo e($mahasiswa->hp); ?>">
                                            </div>
                                            <div class="col-md-5">
                                                <label class="labels">Alamat Email</label>
                                                <input type="text" class="form-control" name="email" value="<?php echo e($mahasiswa->email); ?>">
                                            </div>
                                        </div>

                                        <div class="row mt-3">
                                            
                                        </div>
                                        <br>
                                        <div class="row mt-5">
                                            <div class="col-md-5">
                                                <button class="btn btn-primary profile-button">
                                                    <span class="fa fa-save"></span> Simpan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </form>                       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.mahasiswa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/mahasiswa/profil.blade.php ENDPATH**/ ?>