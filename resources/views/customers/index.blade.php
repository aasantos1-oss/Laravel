@extends('layouts.app')

@section('title', 'Customer Accounts')

@section('content')
<header class="page-heading compact"><p class="eyebrow">THE CUSTOMERS DIRECTORY</p><h1>Customer Accounts</h1><p class="lead">A simple directory of the people behind your customer accounts.</p></header>
<section class="directory" aria-labelledby="directory-title">
    <div class="directory-heading"><div><h2 id="directory-title">All customers</h2><p>{{ count($customers) }} sample accounts</p></div><span class="data-label">Static sample data</span></div>
    <div class="table-scroll" role="region" aria-label="Customer Accounts table, scroll horizontally on small screens" tabindex="0">
        <table>
            <caption class="sr-only">Customer Accounts with sample details and status</caption>
            <thead><tr><th scope="col">Customer ID</th><th scope="col">Customer</th><th scope="col">Email</th><th scope="col">Phone</th><th scope="col">City</th><th scope="col">Status</th></tr></thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <th scope="row" class="record-id">{{ $customer['id'] }}</th>
                    <td class="record-name">{{ $customer['name'] }}</td>
                    <td>{{ $customer['email'] }}</td>
                    <td>{{ $customer['phone'] }}</td>
                    <td>{{ $customer['city'] }}</td>
                    <td><span class="status {{ $customer['status'] === 'Active' ? 'status-active' : 'status-inactive' }}">{{ $customer['status'] }}</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="directory-footer"><span>Showing {{ count($customers) }} of {{ count($customers) }} accounts</span><span>Read-only directory</span></div>
</section>
<p class="scope-note">These fictional records are supplied by <code>CustomerController</code> as a static PHP array.</p>
@endsection
