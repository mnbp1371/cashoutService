@extends('layouts.app', ['title' => __('CASH_OUT')])
@section('content')
    <div class="card-body">


        <div class="card">
            <div class="card-body">
                <h6 class="card-title"></h6>
                <div class="row">
                    <div class="col-md-8">

                        <form method="post" action="{{route('user.ibanInquiryCall')}}">
                            @csrf

                            <div class="form-group">
                                <label for="exampleInputEmail1">{{__('IBAN')}}</label>
                                <input type="text" class="form-control" id=""
                                       aria-describedby="emailHelp" placeholder="{{__('ENTER_YOUR_IBAN')}}" name="iban" value="{{$ibanInfo['iban'] ?? old('iban')}}"
                                       required>
                            </div>

                            <button type="submit" class="btn btn-primary">{{__('INQUIRY')}}</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-footer">
            </div>
        </div>

        <hr>

        @if(!empty($ibanInfo))
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">{{ __('IBAN_INFORMATION') }}</h6>
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>{{__('DEPOSIT')}}</th>
                                    <th>{{__('IBAN')}}</th>
                                    <th>{{__('OWNER_NAME')}}</th>
                                    <th>{{__('BANK')}}</th>
                                    <th>{{__('STATUS')}}</th>
                                    <th>{{__('CASH_OUT')}}</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <tr>
                                    <td>{{$ibanInfo['number'] ?? ''}}</td>
                                    <td>{{ $ibanInfo['iban'] ?? ''}}</td>
                                    <td>{{ $ibanInfo['name'] ?? ''}}</td>
                                    <td>{{ $ibanInfo['bank']['title'] ?? ''}}</td>
                                    <td>{{$ibanInfo['status']['title'] ?? ''}}</td>
                                    <td>
                                        <form method="get" action="{{route('user.cashOutPage')}}">
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="iban" value="{{$ibanInfo['iban'] ?? ''}}">
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" class="form-control" name="owner_name" value="{{$ibanInfo['name'] ?? ''}}">
                                            </div>
                                            <button type="submit" class="btn btn-primary">{{__('CASH_OUT')}}</button>
                                        </form>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                </div>
            </div>

{{--            <div class="row">--}}


{{--            </div>--}}
        @endif
    </div>

@endsection
