<?php $__env->startSection('content'); ?>
<html>
<head>
<style>  
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
</style>       
<body>     
<div>                    
<div class="conatiner">
<div class="col-md-12 m-auto">
<h1 class="bg-dark text-white text-center">CUSTOMER DETAILS</h1>              
<table class="table table-striped">                                              
<tr>                                                                                 
<td>user</td>
<td>email</td>
<td>password</td>
<td>Created at</td>
</tr>
<?php $__currentLoopData = $usda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($u->user); ?></td>
<td><?php echo e($u->email); ?></td>
<td><?php echo e($u->password); ?></td>
<td><?php echo e($u->created_at); ?></td>
</tr>                                     
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                                                                               
</table>                       
</div>     
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbarsbootsdtrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sharath\manilara\resources\views/regusersdata.blade.php ENDPATH**/ ?>