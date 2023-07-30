<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('section.notif', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Project Based Learning</strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah Data</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Tahun Ajar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $list_pbl; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pbl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center">
                                <div class="btn-group">

                                    <button class="btn btn-info" data-toggle="modal"
                                        data-target=".bs-example-modal-show<?php echo e($pbl->id); ?>">
                                        <span class="fa fa-info"></span>
                                        Lihat
                                    </button>

                                    <button class="btn btn-warning" data-toggle="modal"
                                        data-target=".bs-example-modal-edit<?php echo e($pbl->id); ?>">
                                        <span class="fa fa-edit"></span>
                                        Edit
                                    </button>

                                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                        href="<?php echo e(url("delete-pbl/$pbl->id")); ?>" class="btn btn-danger">
                                        <span class="fa fa-trash"></span> Hapus
                                    </a>


                                    <div class="modal fade bs-example-modal-show<?php echo e($pbl->id); ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">
                                                        Detail Data Project
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">

                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">
                                                            Judul Project
                                                        </label>
                                                        <div class="col-sm-1">:</div>
                                                        <div class="col-sm-9">
                                                            <p style="text-align: left"> <?php echo e($pbl->judul); ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">
                                                            Tahun Ajar
                                                        </label>
                                                        <div class="col-sm-1">:</div>
                                                        <div class="col-sm-9">
                                                            <p style="text-align: left"> <?php echo e($pbl->tahun_ajar); ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">
                                                            Link Sistem
                                                        </label>
                                                        <div class="col-sm-1">:</div>
                                                        <div class="col-sm-9">
                                                            <p style="text-align: left"><a
                                                                    href="<?php echo e(url("$pbl->link")); ?>"><?php echo e($pbl->link); ?></a>
                                                            </p>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-sm-3 col-form-label">
                                                            Gambar
                                                        </label>
                                                        <div class="col-sm-1">:</div>
                                                        <div class="col-sm-9">
                                                            <img src="<?php echo e(url("public/$pbl->foto")); ?>"
                                                                style="width: 100%; height: 100%;">
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal fade bs-example-modal-edit<?php echo e($pbl->id); ?>" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"
                                        style="display: none;">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="myLargeModalLabel">
                                                        Edit Data Project Based Learning
                                                    </h4>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-hidden="true">×</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="<?php echo e(url('update-pbl', $pbl->id)); ?>" method="post"
                                                        enctype="multipart/form-data">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('PUT'); ?>
                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">
                                                                Judul Project
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="judul"
                                                                    value="<?php echo e($pbl->judul); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">
                                                                Tahun Ajar
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="tahun_ajar"
                                                                    value="<?php echo e($pbl->tahun_ajar); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">
                                                                Semester
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <select name="jenis" class="form-control">
                                                                    <option value="Ganjil"
                                                                        <?php if($pbl->jenis == 'Ganjil'): ?> selected <?php endif; ?>>
                                                                        Ganjil</option>

                                                                    <option value="Genap"
                                                                        <?php if($pbl->jenis == 'Genap'): ?> selected <?php endif; ?>>
                                                                        Genap
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">
                                                                Link Sistem
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control" name="link"
                                                                    value="<?php echo e($pbl->link); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">
                                                                Link Landing Page
                                                            </label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control"
                                                                    name="link_landing" value="<?php echo e($pbl->link_landing); ?>">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label class="col-sm-3 col-form-label">
                                                                Foto
                                                            </label>
                                                            <div class="col-md-6">
                                                                <img src="<?php echo e(url("public/$pbl->foto")); ?>"
                                                                    style="width: 100%; height: 100%;">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <input type="file" class="form-control" name="foto"
                                                                    value="<?php echo e($pbl->foto); ?>"
                                                                    accept=".png, .jpg, .jpeg">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-0">
                                                            <div class="col-md-3"></div>
                                                            <div class="col-sm-9">
                                                                <button class="btn btn-primary float-right rounded"><span
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
                            <td class="text-center"><?php echo e($pbl->judul); ?></td>
                            <td class="text-center"><?php echo e($pbl->tahun_ajar); ?> - <?php echo e($pbl->jenis); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="<?php echo e(url('store-pbl')); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Judul Project</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Judul Project"
                                        name="judul">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tahun Ajar</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Tahun Ajar"
                                        name="tahun_ajar">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Semester</label>
                                <div class="col-sm-9">
                                    <select name="jenis" class="form-control">
                                        <option value=""> Pilih Semester</option>
                                        <option value="Ganjil"> Ganjil</option>
                                        <option value="Genap"> Genap</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Link Project</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Link Project"
                                        name="link">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Link Landing Page</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Link Landing Page"
                                        name="link_landing">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-3 col-form-label">Foto</label>
                                <div class="col-sm-12 col-md-9">
                                    <input class="form-control" type="file" name="foto"
                                        accept=".jpg, .png, .jpeg">

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

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/admin/project/pbl/index.blade.php ENDPATH**/ ?>