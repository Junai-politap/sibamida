

<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Mahasiswa</strong></h3>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="<?php echo e(url('update-mahasiswa', $mahasiswa->id)); ?>" method="POST"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="modal-body">
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NIM</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nim" value="<?php echo e($mahasiswa->nim); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama" value="<?php echo e($mahasiswa->nama); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nik" value="<?php echo e($mahasiswa->nik); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="username" value="<?php echo e($mahasiswa->username); ?>">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="confirmasi_pass" value="<?php echo e($mahasiswa->confirmasi_pass); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="Laki-Laki" <?php if($mahasiswa->jenis_kelamin == 'Laki-Laki'): ?> selected <?php endif; ?>>Laki-Laki
                                    </option>
                                    <option value="Perempuan" <?php if($mahasiswa->jenis_kelamin == 'Perempuan'): ?> selected <?php endif; ?>>Perempuan
                                    </option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-9">
                                <select name="agama" class="form-control">
                                    <option value="Islam" <?php if($mahasiswa->agama == 'Islam'): ?> selected <?php endif; ?>>Islam</option>

                                    <option value="Kristen" <?php if($mahasiswa->agama == 'Kristen'): ?> selected <?php endif; ?>>Kristen
                                    </option>

                                    <option value="Khatolik" <?php if($mahasiswa->agama == 'Khatolik'): ?> selected <?php endif; ?>>Khatolik
                                    </option>

                                    <option value="Hindhu" <?php if($mahasiswa->agama == 'Hindhu'): ?> selected <?php endif; ?>>Hindhu</option>

                                    <option value="Budha" <?php if($mahasiswa->agama == 'Budha'): ?> selected <?php endif; ?>>Budha</option>

                                    <option value="Kong Hu Chu" <?php if($mahasiswa->agama == 'Kong Hu Chu'): ?> selected <?php endif; ?>>Kong Hu
                                        Chu</option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tempat_lahir"
                                    value="<?php echo e($mahasiswa->tempat_lahir); ?>">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tanggal_lahir"
                                    value="<?php echo e($mahasiswa->tanggal_lahir); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="alamat"
                                    value="<?php echo e($mahasiswa->alamat); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Hp</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="hp" value="<?php echo e($mahasiswa->hp); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email" value="<?php echo e($mahasiswa->email); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Foto</label>
                            <div class="col-md-4">
                                <img style="width: 30%; height: 100%" src="<?php echo e(url("public/$mahasiswa->foto")); ?>" onerror="this.src='https://bootdey.com/img/Content/avatar/avatar7.png';" alt="avatar">
                            </div>
                            <div class="col-sm-12 col-md-5">
                                <input class="custom-file-input" type="file" name="foto" accept=".jpg, .png, .jpeg">
                                <label class="custom-file-label">Pas Foto</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-times"></span>
                        Close</button>
                    <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/admin/mahasiswa/edit.blade.php ENDPATH**/ ?>