@extends('layouts.app', ['title' => __('CASH_OUT')])
@section('content')
    <div class="card">
        <div class="card-body">
            <h6 class="card-title"></h6>
            <div class="row">
                <div class="col-md-8">
                    <form method="post" action="{{route('user.cashOutCall')}}">
                        @csrf
                        <div class="form-group">
                            <label for="order_id">{{__('ORDER_ID')}} *</label>
                            <input type="text" class="form-control" id="order_id" placeholder="{{__('ORDER_ID')}}" value="{{old('order_id')}}"
                                   name="order_id" required>
                        </div>

                        <div class="form-group">
                            <label for="iban">{{__('IBAN')}} *</label>
                            <input type="text" class="form-control" id="iban" placeholder="{{__('IBAN')}}" name="iban"
                                   required value="{{$iban ?? old('iban')}}">
                        </div>

                        <div class="form-group">
                            <label for="wallet_number">{{__('WALLET_NUMBER')}} *</label>
                            <input type="text" class="form-control" id="wallet_number" value="{{old('wallet_number')}}"
                                   placeholder="{{__('WALLET_NUMBER')}}" name="wallet_number" required>
                        </div>

                        <div class="form-group">
                            <label for="amount">{{__('AMOUNT')}} *</label>
                            <input type="text" class="form-control" id="amount" placeholder="{{__('AMOUNT')}}" value="{{old('amount')}}"
                                   name="amount" required>
                        </div>

                        <div class="form-group">
                            <label for="description">{{__('DESCRIPTION')}} *</label>
                            <input type="text" class="form-control" id="description" placeholder="{{__('DESCRIPTION')}}" value="{{old('description')}}"
                                   name="description" required>
                        </div>

                        <div class="form-group">
                            <label for="national_code">{{__('NATIONAL_CODE')}}</label>
                            <input type="text" class="form-control" id="national_code" value="{{old('national_code')}}"
                                   placeholder="{{__('NATIONAL_CODE')}}" name="national_code">
                        </div>

                        <div class="form-group">
                            <label for="phone">{{__('PHONE')}}</label>
                            <input type="text" class="form-control" id="phone" placeholder="{{__('PHONE')}}" value="{{old('phone')}}"
                                   name="phone">
                        </div>

                        <div class="form-group">
                            <label for="birthday">{{__('BIRTH_DAY')}}</label>
                            <input type="text" class="form-control" id="birthday" placeholder="{{__('BIRTH_DAY')}}" value="{{old('birthday')}}"
                                   name="birthday">
                        </div>

                        <div class="form-group">
                            <label for="owner_name">{{__('OWNER_NAME')}}</label>
                            <input type="text" class="form-control" id="owner_name" placeholder="{{__('OWNER_NAME')}}"
                                   name="owner_name" value="{{ $ownerName ?? old('owner_name') }}">
                        </div>

                        <button type="submit" class="btn btn-primary">{{__('CASH_OUT')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
