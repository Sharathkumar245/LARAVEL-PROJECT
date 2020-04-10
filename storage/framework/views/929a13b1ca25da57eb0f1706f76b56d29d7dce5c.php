;
<?php $__env->startSection('content'); ?>;
<?php if($user == 'Admin'): ?> {
            <?php if($password == 'Admin123'): ?> {
                return  view("regusersdata")
            } else {
                
            }
            
            <?php endif; ?>
        } else {
            # code...
        }
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('navbarsbootsdtrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\sharath\manilara\resources\views/reguse.blade.php ENDPATH**/ ?>