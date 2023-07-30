<?php if($message = Session::get('success')): ?>
<div class="alert alert-success alert-block text-center">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong class="text-center" style="font-size: 20px;"><?php echo e($message); ?></strong>
</div>
<?php endif; ?> 
  
<?php if($message = Session::get('error')): ?>
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong class="text-center" style="font-size: 20px;"><?php echo e($message); ?></strong>
</div>
<?php endif; ?>
   
<?php if($message = Session::get('warning')): ?>
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert"></button>    
    <strong class="text-center" style="font-size: 20px;"><?php echo e($message); ?></strong>
</div>
<?php endif; ?>
   

  
<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    Please check the form below for errors
</div>
<?php endif; ?><?php /**PATH /data/www/teknologiinformasi/system/resources/views/section/notif.blade.php ENDPATH**/ ?>