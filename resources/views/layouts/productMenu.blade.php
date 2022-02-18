<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="{{ asset('css/datatable.css') }}">
@push('page_scripts')
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js" defer></script>
<script type="text/javascript" src="{{asset('js/datatable.js')}}" defer></script>
<script type="text/javascript" src="{{asset('js/product.js')}}" defer></script>
@endpush

<li class="nav-item">
    <a href="{{url('product/product')}}" class="nav-link {{ request()->is('product/product*') ? 'active' : '' }}">
        <p>Product</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{url('product/preset-group')}}" class="nav-link {{ request()->is('product/preset-group*') ? 'active' : '' }}">
        {{-- <i class="nav-icon fas fa-undo"></i> --}}
        <p>Preset Group</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{url('product/reporting-category')}}" class="nav-link {{ request()->is('product/reporting-category*') ? 'active' : '' }}">
        {{-- <i class="nav-icon fas fa-file-invoice"></i> --}}
        <p>Reporting Category</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{url('product/inventory')}}" class="nav-link {{ request()->is('product/inventory*') ? 'active' : '' }}">
        {{-- <i class="nav-icon fas fa-home"></i> --}}
        <p>Inventory</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{url('product/voidProduct')}}" class="nav-link {{ request()->is('product/voidProduct*') ? 'active' : '' }}">
        {{-- <i class="nav-icon fas fa-home"></i> --}}
        <p>Void Product Report</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{url('product/availableProduct')}}" class="nav-link {{ request()->is('product/availableProduct*') ? 'active' : '' }}">
        {{-- <i class="nav-icon fas fa-home"></i> --}}
        <p>Available Product Report</p>
    </a>
</li>
@include('layouts.modal.exportModal')

{{-- @push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/datatable.css') }}">
@endpush
@push('scripts')
<script src="{{ asset('js/datatable.js') }}" defer></script>
@endpush --}}
