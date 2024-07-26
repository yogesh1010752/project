

<?php $__env->startSection('content'); ?>
    <h1>Edit Category</h1>
    <form action="<?php echo e(route('categories.update', $category)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo e($category->name); ?>" required>
        </div>
        <button type="submit">Save</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\budget-tracker\resources\views/categories/edit.blade.php ENDPATH**/ ?>