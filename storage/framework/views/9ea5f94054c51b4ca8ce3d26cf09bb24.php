

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <div class="row justify-content-between">
        <div class="col-md-6">
            <h1 class="mb-4">Categories</h1>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-primary">Add New Category</a>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($category->name); ?></td>
                            <td>
                                <a href="<?php echo e(route('categories.edit', $category)); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <form action="<?php echo e(route('categories.destroy', $category)); ?>" method="POST" style="display:inline;">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\budget-tracker\resources\views/categories/index.blade.php ENDPATH**/ ?>