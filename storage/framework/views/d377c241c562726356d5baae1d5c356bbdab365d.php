

<?php $__env->startSection('title'); ?>
    Edit Article
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class = "container">
    <?php if(session()->has('message')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('message')); ?> click <a href="/articles/<?php echo e($article->id); ?>">here</a> to go to the article <br>
                or click <a href="/articles">here</a> to go back to the article list.
            </div>
    <?php endif; ?>
    <h1>Update Article</h1>
    <form method = "POST" action="/articles/<?php echo e($article->id); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="exampleFormControlInput1">Article Title</label>
            <input type="text" class="form-control" id="exampleFormControlInput1"
            name = "title" id = "title" value = "<?php echo e($article->title); ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Article Content</label>
            <textarea class="form-control" name = 'content' id="content" rows="10"><?php echo e($article->content); ?></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button> 
        <a class="btn btn-primary" href="/articles/<?php echo e($article->id); ?>" role="button">Cancel</a>
    </form> 
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\LENOVO\Documents\Laravel\TestApp\resources\views/article/edit.blade.php ENDPATH**/ ?>