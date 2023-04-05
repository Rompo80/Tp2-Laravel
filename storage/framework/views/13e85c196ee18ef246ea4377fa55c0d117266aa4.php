<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Fonts -->
  <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" crossorigin="anonymous" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat';
    }
  </style>

  <title><?php echo e(config('app.name')); ?> - <?php echo $__env->yieldContent('title'); ?></title>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light p-3 shadow-sm">
    <div class="container-xxl">
      <a class="navbar-brand" href="<?php echo e(route('forum.index')); ?>">StudentForum</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link navbar-brand" href="<?php echo e(route('posts.index')); ?>">NewsForum</a>
          </li>
          <?php if(auth()->guard()->guest()): ?>
          
          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('user.registration')); ?>"><?php echo app('translator')->get('lang.text_reg'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-outline-secondary" href="<?php echo e(route('login')); ?>"><?php echo app('translator')->get('lang.text_login'); ?></a>
          </li>
          <?php else: ?>
          <li class="nav-item">
            <a class="nav-link btn-outline-secondary clrOnHover" href="<?php echo e(route('etudiants.create')); ?>"><?php echo app('translator')->get('lang.text_reg'); ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-outline-secondary clrOnHover" href="<?php echo e(route('etudiants.show', Auth::User()->id)); ?>"><?php echo app('translator')->get('lang.text_personalFile'); ?></a>
          </li>

          <li class="nav-item">
            <a class="nav-link btn-outline-secondary clrOnHover" href="<?php echo e(route('logout')); ?>"><?php echo app('translator')->get('lang.text_logout'); ?></a>
          </li>
          <?php endif; ?>
        </ul>
        <form class="d-flex" action="<?php echo e(route('etudiants.search', 'query')); ?>" method="GET">
          <input class="form-control mr-sm-2 me-3" type="search" name="search" placeholder="<?php echo app('translator')->get('lang.text_searchBar'); ?>" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><?php echo app('translator')->get('lang.btn_search'); ?></button>
        </form>
        <a class="nav-link <?php if($lang='fr'): ?> text-info  <?php endif; ?> " href="<?php echo e(route('lang', 'fr')); ?>">Français </a>
        <a class="nav-link" href="<?php echo e(route('lang', 'en')); ?>">English <i class="flag flag-canada"></i></a>
      </div>
    </div>
    </div>
  </nav>
  <?php if(Auth::check()): ?>
  <header class="py-3 bg-light">
    <div class="container-xxl">
      <p class="text-dark h4"><?php echo app('translator')->get('lang.text_welcome'); ?>, <?php echo e(Auth::user()->name); ?>!</p>
  </header>
  </div>
  <?php endif; ?>


  <main>
    <?php echo $__env->yieldContent('content'); ?>

  </main>
  <?php if(isset($students)): ?>
  <div class="pagination justify-content-center mt-4">
    <div class="d-flex align-items-end">
      <?php echo e($students->links()); ?>

    </div>
  </div>
  <?php endif; ?>
  <?php if(isset($posts)): ?>
  <div class="pagination justify-content-center mt-4">
    <div class="d-flex align-items-end">
      <?php echo e($posts->links()); ?>

    </div>
  </div>
  <?php endif; ?>
  <footer class="bg-light text-center mt-4">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2023 Copyright Roman Potachenski
    </div>
  </footer>

  <script src="<?php echo e(asset('js/functions.js')); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>


</html>
    



<?php /**PATH C:\Users\roman\OneDrive\Documents\Programming and conception web design\hivere_2023\cadriciel\Maisonneuve2295542\resources\views/layouts/app.blade.php ENDPATH**/ ?>