<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">IDPay <sup>CashOut</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{__('Dashboard')}}</span></a>
    </li>

    <!-- Nav Item - Transaction -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('transactions.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Transactions') }}</span></a>
    </li>

    <!-- Nav Item - Transaction -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('cashOutPage') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Cash_Out') }}</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>
