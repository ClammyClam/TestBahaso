

<?php $__env->startSection('title'); ?>
    Delete Article
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class = "container">

    <h1>Confirm Delete Article</h1>
    <form method = "POST" action="/articles/<?php echo e($article->id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <div class="form-group">
            <label for="exampleFormControlInput1">Article Title</label>
            <input type="text" readonly class="form-control-plaintext" 
            name = "title" id = "title" value = "<?php echo e($article->title); ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Article Content</label>
            <textarea readonly class="form-control" name = 'content' id="content"><?php echo e($article->content); ?></textarea>
        </div>
        <p>Are you sure you want to delete this article? </p>
        <button type="submit" class="btn btn-primary">Submit</button> 
        <a class="btn btn-primary" href="/articles/<?php echo e($article->id); ?>" role="button">Cancel</a>
    </form> 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Documents\Laravel\TestApp\resources\views/article/delete.blade.php ENDPATH**/ ?>