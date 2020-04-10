<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php if(count($proj ?? '')>0): ?>
<?php $__currentLoopData = $proj ?? ''; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php echo e($p->name); ?>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</body>
</html><?php /**PATH C:\Users\sharath\manilara\resources\views/display.blade.php ENDPATH**/ ?>