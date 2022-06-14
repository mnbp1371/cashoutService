{{--@foreach($transactions['data'] as $item)--}}
{{--    <a href="{{route('transactions.show', ['transaction'=> $item['id']])}}">--}}
{{--        {{$item['id']}}--}}
{{--    </a>--}}
{{--    <hr>--}}
{{--@endforeach--}}


@extends('layouts.app', ['title' => __('TRANSACTIONS')])
@section('content')
    <h1 class="h3 mb-2 text-gray-800"></h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable">
                    <thead>
                    <tr>
                        <th>{{__('TRACK_ID')}}</th>
                        <th>{{__('TYPE')}}</th>
                        <th>{{__('STATUS')}}</th>
                        <th>{{__('AMOUNT')}}</th>
                        <th>{{__('ORDER_ID')}}</th>
                        <th>{{__('DESTINATION_WALLET_NUMBER')}}</th>
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
                    @foreach($transactions as $item)
                        <tr>
                            <td>{{$item['track_id']}}</td>
                            <td>{{ $item['type']['title'] }}</td>
                            <td>{{ $item['status']['title'] }}</td>
                            <td>{{ $item['amount'] }}</td>
                            <td>{{$item['order_id']}}</td>
                            <td>{{$item['destination_wallet_number']}}</td>
                            <td>{{$item['description']}}</td>
                            <td>{{$item['iban']}}</td>
                            <td>{{$item['deposit']}}</td>
                            <td>{{$item['settlement_result']['reference_number']}}</td>
                            <td>{{$item['settlement_result']['tracking_number']}}</td>
                            <td>@jdatetime($item['settlement_result']['settled_at'])</td>
                            <td>@jdatetime($item['created_at'])</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
    <div class="card-footer">
        @include('layouts.pager')
    </div>
@endsection
