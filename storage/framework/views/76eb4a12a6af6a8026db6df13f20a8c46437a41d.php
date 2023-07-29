
<aside id="menubar" class="menubar light">
    <?php echo $__env->yieldContent('profil'); ?>
  
    <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
            <ul class="app-menu">
                <li class="has-submenu">
                    <a href="<?php echo e(url('mahasiswa-page')); ?>">
                        <i class="menu-icon zmdi zmdi-view-dashboard zmdi-hc-lg"></i>
                        <span class="menu-text">Dashboards</span>
                        
                    </a>
                </li>
                <li>
                    <a href="<?php echo e(url('tracer-study')); ?>">
                        <i class="menu-icon zmdi zmdi-file-text zmdi-hc-lg"></i>
                        <span class="menu-text">Tracer Study</span>
                    </a>
                </li>  
            </ul>
        </div>
    </div>
</aside><?php /**PATH /data/www/teknologiinformasi/system/resources/views/layout/mahasiswa/sidebar.blade.php ENDPATH**/ ?>