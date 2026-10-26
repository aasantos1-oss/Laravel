<?php $__env->startSection('title', 'Customer Accounts'); ?>

<?php $__env->startSection('content'); ?>
<header class="page-heading compact"><p class="eyebrow">THE CUSTOMERS DIRECTORY</p><h1>Customer Accounts</h1><p class="lead">A simple directory of the people behind your customer accounts.</p></header>
<section class="directory" aria-labelledby="directory-title">
    <div class="directory-heading"><div><h2 id="directory-title">All customers</h2><p><?php echo e(count($customers)); ?> sample accounts</p></div><span class="data-label">Static sample data</span></div>
    <div class="table-scroll" role="region" aria-label="Customer Accounts table, scroll horizontally on small screens" tabindex="0">
        <table>
            <caption class="sr-only">Customer Accounts with sample details and status</caption>
            <thead><tr><th scope="col">Customer ID</th><th scope="col">Customer</th><th scope="col">Email</th><th scope="col">Phone</th><th scope="col">City</th><th scope="col">Status</th></tr></thead>
            <tbody>
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row" class="record-id"><?php echo e($customer['id']); ?></th>
                    <td class="record-name"><?php echo e($customer['name']); ?></td>
                    <td><?php echo e($customer['email']); ?></td>
                    <td><?php echo e($customer['phone']); ?></td>
                    <td><?php echo e($customer['city']); ?></td>
                    <td><span class="status <?php echo e($customer['status'] === 'Active' ? 'status-active' : 'status-inactive'); ?>"><?php echo e($customer['status']); ?></span></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div class="directory-footer"><span>Showing <?php echo e(count($customers)); ?> of <?php echo e(count($customers)); ?> accounts</span><span>Read-only directory</span></div>
</section>
<p class="scope-note">These fictional records are supplied by <code>CustomerController</code> as a static PHP array.</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL\example-app\resources\views/customers/index.blade.php ENDPATH**/ ?>