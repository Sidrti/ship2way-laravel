<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/datatable.css') }}">
@push('page_scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js" defer></script>
<script type="text/javascript" src="{{asset('js/datatable.js')}}" defer></script>
@endpush

<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ request()->is('shipment/shipped*') ? 'active' : '' }}">
        <i class="right fas fa-angle-left"></i>
        <p>Shipped</p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{url('/shipment/shipped-recent')}}" class="nav-link {{ request()->is('shipment/shipped-recent*') ? 'active' : '' }}">
            <i class="far fa-clock" style="width:20px"></i>
            <p>Recent</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('/shipment/shipped-intransit')}}" class="nav-link {{ request()->is('shipment/shipped-intransit*') ? 'active' : '' }}">
            <i class="fas fa-truck" style="width:20px"></i>&nbsp;
            <p>In Transit</p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{url('shipment/shipped-delivered')}}" class="nav-link {{ request()->is('shipment/shipped-delivered*') ? 'active' : '' }}">
            <i class="far fa-check-circle" style="width:20px"></i>
            <p>Delivered</p>
          </a>
        </li>
        <li class="nav-item">
            <a href="{{url('shipment/shipped-delivery-exception')}}" class="nav-link {{ request()->is('shipment/shipped-delivery-exception*') ? 'active' : '' }}">
                <i class="fas fa-exclamation-circle" style="width:20px" ></i>
              <p>Delivery Problem</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('shipment/shipped-voided')}}" class="nav-link {{ request()->is('shipment/shipped-voided*') ? 'active' : '' }}">
                <i class="fas fa-times-circle" style="width:20px" ></i>
              <p>Voided</p>
            </a>
          </li>
      </ul>
</li>
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ request()->is('shipment/fulfilment*') ? 'active' : '' }}">
        <i class="right fas fa-angle-left"></i>
        <p>Fullfilments</p>
    </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('shipment/fulfilment-recent')}}" class="nav-link {{ request()->is('shipment/fulfilment-recent*') ? 'active' : '' }}">
                <i class="far fa-clock" style="width:20px"></i>
                <p>Recent</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{url('shipment/fulfilment-pending') }}" class="nav-link {{ request()->is('shipment/fulfilment-pending*') ? 'active' : '' }}">
                  <i class="far fa-check-circle" style="width:20px"></i>
                  <p>Pending</p>
                </a>
              </li>
            <li class="nav-item">
              <a href="{{url('shipment/fulfilment-intransit')}}" class="nav-link  {{ request()->is('shipment/fulfilment-intransit*') ? 'active' : '' }}">
                <i class="fas fa-truck" style="width:20px"></i>&nbsp;
                <p>In Transit</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('shipment/fulfilment-delivered')}}" class="nav-link {{ request()->is('shipment/fulfilment-delivered*') ? 'active' : '' }}">
                <i class="far fa-check-circle" style="width:20px"></i>
                <p>Delivered</p>
              </a>
            </li>
            <li class="nav-item">
                <a href="{{url('shipment/fulfilment-delivery-exception')}}" class="nav-link {{ request()->is('shipment/fulfilment-delivery-exception*') ? 'active' : '' }}">
                    <i class="fas fa-exclamation-circle" style="width:20px" ></i>
                  <p>Delivery Problem</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('shipment/fulfilment-cancelled')}}" class="nav-link {{ request()->is('shipment/fulfilment-cancelled*') ? 'active' : '' }}">
                    <i class="fas fa-times-circle" style="width:20px" ></i>
                  <p>Cancelled</p>
                </a>
              </li>
          </ul>
</li>
<li class="nav-item">
    <a href="{{url('shipment/return')}}" class="nav-link {{ request()->is('shipment/return*') ? 'active' : '' }}">
        {{-- <i class="nav-icon fas fa-undo"></i> --}}
        <p>Returns</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{url('shipment/end-of-day')}}" class="nav-link {{ request()->is('shipment/end-of-day*') ? 'active' : '' }}">
        {{-- <i class="nav-icon fas fa-file-invoice"></i> --}}
        <p>End of Day</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{url('shipment/batch')}}" class="nav-link {{ request()->is('shipment/batch*') ? 'active' : '' }}">
        {{-- <i class="nav-icon fas fa-home"></i> --}}
        <p>Batches</p>
    </a>
</li>
@include('layouts.modal.exportModal')

{{-- @push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/datatable.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('js/datatable.js') }}" defer></script>
@endpush --}}
