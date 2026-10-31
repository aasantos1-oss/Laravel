@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
<header class="page-heading compact"><p class="eyebrow">THE USERS DIRECTORY</p><h1>User Accounts</h1><p class="lead">Usernames and account names, retrieved from your database.</p></header>
<section class="directory" aria-labelledby="directory-title">
    <div class="directory-heading"><div><h2 id="directory-title">All users</h2><p>{{ $users->count() }} saved accounts</p></div><span class="data-label">Database records</span></div>
    <div class="table-scroll" role="region" aria-label="User Accounts table, scroll horizontally on small screens" tabindex="0">
        <table>
            <caption class="sr-only">User Accounts retrieved through Eloquent</caption>
            <thead><tr><th scope="col">User ID</th><th scope="col">Username</th><th scope="col">Full name</th></tr></thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row" class="record-id">{{ $user->id }}</th>
                    <td>{{ $user->username }}</td>
                    <td class="record-name">{{ $user->full_name }}</td>
                </tr>
                @endforeach
                @if ($users->isEmpty())
                <tr><td colspan="3" class="empty-state">No users found.</td></tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="directory-footer"><span>Showing {{ $users->count() }} of {{ $users->count() }} accounts</span><span>Read-only directory</span></div>
</section>
<p class="scope-note">Account information is displayed from the saved users directory.</p>
@endsection
