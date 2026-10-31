<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>
<header class="page-heading"><p class="eyebrow">ABOUT COUNTERPOINT</p><h1>A small application.<br>A solid starting point.</h1><p class="lead">Counterpoint is a POS foundation prototype for IT0049. Its four connected pages bring customer and user account information into one place.</p></header>
<div class="about-grid">
    <section class="content-panel"><p class="eyebrow">WHAT IT DOES</p><h2>Account information, clearly presented.</h2><p>The Customer Accounts page displays full names, email addresses, and phone numbers. The User Accounts page displays usernames and full names.</p><p>Both directories show saved database records. Updates to a record in the database appear in its directory when you reload the page.</p><div class="actions"><a class="text-link" href="<?php echo e(route('customers.index')); ?>">Browse customers &rarr;</a><a class="text-link" href="<?php echo e(route('users.index')); ?>">Browse users &rarr;</a></div></section>
    <section class="content-panel"><p class="eyebrow">HOW IT WORKS</p><h2>From database to directory.</h2><ol class="flow-list"><li><strong>Open a directory</strong><p>Choose Customer Accounts or User Accounts from the navigation.</p></li><li><strong>Read saved accounts</strong><p>The application retrieves the current records from the database.</p></li><li><strong>View the list</strong><p>Account details appear in a table, ordered by full name.</p></li></ol></section>
</div>
<p class="scope-note"><strong>Prototype scope:</strong> The supplied account records are fictional. This activity provides account listings; account editing, sign-in, and sales transactions are outside its scope.</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\LARAVEL\example-app\resources\views/pages/about.blade.php ENDPATH**/ ?>