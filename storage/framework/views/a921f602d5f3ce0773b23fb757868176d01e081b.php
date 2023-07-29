

<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('section.notif', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Fasilitas</strong></h3>

            <button class="btn btn-primary float-right" style="margin-left: 1%" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah Data</button>

            <button class="btn btn-primary float-right"  data-toggle="modal" data-target="#modal-lg-jenis"><span
                    class="fa fa-plus"></span> Tambah Jenis Fasilitas</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">Nama Ruangan</th>
                        <th class="text-center"> Jenis Fasilitas</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $list_fasilitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fasilitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="<?php echo e(url("show-fasilitas/$fasilitas->id")); ?>" class="btn btn-info"><span
                                            class="fa fa-info"></span> Lihat</a>

                                    <a href="<?php echo e(url("edit-fasilitas/$fasilitas->id")); ?>" class="btn btn-warning"><span
                                            class="fa fa-edit"></span> Edit</a>

                                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                        href="<?php echo e(url("delete-fasilitas/$fasilitas->id")); ?>" class="btn btn-danger"><span
                                            class="fa fa-trash"></span> Hapus</a>
                                </div>
                            </td>
                            <td class="text-center"><?php echo e($fasilitas->nama_fasilitas); ?></td>
                            <td class="text-center"><?php echo e($fasilitas->jenisfasilitas->nama); ?></td>
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
                    <h4 class="modal-title">Tambah Fasilitas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="<?php echo e(url('store-fasilitas')); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Fasilitas</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama_fasilitas">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Detail Fasilitas</label>
                                <div class="col-sm-9">
                                    <textarea name="detail_fasilitas" class="summernote"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Jenis Fasilitas</label>
                                <div class="col-sm-9">
                                    <select name="id_jenis_fasilitas" class="form-control">
                                        <option value=""> Pilih Jenis Fasilitas</option>
                                        <?php $__currentLoopData = $list_jenis_fasilitas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis_fasilitas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($jenis_fasilitas->id); ?>"> <?php echo e($jenis_fasilitas->nama); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-3 col-form-label">Foto</label>
                                <div class="col-sm-12 col-md-9">
                                    <input class="form-control" type="file" name="foto" accept=".jpg, .png, .jpeg">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-3 col-form-label"></label>
                                <div class="col-sm-12 col-md-9">                                
                                    * Foto tidak boleh lebih dari 200Kb
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


    <div class="modal fade" id="modal-lg-jenis">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Jenis Fasilitas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="<?php echo e(url('store-jenis-fasilitas')); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Jenis Fasilitas</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="nama">
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

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/admin/fasilitas/index.blade.php ENDPATH**/ ?>