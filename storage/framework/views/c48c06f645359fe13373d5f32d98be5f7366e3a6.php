

<?php $__env->startSection('title'); ?>
    List of Articles
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class= "container">

    <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('message')); ?>

            </div>
    <?php endif; ?>

    <h1 class='text-center'>List Of Articles</h1>
    <div class = "row">
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="card w-100">
       
        <div class="card-body d-flex flex-column">
            <h5 class="card-title"><a href="articles/<?php echo e($article->id); ?>" class = "text-dark"><?php echo e($article->title); ?></a></h5>
            <p class="card-text"><small class="text-muted"> <a href="articles/<?php echo e($article->id); ?>/edit">Edit</a>  | <a href="articles/<?php echo e($article->id); ?>/delete">Delete</a></small></p>
            <p class="card-text short-desc"><?php echo e($article->content); ?> </p>
        </div>
    </div>  
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    
    </div>
    <div class="page-button">
    <?php echo e($articles->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Documents\Laravel\TestApp\resources\views/article/articles.blade.php ENDPATH**/ ?>