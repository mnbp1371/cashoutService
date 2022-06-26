@extends('layouts.app', ['title' => __('TRANSACTION')])
@section('content')
    <div class="card">
        <div class="card-body">
            <h6 class="card-title"></h6>
            <div class="form-group row">
                <label class="col-sm-3"> {{__('TRACK_ID')}} </label>
                <div class="col-sm-9 dltr">
                    {{ $transaction['track_id'] }}
                </div>

                <label class="col-sm-3"> {{__('ORDER_ID')}} </label>
                <div class="col-sm-9 dltr">
                    {{ $transaction['order_id'] }}
                </div>

                <label class="col-sm-3"> {{__('BANK')}} </label>
                <div class="col-sm-9 dltr">
                    {{ $transaction['bank']['title'] }}
                </div>

                <label class="col-sm-3"> {{__('IBAN')}} </label>
                <div class="col-sm-9 dltr">
                    {{ $transaction['iban'] }}
                </div>

                <label class="col-sm-3"> {{__('DEPOSIT')}} </label>
                <div class="col-sm-9 dltr">
                    {{ $transaction['deposit'] }}
                </div>

                <label class="col-sm-3"> {{__('WALLET_NUMBER')}} </label>
                <div class="col-sm-9 dltr">
                    {{ $transaction['wallet_number'] }}
                </div>

                <label class="col-sm-3"> {{__('AMOUNT')}} </label>
                <div class="col-sm-9 dltr">
                    {{ $transaction['amount'] }}
                </div>

                <label class="col-sm-3"> {{__('DESCRIPTION')}} </label>
                <div class="col-sm-9 dltr">
                    {{ $transaction['description'] }}
                </div>

                <label class="col-sm-3"> {{__('STATUS')}} </label>
                <div class="col-sm-9 dltr">
                    {{ $transaction['status']['title'] }}
                </div>

                <label class="col-sm-3"> {{__('REFERENCE')}} </label>
                <div class="col-sm-9 dltr">
                    {{$transaction['settlement_result']['reference_number']}}
                </div>

                <label class="col-sm-3"> {{__('TRACKING')}} </label>
                <div class="col-sm-9 dltr">
                    {{$transaction['settlement_result']['tracking_number']}}
                </div>

                <label class="col-sm-3"> {{__('SETTLED_AT')}} </label>
                <div class="col-sm-9 dltr">
                    @jdatetime($transaction['settlement_result']['settled_at'])
                </div>
            </div>
        </div>
        <div class="card-footer">

        </div>
    </div>
@endsection
