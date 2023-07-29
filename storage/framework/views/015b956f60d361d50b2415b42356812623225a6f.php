<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('section.notif', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title"><strong> Data Tugas Akhir</strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-lg"><span
                    class="fa fa-plus"></span> Tambah Data</button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Aksi</th>
                        <th class="text-center">Nama Mahasiswa</th>
                        <th class="text-center">Judul</th>
                        <th class="text-center">Tahun Angkatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $list_tugas_akhir; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tugas_akhir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="text-center">
                                <div class="btn-group">

                                    <a href="<?php echo e(url("lihat-tugas-akhir/$tugas_akhir->id")); ?>" class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>

                                    <a href="<?php echo e(url("edit-tugas-akhir/$tugas_akhir->id")); ?>" class="btn btn-warning"><span class="fa fa-edit"></span> Edit</a>

                                    <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')"
                                        href="<?php echo e(url("delete-tugas-akhir/$tugas_akhir->id")); ?>" class="btn btn-danger">
                                        <span class="fa fa-trash"></span> Hapus
                                    </a>

                                </div>
                            </td>
                            <td class="text-center"><?php echo e($tugas_akhir->nama_mahasiswa); ?></td>
                            <td class="text-center"><?php echo e($tugas_akhir->judul); ?></td>
                            <td class="text-center"><?php echo e($tugas_akhir->tahun_angkatan); ?></td>
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
                <form class="form-horizontal" action="<?php echo e(url('store-tugas-akhir')); ?>" method="POST"
                    enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="modal-body">
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NIM Mahasiswa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="NIM Mahasiswa"
                                        name="nim">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Mahasiswa</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Nama Mahasiswa"
                                        name="nama_mahasiswa">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Judul Tugas Akhir</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Judul Tugas Akhir"
                                        name="judul">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"> Tahun Masuk</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Tahun Masuk"
                                        name="tahun_masuk">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tahun Angkatan</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tahun_angkatan" class="form-control" placeholder="Tahun Angkatan">
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

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/admin/project/tugas-akhir/index.blade.php ENDPATH**/ ?>