<?php $__env->startSection('title', 'User Accounts'); ?>

<?php $__env->startSection('content'); ?>
<header class="page-heading compact"><p class="eyebrow">THE USERS DIRECTORY</p><h1>User Accounts</h1><p class="lead">Meet the sample team and see their assigned account roles.</p></header>
<section class="directory" aria-labelledby="directory-title">
    <div class="directory-heading"><div><h2 id="directory-title">All users</h2><p><?php echo e(count($users)); ?> sample accounts</p></div><span class="data-label">Static sample data</span></div>
    <div class="table-scroll" role="region" aria-label="User Accounts table, scroll horizontally on small screens" tabindex="0">
        <table>
            <caption class="sr-only">User Accounts with sample details and status</caption>
            <thead><tr><th scope="col">User ID</th><th scope="col">Team member</th><th scope="col">Email</th><th scope="col">Role</th><th scope="col">Status</th></tr></thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row" class="record-id"><?php echo e($user['id']); ?></th>
                    <td class="record-name"><?php echo e($user['name']); ?></td>
                    <td><?php echo e($user['email']); ?></td>
                    <td><?php echo e($user['role']); ?></td>
                    <td><span class="status <?php echo e($user['status'] === 'Active' ? 'status-active' : 'status-inactive'); ?>"><?php echo e($user['status']); ?></span></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div class="directory-footer"><span>Showing <?php echo e(count($users)); ?> of <?php echo e(count($users)); ?> accounts</span><span>Read-only directory</span></div>
</section>
<p class="scope-note">These fictional records are supplied by <code>UserController</code> as a static PHP array.</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL\example-app\resources\views/users/index.blade.php ENDPATH**/ ?>