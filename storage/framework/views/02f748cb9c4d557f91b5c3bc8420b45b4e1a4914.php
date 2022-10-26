



<?php $__env->startSection('konten'); ?>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<article class="mb-5">
 <h2>
    <a href="/posts<?php echo e($post['slug']); ?>"><?php echo e($post['judul']); ?></a>
</h2>
 <h5>By : <?php echo e($post['penulis']); ?></h5>   
 <p><?php echo e($post['artikel']); ?></p>
</article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba-laravel\resources\views/blog.blade.php ENDPATH**/ ?>