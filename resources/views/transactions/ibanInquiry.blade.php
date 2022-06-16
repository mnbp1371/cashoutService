@extends('layouts.app', ['title' => __('CASH_OUT')])
@section('content')
    <div class="card-body">

        <form method="post" action="{{route('user.ibanInquiryCall')}}">
            @csrf

            <div class="form-group">
                <label for="iban">{{__('IBAN')}}</label>
                <input type="text" class="form-control" id="iban" placeholder="{{__('IBAN')}}" name="iban" required>
            </div>

            <button type="submit" class="btn btn-primary">{{__('SUBMIT')}}</button>
        </form>

    </div>

    <hr>
    @if(!empty($ibanInfo))

        <div class="card-body">
            "number" : {{ $ibanInfo['iban'] ?? ''}}
            "number" : {{ $ibanInfo['name'] ?? ''}}
            "number" : {{ $ibanInfo['bank']['title'] ?? ''}}
            "status" : {{ $ibanInfo['status']['title'] ?? ''}}

        </div>
        <form method="post" action="{{route('user.cashOutPage')}}">
            <input type="hidden" class="form-control" name="iban" value="{{$ibanInfo['iban']}}">
            <input type="hidden" class="form-control" name="owner_name" value="{{$ibanInfo['name']}}">
            @csrf
            <button type="submit" class="btn btn-primary">{{__('SUBMIT')}}</button>
        </form>
    @endif
@endsection
