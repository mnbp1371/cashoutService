@extends('layouts.app', ['title' => __('TRANSACTIONS')])
@section('content')
    <div class="card">
        <div class="card-body">
            <h6 class="card-title"></h6>
            <div class="row">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>{{__('TRACK_ID')}}</th>
                            <th>{{__('TYPE')}}</th>
                            <th>{{__('STATUS')}}</th>
                            <th>{{__('AMOUNT')}}</th>
                            <th>{{__('ORDER_ID')}}</th>
                            <th>{{__('DESCRIPTION')}}</th>
                            <th>{{__('IBAN')}}</th>
                            <th>{{__('DEPOSIT')}}</th>
                            <th>{{__('REFERENCE')}}</th>
                            <th>{{__('TRACKING')}}</th>
                            <th>{{__('SETTLED_AT')}}</th>
                            <th>{{__('CREATED_AT')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                        @foreach($transactions as $item)
                            <tr>
                                <td>{{$item['track_id']}}</td>
                                <td>{{ $item['type']['title'] }}</td>
                                <td>{{ $item['status']['title'] }}</td>
                                <td>{{ $item['amount'] }}</td>
                                <td>{{$item['order_id']}}</td>
                                <td>{{$item['description']}}</td>
                                <td>{{$item['iban']}}</td>
                                <td>{{$item['deposit']}}</td>
                                <td>{{$item['settlement_result']['reference_number']}}</td>
                                <td>{{$item['settlement_result']['tracking_number']}}</td>
                                <td>@jdatetime($item['settlement_result']['settled_at'])</td>
                                <td>@jdatetime($item['created_at'])</td>
                            </tr>
                            @endforeach

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer">
            @include('layouts.pager')
        </div>
    </div>
@endsection
