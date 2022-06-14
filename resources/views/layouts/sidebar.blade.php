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
        <a class="nav-link" href="{{ route('user.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{__('Dashboard')}}</span></a>
    </li>

    <!-- Nav Item - Transaction -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('user.transactions.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Transactions') }}</span></a>
    </li>

    <!-- Nav Item - CashOut -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('user.cashOutPage') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('CashOut') }}</span></a>
    </li>

    <!-- Nav Item - Transaction -->
    <li class="nav-item active">
        <a class="nav-link"
           onclick="document.getElementById('logout-form').submit()"
        >
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>{{ __('Logout') }}</span></a>
    </li>

    <form action="{{route('logout')}}" method="post" id="logout-form" hidden>
        @csrf
        <input type="submit">
    </form>

    <!-- Divider -->
    <hr class="sidebar-divider">

</ul>
