<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Counterpoint POS foundations: a Laravel customer and staff account directory.">
    <title>@yield('title', 'Home') | Counterpoint POS</title>
    <link rel="stylesheet" href="{{ asset('css/pos.css') }}">
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to content</a>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="{{ route('home') }}" aria-label="Counterpoint POS home">
                <span class="brand-symbol" aria-hidden="true">C<span>+</span></span>
                <span>counterpoint<span class="brand-subtitle">POS FOUNDATIONS</span></span>
            </a>
            <nav aria-label="Main navigation">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}" @if(request()->routeIs('home')) aria-current="page" @endif>Home</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}" @if(request()->routeIs('about')) aria-current="page" @endif>About</a>
                <a href="{{ route('customers.index') }}" class="{{ request()->routeIs('customers.index') ? 'active' : '' }}" @if(request()->routeIs('customers.index')) aria-current="page" @endif>Customers</a>
                <a href="{{ route('users.index') }}" class="{{ request()->routeIs('users.index') ? 'active' : '' }}" @if(request()->routeIs('users.index')) aria-current="page" @endif>Users</a>
            </nav>
        </div>
    </header>
    <main id="main-content" class="page-container" tabindex="-1">
        @yield('content')
    </main>
    <footer class="site-footer">
        <div class="footer-inner"><span>Counterpoint POS</span><span>IT0049 / TFA6 &middot; Laravel foundations</span></div>
    </footer>
</body>
</html>
