<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/datatable.css') }}">
@push('page_scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js" defer></script>
<script type="text/javascript" src="{{asset('js/datatable.js')}}" defer></script>
@endpush
<li class="nav-item">
    <a href="/customer/customer" class="nav-link {{ request()->is('customer/customer*') ? 'active' : '' }}">
        <p>Customers</p>
    </a>
</li>
@include('layouts.modal.customer')