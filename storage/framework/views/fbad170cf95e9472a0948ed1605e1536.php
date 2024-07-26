

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <h1 class="mb-4">Transactions</h1>

            <!-- Back to Dashboard Button -->
            <a href="<?php echo e(route('home')); ?>" class="btn btn-secondary mb-3">Back to Dashboard</a>

            <!-- Success or Error Message -->
            <?php if(session('success')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php elseif(session('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>

            <!-- Add New Transaction Button -->
            <a href="<?php echo e(route('transactions.create')); ?>" class="btn btn-primary mb-3">Add New Transaction</a>

            <!-- Transactions Table -->
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Transaction List</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Description</th>
                                <th>Amount</th>
                                <th>Type</th>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($transaction->description); ?></td>
                                    <td>$<?php echo e(number_format($transaction->amount, 2)); ?></td>
                                    <td><?php echo e(ucfirst($transaction->type)); ?></td>
                                    <td><?php echo e($transaction->date->format('Y-m-d')); ?></td>
                                    <td><?php echo e($transaction->category->name ?? 'N/A'); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('transactions.edit', $transaction)); ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="<?php echo e(route('transactions.destroy', $transaction)); ?>" method="POST" style="display:inline;">
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
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\budget-tracker\resources\views/transactions/index.blade.php ENDPATH**/ ?>