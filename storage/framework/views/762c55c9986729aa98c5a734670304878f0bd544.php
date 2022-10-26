

<?php $__env->startSection('konten'); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1>Halaman About</h1>
<h3><?php echo e($name); ?></h3>
<p><?php echo e($email); ?></p>
<img src="img/<?php echo e($image); ?>" alt="<?php echo e($name); ?>" width="200" class="img-thumbnail rounded-circle">
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Web-Blog\resources\views/about.blade.php ENDPATH**/ ?>