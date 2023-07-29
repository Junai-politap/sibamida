<?php $__env->startSection('profil'); ?>
<div class="app-user">
    <div class="media">
        <div class="media-left">
            <div class="avatar avatar-md avatar-circle">
                <a href="javascript:void(0)"><img class="img-responsive" src="<?php echo e(url('public/mahasiswa')); ?>/assets/images/221.jpg" alt="avatar"/></a>
            </div>
        </div>
        <div class="media-body">
            <div class="foldable">
                <h5><a href="javascript:void(0)" class="username">John Doe</a></h5>
                <ul>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <small>Web Developer</small>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu animated flipInY">
                            <li>
                                <a class="text-color" href="profile.html">
                                    <span class="m-r-xs"><i class="fa fa-user"></i></span>
                                    <span>Profile</span>
                                </a>
                            </li>
                            
                            <li role="separator" class="divider"></li>
                            <li>
                                <a class="text-color" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')" href="<?php echo e(url('logout')); ?>">
                                    <span class="m-r-xs"><i class="fa fa-power-off"></i></span>
                                    <span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?><?php /**PATH C:\laragon\www\informatika\system\resources\views/section/profil.blade.php ENDPATH**/ ?>