<aside class="main-sidebar sidebar-dark-primary">
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('img/logo.png') }}"
             alt="{{ config('app.name') }}"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">&nbsp;</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @if (Request::is('shipment/shipped-recent') || Request::is('shipment/shipped-intransit') ||  Request::is('shipment/batch') ||  Request::is('shipment/end-of-day') ||  Request::is('shipment/return') ||  Request::is('shipment/shipped-delivered') || 
                Request::is('shipment/shipped-delivery-exception') || Request::is('shipment/shipped-voided') || Request::is('shipment/fulfilment-recent') || Request::is('shipment/fulfilment-pending') || Request::is('shipment/fulfilment-intransit') || Request::is('shipment/fulfilment-delivered') || Request::is('shipment/fulfilment-delivery-exception')
                || Request::is('shipment/fulfilment-cancelled') || Request::is('shipment/return-recieved'))
                    @include('layouts.shipmentMenu')
                @elseif(Request::is('insight/overview') || Request::is('insight/sales') || Request::is('insight/report') || Request::is('insight/product-highlight')|| Request::is('insight/customer-overview')|| Request::is('insight/customer-engagement') || Request::is('insight/operation')) 
                    @include('layouts.insightsMenu');
                @elseif(Request::is('product/*'))
                    @include('layouts.productMenu');

                @elseif(Request::is('orders/*'))
                    @include('layouts.ordersMenu');
                
                @elseif(Request::is('customer/*'))
                    @include('layouts.customerMenu');
            @endif

            </ul>
        </nav>
    </div>

</aside>
