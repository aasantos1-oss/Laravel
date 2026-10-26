<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Counterpoint POS foundations: a Laravel customer and staff account directory.">
    <title><?php echo $__env->yieldContent('title', 'Home'); ?> | Counterpoint POS</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/pos.css')); ?>">
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to content</a>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="<?php echo e(route('home')); ?>" aria-label="Counterpoint POS home">
                <span class="brand-symbol" aria-hidden="true">C<span>+</span></span>
                <span>counterpoint<span class="brand-subtitle">POS FOUNDATIONS</span></span>
            </a>
            <nav aria-label="Main navigation">
                <a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" <?php if(request()->routeIs('home')): ?> aria-current="page" <?php endif; ?>>Home</a>
                <a href="<?php echo e(route('about')); ?>" class="<?php echo e(request()->routeIs('about') ? 'active' : ''); ?>" <?php if(request()->routeIs('about')): ?> aria-current="page" <?php endif; ?>>About</a>
                <a href="<?php echo e(route('customers.index')); ?>" class="<?php echo e(request()->routeIs('customers.index') ? 'active' : ''); ?>" <?php if(request()->routeIs('customers.index')): ?> aria-current="page" <?php endif; ?>>Customers</a>
                <a href="<?php echo e(route('users.index')); ?>" class="<?php echo e(request()->routeIs('users.index') ? 'active' : ''); ?>" <?php if(request()->routeIs('users.index')): ?> aria-current="page" <?php endif; ?>>Users</a>
            </nav>
        </div>
    </header>
    <main id="main-content" class="page-container" tabindex="-1">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer class="site-footer">
        <div class="footer-inner"><span>Counterpoint POS</span><span>IT0049 / TFA5 &middot; Laravel foundations</span></div>
    </footer>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\LARAVEL\example-app\resources\views/layouts/app.blade.php ENDPATH**/ ?>