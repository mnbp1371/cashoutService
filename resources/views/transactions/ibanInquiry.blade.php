@extends('layouts.app', ['title' => __('CASH_OUT')])
@section('content')
    <div class="card-body">

        <div class="row">
            <form method="post" action="{{route('user.ibanInquiryCall')}}">
                @csrf

                <div class="form-group">
                    <label for="iban">{{__('IBAN')}}</label>
                    <input type="text" class="form-control" id="iban" placeholder="{{__('IBAN')}}" name="iban" required>
                </div>

                <button type="submit" class="btn btn-primary">{{__('INQUIRY')}}</button>
            </form>

        </div>

        <hr>

    @if(!empty($ibanInfo))
            <div class="row">

                <form method="post" action="{{route('user.cashOutPage')}}">
                    <div class="form-group">
                        <label for="name">{{__('IBAN')}}:</label>
                        <label for="iban">{{ $ibanInfo['iban'] ?? ''}}</label>
                        <input type="hidden" class="form-control" name="iban" value="{{$ibanInfo['iban']}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('NAME')}}:</label>
                        <label for="name">{{ $ibanInfo['name'] ?? ''}}</label>
                        <input type="hidden" class="form-control" name="owner_name" value="{{$ibanInfo['name']}}">
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('BANK')}}:</label>
                        <label for="name">{{ $ibanInfo['bank']['title'] ?? ''}}</label>
                    </div>
                    <div class="form-group">
                        <label for="name">{{__('STATUS')}}:</label>
                        <label for="name">{{ $ibanInfo['status']['title'] ?? ''}}</label>
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary">{{__('CASH_OUT')}}</button>
                </form>
            </div>
        @endif
    </div>

@endsection
