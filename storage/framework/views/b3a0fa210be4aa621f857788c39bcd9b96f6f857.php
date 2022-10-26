
<?php $__env->startSection('konten'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-3 mt-2"><?php echo e($post->title); ?> </h2>
            <a href="/dashboard/posts" class="btn btn-success"><span data-feather="eye" class="align-text-bottom"></span> Back To All My Posts</a>
            <a href="/dashboard/posts/<?php echo e($post->slug); ?>/edit" class="btn btn-warning"><span data-feather="edit" class="align-text-bottom"></span> Edit Post</a>
            <form action="/dashboard/posts/<?php echo e($post->slug); ?>" method="post" class="d-inline">
                <?php echo csrf_field(); ?>
                <?php echo method_field('delete'); ?>
                <button class="btn btn-danger border-0" onclick="return confirm('Are You Sure?')">
                    <span data-feather="x-circle" class="align-text-bottom"></span> Delete</button>
              </form> 
              <?php if($post->image): ?> 
              <div style="max-height: 350px; overflow:hidden;" >
              <img src="<?php echo e(asset('storage/'.$post->image)); ?>"alt="<?php echo e($post->category->name); ?>" class="img-fluid mt-3">
            </div>
            <button type="button" class="btn btn-info mt-3" disabled>In Category <?php echo e($post->category->name); ?></button>
              <?php else: ?>
              <img src="https://source.unsplash.com/1200x500?<?php echo e($post->category->name); ?>"alt="<?php echo e($post->category->name); ?>" class="img-fluid mt-3">
              <button type="button" class="btn btn-info mt-3" disabled>In Category <?php echo e($post->category->name); ?></button>   
              <?php endif; ?>
        <article class="my-3 fs-6">
            <p><?php echo $post->body; ?> </p>
        </article>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba-laravel\resources\views/dashboard/posts/show.blade.php ENDPATH**/ ?>