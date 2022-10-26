
<?php $__env->startSection('konten'); ?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2"> My Posts </h1>
  </div>
  
  <?php if(session()->has('success')): ?>
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
   <strong><?php echo e(session('success')); ?></strong> 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <?php endif; ?>

  <div class="table-responsive-sm">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create Post</a>
    <table class="table table-striped table-sm border-1px">
      <thead>
        <tr class="text-center">
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr class="text-center">
          <td><?php echo e($loop->iteration); ?></td>
          <td><?php echo e($post->title); ?></td>
          <td><?php echo e($post->category->name); ?></td>
          <td>  
            <a href="/dashboard/posts/<?php echo e($post->slug); ?>" class="badge bg-info">
                <span data-feather="eye" class="align-text-bottom"></span></a>
            <a href="/dashboard/posts/<?php echo e($post->slug); ?>/edit" class="badge bg-warning">
                <span data-feather="edit" class="align-text-bottom"></span></a>
                <form action="/dashboard/posts/<?php echo e($post->slug); ?>" method="post" class="d-inline">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('delete'); ?>
                  <button class="badge bg-danger border-0" onclick="return confirm('Are You Sure?')"><span data-feather="x-circle" class="align-text-bottom"></span></a></button>
                </form>    
        </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba-laravel\resources\views/dashboard/posts/index.blade.php ENDPATH**/ ?>