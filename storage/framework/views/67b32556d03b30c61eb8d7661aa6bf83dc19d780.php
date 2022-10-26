
<?php $__env->startSection('konten'); ?>
<div class="container-fluid">
    <div class="row mt-3 text-center">
        <div class="col">
            <h1 class="mb-3"><?php echo e($title); ?></h1>
<div class="row justify-content-center">
  <div class="col-md-6">
    <form action="/posts">
      <?php if(request('category')): ?>
<input name="category" type="hidden" value="<?php echo e(request('category')); ?>">
      <?php endif; ?>
      <?php if(request('author')): ?>
      <input name="author" type="hidden" value="<?php echo e(request('author')); ?>">
            <?php endif; ?>
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search..." name="search" value="<?php echo e(request('search')); ?>">
      <button class="btn btn-primary" type="submit">Search</button>
    </div>
    </form>
  </div>
</div>
<?php if($posts->count()): ?>

            <div class="card mb-3">
               <?php if($posts[0]->image): ?> 
              <div style="max-height: 350px; overflow:hidden;" >
              <img src="<?php echo e(asset('storage/'.$posts[0]->image)); ?>"alt="<?php echo e($posts[0]->category->name); ?>" class="img-fluid" width="1200x500">
            </div>
              <?php else: ?>
              <img src="https://source.unsplash.com/1200x500?<?php echo e($posts[0]->category->name); ?>" class="card-img-top" alt="<?php echo e($posts[0]->category->name); ?>">
              <?php endif; ?>
                <div class="card-body text-center">
                  <h5 class="card-title"><a href="/posts/<?php echo e($posts[0]->slug); ?>" class="text-decoration-none text-dark"><?php echo e($posts[0]->title); ?></a></h5>
                  <p>
                    <small class="text-muted"> <a href="/posts?author=<?php echo e($posts[0]->author->username); ?>" class="text-decoration-none"><?php echo e($posts[0]->author->name); ?>

                </a> in <a href="/posts?category=<?php echo e($posts[0]->category->slug); ?>" class="text-decoration-none"><?php echo e($posts[0]->category->name); ?></a>
           <?php echo e($posts[0]->created_at->diffForHumans()); ?> </small>
        </p>
                  <p class="card-text"><?php echo e($posts[0]->excerpt); ?></p>
                  <a href="/posts/<?php echo e($posts[0]->slug); ?>" class="text-decoration-none btn btn-success">Read More</a>
                </div>
              </div>
            </div>


<div class="container">
    <div class="row">
        <?php $__currentLoopData = $posts->skip(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <div class="card">
            <div class="position-absolute px-3 py-2" style="background-color:rgba(0, 0, 0, 0.5)"><a href="/posts?category=<?php echo e($post->category->slug); ?>" class="text-decoration-none text-white"><?php echo e($post->category->name); ?></a></div>
            <?php if($post->image): ?> 
            <div style="max-height: 350px; overflow:hidden;" >
            <img src="<?php echo e(asset('storage/'.$post->image)); ?>"alt="<?php echo e($post->category->name); ?>" class="img-fluid">
          </div>
            <?php else: ?>
            <img src="https://source.unsplash.com/1200x500?<?php echo e($post->category->name); ?>"alt="<?php echo e($post->category->name); ?>" class="img-fluid"> 
            <?php endif; ?>
                <div class="card-body">
                  <h5 class="card-title"><?php echo e($post->title); ?></h5>
                  <p>
                    <small class="text-muted"> <a href="/posts?author=<?php echo e($post->author->username); ?>" 
                        class="text-decoration-none"><?php echo e($post->author->name); ?>

                </a> <?php echo e($post->created_at->diffForHumans()); ?> </small>
            </p>
                  <p class="card-text"><?php echo e($post->excerpt); ?></p>
                  <a href="/posts/<?php echo e($post->slug); ?>" class="btn btn-success">Read More</a>
                </div>
              </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

    
<?php else: ?> 
<p class="text-center fs-4">No Post Found</p>
<?php endif; ?>
<div class="container d-flex justify-content-center mt-3">
<?php echo e($posts->links()); ?>

</div>
       
<?php $__env->stopSection(); ?>
      

<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Web-Blog\resources\views/posts.blade.php ENDPATH**/ ?>