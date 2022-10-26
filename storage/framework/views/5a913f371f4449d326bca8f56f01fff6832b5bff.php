
<?php $__env->startSection('konten'); ?>

<div class="container">
    <div class="row">
        <h1 class="mb-3 mt-4 text-center"> Daftar Categories</h1>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-4">
            <a href="/posts?category=<?php echo e($category->slug); ?>">
            <div class="card text-bg-dark">
                <img src="https://source.unsplash.com/500x500?<?php echo e($category->name); ?>" class="card-img" alt="<?php echo e($category->name); ?>">
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-4" style="background-color: rgba(0,0, 0, 0.5)">
                    <?php echo e($category->name); ?></h5>
                </div>
              </div>
            </a>
        </div>
    
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>   
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Web-Blog\resources\views/categories.blade.php ENDPATH**/ ?>