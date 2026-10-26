@extends('layouts.app')

@section('title', 'User Accounts')

@section('content')
<header class="page-heading compact"><p class="eyebrow">THE USERS DIRECTORY</p><h1>User Accounts</h1><p class="lead">Meet the sample team and see their assigned account roles.</p></header>
<section class="directory" aria-labelledby="directory-title">
    <div class="directory-heading"><div><h2 id="directory-title">All users</h2><p>{{ count($users) }} sample accounts</p></div><span class="data-label">Static sample data</span></div>
    <div class="table-scroll" role="region" aria-label="User Accounts table, scroll horizontally on small screens" tabindex="0">
        <table>
            <caption class="sr-only">User Accounts with sample details and status</caption>
            <thead><tr><th scope="col">User ID</th><th scope="col">Team member</th><th scope="col">Email</th><th scope="col">Role</th><th scope="col">Status</th></tr></thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row" class="record-id">{{ $user['id'] }}</th>
                    <td class="record-name">{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                    <td>{{ $user['role'] }}</td>
                    <td><span class="status {{ $user['status'] === 'Active' ? 'status-active' : 'status-inactive' }}">{{ $user['status'] }}</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="directory-footer"><span>Showing {{ count($users) }} of {{ count($users) }} accounts</span><span>Read-only directory</span></div>
</section>
<p class="scope-note">These fictional records are supplied by <code>UserController</code> as a static PHP array.</p>
@endsection
