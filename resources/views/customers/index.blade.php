@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
<header class="page-heading compact"><p class="eyebrow">THE CUSTOMERS DIRECTORY</p><h1>Customer Accounts</h1><p class="lead">Customer names and contact details, retrieved from your database.</p></header>
<section class="directory" aria-labelledby="directory-title">
    <div class="directory-heading"><div><h2 id="directory-title">All customers</h2><p>{{ $customers->count() }} saved accounts</p></div><span class="data-label">Database records</span></div>
    <div class="table-scroll" role="region" aria-label="Customer Accounts table, scroll horizontally on small screens" tabindex="0">
        <table>
            <caption class="sr-only">Customer Accounts retrieved through Eloquent</caption>
            <thead><tr><th scope="col">Customer ID</th><th scope="col">Full name</th><th scope="col">Email</th><th scope="col">Phone</th></tr></thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <th scope="row" class="record-id">{{ $customer->id }}</th>
                    <td class="record-name">{{ $customer->full_name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                </tr>
                @endforeach
                @if ($customers->isEmpty())
                <tr><td colspan="4" class="empty-state">No customers found.</td></tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="directory-footer"><span>Showing {{ $customers->count() }} of {{ $customers->count() }} accounts</span><span>Read-only directory</span></div>
</section>
<p class="scope-note">Account information is displayed from the saved customers directory.</p>
@endsection
