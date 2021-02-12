

<?php $__env->startSection('title'); ?>
    <?php echo e($article->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class='container'>
    <h1 class = 'text-center'><?php echo e($article->title); ?></h1>
    <div class="card mb-3 w-100">
        <div class="row no-gutters">
            
                <div class="card-body">
                    <small class="card-title text-muted"><?php echo e($article->created_at->toDateString()); ?> <?php echo e($article->created_at->format('H:i:s')); ?> |
                        <a class = 'text-muted' href="/articles/<?php echo e($article->id); ?>/edit">Edit</a>  | <a class = 'text-muted' href="/articles/<?php echo e($article->id); ?>/delete">Delete</a>  
                    </small>
                    <hr>
                    <p class="card-text article-content"><?php echo e($article->content); ?></p>
                    
                </div>
        </div>
    </div>
</div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Documents\Laravel\TestApp\resources\views/article/show.blade.php ENDPATH**/ ?>