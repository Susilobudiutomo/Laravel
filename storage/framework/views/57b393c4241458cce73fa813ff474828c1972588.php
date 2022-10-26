


<?php $__env->startSection('konten'); ?>

<div class="container">
<div class="row justify-content-center">
    <div class="col-md-8">
        <h2 class="mb-3 mt-2"><?php echo e($post->title); ?> </h2>
        <p>By. <a href="/posts?author=<?php echo e($post->author->username); ?>" class="text-decoration-none">
            <?php echo e($post->author->name); ?></a> in <a href="/posts?category=<?php echo e($post->category->slug); ?>" class="text-decoration-none">
                <?php echo e($post->category->name); ?></a>
        </p>
        <?php if($post->image): ?> 
        <div style="max-height: 350px; overflow:hidden;" >
        <img src="<?php echo e(asset('storage/'.$post->image)); ?>"alt="<?php echo e($post->category->name); ?>" class="img-fluid">
      </div>
        <?php else: ?>
        <img src="https://source.unsplash.com/1200x500?<?php echo e($post->category->name); ?>"alt="<?php echo e($post->category->name); ?>" class="img-fluid ">   
        <?php endif; ?>
    <article class="my-3 fs-6">
        <p><?php echo $post->body; ?> </p>
    </article>
        <p><a href="/posts" class="text-decoration-none">Kembali Ke Halaman Blog</a></p>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba-laravel\resources\views/post.blade.php ENDPATH**/ ?>