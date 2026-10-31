@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero">
    <div class="hero-copy">
        <p class="eyebrow">A CLEARER VIEW OF YOUR COUNTER</p>
        <h1>Good service starts<br>with knowing people.</h1>
        <p class="lead">Keep customer and staff account information in one straightforward place. Explore the foundations of a point-of-sale application, with account information saved in a database.</p>
        <div class="actions">
            <a class="button button-primary" href="{{ route('customers.index') }}">View customer accounts <span aria-hidden="true">&rarr;</span></a>
            <a class="button button-secondary" href="{{ route('users.index') }}">View user accounts</a>
        </div>
    </div>
    <aside class="hero-note" aria-label="Application scope">
        <span class="note-number" aria-hidden="true">01 /</span>
        <p class="eyebrow">THE FOUNDATION</p>
        <h2>People first.<br>One directory at a time.</h2>
        <p>This classroom prototype introduces customer and user account listings. Sales processing and account editing are outside this activity.</p>
        <span class="small-label">SAVED ACCOUNTS &middot; READ ONLY</span>
    </aside>
</section>
<section class="section-block" aria-labelledby="workspace-title">
    <div class="section-heading"><div><p class="eyebrow">YOUR WORKSPACE</p><h2 id="workspace-title">Start with the essentials.</h2></div><a class="text-link" href="{{ route('about') }}">About this application &rarr;</a></div>
    <div class="card-grid">
        <a class="workspace-card" href="{{ route('customers.index') }}">
            <span class="card-kicker">01 / CUSTOMER DIRECTORY</span><h3>Customer Accounts</h3><p>Browse customer names, email addresses, and phone numbers.</p><span class="card-link">Open directory <span aria-hidden="true">&rarr;</span></span>
        </a>
        <a class="workspace-card" href="{{ route('users.index') }}">
            <span class="card-kicker">02 / STAFF DIRECTORY</span><h3>User Accounts</h3><p>See saved usernames and the full names of account holders.</p><span class="card-link">Open directory <span aria-hidden="true">&rarr;</span></span>
        </a>
    </div>
</section>
@endsection
