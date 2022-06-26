<!-- begin::navigation -->
<div class="navigation">


    <!-- begin::navigation menu -->
    <div class="navigation-menu-body">

        <!-- begin::navigation-logo -->
        <div>
            <div id="navigation-logo">
                <a href="{{route('user.dashboard')}}">
                    <img class="logo" src="{{ asset('image/logo.svg') }}" alt="logo">
                    <img class="logo-light" src="{{ asset('image/logo.svg') }}" alt="light logo">
                </a>
            </div>
        </div>
        <!-- end::navigation-logo -->

        <div class="navigation-menu-group">

            <div class="open" id="dashboards">
                <ul>
                    <li class="navigation-divider">{{__('IDPAY')}}</li>
                    <li>
                        <a class="{{ request()->route()->getName() == 'user.dashboard'  ? 'active' : '' }}"
                           href="{{route('user.dashboard')}}">
                            {{__('DASHBOARD')}}
                        </a>
                    </li>
                    <li>
                        <a class="{{ in_array(request()->route()->getName(), [
                              'user.transactions.index',
                              'user.transactions.show',
                           ]) ? 'active' : '' }}"
                           href="{{route('user.transactions.index')}}">
                            {{__('TRANSACTION')}}
                        </a>
                    </li>
                    <li>
                        <a class="{{ in_array(request()->route()->getName(), [
                              'user.ibanInquiryPage',
                              'user.ibanInquiryCall',
                              'user.cashOutPage',
                            ]) ? 'active' : '' }}" href="{{route('user.ibanInquiryPage')}}">
                            {{__('CASH_OUT')}}
                        </a>
                    </li>
                    <li>
                        <a class="" onclick="document.getElementById('logout-form').submit()">
                            {{ __('LOGOUT') }}
                        </a>
                    </li>
                </ul>

                <form action="{{route('logout')}}" method="post" id="logout-form" hidden>
                    @csrf
                    <input type="submit">
                </form>
            </div>
        </div>
    </div>
    <!-- end::navigation menu -->

</div>
<!-- end::navigation -->
