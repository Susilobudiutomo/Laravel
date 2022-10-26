

<?php $__env->startSection('konten'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">

          <?php if(session()->has('succsess')): ?>
          <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
         <strong><?php echo e(session('succsess')); ?></strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>

          <?php if(session()->has('loginError')): ?>
          <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
         <strong><?php echo e(session('loginError')); ?></strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>

          <?php if(session()->has('logout')): ?>
          <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
         <strong><?php echo e(session('logout')); ?></strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>



            <main class="form-signin w-100 m-auto">
              <h1 class=" mb-3 mt-5  text-center">Please Login</h1>
                <form action="/login" method="post">
                  <?php echo csrf_field(); ?>
                  <div class="form-floating">
                    <input type="email" name="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" placeholder="name@example.com" autofocus required value="<?php echo e(old('email')); ?>">
                    <label for="email">Email address</label>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                  </div>
                  <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-2">Not Registerd? <a href="/register" class="text-decoration-none"> Register Now!</a></small>
              </main>
-        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\coba-laravel\resources\views/login/index.blade.php ENDPATH**/ ?>