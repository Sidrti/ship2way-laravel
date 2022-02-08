@push('page_scripts')
<script src="{{asset('js/insightMain.js')}}" type="text/javascript" defer></script>
@endpush
<li class="nav-item">
    <a href="/insight/overview" class="nav-link {{ request()->is('insight/overview*') ? 'active' : '' }}">
        {{-- <i class="nav-icon fas fa-undo"></i> --}}
        <p>Overview</p>
    </a>
</li><li class="nav-item">
    <a href="/insight/operation" class="nav-link {{ request()->is('insight/operation*') ? 'active' : '' }}">
        {{-- <i class="nav-icon fas fa-undo"></i> --}}
        <p>Operations</p>
    </a>
</li><li class="nav-item">
    <a href="/insight/customer-engagement" class="nav-link {{ request()->is('insight/customer-engagement*') ? 'active' : '' }}">
        {{-- <i class="nav-icon fas fa-undo"></i> --}}
        <p>Customer Engagement</p>
    </a>
</li><li class="nav-item">
    <a href="/insight/sales" class="nav-link {{ request()->is('insight/sales*') ? 'active' : '' }}">
        {{-- <i class="nav-icon fas fa-undo"></i> --}}
        <p>Sales Trend</p>
    </a>
</li>
<li class="nav-item">
    <a href="/insight/customer-overview" class="nav-link {{ request()->is('insight/customer-overview*') ? 'active' : '' }}">
        {{-- <i class="nav-icon fas fa-undo"></i> --}}
        <p>Customer Overview</p>
    </a>
</li>
<li class="nav-item">
    <a href="/insight/product-highlight" class="nav-link {{ request()->is('insight/product-highlight*') ? 'active' : '' }}">
        {{-- <i class="nav-icon fas fa-undo"></i> --}}
        <p>Products Highlights</p>
    </a>
</li>
