
<?php $__env->startSection('konten'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome Back, <?php echo e(auth()->user()->name); ?></h1>
  </div>
<?php $__env->stopSection(); ?>
       
    
<?php echo $__env->make('dashboard.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba-laravel\resources\views/dashboard/index.blade.php ENDPATH**/ ?>