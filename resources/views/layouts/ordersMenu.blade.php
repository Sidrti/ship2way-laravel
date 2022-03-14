<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/datatable.css') }}">
@push('page_scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js" defer></script>
<script type="text/javascript" src="{{asset('js/datatable.js')}}" defer></script>
<script type="text/javascript" src="{{asset('js/orders.js')}}" defer></script>
@endpush

<li class="nav-item">
    <a href="{{url('orders/awaitingPayment')}}" class="nav-link {{ request()->is('orders/awaitingPayment*') ? 'active' : '' }}">
        <p>AwaitingPayment</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{url('orders/awaitingShipment')}}" class="nav-link {{ request()->is('orders/awaitingShipment*') ? 'active' : '' }}">
        <p>AwaitingShipment</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{url('orders/cancelled')}}" class="nav-link {{ request()->is('orders/cancelled*') ? 'active' : '' }}">
        <p>Cancelled</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{url('orders/manualOrders')}}" class="nav-link {{ request()->is('orders/manualOrders*') ? 'active' : '' }}">
        <p>Manual Orders</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{url('orders/onHold')}}" class="nav-link {{ request()->is('orders/onHold*') ? 'active' : '' }}">
        <p>OnHold</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{url('orders/shipped')}}" class="nav-link {{ request()->is('orders/shipped*') ? 'active' : '' }}">
        <p>Shipped</p>
    </a>
</li>

@include('layouts.modal.exportModal')

