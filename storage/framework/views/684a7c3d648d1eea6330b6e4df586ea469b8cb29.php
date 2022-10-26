
<?php $__env->startSection('konten'); ?>
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h1 class="mb-5"> Post Category : <?php echo e($category); ?></h1>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="mb-3">
                <h2>
                   <a href="/posts/<?php echo e($post->slug); ?>"><?php echo e($post->title); ?></a>
               </h2> 
                <p><?php echo e($post->excerpt); ?></p>
            </article>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba-laravel\resources\views/category.blade.php ENDPATH**/ ?>