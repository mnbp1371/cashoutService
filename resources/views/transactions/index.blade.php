{{--@foreach($transactions['data'] as $item)--}}
{{--    <a href="{{route('transactions.show', ['transaction'=> $item['id']])}}">--}}
{{--        {{$item['id']}}--}}
{{--    </a>--}}
{{--    <hr>--}}
{{--@endforeach--}}


@extends('layouts.app', ['title' => __('transactions')])
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
                        <th>track_id</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Amount</th>
                        <th>Order id</th>
                        <th>destination wallet number</th>
                        <th>iban</th>
                        <th>deposit</th>
                        <th>reference number</th>
                        <th>tracking number</th>
                        <th>settled at</th>
                        <th>created at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($transactions['data'] as $item)
                        <tr>
                            <td>{{$item['track_id']}}</td>
                            <td>{{ $item['type']['title'] }}</td>
                            <td>{{ $item['status']['title'] }}</td>
                            <td>{{ $item['amount'] }}</td>
                            <td>{{$item['order_id']}}</td>
                            <td>{{$item['destination_wallet_number']}}</td>
                            <td>{{$item['iban']}}</td>
                            <td>{{$item['deposit']}}</td>
                            <td>{{$item['settlement_result']['reference_number']}}</td>
                            <td>{{$item['settlement_result']['tracking_number']}}</td>
                            <td>{{$item['settlement_result']['settled_at']}}</td>
                            <td>{{$item['created_at']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br>
{{--    <div class="card-tools text-center">--}}
{{--        {{ $tippees->links('vendor.pagination.bootstrap-4') }}--}}
{{--    </div>--}}
@endsection
