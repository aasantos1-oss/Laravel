<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>
<header class="page-heading"><p class="eyebrow">ABOUT COUNTERPOINT</p><h1>A small application.<br>A solid starting point.</h1><p class="lead">Counterpoint is a POS foundation prototype for IT0049. It brings four connected pages together using Laravel routes, controllers, and Blade views.</p></header>
<div class="about-grid">
    <section class="content-panel"><p class="eyebrow">WHAT IT DOES</p><h2>Account information, clearly presented.</h2><p>The Customer Accounts page displays sample customer contact information and locations. The User Accounts page displays sample staff roles and account status.</p><p>Both directories use static PHP arrays defined in their respective controllers. Blade templates loop through those arrays to render the account tables.</p><div class="actions"><a class="text-link" href="<?php echo e(route('customers.index')); ?>">Browse customers &rarr;</a><a class="text-link" href="<?php echo e(route('users.index')); ?>">Browse users &rarr;</a></div></section>
    <section class="content-panel"><p class="eyebrow">HOW IT WORKS</p><h2>The Laravel MVC flow.</h2><ol class="flow-list"><li><strong>Route</strong><p>Matches a requested URL to the correct controller method.</p></li><li><strong>Controller</strong><p>Prepares page data and passes it to a Blade view.</p></li><li><strong>View</strong><p>Displays the page and its data within a shared layout.</p></li></ol></section>
</div>
<p class="scope-note"><strong>Prototype scope:</strong> All displayed records are fictional. Account roles are sample labels; authentication, permission enforcement, transactions, and record changes are not implemented.</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL\example-app\resources\views/pages/about.blade.php ENDPATH**/ ?>