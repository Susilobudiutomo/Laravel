
<nav class="navbar navbar-expand-lg bg-dark navbar-dark mb-0" >
    <div class="container-fluid">
      <a class="navbar-brand mb-4 text-white justify-content-center" href="/">BOGAMAMN BLOG</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ">
            <a class="nav-link  <?php echo e(Request::is('/')?'active':''); ?>" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?php echo e(Request::is('about')?'active':''); ?>" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?php echo e(Request::is('posts')?'active':''); ?>" href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  <?php echo e(Request::is('categories')?'active':''); ?>" href="/categories">Categories</a>
          </li>
        </ul>
        <ul class="navbar-nav me-auto">
          <?php if(auth()->guard()->check()): ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               Welcome back, <?php echo e(auth()->user()->name); ?>

            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> Dasboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  <?php echo csrf_field(); ?>
                  <button type="submit" class="dropdown-item">
                    <i class="bi bi-box-arrow-right"></i> Logout
                  </button>
                </form>
              </li>
            </ul>
          </li>   
            <?php else: ?>
          <li class="nav-item">
           <a href="/login" class="nav-link  <?php echo e(Request::is('register')?'active':''); ?> <?php echo e(Request::is('login')?'active':''); ?>"> <i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
          <?php endif; ?>
        </ul> 
      </div>
    </div>
  </nav>
<?php /**PATH C:\xampp\htdocs\Web-Blog\resources\views/partials/navbar.blade.php ENDPATH**/ ?>