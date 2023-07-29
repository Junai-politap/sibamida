

<?php $__env->startSection('title', 'SIAKAD TEKNIK INFORMATIKA - Admin'); ?>

<?php $__env->startSection('content'); ?>

    <div class="card">
        <h5 class="card-header">Edit Slide</h5>
        <div class="card-body">
            <form id="form" data-parsley-validate="" action="<?php echo e(url('update-slide', $slide->id)); ?>" method="POST"
                enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field("PUT"); ?>
                
                <div class="form-group row">
                    <label class="col-3 col-lg-2 col-form-label text-left">Title</label>
                    <div class="col-9 col-lg-10">
                        <input type="text" class="form-control" name="title" value="<?php echo e($slide->title); ?>">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-md-4">
                        <img class="img-responsive" src='<?php echo e(url("public/$slide->gambar")); ?>'
                            style="object-fit: cover; position: static; width: 50%; height: 200px;">
                    </div>

                    <div class="col-md-6">
                        <input type="file" class="form-control" id="inlineinput" name="gambar" accept=".jpg, .png, .jpeg"
                            value="<?php echo e($slide->gambar); ?>">
                    </div>
                </div>
                <div class="row pt-2 pt-sm-5 mt-1">

                    <div class="col-sm-12 pl-0">
                        <p class="text-right">
                            
                            <button type="submit" class="btn btn-space btn-primary"><span class="fa fa-save"></span>
                                Simpan</button>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/admin/slide/edit.blade.php ENDPATH**/ ?>