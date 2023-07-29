

<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>

    <div class="card">
        <div class="card-header">
            <h3 class="text-center"><strong>Edit Data Pegawai</strong></h3>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="<?php echo e(url('update-pegawai', $pegawai->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                <div class="modal-body">
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NIP</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nip" value="<?php echo e($pegawai->nip); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">NIK</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nik" value="<?php echo e($pegawai->nik); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="nama_lengkap" value="<?php echo e($pegawai->nama_lengkap); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gelar Belakang</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="gelar_belakang" value="<?php echo e($pegawai->gelar_belakang); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jabatan</label>
                            <div class="col-sm-9">
                                <select name="jabatan" class="form-control">
                                    <option value="Ketua Jurusan" <?php if($pegawai->jabatan == 'Ketua Jurusan'): ?> selected <?php endif; ?>>Ketua Jurusan
                                    </option>
                                    <option value="Sekretaris Jurusan" <?php if($pegawai->jabatan == 'Sekretaris Jurusan'): ?> selected <?php endif; ?>>Sekretaris Jurusan
                                    </option>

                                    <option value="Koordinator Prodi" <?php if($pegawai->jabatan == 'Koordinator Prodi'): ?> selected <?php endif; ?>>Koordinator Prodi
                                    </option>

                                    <option value="Ketua Laboratotium" <?php if($pegawai->jabatan == 'Ketua Laboratotium'): ?> selected <?php endif; ?>>Ketua Laboratotium
                                    </option>

                                    <option value="Dosen" <?php if($pegawai->jabatan == 'Dosen'): ?> selected <?php endif; ?>>Dosen
                                    </option>

                                    <option value="Admin" <?php if($pegawai->jabatan == 'Admin'): ?> selected <?php endif; ?>>Admin
                                    </option>

                                    <option value="Teknisi" <?php if($pegawai->jabatan == 'Teknisi'): ?> selected <?php endif; ?>>Teknisi
                                    </option>
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Unit Kerja</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="unit_kerja"
                                    value="Prodi DIII Teknologi Informasi">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Bidang Keahlian</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="bidang_keahlian" value="<?php echo e($pegawai->bidang_keahlian); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="tempat_lahir" value="<?php echo e($pegawai->tempat_lahir); ?>">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo e($pegawai->tanggal_lahir); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="Laki-Laki" <?php if($pegawai->jenis_kelamin == 'Laki-Laki'): ?> selected <?php endif; ?>>Laki-Laki
                                    </option>
                                    <option value="Perempuan" <?php if($pegawai->jenis_kelamin == 'Perempuan'): ?> selected <?php endif; ?>>Perempuan
                                    </option>

                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-9">
                                <select name="agama" class="form-control">
                                    <option value="Islam" <?php if($pegawai->agama == 'Islam'): ?> selected <?php endif; ?>>Islam</option>

                                    <option value="Kristen" <?php if($pegawai->agama == 'Kristen'): ?> selected <?php endif; ?>>Kristen
                                    </option>

                                    <option value="Khatolik" <?php if($pegawai->agama == 'Khatolik'): ?> selected <?php endif; ?>>Khatolik
                                    </option>

                                    <option value="Hindhu" <?php if($pegawai->agama == 'Hindhu'): ?> selected <?php endif; ?>>Hindhu</option>

                                    <option value="Budha" <?php if($pegawai->agama == 'Budha'): ?> selected <?php endif; ?>>Budha</option>

                                    <option value="Kong Hu Chu" <?php if($pegawai->agama == 'Kong Hu Chu'): ?> selected <?php endif; ?>>Kong Hu
                                        Chu</option>

                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="alamat" value="<?php echo e($pegawai->alamat); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No Hp</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="hp" value="<?php echo e($pegawai->hp); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email" value="<?php echo e($pegawai->email); ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-3 col-form-label">Foto</label>
                            <div class="col-md-4">
                                <img style="width: 30%" src="<?php echo e(url("public/$pegawai->foto")); ?>">
                            </div>
                            <div class="col-sm-12 col-md-5">
                                <input class="custom-file-input" type="file" name="foto"
                                    accept=".jpg, .png, .jpeg">
                                <label class="custom-file-label">Pas Foto</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span
                            class="fa fa-times"></span> Close</button>
                    <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/admin/pegawai/edit.blade.php ENDPATH**/ ?>