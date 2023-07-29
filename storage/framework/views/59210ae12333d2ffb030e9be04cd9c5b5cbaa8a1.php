<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('section.notif', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Penelitian </strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah Data</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center"> Ketua Penelitian</th>
                        <th class="text-center">Tahun Pelaksanaan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $list_penelitian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penelitian): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center">
                                <div class="btn-group">

                                    <button class="btn btn-info" data-toggle="modal"
                                        data-target=".bs-example-modal-show<?php echo e($penelitian->id); ?>">
                                        <span class="fa fa-info"></span>
                                        Lihat
                                    </button>

                                    <button class="btn btn-warning" data-toggle="modal"
                                        data-target=".bs-example-modal-edit<?php echo e($penelitian->id); ?>">
                                        <span class="fa fa-edit"></span>
                                        Edit
                                    </button>

                                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                        href="<?php echo e(url("delete-penelitian/$penelitian->id")); ?>" class="btn btn-danger">
                                        <span class="fa fa-trash"></span> Hapus
                                    </a>


                                    <div class="modal fade bs-example-modal-show<?php echo e($penelitian->id); ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content text-left">
                                                <div class="modal-header">
                                                    <h4 class="modal-title text-center" id="myLargeModalLabel"> 
                                                         <?php echo e($penelitian->judul); ?>

                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">

                                                    
                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">
                                                            Ketua Penelitian
                                                        </label>
                                                        <div class="col-sm-1">:</div>
                                                        <div class="col-sm-8">
                                                            <p style="text-align: left"> <?php echo e($penelitian->ketua); ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">
                                                            Anggota Penelitian (Dosen)
                                                        </label>
                                                        <div class="col-sm-1">:</div>
                                                        <div class="col-sm-8">
                                                            <p style="text-align: left"> <?php echo e($penelitian->anggota_dosen); ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">
                                                            Anggota Penelitian (Mahasiswa)
                                                        </label>
                                                        <div class="col-sm-1">:</div>
                                                        <div class="col-sm-8">
                                                            <p style="text-align: left"> <?php echo e($penelitian->anggota_mahasiswa); ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">
                                                            Skema Penelitian
                                                        </label>
                                                        <div class="col-sm-1">:</div>
                                                        <div class="col-sm-8">
                                                            <p style="text-align: left"> <?php echo e($penelitian->skema); ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">
                                                            Tahun Pelaksanaan
                                                        </label>
                                                        <div class="col-sm-1">:</div>
                                                        <div class="col-sm-8">
                                                            <p style="text-align: left"> <?php echo e($penelitian->tahun); ?></p>
                                                        </div>
                                                    </div>

                                                  
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade bs-example-modal-edit<?php echo e($penelitian->id); ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel"> 
                                                        Edit Data <?php echo e($penelitian->judul); ?>

                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body text-left">
                                                    <form action="<?php echo e(url('update-penelitian', $penelitian->id)); ?>" method="post"
                                                        enctype="multipart/form-data">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field("PUT"); ?>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Judul Penelitian</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="judul" value="<?php echo e($penelitian->judul); ?>">
                                                            </div>
                                                        </div>
                            
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Ketua Penelitian</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="ketua" value="<?php echo e($penelitian->ketua); ?>">
                                                            </div>
                                                        </div>
                            
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Anggota Penelitian (Dosen)</label>
                                                            <div class="col-sm-9">
                                                                <textarea name="anggota_dosen" class="form-control" rows="5"><?php echo e($penelitian->anggota_dosen); ?></textarea>
                                                            </div>
                                                        </div>
                            
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Anggota Penelitian (Mahasiswa)</label>
                                                            <div class="col-sm-9">
                                                            <textarea name="anggota_mahasiswa" class="form-control" rows="5"><?php echo e($penelitian->anggota_mahasiswa); ?></textarea>
                                                            </div>
                                                        </div>
                            
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Skema</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="skema" value="<?php echo e($penelitian->skema); ?>">
                                                            </div>
                                                        </div>
                            
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">Tahun Pelaksanaan</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="tahun" value="<?php echo e($penelitian->tahun); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-0">
                                                            <div class="col-md-2"></div>
                                                            <div class="col-sm-10">
                                                                <button
                                                                    class="btn btn-primary float-right rounded"><span
                                                                        class="fa fa-save"></span> Simpan</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </td>
                            <td class="text-center"><?php echo e($penelitian->judul); ?></td>
                            <td class="text-center"><?php echo e($penelitian->ketua); ?></td>
                            <td class="text-center"><?php echo e($penelitian->tahun); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="<?php echo e(url('store-penelitian')); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Judul Penelitian</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Judul Penelitian" name="judul">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ketua Penelitian</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Ketua Penelitian" name="ketua">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Anggota Penelitian (Dosen)</label>
                                <div class="col-sm-9">
                                <textarea name="anggota_dosen" class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Anggota Penelitian (Mahasiswa)</label>
                                <div class="col-sm-9">
                                <textarea name="anggota_mahasiswa" class="form-control" rows="5"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Skema</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Skema" name="skema">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tahun Pelaksanaan</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Tahun Pelaksanaan"
                                        name="tahun">
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
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/admin/project/penelitian/index.blade.php ENDPATH**/ ?>