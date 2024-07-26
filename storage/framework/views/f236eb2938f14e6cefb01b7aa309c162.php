

<?php $__env->startSection('content'); ?>
    <h1>Dashboard</h1>
    <div>
        <h2>Total Income: $<?php echo e(number_format($total_income, 2)); ?></h2>
        <h2>Total Expenses: $<?php echo e(number_format($total_expenses, 2)); ?></h2>
        <h2>Balance: $<?php echo e(number_format($balance, 2)); ?></h2>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\budget-tracker\resources\views/dashboard/index.blade.php ENDPATH**/ ?>