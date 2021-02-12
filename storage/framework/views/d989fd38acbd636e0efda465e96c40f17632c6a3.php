<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
  
    <link href="<?php echo e(asset('css/default.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
    
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">

            <div class="container">
                <a class="navbar-brand" id='title' href="/">
                    ArticleWeb
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo e(Request::path() === '/' ? 'active' : ''); ?>"> 
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item <?php echo e(Request::path() === 'articles' ? 'active' : ''); ?> ">
                        <a class="nav-link" href="/articles">Article</a>
                    </li>
                </ul>
            </div>

        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>      
        <div class='row bg-dark'>
            <div class = "container"></div>
        </div>  
    </div>
    
</body>
</html>
<?php /**PATH C:\Users\LENOVO\Documents\Laravel\TestApp\resources\views/layout.blade.php ENDPATH**/ ?>