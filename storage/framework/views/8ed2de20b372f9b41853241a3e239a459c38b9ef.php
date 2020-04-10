<html>
<head>
<head>
<body>
<div class="container">
<div class="col">
<?php $__currentLoopData = $logi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if( $user == $l->user): ?>
 <?php echo e(hello); ?>

 <?php endif; ?>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</body>
</html><?php /**PATH C:\Users\sharath\manilara\resources\views/loginaccess.blade.php ENDPATH**/ ?>